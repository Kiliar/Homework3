<?php get_header(); ?>
<script type="text/javascript">
        function showIndex(index) {
            $('.sidebar li.current').removeClass('current');
            $('.sidebar > ul > li:eq('+index+')').addClass('current');

            $('.details li.current').slideUp().removeClass('current');
            var li = $('.details > ul > li:eq('+index+')');
            li.addClass('current').slideDown();
        }
        $(function(){
            var location = window.location.href;
            var index = 0;
            if(location.split('?').length > 1)
            {
                index = location.split('?')[1].replace("#","");
            }
            showIndex(index)

            $('.sidebar li a').click(function(){
               var index = $(this).parent().index();
                showIndex(index);
                
                return false;
            });
            $('.details a.register').click(function(){
                var index = $(this).parent().index();
                window.location = '/signup.php?'+index;

                return false;
            });
        });
    </script>
<div class="content-page">
<div id="wrap">
    <div id="content">
        <div class="sidebar">
            <h3 >НАШІ КУРСИ</h3>
            <ul>
<?php
global $post;
$args = array( 'posts_per_page' => 100, 'order'           => 'ASC');
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post); ?>
    <li><a href="<?php bloginfo(url) ?>/category/courses?0#" ><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
                
            </ul>
        </div>
        <div class="details">
            <ul>
                <?php query_posts('orderby=date&order=ASC'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <li>
            <?php the_post_thumbnail() ?>
                <h2 class="cours-name"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <h3>Команда</h3>
            <?php the_content(); ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>

            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>