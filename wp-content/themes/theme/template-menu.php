<?php
    // Template Name: menu
    get_header();
    the_post();
    
?>
<!-- Menu Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4"><?php the_title() ;?></h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>
</div>
<div class="container-fluid menu bg-light py-6 my-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"><?php the_field('our_service',15) ;?></small>
            <h1 class="display-5 mb-5"><?php the_field('label',15) ;?></h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active" data-bs-toggle="pill" href="#tab-6">
                        <span class="text-dark" style="width: 150px;">Starter</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-7">
                        <span class="text-dark" style="width: 150px;">Main Course</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-8">
                        <span class="text-dark" style="width: 150px;">Drinks</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-9">
                        <span class="text-dark" style="width: 150px;">Offers</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-10">
                        <span class="text-dark" style="width: 150px;">Our Spesial</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                            $wpmenu = array(
                             'post_type'=>'our-menu',
                             'post_status'=>'publish'
                            );
                            $query = new WP_Query($wpmenu);
                              while($query->have_posts()) {
                                 $query->the_post();
                                 $idpath = wp_get_attachment_image_src(get_post_thumbnail_id()) ;

                        ?>
                        <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                            <div class="menu-item d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="<?php echo $idpath[0] ;?>" alt="">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                        <h4><?php the_title(); ?></h4>
                                        <h4 class="text-primary"><?php the_excerpt(); ?></h4>
                                    </div>
                                    <p class="mb-0"><?php the_field('add_description',173) ;?></p>
                                </div>
                            </div>
                        </div>
                      <?php }  ?>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->
<?php
	get_footer();
?>