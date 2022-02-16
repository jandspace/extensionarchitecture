<?php
/**
 * Template Name:  Local Template Page
 */
?>
<?php get_header();?>


<div class="local-content">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <section class="fullwidth hero local-hero">
    <?php if(has_post_thumbnail()) { ?>
    <?php
      $thumb = get_post_thumbnail_id();
      $img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
      $image = aq_resize( $img_url, 1600, 800, true ); //resize & crop img
    ?>
    <div class="hero-item bg-fill clearfix" style="background-image:url('<?php echo $image ?>');">
    <?php } else { ?>
    <div class="hero-item bg-fill clearfix no-post-thumb">
    <?php } ?>
      <div class="hero-item-inner container">
        <div class="row">
          <div class="col-md-8 col-lg-6">
            <h1 class="local-title">
              <!-- <span class="pre-title">Planning and Architects in</span> --> <?php the_title(); ?>
            </h1>
            <h2 class="post-title">Find out more about planning applications and get a quote from an architect in <?php the_field( 'name_of_local_area' ); ?></h2>
            <a href="#EaQuoteForm" class="btn btn-oval smooth-scroll">Get a Free Quote</a>
            <span class="call">or call us on <a href="tel:0203 409 4215" class="phone-number">0203 409 4215</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-item fullwidth overview-info" id="Overview-info">
    <div class="section-inner container">
      <div class="section-body row">
        <div class="col-md-6">
          <h2 class="s-title">Planning Applications and Services by a Leading Architects in <?php the_field( 'name_of_local_area' ); ?></h2>
          <div class="intro-desc"><?php the_content(); ?></div>
          <div class="cta-container">
            <h3 class="title">Learn more about the work of our architects in <?php the_field( 'name_of_local_area' ); ?> and get a quote</h3>
            <p>
              <a href="#EaQuoteForm" class="btn btn-oval smooth-scroll">Get a Free Quote today</a>
              <span class="call">or Call us on <a href="tel:0203 409 4215" class="phone-number">0203 409 4215</a></span>
            </p>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="intro-summary">
            <h3 class="s-title">We only deliver excellence</h3>
            <div class="row">
              <?php if ( have_rows( 'project_overview' ) ) : ?>
	              <?php while ( have_rows( 'project_overview' ) ) : the_row(); ?>
                  <div class="col-6">
                    <div class="item-inner no-content">
                      <div class="no-ani">
                        <span class="number fig-number"><?php the_sub_field( 'no_local_project' ); ?></span><sup>+</sup>
                      </div>
                      <div class="no-desc">
                        Projects completed in <?php the_field( 'name_of_local_area' ); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="item-inner no-content">
                      <div class="no-ani">
                        <span class="number fig-number"><?php echo ls_content_block_by_slug( 'block-total-number-of-project-in-local-information' ); ?></span><sup>+</sup>
                      </div>
                      <div class="no-desc">
                        Our total projects completed in London & Surrey
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="council-summary clearfix">
            <div class="row">
              <?php if ( have_rows( 'council_info' ) ) : ?>
	              <?php while ( have_rows( 'council_info' ) ) : the_row(); ?>
                  <div class="col-4">
                    <div class="council-logo">
                      <?php $council_logo = get_sub_field( 'council_logo' ); ?>
                      <?php if ( $council_logo ) { ?>
                        <img src="<?php echo $council_logo['url']; ?>" alt="<?php echo $council_logo['alt']; ?>" class="logo-img" />
                      <?php } ?>
                      <!-- <img src="https://www.kingston.gov.uk/site/dist/images/site-logo.svg" class="logo-img" /> -->
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="desc">
                      <p>
                        <b><?php the_field( 'name_of_local_area' ); ?> council planning portal</b>
                        <a href="<?php the_sub_field( 'council_portal_link' ); ?>" target="_blank"><?php the_sub_field( 'council_portal_link' ); ?></a>
                      </p>
                      <p>
                        <b>Districts in <?php the_field( 'name_of_local_area' ); ?></b>
                        <span class="district-containter">
                          <?php if ( have_rows( 'council_town' ) ) : ?>
                            <?php while ( have_rows( 'council_town' ) ) : the_row(); ?>
                              <a href="<?php the_sub_field( 'town_link' ); ?>"><?php the_sub_field( 'town_name' ); ?></a>,
                            <?php endwhile; ?>
                          <?php else : ?>
                            <?php // no rows found ?>
                          <?php endif; ?>
                        </span>
                      </p>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section-item fullwidth portfolio" id="Portfolio">
    <div class="section-inner container">
      <div class="section-head">
        <h2 class="section-title">
          <span class="line-black">Our Selected project in <?php the_field( 'name_of_local_area' ); ?></span>
        </h2>
      </div>
      <div class="section-body">
        <div class="flex-container grid">

          <!-- Reusable Content: Case Study - 4 items -->
          <?php echo ls_content_block_by_slug( 'case-study-4-items' ); ?>
          
        </div>
      </div>
    </div>
  </section>

  <section class="section-item fullwidth bg-fill testimonial">
    <div class="section-item-inner container">
      
      <!-- Reusable Content: TESTIMONIALS -->
      <?php echo ls_content_block_by_slug( 'local-info-testimonials' ); ?>

    </div>
  </section>
  

  <section class="section-item fullwidth how-we-work" id="how-we-work">
    <div class="section-inner">
      <div class="section-body">
        <div class="flex-container">
          <?php if ( have_rows( 'how_we_work' ) ) : ?>
	          <?php while ( have_rows( 'how_we_work' ) ) : the_row(); ?>
              <div class="flex-item">
                <div class="section-bg">
                  <?php $how_image = get_sub_field( 'how_image' ); ?>
                  <?php if ( $how_image ) { ?>
                    <img src="<?php echo $how_image['url']; ?>" alt="<?php echo $how_image['alt']; ?>" />
                  <?php } ?>
                </div>
              </div>
              <div class="flex-item">
                <div class="item-inner how-we-work-desc">
                  <h2 class="section-title">
                    <span class="pre-title">How we work in this area</span>
                    <span class="title">Services by Our Architects in <?php the_field( 'name_of_local_area' ); ?></span>
                  </h2>
                  <div class="section-desc">
                    <?php the_sub_field( 'how_desc' ); ?>
                  </div>
                  <div class="cta-container">
                    <h3 class="title">Learn more about planning application of <?php the_field( 'name_of_local_area' ); ?> and get a quote</h3>
                    <p>
                      <a href="#EaQuoteForm" class="btn btn-oval smooth-scroll">Get a Free Quote today</a>
                      <span class="call">or call us on <a href="tel:0203 409 4215" class="phone-number">0203 409 4215</a></span>
                    </p>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="container extra-info">
          <?php the_field( 'extra_info' ); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section-item fullwidth services" id="Services">
    <div class="section-inner container">
      <div class="section-head">
        <h3 class="strapline">
          Our planning & architectural services in <?php the_field( 'name_of_local_area' ); ?>
        </h3>
        <h2 class="section-title">
          <span class="title-sm">We provide a full range of services in <?php the_field( 'name_of_local_area' ); ?></span>
        </h2>
      </div>

      <!-- Reusable Content: Service Range-->
      <?php echo ls_content_block_by_slug( 'local-info-service-range' ); ?>
      
    </div>
  </section>

  <section class="section-item fullwidth why-choose" id="Why-choose">
    <div class="container">

      <!-- Reusable Content: Why Choose Us?-->
      <?php echo ls_content_block_by_slug( 'local-info-why-choose-ea' ); ?>
      
    </div>
  </section>





  <!-- Section Item - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            FORM RECALL
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <section class="section-item fullwidth bg-fill form" id="EaQuoteForm">
    <div class="section-item-inner container">
      <div class="section-body">
        <div class="form-container">
          <script type="text/javascript" src="https://extensionarchitecture.formstack.com/forms/js.php/ea_get_a_quote?no_style_strict=1"></script><noscript><a href="https://extensionarchitecture.formstack.com/forms/ea_get_a_quote" title="Online Form">Online Form - EA - Get a Quote 2020</a></noscript>
        </div>
      </div>
    </div>
  </section>



  <!-- Section Item - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            WHY CHOOSE US
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <?php the_field( 'price_reusable_block' ); ?>


  

  <?php endwhile; ?>

  
  
</div>
<!--#content-->
<div style="clear:both"></div>
<script>
  $(".district-containter a").each(function() {
      var href = $(this).attr("href");
      if(href == '') { // or anything else you want to remove...
          $(this).replaceWith( "<span>" + $( this ).text() + "</span>" );
      }
  });
</script>
<?php get_footer();?>
