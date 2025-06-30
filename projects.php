<?php include 'includes/header.php'; ?>


<?php
    include 'includes/projects-data.php';

    $reverse = false;

    foreach ($projects as $project) {
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

<?php include 'includes/footer.php'; ?>
