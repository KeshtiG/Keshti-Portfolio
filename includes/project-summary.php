<div class="project-summary <?= $class ?>">

    <div class="project-summary__image">
        <a href="<?= $link ?>"><img src="<?= $imagePath ?>" alt="<?= $title ?>"></a>
    </div>

    <a href="<?= $link ?>">
        <div class="project-summary__content">
            <div class="project-summary__tags">
                <?php foreach ($tags as $tag): ?>
                    <p class="project-summary__tag"><?= htmlspecialchars($tag) ?></p>
                <?php endforeach; ?>
            </div>
            <h3 class="project-summary__title"><?= $title ?></h3>
            <p class="project-summary__description"><?= $description ?></p>
            <?php if (isset($link) && $link): ?>
                <a href="<?= $link ?>" class="project-summary__link">
                    <p>View Project</p><?php include 'includes/icons/icon_long_arrow_right.php' ?>
                </a>
            <?php endif; ?>
        </div>
    </a>
    
</div>
