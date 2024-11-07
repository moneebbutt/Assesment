
<body>


<?php get_header();?>


<section id="blog" class="container">
    <div>
        <form id="category-filter-form" method="get">
        
            <label for="category-filter">Select Category:</label>
            <select id="category-filter" name="category-filter">
            <option value="">select Category</option>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<option value="' . $category->slug . '">' . $category->name . '</option>';
                }
                ?>
            </select>

            <!-- Add the taxonomy filter -->
            <!-- <label for="taxonomy-filter">Select Taxonomy:</label> -->
            <select id="taxonomy-filter" name="taxonomy-filter">
                <option value="">By Name</option>
                <?php
                $taxonomy = 'item-1'; // Replace with your actual taxonomy name
                $terms = get_terms($taxonomy);
                foreach ($terms as $term) {
                    echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
                }
                ?>
            </select>

            <input type="submit" value="Filter">
        </form>

        <?php
        $args = array(
            'post_type' => 'post',
            'paged' => 1
        );

        // Add the taxonomy filter
        if (isset($_GET['taxonomy-filter']) && !empty($_GET['taxonomy-filter'])) {
            $taxonomy_slug = sanitize_text_field($_GET['taxonomy-filter']);
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'item-1', // Replace with your actual taxonomy name
                    'field' => 'slug',
                    'terms' => $taxonomy_slug,
                ),
            );
        }

        if (isset($_GET['category-filter']) && !empty($_GET['category-filter'])) {
            $category_slug = sanitize_text_field($_GET['category-filter']);
            $args['category_name'] = $category_slug;
        }

        $the_query = new WP_Query($args);
        echo '<div class="row" id="container">';

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <div class="col-md-6">
                    <div>
                        <h3><?php the_title(); ?> </h3>
                        <p><?php the_excerpt(); ?> </p>
                    </div>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                </div>
                <?php
            }

            echo '</div>';

            // Check if there are more posts to display
            if ($the_query->max_num_pages > 1) {
                ?>
                <div class="btn3">
                    <button id="load_more">Load More</button>
                </div>
                <?php
            } else {
                // No more posts to load
                echo '<br><h3>No more posts</h3>';
                ?>
                <style>
                    .btn3 {
                        display: none;
                    }
                </style>
                <?php
            }
        } else {
            // No posts found
        }

        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
    </div>
</section>

<section>

</section>

<?php get_footer();?>

    
