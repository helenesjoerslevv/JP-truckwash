<?php get_header(); ?>

<?php
$headerVideo = get_field('header_video');
$headerTitle = get_field('header_title');
$headerDescription = get_field('header_description');
$row2Title = get_field('row2_title'); // Retrieve Row2_Title
$row2Description = get_field('row2_description'); // Retrieve Row2_Description

$service_images = [
    get_field('service_image1'),
    get_field('service_image2'),
    get_field('service_image3')
];
$service_categories = [
    get_field('service_category1'),
    get_field('service_category2'),
    get_field('service_category3')
];

$partners_title = get_field('partners_title');  // Hent partners_title
$partner_image1 = get_field('partner_image1');  // Hent partner_image1
$partner_image2 = get_field('partner_image2');  // Hent partner_image2
$partner_image3 = get_field('partner_image3');  // Hent partner_image3
$partner_image4 = get_field('partner_image4');  // Hent partner_image4
$partner_image5 = get_field('partner_image5');  // Hent partner_image5
?>

<section class="hero-home">
    <video autoplay loop muted playsinline class="hero-video">
        <source src="<?php echo esc_url($headerVideo["url"]); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-home-content">
        <h1><?php echo esc_html($headerTitle); ?></h1>
        <p><?php echo esc_html($headerDescription); ?></p>
        <a href="paslaugos" class="btn btn-primary"><?php pll_e("Se vores ydelser")?></a>
    </div>
</section>

<!-- New Row Section -->
<section class="row-section">
    <div class="row-content">
        <h2><?php echo esc_html($row2Title); ?></h2>
        <p><?php echo nl2br(esc_html($row2Description)); ?></p>
    </div>
</section>


<section class="services-section">
    <div class="services-grid">
        <?php foreach ($service_images as $index => $image): ?>
            <?php if ($image && !empty($service_categories[$index])): ?>
                <div class="service-item">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($service_categories[$index]); ?>" class="service-image">
                    <div class="overlay">
                        <!-- Her er links til de specifikke sider -->
                        <?php if ($index == 0): ?>
                            <a href="<?php echo esc_url(home_url('/skalbykla')); ?>" class="service-category"><?php echo esc_html($service_categories[$index]); ?></a>
                        <?php elseif ($index == 1): ?>
                            <a href="<?php echo esc_url(home_url('/svelnus-sprendimas')); ?>" class="service-category"><?php echo esc_html($service_categories[$index]); ?></a>
                        <?php elseif ($index == 2): ?>
                            <a href="<?php echo esc_url(home_url('/susisiekite')); ?>" class="service-category"><?php echo esc_html($service_categories[$index]); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>



<hr class="section-divider">

<section class="partners-section">
    <div class="partners-content">
        <h2 class="partners-title"><?php echo esc_html($partners_title); ?></h2>

        <!-- Billederne under partners_title -->
        <div class="partners-images">
            <?php if ($partner_image1): ?>
                <div class="partner-image">
                    <img src="<?php echo esc_url($partner_image1['url']); ?>" alt="<?php echo esc_attr($partner_image1['alt']); ?>">
                </div>
            <?php endif; ?>
            <?php if ($partner_image2): ?>
                <div class="partner-image">
                    <img src="<?php echo esc_url($partner_image2['url']); ?>" alt="<?php echo esc_attr($partner_image2['alt']); ?>">
                </div>
            <?php endif; ?>
            <?php if ($partner_image3): ?>
                <div class="partner-image">
                    <img src="<?php echo esc_url($partner_image3['url']); ?>" alt="<?php echo esc_attr($partner_image3['alt']); ?>">
                </div>
            <?php endif; ?>
            <?php if ($partner_image4): ?>
                <div class="partner-image">
                    <img src="<?php echo esc_url($partner_image4['url']); ?>" alt="<?php echo esc_attr($partner_image4['alt']); ?>">
                </div>
            <?php endif; ?>
            <?php if ($partner_image5): ?>
                <div class="partner-image">
                    <img src="<?php echo esc_url($partner_image5['url']); ?>" alt="<?php echo esc_attr($partner_image5['alt']); ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>
