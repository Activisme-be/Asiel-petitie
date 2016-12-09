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

$config['app_name']         = 'Theo Francken!';
$config['app_description']  = 'Naar aanleiding van de uitspraken die Theo Franken de laatste dagen deed, ook het weigeren van de wet te volgen vinden wij het nodig om te reageren en hebben wij een mail systeem gemaakt om hem daar op te wijzen! alvast bedankt om ook deel te nemen namens activisme.be!';
$config['app_author']       = 'Tom Manheaghe - Activisme.be';

$config['image_front']      = 'assets/img/front.jpg';
$config['image_background'] = 'http://slidesjs.com/examples/standard/img/example-slide-1.jpg';

$config['email_header']     = 'Eis je recht als burger, tegen Francken.';
$config['email_deliver']    = ['kab.francken@ibz.fgov.be', 'theo.francken@n-va.be'];