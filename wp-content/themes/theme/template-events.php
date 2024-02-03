<?php
    // Template Name: events
    get_header();
    the_post();
    
?>

<!-- Events Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4"><?php the_title() ;?></h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>
</div>
<!-- Events Start -->
<div class="container-fluid event py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"><?php the_field('p_tag',13) ;?></small>
            <h1 class="display-5 mb-5"><?php the_field('heading',13) ;?></h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">All Events</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">Wedding</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark" style="width: 150px;">Corporate</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                        <span class="text-dark" style="width: 150px;">Cocktail</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                        <span class="text-dark" style="width: 150px;">Buffet</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                 <?php 
                                $gallery = get_terms(['taxonomy'=>'category','hide_empty'=>false,'orderby'=>'name','order'=>'DESC','number'=>8]); 
                                foreach ($gallery as $value) {
                                    $galleryimg = get_wp_term_image(
                                        $value->term_id);
                                 
                              ?>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                               
                                    <div class="event-img position-relative">
                                        <?php if ($galleryimg!="") {
                                            
                                         ?>
                                        <img class="img-fluid rounded w-100" src="<?php  print_r($galleryimg)?>" alt="">
                                    <?php }?>
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto"><?php echo $value->name; ?></h4>
                                           
                                            <a href="<?php  print_r($galleryimg)?>" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>

                                        </div>
                                    </div>
                                </div>

                              <?php }?> 
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Events End -->
<!-- Book Us Start -->
<div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-1">
                <img src="<?php bloginfo('template_directory') ?>/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
            </div>
            <div class="col-10">
                <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                    <div class="text-center">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                        <h1 class="display-5 mb-5">Where you want Our Services</h1>
                    </div>
                    <div class="row g-4 form">
                        <div class="col-lg-4 col-md-6">
                            <select class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Select Country</option>
                                <option value="1">USA</option>
                                <option value="2">UK</option>
                                <option value="3">India</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Select City</option>
                                <option value="1">Depend On Country</option>
                                <option value="2">UK</option>
                                <option value="3">India</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Select Palace</option>
                                <option value="1">Depend On Country</option>
                                <option value="2">UK</option>
                                <option value="3">India</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Small Event</option>
                                <option value="1">Event Type</option>
                                <option value="2">Big Event</option>
                                <option value="3">Small Event</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>No. Of Palace</option>
                                <option value="1">100-200</option>
                                <option value="2">300-400</option>
                                <option value="3">500-600</option>
                                <option value="4">700-800</option>
                                <option value="5">900-1000</option>
                                <option value="6">1000+</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Vegetarian</option>
                                <option value="1">Vegetarian</option>
                                <option value="2">Non Vegetarian</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No.">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="date" class="form-control border-primary p-2" placeholder="Select Date">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <img src="<?php bloginfo('template_directory');?>/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Book Us End -->

<?php
    get_footer();
?>