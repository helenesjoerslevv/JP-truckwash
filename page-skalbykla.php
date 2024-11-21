<?php get_header(); ?>

<?php 
// Hent data fra ACF
$HeaderImage = get_field('header_image');
$HeaderTitle = get_field('header_title');
$VaskehalIntroduction = get_field('vaskehal_introduction');
$VaskehalImage = get_field('vaskehal_image');
$EndTitle = get_field('end_title');
$EndText = get_field('end_text');
?>

<section class="hero-vaskehal">
    <div class="hero-image-container">
        <img src="<?php echo esc_url($HeaderImage["url"]); ?>" alt="header_image" class="hero-image">
        <div class="hero-overlay"></div>
    </div>
    <div class="hero-content">
        <h1><?php echo esc_html($HeaderTitle); ?></h1>
    </div>
</section>

<section class="row-vaskehal">
    <div class="row-container">
        <div class="column white-column">
            <!-- Brug wpautop for at bevare linjeskift og mellemrum -->
            <p><?php echo wpautop($VaskehalIntroduction); ?></p>
        </div>
        <div class="column blue-column">
        </div>
    </div>
</section>


<section class="vaskehal-image">
    <img src="<?php echo esc_url($VaskehalImage["url"]); ?>" alt="vaskehal_image">
</section>


<section class="end-row">
    <div class="row-container">
        <div class="column end-column">
            <h2><?php echo esc_html($EndTitle); ?></h2>
            <p><?php echo nl2br(esc_html($EndText)); ?></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
