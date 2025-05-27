<?php
/**
 * The main template file
 * Template Name: Completed Projects
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
$cproject_banner_image = get_field('cproject_banner_image', get_the_ID());
?>

<aside id="fh5co-hero" class="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url('<?php echo esc_url($cproject_banner_image); ?>');">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h2 class="heading-title"><?php echo esc_html(get_field('cproject_banner_heading', get_the_ID())); ?></h2>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>

<!-- Completed Projects -->
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3><?php echo esc_html(get_field('cproject_main_heading', get_the_ID())); ?></h3>
                <p><?php echo get_field('cproject_main_text', get_the_ID()); ?></p>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-5">
            <?php 
            $completed_projects = new WP_Query( array(
                'post_type' => 'completed_projects'
            ));

            while ( $completed_projects->have_posts() ) : 
                $completed_projects->the_post();

                $cproject_product_images      = get_field('cproject_product_images', get_the_ID());
                $cproject_product_view_link   = get_field('cproject_product_view_link', get_the_ID());
                $cproject_product_view        = get_field('cproject_product_view', get_the_ID());
                $cproject_card_tittle         = get_field('cproject_card_tittle', get_the_ID());
                $cproject_price_box           = get_field('cproject_price_box', get_the_ID());
                $cproject_product_card_info   = get_field('cproject_product_card_info', get_the_ID());
            ?>
                <div class="col-md-4">
                    <div class="card-box-a">
                        <?php if ($cproject_product_images): ?>
                            <img src="<?php echo esc_url($cproject_product_images); ?>" alt="Gallery Image">
                        <?php endif; ?>
                        
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="#">
                                        <?php echo esc_html($cproject_card_tittle); ?>
                                    </a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">
                                        <?php echo esc_html($cproject_price_box); ?>
                                    </span>
                                </div>
                                <?php if ($cproject_product_view_link && $cproject_product_view): ?>
                                    <a href="<?php echo esc_url($cproject_product_view_link); ?>" class="link-a">
                                        <?php echo esc_html($cproject_product_view); ?> &rarr;
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-footer-a">
                            <?php echo wp_kses_post($cproject_product_card_info); ?>
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
