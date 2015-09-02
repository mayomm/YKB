<?php
/*
Template Name: Custom page
*/
get_header(); ?>
<div class="margin-information">
   <div id="content" class="content-area col-sm-12 col-md-12 ">
      <div class="image-our-vision row">
      	<div class="margin-top-vision">
	      	<div>
	      		<h2 class="top-title">OUR VISION</h2>
	      	</div>
	         <div class="col-sm-4 background-our-vision">
	            <div class="font-border-down">
	               <h5 class="h5margin" style="color: white;">MENJADI</h5>
	            </div>
	            <div class="text-left top-text-left">
	               <ol>
	                  <li style="color: white;"><small>Yayasan yang membawa Kabar Baik di dalam Yesus Kristus bagi seluruh bangsa Indonesia</small></li>
	                  <li style="color: white;"><small>Mitra bagi gereja-gereja dan organisasi-organisasi Kristen lainnya untuk bersama-sama memenuhi Amanat Agung dari Sang Kepala Gereja yakni Yesus Kristus Tuhan</small></li>
	               </ol>
	            </div>
	         </div>
         </div>
      </div>
      <div class="">
         <div class="row">
            <div class="asd">
               <div class="col-sm-5 col-md-3 ">
                  <div class="sidebar-deviotion-margin">
                     <div class="asd">
                        <div class ="ribbon">
                           TENTANG KAMI
                           <i></i>
                           <i></i>
                        </div>
                     </div>
                     <div class="margin-devotion-sidebar">
                        <div class="sidebar">
                           <ul class="nav nav-sidebar">
                              <li class="sidebar-background"><a href="<?php get_site_url();?>latar-belakang"> LATAR BELAKANG KAMI </a></li>
                              <li class="sidebar-background"><a href="<?php get_site_url();?>visi-misi"> VISI & MISI KAMI </a></li>
                              <li class="sidebar-background"><a href="<?php get_site_url();?>mitra"> MITRA KAMI </a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-9 main content-devotion-background ">
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <div class="devotion-content">
                  <div class="row">
                     <div class="">
                        <div class="col-md-12">
                        	<div class="section">
	                           	<div class="font-no-border">
		                           <h4>BERUPAYA</h4>
		                        </div>
	                        </div>
	                        <div class="row middle-main-margin">
	                        <div class="section">
	                        	<div class="align-center middle-main">
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
	                        <div class="font-warp-vision">
	                        <div class="section">
	                           <h2>OUR MISSION</h2>
	                        </div>
	                        </div>
	                        <div class="col-md-12">
	                           <div class="row">
	                            <div class="section">
	                              <div class="col-md-6">
	                              	<div class="border-image-bulat-2">
	                              	<div class="border-image-bulat-1">
	                              	<div class="border-image">
	                              		<div class="image-bulat-1">
	                                 		<img src="<?php bloginfo('template_url');?>/images/tentang kami/gambarbulat.png" alt="children" class=" border-blue" />
	                                	</div>
	                                </div>
	                                </div>
	                                </div>
	                              </div>
	                              <div class="col-md-6">
	                              	<div class="row">
	                              	<div class="section">
	                                 <div class="col-md-12 font-ourmission">
	                                 <div class="border-misi-1">
										<div class="row">
											<div class="col-md-2 col-sm-2">
												<div class="image-logo-misi">
													<img src="<?php bloginfo('template_url');?>/images/tentang kami/misi-1.png">
												</div>
											</div>
											<div class="col-md-10 col-sm-10">
		                                    	<p class="font-ukuran-1 side-ourmission"><small>1.Menggunakan dan memanfaatkan media komunikasi massa, khususnya media cetak dan media elektronik sebagai sarana untuk memberitakan kabar baik bagi masyarakat.</small></p>
		                                 	</div>
	                                 	</div>
	                                 </div>
	                                 </div>
	                                 </div>
	                                 <div class="section">
	                                 <div class="border-misi-2">
	                                 <div class="col-md-12  font-ourmission ">
										<div class="row">
											<div class="col-md-2 col-sm-2">
												<div class="image-logo-misi">
													<img src="<?php bloginfo('template_url');?>/images/tentang kami/misi-2.png">
												</div>
											</div>
											<div class="col-md-10 col-sm-10">
		                                    	<p class="font-ukuran-1 side-ourmission"><small>2.Membuat program-program siaran rohani bagi radio dan televisi yang berisi penerangan, pendidikan, kebudayaan dan penghiburab yang berdasarkan pada etika Kristiani.</small></p>
		                                 	</div>
	                                 	</div>
	                                 </div>
	                                 </div>
	                                 </div>
	                                 <div class="section">
	                                 <div class="border-misi-3">
	                                 <div class="col-md-12  font-ourmission ">
										<div class="row">
											<div class="col-md-2 col-sm-2">
												<div class="image-logo-misi">
													<img src="<?php bloginfo('template_url');?>/images/tentang kami/misi-3.png">
												</div>
											</div>
											<div class="col-md-10 col-sm-10">
		                                    	<p class="font-ukuran-1 side-ourmission"><small>3.Mengadakan khursus-khursus dan seminar-seminar tentang pelayanan media masa, terutama pelayanan Kristiani melalui media cetak dan elektronik.</small></p>
		                                 	</div>
	                                 	</div>
	                                 </div>
	                                 </div>
	                                 </div>
	                                 <div class="section">
	                                 <div class="border-misi-4">
	                                 <div class="col-md-12  font-ourmission ">
										<div class="row">
											<div class="col-md-2 col-sm-2">
												<div class="image-logo-misi">
													<img src="<?php bloginfo('template_url');?>/images/tentang kami/misi-4.png">
												</div>
											</div>
											<div class="col-md-10 col-sm-10">
		                                    	 <p class="font-ukuran-1 side-ourmission"><small>4.Mengadakan kegiatan-kegiatan yang dapat memukuk dan menigkatkan kerjasama antar gereja.</small></p>
		                                 	</div>
	                                 	</div>
	                                 </div>
	                                 </div>
	                                 </div>
	                                 <div class="section">
	                                 <div class="border-misi-5">
	                                 <div class="col-md-12  font-ourmission ">
										<div class="row">
											<div class="col-md-2 col-sm-2">
												<div class="image-logo-misi">
													<img src="<?php bloginfo('template_url');?>/images/tentang kami/misi-5.png">
												</div>
											</div>
											<div class="col-md-10 col-sm-10">
		                                    	  <p class="font-ukuran-1 side-ourmission"><small>5.Melakukan upaya-upaya kemitraan bersama gereja-gereja dan lembaga-lembaga Kristen lainnya untuk mencapai visi Yayasan Komunikasi Bersama.</small></p>
		                                 	</div>
	                                 	</div>
	                                 </div>
	                                 </div>
	                                 </div>
	                                 <div class="section">
	                                 <div class="border-misi-6">
	                                 <div class="col-md-12  font-ourmission ">
										<div class="row">
											<div class="col-md-2 col-sm-2">
												<div class="image-logo-misi">
													<img src="<?php bloginfo('template_url');?>/images/tentang kami/misi-6.png">
												</div>
											</div>
											<div class="col-md-10 col-sm-10">
		                                    	   <p class="font-ukuran-1 side-ourmission"><small>6.Membuka peluang-peluang bagi orang-orang Kristen untuk mengeksperikan imannya degan berdiakonia dan bermarturia melalui Yayasan Komunikasi Bersama.</small></p>
		                                 	</div>
	                                 	</div>
	                                 </div>
	                                 </div>
	                                 </div>
	                                 <div class="section">
	                                 <div class="border-misi-7">
	                                 <div class="col-md-12  font-ourmission ">
										<div class="row">
											<div class="col-md-2 col-sm-2">
												<div class="image-logo-misi">
													<img src="<?php bloginfo('template_url');?>/images/tentang kami/misi-7.png">
												</div>
											</div>
											<div class="col-md-10 col-sm-10">
		                                    	  <p class="font-ukuran-1 side-ourmission"><small>7.Mengadakan usaha-usaha lain yang tidak bertentangan dengan hukum serta tidak menyimpang dari visi Yayasan Komunikasi Bersama.</small></p>
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
               <?php endwhile; ?>
               <?php else : ?>
               <h2>Not Found</h2>
               <?php endif; 
                  ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>
