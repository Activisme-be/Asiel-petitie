<?php

/**
 * -----------------------------------------------------------------------------
 * SPECIFIC PLATFORM CONFIGURATION.
 * -----------------------------------------------------------------------------
 *
 * ['app_name']          = The application name.
 * ['app_description']   = A short meta dezcription for the application.
 * ['app_author']        = The application author.
 *
 * ['front_image']       = The frontpage image for the application.
 * ['image_background']  = The backgroun page for the application.
 *
 * ['email header']      = The email subject.
 * ['email_deliver']     = The deliver addresses for the mail. -> could be array ex. ['value1', value2];
 *
 */

$config['app_name']         = 'Stop Theo Francken!';
$config['app_description']  = '';
$config['app_author']       = 'Tom Manheaghe - Activisme.be';

$config['image_front']      = 'http://static0.hln.be/static/photo/2016/0/4/5/20160126173037/media_xll_8350880.jpg';
$config['image_background'] = 'http://slidesjs.com/examples/standard/img/example-slide-1.jpg';

$config['email_header']     = 'Eis je recht als burger, tegen Francken.';
$config['email_deliver']    = ['oliver.nimet@gmail.com', 'topairy@gmail.com', 'tom@activisme.be'];