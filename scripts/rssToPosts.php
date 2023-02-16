<?php
const POSTS_DIR = __DIR__ . '/../source/_posts';
const ARCHIVE_RSS_FILE = __DIR__ . '/../source/feed/jQueryPodcast.xml';
const ARCHIVE_HTML_FILE = __DIR__ . '/archives.html';
const POST_TEMPLATE = '
---
title: {title}
date: {date}
slug: {slug}
path: {path}
enclosure: {enclosure}
---
{summary}

Host: {author}.

<audio src="{enclosure}" controls=""></audio>
';

function archiveRssToPosts(string $xmlFile, string $htmlFile) {
  $permalinks = [];
  $dom = new DOMDocument();
  $dom->loadXml(file_get_contents($htmlFile));
  foreach ($dom->getElementsByTagName('a') as $element) {
    $href = $element->getAttribute('href');
    $path = parse_url($href, PHP_URL_PATH);

    $number = preg_replace('/^Episode (\d+).*$/', '$1', $element->textContent);
    $permalinks[$number] = $path;
  }

  $xml = file_get_contents($xmlFile);
  $dom = new DOMDocument();
  $dom->loadXml($xml);

  foreach ($dom->getElementsByTagName('item') as $item) {
    $title = $item->getElementsByTagName('title')[0]->textContent;
    $summary = $item->getElementsByTagName('summary')[0]->textContent;
    $author = $item->getElementsByTagName('author')[0]->textContent;
    $pubDate = $item->getElementsByTagName('pubDate')[0]->textContent;
    $enclosure = $item->getElementsByTagName('enclosure')[0]->getAttribute('url');

    $dateObj = new DateTime($pubDate);
    $dateObj->setTimezone(new DateTimeZone('-05:00'));
    $date = $dateObj->format('c');

    $number = preg_replace('/^(\d+).*$/', '$1', $title);
    $permalink = $permalinks[$number];

    // Jigsaw treats a "path" override without any {brace} placeholders
    // as a prefix. So rather than set an explicit path, translate the
    // last segment to {filename} and use that indirection instead.
    $segments = explode('/', rtrim($permalink, '/'));
    $slug = array_pop($segments);
    $path = implode('/', $segments) . '/{slug}/';

    $filename = "episode-$number";

    yield [
      'filename' => $filename,
      'title' => $title,
      'date' => $date,
      'slug' => $slug,
      'path' => $path,
      'summary' => $summary,
      'author' => $author,
      'enclosure' => $enclosure,
    ];
  }
}

$posts = archiveRssToPosts(ARCHIVE_RSS_FILE, ARCHIVE_HTML_FILE);
$jsonFlags = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES;
foreach ($posts as $post) {
  @mkdir(POSTS_DIR, 0777, true);
  file_put_contents(
    POSTS_DIR . '/' . $post['filename'] . '.md',
    strtr(trim(POST_TEMPLATE) . "\n", [
      '{title}' => json_encode( $post['title'], $jsonFlags ),
      '{date}' => json_encode( $post['date'], $jsonFlags ),
      '{slug}' => json_encode( $post['slug'], $jsonFlags ),
      '{path}' => json_encode( $post['path'], $jsonFlags ),
      '{summary}' => htmlspecialchars( $post['summary'] ),
      '{author}' => htmlspecialchars( $post['author'] ),
      '{enclosure}' => htmlspecialchars( $post['enclosure'] ),
    ])
  );
}
