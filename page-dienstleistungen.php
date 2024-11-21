<?php get_header(); ?>

<?php
// Hentning af ACF-felterne
$YdelserHeroImage = get_field('ydelser_hero_image');
$YdelserTitle = get_field('ydelser_title');
$YdelserImage = get_field('ydelser_image');

// Hentning af de nødvendige felter for kolonnerne
$YdelseTitle1 = get_field('ydelse_title_1');
$YdelseTextArea1 = get_field('ydelse_textarea_1');
$YdelsePris1 = get_field('ydelse_pris_1');
$YdelseTitle2 = get_field('ydelse_title_2');
$YdelseTextArea2 = get_field('ydelse_textarea_2');
$YdelsePris2 = get_field('ydelse_pris_2');
$YdelseTitle3 = get_field('ydelse_title_3');
$YdelseTextArea3 = get_field('ydelse_textarea_3');
$YdelsePris3 = get_field('ydelse_pris_3');
$YdelseTitle4 = get_field('ydelse_title_4');
$YdelseTextArea4 = get_field('ydelse_textarea_4');
$YdelsePris4 = get_field('ydelse_pris_4');

// Hentning af Bestseller under YdelseTitle3
$YdelseBestseller = get_field('ydelse_bestseller');

// Hentning af ekstra sektion
$YdelseExtra = get_field('ydelse_extra');
?>

<section class="hero-ydelser">
    <div class="hero-image-container">
        <img src="<?php echo esc_url($YdelserHeroImage["url"]); ?>" alt="header_image" class="hero-image">
        <div class="hero-overlay"></div>
    </div>
    <div class="hero-ydelser-content">
        <h1><?php echo esc_html($YdelserTitle); ?></h1>
    </div>
</section>

<section class="ydelser-kolonner">
    <div class="ydelse-kolonne">
        <div class="ydelse-title"><?php echo esc_html($YdelseTitle1); ?></div>
        <div class="ydelse-textarea"><?php echo nl2br(esc_html($YdelseTextArea1)); ?></div>
        <div class="ydelse-pris"><?php echo esc_html($YdelsePris1); ?></div>
    </div>
    <div class="ydelse-kolonne">
        <div class="ydelse-title"><?php echo esc_html($YdelseTitle2); ?></div>
        <div class="ydelse-textarea"><?php echo nl2br(esc_html($YdelseTextArea2)); ?></div>
        <div class="ydelse-pris"><?php echo esc_html($YdelsePris2); ?></div>
    </div>
    <div class="ydelse-kolonne">
        <div class="ydelse-title"><?php echo esc_html($YdelseTitle3); ?>
        <div class="ydelse-bestseller"><?php echo esc_html($YdelseBestseller); ?></div></div>
        <div class="ydelse-textarea"><?php echo nl2br(esc_html($YdelseTextArea3)); ?></div>
        <div class="ydelse-pris"><?php echo esc_html($YdelsePris3); ?></div>
    </div>
    <div class="ydelse-kolonne">
        <div class="ydelse-title"><?php echo esc_html($YdelseTitle4); ?></div>
        <div class="ydelse-textarea"><?php echo nl2br(esc_html($YdelseTextArea4)); ?> </div>
        <div class="ydelse-pris"><?php echo esc_html($YdelsePris4); ?></div>
    </div>
</section>

<section class="ydelse-extra">
    <div class="ydelse-extra-content"><?php echo esc_html($YdelseExtra); ?></div>
</section>

<?php get_footer(); ?>
