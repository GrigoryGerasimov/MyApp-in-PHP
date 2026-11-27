<div class="w-full">
  <div class="h-100 bg-contain rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url(<?php echo $post['url']?>">
  </div>
  <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
    <div class="mb-8">
      <p class="text-sm text-gray-600 flex items-center">
        <?php echo '#'.$post['slug'] ?>
      </p>
      <div class="text-gray-900 font-bold text-xl mb-2"><a href=<?php echo '/post/'.$post['id']?>><?php echo ucfirst($post['title'])?></a></div>
      <p class="text-gray-700 text-base"><?php echo ucfirst($post['content'])?></p>
    </div>
    <div class="flex items-center">
      <img class="w-10 h-10 rounded-full mr-4" src="<?php echo $post['avatar']?>" alt="Avatar <?php echo $post['id']?>">
      <div class="text-sm">
        <p class="text-gray-900 leading-none"><?php echo ucfirst($post['author'])?></p>
        <p class="text-gray-600"><?php echo $post['date']?></p>
      </div>
    </div>
  </div>
</div>