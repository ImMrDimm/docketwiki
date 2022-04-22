<?php

#
#
# DocketParser
#
# (c) Dmitriy Lomov
#
#
#

class DocketRoute
{
  //Get url and load defined MD-file
  function loadRoute($url, $root_url)
  {
    $url = str_replace($root_url, "", $url);
    $parts = explode('/', $url);
    return $parts;
  }

}
