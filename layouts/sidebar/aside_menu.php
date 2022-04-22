<div class="aside-content">

  <div class="menu">

    <?php

      foreach($config->configData->sidebar->menu as $menu_item)
      {
        if($menu_item->type == 'subtitle')
        {
          include('subtitle.php');
        }
        if($menu_item->type == 'link')
        {
          include('item.php');
        }
      }
    ?>

  </div>

</div>
