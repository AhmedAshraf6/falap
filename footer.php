<?php wp_footer() ?>



<footer class="bg-primary-100">
  <div class="layout p-4 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <!-- Logo -->
      <a href="<?php echo home_url(); ?>" class="sm:w-auto sm:h-auto">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo.png"
          class="max-w-[200px] max-h-[60px] w-auto h-auto object-contain" alt="<?php bloginfo('name'); ?>" />
      </a>

      <!-- Navigation Links -->

      <?php ahmed_bootstrap_footer(); ?>

    </div>

    <!-- Divider -->
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

    <!-- Copyright -->
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">

      جميع الحقوق محفوظة
      <a href="https://flowbite.com/" class="hover:underline"><?php bloginfo('name'); ?></a>
      © 2025
    </span>
  </div>
</footer>


</body>

</html>