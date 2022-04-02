<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
  *  @package WordPress
 * @subpackage MT6303 Assignment
 * @since MT6303 Assignment
 */

?>
<!-- <?php //echo get_the_ID(); ?>
<div class="white-text-container background-image-container" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/<?php //echo get_the_ID(); ?>-home.jpg')">
    <div class="opacity"></div>
    <div class="container">
           </div>

        </div>
   
        <div class="row">
        <div class="row"> -->
           
           <!-- <div class="col-md-6">
               <h1><?php //echo get_the_title();?></h1>
             
          <div class="entry-content-page tm-mb-6">
            <?php // the_content(); ?>

          </div>
          </div> -->
<!-- </div> -->
<div class="section-container no-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/contact.jpg">
            </div>
            <div class="col-xs-12">

                <div class="row">
                    <div class="col-md-6">
                        <form action="" class="reveal-content contact-form">
                            <div class="form-group">
                                <input type="name" class="form-control" id="name" placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Send</button>
                        </form>
                    </div>


                    <div class="col-md-5 col-md-offset-1">
                            
                        <h3>Head Office</h3>
                        
                        <div>
                            <p>1385 Woodroffe Ave<br/>Nepean, ON K2G</p>
                        </div>
                        <div>
                          <p>contact@mybusiness.com<br>+331 45 31 64 32</p>
                        </div>

                        <div class="mapouter">
                          <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                              src="https://maps.google.com/maps?q=Algonquin%20college%20Campus&t=&z=13&ie=UTF8&iwloc=&output=embed"
                              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                            <style>
                              .mapouter {
                                position: relative;
                                text-align: right;
                                height: 300px;
                                width: 100%;
                              }
                              .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 300px;
                                width: 100%;
                              }
                            </style>
                          </div>
                        </div>
                    
                        <div>
                            <h3>Employment</h3>
                        </div>
                        <div>
                            <p>To apply for a job with our team, please feel free to send us your Linkedin profile link
                                ou CV to : employment@mybusiness.com</p>
                        </div>
                       
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>

             

