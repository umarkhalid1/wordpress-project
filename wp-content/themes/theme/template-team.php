<?php
    // Template Name: team
	get_header();
	the_post();
	
?>
<!-- Team Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4"><?php the_title() ;?></h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>
</div>
<!-- Team Start -->
<div class="container-fluid team py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"><?php the_field('page_title',189) ;?></small>
            <h1 class="display-5 mb-5"><?php the_field('page_heading',189) ;?></h1>
        </div>
        <div class="row g-4">
            <?php
                $wpmenu = array(
                 'post_type'=>'team',
                 'post_status'=>'publish'
                );
                $query = new WP_Query($wpmenu);
                  while($query->have_posts()) {
                     $query->the_post();
                     
                     $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id());

            ?>
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid rounded-top " src="<?php echo $imagepath[0];?>" alt="">
                    <div class="team-conent text-center py-3 bg-dark rounded-bottom">
                        <h4 class="text-primary"><?php the_title(); ?></h4>
                        <p class="text-white mb-0"><?php the_excerpt() ;?></p>
                    </div>
                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Team End -->
<?php
	get_footer();
?>