    <footer class="site-footer">
        <div class="site-footer__container">
            <div class="site-footer__github-info">
                <h2>Site Info</h2>
                <p>This site was created with PHP, Sass/BEM & JavaScript</p>
                <a href="https://github.com/KeshtiG/Keshti-Portfolio" class="btn github-link" target="_blank"><?php include 'includes/icons/icon_github.php'?>View on GitHub</a>
            </div>
    
            <div class="site-footer__identity">
                <a href="index.php" class="site-footer__logo"></a>
                <p class="site-footer__copyright">&copy; <?= date("Y") ?> Keshti.se</p>
            </div>
    
            <div class="site-footer__social-container">
                <h2>Follow Me</h2>
                
                <div class="site-footer__social-links">
                    <?php include 'includes/icons/icon_instagram.php'?>
                    <?php include 'includes/icons/icon_linkedin.php'?>
                    <?php include 'includes/icons/icon_github.php'?>
                </div>
            </div>
        </div>
    </footer>

    <script src="src/js/theme_toggle.js"></script>
    <script src="src/js/mobile_menu_toggle.js"></script>
    <script src="src/js/rotating_container.js"></script>
    <script src="src/js/navbar.js"></script>
</body>
</html>
