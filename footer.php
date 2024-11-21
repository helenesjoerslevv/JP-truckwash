<?php wp_footer(); ?>

<footer id="footer">
    <div class="footer-container">


        <!-- Venstre kolonne med informationer -->
        <div class="footer-left">
            <div class="footer-info">
                <h3>JAN PETERSEN LASTVOGNSVASK ApS</h3>
                <p><?php pll_e("Adresse:")?> Børupvej 36, 7000 Fredericia</p>
                <p><?php pll_e("Telefon:")?> (+45) 28 59 70 57</p>
                <p><?php pll_e("E-mail:")?> <a href="mailto:info@jp-transport.dk">info@jp-transport.dk</a></p>
                <p><?php pll_e("CVR NR.:")?> 25443640</p>
            </div>
        </div>

        <!-- Højre kolonne med navigation -->
        <div class="footer-right">
            <div class="footer-nav">
                <h3>Navigation</h3>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary', 
                        'menu_class' => 'footer-menu' 
                    ) );
                ?>
                <a href="https://www.facebook.com/profile.php?id=61568371990796">
                <img src="<?php echo get_template_directory_uri(); ?>/img/facebook_white.png" alt="Facebook Icon">
                </a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
