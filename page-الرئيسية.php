<?php get_header() ?>

<?php 
//  $arrPartener1 = ['assets/images/parteners/1.webp','assets/images/parteners/13.webp','assets/images/parteners/13.webp','']
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- banner -->
<section id="ffalab.com">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner.svg" alt="image"
    class="object-cotain w-full mt-[96px] xl:mt-0">
</section>


<!-- about us -->
<section class="pt-14 lg:pt-24 relative">
  <div class="layout">
    <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-3">
      <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex lg:col-span-2">
        <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
          <h2 class="text-primary text-lg sm:text-4xl font-bold font-manrope  lg:text-start text-center">
            من نحن
          </h2>
          <p class="text-dark text-xs sm:text-xl font-normal leading-normal lg:text-start text-center">
            مرحبًا بك في <span class="text-primary font-semibold">مختبر فاطمة القحطاني</span>، الوجهة الأولى لمحضرات
            المختبر في
            مجالات
            الكيمياء،
            الفيزياء،
            والأحياء!
            تم إنشاء هذا الموقع ليكون مرجعًا شاملاً يساعد محضرات المختبر والمعلمين والطلاب في إجراء التجارب العملية، فهم
            المفاهيم العلمية، والوصول إلى مصادر موثوقة بسهولة.
          </p>
        </div>

      </div>
      <img style="height: 400px;" class="lg:mx-0 mx-auto !h-[400px] rounded-3xl object-contain lg:col-span-1"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/home/صورة-من-نحن-.webp" alt="about Us image" />
    </div>
    <div class="mt-3 sm:mt-5">
      <h2 class="text-secondary text-lg sm:text-4xl  font-manrope  text-center">
        ماذا نقدم؟
      </h2>
      <div class="flex flex-col gap-3 sm:flex-row">
        <div class="flex-1 text-center  text-xs sm:text-xl ">
          <p> تجارب علمية مفصلة لكل من الكيمياء، الفيزياء، والأحياء.</p>
          <p>دليل تشغيل الأجهزة المختبرية وإجراءات السلامة.</p>
        </div>
        <div class="flex-1 text-center  text-xs sm:text-xl">
          <p>مكتبة علمية متكاملة تضم مقالات، كتب إلكترونية، وأبحاث.</p>
          <p> مجتمع علمي تفاعلي يسمح بمشاركة المعرفة والتجارب.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- info -->
<section class=" bg-primary py-8 sm:py-14 mt-14 sm:mt-24" id="experiments">
  <div class="layout">

    <div class="flex flex-col gap-3 sm:gap-5">
      <h2 class="text-secondary text-lg sm:text-4xl  font-manrope  text-center">
        التجربة خير برهان
      </h2>
      <p class="text-white text-xs sm:text-xl font-normal leading-normal text-center">
        في هذا القسم، ستجد دليلًا شاملًا لجميع التجارب العلمية التي يحتاجها طلاب المرحلة الثانوية، بالإضافة إلى خطوات
        واضحة ومبسطة لكل تجربة.
      </p>
    </div>
    <div class="flex flex-col gap-3 sm:gap-5 mt-5 sm:mt-10">
      <h2 class="text-secondary text-lg sm:text-4xl  font-manrope  text-center">
        ماذا ستجد هنا؟
      </h2>
      <div class="grid sm:grid-cols-3 gap-5">
        <div class="rounded-2xl bg-white py-5 px-3 text-center">
          <h4 class="text-base sm:text-lg text-secondary">تجارب الكيمياء</h4>
          <p class="mt-2 text-primary">دراسة التفاعلات الكيميائية، الخواص الفيزيائية والكيميائية للمواد، وتجارب التحليل
            الكيميائي.</p>
        </div>
        <div class="rounded-2xl bg-white py-5 px-3 text-center">
          <h4 class="text-base sm:text-lg text-secondary">تجارب الفيزياء</h4>
          <p class="mt-2 text-primary"> فهم قوانين الحركة، الكهرباء والمغناطيسية، والطاقة. </p>
        </div>
        <div class="rounded-2xl bg-white py-5 px-3 text-center">
          <h4 class="text-base sm:text-lg text-secondary">تجارب الأحياء</h4>
          <p class="mt-2 text-primary">دراسة الكائنات الحية، المجهر، علم الوراثة، والتشريح.</p>
        </div>
      </div>
    </div>

    <div class="flex flex-col gap-3 sm:gap-5 mt-5 sm:mt-10">
      <h2 class="text-secondary text-lg sm:text-4xl  font-manrope text-center sm:text-start">
        كل تجربة تحتوي على:
      </h2>
      <ul class="text-center sm:text-start">
        <li class="text-white text-xs sm:text-xl"> الهدف من التجربة.</li>
        <li class="text-white text-xs sm:text-xl mt-2 sm:mt-3"> الأدوات المطلوبة.</li>
        <li class="text-white text-xs sm:text-xl mt-2 sm:mt-3 "> خطوات تنفيذ التجربة بالتفصيل.</li>
        <li class="text-white text-xs sm:text-xl mt-2 sm:mt-3 "> ملاحظات السلامة لضمان إجراء التجربة بأمان.</li>
        <li class="text-white text-xs sm:text-xl mt-2 sm:mt-3 "> نتائج وتحليل البيانات لمساعدة الطلاب على فهم المفاهيم
          العلمية بشكل
          تطبيقي.</li>
      </ul>
    </div>
    <p class="text-sm sm:text-xl font-bold text-secondary text-center mt-5 sm:mt-10">إذا كنتِ محضرة مختبر، يمكنك مشاركة
      تجاربك
      معنا والمساهمة في
      إثراء المحتوى العلمي

    </p>
  </div>
