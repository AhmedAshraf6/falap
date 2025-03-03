<?php get_header() ?>

<?php 
//  $arrPartener1 = ['assets/images/parteners/1.webp','assets/images/parteners/13.webp','assets/images/parteners/13.webp','']
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- slider -->

<section section-id="{{ sectionId }}" class="main-slider h-[70vh] sm:h-[70vh]">
  <div class="swiper main_slider2 h-full">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="
      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home/bg.png');
      background-repeat: repeat;
      
     ">
        <div
          class="flex flex-col sm:flex-row justify-center sm:justify-between items-center gap-3 sm:gap-5 layout h-full">
          <div class="flex flex-col items-center sm:items-start gap-5  sm:gap-8 sm:flex-1">
            <h3 class="text-[#fff] text-2xl font-bold sm:text-5xl leading-10 text-center sm:text-start">
              اول اسلايدر
            </h3>
            <p class="text-[#fff] text-xs leading-4 sm:leading-6  mt-2 sm:mt-4 text-center sm:text-start">
              اول سلايدر
            </p>

            <a href="{{ slide.url_button }}" class="btn btn-primary self-center sm:self-start  rounded-3xl">
              المزيد
            </a>

          </div>
          <div class="image sm:flex-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/img.png" alt="Slide Image"
              class="w-full h-auto object-cover">
          </div>

        </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>










