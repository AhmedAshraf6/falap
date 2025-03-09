<?php wp_footer() ?>
<!-- <div class="h-[400px]">
  <footer class="relative bg-no-repeat h-full"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home/lab6.png');background-size:100% 100%;">


    <div class="relative z-[2]">
      <div class="layout">
        <div class="w-full flex flex-col sm:flex-row gap-3 items-center mt-5 sm:mt-10">

          <a href="<?php echo home_url(); ?>" class="sm:w-auto sm:h-auto mt-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/الشعار-ابيض.png"
              class="max-w-[200px] max-h-[80px] w-auto h-auto object-contain" alt="<?php bloginfo('name'); ?>" />
          </a>

          <span class="text-2xl sm:text-3xl text-secondary dark:text-gray-400 text-center w-full ">
            جميع الحقوق محفوظة ل<a href="<?php echo site_url();?>"
              class="hover:underline"><?php bloginfo('name'); ?></a>
            | 2025
          </span>

        </div>
      </div>
    </div>
  </footer>
</div> -->
<footer
  class="mt-10 sm:mt-15 bg-primary bg-gradient-to-r from-primry via-primry to-purple-primary  py-3 sm:py-6  text-base-100"
  id="footer">
  <div class="max-w-[1400px] mx-auto px-5 sm:px-10 flex justify-center md:justify-between items-center gap-3">
    <div
      class="flex flex-col sm:flex-row items-center sm:items-start justify-center sm:justify-start  gap-3 order-1 flex-1">
      <div class="flex gap-3">
        <a href="<?php echo site_url() ?>" class="flex items-center gap-2 order-1">
          <span class="text-[10px] md:text-sm">الرئيسية</span>
        </a>
        <a href="<?php echo site_url() . '/blogs' ?>" class="flex items-center gap-2 order-2">
          <span class="text-[10px] md:text-sm">المدونة</span>
        </a>
        <a href="<?php echo site_url() . '/libraries' ?>" class="flex items-center gap-2 order-3">
          <span class="text-[10px] md:text-sm">المكتبة العلمية</span>
        </a>
      </div>
      <div class="w-28 block md:hidden order-4">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/footer/الشعار-ابيض.png' alt=" footerLogo"
          class="w-full h-full object-contain mx-auto">
      </div>
    </div>
    <div class="w-28 h-auto md:h-[50px] order-2 hidden md:block flex-1">
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/footer/الشعار-ابيض.png' alt="footerLogo"
        class="w-full h-full object-contain">
    </div>
    <p class="hidden md:block order-3 flex-1 text-center"> جميع الحقوق محفوظة ل<a href="<?php echo site_url();?>"
        class="hover:underline"><?php bloginfo('name'); ?></a>
      | 2025</p>
  </div>

  <div class="mt-3">
    <hr class="block md:hidden">
    <p class="block md:hidden text-center mt-2"> جميع الحقوق محفوظة ل<a href="<?php echo site_url();?>"
        class="hover:underline"><?php bloginfo('name'); ?></a>
      | 2025</p>
  </div>
</footer>
</body>

</html>