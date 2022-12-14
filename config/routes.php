<?php

use svdsu\Router;

Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' => 'admin']);
Router::add('^admin/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['admin_prefix' => 'admin']);

Router::add('^/?news/?$', ['controller' => 'News', 'action' => 'view']);
Router::add('^/?news/(?P<slug>[a-z0-9-]+)/?$', ['controller' => 'News', 'action' => 'index']);
Router::add('^/?objects/?$', ['controller' => 'Objects', 'action' => 'view']);
Router::add('^/?page/(?P<slug>[a-z0-9-]+)/?$', ['controller' => 'Page', 'action' => 'view']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
