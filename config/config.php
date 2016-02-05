<?php
/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 11.01.2016
 * Time: 15:56
 */

Config::set('site_name', 'Your site name');

Config::set('languages', array('en','fr'));

// Routers. Route name => method prefix
Config::set('routes',array
(
    'default' => '',
    'admin' => 'admin_',
)
);

Config::set('default_route','default');
Config::set('default_language','en');
Config::set('default_controller','pages');
Config::set('default_action','index');

Config::set('db.host','localhost');
Config::set('db.user','root');
Config::set('db.password','');
Config::set('db.db_name','mvc');

Config::set('salt','njg05ektgn80kl');