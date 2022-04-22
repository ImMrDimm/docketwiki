<!doctype html>
<html lang="en">
	<head>

    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
    <meta name="keywords" content="">

    <title><?php echo $config->configData->wiki_name; ?></title>

		<link href="<?php echo $config->configData->wiki_root_url; ?>assets/css/style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->configData->wiki_root_url; ?>/assets/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->configData->wiki_root_url; ?>/assets/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->configData->wiki_root_url; ?>/assets/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $config->configData->wiki_root_url; ?>/assets/favicon/site.webmanifest">

	</head>

	<body>

    <div class="layout">
      <?php
				include('layouts/sidebar/sidebar.php');
			?>

      <div class="wrapper">

				<div class="wrapper-header">
					<div class="breadcrumbs">
						<a href="<?php echo $config->configData->wiki_root_url; ?>"><?php echo $normalizer->normalize($config->configData->wiki_name);?></a>
						<span> / </span>
						<span><?php echo $normalizer->normalize($current_page_name);?></span>
					</div>

				</div>

				<div class="wrapper-content">

					<?php

						$parser->loadRawMd($loadedUrl);
						$Parsedown = new ParsedownExtra();
						echo $Parsedown->text($parser->mdData);
					?>

				</div>

      </div>

    </div>

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="<?php echo $config->configData->wiki_root_url; ?>assets/js/menu.js"></script>

  </html>
