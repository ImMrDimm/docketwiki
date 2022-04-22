<?php

#
#
# DocketParser
#
# (c) Dmitriy Lomov
#
#
#

class DocketStringNormalize
{
  //Normalize string
  function normalize($string)
  {
    $string = str_replace("_", " ", $string);    
    return $string;
  }

}
