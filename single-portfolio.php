<?php get_header('portfolio'); 
?>

<main id="portfolio-main">
    <!-- loop -->
	<?php if( have_posts()): while( have_posts()) : the_post(); ?>
	<section class="project-title no-padding">
		<!-- Project  Title -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-xs-12 project col-md-push-6">
					<div class="project-info row">
						<dl class="col-xs-4">
							<dt>Category</dt>
							<dd>
                            <?php
                                echo get_field('category'); ?>
                            </dd>
						</dl>
						<dl class="col-xs-4">
							<dt>Position</dt>
							<dd>
                                <?php echo get_field('position'); ?>
                            </dd>
						</dl>
						<dl class="col-xs-4">
							<dt>Year</dt>
							<dd><?php the_field('year'); ?></dd>
						</dl>
					</div>
					 <h1 class="section-title"><?php the_title(); ?></h1>
                    <p class="project-description">
                       <?php the_content(); ?>
                    </p>
                    <!-- URLがあればボタンを表示 -->
					<?php if (get_field('url')): ?>
                        <a class="btn btn-lg btn-accent" href="<?php the_field('url'); ?>" target="_blank"><?php the_field('anchor'); ?></a>
                    <?php endif; ?><!-- (get_field('url') -->
				</div>
				<div class="col-md-6 col-xs-12 col-md-pull-6">
					<img src="<?php the_field('main_image'); ?>" alt="main image" class="img-responsive">
				</div>
			</div>
		</div>
	</section>
    <!-- loop -->
	<section class="accent angled-both-reverse">
        <div class="container">
            <div class="col-sm-6" data-aos="fade-right">
                <h2 class="section-title"><?php the_field('spec_1_title'); ?></h2>
                <?php the_tags( ); ?>
                <div class="spec">
                    <?php the_field('spec_1_description'); ?>
                </div>
            </div>
            <div class="col-sm-6" data-aos="fade-left">
            <?php 
                $filetype = wp_check_filetype( get_field('spec_1_image') );
                // MP4ファイルが有れば表示
                 if ($filetype['ext'] == 'mp4'): ?>
                <video class="vid img-responsive text-center" preload="auto" loop autoplay>
                    <source src="<?php echo the_field('spec_1_image'); ?>" type="video/mp4"> Your browser does not support the video tag.
                </video> 
                 <?php else: ?> <!-- なければ画像 -->
                     <img src="<?php echo the_field('spec_1_image'); ?>" alt="" class="img-responsive">
                 <?php endif; ?> <!-- $filetype['ext'] == 'mp4' -->
            </div>
        </div>
    </section>
    <?php if (get_field('spec_2_title')): ?> <!-- spec_2_titleに入力されていれば -->
    <section class="angled-top">
        <div class="container">
            <div class="<?php if (get_field('spec_2_image')): //画像があればclassを変える ?>
                col-sm-6 col-md-push-6 <?php endif; //  if (get_field('spec_2_image'))  ?> "  data-aos="fade-left">
                <h2 class="section-title"><?php the_field('spec_2_title'); ?></h2>
                <div class="spec">
                    <?php the_field('spec_2_description'); ?>
                </div>
            </div>
            <div class="<?php if (get_field('spec_2_image')): // 画像があればclassをつける?>col-sm-6 col-md-pull-6 text-center"  <?php endif; ?> data-aos="fade-right">
               <?php 
                $filetype = wp_check_filetype( get_field('spec_2_image') );
                 if ($filetype['ext'] == 'mp4'): //mp4ファイルが有れば表示?>
                <video class="vid img-responsive" preload="auto" loop autoplay>
                    <source src="<?php echo the_field('spec_2_image'); ?>" type="video/mp4"> Your browser does not support the video tag.
                </video> 
                 <?php else: //なければ画像?>　
                     <img src="<?php echo the_field('spec_2_image'); ?>" alt="" class="img-responsive">
                 <?php endif; // mp4表示?>
            </div>
        </div>
    </section>
    <?php endif;//  spec_2_title ?>
    <?php if (get_field('spec_3_title')): // spec_3_titleに入力されていれば  ?>
   <section class="accent angled-top-reverse ">
        <div class="container">
            <div class="<?php if (get_field('spec_3_image')): //画像あり?>col-sm-6<?php endif;//画像あり ?>" data-aos="fade-right">
                <h2 class="section-title"><?php the_field('spec_3_title'); ?></h2>
                <?php the_tags( ); ?>
                <div class="spec">
                    <?php the_field('spec_3_description'); ?>
                </div>
            </div>
            <div class="<?php if (get_field('spec_3_image')): //画像あり?>col-sm-6 <?php endif;//画像あり ?>" data-aos="fade-left">
            <?php 
                $filetype = wp_check_filetype( get_field('spec_3_image') );
                 if ($filetype['ext'] == 'mp4')://mp4あり ?>
                <video class="vid img-responsive text-center" preload="auto" loop autoplay>
                    <source src="<?php echo the_field('spec_3_image'); ?>" type="video/mp4"> Your browser does not support the video tag.
                </video> 
                 <?php else: // mp4なし　画像?>
                     <img src="<?php echo the_field('spec_3_image'); ?>" alt="" class="img-responsive">
                 <?php endif;// mp4 boolean ?>
            </div>
        </div>
    </section>
<?php endif; // spec 3 title?>
    <?php if (get_field('spec_4_title')):  // spec 4にタイトルがあれば?>
    <section class="angled-top">
        <div class="container">
            <div class="<?php if (get_field('spec_4_image'))://画像 ?>
                col-sm-6 col-md-push-6 <?php endif; //画像?> "  data-aos="fade-left">
                <h2 class="section-title"><?php the_field('spec_4_title'); ?></h2>
                <div class="spec">
                    <?php the_field('spec_4_description'); ?>
                </div>
            </div>
            <div class="<?php if (get_field('spec_4_image')): //画像?>col-sm-6 col-md-pull-6 text-center"  <?php endif; //画像?> data-aos="fade-right">
               <?php 
                $filetype = wp_check_filetype( get_field('spec_4_image') );
                 if ($filetype['ext'] == 'mp4'):// mp4 ?>
                <video class="vid img-responsive" preload="auto" loop autoplay>
                    <source src="<?php echo the_field('spec_4_image'); ?>" type="video/mp4"> Your browser does not support the video tag.
                </video> 
                 <?php else: //mp4なし　画像 ?>
                     <img src="<?php echo the_field('spec_4_image'); ?>" alt="" class="img-responsive">
                 <?php endif; // mp4?>
            </div>
        </div>
    </section>
    <?php endif; // spec_4 title ?> 

    <?php if (get_field('capture')): ?>
        
    
    <section class="white entire-cap angled-top<?php 

    $odd_num_spec = the_field('spec_2_title' || 'spec_4_title');// spec 2とspec4にはangled classがないので、spec 1か3なら(angled-both) 
    if (!$odd_num_spec){ 
        echo '-reverse" ';
         } else { 
            echo ' data-aos="fade"  data-aos-delay="0';
         }?>">
    <!-- Screen shot and more details -->
        <div class="container" data-aos="fade-up">
                <img src="<?php the_field('capture'); ?>" alt="simple corp cap">
        </div>
    </section>
    <?php endif; ?>
 

 <!-- Next Post -->
    <section id="next" class="blur no-padding" data-aos="fade" data-aos-delay="0">
       <?php 
        $next_post = get_next_post();

         $args = array(
                'post_type' => 'portfolio',
                'orderby' => 'post_date',
                'order' => 'ASC',
            );

        $posts_array = get_posts( $args );
        $first_post_thumbnail = get_the_post_thumbnail_url($posts_array[0]->ID);


        ?>
        <?php if (!empty($next_post)): ?>
            <div class="bg-img" 
            style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_next_post()->ID));?>'); background-size: cover; "></div>
            <div class="next-content">
                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
                    <p>Next work &raquo;</p>
                    <h2 class="section-title"><?php echo esc_attr( $next_post->post_title ); ?></h2>
                </a>
            </div>
        <?php else: ?>
        <div class="bg-img" style="background-image: url('<?php echo $first_post_thumbnail ?>'); background-size: cover; "></div>
        <div class="next-content">
            <a href="<?php echo esc_url( get_permalink( $posts_array[0]->ID ) ); ?>">
                <p>Next work &raquo;</p>
                <h2 class="section-title"><?php echo esc_attr(  $posts_array[0]->post_title ); ?></h2>
            </a>
        </div>
    <?php endif; ?>
    </section>

<?php endwhile;endif; ?>
<?php get_footer('portfolio'); ?>