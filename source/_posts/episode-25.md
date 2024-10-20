---
title: "25 - Meeno Van Slooten"
date: "2010-06-04T08:00:00-05:00"
slug: "episode-25-menno-van-slooten"
path: "/2010/06/04/{slug}/"
enclosure: https://content.jquery.com/podcast/jQueryPodcast-025-MeenoVanSlooten.mp3
---
This week we sat down with Meeno Van Slooten who was a speaker at the Bay Area jQuery Conference 2010 and showed off a cool new UI Testing Framework he developed.

Host: Ralph Whitbeck &amp; Rey Bango.

<audio src="https://content.jquery.com/podcast/jQueryPodcast-025-MeenoVanSlooten.mp3" controls=""></audio>

## Interview

This week Rey and I sat down with Menno Van Slooten at the Bay Area jQuery Conference 2010. Menno gave a presentation about automated UI testing and focused on a framework he has developed at eBuddy to do UI testing on our their web messenger.

Rey is travelling to TXJS this week so I had [Doug Neiner](https://dougneiner.com/) sit in as we talk about this weeks plugin and tutorial of the week.

## Links from the show

* [Menno Van Slooten](http://web.archive.org/web/20111102180318/http://www.mennovanslooten.nl/)
* [eBuddy](https://www.ebuddy.com/) ([archived](http://web.archive.org/web/20101105223730/http://www.ebuddy.com/))
* Rey Bango’s Video of the interview ([archived](http://web.archive.org/web/20100709111136/http://blip.tv/file/3579912))
* [Menno Van Slooten’s Automated UI Testing](https://github.com/mennovanslooten/UITest) on GitHub
* Demo of UI Testing framework ([archived](http://web.archive.org/web/20100501213653/http://experiments.mennovanslooten.nl/2010/uitest/index.html))

## Plugin of the week

[Signs of a poorly written jQuery Plugin](https://remysharp.com/2010/06/03/signs-of-a-poorly-written-jquery-plugin/)

When you’re evaluating plugins for use in your application how do you know if the plugin you are using is any good. Remy Sharp wrote up a quick guide of some “red flags” to look for in poorly written plugins. Here are just a couple great tips on things to look for in a poor plugin:

_Double jQuery_ — When you create a function on the jQuery.fn namespace this actually refers to the jQuery Collection being passed in so there is no need to wrap it again in a jQuery wrapper.

_Wasteful each_ – Don’t bind an event on each element individually within the jQuery collection just bind it to the whole collection and forget the each. Binding it to each item individually is wasteful and slow.

## Tutorial of the week

[How to Debug Your jQuery Code](http://msdn.microsoft.com/en-us/scriptjunkie/ee819093.aspx) by Elijah Manor ([archived](http://web.archive.org/web/20101111194009/http://msdn.microsoft.com/en-us/scriptjunkie/ee819093.aspx)).

Tools, strategies and best practices for debugging your jQuery code.
