# podcast.jquery.com

The static site is generated by [Jjigsaw](https://jigsaw.tighten.com/docs/building-and-previewing/) with [Blade templates](https://laravel.com/docs/9.x/blade).

## Prerequisites

* PHP 7.4 or later, with [Composer](https://getcomposer.org/).

## Development

* Install or update dependencies:
  ```
  composer install
  ```

* Start a web server for local development at <http://localhost:4000/>:
  ```
  composer serve
  ```

* Build the site to `build_production/`, to commit and deploy:
  ```
  composer build
  ```
