<?php
/**
 * Copyright (c) 2019. ReddingWebPro / Jason J. Olson, This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published by the Free Software Foundation version 3
 * of the License.
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License
 * for more details. You should have received a copy of the GNU General Public License along with this program.  If not,
 * see <https://www.gnu.org/licenses/>.
 */

/**
 * Created by ReddingWebPro/ReddingWebDev
 * User: Jason J. Olson
 * License: GNU GPLv3
 * GitHub: https://github.com/reddingwebpro/php-get-http-status
 * Date: 3/6/2019
 */

require 'httpStatus.php';
$url = "https://google.com"; // url to test
$http = new \RedWebDev\httpStatus();
$status = $http->status($url);