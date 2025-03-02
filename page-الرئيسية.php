<?php get_header() ?>
<style>
.mySwiper .swiperslide1 {
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/back2.svg');
  background-size: 300px auto;
  background-position: top right;
  background-repeat: no-repeat;
  height: 100vh;
}

@media (max-width: 768px) {
  .mySwiper .swiperslide1 {
    background-size: 0;
    height: 100vh;
  }
}

@media (max-width: 399px) {
  .sliderLeft {
    width: 1079px;
    top: -699px;
  }
}

@media (min-width: 400px) and (max-width: 640px) {
  .sliderLeft {
    width: 1136px;
    top: -579px;
  }
}
</style>
<?php 
//  $arrPartener1 = ['assets/images/parteners/1.webp','assets/images/parteners/13.webp','assets/images/parteners/13.webp','']
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<section class="swiper mySwiper min-h-screen text-primary " id="home">
  <div class="swiper-wrapper ">
    <div class="swiper-slide swiperslide1 bg-contain bg-no-repeat bg-center h-screen w-full">

      <div
        class="absolute sm:w-[1200px] md:w-auto  sm:-top-[644px] -left-[662px] md:-top-[831px] md:-left-[853px] sliderLeft">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/hero/sliderbackleft.svg"
          class="w-full h-full object-center object-scale-down">
      </div>

      <div
        class="absolute w-[1200px] sm:w-auto -right-[448px] sm:right-0 -top-[213px] sm:-top-[81px] h-auto sm:h-[1000px] ">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/hero/sliderhome2.webp"
          class="w-full h-full object-center object-scale-down">
      </div>

      <div class="absolute top-[58%] right-[82%] sm:top-[34%] sm:right-[41%] w-10 h-10  ">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/hero/circle.svg"
          class="w-full h-full object-center">
      </div>
      <div class="flex justify-center items-center h-full">
        <div class="grid sm:grid-cols-2 max-w-[1350px] mx-auto  px-5 gap-10 z-20  ">
          <div class=' flex flex-col justify-center items-center sm:items-start  gap-6 order-3 sm:order-2'>
            <h1 class='text-2xl sm:text-4xl md:text-5xl max-w-full   text-primary'>عناقيد التطبيقات
            </h1>
            <h1 class='text-xl md:text-3xl max-w-full   text-primary '>شريكك التقني الأول!
            </h1>
            <a href="#contact"
              class="flex items-center text-md sm:text-lg gap-3 bg-[#604899] text-base-100  hover:bg-primary/55 duration-200 transition-colors rounded-3xl py-2 px-5">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/request.webp' alt="request creat app">
              <span>طلب تطوير مشروع</span>
            </a>
          </div>

          <div class="z-20  order-2 sm:order-3 ">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/sliderHome.svg' alt="">
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class=" max-w-[200px] mx-auto relative">
    <div class="swiper-pagination shadow-md rounded-2xl "></div>
  </div>
  <!-- <div class="swiper-pagination "></div> -->
</section>
<!-- Our Story -->
<section class="align-element mt-10 sm:mt-16" id="ourStory">
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
<?php 
  $arr = ['']
