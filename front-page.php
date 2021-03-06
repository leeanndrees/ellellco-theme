<?php get_header(); ?>
		
	<section id="mission" class="homepage-mission">

			<div class="row">
				<div class="col-md-12">

				<?php if( get_field( "mission_statement" ) ): ?>
					<h2 class="white text-center"><?php the_field('mission_statement'); ?></h2>
						<?php endif;
		        ?>
			    </div>
			</div>
    </section>

    <div id="content-holder" class="container">

    <section id="portfolio" class="homepage-portfolio">

    	<div class="row">
			<div class="col-md-12">

		<?php if( get_field( "title_above_our_work_showcase" ) ): ?>
			<h2 class="text-center"><?php the_field('title_above_our_work_showcase'); ?></h2>
				<?php endif;
        ?>

	    	</div>
	    </div>

		<div class="row">
			<?php include("parts/loop_portfolio.php"); ?>

				<!--<?php dynamic_sidebar('homepage-portfolio'); ?>-->
			<!--<div class="col-md-4">
				<h3 class="text-center">Example 1</h3>
			</div>
			<div class="col-md-4">
				<h3 class="text-center">Example 1</h3>
			</div>
			<div class="col-md-4">
				<h3 class="text-center">Example 1</h3>
			</div>-->
		</div>
    </section>
    <section id="bios" class="homepage-bios">

    	<div class="row">
			<div class="col-md-12">

        <?php if( get_field( "title_above_our_bios" ) ): ?>
			<h2 class="text-center"><?php the_field('title_above_our_bios'); ?></h2>
				<?php endif;
        ?>
         <?php if( get_field( "our_bio_paragraph" ) ): ?>
					<p><?php the_field('our_bio_paragraph'); ?></p>
		 		<?php endif;
		?>
    		

			<div class="col-md-4">
				<h3 class="text-center">Laura Eagin</h3>
		         <?php if( get_field( "laura_bio_photo" ) ): ?>
					<li class="img-circle"><a href="/about/#laura"><img src="<?php the_field('laura_bio_photo'); ?>" class="img-circle aligncenter" alt="Laura Eagin web designer" width="200"/></a></li>
		 				<?php endif;
		        ?>
    		</div>
			<div class="col-md-4">
				<h3 class="text-center">Leeann Drees</h3>
		        <?php if( get_field( "leeann_bio_photo" ) ): ?>
					<li class="img-circle"><a href="/about/#leeann"><img src="<?php the_field('leeann_bio_photo'); ?>" class="img-circle aligncenter" alt="Leeann Drees web developer" width="200"/></a></li>
		 				<?php endif;
		        ?>
		    </div>

		    <div class="col-md-4">
				<h3 class="text-center">&amp; Company</h3>
		         <?php if( get_field( "co_bio_photo" ) ): ?>
					<li class="img-circle"><a href="/about/"><img src="<?php the_field('co_bio_photo'); ?>" class="img-circle aligncenter" alt="web development team" width="200"/></a></li>
		 				<?php endif;
		        ?>
    		</div>

    		</div>
 
    </section>

		<section id="call-to-action" class="homepage-cta">			
			<div class="call-to-action-content-wrapper clearfix">
				<div class="call-to-action-content">
				<?php if( get_field( "call_to_action_title" ) ): ?>
					<h3><?php the_field('call_to_action_title'); ?></h3>
 				<?php endif;
 				?>
				<?php if( get_field( "call_to_action_additional_text" ) ): ?>
					<p><?php the_field('call_to_action_additional_text'); ?></p>
 				<?php endif;
 				?>
 		
 		
</div>
        <?php if( get_field( "call_to_action_link" ) ): ?>
			<a class="call-to-action-button btn btn-primary" href="<?php the_field('call_to_action_link'); ?>" title="Work with us">Work with us</a>
 				<?php endif;
        ?>			
				</div>
			
		</section>
	</div>
</div>
<?php get_footer(); ?>				