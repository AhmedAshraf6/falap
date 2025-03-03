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

<!-- Our Story -->
<section class="layout mt-10 sm:mt-16" id="ourStory">
  <div class="grid lg:grid-cols-2 gap-10 items-center">
    <div class="flex flex-col order-2 sm:order-1">
      <h1 class="text-2xl sm:text-4xl text-primary mb-3 sm:mb-5 text-center sm:text-start">قصتنا</h1>
      <!-- first one -->
      <div class="flex  gap-2">
        <div class="relative">
          <div class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-story/1.svg' alt="icon">
          </div>
          <div class="absolute bg-[#D6C0FF] w-[1px] h-[40px] left-1/2 -translate-x-1/2 "></div>
        </div>
        <p class="text-sm sm:text-xl self-start font-light">انطلقت عناقيد التطبيقات منتصف عام 2012م شركة سعودية مقرها
          مدينة الرياض
        </p>
      </div>
      <!-- second one -->
      <div class="flex mt-11 gap-2">
        <div class="relative">
          <div class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-story/2.svg' alt="icon">
          </div>
          <div class="absolute bg-[#D6C0FF] w-[1px] h-[40px] left-1/2 -translate-x-1/2 "></div>
        </div>
        <p class="text-sm sm:text-xl self-start font-light">نفتخر بأننا من أوائل الشركات التي تقدم خدمات تطوير التطبيقات
          iOS &
          Android ساعية أن تكون رائدة هذا المجال
        </p>
      </div>
      <!-- third one -->
      <div class="flex mt-11 gap-2">
        <div class="relative">
          <div class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-story/3.svg' alt="icon">
          </div>
          <div class="absolute bg-[#D6C0FF] w-[1px] h-[40px] left-1/2 -translate-x-1/2 "></div>
        </div>
        <p class="text-sm sm:text-xl self-start font-light">توسعت خدمات عناقيد لتقديم خدمات تطوير البرمجيات والويب
          والاستشارات
          التقنية
        </p>
      </div>
      <!-- fourth one -->
      <div class="flex mt-11 gap-2">
        <div class="relative">
          <div class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-story/4.svg' alt="icon">
          </div>
          <div class="absolute bg-[#D6C0FF] w-[1px] h-[40px] left-1/2 -translate-x-1/2 "></div>
        </div>
        <p class="text-sm sm:text-xl self-start font-light">قامت بالعمل على مشاريع حكومية وخاصة ذات أثر وطني ملموس ومهم
        </p>
      </div>
      <!-- fifth one -->
      <div class="flex mt-11 gap-2">
        <div class="relative">
          <div class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-story/5.svg' alt="icon">
          </div>
          <div class="absolute bg-[#D6C0FF] w-[1px] h-[50px] left-1/2 -translate-x-1/2 "></div>
        </div>
        <p class="text-sm sm:text-xl self-start font-light">امتدت خبرة فريق عناقيد بالعمل على مشاريع تحليل البيانات مع
          قطاعات
          حكومية وخاصة مفتخرين بإسهاماتنا في العديد من المشاريع الوطنية الضخمة
        </p>
      </div>
      <!-- six one -->
      <div class="flex mt-11 gap-2">
        <div class="relative">
          <div class="flex justify-center items-center w-10 h-10  bg-[#F4EBFF] rounded-full mb-3">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-story/6.svg' alt="icon">
          </div>
          <!-- <div class="absolute bg-[#D6C0FF] w-[1px] h-[40px] left-1/2 -translate-x-1/2 "></div> -->
        </div>
        <p class="text-sm sm:text-xl self-start font-light">ولا زالت عناقيد تنمو وتكبر وتتوسع لتكون شريكك التقني الأول!
        </p>
      </div>
    </div>
    <img src='<?php echo get_template_directory_uri(); ?>/assets/images/ourStory.svg' alt="our story image"
      class="order-1 sm:order-2">
  </div>
</section>
<!-- Our Story -->

<!-- Our Services -->

<section class="layout mt-10 sm:mt-16" id="services">
  <h1 class="text-2xl sm:text-4xl text-primary mb-10 sm:mb-16 text-center">خدماتنا</h1>
  <div class="hidden md:grid md:grid-cols-3 gap-8">
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/phone.svg' alt="consultation"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#324846] font-bold text-sm sm:text-lg ">تطوير تطبيقات</span>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">الأجهزة الذكية</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/computer.svg' alt="computer"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#324846] font-bold text-sm sm:text-lg ">تطوير البرمجيات</span>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">والأنظمة الداخلية</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">

        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/uxui.svg' alt="uxui"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">تجربة المستخدم وتصميم الواجهات</span>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">UI / UX</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/ecommerce.webp' alt="ecommerce"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">التجارة</span>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">الإلكترونية</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">

        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/consultation.svg'
          alt="consultation.svg" class="w-full h-full object-contain">
      </div>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">الاستشارات</span>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">التقنية</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">

        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/analytics.svg' alt="consultation"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">تحليل</span>
      <span class="text-[#324846] font-bold text-sm sm:text-lg">البيانات</span>
    </div>
  </div>
  <!-- mobile version -->
  <div class=" block md:hidden ">

    <div class="swiper swiperServices">
      <div class="swiper-wrapper ">
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/phone.svg' alt="consultation"
                class="w-full h-full object-contain">
            </div>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">تطوير تطبيقات</span>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">الأجهزة الذكية</span>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/computer.svg' alt="computer"
                class="w-full h-full object-contain">
            </div> <span class="text-[#324846] font-bold text-sm sm:text-lg">تطوير البرمجيات</span>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">والأنظمة الداخلية</span>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/uxui.svg' alt="uxui"
                class="w-full h-full object-contain">
            </div> <span class="text-[#324846] font-bold text-sm sm:text-lg">تجربة المستخدم</span>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">وتصميم الواجهات</span>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">UI / UX</span>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/ecommerce.webp'
                alt="ecommerce" class="w-full h-full object-contain">
            </div> <span class="text-[#324846] font-bold text-sm sm:text-lg">التجارة</span>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">الإلكترونية</span>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">

              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/consultation.svg'
                alt="consultation.svg" class="w-full h-full object-contain">
            </div>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">الاستشارات</span>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">التقنية</span>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">

              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/analytics.svg'
                alt="consultation" class="w-full h-full object-contain">
            </div>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">تحليل</span>
            <span class="text-[#324846] font-bold text-sm sm:text-lg">البيانات</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Services -->








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