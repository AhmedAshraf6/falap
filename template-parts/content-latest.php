 <a class="small-card border-b border-[#e1e1e1] pb-3" href="#0">
   <div class="flex items-center gap-2">
     <img
       src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/default.jpg'); ?>"
       alt="<?php the_title()?>" class="w-20 h-20 object-cover rounded-lg">
     <div class="flex flex-col gap-2">

       <span class="text-neutral text-sm">
         <?php the_time('F j, Y'); ?>
       </span>
       <h6 class=" text-primary text-lg">
         <?php the_title()?>
       </h6>
     </div>
   </div>

 </a>