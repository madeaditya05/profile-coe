@include('layoutsbootstrap.header')

    <main class="main relative">
      <!-- Hero section -->
      <section
        id="home"
        class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]"
      >
        <div class="container">
          <div class="-mx-5 flex flex-wrap items-center">
            <div class="w-full px-5">
              <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                <h1
                    class="mb-6 text-3xl font-bold leading-snug text-black sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight"
                >
                    COE SMART ELECTRIC VEHICLE
                </h1>
                <p class="mx-auto mb-9 max-w-[600px] text-base sm:text-lg sm:leading-normal text-body-light-12 dark:text-body-dark-11">
                   dr. Karen Natalia Naibaho Sp.OG
                </p>
                

                <ul
                  class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5"
                >
                  <li>
                    <a
                      href="javascript:boid(0)"
                      class="video-popup flex items-center gap-4 rounded-md bg-gray-200 text-gray-800 dark:bg-primary-color/[0.15] dark:text-primary-color hover:bg-primary-color hover:text-primary md:px-7 md:py-[14px]"
                      role="button"
                      ><i class="lni lni-play text-lg/none"></i> Watch Intro</a
                    >
                  </li>
                </ul>
                <div class="w-full px-5">
              <div class="scroll-revealed relative z-10 mx-auto max-w-[845px]">
                <figure class="mt-16">
                  <img
                    src="./assets/img/2.png"
                    alt="Hero image"
                    class="mx-auto max-w-full rounded-t-xl rounded-tr-xl"
                  />
                </figure>

                <div class="absolute -left-9 bottom-0 z-[-1]">
                  <img
                    src="./assets/img/dots.svg"
                    alt
                    class="w-[120px] opacity-75"
                  />
                </div>

                <div class="absolute -right-6 -top-6 z-[-1]">
                  <img
                    src="./assets/img/dots.svg"
                    alt
                    class="w-[120px] opacity-75"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About section -->
      <section id="about" class="section-area">
        <div class="container">
          <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
            <div class="w-full">
              <figure class="scroll-revealed max-w-[480px] mx-auto">
                <img
                  src="./assets/img/about-img.jpg"
                  alt="About image"
                  class="rounded-xl"
                />
              </figure>
            </div>

            <div class="w-full">
              <div class="scroll-revealed">
                <h6 class="mb-2 block text-lg font-semibold text-primary">
                  About Us
                </h6>
                <h2 class="mb-6">
                  SMART-EV
                </h2>
              </div>

              <div class="tabs scroll-revealed">
                <nav
                  class="tabs-nav flex flex-wrap gap-4 my-8"
                  role="tablist"
                  aria-label="About us tabs"
                >
                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-profile"
                    id="tabs-list-profile"
                    role="tab"
                    aria-controls="tabs-panel-profile"
                  >
                    Our Profile
                  </button>

                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-vision"
                    id="tabs-list-vision"
                    role="tab"
                    aria-controls="tabs-panel-vision"
                  >
                    Our Vision
                  </button>

                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-history"
                    id="tabs-list-history"
                    role="tab"
                    aria-controls="tabs-panel-history"
                  >
                    Our History
                  </button>
                </nav>
                <div class="tabs-content mt-4" id="tabs-panel-profile" tabindex="-1" role="tabpanel" aria-labelledby="tabs-list-profile">
                  <p>Smart Electric Vehicle is an inter-scientific collaborative center of excellence focusing on the battery-based electric vehicle ecosystem. Our research mainly focuses on battery-based electric vehicles and their supporting elements (hardware, software, people), such as design; charging stations; battery and BMS; potential renewable energy for EVs; connectivity and applications; consumer behavior; business and management for EVs; payment system; as well as advanced systems for EV environment (AI, blockchain).</p>
                </div>

                <div class="tabs-content mt-4 hide" id="tabs-panel-vision" tabindex="-1" role="tabpanel" aria-labelledby="tabs-list-vision">
                  <p>Visi dan misi perusahaan untuk masa depan.</p>
                </div>

                <div class="tabs-content mt-4 hide" id="tabs-panel-history" tabindex="-1" role="tabpanel" aria-labelledby="tabs-list-history">
                  <p>Sejarah singkat perjalanan perusahaan.</p>
                </div>
                </div>

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-vision"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-vision"
                >

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-history"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-history"
                >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Portfolio section -->
      <section id="portfolio" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h2 class="mb-6">Our Recent Works</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <nav
            class="scroll-revealed portfolio-menu mb-[3.750rem] text-center"
            aria-label="Portfolio filter"
          >
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color active"
              data-filter="all"
            >
              All Work
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="branding"
            >
              Branding
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="marketing"
            >
              Marketing
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="planning"
            >
              Planning
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="research"
            >
              Research
            </button>
          </nav>

  <div class="scroll-revealed portfolio-grid row">
  <div class="portfolio col-12 sm:col-6 lg:col-4">
    <article
      class="group transition-all duration-150 active:scale-[.98] active:brightness-90"
      data-filter="branding"
    >
      <div
        class="relative overflow-hidden w-full aspect-[4/3] rounded-xl transition-all duration-300 group-hover:ring-4 group-hover:ring-blue-500"
      >
        <img
          src="./assets/img/3.jpg"
          alt="Graphics Design"
          class="w-full h-full object-contain transition-transform duration-500 scale-110 group-hover:scale-100"
        />
      </div>
      <div class="pt-4">
        <h4 class="mb-2">
          <a
            href="javascript:void(0)"
            class="text-[1.5rem] leading-tight text-inherit"
            >Graphics Design</a
          >
        </h4>
        <p>
          Short description for the ones who look for something new. Awesome!
        </p>
      </div>
    </article>
  </div>

  <div class="portfolio col-12 sm:col-6 lg:col-4">
    <article
      class="group transition-all duration-150 active:scale-[.98] active:brightness-90"
      data-filter="research"
    >
      <div
        class="relative overflow-hidden w-full aspect-[4/3] rounded-xl transition-all duration-300 group-hover:ring-4 group-hover:ring-blue-500"
      >
        <img
          src="./assets/img/portfolio/portfolio-2.jpg"
          alt="Web Development"
          class="w-full h-full object-cover transition-transform duration-500 scale-110 group-hover:scale-100"
        />
      </div>
      <div class="pt-4">
        <h4 class="mb-2">
          <a
            href="javascript:void(0)"
            class="text-[1.5rem] leading-tight text-inherit"
            >Web Development</a
          >
        </h4>
        <p>
          Short description for the ones who look for something new. Awesome!
        </p>
      </div>
    </article>
  </div>

  <div class="portfolio col-12 sm:col-6 lg:col-4">
    <article
      class="group transition-all duration-150 active:scale-[.98] active:brightness-90"
      data-filter="marketing"
    >
      <div
        class="relative overflow-hidden w-full aspect-[4/3] rounded-xl transition-all duration-300 group-hover:ring-4 group-hover:ring-blue-500"
      >
        <img
          src="./assets/img/portfolio/portfolio-3.jpg"
          alt="App Development"
          class="w-full h-full object-cover transition-transform duration-500 scale-110 group-hover:scale-100"
        />
      </div>
      <div class="pt-4">
        <h4 class="mb-2">
          <a
            href="javascript:void(0)"
            class="text-[1.5rem] leading-tight text-inherit"
            >App Development</a
          >
        </h4>
        <p>
          Short description for the ones who look for something new. Awesome!
        </p>
      </div>
    </article>
  </div>

  <div class="portfolio col-12 sm:col-6 lg:col-4">
    <article
      class="group transition-all duration-150 active:scale-[.98] active:brightness-90"
      data-filter="planning"
    >
      <div
        class="relative overflow-hidden w-full aspect-[4/3] rounded-xl transition-all duration-300 group-hover:ring-4 group-hover:ring-blue-500"
      >
        <img
          src="./assets/img/portfolio/portfolio-4.jpg"
          alt="Digital Marketing"
          class="w-full h-full object-cover transition-transform duration-500 scale-110 group-hover:scale-100"
        />
      </div>
      <div class="pt-4">
        <h4 class="mb-2">
          <a
            href="javascript:void(0)"
            class="text-[1.5rem] leading-tight text-inherit"
            >Digital Marketing</a
          >
        </h4>
        <p>
          Short description for the ones who look for something new. Awesome!
        </p>
      </div>
    </article>
  </div>

  <div class="portfolio col-12 sm:col-6 lg:col-4">
    <article
      class="group transition-all duration-150 active:scale-[.98] active:brightness-90"
      data-filter="branding"
    >
      <div
        class="relative overflow-hidden w-full aspect-[4/3] rounded-xl transition-all duration-300 group-hover:ring-4 group-hover:ring-blue-500"
      >
        <img
          src="./assets/img/portfolio/portfolio-5.jpg"
          alt="SEO Services"
          class="w-full h-full object-cover transition-transform duration-500 scale-110 group-hover:scale-100"
        />
      </div>
      <div class="pt-4">
        <h4 class="mb-2">
          <a
            href="javascript:void(0)"
            class="text-[1.5rem] leading-tight text-inherit"
            >SEO Services</a
          >
        </h4>
        <p>
          Short description for the ones who look for something new. Awesome!
        </p>
      </div>
    </article>
  </div>

  <div class="portfolio col-12 sm:col-6 lg:col-4">
    <article
      class="group transition-all duration-150 active:scale-[.98] active:brightness-90"
      data-filter="marketing"
    >
      <div
        class="relative overflow-hidden w-full aspect-[4/3] rounded-xl transition-all duration-300 group-hover:ring-4 group-hover:ring-blue-500"
      >
        <img
          src="./assets/img/portfolio/portfolio-6.jpg"
          alt="Product Design"
          class="w-full h-full object-cover transition-transform duration-500 scale-110 group-hover:scale-100"
        />
      </div>
      <div class="pt-4">
        <h4 class="mb-2">
          <a
            href="javascript:void(0)"
            class="text-[1.5rem] leading-tight text-inherit"
            >Product Design</a
          >
        </h4>
        <p>
          Short description for the ones who look for something new. Awesome!
        </p>
      </div>
    </article>
  </div>
