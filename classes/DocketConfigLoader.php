<?php

#
#
# DocketConfigLoader
#
# (c) Dmitriy Lomov
#
#
#

class DocketConfigLoader
{
  //Array with configuration data
  public $configData = '';

  //Load configuration file and decode it
  public function loadConfig($config_url)
  {
    $rawJson = file_get_contents($config_url);
    $this->configData = json_decode($rawJson);

    return $this;
  }
}
