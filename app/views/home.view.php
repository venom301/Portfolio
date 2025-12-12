<?= loadPartial('head') ?>
<?= loadPartial('nav') ?>

  <main>
    <!-- Hero Section -->
    <header class="pt-32 pb-20 px-4 sm:px-6">
      <div class="max-w-3xl mx-auto text-center reveal">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6">
          Hi, I'm Felix — Full-stack Developer
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-8">
          I build responsive websites and delightful user interfaces with
          modern tools and best practices.
        </p>
        <a href="portfolio.html"
          class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition transform hover:scale-105">
          View My Work
        </a>
      </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-20 px-4 sm:px-6 bg-white">
      <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div
            class="reveal bg-gradient-to-br from-blue-50 to-blue-100/50 p-8 rounded-xl border border-blue-200 hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">
              Front-end Development
            </h3>
            <p class="text-gray-700 leading-relaxed">
              Modern responsive interfaces using HTML, CSS, JavaScript and
              Tailwind. I focus on accessibility, performance, and
              maintainable code.
            </p>
          </div>

          <div
            class="reveal bg-gradient-to-br from-purple-50 to-purple-100/50 p-8 rounded-xl border border-purple-200 hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">
              UI/UX Design
            </h3>
            <p class="text-gray-700 leading-relaxed">
              Design thinking and prototyping to ensure delightful user
              experiences and clear information architecture.
            </p>
          </div>

          <div
            class="reveal bg-gradient-to-br from-green-50 to-green-100/50 p-8 rounded-xl border border-green-200 hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">
              Consulting
            </h3>
            <p class="text-gray-700 leading-relaxed">
              Technical direction, code review, and strategy for teams
              building modern web applications.
            </p>
          </div>

          <div
            class="reveal bg-gradient-to-br from-orange-50 to-orange-100/50 p-8 rounded-xl border border-orange-200 hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">
              Backend with PHP
            </h3>
            <p class="text-gray-700 leading-relaxed">
              Backend and routing with PHP and Laravel, including database
              management and API development.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Projects Section -->
    <section id="featured" class="py-20 px-4 sm:px-6 bg-gray-50">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 reveal">
          Featured Projects
        </h2>
        <p class="text-lg text-gray-600 mb-12 reveal">
          A selection of recent work showcasing design and development
          excellence
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div
            class="reveal bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition transform hover:scale-105">
            <img src="assets/img/placeholder1.svg" class="w-full h-64 object-cover" alt="Project 1" />
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-900 mb-3">
                Responsive Dashboard
              </h3>
              <p class="text-gray-700 mb-4">
                An admin dashboard built for a logistics client featuring
                dynamic charts, filters, and role-based access. Implemented
                with performance and clarity in mind.
              </p>
              <a href="portfolio.html#project1"
                class="inline-block text-blue-600 hover:text-blue-700 font-semibold">View Details →</a>
            </div>
          </div>

          <div
            class="reveal bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition transform hover:scale-105">
            <img src="assets/img/placeholder2.svg" class="w-full h-64 object-cover" alt="Project 2" />
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-900 mb-3">
                Marketing Site Redesign
              </h3>
              <p class="text-gray-700 mb-4">
                Complete redesign of a marketing site to improve conversion
                rate and brand clarity. Focused on responsive hero sections
                and clear CTAs.
              </p>
              <a href="portfolio.html#project2"
                class="inline-block text-blue-600 hover:text-blue-700 font-semibold">View Details →</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 sm:px-6 bg-gradient-to-r from-blue-600 to-blue-700">
      <div class="max-w-4xl mx-auto text-center reveal">
        <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">
          Interested in working together?
        </h3>
        <p class="text-lg text-blue-100 mb-8">
          I'm available for backend development, routing, and database
          management. Let's build something great.
        </p>
        <a href="contact.html"
          class="inline-block bg-white text-blue-600 hover:bg-gray-50 font-semibold py-3 px-8 rounded-lg transition">
          Get in Touch
        </a>
      </div>
    </section>
  </main>

<?= loadPartial('footer') ?>
<?= loadPartial('script') ?>