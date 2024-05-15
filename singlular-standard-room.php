<?php get_header() ?> 
<div class="container mt-5">
   
<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <?php  
       $des = get_field ('description');
       $price = get_field ('price');
       $beds = get_field ('beds');
       $size = get_field ('size');
       $pic1 = get_field ('primary_picture');
       $pic2 = get_field ('secondary_picture');
    ?>

        <div class="col-3">
            <div class="card border-info mb-3">
                <div class="card-header">Room information</div>
                <div class="card-body">
                    <dl class="row m-0 p-0">
                        <dt class="col-12">Price per night</dt>
                        <dd class="col-12"><?php echo $price ?> DKK</dd>

                        <dt class="col-12">Number of beds</dt>
                        <dd class="col-12"><?php echo $beds?></dd>

                        <dt class="col-12">Size</dt>
                        <dd class="col-12"><?php echo $size?> m2</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <h1><?php the_title(); ?></h1>
            <p> <?php echo $des ?> </p>
        </div>
        <div class="col-9">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src=<?php echo esc_url($pic1['url']); ?> class="w-100" alt="Picture of room">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src=<?php echo esc_url($pic2['url']); ?> class="w-100" alt="Picture of room">
                    </div>
                </div>
            </div>
        </div>
</div>

<?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer() ?>