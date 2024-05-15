<?php /* Template Name: Front Page */ ?>
<?php get_header() ?>

<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <?php  
       $hero = get_field ('hero-line');
       $info = get_field ('information');
       $img1 = get_field ('first_picture');
       $img2 = get_field ('second_picture');
       $img3 = get_field ('third_picture');
       $map = get_field ('map');
       $address = get_field ('address');
       $maplink = get_field ('google_maps_link');
    ?>

<div id="hero" class="px-4 py-5 text-center">
    <h1 class="display-5 fw-bold">Hotel CMS</h1>
        <div class="col-lg-6 mx-auto">
             <p class="lead mb-4"> <?php echo $hero?> </p>    
     </div>
   
        <div class="container">
    <div class="row">
        <div class="col-9 mb-5">
           <?php echo $info ?> 
    
            <div class="container-fluid p-0 pt-3">
                <div class="row">
                    <div class="col-4 p-0">
                        <img class="img-fluid" src= <?php echo esc_url($img1['url']); ?> alt="">
                    </div>
                    <div class="col-4 p-0">
                        <img class="img-fluid" src= <?php echo esc_url($img2['url']); ?> alt="">
                    </div>
                    <div class="col-4 p-0">
                        <img class="img-fluid" src= <?php echo esc_url($img3['url']); ?> alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src=<?php echo esc_url($map['url']); ?> class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hotel CMS</h5>
                    <p class="card-text">
                    <address>
                     <?php echo $address?> 
                    </address>
                    <a target="_blank" href="<?php echo $maplink ?>" class="btn btn-primary">Get driving directions</a>
                    </p>
                </div>
                </div>
            
        </div>
    </div>
</div>
</div>
        

        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer() ?>