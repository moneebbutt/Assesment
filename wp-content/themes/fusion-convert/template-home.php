 <!-- ?php echo get_template_directory_uri(); --> 
<!-- bloginfo('template_directory')?> -->
<?php
//Template Name:home
    get_header();
    the_field('team-image,131');
    ?>
    

    <!-- Menu Section Strar -->
   

    <!--Hero Section Strar -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero">
                <div class="row">
                      <?php 
                      
                        $args = array(  
                            'post_type' => 'hero',
                            'post_status' => 'publish',
                            'posts_per_page' => -1, 
                            'orderby' => 'title', 
                            'order' => 'DESC', 
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                      
                     <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="box-11">
                        <h1><?php echo the_title();?></h1>
                        <p><?php echo the_excerpt();?> </p>
                        <a href="" class="btn-2">DOWNLOAD NOW</a>
                        <a href="" class="btn"> LEARN MORE </a>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">

                    <?php echo the_post_thumbnail();?>
                </div>
            </div>
        </div>
        <?php
                             
                            
                             $imagepath=
                             wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                         endwhile;
                     
                         wp_reset_postdata(); 
                      
                     ?> 


    </section>
    <!--Services Section Strar -->
    <section id="Services" class="section">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-center">Our Services <div class="line-1"></div>
                </h2>

                 <div class="row"> 
                    <?php 
                        $args = array(  
                            'post_type' => 'services',
                            'post_status' => 'publish',
                            'posts_per_page' => -1, 
                            'orderby' => 'title', 
                            'order' => 'DESC', 
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
 
                    <div class="col-md-6 col-sm-6 col-lg-4 ">
                        <div class="item-1 services-card wow animate__animated animate__fadeInRight "data-wow-delay="0.3s">
                        <i class="bi <?php echo get_field('icon');?>" width="10px" height="10px"></i>
                            <h3><?php echo the_title();?> </h3>
                            <p><?php echo the_excerpt();?> </p>
                        </div>
                    </div>
                    <?php
                             
                            
                            $imagepath=
                            wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                        endwhile;
                    
                        wp_reset_postdata(); 
                    ?> 
                    
 <!--                   <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="item-2 services-card  wow animate__animated animate__fadeInRight "data-wow-delay="0.6s">
                            <i class="bi bi-graph-up"></i>
                            <h3>AWESOME DESIGN</h3>
                            <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum
                                gravida.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 ">
                        <div class="item-3 services-card wow animate__animated animate__fadeInRight"data-wow-delay="0.9s">
                            <i class="bi bi-people"></i>
                            <h3>EASY TO CUSTOMIZE</h3>
                            <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum
                                gravida.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="item-4 services-card wow animate__animated animate__fadeInRight"data-wow-delay="1.2s">
                            <i class="bi bi-stack"></i>
                            <h3>UI/UX DESIGN</h3>
                            <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum
                                gravida.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="item-5 services-card wow animate__animated animate__fadeInRight"data-wow-delay="1.5s">
                            <i class="bi bi-phone"></i>
                            <h3>APP DEVELOPMENT</h3>
                            <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum
                                gravida.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="item-6 services-card wow animate__animated animate__fadeInRight"data-wow-delay="1.8s">
                            <i class="bi bi-emoji-heart-eyes"></i>
                            <h3>USER FRIENDLY INTERFACE</h3>
                            <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum
                                gravida.</p>
                        </div>
                    </div>-->
                    
                </div>
            </div>
    </section>
    <!-- About Section Strar -->
    <section class="About Area">
        <div class="container">
            <div class="row">
            <?php 
                        $args = array(  
                            'post_type' => 'about-section',
                            'post_status' => 'publish',
                            'posts_per_page' => -1, 
                            'orderby' => 'title', 
                            'order' => 'ASC', 
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-md-6 item-4 wow animate__animated animate__fadeInLeft"data-wow-delay="0.3s">
                    <div class="site heading">
                        <p>Manage Statistics</p>
                        <h2><?php echo the_title();?>  </h2>
                        <div class="content-2">
                            <p><?php echo the_excerpt();?></p>
                        </div>
                            <a href="" class="btn-2">Read More</a>
                        
                    </div>
                </div>
                <div class="col-md-6 item-5 wow animate__animated animate__fadeInRight "data-wow-delay="0.3s">
                <?php echo the_post_thumbnail();?>
                <!-- <img class="mw-100" src="" alt="">  -->
                   
                   
                   <?php
                             
                            
                             $imagepath=
                             wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                         endwhile;
                     
                         wp_reset_postdata(); 
                     ?> 
                </div> 
            </div>
        </div>
    </section>
    <!-- feature section start -->
    <section id="feature" class="section-padding">
        <div class="container">
            <h2 class=" wow animate__animated animate__fadeInDown text-center"data-wow-delay="0.3s">Awesome Features<div class="line-1"></div>
            </h2>
            <div class="row">          
                <div class="col-md-12 col-lg-4 col-12 item-6">
                    <div class="content-left">
                        <div class="box-item-1 wow  animate__animated animate__fadeInLeft"data-wow-delay="0.3s">
                        <?php 
                        $args = array(  
                            'post_type' => 'feature-left',
                            'post_status' => 'publish',
                            'posts_per_page' => 3, 
                            'orderby' => 'title', 
                            'order' => 'ASC', 
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="row">
                            
                                <div class="col-9">
                                    <h4><?php echo the_title();?> </h4>
                                    <p><?php echo the_excerpt();?></p>
                                </div>
                                <div class="col-3 services-card-1">
                                <i class="bi <?php echo get_field('icon');?>" width="10px" height="10px"></i>
                                </div>
                            </div>
                                <?php
                             
                            
                                    $imagepath=
                                    wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                                    endwhile;
                     
                                    wp_reset_postdata(); 
                                ?> 

                              
                             <!--<div class="row">
                                
                                <div class="col-9 wow  animate__animated animate__fadeInLeft"data-wow-delay="0.6s">
                                    <h4>Fully Responsive</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <div class="col-3 services-card-2">
                                    <i class="bi bi-laptop"></i>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-9 wow  animate__animated animate__fadeInLeft"data-wow-delay="0.9s">
                                    <h4>HTML5, CSS3 & SASS</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <div class="col-3 services-card-3">
                                    <i class="bi bi-gear"></i>
                                </div>

                            </div>-->

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-12 item-7 wow  animate__animated animate__fadeInUp"data-wow-delay="0.3s">
                  <img class="mw-100" src="<?php bloginfo('template_directory')?>/assets/images/intro-mobile (2).png" alt="">
                </div>
                <div class="col-md-12 col-lg-4 col-12 item-8">
                    <div class="content-right">
                        <div class="box-item-2">
                        <?php 
                                    $args = array(  
                                    'post_type' => 'feature-right',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3, 
                                    'orderby' => 'title', 
                                    'order' => 'ASC', 
                                    );
                                    $loop = new WP_Query( $args );                        
                                    while ( $loop->have_posts() ) : $loop->the_post(); 
                                ?>
                            <div class="row">
                               
                                <div class="col-3 services-card-1">
                                <i class="bi <?php echo get_field('icon');?>" width="10px" height="10px"></i> </div>
                                <div class="col-9 wow  animate__animated animate__fadeInRight"data-wow-delay="0.3s">
                                    <h4><?php echo the_title();?> </h4>
                                    <p><?php echo the_excerpt();?></p>
                                </div>
                            </div>
                                    
                                <?php
                                    $imagepath=
                                    wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                                    endwhile;
                            
                                    wp_reset_postdata(); 
                                ?> 
                                    
                            <!--<div class="row">
                                <div class="col-3 services-card-2">
                                    <i class="bi bi-stack"></i>
                                </div>
                                <div class="col-9 wow  animate__animated animate__fadeInRight"data-wow-delay="0.6s">
                                    <h4>Multi-purpose Template</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 services-card-3">
                                    <i class="bi bi-textarea-resize"></i>
                                </div>
                                <div class="col-9 wow  animate__animated animate__fadeInRight"data-wow-delay="0.9s">
                                    <h4>Working Contact Form</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div>
            </div>

        </div> 

        
        
    </section>
    <!-- team section strat -->
    <section id="team" class="section">
        <div class="container">
            <h2 class="  wow animate__animated animate__fadeInDown text-center"data-wow-delay="0.6s">Meet our team
                <div class="line"></div>
            </h2>

            <div class="row mb-2">
             <?php 
                $args = array(  
                'post_type' => 'team',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'title', 
                'order' => 'ASC', 
                );
                $loop = new WP_Query( $args );                        
                while ( $loop->have_posts() ) : $loop->the_post(); 
              ?>

                <div class="col-lg-6 col-md-12 col-12 item-9 mb-2 wow  animate__animated animate__fadeInRight"data-wow-delay="0.2s">
                
                <div class="row-card1" style="display: flex;">
                        <div class="col-4" style="display: block ;">
                            <?php echo get_the_post_thumbnail();?>

                        </div>
                        <div class="col-8 ">
                            <h4><?php echo the_title();?> </h4>
                            <p>Front-end Developer</p>
                            <div><p><?php echo the_excerpt();?></p>
                                  
                                <div>
                                    
                                    <ul class="social-icon-1">
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                               <?php
                                    $imagepath=
                                    wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                                    endwhile;
                            
                                    wp_reset_postdata(); 
                                ?> 
              <div class="col-lg-6 col-md-12 col-12  item-10 wow  animate__animated animate__fadeInRight"data-wow-delay="0.4s">
                      <!--<div class="row-card1" style="display: flex;">
                        <div class="col-4" style="display: block ;">
                            <img src="https://preview.uideck.com/items/fusion/assets/img/team/team-02.png" alt=""
                            class="mx-100 w-100">

                        </div>
                        <div class="col-8 ">
                            <h3>ERIC PETERSON</h3>
                            <p>Product Designer</p>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
                                    tenetur.</p>
                                <div>
                                    <ul class="social-icon-1">
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
              </div>-->
               <!--<div class="row">
                <div class="col-lg-6 col-md-12 col-12  item-11 mb-2 wow  animate__animated animate__fadeInRight"data-wow-delay="0.6s">
                    <div class="row-card1" style="display: flex;">
                        <div class="col-4" style="display: block ;">
                            <img src="https://preview.uideck.com/items/fusion/assets/img/team/team-03.png" alt=""
                            class="mx-100 w-100">

                        </div>
                        <div class="col-8 ">
                            <h3>DURWIN BABB</h3>
                            <p>Lead Designer</p>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
                                    tenetur.</p>
                                <div>
                                    <ul class="social-icon-1">
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12  item-12 wow  animate__animated animate__fadeInRight"data-wow-delay="0.6s">
                    <div class="row-card1" style="display: flex;">
                        <div class="col-4" style="display: block ;">
                            <img src="https://preview.uideck.com/items/fusion/assets/img/team/team-04.png" alt=""
                            class="mx-100 w-100">

                        </div>
                        <div class="col-8 ">
                            <h3>MARIJN OTTE</h3>
                            <p>Lead Designer</p>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
                                    tenetur.</p>
                                <div>
                                    <ul class="social-icon-1">
                                            <a href="#" class="fa fa-facebook"></a>
                                            <a href="#" class="fa fa-twitter"></a>
                                            <a href="#" class="fa fa-instagram"></a>
                                        </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>-->
            </div>

        </div>

    </section>
    <!-- pricing section strat -->
    <section id="pricing-section">  
        <div id="pricing" class="section-1">
            <div class="container">
                <div class="section-header text-center wow  animate__animated animate__fadeInDown "data-wow-delay="0.6s">
                    <h2>Pricing</h2>
                    <div class="line"></div>
                    <div class="row">
                    <?php 
                                    $args = array(  
                                    'post_type' => 'pricing',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1, 
                                    'orderby' => 'title', 
                                    'order' => 'DSC', 
                                    );
                                    $loop = new WP_Query( $args );                        
                                    while ( $loop->have_posts() ) : $loop->the_post(); 
                                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 wow  animate__animated animate__fadeInLeft "data-wow-delay="1.2s">
                            <div class="item-13">
                            <div class="icon-box">
                            <i class="bi <?php echo get_field('icon');?>" width="10px" height="10px"></i>
                            </div>
                            <div class="pricing-header">
                            <p class="price-value">
                            <?php echo get_field('pricing');?>
                            <span> /mo</span>
                                </p>
                                <div class="title">
                                    <h3><?php echo the_title();?></h3>
                                    <ul class="discription">
                                        <li><?php echo get_field('pricing-user');?> </li>
                                        <li> <?php echo get_field('Pricing-gb');?> </li>
                                        <li><?php echo get_field('pricing-support');?> </li>
                                        <li><?php echo get_field('lifetime');?> </li>
                                    </ul>
                                    <a href="" class="btn-2">Buy Now</a>

                                </div>
                            </div>
                        </div>
                        </div>
                        <?php
                                    endwhile;
                                    wp_reset_postdata(); 
                                ?> 

                          <!--<div class="col-lg-4 col-md-6 col-sm-12  center-card-pricing wow  animate__animated animate__fadeInUp"data-wow-delay="1.2s">
                            <div class="item-13">
                            <div class="icon-box">
                                <i class="bi bi-droplet"></i>
                            </div>
                            <div class="pricing-header">
                                <p class="price-value">
                                    $35
                                    <span> /mo</span>
                                </p>
                                <div class="title">
                                    <h3>Plus</h3>
                                    <ul class="discription">
                                        <li></li>
                                        <li> 30 GB strorge</li>
                                        <li>Priority email support</li>
                                        <li>Lifetime update</li>
                                    </ul>
                                    <a href="" class="btn-2">Buy Now</a>

                                </div>
                               
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 wow animate__animated animate__fadeInRight"data-wow-delay="1.2s">
                                <div class="item-13">
                            <div class="icon-box">
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="pricing-header">
                                <p class="price-value">
                                    $150
                                    <span> /mo</span>
                                  </p>
                                <div class="title">
                                    <h3>PREMIUM</h3>
                                    <ul class="discription">
                                        <li>Unlimited users</li>
                                        <li> Unlimited strorge</li>
                                        <li>24/7 support</li>
                                        <li>Lifetime update</li>
                                    </ul>
                                    <a href="" class="btn-2">Buy Now</a>

                                </div>
                            
                            </div>
                        </div>-->
                    </div>
                </div>

                </div>

            </div>
        </div>
    </section>
    <!-- testimonial section start -->
    <div id="testimonial" class="testimonial-section ">
        <div class="container">
          <div class="row justify-content-center wow  animate__animated animate__fadeInUp"data-wow-delay="0.6s">
             <div class="owl-carousel owl-theme">
                 <?php 
                    $args = array(  
                    'post_type' => ' testimonial',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                    'orderby' => 'title', 
                    'order' => 'DSE', 
                    );
                    $loop = new WP_Query( $args );  

                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="item">  
                        <div class="carousel-img">
                            <?php echo get_the_post_thumbnail();?>
                        </div>
                        <h2><?php echo the_title();?></h2>
                        <h3><?php echo get_field('sub-heading');?></h3>
                        <p><?php echo the_excerpt();?></p>
                    </div> 

                    <?php 
                    endwhile;
                    wp_reset_postdata(); 
                    ?> 

                
               </div>
            </div>
        </div>
    </div>
    <!-- call to action section start -->
    <div id="cta" class="section-padding">
        <div class="container">
            <section>
                <div class="row">
                <?php 
                    $args = array(  
                    'post_type' => ' call',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                    'orderby' => 'title', 
                    'order' => 'DSE', 
                    );
                    $loop = new WP_Query( $args );  

                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-md-6 col-lg-6 wow  cta-text animate__animated animate__fadeInLeft"data-wow-delay="0.3s">
                        <h3><?php echo the_title();?></h3>
                        <p><?php echo the_excerpt();?></p>
                    </div>
                    <div class="col-md-6 col-lg-6 button wow  animate__animated animate__fadeInRight"data-wow-delay="0.3s">
                        <button class="btn-2">Register now</button>
                    </div>
                </div>
                <?php 
                    endwhile;
                    wp_reset_postdata(); 
                    ?> 




            </section>

        </div>
    </div>
    <!-- contact section start -->
    <div id="contact" class="section-contact">
        <div class="container">
            <div class="section-header-1 text-center wow  animate__animated animate__fadeInDown"data-wow-delay="0.6 s">
                <h2>Contact Us</h2>
                <div class="line-1"></div>
                <div class="row contact-form">
               

                    <div class="col-lg-7 col-md-12 col-sm-12 wow animate__animated animate__fadeInUp"data-wow-delay="0.3s">
                        <div class="contact-block">
                            
                                    <?php echo do_shortcode('[contact-form-7 id="c2532a4" title="contact-item"]');?> 
                        </div>

                        </div>
                     <div class="col-lg-5 col-md-12 col-sm-12 wow animate__animated animate__fadeInUp"data-wow-delay="0.3s">
                         <div class="map"><?php echo get_field('map-link');?>   
                             <!--<object style="border:0; height: 280px; width: 100%;"
                                data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>-->
                         </div>
                    </div>
                     
                </div>

            </div>
        </div>
    </div>
    <!-- Footer section start -->
    <?php
    get_footer();
    ?>