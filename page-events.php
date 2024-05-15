<?php get_header() ?> 
<div class="container mt-5">
   
<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <?php  
       $info = get_field ('information'); 
    ?>
    <?php 
$ExpLoop = new WP_Query(array(
'post_type'=> 'event',
'posts_per_page' => -1
));
?>


<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <?php echo $info ?>
        </div>
        <?php wp_reset_postdata() ?>
<?php endwhile; ?>
    <?php endif; ?>
          
            <table class="table table-striped">
                
                <thead>
                    <tr>
                        <th>Date and time</th>
                        <th>Description</th>
                    </tr> 
                </thead>               
                <tbody>
                
                <div class="col-12 pt-3">
        <?php if($ExpLoop ->have_posts()): ?>
<?php while ($ExpLoop ->have_posts()): $ExpLoop ->the_post()?>
        <?php  
       $dt = get_field ('date_time');  
    ?>
    <table class="table table-striped">
                     <tr>                                 
                        <td>
                            
        <?php echo $dt ?></td>
                        <td><?php the_title(); ?></td>
                    </tr>
                     </table>
                </tbody>
                </thead>  
           
        </div>
    </div>
</div>

<?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer() ?>