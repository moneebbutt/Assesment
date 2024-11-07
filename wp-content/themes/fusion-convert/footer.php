
<div id="footer" class="footer-area">
        <div class="container">
            <div class="row">
                <div class=" col-lg-3 col-md-6 col-sm-6 col-12">


                   <?php if (is_active_sidebar('footer_colum_1')) : ?>
                   <div class="footer-widget-area">
                    <ul>

                        <?php dynamic_sidebar('footer_colum_1'); ?>
                    </ul>
                   </div>
                   <?php endif; ?>


                    <!--<div class="widget">
                        <h3 class="footer-logo">
                            <img src="https://preview.uideck.com/items/fusion/assets/img/logo.png" alt="">
                        </h3>
                        <div class="textwidget">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, dolores magni tenetur
                                beatae corrupti</p>
                        </div>
                        <div class="social-icon">
                            <a class="facebook" href="#">
                                <i class="bi bi-facebook"></i>
                                <a class="twitter" href="#">
                                    <i class="bi bi-twitter"></i>
                                    <a class="instagram" href="#"><i class="bi bi-instagram"></i></a>
                                    <a class="linkedin" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>-->
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6 col-12">
                  <?php if (is_active_sidebar('footer_colum_2')) : ?>
                  <div class="footer-widget-area">
                  <ul>
                   <?php dynamic_sidebar('footer_colum_2'); ?>
                   </ul>
                   </div>
                   <?php endif; ?>

                   <!-- <h3 class="footer-titel">Products</h3>
                    <ul class="footer-link">
                        <li><a href="#">Tracking</a></li>
                        <li><a href="#">Application</a></li>
                        <li><a href="#">Resource Planning</a></li>
                        <li><a href="#">Enterprise</a></li>
                        <li><a href="#">Employee Management</a></li>
                    </ul>-->
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6 col-12">
                <?php if (is_active_sidebar('footer_colum_3')) : ?>
                  <div class="footer-widget-area">
                  <ul>
                      <?php dynamic_sidebar('footer_colum_3'); ?>
                       </ul>
                   </div>
                   <?php endif; ?>
                    
                    <!-- <h3 class="footer-titel">Resources</h3>
                    <ul class="footer-link">
                        <li><a href="#">Payment Options</a></li>
                        <li><a href="#">Fee Schedule</a></li>
                        <li><a href="#">Getting Started</a></li>
                        <li><a href="#">Identity Verification</a></li>
                        <li><a href="#">Card Verification</a></li>
                    </ul>-->
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6 col-12">
                <?php if (is_active_sidebar('footer_colum_4')) : ?>
                  <div class="footer-widget-area">
                  <ul>
                      <?php dynamic_sidebar('footer_colum_4'); ?>
                       </ul>
                   </div>
                   <?php endif; ?>
                   <!-- <h3 class="footer-titel">Contact</h3>
                    <ul class="address">
                        <li>
                            <a href="#"><i class="bi bi-geo-alt"></i> 105 Madison Avenue - <br> Third Floor New York, NY
                                10016</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-telephone-plus"></i> P: +84 846 250 592</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-envelope-fill"></i> E: contact@uideck.com</a>
                        </li>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="copyright-1"></div>
            <div class="row">
                <div class="col-12">
                    <div class="copyright-cotent">
                        <p>Designed and Developed by<a rel="nofollow" href="https://uideck.com">UIdeck</a></p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <a href="#" class="back-to-top" style="display: inline;">
        <i class="bi bi-arrow-up-short"></i>
        </a>

        <script>
            const navbar = document.querySelector('#menu');
            let isNavbarShadowVisible = false;
        
            window.onscroll = function() {
                const scrollY = window.scrollY;
        
                if (scrollY > 10 && !isNavbarShadowVisible) {
                    navbar.classList.add('navbar-shadow');
                    isNavbarShadowVisible = true;
                } else if (scrollY <= 10 && isNavbarShadowVisible) {
                    navbar.classList.remove('navbar-shadow');
                    isNavbarShadowVisible = false;
                }
            };
        
           
        
        


        var loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        }); 
        </Script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script type="text/javascript">
        new WOW().init();
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })



     jQuery(document).ready(function($) {

		var page_count = '<?php echo ceil(wp_count_posts('post')->publish / 2); ?>';

		

		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		var page = 2;


		jQuery('#load_more').click(function(){		

		var data = {
			'action': 'my_action',
			'page': page
		};

		
		jQuery.post(ajaxurl, data, function(response) {
			jQuery('#container').append(response);

			if(page_count == page){

				jQuery('#load_more').hide();

			}

			page = page + 1;
		});

	});






    $("#category-filter-form").submit(function(event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        var selectedCategory = $("#category-filter").val();
        var selectedTaxonomy = $("#taxonomy-filter").val();
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

        $.ajax({
            url: ajaxurl, // Use the correct URL for your WordPress installation
            type: 'POST',
            data: {
                action: 'process_form', // This is the action name for your PHP function
                category: selectedCategory,
                taxonomy: selectedTaxonomy
            },
            success: function(response) {


                
                if (response.success) {
                    var posts = response.data; // Get the array of post data

                    var container = $("#container");

                    // Clear the container before adding new content
                    container.empty();

                    // Iterate through the posts and add them to the container
                    for (var i = 0; i < posts.length; i++) {
                        var post = posts[i];
                        var html = '<div class="col-md-6">';
                        html += '<div>';
                        html += '<h3>' + post.title + '</h3>';
                        html += '<p>' + post.excerpt + '</p>';
                        html += '</div>';
                        html += '<img src="' + post.thumbnail + '">';
                        html += '</div>';
                        container.append(html);
                    }
                } else {
                    console.error("Error in response:", response.data);
                }



            },
            error: function(xhr, status, error) {
                console.error("AJAX request failed:", status, error);
            }
        });

    });



	});
   

    </script>
</body>
