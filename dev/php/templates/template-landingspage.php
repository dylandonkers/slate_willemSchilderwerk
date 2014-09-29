<?php
/*
Template Name: landingspage
*/
?>

<?php get_header(); ?>
	<div class="wrapper-Content">
	<!--<div class="Achtergrond-Slider ">-->
		<div class="Slider">
		        <div class="Header-Banner-Achtergrond">
		        	<div class="u-gridContainer Slider-Text">
		        		<h4>4 jaar garantie</h4>
		        		<p>Onderhoud en schilderen heel Nederland</p>
		        	</div>
					<img class="Slider-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/background-willem5.jpg" >
		        </div>
                <div class="Header-Banner-Achtergrond">
		        	<div class="u-gridContainer Slider-Text">
		        		<h4>Al 30 jaar streven naar perfectie</h4>
		        		<p>Onderhoud en schilderen</p>
		        	</div>
					<img class="Slider-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/background-willem3.jpg" >
		        </div>
		        <div class="Header-Banner-Achtergrond">
		        	<div class="u-gridContainer Slider-Text">
		        		<h4>Flexibel ook in avond en weekend</h4>
		        		<p>Onderhoud en schilderen</p>
		        	</div>
					<img class="Slider-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/background-willem2.jpg" >
		        </div>
		        <div class="Header-Banner-Achtergrond">
		        	<div class="u-gridContainer Slider-Text">
		        		<h4>Hotels, recreatieparken, bedrijfspanden en overheid</h4> 
		        		<p>Onderhoud en schilderen</p>
		        	</div>
					<img class="Slider-Img"src="<?php echo get_stylesheet_directory_uri(); ?>/img/background-willem.jpg" >
		        </div>
		</div>
		<div class="landing-page">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="u-gridContainer">
						<artikel  class="u-gridCol8 landing">
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
						</artikel>
						<artikel class="u-gridCol4 landing">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/8934618-isolated-platen-and-sky-element-of-design.jpg" class="landing-img"> </img>
							<a class="button" title="contact" href="http://willemschilderwerk.lijktmeduidelijk.nl/offerte/">Vraag offerte aan</a>
						</artikel>
					</div>
		</div>	
	<!--</div>-->
		<div class="u-gridContainer">
			<article class="Content Content--home" id="post-<?php the_ID(); ?>">
					<article class="content-article-top u-gridCol4">
						<h4>Waarvoor willem schilderwerken</h4>
						<ul>
							<li>sausen</li>
							<li>impregneren</li>
							<li>wandafwerking(ook glasvezel)</li>
							<li>klein timmerwerk</li>
							<li>betonverven</li>
							<li>gevelreiniging</li>
							<li>alle voorkomende dakwerkzaamheden</li>
							<li>in perfecte conditie brengen-en houden van houtwerk binnen en buiten</li>
							<li>gevelreiniging</li>
						</ul>
						<a class="button" title="contact" href="http://willemschilderwerk.lokaalgevonden.nl/schilderwerk/">Diensten</a>
					</article>
					<article class="content-article-mid u-gridCol4">
						<h4>Waarom willem schilderwerken</h4>
						<ul> 
							<li>4 jaar garantie op schilderwerk</li>
							<li>30 jaar ervaring als vakschilder</li>
							<li>geen 9-5 mentaliteit</li>
							<li>wij werken ook in de avonduren en in het weekend</li>
							<li>wij werken door heel nederland</li>
							<li>wij streven naar perfectie in kwaliteit in ons werk en bedrijfsvoering</li>
							<li>uitsluitend werken wij met door oveheid goedgekeurde verfsoorten (deze verfsoorten zijn op waterbasis)</li>
							<li>wij kiezen altijd voor de meest mileuvriendelijke oplossing!</li>
							</ul>
						<a class="button" title="contact" href="http://willemschilderwerk.lijktmeduidelijk.nl/offerte/">Offerte aanvragen</a>
					</article>
					<article class="content-article-bottom u-gridCol4">
						<h4>Voor wie wij werken</h4>
						<p>Naast vele honderden klanten in de particuliere sector, kunnen wij bogen op een grote kring tevreden opdrachtgevers in de onroerendgoed sector, verenigingen van eigenaren, hotels, bungalow-en vakantieparken.<br />

Onderhouden en schilderen van grote projecten voor verenigingen van eigenaren, hotels, bungalow-en vakantieparken</p>
						<a class="button" title="contact" href="http://willemschilderwerk.lijktmeduidelijk.nl/88-2/">Bekijk referenties</a></button>
					</article>
			</article>
			
		<?php endwhile; endif; ?> 
		</div>
	</div>
	<div class="content-bottom">
		<div class="u-gridContainer">
			<div class="content-bottom-wrapper ">
				
				<h4 class="content-bottom-wrapper-text1">Wij werken voor</h4>
				<content class="u-gridCol4 grid-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol1-1.png" class="content-bottom-wrapper-img content-bottom-grid"></img>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol1-2.png" class="content-bottom-wrapper-img content-bottom-grid"></img>
				</content>
				<content class="u-gridCol4 grid-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol2-1.png" class="content-bottom-wrapper-img content-bottom-grid"></img>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol2-2.png" class="content-bottom-wrapper-img content-bottom-grid"></img>
				</content>
				<content class="u-gridCol4 grid-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol3-1.png" class="content-bottom-wrapper-img content-bottom-grid"></img>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol3-2.png" class="content-bottom-wrapper-img content-bottom-grid"></img>
				</content>
			</div>

			<div class="content-bottom-wrapper">
				<h4 class="content-bottom-wrapper-text2">Wij werken met</h4>
				<content class="u-gridCol4 grid-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol1-3.png" class="content-bottom-wrapper-img"></img>
				</content>
				<content class="u-gridCol4 grid-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol2-3.jpg" class="content-bottom-wrapper-img"></img>
				</content>
				<content class="u-gridCol4 grid-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rol3-3.jpg" class="content-bottom-wrapper-img"></img>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
