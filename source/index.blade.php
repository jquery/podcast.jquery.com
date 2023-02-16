---
title: The Official jQuery Podcast
home: true
---

@extends('_layouts.page')

@section('content')
<p>A weekly show that aims to interview key members of the jQuery Community and present jQuery news from the past week. The show is co-hosted by Ralph Whitbeck and Rey Bango both members of the jQuery Developer Relations team.</p>

<p>Listen on <a href="https://podcasts.apple.com/podcast/id339835419">Apple Podcasts</a>, <a href="https://pca.st/itunes/339835419">Pocket Casts</a>, <a href="https://overcast.fm/itunes339835419">Overcast</a>, or use the <a href="https://feeds.feedburner.com/jQueryPodcast">RSS Feed</a>.</p>

@foreach ($posts as $post)
<article>
    <h2><a href="{{ $post->getPermalink() }}">{{ $post->title }}</a></h2>
    <div class="post-meta">Posted on <a href="{{ $post->getPermalink() }}" rel="bookmark"><time class="entry-date" datetime="{{ date('c', strtotime( $post->date ) ) }}" pubdate="">{{ date('F j, Y', strtotime( $post->date ) ) }}</time></a></div>
    <p>{{ $post->excerpt() }}</p>
</article>
@endforeach
@endsection
