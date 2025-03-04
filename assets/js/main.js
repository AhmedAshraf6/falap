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
      console.log('empty data');
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
    const form = document.getElementById("experimentForm");

    form.addEventListener("submit", async function (event) {
        event.preventDefault(); // Prevent page reload

        const formData = new FormData(form);

        try {
            const response = await axios.post('<?php echo admin_url("admin-ajax.php"); ?>', formData, {
                headers: { 'Content-Type': 'multipart/form-data' }
            });

            if (response.data.success) {
                showToast(response.data.data.message, 'green'); // Success
                form.reset(); // Reset form
            } else {
                showToast(response.data.data.message, 'red'); // Error
            }
        } catch (error) {
            showToast('An error occurred. Please try again.', 'red');
        }
    });

    function showToast(message, color) {
        const toast = document.getElementById("toastMessage");
        toast.textContent = message;
        toast.classList.remove("hidden");
        toast.style.backgroundColor = color;
        setTimeout(() => toast.classList.add("hidden"), 3000);
    }
}


