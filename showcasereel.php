<script src="https://cdn.tailwindcss.com"></script>

<section class="w-full overflow-hidden bg-[#171a1c] py-14 sm:py-16 lg:py-20">

  <div class="mx-auto w-full max-w-[1320px] px-5 sm:px-8 lg:px-10">

    <!-- =========================
         HEADER
    ========================== -->

    <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">

      <div>

        <p class="mb-6 text-[10px] font-medium uppercase tracking-[0.22em] text-[#f28a24]">
          Showreel
        </p>

        <h2 class="font-serif text-[38px] leading-[1.05] tracking-[-0.035em] text-[#f5f1eb] sm:text-[48px] lg:text-[58px]">
          Our Showcase Reels
        </h2>

      </div>


      <p class="max-w-[350px] text-[13px] font-normal leading-[1.6] text-[#92989d] lg:mb-1">
        Commercial, brand, social, product, event and concept work
        <span class="hidden sm:inline">—</span>
        cut for the platform it lives on.
      </p>

    </div>


    <!-- =========================
         REEL CAROUSEL
    ========================== -->

    <div class="relative mt-12">

      <div
        id="reelTrack"
        class="flex gap-5 overflow-x-auto scroll-smooth pb-2 snap-x snap-mandatory [scrollbar-width:none] [&::-webkit-scrollbar]:hidden"
      >


        <!-- =========================
             REEL 1
        ========================== -->

        <article
          class="reel-card group relative h-[500px] w-[280px] flex-none snap-start overflow-hidden bg-black sm:h-[560px] sm:w-[330px] lg:h-[505px] lg:w-[285px]"
          data-index="0"
        >

          <video
            class="reel-video absolute inset-0 h-full w-full object-cover"
            playsinline
            autoplay
            muted
            loop
            preload="auto"
          >
            <source
              src="./reel/Behind The Scenes Before The Brand Launch... 👀Big ideas. Creative planning. Endless detailing. .mp4"
              type="video/mp4"
            >
          </video>


          <!-- Overlay -->

          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black via-black/20 to-black/5"></div>


          <!-- Play / Pause -->

          <button
            type="button"
            class="reel-play absolute right-4 top-4 z-20 flex h-11 w-11 items-center justify-center rounded-full border border-white/60 bg-black/10 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Pause reel"
          >

            <!-- Play -->

            <svg
              class="play-icon hidden h-4 w-4 translate-x-[1px]"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M8 5v14l11-7z"></path>
            </svg>


            <!-- Pause -->

            <svg
              class="pause-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M7 5h4v14H7zM13 5h4v14h-4z"></path>
            </svg>

          </button>


          <!-- Audio -->

          <button
            type="button"
            class="reel-audio absolute right-4 top-16 z-20 flex h-10 w-10 items-center justify-center rounded-full border border-white/40 bg-black/20 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Enable sound"
          >

            <!-- Muted -->

            <svg
              class="mute-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M19 9l-4 6"></path>
              <path d="M15 9l4 6"></path>
            </svg>


            <!-- Sound -->

            <svg
              class="sound-icon hidden h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M15.5 8.5a5 5 0 010 7"></path>
              <path d="M18 6a8.5 8.5 0 010 12"></path>
            </svg>

          </button>


          <!-- Content -->

          <div class="absolute bottom-0 left-0 z-10 w-full p-5 sm:p-6">

            <h3 class="font-serif text-[23px] leading-[1.1] tracking-[-0.02em] text-white sm:text-[25px]">
              Commercial Reels
            </h3>

            <p class="mt-3 text-[9px] font-medium uppercase tracking-[0.18em] text-[#b5b8ba]">
              Studio · 30s
            </p>

          </div>

        </article>



        <!-- =========================
             REEL 2
        ========================== -->

        <article
          class="reel-card group relative h-[500px] w-[280px] flex-none snap-start overflow-hidden bg-black sm:h-[560px] sm:w-[330px] lg:h-[505px] lg:w-[285px]"
          data-index="1"
        >

          <video
            class="reel-video absolute inset-0 h-full w-full object-cover"
            playsinline
            autoplay
            muted
            loop
            preload="auto"
          >

            <source
              src="./reel/✨ Oily skin ka perfect solution aa gaya!Har din excess oil, sticky feel aur dull skin se paresha.mp4"
              type="video/mp4"
            >

          </video>


          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black via-black/20 to-black/5"></div>


          <!-- Play / Pause -->

          <button
            type="button"
            class="reel-play absolute right-4 top-4 z-20 flex h-11 w-11 items-center justify-center rounded-full border border-white/60 bg-black/10 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Pause reel"
          >

            <svg
              class="play-icon hidden h-4 w-4 translate-x-[1px]"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M8 5v14l11-7z"></path>
            </svg>

            <svg
              class="pause-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M7 5h4v14H7zM13 5h4v14h-4z"></path>
            </svg>

          </button>


          <!-- Audio -->

          <button
            type="button"
            class="reel-audio absolute right-4 top-16 z-20 flex h-10 w-10 items-center justify-center rounded-full border border-white/40 bg-black/20 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Enable sound"
          >

            <svg
              class="mute-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M19 9l-4 6"></path>
              <path d="M15 9l4 6"></path>
            </svg>

            <svg
              class="sound-icon hidden h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M15.5 8.5a5 5 0 010 7"></path>
              <path d="M18 6a8.5 8.5 0 010 12"></path>
            </svg>

          </button>


          <div class="absolute bottom-0 left-0 z-10 w-full p-5 sm:p-6">

            <h3 class="font-serif text-[23px] leading-[1.1] tracking-[-0.02em] text-white sm:text-[25px]">
              Brand Reels
            </h3>

            <p class="mt-3 text-[9px] font-medium uppercase tracking-[0.18em] text-[#b5b8ba]">
              Documentary · 60s
            </p>

          </div>

        </article>



        <!-- =========================
             REEL 3
        ========================== -->

        <article
          class="reel-card group relative h-[500px] w-[280px] flex-none snap-start overflow-hidden bg-black sm:h-[560px] sm:w-[330px] lg:h-[505px] lg:w-[285px]"
          data-index="2"
        >

          <video
            class="reel-video absolute inset-0 h-full w-full object-cover"
            playsinline
            autoplay
            muted
            loop
            preload="auto"
          >

            <source
              src="./reel/Think Every Hyaluronic Acid Serum is the Same Think Again. - The Aquist Hydro Vault 8D SerumNot .mp4"
              type="video/mp4"
            >

          </video>


          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black via-black/20 to-black/5"></div>


          <!-- Play / Pause -->

          <button
            type="button"
            class="reel-play absolute right-4 top-4 z-20 flex h-11 w-11 items-center justify-center rounded-full border border-white/60 bg-black/10 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Pause reel"
          >

            <svg
              class="play-icon hidden h-4 w-4 translate-x-[1px]"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M8 5v14l11-7z"></path>
            </svg>

            <svg
              class="pause-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M7 5h4v14H7zM13 5h4v14h-4z"></path>
            </svg>

          </button>


          <!-- Audio -->

          <button
            type="button"
            class="reel-audio absolute right-4 top-16 z-20 flex h-10 w-10 items-center justify-center rounded-full border border-white/40 bg-black/20 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Enable sound"
          >

            <svg
              class="mute-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M19 9l-4 6"></path>
              <path d="M15 9l4 6"></path>
            </svg>

            <svg
              class="sound-icon hidden h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M15.5 8.5a5 5 0 010 7"></path>
              <path d="M18 6a8.5 8.5 0 010 12"></path>
            </svg>

          </button>


          <div class="absolute bottom-0 left-0 z-10 w-full p-5 sm:p-6">

            <h3 class="font-serif text-[23px] leading-[1.1] tracking-[-0.02em] text-white sm:text-[25px]">
              Social Media Reels
            </h3>

            <p class="mt-3 text-[9px] font-medium uppercase tracking-[0.18em] text-[#b5b8ba]">
              Vertical · 15s
            </p>

          </div>

        </article>



        <!-- =========================
             REEL 4
        ========================== -->

        <article
          class="reel-card group relative h-[500px] w-[280px] flex-none snap-start overflow-hidden bg-black sm:h-[560px] sm:w-[330px] lg:h-[505px] lg:w-[285px]"
          data-index="3"
        >

          <video
            class="reel-video absolute inset-0 h-full w-full object-cover"
            playsinline
            autoplay
            muted
            loop
            preload="auto"
          >

            <source
              src="./reel/Every powerful ad starts long before the final cut.From creative planning and production setups .mp4"
              type="video/mp4"
            >

          </video>


          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black via-black/20 to-black/5"></div>


          <!-- Play / Pause -->

          <button
            type="button"
            class="reel-play absolute right-4 top-4 z-20 flex h-11 w-11 items-center justify-center rounded-full border border-white/60 bg-black/10 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Pause reel"
          >

            <svg
              class="play-icon hidden h-4 w-4 translate-x-[1px]"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M8 5v14l11-7z"></path>
            </svg>

            <svg
              class="pause-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M7 5h4v14H7zM13 5h4v14h-4z"></path>
            </svg>

          </button>


          <!-- Audio -->

          <button
            type="button"
            class="reel-audio absolute right-4 top-16 z-20 flex h-10 w-10 items-center justify-center rounded-full border border-white/40 bg-black/20 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Enable sound"
          >

            <svg
              class="mute-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M19 9l-4 6"></path>
              <path d="M15 9l4 6"></path>
            </svg>

            <svg
              class="sound-icon hidden h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M15.5 8.5a5 5 0 010 7"></path>
              <path d="M18 6a8.5 8.5 0 010 12"></path>
            </svg>

          </button>


          <div class="absolute bottom-0 left-0 z-10 w-full p-5 sm:p-6">

            <h3 class="font-serif text-[23px] leading-[1.1] tracking-[-0.02em] text-white sm:text-[25px]">
              Product Reels
            </h3>

            <p class="mt-3 text-[9px] font-medium uppercase tracking-[0.18em] text-[#b5b8ba]">
              Tabletop · 20s
            </p>

          </div>

        </article>



        <!-- =========================
             REEL 5
        ========================== -->

        <article
          class="reel-card group relative h-[500px] w-[280px] flex-none snap-start overflow-hidden bg-black sm:h-[560px] sm:w-[330px] lg:h-[505px] lg:w-[285px]"
          data-index="4"
        >

          <video
            class="reel-video absolute inset-0 h-full w-full object-cover"
            playsinline
            autoplay
            muted
            loop
            preload="auto"
          >

            <source
              src="./reel/Behind the Scenes of SHAURYA 2026 🇮🇳 - Honoring Our Heroes Through Music & UnityA glimpse behi.mp4"
              type="video/mp4"
            >

          </video>


          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black via-black/20 to-black/5"></div>


          <!-- Play / Pause -->

          <button
            type="button"
            class="reel-play absolute right-4 top-4 z-20 flex h-11 w-11 items-center justify-center rounded-full border border-white/60 bg-black/10 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Pause reel"
          >

            <svg
              class="play-icon hidden h-4 w-4 translate-x-[1px]"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M8 5v14l11-7z"></path>
            </svg>

            <svg
              class="pause-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path d="M7 5h4v14H7zM13 5h4v14h-4z"></path>
            </svg>

          </button>


          <!-- Audio -->

          <button
            type="button"
            class="reel-audio absolute right-4 top-16 z-20 flex h-10 w-10 items-center justify-center rounded-full border border-white/40 bg-black/20 text-white backdrop-blur-[2px] transition-all duration-300 hover:border-white hover:bg-white hover:text-black"
            aria-label="Enable sound"
          >

            <svg
              class="mute-icon h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M19 9l-4 6"></path>
              <path d="M15 9l4 6"></path>
            </svg>

            <svg
              class="sound-icon hidden h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.7"
            >
              <path d="M11 5L6 9H3v6h3l5 4V5z"></path>
              <path d="M15.5 8.5a5 5 0 010 7"></path>
              <path d="M18 6a8.5 8.5 0 010 12"></path>
            </svg>

          </button>


          <div class="absolute bottom-0 left-0 z-10 w-full p-5 sm:p-6">

            <h3 class="font-serif text-[23px] leading-[1.1] tracking-[-0.02em] text-white sm:text-[25px]">
              Event Reels
            </h3>

            <p class="mt-3 text-[9px] font-medium uppercase tracking-[0.18em] text-[#b5b8ba]">
              On Location · 45s
            </p>

          </div>

        </article>


      </div>


      <!-- =========================
           NAVIGATION BUTTONS
      ========================== -->

      <div class="mt-8 flex items-center gap-2">

        <button
          id="reelPrev"
          type="button"
          class="flex h-10 w-10 items-center justify-center border border-[#3a3e41] text-[#e6e2dc] transition-all duration-300 hover:border-[#f28a24] hover:bg-[#f28a24] hover:text-[#171a1c]"
          aria-label="Previous reels"
        >

          <svg
            class="h-4 w-4"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
          >
            <path d="M19 12H5"></path>
            <path d="M11 6l-6 6 6 6"></path>
          </svg>

        </button>


        <button
          id="reelNext"
          type="button"
          class="flex h-10 w-10 items-center justify-center border border-[#3a3e41] text-[#e6e2dc] transition-all duration-300 hover:border-[#f28a24] hover:bg-[#f28a24] hover:text-[#171a1c]"
          aria-label="Next reels"
        >

          <svg
            class="h-4 w-4"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
          >
            <path d="M5 12h14"></path>
            <path d="M13 6l6 6-6 6"></path>
          </svg>

        </button>

      </div>

    </div>

  </div>

