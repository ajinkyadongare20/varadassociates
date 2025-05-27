<?php
/**
 * The main template file
 * Template Name: Contact
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
 $contact_banner_image = get_field('contact_banner_image', get_the_ID());
 ?>


<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('<?php echo esc_url($contact_banner_image); ?>');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2 class="heading-title">
                                    <?php echo esc_html(get_field('contact_banner_heading', get_the_ID())); ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>


<div class="container-fluid py-5 mt-5">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
      <h3><?php echo esc_html(get_field('contact_main_heading', get_the_ID())); ?></h3>
      <p><?php echo get_field('contact_heading_text', get_the_ID()); ?></p>
    </div>
  </div>


  <div class="container-fluid pb-5">
    <div class="row justify-content-center">
      <!-- Form Section -->
      <div class="col-lg-6 mb-4">
        <div class="shivram-contact-box">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" class="shivram-form-control form-control" placeholder="First Name" />
              </div>
              <div class="col-md-6">
                <input type="text" class="shivram-form-control form-control" placeholder="Last Name" />
              </div>
              <div class="col-md-6">
                <input type="email" class="shivram-form-control form-control" placeholder="Your Email" />
              </div>
              <div class="col-md-6">
                <input type="tel" class="shivram-form-control form-control" placeholder="Your Phone" />
              </div>
              <div class="col-12 p-4">
                <textarea class="shivram-form-control form-control" rows="4"
                  placeholder="Give us more details.."></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="shivram-btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Contact Info Section -->
      <div class="col-lg-5">
        <div class="shivram-contact-info d-flex align-items-start">
          <div class="shivram-icon-box">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div>
            <p class="mb-0 fw-bold text-dark">Call Us</p>
            <p class="mb-0">+91 99223 45678</p>
            <small>Support: Mon–Sat, 9AM – 6PM</small>
          </div>
        </div>

        <div class="shivram-contact-info d-flex align-items-start">
          <div class="shivram-icon-box">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div>
            <p class="mb-0 fw-bold text-dark">Visit Us</p>
            <p class="mb-0">Shivram Group HQ</p>
            <small>Nashik, Maharashtra 411045</small>
          </div>
        </div>

        <div class="shivram-contact-info d-flex align-items-start">
          <div class="shivram-icon-box">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <div>
            <p class="mb-0 fw-bold text-dark">Email Support</p>
            <p class="mb-0">support@shivramgroup.com</p>
            <small>We're here to help!</small>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="col-lg-12 pt-5 ">
    <div class="maps">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12406.871679295358!2d73.8568268!3d18.4782417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c14b82850e6f%3A0x506c4c97a227c599!2sFlat+No.+102%2C+Plot+No.+B%2F6%2C+Sneh-Sagar%2C+Chandrika+Society%2C+Chandralok+Hospital+Lane%2C+Bibwewadi%2C+Pune%2C+Maharashtra+411037!5e0!3m2!1sen!2sin!4v1706007251123!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</div>


<?php

get_footer();