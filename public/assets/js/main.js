/**
* Template Name: KnightOne
* Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
* Updated: Oct 16 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();



  function updateGradeLabel(tabGroup, labelId, labelA, labelB) {
    const tab1 = document.querySelector(`#${tabGroup}1-tab`);
    const tab2 = document.querySelector(`#${tabGroup}2-tab`);
    const label = document.getElementById(labelId);

    if (tab1 && tab2 && label) {
      tab1.addEventListener("click", () => label.textContent = labelA);
      tab2.addEventListener("click", () => label.textContent = labelB);
    }
  }
  updateGradeLabel('free', 'free-grade', 'L.1 Grade A', 'L.1 Grade B');
  updateGradeLabel("business", "business-grade", "L.1 Grade A", "L.1 Grade B");
  updateGradeLabel("developer", "developer-grade", "L.1 Grade A", "L.1 Grade B");


  document.addEventListener("DOMContentLoaded", function () {
    const tabButton = document.getElementById("free1-tab");
    tabButton.addEventListener("click", () => {
      const list = document.querySelectorAll("#gradeAList li");
      list.forEach(li => li.innerHTML = li.textContent); // Reset isi
      animateListItems(list);
    });

    function animateListItems(items) {
      let i = 0;
      function typeItem() {
        if (i < items.length) {
          const text = items[i].textContent;
          items[i].innerHTML = "";
          let j = 0;
          function typeChar() {
            if (j < text.length) {
              items[i].innerHTML += text.charAt(j);
              j++;
              setTimeout(typeChar, 20);
            } else {
              i++;
              setTimeout(typeItem, 100); // jeda antar item
            }
          }
          typeChar();
        }
      }
      typeItem();
    }
  });


  document.addEventListener("DOMContentLoaded", function () {
    const businessAButton = document.getElementById("business1-tab");
    const businessBButton = document.getElementById("business2-tab");

    businessAButton.addEventListener("click", () => {
      const list = document.querySelectorAll("#businessGradeAList li");
      resetAndAnimate(list);
    });

    businessBButton.addEventListener("click", () => {
      const list = document.querySelectorAll("#businessGradeBList li");
      resetAndAnimate(list);
    });

    function resetAndAnimate(items) {
      items.forEach(li => li.innerHTML = li.textContent); // Reset isi sebelum animasi
      animateListItems(items);
    }

    function animateListItems(items) {
      let i = 0;
      function typeItem() {
        if (i < items.length) {
          const text = items[i].textContent;
          items[i].innerHTML = "";
          let j = 0;
          function typeChar() {
            if (j < text.length) {
              items[i].innerHTML += text.charAt(j);
              j++;
              setTimeout(typeChar, 20); // kecepatan huruf
            } else {
              i++;
              setTimeout(typeItem, 80); // jeda antar item
            }
          }
          typeChar();
        }
      }
      typeItem();
    }
  });


  // ────── helper ──────
  function resetAndAnimate(items) {
    items.forEach(li => li.innerHTML = li.textContent);  // reset isi
    animateListItems(items);
  }

  function animateListItems(items) {
    let i = 0;
    function typeItem() {
      if (i < items.length) {
        const text = items[i].textContent;
        items[i].innerHTML = "";
        let j = 0;
        function typeChar() {
          if (j < text.length) {
            items[i].innerHTML += text.charAt(j);
            j++;
            setTimeout(typeChar, 20);   // kecepatan huruf
          } else {
            i++;
            setTimeout(typeItem, 80);   // jeda antar‑item
          }
        }
        typeChar();
      }
    }
    typeItem();
  }

  // ────── Developer ──────
  document.getElementById("developer1-tab").addEventListener("click", () => {
    const list = document.querySelectorAll("#developerGradeAList li");
    resetAndAnimate(list);
  });

  document.getElementById("developer2-tab").addEventListener("click", () => {
    const list = document.querySelectorAll("#developerGradeBList li");
    resetAndAnimate(list);
  });

  // (jika Business & Free sudah dipasang sebelumnya, script‑nya boleh tetap digabung di sini)

document.getElementById("contactForm").addEventListener("submit", function(e){
  e.preventDefault();

  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let subject = document.getElementById("subject").value.trim();
  let message = document.getElementById("message").value.trim();

  let phoneNumber = "6285649838098";

  let whatsappMessage = `Halo, saya ingin menghubungi Sila Agung Agrapana.\n\n` +
                        `Nama: ${name}\n` +
                        `Email: ${email}\n` +
                        `Subjek: ${subject}\n` +
                        `Pesan: ${message}`;

  let url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(whatsappMessage)}`;
  window.open(url, "_blank");
});






