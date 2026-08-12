<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Twinkle Media Hub - Header</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;500&display=swap"
    rel="stylesheet"
  />
</head>

<body class="m-0 bg-[#0b0c0e]">

  <!-- =====================================================
       HEADER
  ====================================================== -->

  <header
    class="absolute top-0 left-0 z-[9999] w-full border-t border-white/10 bg-transparent"
  >

    <div
      class="mx-auto flex h-[88px] w-full max-w-[1240px] items-center justify-between px-6"
    >

      <!-- =================================================
           LOGO
      ================================================== -->

      <a
        href="#"
        class="flex shrink-0 items-center"
      >
        <img
          src="./assets/newlogo.webp"
          alt="Twinkle Media Hub"
          class="block h-[55px] w-auto object-contain"
        />
      </a>


      <!-- =================================================
           DESKTOP NAVIGATION
      ================================================== -->

      <nav
        class="ml-auto mr-[55px] hidden items-center justify-center gap-[30px] lg:flex"
      >

        <a
          href="#"
          class="font-['Montserrat'] text-[14px] font-medium text-white/75 no-underline transition-colors duration-300 hover:text-white"
        >
          Home
        </a>

        <a
          href="#"
          class="font-['Montserrat'] text-[14px] font-medium text-white/75 no-underline transition-colors duration-300 hover:text-white"
        >
          About
        </a>

        <a
          href="#"
          class="font-['Montserrat'] text-[14px] font-medium text-white/75 no-underline transition-colors duration-300 hover:text-white"
        >
          Services
        </a>

        <a
          href="#"
          class="font-['Montserrat'] text-[14px] font-medium text-white/75 no-underline transition-colors duration-300 hover:text-white"
        >
          Media
        </a>

        <a
          href="#"
          class="font-['Montserrat'] text-[14px] font-medium text-white/75 no-underline transition-colors duration-300 hover:text-white"
        >
          Reviews
        </a>

        <a
          href="#"
          class="font-['Montserrat'] text-[14px] font-medium text-white/75 no-underline transition-colors duration-300 hover:text-white"
        >
          Contact
        </a>

      </nav>


      <!-- =================================================
           DESKTOP CTA
      ================================================== -->

      <a
        href="#"
        class="hidden h-[40px] min-w-[246px] items-center justify-center border border-[#ed963c] px-[22px] font-['Montserrat'] text-[11px] font-semibold uppercase tracking-[1.5px] text-[#ed963c] no-underline transition-all duration-300 hover:bg-[#ed963c] hover:text-[#0b0c0e] lg:flex"
      >
        Talk to Our Marketing Expert
      </a>


      <!-- =================================================
           MOBILE MENU BUTTON
      ================================================== -->

      <button
        id="tmh-menu-button"
        type="button"
        aria-label="Open menu"
        aria-expanded="false"
        class="flex h-[46px] w-[46px] items-center justify-center border-2 border-[#f09a3d] bg-transparent p-0 text-white lg:hidden"
      >

        <!-- Hamburger -->
        <span
          id="tmh-icon-open"
          class="flex items-center justify-center font-['Montserrat'] text-[24px] font-light leading-none"
        >
          ☰
        </span>

        <!-- Close -->
        <span
          id="tmh-icon-close"
          class="hidden items-center justify-center font-['Montserrat'] text-[30px] font-light leading-none"
        >
          ×
        </span>

      </button>

    </div>


    <!-- =====================================================
         MOBILE MENU
    ====================================================== -->

    <div
      id="tmh-mobile-menu"
      class="absolute left-0 top-[74px] hidden min-h-[calc(100vh-74px)] w-full overflow-y-auto border-t border-white/10 bg-[#0b0c0e] px-[25px] pb-[35px] pt-[30px] lg:top-[88px] lg:hidden"
    >

      <div class="mx-auto w-full max-w-[700px]">

        <!-- =================================================
             MOBILE LINKS
        ================================================== -->

        <nav class="flex flex-col">

          <a
            href="#"
            class="flex min-h-[77px] items-center border-b border-white/10 font-['Playfair_Display'] text-[30px] font-normal text-white no-underline transition-colors duration-300 hover:text-[#ed963c]"
          >
            Home
          </a>

          <a
            href="#"
            class="flex min-h-[77px] items-center border-b border-white/10 font-['Playfair_Display'] text-[30px] font-normal text-white no-underline transition-colors duration-300 hover:text-[#ed963c]"
          >
            About
          </a>

          <a
            href="#"
            class="flex min-h-[77px] items-center border-b border-white/10 font-['Playfair_Display'] text-[30px] font-normal text-white no-underline transition-colors duration-300 hover:text-[#ed963c]"
          >
            Services
          </a>

          <a
            href="#"
            class="flex min-h-[77px] items-center border-b border-white/10 font-['Playfair_Display'] text-[30px] font-normal text-white no-underline transition-colors duration-300 hover:text-[#ed963c]"
          >
            Work
          </a>

          <a
            href="#"
            class="flex min-h-[77px] items-center border-b border-white/10 font-['Playfair_Display'] text-[30px] font-normal text-white no-underline transition-colors duration-300 hover:text-[#ed963c]"
          >
            Media
          </a>

          <a
            href="#"
            class="flex min-h-[77px] items-center border-b border-white/10 font-['Playfair_Display'] text-[30px] font-normal text-white no-underline transition-colors duration-300 hover:text-[#ed963c]"
          >
            Reviews
          </a>

          <a
            href="#"
            class="flex min-h-[77px] items-center border-b border-white/10 font-['Playfair_Display'] text-[30px] font-normal text-white no-underline transition-colors duration-300 hover:text-[#ed963c]"
          >
            Contact
          </a>

        </nav>


        <!-- =================================================
             MOBILE CTA
        ================================================== -->

        <a
          href="#"
          class="mt-[40px] flex min-h-[68px] w-full items-center justify-center bg-[#ed963c] px-5 py-[15px] text-center font-['Montserrat'] text-[11px] font-semibold uppercase leading-[1.5] tracking-[1.5px] text-[#0b0c0e] no-underline"
        >
          Talk to Our Marketing Expert
        </a>


        <!-- =================================================
             MOBILE DESCRIPTION
        ================================================== -->

        <div
          class="mt-[30px] font-['Montserrat'] text-[14px] font-normal leading-[1.7] text-[#8ea5c4]"
        >
          Affordable Digital Marketing &amp; Media
          Agency in Navi Mumbai
        </div>

      </div>

    </div>

  </header>


  <!-- =====================================================
       JAVASCRIPT
  ====================================================== -->

  <script>

    const menuButton =
      document.getElementById("tmh-menu-button");

    const mobileMenu =
      document.getElementById("tmh-mobile-menu");

    const iconOpen =
      document.getElementById("tmh-icon-open");

    const iconClose =
      document.getElementById("tmh-icon-close");


    /* =====================================================
       OPEN / CLOSE MOBILE MENU
    ====================================================== */

    menuButton.addEventListener("click", function () {

      const isOpen =
        !mobileMenu.classList.contains("hidden");


      if (isOpen) {

        /* CLOSE */

        mobileMenu.classList.add("hidden");

        iconOpen.classList.remove("hidden");
        iconOpen.classList.add("flex");

        iconClose.classList.add("hidden");
        iconClose.classList.remove("flex");

        menuButton.setAttribute(
          "aria-expanded",
          "false"
        );

        menuButton.setAttribute(
          "aria-label",
          "Open menu"
        );

      } else {

        /* OPEN */

        mobileMenu.classList.remove("hidden");

        iconOpen.classList.add("hidden");
        iconOpen.classList.remove("flex");

        iconClose.classList.remove("hidden");
        iconClose.classList.add("flex");

        menuButton.setAttribute(
          "aria-expanded",
          "true"
        );

        menuButton.setAttribute(
          "aria-label",
          "Close menu"
        );

      }

    });


    /* =====================================================
       CLOSE MENU WHEN LINK IS CLICKED
    ====================================================== */

    const mobileLinks =
      document.querySelectorAll(
        "#tmh-mobile-menu nav a"
      );


    mobileLinks.forEach(function (link) {

      link.addEventListener("click", function () {

        mobileMenu.classList.add("hidden");

        iconOpen.classList.remove("hidden");
        iconOpen.classList.add("flex");

        iconClose.classList.add("hidden");
        iconClose.classList.remove("flex");

        menuButton.setAttribute(
          "aria-expanded",
          "false"
        );

      });

    });

  </script>

</body>
</html>