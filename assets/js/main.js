const btnShowNav = document.querySelector('.show-nav');
const btnHideNav = document.querySelector('.hide-nav');
const mobileNav = document.querySelector('.mobile-nav');
btnShowNav.addEventListener('click', () => {
  mobileNav.classList.add('active');
});
btnHideNav.addEventListener('click', () => {
  mobileNav.classList.remove('active');
});
mobileNav.addEventListener('click', (e) => {
  if (e.target.matches('a')) {
    mobileNav.classList.remove('active');
  }
});

// Contact Form Submition
const contactForm = document.getElementById('anaqidContactForm');
if(contactForm){
  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const name = this.querySelector('[name="name"]'),
      email = this.querySelector('[name="email"]'),
      message = this.querySelector('[name="message"]'),
      phoneNumber = this.querySelector('[name="phone"]'),
      messageSuccess = document.querySelector('.msgContact-sucess'),
      messageError = document.querySelector('.msgContact-error'),
      btnSubmit = document.querySelector('.contactSubmit'),
      urlAjax = this.getAttribute('data-url');
  
    const nameValue = name.value,
      emaiValue = email.value,
      phoneValue = phoneNumber.value,
      messageValue = message.value;
  
    btnSubmit.disabled = true;
    btnSubmit.textContent = 'جاري الارسال ..';
    if (!nameValue || !emaiValue || !phoneValue || !messageValue) {
      name.style.border = '1px solid red';
      email.style.border = '1px solid red';
      message.style.border = '1px solid red';
      return;
    }
    var xhr = new XMLHttpRequest();
    xhr.open('POST', urlAjax, true);
    xhr.setRequestHeader(
      'Content-Type',
      'application/x-www-form-urlencoded; charset=UTF-8'
    );
  
    xhr.onload = function () {
      document.querySelector('[name="name"]').value = '';
      document.querySelector('[name="email"]').value = '';
      document.querySelector('[name="message"]').value = '';
      document.querySelector('[name="phone"]').value = '';
      if (xhr.status >= 200 && xhr.status < 400) {
        messageSuccess.style.display = 'block';
        setTimeout(() => {
          messageSuccess.style.display = 'none';
        }, 5000);
      } else {
        messageError.style.display = 'block';
        setTimeout(() => {
          messageError.style.display = 'none';
        }, 5000);
      }
      btnSubmit.disabled = false;
      btnSubmit.textContent = 'ارسال';
    };
  
    xhr.onerror = function () {
      messageError.style.display = 'block';
      setTimeout(() => {
        messageError.style.display = 'none';
      }, 5000);
      btnSubmit.disabled = true;
      btnSubmit.textContent = 'ارسال';
    };
  
    // Construct the data to be sent
    var data =
      'action=sunset_save_user_contact_form&name=' +
      encodeURIComponent(nameValue) +
      '&email=' +
      encodeURIComponent(emaiValue) +
      '&phone=' +
      encodeURIComponent(phoneValue) +
      '&message=' +
      encodeURIComponent(messageValue);
    // Add any other data you want to send
  
    // Send the request
    xhr.send(data);
  });

}





// change icon of arrow in footer


// make stick nav
const stickyElement = document.querySelector('.anaqidNavbar');
const container = document.querySelector('.headerContainer');

// window.addEventListener('scroll', function () {
//   if (window.scrollY > container.offsetTop) {
//     stickyElement.style.position = 'fixed';
//     stickyElement.style.top = '0';
//   } else {
//     stickyElement.style.position = 'static';
//     stickyElement.style.top = '0';
//   }
// });

// add yellow bullet
const navbarMenu = document.querySelectorAll('.navbar-menu li');
const navbarMenuCon = document.querySelector('.navbar-menu');
const mobileNavMenu = document.querySelectorAll('.mobile-navbar-menu li');
const mobileNavMenuCon = document.querySelector('.mobile-navbar-menu');

const checkSectionId = function () {
  // Get all sections
  var sections = document.querySelectorAll('section');

  // Get the current scroll position
  var scrollPosition = window.scrollY;

  // Iterate over each section
  sections.forEach(function (section) {
    // Get the bounding rectangle of the section
    var rect = section.getBoundingClientRect();

    // Check if the section is in the viewport
    if (rect.top <= 50 && rect.bottom >= 50) {
      // Get the ID of the current section
      var sectionId = section.getAttribute('id');

      // Update the corresponding navbar link to active
      var navbarLinkMob = mobileNavMenuCon.querySelector(
        'a[href="#' + sectionId + '"]'
      );
      var navbarLinkDesk = navbarMenuCon.querySelector(
        'a[href="#' + sectionId + '"]'
      );
      if (navbarLinkMob || navbarLinkDesk) {
        mobileNavMenu.forEach((item, index) => {
          item.classList.remove('active');
        });
        navbarMenu.forEach((item, index) => {
          item.classList.remove('active');
        });

        navbarLinkMob.closest('li').classList.add('active');
        navbarLinkDesk.closest('li').classList.add('active');
      }
    }
  });
};
const listenToScroll = function () {
  window.addEventListener('scroll', checkSectionId);
};
// change depend on scroll
document.addEventListener('DOMContentLoaded', () => {
  listenToScroll();
  checkSectionId();
  handleFormSubmission();
});

