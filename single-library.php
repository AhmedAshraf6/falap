<?php
 get_header();
 pageBanner();
                $category = get_field('library_select');
                
                $reports = get_field('library_file');
 
?>




<section class="layout my-10">

  <div class="grid lg:grid-cols-4 gap-5">

    <div class="lg:col-span-1">
      <form method="get" action="<?php echo esc_url(site_url('/')); ?>"
        class="mx-auto border border-gray rounded-lg p-3">
        <label for="default-search"
          class="text-md lg:text-lg font-medium text-gray-900 relative after:block after:w-[30px] after:h-[4px] after:bg-primary after:mt-2">
          البحث
        </label>


        <div class="relative mt-3">
          <div class="absolute inset-y-0 end-0 flex items-center pe-3">
            <button type="submit">
              <svg fill="#c4bcac" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                class="h-[25px] w-[25px] opacity-70 cursor-pointer">
                <path fill-rule="evenodd"
                  d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <input name="s" type="text" id="default-search"
            class="block w-full p-4 ps-4 text-sm text-gray-900 border border-gray rounded-lg bg-gray-50 outline-none focus:ring-primary focus:border-primary"
            placeholder="ابحث هنا..." required />

        </div>
      </form>
      <aside class="border border-gray rounded-lg p-3 mt-3 sm:mt-5 hidden lg:block">
        <span
          class="text-md lg:text-lg font-medium text-gray-900 relative after:block after:w-[30px] after:h-[4px] after:bg-primary after:mt-2">
          أحدث الاضافات
        </span>
        <div class="flex flex-col gap-3 lg:gap-5 mt-3 sm:mt-5">
          <?php 
         $homepageEvents = new WP_Query(array(
              'posts_per_page' => 3,
              'post_type'      => 'library',
              'orderby'        => 'date',
              'order'          => 'DESC', // Newest posts first
          ));


          while($homepageEvents->have_posts()) {
            $homepageEvents->the_post(); 
          get_template_part('template-parts/content','latest');
  
           wp_reset_postdata();
        }?>



        </div>
      </aside>
    </div>
    <div class="lg:col-span-3">
      <div class="flex flex-col gap-5 sm:gap-9">

        <img
          src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/default.jpg'); ?>"
          alt="<?php the_title_attribute(); ?>" class="w-full max-h-[400px] sm:max-h-[500px] object-cover rounded-lg ">
        <div class="generic-content"><?php the_content(); ?></div>
        <?php
        if (!empty($reports) && isset($reports['url'])) {?>
        <div class="flex flex-col gap-2">
          <h3 class="text-xl font-bold text-primary">ملفات إضافية :</h3>
          <a href="<?php echo esc_url($reports['url']) ?>" download
            class="text-primary underline underline-offset-2">تحميل
            الملفات</a>
        </div>
        <?php }
        ?>


      </div>


    </div>

</section>

<?php get_footer(); ?>