<!-- Contact Form  -->
<section class=" min-h-[700px] mt-10 sm:mt-16 " style="
      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contact/shape.webp');
      background-size: 100% 100%;
      background-position:center;
      background-repeat: no-repeat;
      
  " id="contact">
  <!-- <img class="absolute " src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/shape.webp' alt=""> -->
  <div class="layout  ">
    <div class="grid md:grid-cols-2 justify-center items-center gap-5">
      <div class="flex flex-col items-center sm:items-start gap-6">
        <h1 class="text-2xl sm:text-4xl text-primary ">تواصل معنا</h1>
        <!-- phone -->
        <div class="flex flex-col sm:flex-row items-center gap-3 sm:gap-6">
          <div class="rounded-full w-12 h-12 relative bg-base-100 ">
            <!-- <div
              class="absolute rounded-full bg-primary text-base-100 flex justify-center items-center w-5 h-5 left-0 z-10">
              1
            </div> -->
            <div
              class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/phone.svg' alt="icon">
            </div>
          </div>
          <a class="text-base sm:text-lg" dir="ltr" href="tel:+966532331339">+966 532 331 339</a>
        </div>
        <!-- mail -->
        <div class="flex flex-col sm:flex-row  items-center gap-3 sm:gap-6">
          <div class="rounded-full w-12 h-12 relative bg-base-100 ">
            <!-- <div
              class="absolute rounded-full bg-primary text-base-100 flex justify-center items-center w-5 h-5 left-0 z-10">
              1
            </div> -->
            <div
              class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/mail.svg' alt="icon">
            </div>
          </div>
          <a class="text-base sm:text-lg" href="mailto:Apps@AppsBunches.com">info@AppsBunches.com</a>
        </div>
        <!-- Address -->
        <div class="flex flex-col sm:flex-row  items-center gap-3 sm:gap-6">
          <div class="rounded-full w-12 h-12 relative bg-base-100 ">
            <div
              class="absolute rounded-full bg-primary text-base-100 flex justify-center items-center w-5 h-5 left-0 z-10">
              1
            </div>
            <div
              class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/address.svg' alt="icon">
            </div>
          </div>
          <span class="text-base sm:text-lg">السعودية، الرياض، حي الملقا، طريق الإمام سعود بن فيصل</span>
        </div>
        <!-- Address 2 -->
        <div class="flex flex-col sm:flex-row  items-center gap-3 sm:gap-6">
          <div class="rounded-full w-12 h-12 relative bg-base-100 ">
            <div
              class="absolute rounded-full bg-primary text-base-100 flex justify-center items-center w-5 h-5 left-0 z-10">
              2
            </div>
            <div
              class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/address.svg' alt="icon">
            </div>
          </div>
          <span class="text-base sm:text-lg">السعودية، الرياض، حي النزهة، طريق الإمام سعود بن عبدالعزيز</span>
        </div>
        <!-- social media -->
        <div class="flex gap-3">
          <div class="flex items-center gap-3 sm:gap-6">
            <div class="rounded-full w-12 h-12 relative bg-base-100 ">
              <a href="https://twitter.com/appsbunches" target="_blank"
                class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
                <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/x.svg' alt="icon">
              </a>
            </div>
          </div>
          <a href="https://www.linkedin.com/company/apps-bunches/about/" target="_blank"
            class="flex items-center gap-3 sm:gap-6">
            <div class="rounded-full w-12 h-12 relative bg-base-100 ">
              <div
                class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
                <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/linkedin.svg' alt="icon">
              </div>
            </div>
          </a>
          <a href="https://www.youtube.com/@AppsBunches/videos" target="_blank"
            class="flex items-center gap-3 sm:gap-6">
            <div class="rounded-full w-12 h-12 relative bg-base-100 ">
              <div
                class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
                <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/youtube.svg' alt="icon">
              </div>
            </div>
          </a>
          <a href="https://www.linkedin.com/company/apps-bunches/about/" target="_blank"
            class="flex items-center gap-3 sm:gap-6">
            <div class="rounded-full w-12 h-12 relative bg-base-100 ">
              <div
                class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
                <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/instagram.svg' alt="icon">
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Form -->
      <form class="flex flex-col  gap-3 " id="anaqidContactForm" method="post" action="#"
        data-url="<?php echo admin_url('admin-ajax.php'); ?>">
        <input type="text"
          class="border border-solid border-[#324846] placeholder-[#909090] p-2 rounded-md outline-none w-full"
          placeholder="الإسم" id="name" name="name" required="required" />
        <div class="flex flex-col sm:flex-row gap-3">
          <input type="email"
            class="border border-solid border-[#324846] placeholder-[#909090] p-2 rounded-md outline-none w-full"
            placeholder="البريد الإلكتروني" id="email" name="email" required="required" />
          <input type="text"
            class="border border-solid border-[#324846] placeholder-[#909090] p-2 rounded-md outline-none w-full "
            placeholder="رقم الجوال" id="phone" name="phone" required="required" />
        </div>

        <textarea
          class="border border-solid border-[#324846] placeholder-[#909090] p-2 rounded-md outline-none w-full resize-none h-[300px]"
          placeholder="تفاصيل الرسالة" id="message" name="message" required="required"></textarea>
        <button type="submit" class="btn-primary contactSubmit">إرسال</button>
        <span class="text-primary font-bold msgContact-sucess">تم ارسال الرسالة إلي شركة عناقيد بنجاح</span>
        <span class="text-error font-bold msgContact-error">حدث خطأ ما حاول مرة أخري</span>
      </form>
    </div>

  </div>
</section>
<!-- Contact Form  -->


<!-- Whatts app button -->
<a href="//api.whatsapp.com/send?phone=966532331339" id="whattapBtn" class="animate animate-bounce" target="_blank">
  <img src='<?php echo get_template_directory_uri(); ?>/assets/images/whatts.svg' class="w-10 h-10" alt="whattsApp">
</a>
<script>
const imageSrc = '<?php echo get_template_directory_uri(); ?>';
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {


  const swiper3 = new Swiper('.swiperServices', {
    spaceBetween: 30,
    // centeredSlides: true,
    slidesPerView: "1.5",
    autoplay: {
      delay: 2000, // Delay between transitions in milliseconds
      disableOnInteraction: false, // Enable/disable autoplay on user interaction (default is true)
    },
    speed: 1000,
    loop: true,

  });
  const mainSlider = document.querySelector('.main_slider2');
  let swiper = new Swiper('.main_slider2', {
    slidesPerView: 1,
    spaceBetween: 16,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
      dynamicMainBullets: 5
    }
  });


});
</script>
<?php get_footer() ?>