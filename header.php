<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php 
    wp_title('|','true','right');
    bloginfo('name');
  ?></title>

  <link rel="pingback" href="<?php  bloginfo('pingback_url') ?>">
  <?php wp_head() ?>
</head>

<body>
  <!-- max-w-4xl mx-auto -->

  <div class="mx-5 relative headerContainer">
    <nav
      class='navbar anaqidNavbar  bg-base-100 max-w-6xl rounded-2xl flex justify-between items-center  w-full z-20 absolute left-1/2 -translate-x-1/2  top-5 px-5 sm:px-10 py-5 '>

      <a href="/" rel="home" class="w-28  sm:w-auto sm:h-auto">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg'
          class="w-full h-full object-contain">
      </a>


      <div class='hidden lg:block navUl'>
        <?php ahmed_bootstrap_navbar(); ?>
      </div>

      <!-- mobile nav -->
      <div
        class='lg:hidden mobile-nav  fixed top-0 z-20 bg-base-100 flex flex-col items-start py-3 px-5 min-h-[40vh] min-w-[90vw] sm:min-w-[400px] left-1/2 -translate-x-1/2 rounded-xl'>
        <div class="flex justify-between gap-3 items-center w-full">

          <a href="/" rel="home" class="w-36 ">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg'
              class="w-full h-full object-contain">
          </a>
          <button class='lg:hidden hide-nav text-base-100 '><img
              src='<?php echo get_template_directory_uri(); ?>/assets/images/delete.svg' alt=""></button>

        </div>
        <?php ahmed_bootstrap_navbar_mobile(); ?>
        <div class="flex gap-2 items-center justify-center w-full my-[40px]">
          <img src='<?php echo get_template_directory_uri(); ?>/assets/images/fileIntro.svg' alt="fileIntro">
          <a href='<?php echo get_template_directory_uri(); ?>/assets/images/AppsBunches_Tech_Profile.pdf'>
            <span class="text-[#575757]">الملف التعريفي</span>
          </a>
        </div>
      </div>
      <button class='lg:hidden show-nav'> <img src='<?php echo get_template_directory_uri(); ?>/assets/images/bar.svg'
          alt="">
      </button>
      <div class=" gap-2 hidden lg:flex">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/fileIntro.svg' alt="fileIntro">
        <a href='<?php echo get_template_directory_uri(); ?>/assets/images/AppsBunches_Tech_Profile.pdf'>
          <span class="text-[#575757]">الملف التعريفي</span>
        </a>
      </div>

    </nav>
  </div>