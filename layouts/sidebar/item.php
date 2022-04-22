<a href="<?php echo $config->configData->wiki_root_url; ?><?php echo $menu_item->url;?>" class="menu-item">

  <div class="menu-item--content">
    <?php
    if($menu_item->icon !== null)
    {
      ?>
      <div class="menu-item--icon">
      <?php
      include('layouts/icons/'.$menu_item->icon.'.php');
      ?>
      </div>
      <?php
    }
    ?>

    <div class="menu-item--text">
      <?php echo $menu_item->name;?>
    </div>

    <?php
    if($menu_item->bubble !== null)
    {
      ?>
      <div class="menu-item--addon">
        <span class="bubble bubble--<?php echo $menu_item->bubble;?>"><?php echo $menu_item->bubble_text;?></span>
      </div>
      <?php
    }
    ?>

  </div>


</a>
