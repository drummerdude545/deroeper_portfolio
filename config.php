<?php

// use this config file to overwrite the defaults from default_config.php
// or to make local config changes.
$config = array();

//start of added config items
$config['theme'] = 'blog';
$config['site_title'] = 'DRD';

// some defaults for the pages
$config['date_format'] = 'jS F, Y'; // 11th November, 2013
$config['pages_order_by'] = 'title'; // this is a blog so date ordering
$config['pages_order'] = 'desc';
$config['base_url'] = \Phile\Utility::getBaseUrl();

// disable the cache for this theme since we are in development
$config['plugins'] = array(
  'philePhpFastCache' => array('active' => false),
  'phileSimpleFileDataPersistence' => array('active' => false),
  'phileTwigFilters' => array('active' => false),
  'philePageShuffle' => array('active' => true)
);

// it is important to return the $config array!
return $config;
