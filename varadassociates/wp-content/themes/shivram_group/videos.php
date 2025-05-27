<?php
/**
 * Template Name: Videos
 * Description: Displays video content from ACF and custom post type 'videos_cpt'.
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
$video_banner_background_image = get_field('video_banner_background_image', get_the_ID());
?>

<!-- Hero Section -->
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('<?php echo esc_url($video_banner_background_image); ?>');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2 class="heading-title">
                                    <?php echo esc_html(get_field('video_banner_heading_tittle', get_the_ID())); ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<!-- Video Section -->
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>
                    <?php echo esc_html(get_field('video_section_main_tittle', get_the_ID())); ?>
                </h3>
                <p>
                    <?php echo esc_html(get_field('video_section_main_text', get_the_ID())); ?>
                </p>
            </div>
        </div>

        <!-- Video Grid -->
        <div class="video-list">
            <div class="video-grid" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: flex-start;">
                <?php 
                $videos_cpt = new WP_Query( array( 'post_type' => 'videos_cpt' ));

                while ( $videos_cpt->have_posts() ) : $videos_cpt->the_post();
                    $video_file_gallery = get_field('video_file_gallery', get_the_ID());
                ?>
                    <div class="video-card">
                        <button class="video-close" onclick="closeVideo(event)">X</button>
                        <?php if ($video_file_gallery): ?>
                            <video src="<?php echo esc_url($video_file_gallery); ?>" onclick="playVideo(this)" controls></video>
                        <?php else: ?>
                            <p>Video not available.</p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
