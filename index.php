<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page </title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <?php
  include "./navbar.php"
  ?>
  <?php
  include "./hero.php"
  ?>

  <!-- =====================================================
     ABOUT THE STUDIO SECTION
====================================================== -->

  <section
    id="about"
    class="w-full bg-[#0b0c0e] px-6 py-24 sm:px-8 md:px-12 lg:px-16 lg:py-28 xl:px-24">

    <div
      class="mx-auto w-full max-w-[1240px]">

      <!-- =================================================
         SECTION LABEL
    ================================================== -->

      <div
        class="font-['Montserrat'] text-[10px] font-semibold uppercase tracking-[2px] text-[#ed963c] sm:text-[11px]">
        About the Studio
      </div>


      <!-- =================================================
         MAIN HEADING
    ================================================== -->

      <h2
        class="mt-8 max-w-[1000px] font-['Playfair_Display'] text-[42px] font-normal leading-[1.05] tracking-[-1.5px] text-[#f5f3ef] sm:text-[52px] md:text-[62px] lg:text-[70px] xl:text-[76px]">

        We Don't Just Market Brands.

        <span class="text-[#ed963c]">
          We Build Them.
        </span>

      </h2>


      <!-- =================================================
         CONTENT GRID
    ================================================== -->

      <div
        class="mt-20 grid grid-cols-1 gap-12 border-t border-white/15 pt-7 md:mt-24 md:grid-cols-2 md:gap-16 lg:gap-24">

        <!-- =================================================
           LEFT SIDE
      ================================================== -->

        <div>

          <div
            class="font-['Montserrat'] text-[10px] font-medium uppercase tracking-[2px] leading-[1.8] text-[#4563B5] sm:text-[11px]">
            Creativity · Strategy · Technology · Results
          </div>

        </div>


        <!-- =================================================
           RIGHT SIDE
      ================================================== -->

        <div
          class="max-w-[720px]">

          <p
            class="font-['Montserrat'] text-[16px] font-normal leading-[1.65] text-white/75 sm:text-[17px] md:text-[18px] lg:text-[19px]">
            We help brands create a clear, consistent, and
            professional presence across all digital platforms.
            By understanding your business, audience, and goals,
            we design branding and marketing strategies that
            truly represent who you are and what you stand for.
          </p>


          <p
            class="mt-8 font-['Montserrat'] text-[16px] font-normal leading-[1.65] text-white/90 sm:text-[17px] md:text-[18px] lg:text-[19px]">
            Our focus is on clarity, consistency, and long-term
            brand value.
          </p>

        </div>

      </div>

    </div>

  </section>


  <!-- What Do we do  -->
  <!-- =====================================================
     WHAT WE DO / SERVICES SECTION
