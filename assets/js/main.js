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
});

// video
document.addEventListener('DOMContentLoaded', () => {
    const videos = document.querySelectorAll('.myVideo');
    const playButtons = document.querySelectorAll('.playButton');

    playButtons.forEach((button, index) => {
        const video = videos[index];

        if (!video) {
            console.error(`No video found for button at index ${index}`);
            return;
        }

        video.controls = false; 
        const playIcon = `
            <svg class="w-[50px] h-[50px] md::w-[100px] md:h-[100px]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.1266 8.92883L4.64377 13.8508C3.92387 14.2681 3 13.7628 3 12.9216V3.07765C3 2.23776 3.92254 1.73117 4.64377 2.14978L13.1266 7.07175C13.2903 7.16524 13.4265 7.30037 13.5211 7.46344C13.6158 7.62651 13.6657 7.81172 13.6657 8.00029C13.6657 8.18885 13.6158 8.37407 13.5211 8.53714C13.4265 8.70021 13.2903 8.83534 13.1266 8.92883Z" fill="#fff"/>
            </svg>`;

        const pauseIcon = `
            <svg class="w-[50px] h-[50px] md::w-[100px] md:h-[100px]" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L1 14.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M9 1.5L9 14.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/>
            </svg>`;

        button.innerHTML = playIcon;
        let hideButtonTimeout;

        function hideButtonAfterDelay() {
            clearTimeout(hideButtonTimeout);
            hideButtonTimeout = setTimeout(() => {
                button.style.opacity = "0"; // Hide button
            }, 2000);
        }

        button.addEventListener('click', () => {
            if (video.paused) {
                video.play();
                button.innerHTML = pauseIcon;
            } else {
                video.pause();
                button.innerHTML = playIcon;
            }
            hideButtonAfterDelay();
        });

        video.addEventListener('play', () => {
            button.innerHTML = pauseIcon;
            hideButtonAfterDelay();
        });

        video.addEventListener('pause', () => {
            button.innerHTML = playIcon;
            hideButtonAfterDelay();
        });

        // Show button when mouse enters video
        video.addEventListener('mouseenter', () => {
            button.style.opacity = "1";
            clearTimeout(hideButtonTimeout);
        });

        // Hide button again when mouse leaves after delay
        video.addEventListener('mouseleave', () => {
            hideButtonAfterDelay();
        });

        // Show button when user clicks on video
        video.addEventListener('click', () => {
            button.style.opacity = "1";
            hideButtonAfterDelay();
        });

        // Ensure button is initially visible
        button.style.transition = "opacity 0.3s ease";
        button.style.opacity = "1";
    });
});
