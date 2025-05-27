<?php
/**
 * The template for displaying the footer
 * Template Name: Footer
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shivram_group
 */

 $current_page_id = 414;
?>

<footer>
  <div id="footer">
    <div class="container">
      <div class="row row-bottom-padded-md">
        <div class="col-md-3">
          <h3 class="section-title">
            <?php echo get_field('footer_heading', $current_page_id); ?>
          </h3>
          <p>
            <?php echo get_field('footer_heading_text', $current_page_id); ?>
          </p>
        </div>

        <div class="col-md-3 col-md-push-1">
          <h3 class="section-title">
            <?php echo get_field('footer_link_heading', $current_page_id); ?>
          </h3>
          <?php echo get_field('footer_all_links', $current_page_id); ?>

        </div>

        <div class="col-md-3">
          <h3 class="section-title">
            <?php echo get_field('footer_information', $current_page_id); ?>
          </h3>
          <?php echo get_field('footer_information_links', $current_page_id); ?>
          
        </div>

        <div class="col-md-3">
          <h3 class="section-title">
            <?php echo get_field('footer_newsletter', $current_page_id); ?>
          </h3>
          <p>
            <?php echo get_field('footer_newsletter_text', $current_page_id); ?>
          </p>
          <form id="fh5co-header-subscribe">
            <div class="input-group">
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
              <button class="btn btn-primary" type="submit">
                <i class="icon-paper-plane"></i>
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <p class="fh5co-social-icons">
            <a href="#"><i class="icon-twitter2"></i></a>
            <a href="#"><i class="icon-facebook2"></i></a>
            <a href="#"><i class="icon-instagram"></i></a>
            <a href="#"><i class="icon-dribbble2"></i></a>
            <a href="#"><i class="icon-youtube"></i></a>
          </p>
		  <p>&copy; ©2025 The Shivram Group. 
		  <br>All rights reserved. Designed By Leal Software Solution Pvt Ltd <a href="https://lealsolution.com" target="_blank"></a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>
<!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->

<script>
  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/sticky.js"></script>
<!-- Superfish -->
<script src="<?php bloginfo('template_directory'); ?>/js/hoverIntent.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<!-- Flexslider -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
<!-- Date Picker -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/selectFx.js"></script>

<!-- Main JS -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

</body>
</html>
