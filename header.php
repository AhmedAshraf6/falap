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

  <div class="fixed w-full z-[9] lg:mt-2 sm:mt-3 headerContainer">
    <div class="layout !px-0 lg:px-10">

      <nav
        class='navbar anaqidNavbar   w-full   bg-base-100  lg:rounded-2xl mx-auto flex justify-between items-center z-20 px-5 sm:px-10 py-2 '>

        <a href="<?php echo site_url() ?>" rel="home" class="sm:w-auto sm:h-auto">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo-٢.png"
            class="max-w-[200px] max-h-[80px] lg:max-h-[80px] w-auto h-auto object-contain">
        </a>



        <div class='hidden lg:block navUl'>
          <?php ahmed_bootstrap_navbar(); ?>
        </div>

        <!-- mobile nav -->
        <div
          class='lg:hidden mobile-nav  fixed top-0 z-20 bg-base-100 flex flex-col items-start py-3 px-5 min-h-[40vh] min-w-[90vw] sm:min-w-[400px] left-1/2 -translate-x-1/2 rounded-xl'>
          <div class="flex justify-between gap-3 items-center w-full">

            <!-- <a href="/" rel="home" class="w-36 ">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg'
                class="w-full h-full object-contain">
            </a> -->
            <button class='lg:hidden hide-nav text-base-100 '><img
                src='<?php echo get_template_directory_uri(); ?>/assets/images/delete.svg' alt=""></button>

          </div>
          <?php ahmed_bootstrap_navbar_mobile(); ?>
          <div class=" gap-2 flex w-full justify-center lg:hidden mt-5">
            <a href="<?php echo site_url() . '/add-experiment'?>" class="btn btn-primary">
              أضف تجربة
            </a>
          </div>
        </div>
        <button class='lg:hidden show-nav'> <img src='<?php echo get_template_directory_uri(); ?>/assets/images/bar.svg'
            alt="">
        </button>
        <div class=" gap-2 hidden lg:flex">
          <a href="<?php echo site_url() . '/add-experiment'?>" class="btn btn-primary">
            أضف تجربة
          </a>
        </div>

      </nav>
    </div>
  </div>