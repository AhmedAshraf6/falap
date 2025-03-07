<?php get_header() ?>

<?php 
//  $arrPartener1 = ['assets/images/parteners/1.webp','assets/images/parteners/13.webp','assets/images/parteners/13.webp','']
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- slider -->

<section section-id="{{ sectionId }}" class="main-slider pt-24 h-[70vh] sm:h-[70vh]">
  <div class="swiper main_slider2 h-full">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="
      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home/bg.png');
      background-repeat: repeat;
      
     ">
        <div
          class="flex flex-col sm:flex-row justify-center sm:justify-between items-center gap-3 sm:gap-5 layout h-full">
          <div class="flex flex-col items-center sm:items-start gap-5  sm:gap-8 sm:flex-1">
            <h3 class="text-[#fff] text-2xl font-bold leading-10 sm:text-4xl text-center sm:text-start">
              دليلك الشامل للمختبرات العملية
            </h3>
            <p class="text-[#fff] text-md leading-7  mt-2 sm:mt-4 text-center sm:text-start">
              تلعب المختبرات العملية دورًا أساسيًا في دراسة العلوم، حيث توفر بيئة تجريبية لفهم المبادئ النظرية بشكل عملي
              وملموس. تعد الكيمياء والفيزياء من أكثر العلوم التي تعتمد على التجارب العملية لتوضيح الظواهر المختلفة
              وتحليل المواد والتفاعلات.

            </p>

            <a href="<?php  echo site_url() . '/experiments' ?>"
              class="btn btn-primary self-center sm:self-start  rounded-3xl">
              المختبرات العلمية
            </a>

          </div>
          <div class="image sm:flex-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/lab.png" alt="Slide Image"
              class="w-full h-auto object-cover rounded-xl">
          </div>

        </div>
      </div>
      <div class="swiper-slide" style="
      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home/bg.png');
      background-repeat: repeat;
      
     ">
        <div
          class="flex flex-col sm:flex-row justify-center sm:justify-between items-center gap-3 sm:gap-5 layout h-full">
          <div class="flex flex-col items-center sm:items-start gap-5  sm:gap-8 sm:flex-1">
            <h3 class="text-[#fff] text-2xl font-bold leading-10 sm:text-4xl text-center sm:text-start">
              المكتبة العلمية
            </h3>
            <p class="text-[#fff] text-md leading-7  mt-2 sm:mt-4 text-center sm:text-start">
              تلعب المختبرات العملية دورًا أساسيًا في دراسة العلوم، حيث توفر بيئة تجريبية لفهم المبادئ النظرية بشكل عملي
              وملموس. تعد الكيمياء والفيزياء من أكثر العلوم التي تعتمد على التجارب العملية .

            </p>

            <a href="<?php  echo site_url() . '/experiments' ?>"
              class="btn btn-primary self-center sm:self-start  rounded-3xl">
              المكتبة العلمية
            </a>

          </div>
          <div class="image sm:flex-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/lab3.png" alt="Slide Image"
              class="w-full h-auto object-cover rounded-xl">
          </div>

        </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>



<!-- about us -->
<section class="py-24 relative">
  <div class="layout">
    <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
      <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
        <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
          <h2 class="text-primary text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
            من نحن
          </h2>
          <p class="text-neutral text-base font-normal leading-relaxed lg:text-start text-center">
            تلعب المختبرات العملية دورًا أساسيًا في دراسة العلوم، حيث توفر بيئة تجريبية لفهم المبادئ النظرية بشكل عملي
            وملموس. تعد الكيمياء والفيزياء من أكثر العلوم التي تعتمد على التجارب العملية لتوضيح الظواهر المختلفة
            وتحليل المواد والتفاعلات.</p>
        </div>
        <a href="<?php  echo site_url() . '/experiments' ?>" class="btn btn-primary">
          ابدأ الان
        </a>
      </div>
      <img class="lg:mx-0 mx-auto h-full rounded-3xl object-cover"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/home/lab2.jpg" alt="about Us image" />
    </div>
  </div>
</section>



<!-- slider -->
<section class="featured_products py-5 lg:py-10 text-base-content my-5 lg:my-8">
  <div class="layout  overflow-hidden">
    <div class="grid grid-cols-4 gap-3 sm:gap-5">
      <div class="col-span-1 relative">
        <div class="w-full home-image-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/lab.png" alt="image"
            class="w-full h-96 object-cover rounded-xl absolute z-[2] py-5">
        </div>
      </div>
      <div class="col-span-3">
        <a href="<?php  echo site_url() . '/experiments' ?>"
          class="flex gap-2 items-center justify-end mb-3 text-primary">
          عرض الكل
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            class="stroke-primary rotate-180" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-chevron-right h-4 w-4 rotate-180">
            <path d="m9 18 6-6-6-6"></path>
          </svg>
        </a>
        <div class="swiper home_image_silder_before">
          <div class="swiper-wrapper">

            <?php 
         $homepageEvents = new WP_Query(array(
              'posts_per_page' => 6,
              'post_type'      => 'experiment',
              'orderby'        => 'date',
              'order'          => 'DESC', // Newest posts first
          ));


          while($homepageEvents->have_posts()) {
            $homepageEvents->the_post(); 
            ?>
            <div class="swiper-slide flex flex-col h-full">
              <?php   get_template_part('template-parts/content','experiment');?>

            </div>
            <?php
  
           wp_reset_postdata();
        }?>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>

<!-- banner -->
<section class="my-5 lg:my-8 layout">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/lab2.jpg" alt="image"
    class="h-[350px] md:h-[550px] object-cover w-full rounded-3xl ">
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
          <a class="text-base sm:text-lg" href="mailto:info@ffalab.com">info@ffalab.com</a>
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
        <span class="text-primary font-bold msgContact-sucess">تم ارسال الرسالة إلي شركة فيلاب بنجاح</span>
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
  const elSliderImage = document.querySelector('.home_image_silder_before');

  if (elSliderImage) {

    const swiperNewInHome = new Swiper('.home_image_silder_before', {
      slidesPerView: 1,
      spaceBetween: 30,
      breakpoints: {
        640: {
          slidesPerView: 1.5,
          spaceBetween: 20,
        },

        768: {
          slidesPerView: 2.5,
          spaceBetween: 20
        },
        1024: {
          slidesPerView: 3.5,
          spaceBetween: 20
        }
      }
    });

  }


});
</script>
<?php get_footer() ?>