// handle form submission
function handleFormSubmission() {
    const forms = document.querySelectorAll('.experimentForm');

    forms.forEach(function(form) {
        form.addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent page reload

            const formData = new FormData(form);

            // Validate files before submission
            if (!validateFiles(formData)) {
                return; // Stop submission if validation fails
            }

            formData.append('action', 'handle_experiment_submission');

            try {
                const response = await axios.post(experimentAjax.ajaxurl, formData, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                });

                if (response.data.success) {
                    showToast(response.data.data.message, '#f0fdf4', '#166534'); // Success
                    form.reset();
                    clearVideoPreview(true);
                    clearImagePreview(true);
                } else {
                    showToast(response.data.data.message, '#fef2f2', '#991b1b'); // Error
                }
            } catch (error) {
                showToast('حدث خطأ ما من فضلك حاول مرة أخري', '#fef2f2', '#991b1b');
            }
        });
    });

  function validateFiles(formData) {
    const MAX_IMAGE_SIZE_MB = 10;
    const MAX_VIDEO_SIZE_MB = 40;
    const MAX_DOC_SIZE_MB = 5;

    const IMAGE_EXTENSIONS = ['png', 'jpeg', 'jpg', 'gif'];
    const VIDEO_EXTENSIONS = ['mp4', 'm4v', 'webm', 'ogv', 'wmv', 'flv'];
    const DOC_EXTENSIONS = ['pdf', 'doc', 'docx'];

    for (let [key, file] of formData.entries()) {
        if (file instanceof File) {
            // Skip empty files
            if (file.size === 0) {
                continue;
            }

            const fileExtension = file.name.split('.').pop().toLowerCase();
            const fileSizeMB = file.size / (1024 * 1024);

            if (IMAGE_EXTENSIONS.includes(fileExtension)) {
                if (fileSizeMB > MAX_IMAGE_SIZE_MB) {
                    showToast(`حجم الصورة "${file.name}" يتجاوز الحد الأقصى المسموح به وهو ${MAX_IMAGE_SIZE_MB} ميجابايت.`, '#fef2f2', '#991b1b');
                    return false;
                }
            } else if (VIDEO_EXTENSIONS.includes(fileExtension)) {
                if (fileSizeMB > MAX_VIDEO_SIZE_MB) {
                    showToast(`حجم الفيديو "${file.name}" يتجاوز الحد الأقصى المسموح به وهو ${MAX_VIDEO_SIZE_MB} ميجابايت.`, '#fef2f2', '#991b1b');
                    return false;
                }
           
            } else if (DOC_EXTENSIONS.includes(fileExtension)) {
                if (fileSizeMB > MAX_DOC_SIZE_MB) {
                    showToast(`حجم الملف "${file.name}" يتجاوز الحد الأقصى المسموح به وهو ${MAX_DOC_SIZE_MB} ميجابايت.`, '#fef2f2', '#991b1b');
                    return false;
                }
            } else {
                showToast(`نوع الملف "${file.name}" غير مدعوم.`, '#fef2f2', '#991b1b');
                return false;
            }
        }
    }
    return true;
  }




    function showToast(message, colorBg, colorText) {
        const toast = document.getElementById('toastMessage');
        toast.textContent = message;
        toast.classList.remove('hidden');
        toast.style.backgroundColor = colorBg;
        toast.style.color = colorText;
        toast.style.transition = 'opacity 0.5s ease-in-out'; // Smooth fade
        setTimeout(() => {
            toast.style.opacity = '0';
            setTimeout(() => {
                toast.classList.add('hidden');
                toast.style.opacity = '1';
            }, 500);
        }, 3000);
    }
}


// this handle uplad experiment 

  const   fileInputImage = document.getElementById('file-upload')
  const previewImage = document.getElementById('preview-img');
  if(fileInputImage){
    fileInputImage.addEventListener('change', function (event) {
      const file = event.target.files[0];
    const imagePreviewContainer = document.getElementById('image-preview');
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          previewImage.src = e.target.result;
          imagePreviewContainer.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
      }
      clearImagePreview(false);
    });
  }
function clearImagePreview (clicked){
  const removeButton = document.getElementById('remove-btn');
  const imagePreviewContainer = document.getElementById('image-preview');

   if(clicked){
    fileInputImage.value = '';
    imagePreviewContainer.classList.add('hidden');
    previewImage.src = '';
   }
  removeButton.addEventListener('click', function () {
    fileInputImage.value = '';
    imagePreviewContainer.classList.add('hidden');
    previewImage.src = '';
  });
}

  const videoPreviewContainer = document.getElementById('video-preview');
  const videoElement = document.getElementById('preview-video');
  const fileInputVideo = document.getElementById('file-uploadVid');
if(fileInputVideo){
  fileInputVideo.addEventListener('change', function(event) {
  const file = event.target.files[0];

  if (file) {
    const fileURL = URL.createObjectURL(file);
    videoElement.src = fileURL;
    videoPreviewContainer.classList.remove('hidden');
  }

  clearVideoPreview();
  
});
}
function clearVideoPreview (clicked){
    const removeButtonVid = document.getElementById('remove-btn-vid');
    const videoPreviewContainer = document.getElementById('video-preview');
  if(videoPreviewContainer){ // this check beacuse in device no video is show

    if(clicked){
        videoElement.pause();
        videoElement.src = '';
        videoPreviewContainer.classList.add('hidden');
        fileInputVideo.value = ''; 
    }
    removeButtonVid.addEventListener('click', function() {
        videoElement.pause();
        videoElement.src = '';
        videoPreviewContainer.classList.add('hidden');
        fileInputVideo.value = ''; 
      });
  }
}


// this handle uplad experiment


  