<?php
get_header();

$video = get_field('experiment_video');
$category = get_field('experiment_category');
$purpose = get_field('experiment_purpose');
$tools = get_field('experiment_tool');
$steps = get_field('experiment_steps');
$conclusion = get_field('experiment_consolusion');
$image = get_the_post_thumbnail_url();
$reports = get_field('experiment_reports');

// Default image URL
$default_image = get_theme_file_uri('/assets/images/banner.jpg');
?>

<div class="video-box h-[50vh] lg:h-[80vh] relative">
  <?php if ($video) : ?>
  <!-- Display video if available -->
  <video controls class="w-full h-full myVideo object-cover">
    <source src="<?php echo esc_url($video['url']); ?>" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <?php elseif ($image) : ?>
  <!-- Display image if video is not available but image is -->
  <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
  <?php else : ?>
  <!-- Display default image if neither video nor image is available -->
  <img src="<?php echo esc_url($default_image); ?>" alt="Default Banner" class="w-full h-full object-cover">
  <?php endif; ?>
</div>
<section class="layout my-10">

  <div class="grid lg:grid-cols-4 gap-5">

    <div class="lg:col-span-1">
      <form method="get" action="<?php echo esc_url(site_url('/')); ?>"
        class="mx-auto border border-gray rounded-lg p-3">
        <label for="default-search"
          class="text-md lg:text-lg font-medium text-gray-900 relative after:block after:w-[30px] after:h-[4px] after:bg-primary after:mt-2">
          البحث عن التجارب
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
          أحدث التجارب
        </span>
        <div class="flex flex-col gap-3 lg:gap-5 mt-3 sm:mt-5">
          <?php 
         $homepageEvents = new WP_Query(array(
              'posts_per_page' => 3,
              'post_type'      => 'experiment',
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

        <div class="flex flex-col gap-2">
          <h3 class="text-2xl lg:text-4xl font-bold text-primary"><?php the_title(); ?></h3>
        </div>
        <div class="generic-content"><?php the_content(); ?></div>
        <?php if($purpose){ ?>
        <div class="flex flex-col gap-2">
          <h3 class="text-xl lg:text-3xl font-bold text-primary">الهدف من التجربة :</h3>
          <p class="text-lg leading-10 "><strong><?php echo $purpose ?></strong></p>
        </div>
        <?php }?>

        <?php if($tools){ ?>
        <div class="flex flex-col gap-2">
          <h3 class="text-xl lg:text-3xl font-bold text-primary">الأدوات :</h3>
          <p class="text-lg leading-10 "><strong><?php echo $tools ?></strong></p>
        </div>
        <?php }?>

        <?php if($steps){ ?>
        <div class="flex flex-col gap-2">
          <h3 class="text-xl lg:text-3xl font-bold text-primary">الخطوات :</h3>
          <p class="text-lg leading-10 "><strong><?php echo $steps ?></strong></p>
        </div>
        <?php }?>

        <?php if($conclusion){ ?>
        <div class="flex flex-col gap-2">
          <h3 class="text-xl lg:text-3xl font-bold text-primary">الاستنتاج :</h3>
          <p class="text-lg leading-10 "><strong><?php echo $conclusion ?></strong></p>
        </div>
        <?php }?>

        <?php
        if (!empty($reports) && isset($reports['url'])) {?>
        <div class="flex flex-col gap-2">
          <h3 class="text-xl font-bold text-primary">ملفات اضافية :</h3>
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