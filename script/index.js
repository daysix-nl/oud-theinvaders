"use strict";
try {
  const buttonHamburger = document.querySelector(".button-hamburger");
  const buttonClose = document.querySelector(".close-button");
  const overlayMobileNavigation = document.querySelector(".hamburger-overlay");

  buttonHamburger.addEventListener("click", () => {
    overlayMobileNavigation.classList.toggle("show");
    document.querySelector("header").classList.toggle("active-navbar");
    const scrollpos = window.scrollY;

    console.log(scrollpos);

    if (
      scrollpos < 150 &&
      !overlayMobileNavigation.classList.contains("show")
    ) {
      document.querySelector("header").classList.remove("active");
    }
  });
} catch (error) { }

try {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  });

  const hiddenElements = document.querySelectorAll(".element-fade-in");
  hiddenElements.forEach((el) => observer.observe(el));
} catch (error) { }

try {
  window.addEventListener("scroll", () => {
    const scrollpos = window.scrollY;

    if (scrollpos > 150) {
      document.querySelector("header").classList.add("active");
    } else {
      document.querySelector("header").classList.remove("active");
    }
  });
} catch (error) { }

try {
  const forEach = (array, callback, scope) => {
    for (let i = 0; i < array.length; i++) {
      callback.call(scope, i, array[i]);
    }
  };

  const buttonMember = document.querySelectorAll(".button-show-more");

  forEach(buttonMember, function (i, el) {
    el.addEventListener("click", function () {
      const buttonMemberActive = document.querySelectorAll(".button-show-more");
      const block = document.querySelectorAll(".container.work-block");
      // Als de button de class active heeft verwijder dan de class active en voeg een class toe
      if (this.classList.contains("active")) {
        this.classList.remove("active");
        this.innerHTML = "MORE";

        this.closest(".work-block").classList.add("list-b-none");
      } else {
        // Verwijder alle classes van de button
        for (let i = 0; i < buttonMemberActive.length; i++) {
          buttonMemberActive[i].classList.remove("active");
        }
        // Voeg class toe waar je op drukt
        this.classList.add("active");

        // Voeg toe alle classes an de blocks
        for (let i = 0; i < block.length; i++) {
          block[i].classList.add("list-b-none");
        }
        // verwijder class die dicht bij button zit
        this.closest(".work-block.list-b-none").classList.remove("list-b-none");
      }

      const buttonMemberActiveClass = document.querySelector(
        ".button-show-more.active"
      );
      // Bekijk welke tekst erin moet
      if (buttonMemberActiveClass) {
        for (let i = 0; i < buttonMemberActive.length; i++) {
          buttonMemberActive[i].innerHTML = "MORE";
        }
        buttonMemberActiveClass.innerHTML = "LESS";
      }
    });
  });
} catch (error) { }


// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});


/*********************/
/*** contact overlay ***/
/*********************/
try {
  const contactButton = document.querySelectorAll("#popup");
  const contactOverlay = document.querySelector(".overlay-contact");
  const contactClose = document.querySelector(".button-close");
  const ContactBackground = document.querySelector(
    ".overlay-contact-background"
  );
  for (let i = 0; i < contactButton.length; i++) {
    contactButton[i].addEventListener("click", () => {
      contactOverlay.classList.add("open");
      ContactBackground.classList.add("open");
    });
    contactClose.addEventListener("click", () => {
      contactOverlay.classList.remove("open");
      ContactBackground.classList.remove("open");
    });
    ContactBackground.addEventListener("click", () => {
      contactOverlay.classList.remove("open");
      ContactBackground.classList.remove("open");
    });
  }
} catch (error) { }


