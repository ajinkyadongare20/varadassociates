<?php
/**
 * The main template file
 * Template Name: About
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
$about_background_image = get_field('about_background_image', get_the_ID());
?>

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('<?php echo esc_url($about_background_image); ?>');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2 class="heading-title">
                                    <?php echo esc_html(get_field('about_banner_heading_tittle', get_the_ID())); ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<!-- About Details -->
<div class="container py-5 px-3 px-md-5">
    <!-- Corporate Profile -->
    <h2 class="about-heading-section">
        <?php echo esc_html(get_field('about_heading_section_tittle', get_the_ID())); ?>
    </h2>

    <?php echo get_field('about_heading_section_text', get_the_ID()); ?>

    <!-- Vision -->
    <h4 class="small-heading">
        <?php echo esc_html(get_field('about_vision', get_the_ID())); ?>
    </h4>
    <?php echo get_field('about_vision_list', get_the_ID()); ?>

    <!-- Mission -->
    <h4 class="small-heading">
        <?php echo esc_html(get_field('about_mission', get_the_ID())); ?>
    </h4>
    <?php echo get_field('about_mission_list', get_the_ID()); ?>

    <!-- Quality Assurance -->
    <h4 class="small-heading">
        <?php echo esc_html(get_field('about_quality_assurance', get_the_ID())); ?>
    </h4>
    <?php echo get_field('about_quality_assurance_text', get_the_ID()); ?>
</div>

<!-- Real Estate Features -->
<div class="container py-5">
    <div class="row g-4">
        <?php 
        $about_card_cpt = new WP_Query(array('post_type' => 'about_card_cpt'));
        while ($about_card_cpt->have_posts()) : $about_card_cpt->the_post();
        ?>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="realestate-feature-box">
                <div class="realestate-feature-icon">
                    <?php echo esc_html(get_field('about_card_feature_icon', get_the_ID())); ?>
                </div>
                <h5>
                    <?php echo esc_html(get_field('about_card_feature_heading', get_the_ID())); ?>
                </h5>
                <p>
                    <?php echo get_field('about_card_feature_text', get_the_ID()); ?>
                </p>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>

<!-- About Shivram Group Section -->
<div class="container welcome-section my-5">
    <div class="row align-items-center">
        <?php 
        $image_url = get_field('about_welcome_image'); 
        if ($image_url): ?>
        <div class="col-md-5">
            <img src="<?php echo esc_url($image_url); ?>" class="welcome-image" alt="Shivram Group Project">
        </div>
        <?php endif; ?>

        <div class="col-md-7">
            <h6 style="color: gray;">
                <?php echo esc_html(get_field('about_welcome_heading_head', get_the_ID())); ?>
            </h6>
            <h2 class="fw-bold text-dark">
                <?php echo esc_html(get_field('about_welcome_main_heading', get_the_ID())); ?>
            </h2>
            <?php echo get_field('about_welcome_section_text', get_the_ID()); ?>
        </div>
    </div>
</div>

<!-- Start Third Main-->
<div class="container mt-5">
    <h2 class="fw-bold" style="color: #002a5b;">
        <?php echo esc_html(get_field('about_why_choose_heading', get_the_ID())); ?>
    </h2>
    <div class="text-start">
        <?php echo get_field('about_why_choose_text', get_the_ID()); ?>
        <div class="row mt-4">
            <?php 
            $about_why_choose = new WP_Query(array('post_type' => 'about_why_choose'));
            while ($about_why_choose->have_posts()) : $about_why_choose->the_post();
            $about_why_choose_services_image = get_field('about_why_choose_services_image', get_the_ID());
            ?>
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <?php if ($about_why_choose_services_image): ?>
                    <img src="<?php echo esc_url($about_why_choose_services_image); ?>" alt="Trusted Developer" class="feature-icon" width="50" height="50">
                    <?php endif; ?>
                    <span class="ps-3 ps-span">
                        <?php echo esc_html(get_field('about_why_choose_services_name', get_the_ID())); ?>Trusted Developer in Nashik
                    </span>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- End Third Main -->


<!-- Agnet List -->
<div id="fh5co-about">
    <div class="container">
        <h2 class="fw-bold text-dark text-center pb-5">
            <?php echo esc_html(get_field('about_shivram_group_team_heading', get_the_ID())); ?>
        </h2>
        <div class="row">
            <?php 
            $shivram_group_teams = new WP_Query(array('post_type' => 'shivram_group_teams'));
            while ($shivram_group_teams->have_posts()) : $shivram_group_teams->the_post();
            $about_team_person_image = get_field('about_team_person_image', get_the_ID());
            ?>
            <div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
                <div class="card fh5co-staff">
                    <?php if ($about_team_person_image): ?>
                    <img class="img-responsive" src="<?php echo esc_url($about_team_person_image); ?>"
                        alt="Trusted Developer" class="feature-icon" width="50" height="50">
                    <?php endif; ?>
                    <h3><?php echo esc_html(get_field('about_team_person_name', get_the_ID())); ?></h3>
                    <p><?php echo get_field('about_team_person_text', get_the_ID()); ?></p>

                    <p><a class="btn btn-primary btn-outline" href="#"><?php echo esc_html(get_field('about_view_details', get_the_ID())); ?></a></p>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<!-- Second New Contain Start-->
<div class="container-fluid pt-5 my-0 my-lg-5 about-card-bg">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 pb-5 text-start text-lg-center">
                <h2 class="text-white fw-bold mb-4">
                    <?php echo esc_html(get_field('about_get_in_touch', get_the_ID())); ?>
                </h2>
                <h3 class="text-white mb-4">
                    <?php echo esc_html(get_field('about_contact_us', get_the_ID())); ?>
                </h3>
                <p style="color:rgb(0, 0, 0);"><?php echo get_field('about_contact_us_text', get_the_ID()); ?></span></p>
               
               <?php 
                $contact_button_link = get_field('about_contact_us_button_link');
                if ($contact_button_link): ?>
                    <a href="<?php echo esc_url($contact_button_link); ?>" class="btn btn-light text-primary fw-bold py-2 px-4 rounded-pill">Contact Us →</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!--Third New Contain Start  -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="fw-bold" style="color: #002a5b;">
                <?php echo get_field('about_group_vision', get_the_ID()); ?>
            </h2>
            <p class="mt-3">
                <?php echo get_field('about_group_text', get_the_ID()); ?>
            </p>
            <p class="mt-3" style="color: #002a5b;">
                <?php echo get_field('about_our_strength', get_the_ID()); ?>
            </p>
            <?php echo get_field('about_group_list_capablities', get_the_ID()); ?>
        </div>
    </div>
</div>

<?php
get_footer();