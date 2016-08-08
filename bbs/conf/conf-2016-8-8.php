<?php
return array (
  'db' => 
  array (
    'type' => 'mysql',
    'mysql' => 
    array (
      'master' => 
      array (
        'host' => '127.0.0.1',
        'user' => 'zibofang',
        'password' => 'ZIBOFANG123',
        'name' => 'zibofang',
        'charset' => 'utf8',
        'engine' => 'MyISAM',
      ),
      'slaves' => 
      array (
      ),
    ),
    'pdo_mysql' => 
    array (
      'master' => 
      array (
        'host' => 'localhost',
        'user' => 'root',
        'password' => 'root',
        'name' => 'test',
        'charset' => 'utf8',
        'engine' => 'myisam',
      ),
      'slaves' => 
      array (
      ),
    ),
  ),
  'cache' => 
  array (
    'enable' => true,
    'type' => 'mysql',
    'memcached' => 
    array (
      'host' => 'localhost',
      'port' => '11211',
    ),
    'redis' => 
    array (
      'host' => 'localhost',
      'port' => '6379',
    ),
  ),
  'tmp_path' => './tmp/',
  'log_path' => './log/',
  'static_url' => 'static/',
  'upload_url' => 'upload/',
  'upload_path' => './upload/',
  'sitename' => '阿里蜘蛛池',
  'timezone' => 'Asia/Shanghai',
  'lang' => 'zh-cn',
  'runlevel' => 5,
  'runlevel_reason' => '站点正在维护中，请稍后访问。',
  'cookie_domain' => '',
  'cookie_path' => '/',
  'auth_key' => '6c7ce7c5901e4292f868e9eb3348d05c7d1dfc8a4628205e58f0346faff831cc',
  'pagesize' => 20,
  'postlist_pagesize' => 1000,
  'cache_thread_list_pages' => 10,
  'online_update_span' => 120,
  'online_hold_time' => 3600,
  'seo_url_rewrite' => 1,
  'upload_image_width' => 927,
  'new_thread_days' => 3,
  'order_default' => 'lastpid',
  'update_views_on' => 1,
  'agrees_level' => 
  array (
    0 => 30,
    1 => 80,
    2 => 150,
    3 => 300,
  ),
  'posts_level' => 
  array (
    0 => 10,
    1 => 50,
    2 => 100,
    3 => 500,
  ),
  'version' => '3.0',
  'cdn_on' => true,
  'cate' => 
  array (
    1 => '页脚文章',
    2 => '公司动态',
  ),
  'user_create_email_on' => 1,
  'user_find_pw_on' => 1,
  'banip_on' => 0,
  'ipaccess_on' => 0,
  'ipaccess' => 
  array (
    'mails' => 0,
    'users' => 0,
    'threads' => 0,
    'posts' => 0,
    'attachs' => 0,
    'attachsizes' => 0,
    'action1' => 0,
    'action2' => 0,
    'action3' => 0,
    'action4' => 0,
  ),
  'check_flood_on' => 0,
  'check_flood' => 
  array (
    'users' => 10,
    'posts' => 10,
    'threads' => 5,
  ),
  'badword_on' => 0,
  'tietuku_on' => 1,
  'tietuku_token' => '566e846a01b06ea07ef8238b92955ece563a594a:RfwxJD-nCqoz31Mbps2D0Atsioc=:eyJkZWFkbGluZSI6MTQ3MDYzMDY2NywiYWN0aW9uIjoiZ2V0IiwidWlkIjoiNTcxNDk0IiwiYWlkIjoiMTIzNjM0NCIsImZyb20iOiJmaWxlIn0=',
  'installed' => 0,
);
?>