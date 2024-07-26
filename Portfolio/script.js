$(document).ready(function () {
  $(window).scroll(function () {
    // sticky navbar on scroll script
    if (this.scrollY > 20) {
      $(".navbar").addClass("sticky");
    } else {
      $(".navbar").removeClass("sticky");
    }

    // scroll-up button show/hide script
    if (this.scrollY > 500) {
      $(".scroll-up-btn").addClass("show");
    } else {
      $(".scroll-up-btn").removeClass("show");
    }
  });

  // slide-up script
  $(".scroll-up-btn").click(function () {
    $("html").animate({ scrollTop: 0 });
    // removing smooth scroll on slide-up button click
    $("html").css("scrollBehavior", "auto");
  });

  $(".navbar .menu li a").click(function () {
    // applying again smooth scroll on menu items click
    $("html").css("scrollBehavior", "smooth");
  });

  // toggle menu/navbar script
  $(".menu-btn").click(function () {
    $(".navbar .menu").toggleClass("active");
    $(".menu-btn i").toggleClass("active");
  });

  // typing text animation script
  var typed = new Typed(".typing", {
    strings: [
      "Developer",
      "Freelancer",
      "Web Developer",
      "Front-end Developer",
    ],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true,
  });

  /*
  var typed = new Typed(".typing-2", {
    strings: [
      "Developer",
      "Freelancer",
      "Web Developer",
      "Front-end Developer",
    ],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true,
  });
  */

  // owl carousel script
  $(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeOut: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 2,
        nav: false,
      },
      1000: {
        items: 3,
        nav: false,
      },
    },
  });
});

//Contact Form in PHP
const form = document.querySelector("form");
const statusTxt = form.querySelector(".button-area");

form.onsubmit = (e) => {
  e.preventDefault();
  statusTxt.style.color = "#0D6EFD";
  statusTxt.style.display = "block";
  statusTxt.innerText = "Sending your message...";
  form.classList.add("disabled");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "contact.php", true);
  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      let response = xhr.responseText;
      if (
        response.includes("required") ||
        response.includes("valid") ||
        response.includes("failed")
      ) {
        statusTxt.style.color = "red";
      } else {
        form.reset();
        setTimeout(() => {
          statusTxt.style.display = "none";
        }, 3000);
      }
      statusTxt.innerText = response;
      form.classList.remove("disabled");
    } else {
      statusTxt.style.color = "red";
      statusTxt.innerText = "An error occurred while sending your message.";
      form.classList.remove("disabled");
    }
  };
  xhr.onerror = () => {
    statusTxt.style.color = "red";
    statusTxt.innerText = "An error occurred while sending your message.";
    form.classList.remove("disabled");
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
