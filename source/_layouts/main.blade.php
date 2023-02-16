<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>{{ !$page->home ? "$page->title | $page->sitename" : $page->sitename }}</title>
  <link rel="stylesheet" href="/assets/main.css"/>
  <link rel="shortcut icon" href="/favicon.ico"/>
  <link rel="alternate" type="application/rss+xml" title="{{ $page->sitename }}" href="https://feeds.feedburner.com/jQueryPodcast"/>
  <meta name="generator" content="Jigsaw"/>
  <meta name="viewport" content="width=device-width"/>
@yield('head')
</head>
<body>
  <nav>
    <ul class="global-menu">
      <li><a href="https://jquery.com">jquery.com</a></li>
      <li><a href="https://api.jquery.com">API Documentation</a></li>
      <li><a href="https://blog.jquery.com">Blog</a></li>
    </ul>
    <span class="logo"><a href="/" title="{{ $page->sitename }}">{{ $page->sitename }}</a></span>
    <ul class="site-menu">
      <li><a href="/">Home</a></li>
      <li><a href="/about/">About</a></li>
      <li class="spacer"></li>
      <li><a href="https://podcasts.apple.com/podcast/id339835419">Apple Podcasts</a></li>
      <li><a href="https://pca.st/itunes/339835419">Pocket Casts</a></li>
      <li><a href="https://overcast.fm/itunes339835419">Overcast</a></li>
      <li><a href="https://feeds.feedburner.com/jQueryPodcast">RSS</a></li>
    </ul>
  </nav>
  <main>
@yield('beforecontent')@yield('content')
  </main>
  <footer>&copy; 2010 <a href="https://jquery.org/team/">jQuery Foundation</a>. <a href="https://github.com/jquery/podcast.jquery.com">Source code</a>.</footer>
</body>
</html>
