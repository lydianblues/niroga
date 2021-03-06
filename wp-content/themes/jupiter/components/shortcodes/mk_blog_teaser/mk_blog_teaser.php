<?php
    global $mk_options;
    $phpinfo =  pathinfo( __FILE__ );
    $path = $phpinfo['dirname'];
    include( $path . '/config.php' );

    $id = uniqid();

    $slider_query = array(
        'posts_per_page' => 5,
        'post_type' => 'post'
    );
    if ($slideshow_cat) {
        $slider_query['cat'] = $slideshow_cat;
    }
    if ($orderby) {
        $slider_query['orderby'] = $orderby;
    }
    if ($order) {
        $slider_query['order'] = $order;
    }

    $grid_width = $mk_options['grid_width'] - 40;

    $image_width = $grid_width*0.6;

    $output .= '<section class="mk-blog-teaser '.$el_class.'">';

    $output .= '<div class="mk-swipe-slideshow mk-swiper-container blog-slider-item js-el" style="overflow: hidden"
                data-mk-component="SwipeSlideshow"
                data-swipeSlideshow-config=\'{
                    "effect" : "slide",
                    "displayTime" : "6000",
                    "transitionTime" : "700",
                    "nav" : ".mk-swipe-slideshow-nav-'.$id .'",
                    "hasNav" : "true" }\' >';

    $output .= '<div class="mk-swiper-wrapper mk-slider-holder">';
    $r = new WP_Query($slider_query);
        if ($r->have_posts()):
            while ($r->have_posts()):
                $r->the_post();

                        

                        $post_type = (get_post_format(get_the_id()) == '0' || get_post_format(get_the_id()) == '') ? 'image' : get_post_format(get_the_id());

                        $output .= '<div class="mk-slider-slide">';
                        $output .= '<article id="teaser-entry-' . get_the_ID() . '" class="blog-slideshow-entry swiper-slide">';


                        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
                        $image_src       = bfi_thumb($image_src_array[0], array(
                            'width' => $image_width,
                            'height' => $image_height,
                            'crop' => true
                        ));
                        //if (has_post_thumbnail()) {
                            $output .= '<div class="thumb-featured-image"><a title="' . get_the_title() . '" href="' . get_permalink() . '">';
                            $output .= '<img alt="' . get_the_title() . '" class="item-featured-image"  title="' . get_the_title() . '" src="' . mk_image_generator($image_src, $image_width, $image_height) . '" itemprop="image" />';
                            $output .= '<div class="image-hover-overlay"></div>';
                            $output .= '</a></div>';
                        //}

                            $output .= '<div class="blog-meta">';
                            $output .= '<h2 class="blog-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
                            $output .= '<div class="blog-categories">' . get_the_category_list(', ') . '&nbsp;</div>';
                            $output .= '<time datetime="' . get_the_date('Y-m-d') . '" itemprop="datePublished" pubdate>';
                            $output .= '<a href="' . get_month_link(get_the_time("Y"), get_the_time("m")) . '">' . get_the_date() . '</a>';
                            $output .= '</time>';
                            $output .= '<div class="clearboth"></div></div>';

                                $output .= '<div class="teaser-comment-love-wrapper">';
                                        ob_start();
                                        comments_number('0', '1', '%');
                                        $output .= '<a href="' . get_permalink() . '#comments" class="blog-teaser-comment"><i class="mk-moon-bubble-9"><span>&nbsp;</span></i><span>' . ob_get_contents() . '</span></a>';
                                        ob_get_clean();

                                if (function_exists('mk_love_this')) {
                                    ob_start();
                                    mk_love_this();
                                    $output .= '<div class="mk-love-holder">' . ob_get_contents() . '</div>';
                                    ob_get_clean();
                                }
                                $output .= '</div>';


                        $output .= '</article>';
                        $output .= '</div>';
            endwhile;
        endif;
    $output .= '</div>';

    $output .= '<div class="mk-swipe-slideshow-nav-'.$id .'">';
        $output .= '<a class="mk-swiper-prev swiper-arrows" data-direction="prev"><i class="mk-jupiter-icon-arrow-left"></i></a>';
        $output .= '<a class="mk-swiper-next swiper-arrows" data-direction="next"><i class="mk-jupiter-icon-arrow-right"></i></a>';
    $output .= '</div>';


            $output .= '<img src="'. mk_image_generator('', $image_width, $image_height) .'" style="visibility: hidden;" />';


    $output .= '</div>';



    /***********************************/


    $side_query = array(
        'posts_per_page' => 3,
        'post_type' => 'post'
    );
    if ($side_thumb_cat) {
        $side_query['cat'] = $side_thumb_cat;
    }
    if ($orderby) {
        $side_query['orderby'] = $orderby;
    }
    if ($order) {
        $side_query['order'] = $order;
    }


    $output .= '<div class="mk-teaser-blog-side">' . "\n";

    $i = 0;
    $image_height = $image_height/2 - 4;

    $r = new WP_Query($side_query);
        if ($r->have_posts()):
            while ($r->have_posts()):
                $r->the_post();

                        if($i == 0) {
                            $image_width = $grid_width*0.4 - 8;
                            $item_class = 'full-item';
                        } else {
                            $image_width = $grid_width*0.2 - 8;
                            $item_class = 'half-item';
                        }

                        $output .= '<article id="entry-' . get_the_ID() . '" class="blog-teaser-side-item '.$item_class.'"><div class="item-holder">';


                        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
                        $image_src       = bfi_thumb($image_src_array[0], array(
                            'width' => $image_width,
                            'height' => $image_height,
                            'crop' => true
                        ));
                        //if (has_post_thumbnail()) {
                            $output .= '<div class="thumb-featured-image"><a title="' . get_the_title() . '" href="' . get_permalink() . '">';
                            $output .= '<img alt="' . get_the_title() . '" width="' . $image_width . '" class="item-featured-image" height="' . $image_height . '" title="' . get_the_title() . '" src="' . mk_image_generator($image_src, $image_width, $image_height) . '" itemprop="image" />';
                            $output .= '<div class="image-hover-overlay"></div>';
                            $output .= '</a></div>';
                        //}

                            $output .= '<div class="blog-meta">';
                            $output .= '<h2 class="blog-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
                            $output .= '<div class="blog-categories">' . get_the_category_list(', ') . '</div>';
                            $output .= '<div class="clearboth"></div></div>';

                        $output .= '</div></article>';
                        $i++;
            endwhile;
        endif;

    $output .= '</div>';

    $output .= '</section><div class="clearboth"></div>';


    wp_reset_postdata();
    echo $output;