====================================================== -->

  <section
    id="services"
    class="w-full bg-[#171a1d] px-6 py-20 sm:px-8 md:px-12 md:py-24 lg:px-16 lg:py-28 xl:px-24">

    <div
      class="mx-auto w-full max-w-[1240px]">

      <!-- =================================================
         SECTION HEADER
    ================================================== -->

      <div
        class="mb-16 grid grid-cols-1 gap-8 md:mb-20 md:grid-cols-2 md:items-start">

        <!-- LEFT HEADING -->

        <div>

          <h2
            class="font-['Playfair_Display'] text-[48px] font-normal leading-none tracking-[-2px] text-[#f5f3ef] sm:text-[58px] md:text-[64px] lg:text-[68px]">
            What We Do
          </h2>

        </div>


        <!-- RIGHT DESCRIPTION -->

        <div
          class="max-w-[420px] md:ml-auto">

          <p
            class="font-['Montserrat'] text-[13px] font-normal leading-[1.65] text-[#4563B5] sm:text-[14px] md:text-[15px]">
            Eight disciplines, one team. Every engagement is
            assembled from the services your brand actually
            needs — nothing padded, nothing generic.
          </p>

        </div>

      </div>


      <!-- =================================================
         SERVICES GRID
    ================================================== -->

      <div
        class="grid grid-cols-1 border-l border-t border-white/10 sm:grid-cols-2 lg:grid-cols-4">


        <!-- =================================================
           CARD 01
      ================================================== -->

        <div
          class="group relative min-h-[320px] overflow-hidden border-b border-r border-white/10">

          <!-- BACKGROUND IMAGE -->

          <div
            class="absolute inset-0 z-0 opacity-0 transition-opacity duration-500 ease-out group-hover:opacity-100">

            <img
              src="./assets/commercial2.webp"
              alt=""
              class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

            <!-- IMAGE DARK OVERLAY -->

            <div class="absolute inset-0 bg-black/50"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-black/10"></div>

          </div>


          <!-- CARD CONTENT -->

          <div
            class="relative z-10 flex h-full min-h-[320px] flex-col p-6 sm:p-7">

            <!-- NUMBER + ARROW -->

            <div
              class="flex items-center justify-between">

              <span
                class="font-['Playfair_Display'] text-[18px] font-normal text-[#ed963c]">
                01
              </span>

              <span
                class="font-['Montserrat'] text-[18px] font-light text-white/60 transition-all duration-300 group-hover:translate-x-1 group-hover:text-white">
                ↗
              </span>

            </div>


            <!-- CONTENT -->

            <div
              class="mt-auto">

              <h3
                class="font-['Playfair_Display'] text-[29px] font-normal leading-[1.05] tracking-[-0.8px] text-[#f5f3ef] sm:text-[30px]">
                Commercial Ads
              </h3>

              <p
                class="mt-5 max-w-[280px] font-['Montserrat'] text-[12px] font-normal leading-[1.65] text-white/55 transition-colors duration-300 group-hover:text-white/75">
                Creative advertising campaigns designed to
                capture attention and drive action.
              </p>

              <div
                class="mt-5 font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-[#ed963c] opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                Explore
              </div>

            </div>

          </div>

        </div>


        <!-- =================================================
           CARD 02
      ================================================== -->

        <div
          class="group relative min-h-[320px] overflow-hidden border-b border-r border-white/10">

          <div
            class="absolute inset-0 z-0 opacity-0 transition-opacity duration-500 ease-out group-hover:opacity-100">

            <img
              src="./assets/SMM.jpg"
              alt=""
              class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

            <div class="absolute inset-0 bg-black/50"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-black/10"></div>

          </div>


          <div
            class="relative z-10 flex h-full min-h-[320px] flex-col p-6 sm:p-7">

            <div class="flex items-center justify-between">

              <span
                class="font-['Playfair_Display'] text-[18px] text-[#ed963c]">
                02
              </span>

              <span
                class="font-['Montserrat'] text-[18px] font-light text-white/60 transition-all duration-300 group-hover:translate-x-1 group-hover:text-white">
                ↗
              </span>

            </div>


            <div class="mt-auto">

              <h3
                class="max-w-[240px] font-['Playfair_Display'] text-[29px] font-normal leading-[1.05] tracking-[-0.8px] text-[#f5f3ef]">
                Social Media
                <br />
                Marketing
              </h3>

              <p
                class="mt-5 max-w-[280px] font-['Montserrat'] text-[12px] leading-[1.65] text-white/55">
                Strategic content, campaigns, and community-
                building that keep your brand relevant.
              </p>

              <div
                class="mt-5 font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-[#ed963c] opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                Explore
              </div>

            </div>

          </div>

        </div>


        <!-- =================================================
           CARD 03
      ================================================== -->

        <div
          class="group relative min-h-[320px] overflow-hidden border-b border-r border-white/10">

          <div
            class="absolute inset-0 z-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100">

            <img
              src="./assets/SEO.png"
              alt=""
              class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" />

            <div class="absolute inset-0 bg-black/50"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-black/10"></div>

          </div>


          <div
            class="relative z-10 flex h-full min-h-[320px] flex-col p-6 sm:p-7">

            <div class="flex items-center justify-between">

              <span
                class="font-['Playfair_Display'] text-[18px] text-[#ed963c]">
                03
              </span>

              <span
                class="font-['Montserrat'] text-[18px] font-light text-white/60 transition-all duration-300 group-hover:translate-x-1 group-hover:text-white">
                ↗
              </span>

            </div>


            <div class="mt-auto">

              <h3
                class="font-['Playfair_Display'] text-[29px] font-normal leading-[1.05] tracking-[-0.8px] text-[#f5f3ef]">
                SEO
              </h3>

              <p
                class="mt-5 max-w-[280px] font-['Montserrat'] text-[12px] leading-[1.65] text-white/55">
                Search strategies that improve visibility,
                organic traffic, and long-term discoverability.
              </p>

              <div
                class="mt-5 font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-[#ed963c] opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                Explore
              </div>

            </div>

          </div>

        </div>


        <!-- =================================================
           CARD 04
      ================================================== -->

        <div
          class="group relative min-h-[320px] overflow-hidden border-b border-r border-white/10">

          <div
            class="absolute inset-0 z-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100">

            <img
              src="./assets/website.webp"
              alt=""
              class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" />

            <div class="absolute inset-0 bg-black/50"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-black/10"></div>

          </div>


          <div
            class="relative z-10 flex h-full min-h-[320px] flex-col p-6 sm:p-7">

            <div class="flex items-center justify-between">

              <span
                class="font-['Playfair_Display'] text-[18px] text-[#ed963c]">
                04
              </span>

              <span
                class="font-['Montserrat'] text-[18px] font-light text-white/60 transition-all duration-300 group-hover:translate-x-1 group-hover:text-white">
                ↗
              </span>

            </div>


            <div class="mt-auto">

              <h3
                class="font-['Playfair_Display'] text-[29px] font-normal leading-[1.05] tracking-[-0.8px] text-[#f5f3ef]">
                Website Development
              </h3>

              <p
                class="mt-5 max-w-[290px] font-['Montserrat'] text-[12px] leading-[1.65] text-white/55">
                Modern, responsive websites designed around
                your brand, audience, and business goals.
              </p>

              <div
                class="mt-5 font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-[#ed963c] opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                Explore
              </div>

            </div>

          </div>

        </div>


        <!-- =================================================
           CARD 05
      ================================================== -->

        <div
          class="group relative min-h-[320px] overflow-hidden border-b border-r border-white/10">

          <div
            class="absolute inset-0 z-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100">

            <img
              src="./assets/video&marketing.webp"
              alt=""
              class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" />

            <div class="absolute inset-0 bg-black/50"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-black/10"></div>

          </div>


          <div
            class="relative z-10 flex h-full min-h-[320px] flex-col p-6 sm:p-7">

            <div class="flex items-center justify-between">

              <span
                class="font-['Playfair_Display'] text-[18px] text-[#ed963c]">
                05
              </span>

              <span
                class="font-['Montserrat'] text-[18px] font-light text-white/60 transition-all duration-300 group-hover:translate-x-1 group-hover:text-white">
                ↗
              </span>

            </div>


            <div class="mt-auto">

              <h3
                class="max-w-[260px] font-['Playfair_Display'] text-[29px] font-normal leading-[1.05] tracking-[-0.8px] text-[#f5f3ef]">
                Video &amp; Media
                <br />
                Production
              </h3>

              <p
                class="mt-5 max-w-[280px] font-['Montserrat'] text-[12px] leading-[1.65] text-white/55">
                Professional video production, editing,
                storytelling, and visual content.
              </p>

              <div
                class="mt-5 font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-[#ed963c] opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                Explore
              </div>

            </div>

          </div>

        </div>


        <!-- =================================================
           CARD 06
      ================================================== -->

        <div
          class="group relative min-h-[320px] overflow-hidden border-b border-r border-white/10">

          <div
            class="absolute inset-0 z-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100">

            <img
              src="./assets/performance&marketing.jpg"
              alt=""
              class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" />

            <div class="absolute inset-0 bg-black/50"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-black/10"></div>

          </div>


          <div
            class="relative z-10 flex h-full min-h-[320px] flex-col p-6 sm:p-7">

            <div class="flex items-center justify-between">

              <span
                class="font-['Playfair_Display'] text-[18px] text-[#ed963c]">
                06
              </span>

              <span
                class="font-['Montserrat'] text-[18px] font-light text-white/60 transition-all duration-300 group-hover:translate-x-1 group-hover:text-white">
                ↗
              </span>

            </div>


            <div class="mt-auto">

              <h3
                class="max-w-[250px] font-['Playfair_Display'] text-[29px] font-normal leading-[1.05] tracking-[-0.8px] text-[#f5f3ef]">
                Performance
                <br />
                Marketing
              </h3>

              <p
                class="mt-5 max-w-[280px] font-['Montserrat'] text-[12px] leading-[1.65] text-white/55">
                Data-driven advertising campaigns focused on
                measurable growth and conversions.
              </p>

              <div
                class="mt-5 font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-[#ed963c] opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                Explore
              </div>

            </div>

          </div>

        </div>


        <!-- =================================================
           CARD 07
      ================================================== -->

        <div
          class="group relative min-h-[320px] overflow-hidden border-b border-r border-white/10">

          <div
            class="absolute inset-0 z-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100">

            <img
              src="./assets/animation.avif"
              alt=""
              class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" />

            <div class="absolute inset-0 bg-black/50"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-black/10"></div>

          </div>


          <div
            class="relative z-10 flex h-full min-h-[320px] flex-col p-6 sm:p-7">

            <div class="flex items-center justify-between">

              <span
                class="font-['Playfair_Display'] text-[18px] text-[#ed963c]">
                07
              </span>

              <span
                class="font-['Montserrat'] text-[18px] font-light text-white/60 transition-all duration-300 group-hover:translate-x-1 group-hover:text-white">
                ↗
              </span>

            </div>


            <div class="mt-auto">

              <h3
                class="font-['Playfair_Display'] text-[29px] font-normal leading-[1.05] tracking-[-0.8px] text-[#f5f3ef]">
                Animated Videos
              </h3>

              <p
                class="mt-5 max-w-[280px] font-['Montserrat'] text-[12px] leading-[1.65] text-white/55">
                Engaging animated content that simplifies ideas
                and makes brands memorable.
              </p>

              <div
                class="mt-5 font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-[#ed963c] opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                Explore
              </div>

            </div>

          </div>

        </div>


        <!-- =================================================
           CARD 08
      ================================================== -->

        <div
          class="group relative min-h-[380px] overflow-hidden border-b border-r border-white/10">

          <div
            class="absolute inset-0 z-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100">

            <img
              src="./assets/graphicdesign.webp"
              alt=""
              class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" />

            <div class="absolute inset-0 bg-black/50"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-black/10"></div>

          </div>


          <div
            class="relative z-10 flex h-full min-h-[320px] flex-col p-6 sm:p-7">

            <div class="flex items-center justify-between">

              <span
                class="font-['Playfair_Display'] text-[18px] text-[#ed963c]">
                08
              </span>

              <span
                class="font-['Montserrat'] text-[18px] font-light text-white/60 transition-all duration-300 group-hover:translate-x-1 group-hover:text-white">
                ↗
              </span>

            </div>


            <div class="mt-auto">

              <h3
                class="font-['Playfair_Display'] text-[29px] font-normal leading-[1.05] tracking-[-0.8px] text-[#f5f3ef]">
                Creative &amp; Branding
              </h3>

              <p
                class="mt-5 max-w-[290px] font-['Montserrat'] text-[12px] leading-[1.65] text-white/55">
                Visual identities, campaign concepts, content,
                and creative direction that make your brand stand out.
              </p>

              <div
                class="mt-5 font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-[#ed963c] opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                Explore
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- 360 Marketing Section -->
  <!-- =====================================================
     FULL-FUNNEL MARKETING SECTION
