<?php
/*
 * Template Name: Teams Page
 */

get_header(); ?>

<script>
 jQuery(document).ready(function ($) {
    
    var $container = $('#teams'),
        $select = $('div#filterGroup select');
        filters = {};

    $container.isotope({
      itemSelector : '.team',
      cellsByRow: {
        columnWidth: 184,
        rowHeight: 185
      }
    });

     $select.change(function() {
        var $this = $(this);

        var $optionSet = $this;
        var group = $optionSet.attr('data-filter-group');
    filters[group] = $this.find('option:selected').attr('data-filter-value');

        var isoFilters = [];
        for (var prop in filters) {
            isoFilters.push(filters[prop])
        }
        var selector = isoFilters.join('');

        $container.isotope({
            filter: selector
        });

        return false;
    });

  });
</script>


<?php 

// args
$args = array(
    'numberposts' => -1,
    'posts_per_page'=> -1,
    'post_type' => 'teams'
);
 
// get results
$the_query = new WP_Query( $args );
 
// The Loop
?>

<div id="posts">

<h1><?php echo get_the_title(); ?> </h1>

<div id="filterGroup">
<select class="filter option-set" data-filter-group="division">
    <option data-filter-value="" selected="selected">All Divisions</option>
    <option data-filter-value=".mens-division-i">Men's Division I</option>
    <option data-filter-value=".mens-division-ii">Men's Division II</option>
    <option data-filter-value=".womens-division-i">Women's Division I</option>
</select> 

<select class="filter option-set" data-filter-group="qualified">
    <option data-filter-value="" selected="selected">All Teams</option>
    <option data-filter-value=".qualified">Qualified</option>
    <option data-filter-value=".mens-division-ii">Not qualified</option>
</select>
</div>

<div id="teams">
<section>
     <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
     <?php if(get_field('division')) {
       $division = get_field('division');
    } 
    if(get_field('qualified')) {
       $qualified = 'qualified'; }
       else { $qualified = "not-qualified";
    };

      // add the image
       $logo = wp_get_attachment_image_src(get_field('logo'), 'team-logo');
    // get the comment count
?>
        <div class="team <?php echo $division . ' ' . $qualified; ?> ">
            <div class="image">
                <a href="<?php the_permalink(); ?>"> <img src="<?php echo $logo[0] ?>"/></a>
            </div>
            <div class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        </div>
    <?php endwhile; ?>
</section>
</div>
</div>

<?php get_footer(); ?>