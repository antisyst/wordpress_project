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
            <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>">
        </div>
    </div>
    <!-- End HERO SECTION -->
</div>

<?php get_footer(); ?>
