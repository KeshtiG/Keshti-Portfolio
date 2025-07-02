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
        <div class="projects__page-title">
            <?php include 'includes/icons/icon_sparkle.php' ?>
            <h2>Showcased Projects</h2>
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

    <section class="instagram">
        <div class="instagram__container">
            <script src="https://static.elfsight.com/platform/platform.js" async></script>
            <div class="elfsight-app-32974307-affc-4b1e-9c18-d35870c6fa1d" data-elfsight-app-lazy></div>
            <div class="instagram__cutoff-mask"></div>
        </div>
    </section>

    <section class="contact-banner">
        <div class="contact-banner__text-container">
            <h2 class="contact-banner__title">Want to collaborate on a project?</h2>
            <p class="contact-banner__body">I’m always open to new challenges and cool ideas. If you’ve got something brewing, let’s talk!</p>
            <a href="contact.php" class="btn contact-banner__button"><?php include 'includes/icons/icon_email.php'?>Contact Me</a>
        </div>
        <div class="contact-banner__image">
            <?php include 'includes/img/coffee.php' ?>
        </div>
    </section>
</main>


<?php include 'includes/footer.php'; ?>
