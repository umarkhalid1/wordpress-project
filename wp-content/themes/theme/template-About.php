<?php

//Template Name:about us

get_header();
the_post();	

?>
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4"><?php the_title(); ?></h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
        <li class="breadcrumb-item text-dark" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>
</div>
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="<?php the_field('umar',9) ;?>" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"><?php the_field('p',9) ;?></small>
                <h1 class="display-5 mb-4"><?php the_field('h2',9) ;?></h1>
                <p class="mb-4"><?php the_field('text',9) ;?></p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?php the_field('b',9) ;?>
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>24/7 Customer Support
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Easy Customization Options
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Delicious Deals for Delicious Meals
                    </div>
                </div>
                <a href="<?php the_field('url1',9); ?>" class="btn btn-primary py-3 px-5 rounded-pill"><?php the_field('butt',9) ;?><i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Fact Start-->
<div class="container-fluid faqt py-6">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
               <div class="row g-4">
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-users fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up"><?php the_field('customers',9); ?></h1>
                            <p class="text-dark text-uppercase fw-bold mb-0"><?php the_field('name',9); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-users-cog fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up"><?php the_field('add-cheifs',9); ?></h1>
                            <p class="text-dark text-uppercase fw-bold mb-0"><?php the_field('cheif-name',9); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-check fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up"><?php the_field('add_events',9); ?></h1>
                            <p class="text-dark text-uppercase fw-bold mb-0"><?php the_field('event',9); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <div class="video">
                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->

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