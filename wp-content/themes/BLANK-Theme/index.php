<?php get_header(); ?>

	<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>-->

        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">Introduction title</h1>
                <p>Text here.. <a href="#">text again..</a>surely another text here..</p>
              </div>
            </div>
          </div>
        </section>
        
        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">We won't make website in the future, but instead we will make dreams come true.</h1>
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon" style="background:#3C678F;">
                      <i class="fa fa-desktop" style="background:#3C678F;"></i>
                    </div>
                    <h2>Designers</h2>
                    <p>We Design</p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon" style="background:#3C678F;">
                      <i class="fa fa-code" style="background:#3C678F;"></i>
                    </div>
                    <h2>Coders</h2>
                    <p>We Code</p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon" style="background:#3C678F;">
                      <i class="fa fa-users" style="background:#3C678F;"></i>
                    </div>
                    <h2>Potatoes</h2>
                    <p>We Potate</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="text-center" id="potatocodes">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="potatologo">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow">Potatocodes</h1>
                        <p>Details about Potatocodes here.. </p>
                        <p>
                        More details about Potatocodes here.. </p>
                        <p>Ever more details about Potatocodes here..</p>
                      </li>
                      <li>
                        <h1 class="arrow">Piso Project</h1>
                        <p>Details about Piso Project here..</p>
                        <p>
                        More details about Piso Project here..</p>
                        <p>Even more details about Piso Project here..</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>Kairos Team<span><em>Potatoing</em> on the Job</span></h1>
                <a href="#activities" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        
        <section class="portfolio text-center section-padding" id="activities">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php echo bloginfo('template_directory');?>/images/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <!--<a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>-->
                          </div>
                        </div>
                      </div>
                      <h2>Honoring God/Praying</h2>
                      <p>Details here.. need a picture of team kairos praying</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php echo bloginfo('template_directory');?>/images/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <!--<a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>-->
                          </div>
                        </div>
                      </div>
                      <h2>Head On</h2>
                      <p>Details here.. need a picture of team kairos working on a project</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php echo bloginfo('template_directory');?>/images/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <!--<a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>-->
                          </div>
                        </div>
                      </div>
                      <h2>Brain Storming</h2>
                      <p>Details here.. need a picture of team kairos brainstorming and presenting it problems and suggested solutions</p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php echo bloginfo('template_directory');?>/images/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <!--<a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>-->
                          </div>
                        </div>
                      </div>
                      <h2>Team Challenge </h2>
                      <p>Details here.. need a picture of team kairos having a team challenge</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php echo bloginfo('template_directory');?>/images/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <!--<a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>-->
                          </div>
                        </div>
                      </div>
                      <h2>Diffusal</h2>
                      <p>Details here.. need a picture of team kairos relaxing</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?php echo bloginfo('template_directory');?>/images/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <!--<a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>-->
                          </div>
                        </div>
                      </div>
                      <h2>Moral Shout</h2>
                      <p>Details here.. need a picture of team kairos doing the Kairos on 3. 1.2.3 KAIROS!!</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        
        <div class="ignite-cta text-center" id="strive-for-change">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="http://ideastalk.ph/category/change-the-world/" class="ignite-btn">Strive for Change</a>
              </div>
            </div>
          </div>
        </div>
        
        <section class="team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Presenting Kairos Team of Potatocodes</h1>
              </div>
            </div>
            <div class="row">
              <div class="team-wrapper">
                <div id="teamSlider">
                  <ul class="slides">
                    <li>
                      <div class="col-md-3 wp5">
                        <img src="<?php echo bloginfo('template_directory');?>/images/reyzel.jpg" alt="Team Member">
                        <h2>Reyzel Caddauan</h2>
                        <p>Details about you here..</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>                      
                      
							<div class="col-md-3 wp5 delay-02s">
                        <img src="<?php echo bloginfo('template_directory');?>/images/carl.jpg" alt="Team Member">
                        <h2>Carl Steven Lasida</h2>
                        <p>Details about you here..</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>                      
                      
                      <div class="col-md-3 wp5 delay-05s">
                        <img src="<?php echo bloginfo('template_directory');?>/images/shawn.jpg" alt="Team Member">
                        <h2>Shawn Logan Angelo Lapuz</h2>
                        <p>Details about you here..</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-3 wp5 delay-1s">
                        <img src="<?php echo bloginfo('template_directory');?>/images/ryan.jpg" alt="Team Member">
                        <h2>Ryan Gabriel Reyes</h2>
                        <p>Details about you here..</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>                    
                    </li>
                    
                    <li>
                      <div class="col-md-3 wp5">
                        <img src="<?php echo bloginfo('template_directory');?>/images/noel.jpg" alt="Team Member">
                        <h2>Noel Escobar</h2>
                        <p>Details about you here..</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-3 wp5 delay-02s">
                        <img src="<?php echo bloginfo('template_directory');?>/images/michael.jpg" alt="Team Member">
                        <h2>Michael Lazo</h2>
                        <p>Details about you here..</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-3 wp5 delay-05s">
                        <img src="<?php echo bloginfo('template_directory');?>/images/eagan.jpg" alt="Team Member">
                        <h2>Eagan Charles Martin</h2>
                        <p>Details about you here..</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-3 wp5 delay-1s">
                        <img src="<?php echo bloginfo('template_directory');?>/images/kenji.jpg" alt="Team Member">
                        <h2>Kenji Tinga</h2>
                        <p>Details about you here..</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--<section class="subscribe text-center">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>Subscribe to stay in the loop</span></h1>
            <form action="#">
              <input type="text" name="" value="" placeholder="" required>
              <input type="submit" name="" value="Send">
            </form>
          </div>
        </section>-->
        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Contact Us</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p>Polytechnic Univerity of the Philippines, Sta. Mesa, Manila</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>+63 9 123 4567</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="#">kairosteam@potatocodes.com</a></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        
<?php get_footer(); ?>