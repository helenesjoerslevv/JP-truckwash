<?php get_header (); ?>

<?php while (have_posts()) : the_post(); ?>
<?php echo do_shortcode('[contact-form-7 id="6e80793" title="Kontaktformular"]') ?>