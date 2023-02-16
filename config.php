<?php

return [
  'sitename' => 'The Official jQuery Podcast',
  'playerImage' => 'https://cdn.jquery.net/podcast/wp-content/uploads/2010/09/jquerypodcast.png',
  'baseUrl' => '/',
  'build' => [
    // 'source' => 'source',
    // 'destination' => 'build_{env}',
  ],
  'collections' => [
    'posts' => [
      'extends' => '_layouts.post',
      'sort' => '-date',
    ],
  ],
  'excerpt' => function ($page) {
    $lines = html_entity_decode( strip_tags( $page->getContent() ) );
    return explode("\n", $lines, 2)[0];
  },
  'getPermalink' => function ($page) {
    // https://github.com/tighten/jigsaw/issues/679
    return rtrim( $page->getUrl(), '/' ) . '/';
  },
];
