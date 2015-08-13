<?php
/*
Template Name: Page Event
*/
get_header(); ?>
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row content ">

				<div class="post col-md-12" id="post-<?php the_ID(); ?>">	
					<div class="content-devotion-background">
					<div>
						<img src="<?php bloginfo('template_url'); ?>/images/footer/bromo1.jpg" class="image-custom">
					</div>
					<div class="title-event">
					<h2><?php the_title(); ?></h2>
					</div>
					<div class="col-md-12 ">
						<div class="row ">
							<div class="col-md-3 img-content-event">
								<img src="<?php bloginfo('template_url'); ?>/images/A.jpg">
							</div>
							<div class="col-md-8 paragraf-content">
								<p>Kata sejarah secara harafiah berasal dari kata Arab (شجرة: šajaratun) yang artinya pohon. Dalam bahasa Arab sendiri, sejarah disebut tarikh (تاريخ ). Adapun kata tarikh dalam bahasa Indonesia artinya kurang lebih adalah waktu atau penanggalan. Kata Sejarah lebih dekat pada bahasa Yunani yaitu historia yang berarti ilmu atau orang pandai. Kemudian dalam bahasa Inggris menjadi history, yang berarti masa lalu manusia. Kata lain yang mendekati acuan tersebut adalah Geschichte yang berarti sudah terjadi.

Dalam istilah bahasa-bahasa Eropa, asal-muasal istilah sejarah yang dipakai dalam literatur bahasa Indonesia itu terdapat beberapa variasi, meskipun begitu, banyak yang mengakui bahwa istilah sejarah berasal-muasal,dalam bahasa Yunani historia. Dalam bahasa Inggris dikenal dengan history, bahasa Prancis historie, bahasa Italia storia, bahasa Jerman geschichte, yang berarti yang terjadi, dan bahasa Belanda dikenal gescheiedenis.

Istilah ini masuk dalam bahasa Inggris pada tahun 1390 dengan makna "hubungan kejadian, cerita". Pada Bahasa Inggris Pertengahan, artinya adalah "cerita" secara umum. Pembatasan terhadap arti "catatan peristiwa masa lalu" muncul pada akhir abad ke-15. Saat itu masih dalam arti Yunani yang pada saat itu juga Francis Bacon menggunakan istilah tersebut pada akhir abad ke-16, ketika ia menulis tentang "Sejarah Alam". baginya, historia adalah "pengetahuan tentang objek yang ditentukan oleh ruang dan waktu", sehingga jenis pengetahuan disediakan oleh Ingatan (sementara Ilmu disediakan oleh akal, dan puisi disediakan oleh fantasi).

Menilik pada makna secara kebahasaan dari berbagai bahasa di atas dapat ditegaskan bahwa pengertian sejarah menyangkut dengan waktu dan peristiwa. Oleh karena itu masalah waktu penting dalam memahami satu peristiwa, maka para sejarawan cenderung mengatasi masalah ini dengan membuat periodisasi.

Dalam sebuah ekspresi linguistik sintetik vs. analitik / isolasi dikotomi, (史 vs. 诌) sekarang menunjuk kata yang berbeda untuk sejarah manusia atau bercerita secara umum. Di Jerman, Perancis, dan sebagian bahasa Jermanik dan Romantis, kata yang sama masih digunakan untuk pemakaian kata "sejarah" dan "cerita".

kata sifat historical dibuktikan dari tahun 1661, dan historic dari tahun 1669.</p>
							</div>
						</div>
					</div>
					<div class="entry">

						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

					</div>
					</div>
				</div>
			</div>
			
			<?php //comments_template(); ?>

			<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>
