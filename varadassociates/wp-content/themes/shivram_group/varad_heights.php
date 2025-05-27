<?php
/**
 * The main template file
 * Template Name: Varad Heights
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


<aside id="fh5co-hero" class="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li
				style="background-image: url('http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/img_bg_3.jpg');">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h2 class="heading-title">Varad Heights</h2>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>


<!-- Agnet List -->
<div id="fh5co-about">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
				<div class="card fh5co-staff">
					<img class="img-responsive"
						src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-1.jpg"
						alt="The Shivram Group Img 1">
					<h3>Mr. Rajesh Kulkarni</h3>
					<p>Expert in luxury property deals and high-value transactions with over 10 years of real estate
						experience.</p>
					<p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
				</div>
			</div>
			<div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
				<div class="card fh5co-staff">
					<img class="img-responsive"
						src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-2.jpg"
						alt="The Shivram Group Img 2">
					<h3>Mrs. Anjali Deshpande</h3>
					<p>Trusted advisor in residential real estate, known for delivering seamless property buying
						experiences.</p>
					<p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
				</div>
			</div>
			<div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
				<div class="card fh5co-staff">
					<img class="img-responsive"
						src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-3.jpg"
						alt="The Shivram Group Img 3">
					<h3>Mr. Suresh Patil</h3>
					<p>Specialist in commercial real estate with a deep understanding of market trends and investments.
					</p>
					<p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
				</div>
			</div>
			<div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
				<div class="card fh5co-staff">
					<img class="img-responsive"
						src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-4.jpg"
						alt="The Shivram Group Img 4">
					<h3>Mr. Shubham Singh</h3>
					<p>Known for personalized services and helping families find their perfect homes in prime locations.
					</p>
					<p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
				</div>
			</div>
			<div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
				<div class="card fh5co-staff">
					<img class="img-responsive"
						src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-1.jpg"
						alt="The Shivram Group Img 5">
					<h3>Mr. Om Birla</h3>
					<p>Driven by a passion for architecture and design, Jean offers unmatched insight into dream homes.
					</p>
					<p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
				</div>
			</div>
			<div class="col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
				<div class="card fh5co-staff">
					<img class="img-responsive"
						src="http://localhost/wordpess_projects/shivram_group/shivram_group/wp-content/themes/shivram_group/images/user-2.jpg"
						alt="The Shivram Group Img 6">
					<h3>Mr. Hussian Raghavn</h3>
					<p>Combines deep local knowledge with top negotiation skills to ensure the best deals for clients.
					</p>
					<p><a class="btn btn-primary btn-outline" href="#">View Properties</a></p>
				</div>
			</div>
		</div>

	</div>
</div>



<?php
get_footer();