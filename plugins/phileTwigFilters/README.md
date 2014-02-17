Twig-Filters-Plugin
===================

An example plugin for [Phile](https://github.com/PhileCMS/Phile) showing how to make [Twig filters](http://twig.sensiolabs.org/doc/advanced.html#filters).

### Installation

* Install [Phile](https://github.com/PhileCMS/Phile)
* Clone this repo into `plugins/phileTwigFilters`
* add `$config['plugins']['phileTwigFilters'] = array('active' => true);` to your `config.php`

### Usage

There will now be a new twig filter called `excerpt`. It grabs the first paragraph of the content string.

So you can use it like {{ content|excerpt }} and it will print the first paragraph from that pages markdown file.

There will also be a filter called `limit_words`. It is used in the same way, and the limit is controlled in the [plugins config file](https://github.com/PhileCMS/Twig-Filters-Plugin/blob/master/config.php#L3).

### Adding More Filters

See the [Twig Documentation on creating filters](http://twig.sensiolabs.org/doc/advanced.html#filters).