====================================================== -->

  <section
    id="full-funnel"
    class="relative w-full overflow-hidden bg-[#101722] px-6 py-10 sm:px-8 md:px-12 md:py-12 lg:px-16 lg:py-16 xl:px-24">

    <!-- =================================================
       BACKGROUND IMAGE
  ================================================== -->

    <div
      class="pointer-events-none absolute inset-0">

      <img
        src="./assets/backend.jpg"
        alt=""
        class="absolute right-0 top-0 h-full w-full object-cover opacity-30 lg:w-[65%]" />

      <!-- DARK LEFT-TO-RIGHT FADE -->

      <div
        class="absolute inset-0 bg-gradient-to-r from-[#101722] via-[#101722]/90 to-[#101722]/35"></div>

      <!-- EXTRA DARK OVERLAY -->

      <div
        class="absolute inset-0 bg-[#101722]/25"></div>

    </div>


    <!-- =================================================
       CONTENT
  ================================================== -->

    <div
      class="relative z-10 mx-auto w-full max-w-[1240px]">

      <!-- =================================================
         TOP CONTENT
    ================================================== -->

      <div
        class="grid grid-cols-1 gap-10 lg:grid-cols-[1.35fr_1fr] lg:gap-14">

        <!-- =================================================
           LEFT CONTENT
      ================================================== -->

        <div>

          <!-- LABEL -->

          <div
            class="font-['Montserrat'] text-[10px] font-semibold uppercase tracking-[2px] text-[#ed963c] sm:text-[10px]">
            Full-Funnel Marketing
          </div>


          <!-- HEADING -->

          <h2
            class="mt-4 max-w-[850px] font-['Playfair_Display'] text-[28px] font-normal leading-[1.1] tracking-[-1px] text-[#f5f3ef] sm:text-[32px] md:text-[36px] lg:text-[40px] xl:text-[44px]">
            360° Marketing That
            Delivers Results
          </h2>


          <!-- DESCRIPTION -->

          <p
            class="mt-5 max-w-[540px] font-['Montserrat'] text-[13px] font-normal leading-[1.6] text-[#b8c4d5] sm:text-[13px] md:text-[14px]">
            From SEO and social media marketing to websites,
            ads, and video production, we offer complete 360°
            digital solutions under one roof. Every strategy is
            planned, executed, and optimized to deliver
            measurable results.
          </p>


          <!-- STATEMENT -->

          <p
            class="mt-4 max-w-[560px] font-['Playfair_Display'] text-[17px] font-normal leading-[1.35] text-[#f5f3ef] sm:text-[17px] md:text-[19px]">
            Our goal is simple: help your brand grow consistently
            across all digital channels.
          </p>

        </div>


        <!-- =================================================
           STATS
      ================================================== -->

        <div
          class="flex items-start lg:pt-[60px]">

          <div
            class="grid w-full grid-cols-1 gap-5 sm:grid-cols-3 lg:gap-4">


            <!-- =================================================
               STAT 01
          ================================================== -->

            <div
              class="border-t border-white/15 pt-3">

              <div
                class="font-['Playfair_Display'] text-[30px] font-normal leading-none text-[#f5f3ef] sm:text-[28px] md:text-[30px]">
                360°
              </div>

              <p
                class="mt-3 max-w-[150px] font-['Montserrat'] text-[10px] font-normal leading-[1.5] text-[#8ea5c4] sm:text-[9px]">
                Digital coverage under one roof
              </p>

            </div>


            <!-- =================================================
               STAT 02
          ================================================== -->

            <div
              class="border-t border-white/15 pt-3">

              <div
                class="font-['Playfair_Display'] text-[30px] font-normal leading-none text-[#f5f3ef] sm:text-[28px] md:text-[30px]">
                9
              </div>

              <p
                class="mt-3 max-w-[150px] font-['Montserrat'] text-[10px] font-normal leading-[1.5] text-[#8ea5c4] sm:text-[9px]">
                Core services, fully in-house
              </p>

            </div>


            <!-- =================================================
               STAT 03
          ================================================== -->

            <div
              class="border-t border-white/15 pt-3">

              <div
                class="font-['Playfair_Display'] text-[30px] font-normal leading-none text-[#f5f3ef] sm:text-[28px] md:text-[30px]">
                100%
              </div>

              <p
                class="mt-3 max-w-[160px] font-['Montserrat'] text-[10px] font-normal leading-[1.5] text-[#8ea5c4] sm:text-[9px]">
                Custom-built strategies
              </p>

            </div>

          </div>

        </div>

      </div>


      <!-- =================================================
         DIVIDER
    ================================================== -->

      <div
        class="mt-12 border-t border-white/15 pt-5 sm:mt-14 md:mt-16">

        <!-- =================================================
           PROCESS
      ================================================== -->

        <div
          class="flex flex-wrap items-center gap-x-2 gap-y-2 font-['Montserrat'] text-[10px] font-medium uppercase tracking-[1.5px] text-[#d8deea] sm:text-[9px]">

          <span>
            Strategy
          </span>

          <span class="text-[#4563B5]">
            →
          </span>

          <span>
            Creativity
          </span>

          <span class="text-[#4563B5]">
            →
          </span>

          <span>
            Execution
          </span>

          <span class="text-[#4563B5]">
            →
          </span>

          <span>
            Optimization
          </span>

          <span class="text-[#4563B5]">
            →
          </span>

          <span>
            Growth
          </span>

        </div>

      </div>

    </div>

  </section>

  <!-- =====================================================
     WHY CHOOSE US SECTION
