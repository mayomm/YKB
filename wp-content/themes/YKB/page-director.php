<?php
/*
Template Name: Page Director
*/
get_header(); ?>
		
		<div class="margin-information">
			<div class="image-tentang">
			      	<img src="<?php bloginfo('template_url');?>/images/tentang kami/latar-belakang.png">
			    </div>
			<div id="content" class="content-area col-sm-12 col-md-12 ">
				<div class="latarbelakang-title">
					<h2 class="">LATAR BELAKANG KAMI</h2>
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
							<div class="col-md-12">
								<div class="col-sm-4 col-md-7">
									<div class="margin-tentang-kami">
										<p class="font-ukuran-2">memberikan Injil damai sejahtera dan memperluas Kerajaan Allah merupakan panggilan bagi gereja. 
										GKI sebagai kenyataan Tubuh Kristus yang ditempatkan di Indonesia ini juga terpanggil untuk melaksanakan Amanat Agung 
										dari Sang Kepala Gereja yaitu Yesus Kristus.Dalam melaksanakan panggilan-Nya itu, maka GKI berupaya untuk menyampaikan
										kabar baik ini dengan berbagai metode yang dapat dirasakan sebagai berkat dari masyarakat. Salah satu program yang 
										dilakukann adalah penginjilan melalui berbagai media elektronik dan cetak.</p><br>
										<p class="font-ukuran-3">Pada awalnya kerja sama penginjilan lewat media elektronik dan cetak ini dilakukan oleh liga lembaga yaitu GKI jabar,
										GKI jatim dan Back To God Hour - CRCNA (sekarang menjadi Back To God Ministries International). Pelayanan dimulai sejak 
										tahun 1969 oleh Pdt. junus N. Atmarumeksa. Untuk meningkatkan pelayanan ini, makas di sepakati Komisi ini menjadi sebuah 
										Yayasan. Karena itu di bentuklah Yayasan Komisi Bersama pada tanggal 29 Januari 1990, dengan pengurusan : PDT. Junius N. 
										Atmarumeksa sebagai Ketua merangkap Direktur Eksekutif, Bp. Yulius Patty sebagai sekertaris, Bp T.K. Gunawan Prihatna 
										sebagai Bendahara, Pdt. Wiede Benaja dan Bp. S.K. Wijaja sebagai Anggota</p>
									</div>
								</div>
								<div class="">
								<div class="col-sm-7 col-md-5 main-right-blue">
									<div class="align-center">
										<div class="img-circle-top ">
											<img src="<?php bloginfo('template_url');?>/images/home/ykb.gif" >
										</div>
										<div class="font-circle-top">
										<p class="font-ukuran-4">Logo Yayasan Komunikasi Bersama berupaya gambar Burung Merpati dan Tiga Api dalam lingkaran.
										Burung Merpati merupakan smbol dari Roh Kusud, yang berarti kekudusan atau kesucian. Gambar tiga api melambangkan dari 
										Allah Tritunggal. Gambar lingkaran melambangkan gambar bumi atau dunia.</p>
										</div>
									</div>
								</div>
								</div>
							</div>
								<div class="col-md-12">
									<div class="col-md-11 main-latarbelakang-bottom">
										<div class="margin-tentang-kami-1">
											<h3>SUSUNAN PENGURUS</h3>
											<div>
												<img src="<?php bloginfo('template_url'); ?>/images/tentang kami/2_5_BoardofDirector.jpg">
											</div>
											<div>
												<p class="font-ukuran-3">
													Untuk lebih mengembangkan pelayanan Yayasan Komunikasi Bersama, maka dibutuhkan orang-orang yang bersedia untuk
													melayani dengan sepenuh hati.Karena itu pada tanggal 29 Januari 2004 diteguhkanlah susunan kepengurusan YKB, sebagai
													berikut :
												</p></br>
												<ul class="font-ukuran-5">
													<li> Pdt. (Em.) Junus N. Atmarumeksa (Ketua Pembina)</li>
													<li> Pdt. Simon Filantropha (Pembina)</li>
													<li> BP.Andreas Kartawinata (Pembina)</li>
													<li> PDT.Royandi Tanudjaja (Pembina)</li>
													<li> Pdt.Jan Calvin Pindo (Pembina)</li></br>
													<li> Bp.Yulius Patty (Ketua Pengurus)</li>
													<li> Ibu Hetty Djohan Suryana (sekretaris Umum)</li>
													<li> Pdt.Gladys Jeanette Wee (sekretaris)</li>
													<li> Bp.Jasen Tedjasukmana (Bendahara Umum)</li>
													<li> Bp.JOHNSON A.HUTAURUK (Bendahara)</li></br>
													<li> Bp. S.K. Widjaja (Ketua Pengawa)</li>
													<li> PDT.Rudianto Djajakartika (Pengawas)</li>
												</ul>
											</div>
										</div>
									</div>	
								</div>
							</div>
							<div class="entry font-andalus">
			
								<?php the_content(); ?>

								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

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
	</div>
<?php get_footer(); ?>
