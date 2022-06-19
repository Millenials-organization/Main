<?php
require ('stripe-php-master/init.php');

$publishableKey=
"pk_test_51KLJ2JLr4PODwaQOvEd2YpffIWKydBfNl4VXKwF27KqUMrCWiqLHYSbXzYd9rpZ2aIAAbVsF9wfI18J9prIhDAat00hCcJLXXv";
$secretKey=
"sk_test_51KLJ2JLr4PODwaQO95ZFtpMOeqWi92w4wJPLCPhUdvIac4vcnSub4EKmxisBAST6m4Q0aMAoy1epIiAUV4q1q1qd00mR2ZZ0L9";

\stripe\Stripe::setApiKey($secretKey);
?>