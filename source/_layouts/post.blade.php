@extends('_layouts.main')

@section('head')
  <meta property="og:title" content="{{ $page->title }}"/>
  <meta property="og:site_name" content="{{ $page->sitename }}"/>
  <meta property="og:image" content="{{ $page->playerImage }}"/>
  <meta property="og:audio" content="{{ $page->enclosure }}"/>
  <meta property="og:audio:type" content="audio/mpeg"/>
  <meta property="og:description" content="{{ $page->excerpt() }}"/>
  <meta name="description" content="{{ $page->excerpt() }}"/>
@if ($page->overcast_id)
  <meta name="twitter:card" content="player"/>
  <meta name="twitter:player" content="https://overcast.fm/podcasts/episode_card/{{ $page->overcast_id }}?t=0" />
  <meta name="twitter:player:width" content="290"/>
  <meta name="twitter:player:height" content="58"/>
@endif
@endsection

@section('beforecontent')
<h1>{{ $page->title }}</h1>
<div class="post-meta"><span class="sep">Posted on </span><a href="{{ $page->getPermalink() }}" rel="bookmark"><time class="entry-date" datetime="{{ date('c', strtotime( $page->date ) ) }}" pubdate="">{{ date('F j, Y', strtotime( $page->date ) ) }}</time></a></div>
@endsection

@section('content')
<div class="post-nav">
  <div>
	@if ($page->getNext())
  &#8592; Previous<br><a href="{{ $page->getNext()->getPermalink() }}">{{ $page->getNext()->title }}</a>
  @endif
  </div>
  <div class="post-nav-next">
	@if ($page->getPrevious())
  Next &#8594;<br><a href="{{ $page->getPrevious()->getPermalink() }}">{{ $page->getPrevious()->title }}</a>
  @endif
  </div>
</div>
@append
