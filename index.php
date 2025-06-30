<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="hero__content">
        <div class="hero__text">
            <p class="hero__headline">Hello!</p>
            <p class="hero__intro">I'm <strong>Keshti</strong>, and I do</p>

            <div class="hero__rotating">
                <div class="hero__rotating-item"><?php include 'includes/icons/icon_desktop.php'; ?><p>Web UI Design</p>
                </div>
                <div class="hero__rotating-item"><?php include 'includes/icons/icon_code.php'; ?><p>Web Development</p>
                </div>
                <div class="hero__rotating-item"><?php include 'includes/icons/icon_mobile.php'; ?><p>App UI Design</p>
                </div>
                <div class="hero__rotating-item"><?php include 'includes/icons/icon_ux.php'; ?><p>UX Research & Design</p>
                </div>
                <div class="hero__rotating-item"><?php include 'includes/icons/icon_brush.php'; ?><p>Illustrations</p>
                </div>
            </div>
        </div>

        <div class="hero__image"></div>
    </div>
</section>


<main class="main-index">
    <div class="under-construction">
        <?php include 'includes/icons/icon_hammer.php' ?>
        <div class="under-construction__text">
            <p class="under-construction__title">Under construction</p>
            <p>Most links still lead to my old Wix portfolio, hang tight!</p>
        </div>
    </div>

    <section class="projects">
        <div class="projects__page-title">
            <?php include 'includes/icons/icon_sparkle.php' ?>
            <h1>Showcased Projects</h1>
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
</main>

<?php include 'includes/footer.php'; ?>
