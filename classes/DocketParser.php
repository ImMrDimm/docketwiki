<?php

#
#
# DocketParser
#
# (c) Dmitriy Lomov
#
#
#

class DocketParser
{
  //Parser Vars
  public $mdData = '';

  //Constructor
  function __construct()
  {
    $this->mdData = '';
  }

  //Load MD file and parse it
  function loadRawMd($md_url)
  {
    $md_url = 'documents/'.$md_url.'.md';
    $rawMd  = '';
    if(file_exists($md_url))
    {
      $rawMd = file_get_contents($md_url);
    }
    else
    {
      $md_url = 'documents/errors/404.md';
      $rawMd = file_get_contents($md_url);
    }

    $this->mdData = $rawMd;

    return $this;
  }
}