</section>


<script>

document.addEventListener("DOMContentLoaded", function () {

  const track = document.getElementById("reelTrack");

  const cards = document.querySelectorAll(".reel-card");

  const prevButton = document.getElementById("reelPrev");

  const nextButton = document.getElementById("reelNext");


  /* ==========================================
     PLAY / PAUSE
  ========================================== */

  cards.forEach(function (card) {

    const video = card.querySelector(".reel-video");

    const playButton = card.querySelector(".reel-play");

    const playIcon = card.querySelector(".play-icon");

    const pauseIcon = card.querySelector(".pause-icon");


    playButton.addEventListener("click", function () {

      if (video.paused) {

        video.play()
          .then(function () {

            playIcon.classList.add("hidden");

            pauseIcon.classList.remove("hidden");

            playButton.setAttribute("aria-label", "Pause reel");

          })
          .catch(function (error) {

            console.log("Video playback error:", error);

          });

      } else {

        video.pause();

        playIcon.classList.remove("hidden");

        pauseIcon.classList.add("hidden");

        playButton.setAttribute("aria-label", "Play reel");

      }

    });


    /* ==========================================
       AUDIO BUTTON
    ========================================== */

    const audioButton = card.querySelector(".reel-audio");

    const muteIcon = card.querySelector(".mute-icon");

    const soundIcon = card.querySelector(".sound-icon");


    audioButton.addEventListener("click", function () {

      if (video.muted) {

        video.muted = false;

        muteIcon.classList.add("hidden");

        soundIcon.classList.remove("hidden");

        audioButton.setAttribute("aria-label", "Mute sound");


        /*
          If video has been paused, start it.
        */

        if (video.paused) {

          video.play()
            .then(function () {

              playIcon.classList.add("hidden");

              pauseIcon.classList.remove("hidden");

              playButton.setAttribute("aria-label", "Pause reel");

            })
            .catch(function (error) {

              console.log("Audio playback error:", error);

            });

        }

      } else {

        video.muted = true;

        muteIcon.classList.remove("hidden");

        soundIcon.classList.add("hidden");

        audioButton.setAttribute("aria-label", "Enable sound");

      }

    });


    /* ==========================================
       VIDEO ENDED
       
       Normally this won't be reached because
       the video has loop enabled.
    ========================================== */

    video.addEventListener("ended", function () {

      video.play();

    });

  });


  /* ==========================================
     PREVIOUS
  ========================================== */

  prevButton.addEventListener("click", function () {

    track.scrollBy({
      left: -320,
      behavior: "smooth"
    });

  });


  /* ==========================================
     NEXT
  ========================================== */

  nextButton.addEventListener("click", function () {

    track.scrollBy({
      left: 320,
      behavior: "smooth"
    });

  });


  /* ==========================================
     START ALL VIDEOS
     
     Autoplay is muted so mobile browsers
     allow the videos to start automatically.
  ========================================== */

  cards.forEach(function (card) {

    const video = card.querySelector(".reel-video");

    video.muted = true;

    video.play().catch(function (error) {

      console.log("Autoplay waiting for browser permission:", error);

    });

  });

});

</script>