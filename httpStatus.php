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

namespace RedWebDev;


class httpStatus
{
    function status($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 0); // can set to another number if you want to follow redirects
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true); // this speeds thing up by only returning the header data
        curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return $status;
    }
    
}