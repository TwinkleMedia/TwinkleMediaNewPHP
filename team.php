<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Team</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  include "./navbar.php"
  ?>

  <!-- TEAM HERO SECTION -->
  <section class="relative overflow-hidden bg-[#080b0f] text-white">
    <!-- Background subtle glow -->
    <div
      class="pointer-events-none absolute left-1/2 top-0 h-[500px] w-[700px] -translate-x-1/2 rounded-full bg-orange-500/5 blur-[140px]"></div>

    <!-- Decorative dots -->
    <div class="pointer-events-none absolute right-4 top-3 hidden sm:block md:right-10 lg:right-16">
      <div
        class="h-24 w-40 opacity-40"
        style="
        background-image: radial-gradient(rgba(249,115,22,0.7) 1px, transparent 1px);
        background-size: 10px 10px;
      "></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-5 py-12 sm:px-8 md:py-16 lg:px-12 lg:py-20">

      <!-- Top Content -->
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">

        <!-- LEFT CONTENT -->
        <div class="relative">

          <!-- Decorative TEAM text -->
          <div
            class="pointer-events-none absolute -left-5 top-2 select-none text-[110px] font-bold leading-none tracking-tight text-white/[0.035] sm:-left-10 sm:text-[150px] lg:-left-16 lg:text-[210px]">
            TEAM
          </div>

          <div class="relative">
            <!-- Small Label -->
            <div class="mb-4 flex items-center gap-3">
              <span class="h-px w-6 bg-orange-500"></span>

              <span class="text-[9px] font-semibold uppercase tracking-[0.28em] text-orange-400">
                Our Team
              </span>

              <span class="h-px w-12 bg-orange-500/50"></span>
            </div>

            <!-- Heading -->
            <h1
              class="max-w-2xl font-serif text-4xl leading-[1.08] tracking-tight text-[#e7e7e7] sm:text-5xl md:text-6xl lg:text-[62px]">
              Creative Minds.
              <br />
              Strategic Thinkers.
              <br />
              <span class="text-orange-400">Growth Drivers.</span>
            </h1>

            <!-- Bottom Tagline -->
            <div class="mt-7 flex flex-wrap items-center gap-x-2 gap-y-2 text-[8px] font-semibold uppercase tracking-[0.3em] text-slate-400 sm:text-[9px]">
              <span>Creativity</span>
              <span class="text-orange-500">•</span>
              <span>Strategy</span>
              <span class="text-orange-500">•</span>
              <span>Technology</span>
              <span class="text-orange-500">•</span>
              <span>Results</span>
            </div>
          </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="relative max-w-xl lg:pt-4">

          <!-- First Paragraph -->
          <p class="text-sm leading-7 text-slate-400 sm:text-[15px]">
            At Twinkle Media Hub Pvt. Ltd.®, our team of passionate
            creatives, strategists and digital experts work together to
            craft impactful campaigns that build brands, generate leads
            and deliver measurable growth.
          </p>

          <!-- Orange Divider -->
          <div class="my-6 h-px w-12 bg-orange-500/70"></div>

          <!-- Second Paragraph -->
          <p class="max-w-md text-sm leading-7 text-slate-400 sm:text-[15px]">
            We combine creativity, data & technology to deliver
            high-quality, result-driven solutions that help
            brands stand out and grow.
          </p>
        </div>
      </div>

      <!-- Bottom Statistics -->
      <div class="mt-12 border-y border-white/10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5">

          <!-- Stat 1 -->
          <div class="flex items-center gap-4 border-b border-white/10 px-4 py-5 sm:border-r sm:border-b lg:border-b-0">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-9 w-9 flex-shrink-0 text-orange-500"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="1.5">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
            </svg>

            <div>
              <div class="text-lg font-semibold text-white">10+</div>
              <div class="text-[9px] text-slate-500">Team Experts</div>
            </div>
          </div>

          <!-- Stat 2 -->
          <div class="flex items-center gap-4 border-b border-white/10 px-4 py-5 lg:border-r lg:border-b-0">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-9 w-9 flex-shrink-0 text-orange-500"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="1.5">
              <circle cx="12" cy="12" r="8" />
              <circle cx="12" cy="12" r="4" />
              <path
                stroke-linecap="round"
                d="M12 12l7-7" />
              <path
                stroke-linecap="round"
                d="M17 4h3v3" />
            </svg>

            <div>
              <div class="text-lg font-semibold text-white">5+</div>
              <div class="text-[9px] text-slate-500">Years of Experience</div>
            </div>
          </div>

          <!-- Stat 3 -->
          <div class="flex items-center gap-4 border-b border-white/10 px-4 py-5 sm:border-r sm:border-b lg:border-b-0">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-9 w-9 flex-shrink-0 text-orange-500"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="1.5">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 2l2.5 6.5L21 11l-5 4 1.5 7L12 18l-5.5 4L8 15l-5-4 6.5-2.5L12 2z" />
            </svg>

            <div>
              <div class="text-lg font-semibold text-white">500+</div>
              <div class="text-[9px] text-slate-500">Projects Delivered</div>
            </div>
          </div>

          <!-- Stat 4 -->
          <div class="flex items-center gap-4 border-b border-white/10 px-4 py-5 lg:border-r lg:border-b-0">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-9 w-9 flex-shrink-0 text-orange-500"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" d="M4 20V10" />
              <path stroke-linecap="round" d="M10 20V6" />
              <path stroke-linecap="round" d="M16 20V3" />
              <path stroke-linecap="round" d="M22 20H2" />
            </svg>

            <div>
              <div class="text-lg font-semibold text-white">98%</div>
              <div class="text-[9px] text-slate-500">Client Satisfaction</div>
            </div>
          </div>

          <!-- Stat 5 -->
          <div class="flex items-center gap-4 px-4 py-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-9 w-9 flex-shrink-0 text-orange-500"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="1.5">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.5 12.5l2 2 5-5" />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 9l3-3 4 3 3-3 6 5-3 7-5 1-3-3-3 1-3-4 1-3z" />
            </svg>

            <div>
              <div class="text-sm font-medium text-white">Our Mission</div>
              <div class="text-[9px] text-slate-500">Your Growth</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

</body>

</html>