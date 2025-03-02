<?php wp_footer() ?>
<footer
  class="mt-10 sm:mt-15 bg-primary bg-gradient-to-r from-purple-600 via-purple-700 to-purple-500  py-3 sm:py-6  text-base-100"
  id="footer">
  <div class="max-w-[1400px] mx-auto px-5 sm:px-10 flex justify-center md:justify-between items-center gap-3">
    <div class="flex justify-between gap-3 order-1 flex-1">
      <div class="flex items-center gap-2 order-3">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/footer/file.svg' alt="footerLogo">
        <span class="text-[10px] md:text-sm">سجل تجاري 1010344677</span>
      </div>
      <div class="flex items-center gap-2 order-2">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/footer/num.svg' alt="footerLogo">
        <span class="text-[10px] md:text-sm">الرقم الضريبي 302167355900003</span>
      </div>
      <div class="w-28 block md:hidden order-1">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/footer/footerLogo.svg' alt="footerLogo"
          class="w-full h-full object-contain mx-auto">
      </div>
    </div>
    <div class="w-28 h-auto md:h-[35px] order-2 hidden md:block flex-1">
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/footer/footerLogo.svg' alt="footerLogo"
        class="w-full h-full object-contain">
    </div>
    <p class="hidden md:block order-3 flex-1 text-center">&copy; <span id="currentYear"></span> جميع الحقوق محفوظة</p>
  </div>

  <div class="mt-3">
    <hr class="block md:hidden">
    <p class="block md:hidden text-center mt-2">&copy; <span id="currentYear"></span> جميع الحقوق محفوظة</p>
  </div>
</footer>
</body>

</html>