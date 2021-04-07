<body data-barba="wrapper">
	<?php require 'head.php'; ?>

	<main data-barba="Container" data-barba-namespace="home">
		<div id="ContactPointer">
			<div class="Pointer"></div>
		</div>
		<!-- HEADER -->
		<div class="Content-Full">
			<header class="Content Header">
				<div class="Nav-Fixed">
					<?php require 'nav.php'; ?>
				</div>
				<div class="H2-Box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h2 class="Color-white">Cabinet de conseil en stratégie digitale.</h2>
				</div>
				<div class="Triangles-Box">
					<img data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" class="Header-Triangle-Blue" src="img/photos/triangle-photo-header.png" alt="Shapes">
					<img data-aos="fade-in" data-aos-delay="150" data-aos-duration="1000" data-aos-easing="ease-in-out" class="Header-Triangle-White" src="img/shapes/header-triangle-white.svg" alt="Shapes">
				</div>
			</header>
			<?php require 'menu.php'; ?>
		</div>
		<!-- HEADER -->

		<div class="AllSite">

			<!-- CABINET -->
			<section class="Section-Presentation Content-Small">
				<div class="Columns-2X" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h6 class="">Présentation</h6>
					<div class="Box-H5-CTA">
						<h4 class="MarginBottom-50px">Nous accompagnons les entreprises dans l'intégration du digital dans leur stratégie et leur culture d'entreprise en travaillant avec leurs équipes.</h4>
						<a href="#!" class="CTA CTA-Main PointerLink">Découvrir le cabinet
							<img src="../img/a/arrow.svg" alt="Lien">
						</a>
					</div>
				</div>
			</section>
			<!-- CABINET -->

			<!-- VISION -->
			<section class="Section-Vision Content-Small">
				<div class="Columns-2X" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
					<h6 class="">Approche</h6>
					<div class="Box-Keywords">
						<div class="Keywords">
							<h1 class="Keywords-Title">Créatif</h1>
							<h5 class="Keywords-Description">Parce que nous pensons que la créativité est la clé pour se démarquer et proposer de l'innovation dans un service.</h5>
						</div>
						<div class="Keywords">
							<h1 class="Keywords-Title">Disruptif</h1>
							<h5 class="Keywords-Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nulla nunc</h5>
						</div>
						<div class="Keywords">
							<h1 class="Keywords-Title">Effiface</h1>
							<h5 class="Keywords-Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nulla nunc</h5>
						</div>
						<div class="Keywords">
							<h1 class="Keywords-Title">Ambitieux</h1>
							<h5 class="Keywords-Description">Lorem ipsum dolor sit amet consectetur.</h5>
						</div>
					</div>
				</div>
			</section>
			<!-- VISION -->

			<!-- SERVICE -->
			<section class="Section-Services-Margin Content-Full">
				<div class="Section-Services Content">
					<img data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" class="Service-Triangle-Blue" src="img/shapes/header-triangle-blue.svg" alt="Shapes">
					<img data-aos="fade-right" data-aos-delay="250" data-aos-duration="1000" data-aos-easing="ease-in-out" class="Service-Photo" src="img/photos/photo-service.png" alt="Shapes">
					<?php require 'components/box-services.php';?>
				</div>
			</section>
			<!-- SERVICE -->

			<!-- ARTICLE -->
			<section class="Section-Articles">
				<div class="Content-Small">
					<div class="Box-H2-A" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<h2>Actualités</h2>
						<div>
							<a href="#!" class="CTA Link-Main">Découvrir le cabinet<img src="../img/a/arrow.svg" alt="Lien"></a>
						</div>
					</div>
					<div class="Box-Articles-4X">
						<div class="Box-Articles-2X" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<?php require 'components/article.php';?>
							<?php require 'components/article.php';?>
						</div>
						<div class="Box-Articles-2X" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
							<?php require 'components/article-image.php';?>
							<?php require 'components/article.php';?>
						</div>
					</div>
				</div>
			</section>
			<!-- ARTICLE -->

			<!-- SOCIALS POSTS -->
			<section class="Section-Socials-Posts">
				<div class="Content-Small">
					<h2 data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">Nous suivre</h2>
					<div class="Socials-Posts-Slider" >
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div data-aos="fade-in" data-aos-delay="150" data-aos-duration="1000" data-aos-easing="ease-in-out" class="swiper-slide"><?php require 'components/social-post.php';?></div>
								<div data-aos="fade-in" data-aos-delay="250" data-aos-duration="1000" data-aos-easing="ease-in-out" class="swiper-slide"><?php require 'components/social-post.php';?></div>
								<div data-aos="fade-in" data-aos-delay="350" data-aos-duration="1000" data-aos-easing="ease-in-out" class="swiper-slide"><?php require 'components/social-post.php';?></div>
							</div>
						</div>
					</div>
				</div>
			</section> 
			<!-- SOCIALS POSTS -->

			<!-- FOOTER -->
			<footer class="Section-Footer Content-Full">
				<div class="Content-small">
					<div class="Box-Footer-Social" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<a href="tel:+33 6 42 45 05 24" class="Footer-Link">+33 6 42 45 05 24</a>
						<div>
							<a href="#!" class="Footer-Link">Twitter</a>
							<a href="#!" class="Footer-Link">Linkedin</a>
						</div>
					</div>
					<div data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" data-aos-easing="ease-in-out">
						<div class="Box-Footer-Mailto">
							<p class="Color-White">Une demande ? Un projet ?</p>
							<a class="Box-Footer-Mailto-Link" href="#!">Nous écrire <img class="Box-Footer-Mailto-Arrow" src="img/a/arrow-footer.svg" alt="Continuer"></a>
						</div>
						<div class="Box-Footer-Links">
							<div>
								<a href="#!">Politiques de confidentialités</a>
								<a href="#!">Mentions légales</a>
							</div>
							<span class="Footer-Link-Copyright">© 2021 Trailblazers</span>
						</div>
					</div>
				</div>
			</footer> 
			<!-- FOOTER -->
		</div>
	</main>
	<?php require 'footer.php'; ?>
</body>