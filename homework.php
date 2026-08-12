```html
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<section class="w-full bg-[#171a1c] py-16 sm:py-20 lg:py-24">
  <div class="mx-auto w-full max-w-[1320px] px-5 sm:px-8 lg:px-10">

    <!-- Small Heading -->
    <div class="mb-6">
      <p class="text-[11px] font-medium tracking-[0.22em] text-[#f28a24] uppercase">
        Selected Projects
      </p>
    </div>

    <!-- Main Heading -->
    <h2 class="font-serif text-[38px] leading-[1.05] tracking-[-0.03em] text-[#f5f1eb] sm:text-[48px] lg:text-[58px]">
      Our Best Creations
    </h2>

    <!-- Tabs -->
    <div class="mt-10 overflow-x-auto border-b border-[#34383b] scrollbar-hide">
      <div
        id="portfolioTabs"
        class="flex min-w-max items-center gap-7 pb-4 sm:gap-8"
      >

        <button
          type="button"
          data-category="all"
          class="portfolio-tab whitespace-nowrap text-[10px] font-medium tracking-[0.18em] text-[#8f969c] uppercase transition-colors duration-300 hover:text-[#f28a24] active-tab"
        >
          All
        </button>

        <button
          type="button"
          data-category="branding"
          class="portfolio-tab whitespace-nowrap text-[10px] font-medium tracking-[0.18em] text-[#8f969c] uppercase transition-colors duration-300 hover:text-[#f28a24]"
        >
          Branding
        </button>

        <button
          type="button"
          data-category="social"
          class="portfolio-tab whitespace-nowrap text-[10px] font-medium tracking-[0.18em] text-[#8f969c] uppercase transition-colors duration-300 hover:text-[#f28a24]"
        >
          Social Media
        </button>

        <button
          type="button"
          data-category="commercial"
          class="portfolio-tab whitespace-nowrap text-[10px] font-medium tracking-[0.18em] text-[#8f969c] uppercase transition-colors duration-300 hover:text-[#f28a24]"
        >
          Commercial Ads
        </button>

        <button
          type="button"
          data-category="website"
          class="portfolio-tab whitespace-nowrap text-[10px] font-medium tracking-[0.18em] text-[#8f969c] uppercase transition-colors duration-300 hover:text-[#f28a24]"
        >
          Website Development
        </button>

        <button
          type="button"
          data-category="video"
          class="portfolio-tab whitespace-nowrap text-[10px] font-medium tracking-[0.18em] text-[#8f969c] uppercase transition-colors duration-300 hover:text-[#f28a24]"
        >
          Video Production
        </button>

        <button
          type="button"
          data-category="campaign"
          class="portfolio-tab whitespace-nowrap text-[10px] font-medium tracking-[0.18em] text-[#8f969c] uppercase transition-colors duration-300 hover:text-[#f28a24]"
        >
          Digital Campaigns
        </button>

      </div>
    </div>


    <!-- ========================================================= -->
    <!-- PROJECTS -->
    <!-- ========================================================= -->

    <div
      id="portfolioGrid"
      class="mt-10 grid grid-cols-1 gap-x-8 gap-y-14 lg:grid-cols-2"
    >

      <!-- PROJECT 1 -->
      <article
        class="portfolio-project group"
        data-category="website"
      >

        <!-- Image -->
        <div class="relative aspect-[1.42/1] w-full overflow-hidden bg-[#222629]">
          <img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1400&q=85"
            alt="Website development project"
            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.03]"
          >
        </div>

        <!-- Project Content -->
        <div class="relative mt-5 pr-16">

          <p class="mb-3 text-[10px] font-medium tracking-[0.17em] text-[#f28a24] uppercase">
            Website Development
          </p>

          <h3 class="font-serif text-[25px] leading-[1.18] tracking-[-0.02em] text-[#f5f1eb] sm:text-[27px]">
            Conversion-focused website rebuild
          </h3>

          <p class="mt-2 text-[13px] font-normal text-[#92989d]">
            Client Name — Placeholder
          </p>

          <p class="mt-4 max-w-[560px] text-[14px] font-normal leading-[1.65] text-[#b3b7ba]">
            A fast, responsive site structured around real customer journeys and clear enquiry paths.
          </p>

          <!-- Arrow -->
          <button
            type="button"
            class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center border border-[#3b3f42] text-[#e7e4df] transition-all duration-300 hover:border-[#f28a24] hover:bg-[#f28a24] hover:text-[#171a1c]"
            aria-label="View project"
          >
            <span class="text-[17px]">↗</span>
          </button>

        </div>
      </article>


      <!-- PROJECT 2 -->
      <article
        class="portfolio-project group"
        data-category="branding"
      >

        <div class="relative aspect-[1.42/1] w-full overflow-hidden bg-[#222629]">
          <img
            src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=1400&q=85"
            alt="Branding project"
            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.03]"
          >
        </div>

        <div class="relative mt-5 pr-16">

          <p class="mb-3 text-[10px] font-medium tracking-[0.17em] text-[#f28a24] uppercase">
            Branding
          </p>

          <h3 class="font-serif text-[25px] leading-[1.18] tracking-[-0.02em] text-[#f5f1eb] sm:text-[27px]">
            Building a distinctive brand identity
          </h3>

          <p class="mt-2 text-[13px] font-normal text-[#92989d]">
            Client Name — Placeholder
          </p>

          <p class="mt-4 max-w-[560px] text-[14px] font-normal leading-[1.65] text-[#b3b7ba]">
            A complete visual identity designed to create consistency across every customer touchpoint.
          </p>

          <button
            type="button"
            class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center border border-[#3b3f42] text-[#e7e4df] transition-all duration-300 hover:border-[#f28a24] hover:bg-[#f28a24] hover:text-[#171a1c]"
            aria-label="View project"
          >
            <span class="text-[17px]">↗</span>
          </button>

        </div>
      </article>


      <!-- PROJECT 3 -->
      <article
        class="portfolio-project group"
        data-category="social"
      >

        <div class="relative aspect-[1.42/1] w-full overflow-hidden bg-[#222629]">
          <img
            src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=1400&q=85"
            alt="Social media project"
            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.03]"
          >
        </div>

        <div class="relative mt-5 pr-16">

          <p class="mb-3 text-[10px] font-medium tracking-[0.17em] text-[#f28a24] uppercase">
            Social Media
          </p>

          <h3 class="font-serif text-[25px] leading-[1.18] tracking-[-0.02em] text-[#f5f1eb] sm:text-[27px]">
            Social content that drives attention
          </h3>

          <p class="mt-2 text-[13px] font-normal text-[#92989d]">
            Client Name — Placeholder
          </p>

          <p class="mt-4 max-w-[560px] text-[14px] font-normal leading-[1.65] text-[#b3b7ba]">
            Strategic content built around audience behaviour, consistency and meaningful engagement.
          </p>

          <button
            type="button"
            class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center border border-[#3b3f42] text-[#e7e4df] transition-all duration-300 hover:border-[#f28a24] hover:bg-[#f28a24] hover:text-[#171a1c]"
            aria-label="View project"
          >
            <span class="text-[17px]">↗</span>
          </button>

        </div>
      </article>


      <!-- PROJECT 4 -->
      <article
        class="portfolio-project group"
        data-category="commercial"
      >

        <div class="relative aspect-[1.42/1] w-full overflow-hidden bg-[#222629]">
          <img
            src="https://images.unsplash.com/photo-1485846234645-a62644f84728?auto=format&fit=crop&w=1400&q=85"
            alt="Commercial advertising project"
            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.03]"
          >
        </div>

        <div class="relative mt-5 pr-16">

          <p class="mb-3 text-[10px] font-medium tracking-[0.17em] text-[#f28a24] uppercase">
            Commercial Ads
          </p>

          <h3 class="font-serif text-[25px] leading-[1.18] tracking-[-0.02em] text-[#f5f1eb] sm:text-[27px]">
            Campaigns designed to convert
          </h3>

          <p class="mt-2 text-[13px] font-normal text-[#92989d]">
            Client Name — Placeholder
          </p>

          <p class="mt-4 max-w-[560px] text-[14px] font-normal leading-[1.65] text-[#b3b7ba]">
            Creative advertising campaigns combining strong visuals with clear commercial objectives.
          </p>

          <button
            type="button"
            class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center border border-[#3b3f42] text-[#e7e4df] transition-all duration-300 hover:border-[#f28a24] hover:bg-[#f28a24] hover:text-[#171a1c]"
            aria-label="View project"
          >
            <span class="text-[17px]">↗</span>
          </button>

        </div>
      </article>


      <!-- PROJECT 5 -->
      <article
        class="portfolio-project group"
        data-category="video"
      >

        <div class="relative aspect-[1.42/1] w-full overflow-hidden bg-[#222629]">
          <img
            src="https://images.unsplash.com/photo-1492619375914-88005aa9e8fb?auto=format&fit=crop&w=1400&q=85"
            alt="Video production project"
            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.03]"
          >
        </div>

        <div class="relative mt-5 pr-16">

          <p class="mb-3 text-[10px] font-medium tracking-[0.17em] text-[#f28a24] uppercase">
            Video Production
          </p>

          <h3 class="font-serif text-[25px] leading-[1.18] tracking-[-0.02em] text-[#f5f1eb] sm:text-[27px]">
            Visual stories with a purpose
          </h3>

          <p class="mt-2 text-[13px] font-normal text-[#92989d]">
            Client Name — Placeholder
          </p>

          <p class="mt-4 max-w-[560px] text-[14px] font-normal leading-[1.65] text-[#b3b7ba]">
            Film and video content created to capture attention and communicate the story behind the brand.
          </p>

          <button
            type="button"
            class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center border border-[#3b3f42] text-[#e7e4df] transition-all duration-300 hover:border-[#f28a24] hover:bg-[#f28a24] hover:text-[#171a1c]"
            aria-label="View project"
          >
            <span class="text-[17px]">↗</span>
          </button>

        </div>
      </article>


      <!-- PROJECT 6 -->
      <article
        class="portfolio-project group"
        data-category="campaign"
      >

        <div class="relative aspect-[1.42/1] w-full overflow-hidden bg-[#222629]">
          <img
            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1400&q=85"
            alt="Digital campaign project"
            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.03]"
          >
        </div>

        <div class="relative mt-5 pr-16">

          <p class="mb-3 text-[10px] font-medium tracking-[0.17em] text-[#f28a24] uppercase">
            Digital Campaigns
          </p>

          <h3 class="font-serif text-[25px] leading-[1.18] tracking-[-0.02em] text-[#f5f1eb] sm:text-[27px]">
            Digital campaigns built for growth
          </h3>

          <p class="mt-2 text-[13px] font-normal text-[#92989d]">
            Client Name — Placeholder
          </p>

          <p class="mt-4 max-w-[560px] text-[14px] font-normal leading-[1.65] text-[#b3b7ba]">
            Data-led digital campaigns created to reach the right audience and generate measurable results.
          </p>

          <button
            type="button"
            class="absolute right-0 top-0 flex h-11 w-11 items-center justify-center border border-[#3b3f42] text-[#e7e4df] transition-all duration-300 hover:border-[#f28a24] hover:bg-[#f28a24] hover:text-[#171a1c]"
            aria-label="View project"
          >
            <span class="text-[17px]">↗</span>
          </button>

        </div>
      </article>

    </div>
  </div>
</section>


<script>
  document.addEventListener("DOMContentLoaded", function () {

    const tabs = document.querySelectorAll(".portfolio-tab");
    const projects = document.querySelectorAll(".portfolio-project");

    tabs.forEach(function (tab) {

      tab.addEventListener("click", function () {

        const selectedCategory = this.getAttribute("data-category");

        /* Remove active state from all tabs */
        tabs.forEach(function (item) {
          item.classList.remove("text-[#f28a24]");
          item.classList.add("text-[#8f969c]");
        });

        /* Add active state to clicked tab */
        this.classList.remove("text-[#8f969c]");
        this.classList.add("text-[#f28a24]");

        /* Filter projects */
        projects.forEach(function (project) {

          const projectCategory = project.getAttribute("data-category");

          if (
            selectedCategory === "all" ||
            projectCategory === selectedCategory
          ) {
            project.classList.remove("hidden");
          } else {
            project.classList.add("hidden");
          }

        });

      });

    });

  });
</script>
```
