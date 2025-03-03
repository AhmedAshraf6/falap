 <a href="<?php the_permalink(); ?>">
   <div class="relative flex flex-col bg-white shadow-sm border border-[#e1e1e1]  rounded-lg ">
     <div class="relative h-56  overflow-hidden text-white rounded-md">
       <img
         src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/default.jpg'); ?>"
         alt="card-image" class="h-full w-full object-cover" />
     </div>
     <div class="p-4">

       <h6 class="mb-2 text-slate-800 text-xl font-semibold">
         <?php the_title(); ?>
       </h6>
       <p class="text-neutral leading-normal font-light">
         <?php if (has_excerpt()) {
                        echo get_the_excerpt();
                      } else {
                        echo wp_trim_words(get_the_content(), 18);
                        } ?>
       </p>
       <span class="text-neutral text-sm">
         <?php the_time('F j, Y'); ?>
       </span>

     </div>


   </div>
 </a>