</div>
</section>


      <section
  id="team"
  class="section-area pt-16"
>
<div class="container">
<div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">Team</h6>
            <h2 class="mb-6">Our Creative Team</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>
  <div class="swiper hero-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="container">
          <div
            class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2"
          >
            <div class="slide-image order-last lg:order-first">
              <img
                src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?q=80&w=800&auto=format&fit=crop"
                alt="Creative Digital Agency"
                class="w-full h-auto rounded-xl shadow-lg"
              />
            </div>
            <div class="slide-content text-center lg:text-left">
              <h1
                class="mb-6 text-3xl font-bold leading-snug sm:text-4xl lg:text-5xl"
              >
                Creative Digital Agency
              </h1>
              <p
                class="mx-auto mb-9 max-w-[600px] text-base text-body-light-11 dark:text-body-dark-11 sm:text-lg lg:mx-0"
              >
                Kami merancang dan mengembangkan solusi digital yang inovatif
                untuk mendorong pertumbuhan bisnis Anda ke level berikutnya.
              </p>
              <a
                href="#contact"
                class="inline-flex items-center justify-center rounded-md bg-primary px-8 py-[4px] text-base font-medium text-primary-color shadow-md hover:bg-primary/90"
                role="button"
              >
                Hubungi Kami
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="container">
          <div
            class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2"
          >
            <div class="slide-image order-last lg:order-first">
              <img
                src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=800&auto=format&fit=crop"
                alt="Web and App Development"
                class="w-full h-auto rounded-xl shadow-lg"
              />
            </div>
            <div class="slide-content text-center lg:text-left">
              <h1
                class="mb-6 text-3xl font-bold leading-snug sm:text-4xl lg:text-5xl"
              >
                Web & App Development
              </h1>
              <p
                class="mx-auto mb-9 max-w-[600px] text-base text-body-light-11 dark:text-body-dark-11 sm:text-lg lg:mx-0"
              >
                Solusi pengembangan website dan aplikasi mobile yang modern,
                cepat, dan aman sesuai dengan kebutuhan spesifik bisnis Anda.
              </p>
              <a
                href="#portfolio"
                class="inline-flex items-center justify-center rounded-md bg-primary px-8 py-[4px] text-base font-medium text-primary-color shadow-md hover:bg-primary/90"
                role="button"
              >
                Lihat Portofolio
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="container">
          <div
            class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2"
          >
            <div class="slide-image order-last lg:order-first">
              <img
                src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop"
                alt="Digital Marketing Services"
                class="w-full h-auto rounded-xl shadow-lg"
              />
            </div>
            <div class="slide-content text-center lg:text-left">
              <h1
                class="mb-6 text-3xl font-bold leading-snug sm:text-4xl lg:text-5xl"
              >
                Digital Marketing Services
              </h1>
              <p
                class="mx-auto mb-9 max-w-[600px] text-base text-body-light-11 dark:text-body-dark-11 sm:text-lg lg:mx-0"
              >
                Tingkatkan jangkauan pasar Anda dengan strategi pemasaran
                digital yang efektif, terukur, dan menghasilkan konversi.
              </p>
              <a
                href="#services"
                class="inline-flex items-center justify-center rounded-md bg-primary px-8 py-[4px] text-base font-medium text-primary-color shadow-md hover:bg-primary/90"
                role="button"
              >
                Layanan Kami
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination !relative mt-12"></div>
    </div>
