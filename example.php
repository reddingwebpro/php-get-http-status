<?php
/**
 * Created by PhpStorm.
 * User: jason_06tt1g7
 * Date: 3/5/2019
 * Time: 9:30 AM
 */

require 'httpStatus.php';

$url = "https://google.com"; // url to test

$http = new \RedWebDev\httpStatus();

$status = $http->status($url);
