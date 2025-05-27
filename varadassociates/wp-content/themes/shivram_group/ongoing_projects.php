<?php
/**
 * The main template file
 * Template Name: Ongoing Projects
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shivram_group
 */

get_header();
?>

<?php 
// Banner background image from ACF
$onproject_banner_image = get_field('onproject_banner_image', get_the_ID());
?>

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('<?php echo esc_url($onproject_banner_image); ?>');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2 class="heading-title">
                                    <?php echo esc_html(get_field('onproject_banner_heading', get_the_ID())); ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<!-- Newest Properties -->
<div id="fh5co-properties" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>
                    <?php echo esc_html(get_field('onproject_main_heading', get_the_ID())); ?>
                </h3>
                <p>
                    <?php echo get_field('onproject_heading_text', get_the_ID()); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php 
            $ongoing_projects = new WP_Query(array('post_type' => 'ongoing_projects'));

            while ($ongoing_projects->have_posts()) : 
                $ongoing_projects->the_post();
                $onproject_properties_image = get_field('onproject_properties_image', get_the_ID());
            ?>
                <div class="col-md-4 animate-box">
                    <div class="property">
                        <a href="#" class="fh5co-property"
                           style="background-image: url('<?php echo esc_url($onproject_properties_image); ?>');">
                            <span class="status">
                                <?php echo get_field('onproject_properties_status', get_the_ID()); ?>
                            </span>
                            <?php echo get_field('onproject_properties_list_details', get_the_ID()); ?>
                        </a>
                        <div class="property-details">
                            <h3>
                                <?php echo get_field('onproject_properties_property_details', get_the_ID()); ?>
                            </h3>
                            <span class="price">
                                <?php echo get_field('onproject_properties_price', get_the_ID()); ?>
                            </span>
                            <p>
                                <?php echo get_field('onproject_properties_desc', get_the_ID()); ?>
                            </p>
                            <span class="address">
                                <i class="icon-map"></i> 
                                <?php echo get_field('onproject_properties_address', get_the_ID()); ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
