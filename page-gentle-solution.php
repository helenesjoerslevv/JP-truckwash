<?php get_header(); ?>

<?php 
// Hent data fra ACF
$LosningImage = get_field('losning_image');
$LosningTitle = get_field('losning_title');
$LosningDescription = get_field('losning_description');
$InfoTitle1 = get_field('info_title_1');
$InfoTitle2 = get_field('info_title_2');
$InfoTitle3 = get_field('info_title_3');
$InfoImage1 = get_field('info_image_1');
$InfoImage2 = get_field('info_image_2');
$InfoDescription1 = get_field('info_description_1');
$InfoDescription2 = get_field('info_description_2');
$InfoDescription3 = get_field('info_description_3');
?>

<section class="hero-losning">
    <div class="hero-image-container">
        <img src="<?php echo esc_url($LosningImage["url"]); ?>" alt="header_image" class="hero-image">
        <div class="hero-overlay"></div>
    </div>
    <div class="hero-losning-content">
        <h1><?php echo esc_html($LosningTitle); ?></h1>
    </div>
</section>


<section class="row-losning">
    <div class="row-container">
        <div class="column white-column">
            <!-- Brug wpautop for at bevare linjeskift og mellemrum -->
            <p><?php echo wpautop($LosningDescription); ?></p>
        </div>
        <div class="column blue-column">
        </div>
    </div>
</section>



<section class="info-row">
    <div class="info-container">
        <div class="info-images">
            <img src="<?php echo esc_url($InfoImage1["url"]); ?>" alt="Info Image 1" class="info-image">
            <img src="<?php echo esc_url($InfoImage2["url"]); ?>" alt="Info Image 2" class="info-image">
        </div>
        <div class="info-losning-text">
            <div class="info-item">
                <h3><?php echo esc_html($InfoTitle1); ?></h3>
                <p><?php echo esc_html($InfoDescription1); ?></p>
            </div>
            <div class="info-item">
                <h3><?php echo esc_html($InfoTitle2); ?></h3>
                <p><?php echo esc_html($InfoDescription2); ?></p>
            </div>
            <div class="info-item">
                <h3><?php echo esc_html($InfoTitle3); ?></h3>
                <p><?php echo esc_html($InfoDescription3); ?></p>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>