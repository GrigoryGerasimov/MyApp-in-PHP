<nav class="flex items-center justify-between flex-wrap bg-gray-600 p-6">
<div class="flex items-center flex-shrink-0 text-white mr-6">
<span class="font-semibold text-sm tracking-tight">(c) Copyright <?php echo date('Y') ?></span>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-xs lg:flex-grow">
    
      <?php 
      
      if (!empty($_SESSION['navFooter'])) {
          
          foreach($_SESSION['navFooter'] as $navFooterItem){
              
              $navItem = $navFooterItem;
          
          include 'navItem.tpl.php';
          
      }
          
      }
    
      
      
      ?>
      
    </div>
  </div>
</nav>