</section>

<section class="featured_products py-5 lg:py-10 text-base-content my-5 lg:my-8">
  <div class="layout  overflow-hidden">
    <div class="grid grid-cols-4 gap-3 sm:gap-5">
      <div class="col-span-1 relative">
        <div class="w-full home-image-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/صورة-التجارب.webp" alt="image"
            class="w-[467px] min-w-[467px] right-[10px] top-[14px]  h-96 object-cover rounded-3xl  absolute z-[1] py-5">
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


<!-- info -->
<section class=" bg-primary py-8 sm:py-14 mt-14 sm:mt-24" id="preparation-libraries">
  <div class="layout">

    <div class="flex flex-col gap-3 sm:gap-5">
      <h2 class="text-secondary text-lg sm:text-4xl  font-manrope  text-center">
        مكتبة محضرة المختبر

      </h2>
      <p class="text-white text-xs sm:text-xl font-normal leading-normal text-center">
        محضرات المختبر هن العنصر الأساسي في نجاح التجارب العلمية، ولهذا وفرنا هذا القسم خصيصًا لهن!


      </p>
    </div>

    <div class="flex flex-col gap-3 sm:gap-5 mt-5 sm:mt-10">
      <h2 class="text-secondary text-lg sm:text-4xl  font-manrope text-center sm:text-start">
        ماذا يحتوي هذا القسم
      </h2>
      <ul class="text-center sm:text-start">
        <li class="text-xs sm:text-lg text-white">دليل تشغيل الأجهزة المختبرية مثل المجهر، الميزان الحساس، وجهاز الطرد
          المركزي.
        </li>
        <li class="text-xs sm:text-lg text-white mt-2 sm:mt-3">إجراءات السلامة في المختبر وكيفية التعامل مع المواد
          الكيميائية.
        </li>
        <li class="text-xs sm:text-lg text-white mt-2 sm:mt-3">نماذج جاهزة لتقارير المختبر تساعد في توثيق النتائج بطرق
          علمية صحيحة.
        </li>
        <li class="text-xs sm:text-lg text-white mt-2 sm:mt-3">نصائح وتوجيهات لمحضرات المختبر في إدارة التجارب وتوفير
          بيئة عمل آمنة.
        </li>
        <li class="text-xs sm:text-lg text-white mt-2 sm:mt-3">إذا كنتِ محضرة مختبر، يمكنك مشاركة خبراتك وتجاربك معنا
          لنساعد الآخرين
          على
          الاستفادة من معرفتك..
        </li>

      </ul>
    </div>


    <p class="text-xs sm:text-xl font-bold text-secondary text-center mt-5 sm:mt-10">
      إذا كنتِ محضرة مختبر، يمكنك مشاركة خبراتك وتجاربك معنا لنساعد الآخرين على الاستفادة من معرفتك..


    </p>
    <div class="flex justify-center mt-3 sm:mt-5">

      <a href="<?php echo site_url() . '/add-experiment' ?>" class="btn btn-primary !bg-white !text-primary"> شاركينا
        المعرفة</a>
    </div>
  </div>
