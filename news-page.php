<?php
/*
 * Template Name: News Page
 */

get_header(); ?>
<div id="posts">
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
 
            <?php if (have_posts()) : ?>  
                <?php while (have_posts()) : the_post(); ?>  
                <div class="post cf row" id="post-<?php the_ID(); ?>">
                    <div class="post-copy col-md-7">
                        <h2>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h2>  
                        <div class="entry">  
                            <?php the_excerpt(); ?>  
                        </div>  
                    </div>   
                    <div class="post-meta col-md-5">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <ul class="meta">
                            <li><span class="glyphicon glyphicon-user"></span>    <?php the_author_firstname(); ?> <?php the_author_lastname(); ?> </li>
                            <li><span class="glyphicon glyphicon-calendar"></span>    <?php the_time('F jS, Y') ?></li>  
                        </ul>
                    </div>
                </div>  
                <?php endwhile; ?>  
                <div class="navigation">  
                    <div class="alignleft"><?php next_posts_link('« Previous Entries') ?></div>  
                    <div class="alignright"><?php previous_posts_link('Next Entries »') ?></div>  
                </div>  
            <?php else : ?>  
                <h2 class="center">Not Found</h2>  
                <p class="center">Sorry, but you are looking for something that isn't here.</p>  
                <?php include (TEMPLATEPATH . "/searchform.php"); ?>  
            <?php endif; ?>  
</div>

<?php get_footer(); ?>