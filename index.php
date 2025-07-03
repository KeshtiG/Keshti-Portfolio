<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="hero__content">
        <div class="hero__text-container">
            <h1 class="hero__headline">Hello!</h1>
            <p class="hero__intro">I'm <strong>Keshti</strong>, and I do</p>

            <div class="hero-rotator">
                <div class="hero-rotator__item"><?php include 'includes/icons/icon_desktop.php'; ?><p class="hero-rotator__text">Web UI Design</p>
                </div>
                <div class="hero-rotator__item"><?php include 'includes/icons/icon_code.php'; ?><p class="hero-rotator__text">Web Development</p>
                </div>
                <div class="hero-rotator__item"><?php include 'includes/icons/icon_mobile.php'; ?><p class="hero-rotator__text">App UI Design</p>
                </div>
                <div class="hero-rotator__item"><?php include 'includes/icons/icon_ux.php'; ?><p class="hero-rotator__text">UX Research & Design</p>
                </div>
                <div class="hero-rotator__item"><?php include 'includes/icons/icon_brush.php'; ?><p class="hero-rotator__text">Illustrations</p>
                </div>
            </div>
        </div>

        <div class="hero__image"></div>
    </div>
</section>


<main class="main-index">
    <div class="under-construction">
        <?php include 'includes/icons/icon_hammer.php' ?>
        <div class="under-construction__text-container">
            <p class="under-construction__title">Under construction</p>
            <p class="under-construction__body">Most links still lead to my old Wix portfolio, hang tight!</p>
        </div>
    </div>

    <section class="projects">
        <div class="projects__title-container">
            <?php include 'includes/icons/icon_sparkle.php' ?>
            <h2 class="projects__title">Showcased Projects</h2>
        </div>
        <?php
        include 'includes/projects-data.php';

        $reverse = false;
        $featuredProjects = array_slice($projects, 0, 4);

        foreach ($featuredProjects as $project) {
            $title = $project['title'];
            $tags = $project['tags'] ?? [];
            $description = $project['description'];
            $imagePath = $project['imagePath'];
            $link = $project['link'] ?? null;
            $class = $reverse ? 'reverse-flex' : '';

            include 'includes/project-summary.php';
            $reverse = !$reverse;
        }
        ?>
    </section>

    <?php include 'includes/instagram-feed.php'?>
    <?php include 'includes/contact-banner.php'?>

</main>


<?php include 'includes/footer.php'; ?>