</div>

      <!-- Team section -->
  <div class="container team-grid-container">
    <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
      <h6 class="mb-2 block text-lg font-semibold text-primary">Team</h6>
      <h2 class="mb-6">Our Creative Team</h2>
      <p>
        There are many variations of passages of Lorem Ipsum available but
        the majority have suffered alteration in some form.
      </p>
    </div>

    <div class="row lg-grid-cols-5">
      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/13.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Fransisco Gilbert Pintu Batu</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">Blockchain Engineer</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:gibetyo@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/gibelett" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/gibetyo" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/1.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12"> Karen Natalia Naibaho</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">Ga ada kerjaan</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:natalikaren0312@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/karennataliaa_" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/karen-naibaho" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/2.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Made Aditya Warmadewa</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">gggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:madeaditya202@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/madetya.w" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/made-aditya-warmadewa-6347b0361" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/3.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Vinsesius Boido Simarmata</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">gggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:vinsensiusboido@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/vnsnsius__"
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/vinsensius-boido-simarmata-4b26082a2" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/4.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Muhammad Fery Salim</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">Blockchain Engineer</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:nihfery@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/nihfery_" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/5.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Allif Ardian Subagia</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">ggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:ardianallif3@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/ardian.allif" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>
      
      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/6.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Rangga Ariansyah</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">ggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto: " 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/ " 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/ " 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>
      
      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/7.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Saddam Nafriyaldy</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">gggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:saddamnafriyaldy@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/sddm_n" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/12.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Muhammad Azmi</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">ggggggggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:muhammadazmi939@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/mhdazmi_xd" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/muhammad-azmi-7b8741276" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/9.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Rafi Nur Fathullah</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">gggggggggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:rnurfathullah@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/rnurf_" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/rafi-nur-fathullah-a54a04361" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/10.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Ahmad Yusuf Al Farabi</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">gggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:ahmadyusufalfarabi852@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/yaflzz_" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/ahmad-yusuf-al-farabi-17475633a" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/11.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Danira Ariani Ningtyas</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">ggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:ariani.ixk@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/dnraarn26" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/danira-ariani-95a2ba381" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/8.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Muhammad Rafi Ramadhan</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">gggggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:muhammadraffiramadhan29@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/raffirmdhn29" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/14.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Keisya Lavinia Aprilian</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">gggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:keisyalavinia.a@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/keisyalaviniaa" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/Keisya Lavina Aprilia" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="scroll-revealed col-12 sm:col-6 md:col-4">
        <figure class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
          <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
            <img src="./assets/img/avatar/15.png" alt="Team picture" class="h-full w-full rounded-full object-cover" />
            <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
            <span class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
          </div>
          <figcaption class="text-center block">
            <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">Aditya Dwi Ramahdani</h4>
            <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">ggggg</p>
            <div class="flex items-center justify-center gap-5">
              <a 
                href="mailto:adityaa.301004@gmail.com" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-envelope"></i>
              </a>
              <a 
                href="https://www.instagram.com/adtyaaramadani" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-instagram-original"></i>
              </a>
              <a 
                href="https://www.linkedin.com/in/" 
                target="_blank" 
                class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                  <i class="lni lni-linkedin-original"></i>
              </a>
            </div>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

      <!-- Testimonials section -->
      <section id="testimonials" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Client Reviews
            </h6>
            <h2 class="mb-6">Our Testimonials</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div
            class="swiper testimonial-carousel common-carousel scroll-revealed"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-4.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Ralf Nacht
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Web Entrepreneur
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-5.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Sebastian Toft
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Web Developer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-6.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Bao Shen
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        UI/UX Designer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-7.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Emanuel Velzeboer
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Graphics Designer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>

            <div class="mt-[60px] flex items-center justify-center gap-1">
              <div class="swiper-button-prev">
                <i class="lni lni-arrow-left"></i>
              </div>
              <div class="swiper-button-next">
                <i class="lni lni-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ section -->
      <section id="faq" class="section-area relative">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">FAQ</h6>
            <h2 class="mb-6">Any Questions? Look Here</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div class="grid gap-x-8 gap-y-12 grid-cols-1 lg:grid-cols-2">
            <div class="scroll-revealed flex">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
              >
                <i class="lni lni-question-circle"></i>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  Lorem ipsum dolor sit amet?
                </h3>
                <p class="text-body-light-11 dark:text-body-dark-11">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Corrupti minus a eaque labore delectus quas exercitationem
                  iusto doloribus blanditiis assumenda.
                </p>
              </div>
            </div>

            <div class="scroll-revealed flex">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
              >
                <i class="lni lni-question-circle"></i>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  Lorem ipsum dolor sit amet?
                </h3>
                <p class="text-body-light-11 dark:text-body-dark-11">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Corrupti minus a eaque labore delectus quas exercitationem
                  iusto doloribus blanditiis assumenda.
                </p>
              </div>
            </div>

            <div class="scroll-revealed flex">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
              >
                <i class="lni lni-question-circle"></i>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  Lorem ipsum dolor sit amet?
                </h3>
                <p class="text-body-light-11 dark:text-body-dark-11">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Corrupti minus a eaque labore delectus quas exercitationem
                  iusto doloribus blanditiis assumenda.
                </p>
              </div>
            </div>

            <div class="scroll-revealed flex">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
              >
                <i class="lni lni-question-circle"></i>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  Lorem ipsum dolor sit amet?
                </h3>
                <p class="text-body-light-11 dark:text-body-dark-11">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Corrupti minus a eaque labore delectus quas exercitationem
                  iusto doloribus blanditiis assumenda.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div>
          <span class="absolute left-5 top-5 -z-[1]">
            <svg
              class="w-20 h-auto fill-teal-500"
              version="1.0"
              xmlns="http://www.w3.org/2000/svg"
              width="1280.000000pt"
              height="1280.000000pt"
              viewBox="0 0 1280.000000 1280.000000"
              preserveAspectRatio="xMidYMid meet"
            >
              <g
                transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                stroke="none"
              >
                <path
                  d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
              </g>
            </svg>
          </span>
          <span class="absolute right-5 bottom-5 -z-[1]">
            <svg
              class="w-20 h-auto fill-indigo-500"
              version="1.0"
              xmlns="http://www.w3.org/2000/svg"
              width="1280.000000pt"
              height="1280.000000pt"
              viewBox="0 0 1280.000000 1280.000000"
              preserveAspectRatio="xMidYMid meet"
            >
              <g
                transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                stroke="none"
              >
                <path
                  d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
              </g>
            </svg>
          </span>
        </div>
      </section>

      <!-- Clients section -->
      <section id="clients" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Clients
            </h6>
            <h2 class="mb-6">Our Awesome Clients</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div class="">
            <div class="row">
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/airbnb.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/coca-cola.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/facebook.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/mandiri.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/shopware.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/spotify.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/tunnel-id.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
              <div
                class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
              >
                <img
                  src="./assets/img/brand/walmart.svg"
                  alt="Brand Logo Image"
                  class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Contact section -->
      <section id="contact" class="section-area">
        <div class="container">
          <div class="row">
            <div class="col-12 xl:col-4">
              <div class="row">
                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-phone w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Contact</h4>
                      <p class="m-0">0984537278623</p>
                      <p class="m-0">yourmail@gmail.com</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-map-marker w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Address</h4>
                      <p class="m-0">175 5th Ave, New York, NY 10010</p>
                      <p class="m-0">United States</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-alarm-clock w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Schedule</h4>
                      <p class="m-0">24 Hours / 7 Days Open</p>
                      <p class="m-0">Office time: 10:00 AM - 5:30 PM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 xl:col-8">
              <div
                class="scroll-revealed bg-body-light-1 dark:bg-primary-dark-2 rounded-xl py-8 sm:py-12 px-6 sm:px-10 z-10 relative shadow-card-1 hover:shadow-lg"
              >
                <div class="text-center max-w-[550px] mx-auto mb-12">
                  <h6 class="mb-2 block text-lg font-semibold text-primary">
                    Get in Touch
                  </h6>
                  <h2 class="mb-3">Ready to Get Started</h2>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    quiblanditiis praesentium
                  </p>
                </div>

                <form action="#" method="POST" class="flex flex-col gap-6">
                  <div class="row">
                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="name"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Name"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="email"
                        name="email"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Email"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="phone"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Phone"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="subject"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Subject"
                        required
                      />
                    </div>

                    <div class="col-12">
                      <textarea
                        name="message"
                        rows="5"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Type your message"
                        required
                      ></textarea>
                    </div>

                    <div class="col-12">
                      <div class="w-full text-center">
                        <button
                          type="submit"
                          class="inline-block px-5 py-3 rounded-md text-base bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10"
                        >
                          Send Message
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Map section -->
      <section id="map" class="w-full h-[500px] overflow-hidden -mt-[12rem]">
        <object
          data="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1980.1517132307579!2d107.63306119798187!3d-6.973483431970767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1756370021892!5m2!1sid!2sid"
          class="border-0 w-full h-full"
        ></object>
      </section>
    </main>

