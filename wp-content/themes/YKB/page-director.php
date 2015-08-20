<?php
/*
Template Name: Page Director
*/
get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row content">

				<div class="post col-md-12" id="post-<?php the_ID(); ?>">	
					<div>
						<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="image-custom-director" />
					</div>
					<div class="content-devotion-background margin-directorytop font-arial">
						<div class="row">
							<div class="col-md-12">
								<div class="col-sm-6 col-md-8 background-color-b">
									<p class="font-ukuran"><small>memberikan Injil damai sejahtera dan memperluas Kerajaan Allah merupakan panggilan bagi gereja. 
									GKI sebagai kenyataan Tubuh Kristus yang ditempatkan di Indonesia ini juga terpanggil untuk melaksanakan Amanat Agung 
									dari Sang Kepala Gereja yaitu Yesus Kristus.Dalam melaksanakan panggilan-Nya itu, maka GKI berupaya untuk menyampaikan
									kabar baik ini dengan berbagai metode yang dapat dirasakan sebagai berkat dari masyarakat. Salah satu program yang 
									dilakukann adalah penginjilan melalui berbagai media elektronik dan cetak.</small></p><br>
									<p><small>Pada awalnya kerja sama penginjilan lewat media elektronik dan cetak ini dilakukan oleh liga lembaga yaitu GKI jabar,
									GKI jatim dan Back To God Hour - CRCNA (sekarang menjadi Back To God Ministries International). Pelayanan dimulai sejak 
									tahun 1969 oleh Pdt. junus N. Atmarumeksa. Untuk meningkatkan pelayanan ini, makas di sepakati Komisi ini menjadi sebuah 
									Yayasan. Karena itu di bentuklah Yayasan Komisi Bersama pada tanggal 29 Januari 1990, dengan pengurusan : PDT. Junius N. 
									Atmarumeksa sebagai Ketua merangkap Direktur Eksekutif, Bp. Yulius Patty sebagai sekertaris, Bp T.K. Gunawan Prihatna 
									sebagai Bendahara, Pdt. Wiede Benaja dan Bp. S.K. Wijaja sebagai Anggota</small></p>
								</div>
								<div class="col-sm-6 col-md-4 margin-min background-color-a align-center">
									<div class="img-circle-top ">
										<img src="<?php bloginfo('template_url');?>/images/jesus.png" >
									</div>
									<div class="font-circle-top">
									<p>memberikan Injil damai sejahtera dan memperluas Kerajaan Allah merupakan panggilan bagi gereja. 
									GKI sebagai kenyataan Tubuh Kristus yang ditempatkan di Indonesia ini juga terpanggil untuk melaksanakan Amanat Agung 
									dari Sang Kepala Gereja yaitu Yesus Kristus.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="font-wrap">
					<h2 class="entry-title"><?php the_title(); ?></h2>
					</div>
					<div class="entry font-andalus">
	
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

					</div>

				</div>
			</div>
			
			<?php //comments_template(); ?>

			<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>
