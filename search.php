<?php
 get_header();
 pageBanner(array(
  'title' => 'البحث'
 ));
?>

<section class="layout my-10">

  <div class="grid lg:grid-cols-4 gap-5">

    <div class="lg:col-span-1">
      <form method="get" action="<?php echo esc_url(site_url('/')); ?>"
        class="mx-auto border border-gray rounded-lg p-3">
        <label for="default-search"
          class="text-md lg:text-lg font-medium text-gray-900 relative after:block after:w-[30px] after:h-[4px] after:bg-primary after:mt-2">
          ابحث
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

    </div>
    <div class="lg:col-span-3">
      <div class="grid grid-cols-3 gap-3">

        <?php
             if (have_posts()) {
          while(have_posts()) {
            the_post();
            get_template_part('template-parts/content', get_post_type());
          }
        ?>

        <?php } else {
          echo '<h2 class="text-primary text-center text-xl col-span-3 sm:text-2xl font-semibold w-full">لا توجد نتائج تطابق هذا البحث.</h2>';
        }

      
         
         ?>
      </div>
      <nav aria-label="Page navigation example ">
        <ul class="inline-flex -space-x-px text-sm mt-3 sm:mt-5">
          <?php
        global $wp_query;

        $big = 999999999; // Need an unlikely integer
        $pages = paginate_links(array(
            'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'  => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total'   => $wp_query->max_num_pages,
            'prev_text' => __('Previous'),
            'next_text' => __('Next'),
            'type'    => 'array' // Returns an array of pagination links
        ));

        if (is_array($pages)) {
            foreach ($pages as $page) {
                echo '<li>' . str_replace(
                    array('page-numbers current', 'page-numbers', 'prev', 'next'),
                    array('flex items-center justify-center px-3 h-8 text-base-100 border border-gray-300 bg-primary',
                          'flex items-center justify-center px-3 h-8 leading-tight text-base-100 bg-primary border border-gray-300  ',
                          'flex items-center justify-center px-3 h-8 ms-0 leading-tight text-base-100 bg-primary border border-e-0 border-gray-300 rounded-s-lg ',
                          'flex items-center justify-center px-3 h-8 leading-tight text-base-100 bg-primary border border-gray-300 rounded-e-lg '
                    ),
                    $page
                ) . '</li>';
            }
        }
        ?>
        </ul>
      </nav>

    </div>


  </div>

</section>




<?php get_footer(); ?>