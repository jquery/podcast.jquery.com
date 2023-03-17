---
title: "30 - Chris Coyier"
date: "2010-07-30T08:00:00-05:00"
slug: "episode-30-chris-coyier"
path: "/2010/07/30/{slug}/"
enclosure: http://content.jquery.com/podcast/jQueryPodcast-030-ChrisCoyier.mp3
---
We talk to Chris Coyier about jQuery, css-tricks.com and Wufoo .

Host: Ralph Whitbeck &amp; Rey Bango.

<audio src="http://content.jquery.com/podcast/jQueryPodcast-030-ChrisCoyier.mp3" controls=""></audio>

## Interview

In our 30th episode, we talk with [Chris Coyier](http://chriscoyier.net/) of CSS-Tricks. Chris also works for Wufoo, an online form builder service.  Chris talks about his inspiration for writing for CSS-Tricks and we look at his jQuery snippets, freebies and screen casts.  We learn what Wufoo is and talk about the new API for Wufoo.  Chris shows us the new Wufoo jQuery API Wrapper and we talk about  the choice of putting the plugin on the jQuery namespace verses making it its own global object.  Finally, we talk about how designers and developers responsibilities are becoming more blurred as it evolves and changes.

## Links from this show

* [CSS-Tricks](http://css-tricks.com/)
* [Anything Slider](http://css-tricks.com/anythingslider-jquery-plugin/)
* [jQuery Snippets](http://css-tricks.com/snippets/jquery/)
* [jQuery Tweetify Text Snippet from CSS-Tricks](http://css-tricks.com/snippets/jquery/jquery-tweetify-text/)
* [Wufoo](http://wufoo.com/) – online form builder
* Wufoo jQuery API Wrapper ([archived](https://web.archive.org/web/20100725013018/http://github.com/wufoo/Wufoo-API-Wrappers))
* [Dig into WordPress](http://digwp.com/)

## Plugin of the week

jQuery.Validity ([archived](http://web.archive.org/web/20110810095227/http://validity.thatscaptaintoyou.com/))

Very light weight Validation plugin for simple forms with simple validation rules. Here’s an example of the jQuery needed to make a couple of fields required and match a specific format.

```js
$("form").validity(function() {
    $("#vehicles")                      // The first input:
        .require()                          // Required:
        .match("number")                    // In the format of a number:
        .range(4, 12);                      // Between 4 and 12 (inclusively):

    $("#dob")                           // The second input:
        .require()                          // Required:
        .match("date")                      // In the format of a date:
        .lessThanOrEqualTo(new Date());     // In the past (less than or equal to today):
});
```

We still feel that [Jörn Zafferer’s Validation plugin](http://bassistance.de/jquery-plugins/jquery-plugin-validation/) is the best as it will provide the most robust and customizable solution to your needs but felt that this light weight plugin would work well in smaller forms.

## Tutorial of the week

Enterprise jQuery ([archived](http://web.archive.org/web/20110219104449/http://enterprisejquery.com/))

A site, from [appendTo](http://appendto.com/), geared to help corporations that are just now adapting jQuery. It helps them learn how to use jQuery with best practices in mind so that their code is easy to maintain in a team environment.  We mention a few articles from the site:

* [Mock Your Ajax Requests with Mockjax for Rapid Development](http://web.archive.org/web/20101122212302/http://enterprisejquery.com/2010/07/mock-your-ajax-requests-with-mockjax-for-rapid-development/)
* [Configuring UI widgets and interactions with .live() and .delegate()](http://web.archive.org/web/20140211221521/http://appendto.com/2010/07/configuring-ui-widgets-and-interactions-with-live/)
* [Multipart Series articles](http://web.archive.org/web/20140209054037/http://appendto.com/category/multipart-series/)
