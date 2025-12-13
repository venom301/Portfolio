<?= loadPartial('head') ?>
<?= loadPartial('nav') ?>

<main>
    <!-- Hero Section -->
    <header class="pt-32 pb-20 px-4 sm:px-6">
        <div class="max-w-3xl mx-auto text-center reveal">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-4">
                About Me
            </h1>
            <p class="text-lg sm:text-xl text-gray-600">
                Curious, careful, and craft-focused.
            </p>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-20 px-4 sm:px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="reveal">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        About Me
                    </h2>
                    <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                        I am a full-stack developer who loves turning ideas into clean,
                        accessible interfaces. My background includes HTML, CSS,
                        JavaScript, and modern frameworks like Tailwind CSS and
                        PHP/Laravel. I enjoy learning new web technologies and
                        constantly improving my development workflows.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Outside of coding, I enjoy reading about markets and working on
                        small trading experiments. I pay close attention to detail and
                        always test assumptions before shipping. I believe in writing
                        code that's not just functional, but maintainable and
                        user-focused.
                    </p>
                </div>
                <div class="reveal">
                    <img src="/img/placeholder4.svg" class="w-full h-21 rounded-xl shadow-lg" alt="Profile image" />
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 px-4 sm:px-6 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 text-center reveal">
                Skills & Expertise
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div
                    class="reveal flex bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition border-l-4 border-blue-600">
                    <div class="flex">
                        <img src="/img/logo/html.svg" alt="" class="w-6 h-6 mr-3">
                        <img src="/img/logo/css.svg" alt="" class="w-6 h-6 mr-3">
                    </div>
                    <p class="font-semibold text-gray-900">HTML & CSS</p>
                </div>
                <div
                    class="reveal flex bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition border-l-4 border-purple-600">
                    <img src="/img/logo/js.svg" alt="" class="w-6 h-6 mr-3">
                    <p class="font-semibold text-gray-900">JavaScript (ES6+)</p>
                </div>
                <div
                    class="reveal flex bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition border-l-4 border-green-600">
                    <img src="/img/logo/tailwindcss.svg" alt="" class="w-6 h-6 mr-3">
                    <p class="font-semibold text-gray-900">Tailwind CSS</p>
                </div>
                <div
                    class="reveal flex bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition border-l-4 border-orange-600">
                    <img src="/img/logo/bootstrap.svg" alt="" class="w-6 h-6 mr-3">
                    <p class="font-semibold text-gray-900">Responsive Design</p>
                </div>
                <div
                    class="reveal flex bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition border-l-4 border-red-600">
                    <div class="flex">
                        <img src="/img/logo/php.svg" alt="" class="w-6 h-6 mr-3">
                        <img src="/img/logo/laravel.svg" alt="" class="w-6 h-6 mr-3">
                    </div>
                    <p class="font-semibold text-gray-900">PHP & Laravel</p>
                </div>
                <div
                    class="reveal flex bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition border-l-4 border-pink-600">
                    <img src="/img/logo/my-sql.svg" alt="" class="w-6 h-6 mr-3">
                    <p class="font-semibold text-gray-900">MySQL Database</p>
                </div>
                <div
                    class="reveal flex bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition border-l-4 border-indigo-600">
                    <div class="flex">
                        <img src="/img/logo/git.svg" alt="" class="w-6 h-6 mr-3">
                        <img src="/img/logo/github.svg" alt="" class="w-6 h-6 mr-3">
                    </div>
                    <p class="font-semibold text-gray-900">Git & GitHub</p>
                </div>
                <div
                    class="reveal flex bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition border-l-4 border-cyan-600">
                    <img src="/img/logo/postgre.svg" alt="" class="w-6 h-6 mr-3">
                    <p class="font-semibold text-gray-900">Postgresql</p>
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
                I'm available for front-end projects, full-stack development, and
                consulting. Let's build something great.
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