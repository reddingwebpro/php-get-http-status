<?php
/**
 * Created by ReddingWebDev.
 * User: Jason Olson
 * Date: 3/5/2019
 * Time: 9:28 AM
 * License: MIT
 */
require 'httpStatus.php';
$url = "https://google.com"; // url to test
$http = new \RedWebDev\httpStatus();
$status = $http->status($url);