<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package twenty20people
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php
			the_content(); 
		?>
		<div class="ud_black-row"></div>
		<div class="container">
			<article class="ud_home-welcome">
				<?php echo rwmb_meta( 'rw_wtext' ); ?>
			</article>

			<hr class="ud_hr">
		</div>
		<div class="ud_mem container">
			<h2 class="text-center"><?php _e( 'Memberships', 'twenty20people' ) ?></h2>

			<div class="ud_mem-home">
				<?php for($i=1; $i<=4; $i++){ ?>
					<div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ud_col">
							<h4>Full Time</h4>
							<img src="http://localhost/2020/wp-content/uploads/2016/08/carousel-1.jpg">
							<p>Need a space where you can create all day, every day? 24 hour access all week long, a creative collaborative culture, and a permanent home for your business. Jump right in.</p>
							<p class="price">from <span>$xxx</span> per week</p>
							<div class="ud_btn-row">
								<div class="col-md-6">
									<a href class="">See More</a>
								</div>
								<div class="col-md-6">
									<a href="">Enquire</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>

		</div> <!-- Container Fluid-->
		<div class="ud_cta-form" style="background-image:url('http://localhost/2020/wp-content/uploads/2016/08/cta_back_form.jpg');">
			<div class="container">
				<h2 class="text-center animated bounceIn">We’ve crafted an environment, so you can build your empire.</h2>
				<div class="ud_home-contacform">
					
					<?php echo do_shortcode('[contact-form-7 id="55" title="Contact form 1"]'); ?>
				
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<hr class="ud_hr">
		</div>

		<div class="ud_surry-house">
			<div class="container">
				<h2>What's on a surry House</h2>
				<div class="row">
				<?php for($i=1; $i<=4; $i++){ ?>
					<div class="col-md-3">
						<p>11 May</p>
						<p>Rooftop Yoga</p>
						<img src="http://localhost/2020/wp-content/uploads/2016/08/carousel-1.jpg">
						<p class="desc">Optur mi, quiant quid evelibusdant quae volor andestia nobitatur mos sandit, te ea sinctio is aut venducilia si nim remque sequidebis ex exernatur? Optur mi, quiant quid evelibusdant quae volor andestia nobitatur mos sandit, te ea sinctio is aut venducilia si nim remque sequidebis ex exernatur?</p>
						<a href="">Book Now</a>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<hr class="ud_hr">
		</div>

		<section class="ud_journal">
			<div class="container-fluid">
				<h2 class="text-right">The Journal</h2>

				<!-- Carousel -->
				  <div class="ud_btm-slider">
				    <?php for($i=1; $i<10; $i++){ ?>
				    <div>
				    	<img src="http://www.designboom.com/wp-content/uploads/2015/11/stefano-boeri-architetti-vertical-forest-residential-tower-lausanne-switzerland-designboom-01.jpg">
				    	<div class="ud_journal-text">
					    	<p>File Folk</p>
					    	<span>15.06.16</span>
				    	</div>
				    	<a class="ud_journal-btn" href=""/>See More</a>
				    </div>
				   	<?php } ?>
				  </div>
				
				<!-- CAROUSEL -->
			</div>
		</section>
		<div class="container-fluid">
			<hr class="ud_hr">
		</div>

		<section class="ud_resident">
			<div class="container">
				<h2>Our Resident</h2>

				<div class="ud_home-gallery">
					<?php echo do_shortcode('[gallery link="file" columns="6" ids="61,62,63,64,65,66,67,68,69,70,30,54"]'); ?>
					

				</div>
			</div>
		</section>

		<div class="container-fluid">
			<hr class="ud_hr">
		</div>

		<section class="ud_map-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
					</div>
					<div class="col-md-4">
						<h2>SAY HELLO</h2>
						<div class="ud_subtl">
							<p>Need To know anything else?<br>
							Contact the lovely Aimy</p>
						</div>
						<div class="ud_subtl-add">
							Aimy Guez<br>
							02 807 397 05<br>
							<br>
							__<br>
							For all press enquires,<br>
							please contact<br>
							press@2020people.com.au
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ud_cta">
			<div class="ud_cta-inner">
				<div class="container">
					<p>Sign up for our Newsletter</p>
					<div class="row">
						<div class="col-md-2 col-sm-10 col-xs-9">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="FIRST NAME"/>
							</div>
						</div>
						<div class="col-md-2 col-sm-10 col-xs-9">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="LAST NAME"/>
							</div>
						</div>
						<div class="col-md-6 col-sm-10 col-xs-9">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="EMAIL"/>
							</div>
						</div>
						<div class="col-md-2 col-sm-10 col-xs-9">
							<div class="form-group">
								<button class="btn">REGISTER</button>
							</div>
						</div>
					</div>
				</div>
				<img src="http://localhost/2020/wp-content/uploads/2016/08/surry_house_logo.png"/>
			</div>
			<?php $upload_dir = wp_upload_dir(); ?>
			<img class="ud_img-btm-boder" src="<?php echo $upload_dir['baseurl']; ?>/2020/trimer.jpg">
		</section>
	</div><!-- .entry-content -->

	<?php /* if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						//translators: %s: Name of current post 
						esc_html__( 'Edit %s', 'twenty20people' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; */?>
</article><!-- #post-## -->