====================================================== -->

  <section
    id="why-choose-us"
    class="relative w-full overflow-hidden bg-[#0b0d10] px-6 py-20 sm:px-8 md:px-12 md:py-24 lg:px-16 lg:py-28 xl:px-24">

    <div class="mx-auto w-full max-w-[1280px]">

      <!-- =================================================
         HEADER
    ================================================== -->

      <div
        class="mb-20 grid grid-cols-1 items-end gap-10 md:mb-24 lg:grid-cols-[1fr_auto]">

        <!-- HEADING -->

        <h2
          class="max-w-[700px] font-['Playfair_Display'] text-[40px] font-normal leading-[1.05] tracking-[-1.5px] text-[#f5f3ef] sm:text-[46px] md:text-[52px] lg:text-[58px]">
          Why Choose Twinkle Media
          <br />
          Hub?
        </h2>


        <!-- SMALL LABEL -->

        <div
          class="pb-2 font-['Montserrat'] text-[9px] font-medium uppercase tracking-[1.8px] text-[#8ea5c4]">
          Six Reasons — Hover To Expand
        </div>

      </div>


      <!-- =================================================
         REASONS LIST

         group/list allows us to hide the previous active
         border whenever the list is being hovered.
    ================================================== -->

      <div class="group/list w-full">


        <!-- =================================================
           REASON 01
      ================================================== -->

        <div
          class="group/item relative grid cursor-pointer grid-cols-[55px_1fr] gap-5 py-8 sm:grid-cols-[75px_1fr] sm:gap-5 md:grid-cols-[95px_1fr_auto] md:items-center md:gap-5 md:py-9">

          <!-- DEFAULT BORDER -->

          <div
            class="absolute bottom-0 left-0 h-px w-full bg-white/15"></div>

          <!-- HOVER BORDER -->

          <div
            class="absolute bottom-0 left-0 h-px w-full origin-left scale-x-0 bg-[#ed963c] transition-transform duration-700 ease-out group-hover/item:scale-x-100"></div>


          <!-- NUMBER -->

          <div
            class="font-['Montserrat'] text-[10px] font-normal text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#ed963c] sm:text-[11px]">
            01
          </div>


          <!-- TITLE -->

          <div
            class="font-['Playfair_Display'] text-[22px] font-normal leading-none tracking-[-0.4px] text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#f5f3ef] sm:text-[25px] md:text-[28px]">
            Affordable Expertise
          </div>


          <!-- DESCRIPTION -->

          <div
            class="col-span-2 mt-3 max-w-[400px] justify-self-end text-right font-['Montserrat'] text-[13px] font-normal leading-[1.6] text-[#8ea5c4] opacity-60 transition-opacity duration-500 group-hover/item:opacity-100 sm:text-[14px] md:col-span-1 md:mt-0 md:max-w-[390px] md:text-[15px]">
            Premium-quality digital marketing and media services without
            unnecessary agency costs.
          </div>

        </div>


        <!-- =================================================
           REASON 02
      ================================================== -->

        <div
          class="group/item relative grid cursor-pointer grid-cols-[55px_1fr] gap-5 py-8 sm:grid-cols-[75px_1fr] sm:gap-5 md:grid-cols-[95px_1fr_auto] md:items-center md:gap-5 md:py-9">

          <div
            class="absolute bottom-0 left-0 h-px w-full bg-white/15"></div>

          <div
            class="absolute bottom-0 left-0 h-px w-full origin-left scale-x-0 bg-[#ed963c] transition-transform duration-700 ease-out group-hover/item:scale-x-100"></div>


          <div
            class="font-['Montserrat'] text-[10px] font-normal text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#ed963c] sm:text-[11px]">
            02
          </div>


          <div
            class="font-['Playfair_Display'] text-[22px] font-normal leading-none tracking-[-0.4px] text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#f5f3ef] sm:text-[25px] md:text-[28px]">
            One Team. Everything Digital.
          </div>


          <div
            class="col-span-2 mt-3 max-w-[400px] justify-self-end text-right font-['Montserrat'] text-[13px] font-normal leading-[1.6] text-[#8ea5c4] opacity-60 transition-opacity duration-500 group-hover/item:opacity-100 sm:text-[14px] md:col-span-1 md:mt-0 md:max-w-[390px] md:text-[15px]">
            Marketing, websites, content, advertising, SEO, and media production
            under one roof.
          </div>

        </div>


        <!-- =================================================
           REASON 03
      ================================================== -->

        <div
          class="group/item relative grid cursor-pointer grid-cols-[55px_1fr] gap-5 py-8 sm:grid-cols-[75px_1fr] sm:gap-5 md:grid-cols-[95px_1fr_auto] md:items-center md:gap-5 md:py-9">

          <div
            class="absolute bottom-0 left-0 h-px w-full bg-white/15"></div>

          <div
            class="absolute bottom-0 left-0 h-px w-full origin-left scale-x-0 bg-[#ed963c] transition-transform duration-700 ease-out group-hover/item:scale-x-100"></div>


          <div
            class="font-['Montserrat'] text-[10px] font-normal text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#ed963c] sm:text-[11px]">
            03
          </div>


          <div
            class="font-['Playfair_Display'] text-[22px] font-normal leading-none tracking-[-0.4px] text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#f5f3ef] sm:text-[25px] md:text-[28px]">
            Creative + Data Driven
          </div>


          <div
            class="col-span-2 mt-3 max-w-[400px] justify-self-end text-right font-['Montserrat'] text-[13px] font-normal leading-[1.6] text-[#8ea5c4] opacity-60 transition-opacity duration-500 group-hover/item:opacity-100 sm:text-[14px] md:col-span-1 md:mt-0 md:max-w-[390px] md:text-[15px]">
            We combine creative thinking with analytics and performance data.
          </div>

        </div>


        <!-- =================================================
           REASON 04
      ================================================== --> 

        <div
          class="group/item relative grid cursor-pointer grid-cols-[55px_1fr] gap-5 py-8 sm:grid-cols-[75px_1fr] sm:gap-5 md:grid-cols-[95px_1fr_auto] md:items-center md:gap-5 md:py-9">

          <div
            class="absolute bottom-0 left-0 h-px w-full bg-white/15"></div>

          <div
            class="absolute bottom-0 left-0 h-px w-full origin-left scale-x-0 bg-[#ed963c] transition-transform duration-700 ease-out group-hover/item:scale-x-100"></div>


          <div
            class="font-['Montserrat'] text-[10px] font-normal text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#ed963c] sm:text-[11px]">
            04
          </div>


          <div
            class="font-['Playfair_Display'] text-[22px] font-normal leading-none tracking-[-0.4px] text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#f5f3ef] sm:text-[25px] md:text-[28px]">
            Customized Strategies
          </div>


          <div
            class="col-span-2 mt-3 max-w-[400px] justify-self-end text-right font-['Montserrat'] text-[13px] font-normal leading-[1.6] text-[#8ea5c4] opacity-60 transition-opacity duration-500 group-hover/item:opacity-100 sm:text-[14px] md:col-span-1 md:mt-0 md:max-w-[390px] md:text-[15px]">
            No copy-paste marketing packages. Every strategy is designed
            around the client's business.
          </div>

        </div>


        <!-- =================================================
           REASON 05
      ================================================== -->

        <div
          class="group/item relative grid cursor-pointer grid-cols-[55px_1fr] gap-5 py-8 sm:grid-cols-[75px_1fr] sm:gap-5 md:grid-cols-[95px_1fr_auto] md:items-center md:gap-5 md:py-9">

          <div
            class="absolute bottom-0 left-0 h-px w-full bg-white/15"></div>

          <div
            class="absolute bottom-0 left-0 h-px w-full origin-left scale-x-0 bg-[#ed963c] transition-transform duration-700 ease-out group-hover/item:scale-x-100"></div>


          <div
            class="font-['Montserrat'] text-[10px] font-normal text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#ed963c] sm:text-[11px]">
            05
          </div>


          <div
            class="font-['Playfair_Display'] text-[22px] font-normal leading-none tracking-[-0.4px] text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#f5f3ef] sm:text-[25px] md:text-[28px]">
            End-to-End Execution
          </div>


          <div
            class="col-span-2 mt-3 max-w-[400px] justify-self-end text-right font-['Montserrat'] text-[13px] font-normal leading-[1.6] text-[#8ea5c4] opacity-60 transition-opacity duration-500 group-hover/item:opacity-100 sm:text-[14px] md:col-span-1 md:mt-0 md:max-w-[390px] md:text-[15px]">
            From the first idea to final execution and optimization,
            we handle the complete process.
          </div>

        </div>


        <!-- =================================================
           REASON 06
      ================================================== -->

        <div
          class="group/item relative grid cursor-pointer grid-cols-[55px_1fr] gap-5 py-8 sm:grid-cols-[75px_1fr] sm:gap-5 md:grid-cols-[95px_1fr_auto] md:items-center md:gap-5 md:py-9">

          <div
            class="absolute bottom-0 left-0 h-px w-full bg-white/15"></div>

          <div
            class="absolute bottom-0 left-0 h-px w-full origin-left scale-x-0 bg-[#ed963c] transition-transform duration-700 ease-out group-hover/item:scale-x-100"></div>


          <div
            class="font-['Montserrat'] text-[10px] font-normal text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#ed963c] sm:text-[11px]">
            06
          </div>


          <div
            class="font-['Playfair_Display'] text-[22px] font-normal leading-none tracking-[-0.4px] text-[#8ea5c4] transition-colors duration-500 group-hover/item:text-[#f5f3ef] sm:text-[25px] md:text-[28px]">
            Focused on Real Growth
          </div>


          <div
            class="col-span-2 mt-3 max-w-[400px] justify-self-end text-right font-['Montserrat'] text-[13px] font-normal leading-[1.6] text-[#8ea5c4] opacity-60 transition-opacity duration-500 group-hover/item:opacity-100 sm:text-[14px] md:col-span-1 md:mt-0 md:max-w-[390px] md:text-[15px]">
            Our goal isn't simply likes and impressions. We focus on visibility,
            trust, leads, engagement, and business growth.
          </div>

        </div>


      </div>

    </div>

  </section>


</body>

</html>