</section>
<!-- info -->
<section class="mt-14 sm:mt-24" id="libraries">
  <div class="layout">

    <div class="flex flex-col gap-3 sm:gap-5">
      <h2 class="text-primary text-lg sm:text-4xl  font-manrope  text-center">
        قسم المكتبة العلمية
      </h2>
      <h2 class="text-secondary text-lg sm:text-4xl  font-manrope  text-center">
        المعرفة هي بوابة الاكتشاف
      </h2>
      <p class="text-primary text-xs sm:text-xl font-normal leading-normal text-center">
        في هذا القسم، ستجد مكتبة علمية متكاملة تضم المصادر والمراجع العلمية في مجالات الكيمياء، الفيزياء، والأحياء،
        بالإضافة إلى قسم الإعجاز العلمي، الذي يربط بين الحقائق العلمية الحديثة والنصوص القرآنية.
        واضحة ومبسطة لكل تجربة.
      </p>
    </div>



    <div class="flex justify-center mt-5 sm:mt-10">

      <a href="<?php echo site_url() . '/libraries' ?>" class="btn btn-primary ">تصفح المكتبة</a>
    </div>
  </div>
</section>


<!-- Contact Form  -->
<section class=" min-h-[700px] mt-14 sm:mt-24 " style="
      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contact/shape.svg');
      background-size: 100% 100%;
      background-position:center;
      background-repeat: no-repeat;
      
  " id="contact">
  <!-- <img class="absolute " src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/shape.webp' alt=""> -->
  <div class="layout  ">
    <div class="grid md:grid-cols-2  md:justify-center items-center gap-5">
      <div class="flex flex-col items-center sm:items-start gap-6">
        <h1 class="text-lg sm:text-4xl text-primary ">تواصل معنا</h1>

        <!-- mail -->
        <div class="flex flex-col sm:flex-row  items-center gap-3 sm:gap-6">
          <div class="rounded-full w-12 h-12 relative bg-base-100 ">
            <!-- <div
              class="absolute rounded-full bg-primary text-base-100 flex justify-center items-center w-5 h-5 left-0 z-10">
              1
            </div> -->
            <div
              class="flex justify-center items-center w-10 h-10  bg-[#EFEAE4] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/mail.svg' alt="icon">
            </div>
          </div>
          <a class="text-base sm:text-lg" href="mailto:info@ffalab.com">info@ffalab.com</a>
        </div>

        <!-- social media -->
        <div class="flex gap-3">
          <div class="flex items-center gap-3 sm:gap-6">
            <div class="rounded-full w-12 h-12 relative bg-base-100 ">
              <a href="https://x.com/?logout=1741465948106" target="_blank"
                class="flex justify-center items-center w-10 h-10  bg-[#EFEAE4] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
                <img src='<?php echo get_template_directory_uri(); ?>/assets/images/contact/x.svg' alt="icon">
              </a>
            </div>
          </div>


          <a href="https://www.instagram.com/ffalab2025/" target="_blank" class="flex items-center gap-3 sm:gap-6">
            <div class="rounded-full w-12 h-12 relative bg-base-100 ">
              <div
                class="flex justify-center items-center w-10 h-10  bg-[#EFEAE4] rounded-full mb-3 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 absolute ">
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
        <span class="text-primary font-bold msgContact-sucess">تم الارسال لمختبر فاطمةالقحطاني وسيتم التواصل معكم
          قريباً</span>
        <span class="text-error font-bold msgContact-error">حدث خطأ ما حاول مرة أخري</span>
      </form>
    </div>

  </div>
</section>
<!-- Contact Form  -->

<button type="button" class="rounded-full p-2 flex justify-center items-center bg-primary" id="btn-back-to-top">
  <img src='<?php echo get_template_directory_uri(); ?>/assets/images/arrowup.svg' class="w-5 h-5" alt="ArrowUp">
</button>
<!-- Whatts app button -->

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