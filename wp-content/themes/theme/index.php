<?php 
    get_header();
?>
<!-- Hero Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Blog</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href=<?php echo site_url();?>>Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Blog</li>
        </ol>
    </div>
</div>
<!-- Hero End -->
<!-- Blog Start -->
<div class="container-fluid blog py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Blog</small>
            <h1 class="display-5 mb-5"><?php the_field('heading',238);?></h1>
        </div>
        <div class="row gx-4 justify-content-center">
            <?php
              while (have_posts()) {
              the_post();
              $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id());
            ?>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                
                <div class="blog-item">
                    <div class="overflow-hidden rounded">
                        <img src="<?php echo $imagepath[0] ;?>" class="img-fluid w-100" alt="">
                    </div>
                    <div class="blog-content mx-4 d-flex rounded bg-light">
                        <div class="text-dark bg-primary rounded-start">
                            <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                <p class="fw-bold mb-0">16</p>
                                <p class="fw-bold mb-0">Sep</p>
                            </div>
                        </div>
                        <a href="#" class="h5 lh-base my-auto h-100 p-3"><?php the_title() ;?></a>
                    </div>
                </div>
                
            </div>
            <?php } ?>
        </div>
    </div>
</div>
        <!-- Blog End -->
<?php 
    get_footer();
?>