@include('layoutsbootstrap.footer')

    <button
      type="button"
      class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
      data-web-trigger="scroll-top"
      aria-label="Scroll to top"
    >
      <i class="lni lni-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script>
      // Scroll Reveal
      const sr = ScrollReveal({
        origin: "bottom",
        distance: "16px",
        duration: 1000,
        reset: false,
      });

      sr.reveal(`.scroll-revealed`, {
        cleanup: true,
      });

      // GLightBox
      GLightbox({
        selector: ".video-popup",
        href: "https://youtu.be/KDzyxS16Oqo?si=ZL2o3UB5Uohf3oL_",
        type: "video",
        source: "youtube",
        width: 900,
        autoplayVideos: true,
      });

      // Hero Slider Initialization V2
const heroSwiper = new Swiper(".hero-slider", {
  loop: true,
  autoplay: {
    delay: 5000, // Ganti slide setiap 5 detik
    disableOnInteraction: false,
  },
  speed: 800, // Kecepatan transisi
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // Jika Anda ingin menggunakan tombol navigasi panah, hapus komentar di bawah
  // dan juga di HTML
  /*
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  */
});

      const myGallery3 = GLightbox({
        selector: ".portfolio-box",
        type: "image",
        width: 900,
      });

          // Menunggu sampai seluruh halaman, termasuk gambar dan CSS, selesai dimuat
  window.addEventListener('load', () => {
    const splashScreen = document.getElementById('splash-screen');
    // Kita akan fokus pada animasi teks, karena itu yang terakhir muncul
    const textElement = document.querySelector('.text-torsi-ev');

    // Cek apakah elemen-elemen tersebut ada di halaman
    if (splashScreen && textElement) {
      
      // Ini adalah fungsi untuk menyembunyikan splash screen
      const hideSplashScreen = () => {
        // 1. Mulai transisi fade-out dengan mengubah opacity
        splashScreen.style.opacity = '0';

        // 2. Setelah transisi selesai, sembunyikan elemen sepenuhnya agar tidak bisa diklik
        splashScreen.addEventListener('transitionend', () => {
          splashScreen.style.display = 'none';
        }, { once: true }); // 'once: true' agar event ini hanya berjalan sekali
      };

      // Dengarkan kapan animasi pada elemen teks SELESAI
      textElement.addEventListener('animationend', () => {
        
        // Setelah animasi teks selesai, beri jeda sejenak (misalnya 1 detik)
        // agar pengguna bisa melihat logo dan nama yang sudah utuh
        setTimeout(() => {
          hideSplashScreen();
        }, 1000); // 1000ms = 1 detik jeda

      }, { once: true }); // 'once: true' agar event ini hanya berjalan sekali

    } else {
      // Pengaman: Jika elemen tidak ditemukan, langsung sembunyikan splash screen 
      // untuk mencegah halaman macet di loading.
      if (splashScreen) {
        splashScreen.style.display = 'none';
      }
    }
  });

  

      // Testimonial
      const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>
  </body>
</html>
