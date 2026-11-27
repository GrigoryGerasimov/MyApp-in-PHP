<?php 

$navFooter = array(
    [
        "title" => "Derechos de uso",
        "path" => ""
    ],
    [
        "title" => "Mapa del portal",
        "path" => ""
    ],
    [
        "title" => "Contactos",
        "path" => ""
    ]
);

?>

<nav class="flex items-center justify-between flex-wrap bg-gray-600 p-6">
<div class="flex items-center flex-shrink-0 text-white mr-6">
<span class="font-semibold text-sm tracking-tight">(c) Copyright <?php echo date('Y') ?></span>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-xs lg:flex-grow">
    
      <?php
      
      foreach($navFooter as $navFooterItem){
          
          $navItem = $navFooterItem;
          
          include 'navItem.tpl.php';
      }
      
      ?>
      
    </div>
  </div>
</nav>