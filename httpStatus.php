<?php
/**
 * Created by ReddingWebDev.
 * User: Jason Olson
 * Date: 3/5/2019
 * Time: 9:28 AM
 * License: MIT
 */

namespace RedWebDev;


class httpStatus
{
    function status($url) // only tlg sends correct error codes
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