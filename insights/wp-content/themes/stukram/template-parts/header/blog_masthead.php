	<?php if(get_post_meta($post->ID,'rnr_blog_post_header_color_scheme',true)=='st2'){ ?>
		<?php $stukram_blog_post_header_color_scheme = 'white';?>
		<?php $stukram_blog_post_header_color_scheme2 = 'light';?>		
	<?php } else { ?>
		<?php $stukram_blog_post_header_color_scheme = 'black';?>
		<?php $stukram_blog_post_header_color_scheme2 = 'dark';?>
	<?php } ?>	
	<?php if(get_post_meta($post->ID,'rnr_blog_post_header_shape_scheme',true)=='st2'){ ?>
		<?php $stukram_blog_post_header_shape_scheme = 'black';?>
		<?php $stukram_blog_post_header_shape_scheme2 = 'dark';?>
	<?php } else { ?>
		<?php $stukram_blog_post_header_shape_scheme = 'white';?>
		<?php $stukram_blog_post_header_shape_scheme2 = 'light';?>
	<?php } ?>	    	

    <!-- section start -->	  	  
	<section class="masthead -blog js-masthead-blog-article" data-parallax="1.5">
		<!-- shapes start -->
		<?php if(get_post_meta($post->ID,'rnr_blog_post_header_bg_img_opt',true)!='no'){ ?>
		
			<div class="masthead__img overlay-<?php echo sanitize_html_class($stukram_blog_post_header_shape_scheme);?>-md" data-parallax-target data-parallax="1.5" style="display:none;">
				<?php if (has_post_thumbnail( $post->ID ) ):
				$stukram_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
				endif;
				?>
				<?php $stukram_back_image = rwmb_meta( 'rnr_blog_post_header_bg_img','type=image&size=' ); ?>
				<?php if ( ! empty( $stukram_back_image ) ) { ?>
				    <?php foreach ( $stukram_back_image as $stukram_back_images ){ ?>
				    <div class="bg-image js-lazy" data-bg="<?php echo esc_url(($stukram_back_images['url']));?>"></div>				
				    <?php } ;?>
				<?php } else { ?>
				    <div class="bg-image js-lazy" data-bg="<?php echo esc_url($stukram_image[0]);?>"></div>
				<?php } ;?>			
			</div>				
		<?php } ?>
		<!-- shapes end -->		

		<!-- masthead__content start -->
        <div class="masthead__content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10">
                        <div class="d-flex align-items-center custom-color">

							<?php if( has_category() ) {?>
							<div class="masthead__tags">
								<?php the_category(', ');?>
							</div>
							<?php } ?> 						
						</div>
					    <div data-split="lines">
						  <h1 class="masthead__title text-black fw-600 leading-md mt-40 md:mt-24">
							<?php if (( get_post_meta($post->ID,'rnr_blog_post_header_title',true))):?>
								<?php echo esc_html(get_post_meta($post->ID,'rnr_blog_post_header_title',true)); ?>
							<?php else : ?>	
								<?php the_title();?>
							<?php endif;?>							  
						  </h1>	

							</div>
							
							<?php
                             
                                global $post;
                                 
                                // Get the author ID    
                                $author_id = get_post_field('post_author' , $post->ID);
                                 
                                // Get the author image URL    
                                $output = get_avatar_url($author_id);
                                 
                                

                                

                             
                            ?>
													  							<div class="masthead__date">
										<?php			  							   
                                            echo '<img src="'.$output.'"/>';
                                            ?>
                                            
                                            <h1>By <?php echo get_the_author_meta('display_name', $author_id); ?> | <?php the_time( get_option( 'date_format' ) ); ?></h1>
					    </div>
				    </div>
					<div class="content">
							<img class="blog-feature-img" src="<?php echo esc_url($stukram_image[0]);?>">
					</div>
				</div>
			</div>
		</div>
		<!-- masthead__content end -->
    </section>
    <!-- section end -->	
	
