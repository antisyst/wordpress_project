<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

<div class="container">
    <!-- HERO SECTION -->
    <?php $hero_image = get_field('hero_image'); ?>
    <div class="hero_section">
        <div class="hero_item">
            <h1 class="color_prim responsive_text">
                <?php the_field('hero_title'); ?>
                <span class="color_main"><?php the_field('hero_subtitle'); ?></span>
            </h1>
            <p>
                <?php the_field('hero_description'); ?>
            </p>
        </div>
        <div class="hero_item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hero_img.png" alt="Hero Image">
        </div>
    </div>
    <!-- End HERO SECTION -->
</div>

<?php get_footer(); ?>
