<?= loadPartial('head') ?>
<?= loadPartial('nav') ?>

<main class="py-20 px-4 sm:px-6">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-6">Portfolio</h1>
        <p class="text-lg text-gray-600 mb-10">A selection of projects I've built.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php if (!empty($projects) && is_array($projects)): ?>
                <?php foreach ($projects as $project): ?>
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <img src="/img/<?= htmlspecialchars($project['project_image']) ?>" class="w-full h-64 object-cover"
                            alt="<?= htmlspecialchars($project['project_name']) ?>" />
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">
                                <?= htmlspecialchars($project['project_name']) ?></h3>
                            <p class="text-gray-700 mb-4"><?= htmlspecialchars($project['project_description']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No projects available.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?= loadPartial('footer') ?>
<?= loadPartial('script') ?>