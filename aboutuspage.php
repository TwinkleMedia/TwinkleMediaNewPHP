<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.4.3/tailwind.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "./navbar.php" ?>

    <!-- =========================================================
     ABOUT HERO SECTION
========================================================= -->
<section class="w-full bg-[#0a0a0f] text-[#f5f1eb] overflow-hidden">
  <div class="mx-auto flex w-full max-w-[1320px] flex-col lg:flex-row items-center gap-14 px-5 py-20 sm:px-8 sm:py-24 lg:px-10 lg:py-32">

    <!-- Left: text content -->
    <div class="w-full lg:w-[52%] max-w-[760px]">

      <!-- Label -->
      <p class="reveal reveal-delay-1 mb-5 text-[9px] font-medium uppercase tracking-[0.22em] text-[#f28a24] sm:mb-6 sm:text-[10px]">
        About The Studio
      </p>

     <!-- Main Heading -->
<h1 class="reveal reveal-delay-2 font-['Playfair_Display',serif] text-[32px] font-normal leading-[1.05] tracking-[-0.03em] text-[#f5f1eb] sm:text-[40px] md:text-[46px] lg:text-[50px] xl:text-[54px]">
  Creative strategies that
  <br class="hidden sm:block">
  drive real growth
</h1>

      <!-- Description -->
      <p class="reveal reveal-delay-3 mt-6 max-w-[560px] text-[12px] font-normal leading-[1.75] text-[#aeb3b7] sm:mt-7 sm:text-[13px] md:text-[14px]">
        At <span class="font-semibold text-[#f5f1eb]">Twinkle Media Hub Pvt. Ltd.</span>, we are a creative
        and result-oriented digital marketing company in Navi Mumbai, offering
        affordable and customized solutions for brands across Mumbai and Pan India.
        We specialize in SEO, PPC campaigns, social media marketing, website
        development, graphic designing, along with video production, commercial
        shoots, AI videos, and UGC content.
      </p>

      <p class="reveal reveal-delay-4 mt-5 max-w-[560px] text-[12px] font-normal leading-[1.75] text-[#aeb3b7] sm:text-[13px] md:text-[14px]">
        We craft <span class="font-semibold text-[#f5f1eb]">impactful campaigns</span> that communicate your
        brand story, build trust, generate quality leads, and deliver measurable
        growth. With a perfect blend of strategic thinking, innovative
        <span class="font-semibold text-[#f5f1eb]"> creativity</span>, data-driven execution, and
        <span class="font-semibold text-[#f5f1eb]"> performance marketing</span>, we help businesses of all
        sizes stand out in the competitive digital landscape through flexible,
        cost-effective, and <span class="font-semibold text-[#f5f1eb]">high-quality solutions</span>.
      </p>

      <!-- CTA -->
      <a href="#contact" class="reveal reveal-delay-5 mt-9 inline-flex items-center justify-center rounded-full bg-[#f28a24] px-8 py-3 text-[13px] font-semibold text-[#0a0a0f] tracking-wide transition hover:bg-[#f5f1eb] sm:mt-10">
        Get Started
      </a>

    </div>

    <!-- Right: image / word-cloud graphic -->
    <div class="reveal reveal-delay-3 w-full lg:w-[48%] flex justify-center lg:justify-end">
      <div class="relative w-full max-w-[560px] aspect-square">

        <!-- glow backdrop -->
        <div class="absolute inset-0 blur-3xl"></div>

        <!-- swap this img for your own artwork/photo -->
        <img
          src="./assets/digitalwebsite1.webp"
          alt="Twinkle Media Hub — digital marketing services"
          class="relative z-10 w-full h-full object-contain"
          onerror="this.style.display='none'"
        >

      </div>
    </div>

  </div>
