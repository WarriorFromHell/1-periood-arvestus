<header id="site-header">
  <div class="site-title">
    <h1>Arvestustöö</h1>
  </div>
 <?php //foreach (array_expression as menu) ?>
  <nav class="menu-main">
    <ul class="menu">
      <?php
      foreach($menu_main as $menu => $item){
      echo '<li><a href="'.$item.'">'.$menu."</a></li>";
            };
        ?>
    </ul>
  </nav>
</header>

