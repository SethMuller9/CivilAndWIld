<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package relia
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        
        <?php $front = get_option('show_on_front'); ?>
        
        <?php if ( $front != 'posts' ) : 
            do_action( 'relia_jumbotron' );
            do_action( 'relia_homepage' ); 
        else :
             do_action( 'relia_jumbotron' );
        endif; ?>
        
            <div class="container front-page-content">

                <div class="top row">
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <div class="col-sm-7">
                        <h2>INSPIRED BY NATURE</h2>
                        <p>May I introduce you to Civil & Wild Designs, LLC., located in the hills above Boulder, CO. What ties this business together is the fundamental drive to experience and incorporate nature in our ever-complicating, digital lives. Whether that means bringing it inside through our furnishings and decor, or getting outside on a pair of tailored skis, its up to you!  
                        <br>
                        <br>
                        These designs suggest a balance between the natural world and our civil one by leveraging natural shapes and materials, and combining them with modern building materials.
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/productimages/Framed-Aspen-3.jpg" alt="">
                    </div>

                </div> <!-- row -->
                <br><br><br><br><br><br><br><br><br><br>
                <br><br>
                <div class="mid row">


                    <div class="col-sm-6">
                        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ProductImages/MorningTable.jpg" alt=""/>
                    </div>
                    <div class="col-sm-6">
                        <h2>CRAFTED WITH CARE</h2>
                        <p>Each comission is carefully handmade to the client's exact specs. We wish to provide you with timeless heirlooms that are each durable, functional, sustainably sourced, and simply elegant. 
                        <br>
                        </p>
                    </div>

                </div> <!-- row -->  
                <br><br><br><br> <br><br><br><br> 
                <a href="/contact" class="center-block text-center cbtn">CONTACT</a>
                <br><br><br><br><br><br><br><br><br> 
            </div><!-- container-fluid -->    
            
            
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>      