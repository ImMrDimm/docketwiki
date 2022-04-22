<?php

include('classes/DocketRoute.php');
include('classes/DocketConfigLoader.php');
include('classes/DocketParser.php');
include('classes/DocketStringNormalize.php');

include('libs/Parsedown/Parsedown.php');
include('libs/ParsedownExtra/ParsedownExtra.php');


$config = new DocketConfigLoader;
$config->loadConfig("config.json");

$router = new DocketRoute();
$parts = $router->loadRoute($_SERVER[REQUEST_URI], $config->configData->wiki_root_url);

$loadedUrl = '';
$current_page_name = '';

if(count($parts) >= 1)
{
	if(count($parts) == 1)
	{
		if($parts[0] == '')
		{
			$loadedUrl = $config->configData->start_page;
			$current_page_name = $loadedUrl;
		}
		else
		{
			$loadedUrl = $parts[0];
			$current_page_name = $loadedUrl;
		}
	}
	else
	{
		$counter = 1;
		$limit   = count($parts);
		foreach($parts as $part)
		{
			$loadedUrl = $loadedUrl . $part;

			if($counter != $limit)
			{
				$loadedUrl = $loadedUrl . '/';
			}
			else
			{
				$current_page_name = $part;
			}
			$counter++;
		}
	}
}

$parser = new DocketParser();

$normalizer = new DocketStringNormalize;

include('layouts/template/app.php');
?>
