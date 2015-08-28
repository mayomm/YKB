<?php
/*
Template Name: Page New Home
*/
get_header(); ?>
<div class="">
		<?php echo do_shortcode('[image-carousel]'); ?>
    </div>
	<div id="content" class="content-area col-sm-12 col-md-12">
	<div class="container">
		  <div class="row ">
		  	<div class="col-md-12">


		  		<div id="tentang-kami">
			  		<div class="section align-center">
			  			<h3>TENTANG KAMI</h3>
			  		</div>
			  		<div class="section">
		                <div class="align-center middle-main">
		                	<div class="row">
		                    <div class="col-md-4">
		                        <div class="col-md-11">
		                            <img class="" src="<?php bloginfo('template_url');?>/images/tentang kami/handkiri.gif" alt="logotest"  />
		                            <p>Meningkatkan martabat hidup manusia dengan cara turut mencerdaskan bangsa melalui media komunikasi massa pada umumnya dan melalui media cetak dan elektronik pada khususnya</p>
		                        </div>
		                    </div>
		                    <div class="col-md-4  border-left-right">
		                        <div class="col-md-11 margin-center-content">
		                            <img class="" src="<?php bloginfo('template_url');?>/images/tentang kami/handtengah.gif" alt="logotest" />
		                            <p>Meningkatkan kesadaran dan penhayatan iman Kristen dengan menampilkan kehidupan yang beriman dalam Koinonia, Diakonia dan Marturia</p>
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="col-md-11 ">
		                    	    <img class="" src="<?php bloginfo('template_url');?>/images/tentang kami/kanan.gif" alt="logotest" />
		                            <p>Memperkelnalan pola hidup dan etika kristiani kepada masyarakat Indonesia, sehingga dapat berfungsi sebagai terang dan garam dunia</p>
		                        </div>
		                    </div>
		                    </div>
		                </div>
		            </div>
		            <div class="button-tentang-kami">
		            	<div class="buttom-home"> <a class="more-link-home home-link" href="<?php get_site_url();?>visi-misi">LEARN MORE</a> </div>
		            </div>
	            </div>


	            <div id="pelayanan">
	            	<div class="margin-pelayanan">
	            	<div class="section align-center">
	            		<h3>PELAYANAN</h3>
	            	</div>
	            	</div>
	            	<div class="section">
	            		<div class="col-md-12">
	            			<div class="row">
		            			<div class="margin-bottom-pelayanan">
		            				<div id="event">
		            					<div class="row">
											<div class="section">
											<?php
												$args = array(
													'posts_per_page'      => 3,
													'cat' => '9',
													'orderby' => 'p',
													'order'   => 'DESC',
												);
											// The Query
											query_posts( $args );

											// The Loop
											?>
											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						            			<div class="col-md-4">
						            				<div class="main-event ">
														<div class ="ribbonhome margin-rebbon">
															<?php the_title(); ?>
															<i></i>
															<i></i>
														</div>
														<div class="">
						            						<a href="<?php echo get_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?></a>
						            					</div>
						            				</div>
						            			</div>
						            		<?php endwhile; ?>
												<?php else : ?>
													<h2>Not Found</h2>
												<?php endif; 
												wp_reset_query();
												?>
											</div>
				            			</div>
			            			</div>
			            			<div id="news">
			            				<div class="row">
				            				<div class="news-margin">
				            				<?php
												$args = array(
													'posts_per_page'      => 4,
													'cat' => '11',
													'orderby' => 'p',
													'order'   => 'DESC',
												);
											// The Query
											query_posts( $args );

											// The Loop
											?>
											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						            			<div class="col-md-3">
						            				<div class="main-news ">
														<div class ="ribbonnews margin-rebbon">
															<?php the_title(); ?>
															<i></i>
															<i></i>
														</div>
														<div class="">
						            						<a href="<?php echo get_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?></a>
						            					</div>
						            				</div>
						            			</div>
						            		<?php endwhile; ?>
												<?php else : ?>
													<h2>Not Found</h2>
												<?php endif; 
												wp_reset_query();
												?>
					            			</div>
				            			</div>
			            			</div>
								</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>


	            <div id="programtv">
	            	<div class="section">
	            	<div class="row">
	            		<div class="margin-pelayanan">
			            	<div class="section align-center">
			            		<h3>PROGRAM TV</h3>
			            	</div>
		            	</div>
		            	<div class="col-md-12">
		            		<?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
		            	</div>
		            </div>
		            </div>
	            </div>


	            <div id="programradio">
	            	<div class="section">
	            	<div class="row">
	            		<div class="margin-pelayanan">
			            	<div class="section align-center">
			            		<h3>PROGRAM RADIO</h3>
			            	</div>
		            	</div>
		            </div>
		            </div>
	            </div>


	            <div id="saatteduh" class="background-white">
	            	<div class="margin-close-teduh">
	            	<div class="section">
	            	<div class="row">
	            		<div class="margin-bottom-teduh">
			            	<div class="section align-center">
			            		<h3>SAAT TEDUH</h3>
			            	</div>
			            	<div class="col-md-12">
			            	<div class="row">
							<div class="section">
			            	<div id="renungan-keluarga">
				            	<div class="col-md-11 main teduh-keluarga-border">
								<?php
										$today = getdate();
										$args = array(
											'date_query' => array(
												array(
													'year'  => $today['year'],
													'month' => $today['mon'],
													'day'   => $today['mday'],
												),
											),
											'cat' => '8',
										);
									// The Query
									query_posts( $args );

									// The Loop
									?>
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<div class="devotion-content devotion-content-home ">
										<div class="devotion-content-home-1">
											<div class="row ">
												<div class="">
													<div class="col-md-6 home-keluarga-thumbnail">
														<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
													</div>
												</div>
												<div id="img-content-top"class="col-md-6 img-devotion-content-home">
													<div class="row">
														<div class="col-md-3 devotion-top-img-home">
															<div class="teduh-top-img">
																<img src="<?php bloginfo('template_url'); ?>/images/home/wasiat.gif" class="img-circle">
															</div>
														</div>
														<div class="col-md-8 col-sm-6">
															<div class="home-teduh-top-title">
																<h4>RENUNGAN KELUARGA</h4>
															</div>
														</div>

													</div>
													<div class="row">
														<div class="main-keluarga-bottom">
															<h4><?php the_title(); ?></h4>
															<div class="date-home">
																<?php the_time('F jS, Y');?>
															</div>
															<div>
																<?php the_excerpt(); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endwhile; ?>
										<?php else : ?>
											<h2>Not Found</h2>
										<?php endif; 
										wp_reset_query();
										?>
								</div>
							</div>
							</div>
							
							<div id="saatteduh-kiri">
								<div class="section">
									<div class="col-md-6">
										<div class="row">
											<div class="teduh-bottom">
											<div class="section">
											<div class="col-md-12 ">
												<div class="row">
													<div class="section">
														<div class="col-md-12 main  ">
														<?php
																$today = getdate();
																$args = array(
																	'date_query' => array(
																		array(
																			'year'  => $today['year'],
																			'month' => $today['mon'],
																			'day'   => $today['mday'],
																		),
																	),
																	'cat' => '13',
																);
															// The Query
															query_posts( $args );

															// The Loop
															?>
															<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
															<div class="devotion-content devotion-content-home ">
																<div id="img-content-top"class="col-md-12 img-devotion-content-home">
																	<div class="row">
																		<div class="col-md-3 devotion-top-img-home">
																			<div class="teduh-top-img">
																			<img src="<?php bloginfo('template_url'); ?>/images/home/anak.gif" class="img-circle">
																			</div>
																		</div>
																		<div class="col-md-8">
																			<div class="devotion-top-title">
																				<h4>RENUNGAN ANAK-ANAK</h4>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="devotion-content-home-1 col-md-10">
																	<div class="row ">
																		<div class="">
																			<div class="col-md-12 ">
																				<div class="teduh-bottom-thumbnail">
																				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
																				</div>
																			</div>
																			<div class="col-md-12 home-title-devotion-main">
																			<h4><?php the_title(); ?></h4>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
																		<div class="date-home">
																			<?php the_time('F jS, Y');?>
																		</div>
																		<div>
																			<?php the_excerpt(); ?>
																		</div>
																		</div>
																	</div>
																</div>
															</div>
															<?php endwhile; ?>
																<?php else : ?>
																	<h2>Not Found</h2>
																<?php endif; 
																wp_reset_query();
																?>
														</div>
													</div>
												</div>
											</div>


											<div class="col-md-12 ">
												<div class="row">
													<div class="section">
														<div class="col-md-12 main  ">
														<?php
																$today = getdate();
																$args = array(
																	'date_query' => array(
																		array(
																			'year'  => $today['year'],
																			'month' => $today['mon'],
																			'day'   => $today['mday'],
																		),
																	),
																	'cat' => '12',
																);
															// The Query
															query_posts( $args );

															// The Loop
															?>
															<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
															<div class="devotion-content devotion-content-home ">
																<div id="img-content-top"class="col-md-12 img-devotion-content-home">
																	<div class="row">
																		<div class="col-md-3 devotion-top-img-home">
																			<div class="teduh-top-img">
																			<img src="<?php bloginfo('template_url'); ?>/images/home/muda.gif" class="img-circle">
																			</div>
																		</div>
																		<div class="col-md-8">
																			<div class="devotion-top-title">
																				<h4>RENUNGAN KAUM MUDA</h4>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="devotion-content-home-1 col-md-10">
																	<div class="row ">
																		<div class="">
																			<div class="col-md-12">
																				<div class="teduh-bottom-thumbnail">
																				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
																				</div>
																			</div>
																			<div class="col-md-12 home-title-devotion-main">
																			<h4><?php the_title(); ?></h4>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
																		<div class="date-home">
																			<?php the_time('F jS, Y');?>
																		</div>
																		<div>
																			<?php the_excerpt(); ?>
																		</div>
																		</div>
																	</div>
																</div>
															</div>
															<?php endwhile; ?>
																<?php else : ?>
																	<h2>Not Found</h2>
																<?php endif; 
																wp_reset_query();
																?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
										
										</div>
									</div>
								</div>
							</div>



							<div id="saatteduh-kanan">
								<div class="section">
									<div class="col-md-6">
										<div class="row">
											<div class="section">
											<div class="col-md-12 ">
												<div class="row">
													<div class="section">
														<div class="col-md-12 main ">
														<?php
																$today = getdate();
																$args = array(
																	'date_query' => array(
																		array(
																			'year'  => $today['year'],
																			'month' => $today['mon'],
																			'day'   => $today['mday'],
																		),
																	),
																	'cat' => '14',
																);
															// The Query
															query_posts( $args );

															// The Loop
															?>
															<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
															<div class="devotion-content devotion-content-home ">
																<div id="img-content-top"class="col-md-12 img-devotion-content-home">
																	<div class="row">
																		<div class="col-md-3 devotion-top-img-home">
																			<div class="teduh-top-img">
																			<img src="<?php bloginfo('template_url'); ?>/images/home/remaja.gif" class="img-circle">
																			</div>
																		</div>
																		<div class="col-md-8">
																			<div class="devotion-top-title">
																				<h4>RENUNGAN REMAJA</h4>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="devotion-content-home-1 col-md-10">
																	<div class="row ">
																		<div class="">
																			<div class="col-md-12 ">
																				<div class="teduh-bottom-thumbnail">
																				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
																				</div>
																			</div>
																			<div class="col-md-12 home-title-devotion-main">
																			<h4><?php the_title(); ?></h4>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
																		<div class="date-home">
																			<?php the_time('F jS, Y');?>
																		</div>
																		<div>
																			<?php the_excerpt(); ?>
																		</div>
																		</div>
																	</div>
																</div>
															</div>
															<?php endwhile; ?>
																<?php else : ?>
																	<h2>Not Found</h2>
																<?php endif; 
																wp_reset_query();
																?>
														</div>
													</div>
												</div>
											</div>


											<div class="col-md-12 ">
												<div class="row">
													<div class="section">
														<div class="col-md-12 main ">
														<?php
																$today = getdate();
																$args = array(
																	'date_query' => array(
																		array(
																			'year'  => $today['year'],
																			'month' => $today['mon'],
																			'day'   => $today['mday'],
																		),
																	),
																	'cat' => '16',
																);
															// The Query
															query_posts( $args );

															// The Loop
															?>
															<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
															<div class="devotion-content devotion-content-home ">
																<div id="img-content-top"class="col-md-12 img-devotion-content-home">
																	<div class="row">
																		<div class="col-md-3 devotion-top-img-home">
																			<div class="teduh-top-img">
																			<img src="<?php bloginfo('template_url'); ?>/images/home/lansia.gif" class="img-circle">
																			</div>
																		</div>
																		<div class="col-md-8">
																			<div class="devotion-top-title">
																				<h4>RENUNGAN LANSIA</h4>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="devotion-content-home-1 col-md-10">
																	<div class="row ">
																		<div class="">
																			<div class="col-md-12 ">
																				<div class="teduh-bottom-thumbnail">
																				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }?>
																				</div>
																			</div>
																			<div class="col-md-12 home-title-devotion-main">
																			<h4><?php the_title(); ?></h4>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-12">
																		<div class="date-home">
																			<?php the_time('F jS, Y');?>
																		</div>
																		<div>
																			<?php the_excerpt(); ?>
																		</div>
																		</div>
																	</div>
																</div>
															</div>
															<?php endwhile; ?>
																<?php else : ?>
																	<h2>Not Found</h2>
																<?php endif; 
																wp_reset_query();
																?>
														</div>
													</div>
												</div>
											</div>
										</div>


										</div>
									</div>
								</div>
							</div>





							</div>
						</div>
		            	</div>
		            </div>
		            </div>
		            </div>
	            </div>






		  	</div>
			<div class="col-md-4 main ">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="">
					<div class="">
					</div>
				</div>
				<?php endwhile; ?>
					<?php else : ?>
						<h2>Not Found</h2>
					<?php endif; 
					?>
			</div>
		</div>
	</div>
	</div>
<?php get_footer(); ?>