?>
<section class="align-element mt-10 sm:mt-16" id="services">
  <h1 class="text-2xl sm:text-4xl text-primary mb-10 sm:mb-16 text-center">خدماتنا</h1>
  <div class="hidden md:grid md:grid-cols-3 gap-8">
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/phone.svg' alt="consultation"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#422296] font-bold text-sm sm:text-lg ">تطوير تطبيقات</span>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">الأجهزة الذكية</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/computer.svg' alt="computer"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#422296] font-bold text-sm sm:text-lg ">تطوير البرمجيات</span>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">والأنظمة الداخلية</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">

        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/uxui.svg' alt="uxui"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">تجربة المستخدم وتصميم الواجهات</span>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">UI / UX</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/ecommerce.webp' alt="ecommerce"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">التجارة</span>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">الإلكترونية</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">

        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/consultation.svg'
          alt="consultation.svg" class="w-full h-full object-contain">
      </div>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">الاستشارات</span>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">التقنية</span>
    </div>
    <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5">
      <div class="w-[164px] h-[164px]">

        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/analytics.svg' alt="consultation"
          class="w-full h-full object-contain">
      </div>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">تحليل</span>
      <span class="text-[#422296] font-bold text-sm sm:text-lg">البيانات</span>
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
            <span class="text-[#422296] font-bold text-sm sm:text-lg">تطوير تطبيقات</span>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">الأجهزة الذكية</span>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/computer.svg' alt="computer"
                class="w-full h-full object-contain">
            </div> <span class="text-[#422296] font-bold text-sm sm:text-lg">تطوير البرمجيات</span>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">والأنظمة الداخلية</span>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/uxui.svg' alt="uxui"
                class="w-full h-full object-contain">
            </div> <span class="text-[#422296] font-bold text-sm sm:text-lg">تجربة المستخدم</span>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">وتصميم الواجهات</span>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">UI / UX</span>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/ecommerce.webp'
                alt="ecommerce" class="w-full h-full object-contain">
            </div> <span class="text-[#422296] font-bold text-sm sm:text-lg">التجارة</span>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">الإلكترونية</span>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">

              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/consultation.svg'
                alt="consultation.svg" class="w-full h-full object-contain">
            </div>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">الاستشارات</span>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">التقنية</span>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col gap-3 justify-center items-center bg-[#F6F5FC] rounded-xl py-5 h-72">
            <div class="w-[164px] h-[164px]">

              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/services/analytics.svg'
                alt="consultation" class="w-full h-full object-contain">
            </div>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">تحليل</span>
            <span class="text-[#422296] font-bold text-sm sm:text-lg">البيانات</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Services -->


<!-- Our Ways -->
<section class="align-element mt-10 sm:mt-24" id="ourWays">
  <h1 class="text-2xl sm:text-4xl  text-primary mb-5 sm:mb-8 text-center">طريقتنا </h1>
  <p class="text-center font-light text-xl sm:text-2xl  mb-10 sm:mb-14 max-w-4xl leading-8 mx-auto">هل
    منظمتكم
    على
    مستوى عالي من
    الإحترافية؟ إذا أنتم
    تستحقون حلولاً
    إحترافية تليق بكم
    فريق عناقيد التطبيقات معكم من بداية تطوير مشروعك إلى نهايته</p>
  <!-- <div class="relative">
    <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/img1.webp' alt="our story image">

    <div class="absolute bg-error w-40   rounded- h-10 top-1/2 -translate-y-1/2 right-20"></div>
  </div> -->
  <!-- w-16 h-16 sm:w-28 sm:h-28  -->
  <!-- w-12 h-12 sm:w-16 sm:h-16 -->
  <!-- <div class="flex justify-center"> -->
  <div class="flex flex-col justify-center items-center">
    <div class="relative">
      <div class="absolute -top-[1rem] sm:-top-[2rem] right-[-10px] w-10 h-10 sm:w-28 sm:h-28 rounded-full bg-base-100">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/img2.webp' alt="our story image"
          class=" object-contain ">
      </div>
      <div class="absolute -top-[14px] sm:-top-[17px] right-[30%] w-10 h-10 sm:w-16 sm:h-16 rounded-full bg-base-100">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/img3.webp' alt="our story image"
          class="object-contain">
      </div>
      <div class="absolute -top-[1rem] sm:-top-[2rem] w-10 h-10 sm:w-28 sm:h-28 right-[60%] rounded-full bg-base-100">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/img1.webp' alt="our story image"
          class=" object-contain ">
      </div>
      <div
        class="absolute top-[10px] sm:top-[40px] right-[90%] w-10 h-10 sm:w-16 sm:h-16  rounded-full bg-base-100 flex justify-center items-center">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/arrow2.png' alt="our story image"
          class="object-contain w-[14px] lg:w-[19px] h-[20px] lg:h-[37px]">
      </div>
      <div
        class="absolute top-[29%] left-0 lg:-left-[15px]  flex justify-center items-center w-8 h-8 sm:w-32 sm:h-32  rounded-full bg-base-100">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/program.png' alt="our story image"
          class="object-contain animate-spin-slow">
      </div>
      <div
        class="absolute top-[18%] left-[43px] sm:left-[87px] sm:top-[20%]  flex justify-center items-center w-10 h-10 sm:w-24 sm:h-24 md:w-32 md:h-32 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/program2.png' alt="our story image"
          class="object-contain">
      </div>
      <div
        class="absolute top-[44%] sm:top-[46%] left-[45%] w-10 h-10 sm:w-16 sm:h-16 flex justify-center items-center rounded-full bg-base-100 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/arrow3.svg' alt="our story image"
          class="object-contain">
      </div>
      <div
        class="absolute top-[54%] right-[5%] sm:right-0  w-8 h-8 sm:w-32 sm:h-32 flex justify-center items-center rounded-full bg-base-100 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/test.png' alt="our story image"
          class="object-contain animate-bounce-slow">
      </div>
      <div class="absolute top-[63%] right-[12%] w-8 h-8 sm:w-32 sm:h-32 flex justify-center items-center">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/test2.png' alt="our story image"
          class="object-contain">
      </div>
      <div
        class="absolute top-[84%] right-[5%]  w-8 h-8 sm:w-16 sm:h-16 flex justify-center items-center rounded-full bg-base-100 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/arrow4.png' alt="our story image"
          class="object-contain w-[14px] lg:w-[22px] h-[20px] lg:h-[37px]">
      </div>
      <div
        class="absolute top-[74%] right-[38%]  w-32 h-32 sm:w-72 sm:h-72 flex justify-center items-center rounded-full bg-base-100 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/cloud.png' alt="our story image"
          class="object-contain">
      </div>
      <div
        class="absolute top-[74%] right-[38%]  w-12 h-12 sm:w-24 sm:h-24 flex justify-center items-center rounded-full bg-base-100 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/rocket.png' alt="our story image"
          class="object-contain">
      </div>
      <div
        class="absolute top-[91%] right-[52%]  w-12 h-12 sm:w-16 sm:h-16 flex justify-center items-center rounded-full bg-base-100 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/rocket2.png' alt="our story image"
          class="object-contain">
      </div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/our-ways/4.svg' alt=" our story image">

    </div>
  </div>
  <!-- </div> -->

</section>
<!-- Our Ways -->



<!-- Our Partenrs -->
<section class="mt-16 sm:mt-20 " id="ourPartenrs">
  <h1 class="text-2xl sm:text-4xl text-primary mb-0 sm:mb-16 text-center">شركاء نجاح نعتز بثقتهم</h1>

  <div class="hidden md:block align-element">
    <div class="flex justify-center border-b-[1px] border-[#B7B7B7]">
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/1.png' alt=""
          class="w-full h-full object-contain">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/2.png' alt=""
          class="object-contain">
      </div>
      <div class="flex justify-center items-center px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/3.png' alt=""
          class="object-contain ">
      </div>
    </div>
    <div class="flex justify-center border-b-[1px] border-[#B7B7B7]">
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/4.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/5.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/6.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center  px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/7.png' alt="" class=" ">
      </div>
    </div>
    <div class="flex justify-center border-b-[1px] border-[#B7B7B7]">
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/8.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/9.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/10.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/11.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/12.png' alt="" class=" ">
      </div>
    </div>
    <div class="flex justify-center border-b-[1px] border-[#B7B7B7]">
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-5 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/13.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-3 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/14.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-5 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/15.png' alt=""
          class="w-full h-full object-contain">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-5 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/16.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-5 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/17.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center px-3 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/18.png' alt="" class=" ">
      </div>
    </div>
    <div class="flex justify-center border-b-[1px] border-[#B7B7B7]">
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/19.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/20.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/21.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center border-[#B7B7B7] border-l-[1px] px-10 pt-2 pb-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/22.png' alt="" class=" ">
      </div>
      <div class="flex justify-center items-center px-10 py-5 ">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/23.png' alt="" class=" ">
      </div>
    </div>

  </div>

  <!-- mobile -->
  <div class="block sm:hidden align-element">
    <div class="swiper swiperPartener">
      <div class="swiper-wrapper">
        <?php
            for ($i = 1; $i < 13; $i++) { ?>
        <div class="swiper-slide">
          <div class="w-32 h-32">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/parts/<?php echo $i ?>.png'
              alt="partenrs" class="w-full h-full object-contain">
          </div>
        </div>
        <?php }
        ?>

      </div>
    </div>
    <div class="swiper swiperPartener2 mt-4 sm:mt-6">
      <div class="swiper-wrapper">
        <?php
            for ($i = 13; $i < 25; $i++) { ?>
        <div class="swiper-slide">
          <div class="w-32 h-32">
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/parteners/<?php echo $i ?>.webp' alt=""
              class="w-full h-full object-contain">
          </div>
        </div>
        <?php }
        ?>

      </div>
    </div>
  </div>


</section>
<!-- Our Partenrs -->

<!-- What CLients Say -->
<section class="relative mt-10 sm:mt-16 max-w-[90rem] mx-auto">
  <div class="align-element">

    <h1 class="text-2xl sm:text-4xl text-primary mb-5 sm:mb-10 text-center">قالوا عنا</h1>
    <div class="swiper mySwiper2   ">
      <div class="swiper-wrapper mb-12 sm:mb-20">
        <?php 
        $reviews_query = new WP_Query(array(
            'post_type' => 'anaqidClients',
            'posts_per_page' => -1, // Retrieve all posts
        ));
       
       ?>
        <?php
          if ($reviews_query->have_posts()) :
              while ($reviews_query->have_posts()) :
                  $reviews_query->the_post();
          ?>
        <div class="swiper-slide rounded-2xl">
          <div class="flex flex-col md:flex-row items-center gap-10  rounded-2xl">
            <div class="flex flex-col justify-center items-center py-5 roudned-2xl px-5 shadow-lg box-img rounded-xl">
              <?php if (has_post_thumbnail()) : ?>
              <div class="review-thumbnail w-40 h-40 rounded-xl">
                <?php the_post_thumbnail('thumbnail', array('class' => 'w-full h-full object-contain rounded-xl ')); ?>
              </div>
              <?php endif; ?>
              <h4 class="text-[#401F92] text-base sm:text-xl"><?php the_title(); ?></h4>
              <span class="text-[#401F92] text-md sm:text-base font-light"><?php the_excerpt(); ?></span>
            </div>
            <div class="text-[#000] font-light leading-9  text-center md:text-start text-lg sm:text-[24px]  ">
              <?php the_content(); ?>
            </div>
          </div>
        </div>

        <?php
              endwhile;
          endif;
          ?>





      </div>
      <div class=" max-w-[100px] mx-auto relative">

        <div class="swiper-pagination shadow-md rounded-2xl  py-3 mx-auto text-center"></div>
      </div>
    </div>
  </div>
  <div class="absolute top-0  w-64">
    <img src='<?php echo get_template_directory_uri(); ?>/assets/images/pattern.svg
' alt="" class="w-full h-full object-contain">
  </div>
</section>
<!-- What CLients Say -->

<!-- Contact Form  -->
<section class=" min-h-[700px] mt-10 sm:mt-16 " style="
      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contact/shape.webp');
      background-size: 100% 100%;
      background-position:center;
      background-repeat: no-repeat;
      
  " id="contact">
  <!-- <img class="absolute " src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/shape.webp' alt=""> -->
  <div class="align-element  ">
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
          class="border border-solid border-[#401F92] placeholder-[#909090] p-2 rounded-md outline-none w-full"
          placeholder="الإسم" id="name" name="name" required="required" />
        <div class="flex flex-col sm:flex-row gap-3">
          <input type="email"
            class="border border-solid border-[#401F92] placeholder-[#909090] p-2 rounded-md outline-none w-full"
            placeholder="البريد الإلكتروني" id="email" name="email" required="required" />
          <input type="text"
            class="border border-solid border-[#401F92] placeholder-[#909090] p-2 rounded-md outline-none w-full "
            placeholder="رقم الجوال" id="phone" name="phone" required="required" />
        </div>

        <textarea
          class="border border-solid border-[#401F92] placeholder-[#909090] p-2 rounded-md outline-none w-full resize-none h-[300px]"
          placeholder="تفاصيل الرسالة" id="message" name="message" required="required"></textarea>
        <button type="submit"
          class="self-start bg-[#604899] text-center rounded-3xl py-2 px-10 text-base-100 font-bold contactSubmit disabled:bg-[#cdc6c6] w-[194px] sm:w-[208px] mx-auto sm:mx-0">إرسال</button>
        <span class="text-primary font-bold msgContact-sucess">تم ارسال الرسالة إلي شركة عناقيد بنجاح</span>
        <span class="text-error font-bold msgContact-error">حدث خطأ ما حاول مرة أخري</span>
      </form>
    </div>

  </div>
</section>
<!-- Contact Form  -->
<!-- Scroll to top -->
<button type="button" class="rounded-full p-2 flex justify-center items-center bg-primary" id="btn-back-to-top">
  <img src='<?php echo get_template_directory_uri(); ?>/assets/images/arrowup.svg' class="w-5 h-5" alt="ArrowUp">
</button>
<!-- Whatts app button -->
<a href="//api.whatsapp.com/send?phone=966532331339" id="whattapBtn" class="animate animate-bounce" target="_blank">
  <img src='<?php echo get_template_directory_uri(); ?>/assets/images/whatts.svg' class="w-10 h-10" alt="whattsApp">
</a>
<script>
const imageSrc = '<?php echo get_template_directory_uri(); ?>';
</script>
<!-- Scroll to top -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  let swiper = new Swiper('.mySwiper', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    simulateTouch: false,
    speed: 2000,
    loop: true
  });
  var swiper2 = new Swiper('.mySwiper2', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
      dynamicMainBullets: 5
    },
    slidesPerView: "1",
    spaceBetween: 50,
    breakpoints: {
      768: {
        slidesPerView: 1.2,
      },
      // Add more breakpoints as needed
    },
    // centeredSlides: true,
  });

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

  })
  const swiper4 = new Swiper('.swiperPartener', {
    spaceBetween: 30,
    slidesPerView: "2.5",
    autoplay: {
      delay: 2000, // Delay between transitions in milliseconds
      disableOnInteraction: false, // Enable/disable autoplay on user interaction (default is true)
    },
    speed: 1000,
    loop: true,

  })
  const swiper5 = new Swiper('.swiperPartener2', {
    spaceBetween: 30,
    // centeredSlides: true,
    slidesPerView: "2.5",
    autoplay: {
      delay: 3000, // Delay between transitions in milliseconds
      disableOnInteraction: false, // Enable/disable autoplay on user interaction (default is true)
    },
    speed: 1000,
    loop: true,

  })
});
</script>
<?php get_footer() ?>