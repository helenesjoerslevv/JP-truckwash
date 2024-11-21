<?php get_header(); ?>

<?php
// Hent data fra ACF
$ContactImage = get_field('contact_image');
$ContactTitle = get_field('contact_title');
$ContactSubtitle = get_field('contact_subtitle');
$ContactMap = get_field('contact_map');
?>

<section class="hero-contact">
    <div class="hero-image-container">
        <?php if ($ContactImage && isset($ContactImage["url"])): ?>
            <img src="<?php echo esc_url($ContactImage["url"]); ?>" alt="<?php echo esc_attr($ContactImage["alt"]); ?>" class="hero-image">
        <?php else: ?>
            <!-- Fallback hvis billedet ikke findes -->
            <img src="path/to/fallback-image.jpg" alt="fallback image" class="hero-image">
        <?php endif; ?>
        <div class="hero-overlay"></div>
    </div>
</section>

<section class="contact-row">
    <div class="contact-column">
        <h2>SEND OS EN FORESPØRGSEL</h2>
        <?php echo do_shortcode('[contact-form-7 id="6e80793" title="Kontaktformular"]'); ?>
    </div>

    <div class="info-column">
        <div class="info-text">
            <h2><?php echo $ContactTitle; ?></h2>
            <h4><?php echo $ContactSubtitle; ?></h4>
            <p>CVR nr.: 25443640</p>
            <ul class="contact-info-list">
                <li>Børupvej 36, <br>7000 Fredericia</li>
                <br><li>Tlf.: +45 40 11 70 57</li>
                <a href="mailto:info@jp-transport.dk"><li>E-mail: info@jp-transport.dk</li></a>
            </ul>
        </div>
        <div class="contact-map">
            <?php if ($ContactMap && isset($ContactMap["url"])): ?>
                <img src="<?php echo esc_url($ContactMap["url"]); ?>" alt="<?php echo esc_attr($ContactMap["alt"]); ?>">
            <?php endif; ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>
