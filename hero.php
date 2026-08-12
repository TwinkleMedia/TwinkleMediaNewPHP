<!-- =====================================================
     HERO SECTION
====================================================== -->

<section
  id="hero"
  class="relative flex min-h-screen w-full items-center overflow-hidden bg-[#0b0c0e]"
>

  <!-- =================================================
       BACKGROUND VIDEO
  ================================================== -->

  <video
    class="absolute inset-0 h-full w-full object-cover"
    autoplay
    muted
    loop
    playsinline
    preload="auto"
  >

    <source
      src="./assets/bgvideo.mp4"
      type="video/mp4"
    />

    Your browser does not support the video tag.

  </video>


  <!-- =================================================
       DARK VIDEO OVERLAY
  ================================================== -->

<div class="absolute inset-0 bg-black/50"></div>
  <!-- =================================================
       ADDITIONAL DARK GRADIENT
       Helps text readability
  ================================================== -->

  <div class="absolute inset-0 bg-gradient-to-r from-black/65 via-black/35 to-black/10"></div>


  <!-- =================================================
       HERO CONTENT
  ================================================== -->

  <div
    class="relative z-10 mx-auto flex min-h-screen w-full max-w-[1240px] items-center px-6 pt-[90px] md:px-8"
  >

    <div
      class="w-full max-w-[650px]"
    >

      <!-- =================================================
           SMALL LABEL
      ================================================== -->

      <div
        class="mb-6 font-['Montserrat'] text-[10px] font-semibold uppercase tracking-[2px] text-[#ed963c] sm:text-[11px]"
      >
        Digital Marketing · Media Production · Navi Mumbai
      </div>


      <!-- =================================================
           HERO HEADING
      ================================================== -->

      <h1
        class="max-w-[650px] font-['Playfair_Display'] text-[52px] font-normal leading-[0.98] tracking-[-2px] text-white sm:text-[64px] md:text-[78px] lg:text-[88px]"
      >
        Build a Strong
        <br />
        Digital Presence
      </h1>


      <!-- =================================================
           DESCRIPTION
      ================================================== -->

      <p
        class="mt-8 max-w-[650px] font-['Montserrat'] text-[15px] font-normal leading-[1.7] text-white/75 sm:text-[16px]"
      >
        We help brands grow through smart digital strategies,
        powerful visuals, and result-driven marketing. From
        creative campaigns to performance marketing, we
        deliver customized solutions that build visibility,
        trust, and real business growth — online and offline.
      </p>


      <!-- =================================================
           HERO BUTTONS
      ================================================== -->

      <div
        class="mt-10 flex flex-col gap-3 sm:flex-row sm:items-center"
      >

        <!-- PRIMARY BUTTON -->

        <a
          href="#contact"
          class="group flex min-h-[48px] items-center justify-center gap-4 bg-[#ed963c] px-7 font-['Montserrat'] text-[10px] font-semibold uppercase tracking-[1.5px] text-[#0b0c0e] no-underline transition-all duration-300 hover:bg-[#f5a54d] sm:min-w-[300px]"
        >

          <span>
            Talk to Our Marketing Expert
          </span>

          <span
            class="text-[16px] transition-transform duration-300 group-hover:translate-x-1"
          >
            ↗
          </span>

        </a>


        <!-- SECONDARY BUTTON -->

        <a
          href="#work"
          class="flex min-h-[48px] items-center justify-center border border-white/20 px-7 font-['Montserrat'] text-[10px] font-semibold uppercase tracking-[1.5px] text-white no-underline transition-all duration-300 hover:border-white/50 hover:bg-white/5 sm:min-w-[190px]"
        >
          Explore Our Work
        </a>

      </div>

    </div>

  </div>


  <!-- =================================================
       SCROLL INDICATOR
  ================================================== -->

  <div
    class="absolute bottom-8 left-6 z-10 flex items-center gap-3 md:left-[calc(50%-620px)]"
  >

    <span
      class="font-['Montserrat'] text-[18px] font-light text-white/40"
    >
      ↓
    </span>

    <span
      class="font-['Montserrat'] text-[9px] font-semibold uppercase tracking-[2px] text-white/40"
    >
      Scroll
    </span>

  </div>

</section>