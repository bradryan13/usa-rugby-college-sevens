<?php
/**
 * The Template for displaying all single posts.
 *
 * @package USA Rugby College Sevens
 */

get_header(); ?>
<div id="posts">
		

		<?php while ( have_posts() ) : the_post(); ?>
		<?php $logo = wp_get_attachment_image_src(get_field('logo'), 'team-logo'); 
		if(get_field('qualified')) {
			$qualified = 'Qualified <span class="glyphicon glyphicon-ok-sign"></span>'; } else {
			$qualified = 'Not qualified.';
		}
		
		if(get_field('primary_contact')) {
			$primary_contact = '<a target="blank" href="mailto:' . get_field('primary_contact') . '">Primary Contact</a>';
		} 

		if(get_field('head_coach')) {
			$head_coach = get_field('primary_contact');
		} 

		if(get_field('website')) {
			$website = '<a target="blank" href="' . get_field('website') . '">Website</a>';
		} 

		if(get_field('facebook')) {
			$facebook = '<a target="blank" href="' . get_field('facebook') . '">Facebook</a>';
		} 

		if(get_field('qualification')) {
			$qualification = get_field('qualification');
		} 
		?>

			
		<div class="header row">

			<div class="image col-sm-2">
                <img src="<?php echo $logo[0] ?>"/>
            </div>
				
			<div class="title col-sm-10">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>

        <div class="row">
        <div class="team-info col-md-5">


        	<ul>
				<li rel="tooltip" data-toggle="tooltip" title="<?php echo $qualification ?>" ><?php echo $qualified; ?></li>
				<li><?php echo $head_coach ?></li>
				<li><?php echo $primary_contact ?> </li>
				<li><?php echo $website ?> </li>
				<li><?php echo $facebook ?> </li>
			</ul>
        </div>

        <div class="team-news col-md-7">
        <?php $twitter = get_field('twitter'); ?>
			<a class="twitter-timeline" href="https://twitter.com/USARugby" data-widget-id="388416060887539712" data-screen-name="<?php echo $twitter ?>">Tweets by <?php echo $twitter ?></a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
		</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				//if ( comments_open() || '0' != get_comments_number() )
					//comments_template();
			?>

		<?php endwhile; // end of the loop. ?>


</div><!-- #primary -->

<?php get_footer(); ?>