</section>

    <!-- =========================================================
         MISSION & VISION SECTION
    ========================================================= -->
    <section class="w-full bg-[#0a0a0f]">
      <div class="mx-auto max-w-[1320px] px-5 py-16 sm:px-8 sm:py-20 lg:px-10 lg:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16">

          <!-- Our Mission -->
          <div class="reveal border-t border-[#2a2d30] pt-8">
            <div class="flex items-center gap-2 mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#f28a24]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="9"></circle>
                <circle cx="12" cy="12" r="5"></circle>
                <circle cx="12" cy="12" r="1"></circle>
              </svg>
              <span class="text-[#f28a24] text-[10px] font-medium tracking-[0.22em] uppercase">Our Mission</span>
            </div>
            <p class="font-['Playfair_Display',serif] text-[#f5f1eb] text-3xl md:text-4xl leading-snug font-normal">
              To empower businesses with creative digital solutions, SEO, and social media marketing strategies that generate measurable growth.
            </p>
          </div>

          <!-- Our Vision -->
          <div class="reveal reveal-delay-2 border-t border-[#2a2d30] pt-8">
            <div class="flex items-center gap-2 mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#f28a24]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <span class="text-[#f28a24] text-[10px] font-medium tracking-[0.22em] uppercase">Our Vision</span>
            </div>
            <p class="font-['Playfair_Display',serif] text-[#f5f1eb] text-3xl md:text-4xl leading-snug font-normal">
              To be the leading digital marketing agency transforming brands through innovation, creative design, and data-driven strategies.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- =========================================================
         WHY CHOOSE US SECTION
    ========================================================= -->
    <section class="w-full bg-[#0a0a0f]">
      <div class="mx-auto max-w-[1320px] px-5 py-16 sm:px-8 sm:py-20 lg:px-10 lg:py-20 border-t border-[#2a2d30]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">

          <!-- Left column -->
          <div class="reveal">
            <span class="text-[#f28a24] text-[10px] font-medium tracking-[0.22em] uppercase">Why Choose Us</span>
            <h2 class="font-['Playfair_Display',serif] text-[#f5f1eb] text-5xl md:text-6xl leading-tight mt-4">
              Why Choose Twinkle Media Hub?
            </h2>
            <p class="text-[#aeb3b7] text-[13px] md:text-[14px] leading-relaxed mt-8 max-w-md">
              With over 10 years of experience, we provide expert SEO, social media marketing, creative design, and web development services that deliver real results.
            </p>
          </div>

          <!-- Right column: features grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-10">

            <!-- Item 1 -->
            <div class="reveal reveal-delay-1 border-l border-[#2a2d30] pl-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f28a24] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-1.5m-3.75.75a3.75 3.75 0 117.5 0v.75a2.25 2.25 0 01-2.25 2.25h-3a2.25 2.25 0 01-2.25-2.25v-.75zM12 3a6 6 0 00-6 6c0 2 1 3.5 2 4.5.5.5 1 1.2 1 2h6c0-.8.5-1.5 1-2 1-1 2-2.5 2-4.5a6 6 0 00-6-6z"></path>
              </svg>
              <h3 class="font-['Playfair_Display',serif] text-[#f5f1eb] text-2xl mb-3">Modern Design &amp; Technology</h3>
              <p class="text-[#aeb3b7] text-[13px] leading-relaxed">We use the latest web and design technologies to deliver high-quality digital solutions.</p>
            </div>

            <!-- Item 2 -->
            <div class="reveal reveal-delay-2 border-l border-[#2a2d30] pl-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f28a24] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"></path>
              </svg>
              <h3 class="font-['Playfair_Display',serif] text-[#f5f1eb] text-2xl mb-3">Creative &amp; Strategic Approach</h3>
              <p class="text-[#aeb3b7] text-[13px] leading-relaxed">Our team blends creativity and strategy to produce campaigns that grow your brand online.</p>
            </div>

            <!-- Item 3 -->
            <div class="reveal reveal-delay-3 border-l border-[#2a2d30] pl-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f28a24] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25l4.72 4.72a4.5 4.5 0 001.06 1.06l3.06 3.06m5.66-8.84l-4.72 4.72a4.5 4.5 0 01-1.06 1.06m0 0l-3.06 3.06m0 0L6.31 21.19M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
              </svg>
              <h3 class="font-['Playfair_Display',serif] text-[#f5f1eb] text-2xl mb-3">24/7 Client Support</h3>
              <p class="text-[#aeb3b7] text-[13px] leading-relaxed">We provide round-the-clock support to ensure your campaigns run smoothly and efficiently.</p>
            </div>

            <!-- Item 4 -->
            <div class="reveal reveal-delay-4 border-l border-[#2a2d30] pl-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f28a24] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.306a11.95 11.95 0 015.814-5.518l2.74-1.22m0 0l-5.94-2.281m5.94 2.28l-2.28 5.941"></path>
              </svg>
              <h3 class="font-['Playfair_Display',serif] text-[#f5f1eb] text-2xl mb-3">Business Growth &amp; ROI</h3>
              <p class="text-[#aeb3b7] text-[13px] leading-relaxed">We focus on strategies that increase your business growth and return on investment.</p>
            </div>

            <!-- Item 5 -->
            <div class="reveal reveal-delay-5 border-l border-[#2a2d30] pl-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f28a24] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
              </svg>
              <h3 class="font-['Playfair_Display',serif] text-[#f5f1eb] text-2xl mb-3">Market Strategy &amp; SEO</h3>
              <p class="text-[#aeb3b7] text-[13px] leading-relaxed">Our SEO and market strategies help your business rank higher and attract quality leads.</p>
            </div>

            <!-- Item 6 -->
            <div class="reveal reveal-delay-6 border-l border-[#2a2d30] pl-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f28a24] mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.768 0-1.536-.219-2.121-.659-1.172-.879-1.172-2.303 0-3.182 1.171-.879 3.07-.879 4.242 0l.879.659"></path>
              </svg>
              <h3 class="font-['Playfair_Display',serif] text-[#f5f1eb] text-2xl mb-3">Affordable &amp; Transparent Pricing</h3>
              <p class="text-[#aeb3b7] text-[13px] leading-relaxed">We offer high-quality digital marketing solutions at competitive and transparent rates.</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <?php 
    include "./footer.php"
    ?>

    <script>
      // Hero content: reveal on load (small delay so it doesn't fire before paint)
      window.addEventListener('DOMContentLoaded', () => {
        requestAnimationFrame(() => {
          document.querySelectorAll('section:first-of-type .reveal').forEach(el => {
            el.classList.add('is-visible');
          });
        });

        // Everything else: reveal on scroll, once
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('section:not(:first-of-type) .reveal').forEach(el => {
          observer.observe(el);
        });
      });
    </script>

</body>
</html> 