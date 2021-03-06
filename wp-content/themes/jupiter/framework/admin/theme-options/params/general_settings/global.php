<?php
$general_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_global_settings",
    "name" => __("General / Global Settings Settings", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "heading" => __("", "mk_framework") ,
            "title" => __("Site Width & Responsive Settings", "mk_framework") ,
            "type" => "groupset",
            'styles' => 'border-bottom:1px solid #d9d9d9; margin-top:-40px;',
            "fields" => array(
                array(
                    "name" => __("Main Grid Width", "mk_framework") ,
                    "desc" => __("This option defines the main content max-width. default value is 1140px", "mk_framework") ,
                    "id" => "grid_width",
                    "default" => "1140",
                    "min" => "960",
                    "max" => "2000",
                    "step" => "1",
                    "unit" => 'px',
                    "type" => "range",
                ) ,
                array(
                    "name" => __("Content Width (in percent)", "mk_framework") ,
                    "desc" => __("Using this option you can define the width of the content. please note that its in percent, lets say if you set it 60%, sidebar will occupy 40% of the main conent space.", "mk_framework") ,
                    "id" => "content_width",
                    "default" => "73",
                    "min" => "50",
                    "max" => "80",
                    "step" => "1",
                    "unit" => '%',
                    "type" => "range",
                ) ,
                array(
                    "name" => __("Main Content Responsive State", "mk_framework") ,
                    "desc" => __("This option will decide when responsive state of content will be triggered. Different elements in your website such as sidebars will stack on window sizes smaller than the one you choose here.", "mk_framework") ,
                    "id" => "content_responsive",
                    "default" => "960",
                    "min" => "800",
                    "max" => "1140",
                    "step" => "1",
                    "unit" => 'px',
                    "type" => "range",
                ) ,
                array(
                    "name" => __("Main Navigation Threshold Width", "mk_framework") ,
                    "desc" => __("This value defines when Main Navigation should viewed as Responsive Navigation. Default is 1140px but if your Navigation items fits in header in smaller widths you can change this value. For example if you wish to view your website in iPad and see Main Navigtion as you see in desktop, then you should change this value to any size below 1020px.", "mk_framework") ,
                    "id" => "responsive_nav_width",
                    "default" => "1140",
                    "min" => "600",
                    "max" => "1380",
                    "step" => "1",
                    "unit" => 'px',
                    "type" => "range",
                ) ,
            )
        ) ,
        array(
            "name" => __("Main Navigation for Logged In User", "mk_framework") ,
            "desc" => __("Please choose the menu location that you would like to show as global main navigation for logged in users. You should first <a target='_blank' href='" . admin_url('nav-menus.php') . "'>create menu</a> and then <a target='_blank' href='" . admin_url('nav-menus.php') . "?action=locations'>assign to menu locations</a>", "mk_framework") ,
            "id" => "loggedin_menu",
            "default" => 'primary-menu',
            "options" => array(
                "primary-menu" => __('Primary Navigation', "mk_framework") ,
                "second-menu" => __('Second Navigation', "mk_framework") ,
                "third-menu" => __('Third Navigation', "mk_framework") ,
                "fourth-menu" => __('Fourth Navigation', "mk_framework") ,
                "fifth-menu" => __('Fifth Navigation', "mk_framework") ,
                "sixth-menu" => __('Sixth Navigation', "mk_framework") ,
                "seventh-menu" => __('Seventh Navigation', "mk_framework") ,
                "eighth-menu" => __('Eighth Navigation', "mk_framework") ,
                "ninth-menu" => __('Ninth Navigation', "mk_framework") ,
                "tenth-menu" => __('tenth Navigation', "mk_framework") ,
            ) ,
            "type" => "dropdown",
        ) ,
        array(
            "name" => __("Google Analytics ID", "mk_framework") ,
            "desc" => __("Enter your Google Analytics ID here to track your site with Google Analytics.", "mk_framework") ,
            "id" => "analytics",
            "default" => "",
            "type" => "text",
        ) ,
        array(
            "name" => __('Typekit Kit ID', "mk_framework") ,
            "desc" => __("If you want to use typekit in your site simply enter The Type Kit ID you get from Typekit site. <a target='_blank' href='http://help.typekit.com/customer/portal/articles/6840-using-typekit-with-wordpress-com'>Read More</a>", "mk_framework") ,
            "id" => "typekit_id",
            "default" => "",
            "type" => "text",
        ) ,
        array(
            "name" => __('MailChimp API Key', "mk_framework") ,
            "desc" => __('Enter your MailChimp API Key to get subscribers.', "mk_framework") ,
            "id" => "mailchimp_api_key",
            "default" => "",
            "type" => "text",
        ) ,

        /*array(
            "name" => __('Flickr API Key', "mk_framework") ,
            "desc" => __('You will need to fill this field if you want to use flickr shrotcode. You can obtain your API key from <a href="http://www.flickr.com/services/api/misc.api_keys.html">Flickr The App Garden</a>', "mk_framework") ,
            "id" => "flickr_api_key",
            "default" => "",
            "type" => "text",
        ) ,*/
        
        array(
            "name" => __("Breadcrumbs", "mk_framework") ,
            "desc" => __("You can disable breadcrumb navigation globally using this option, or you may need to disable it in a page locally.", "mk_framework") ,
            "id" => "disable_breadcrumb",
            "default" => 'true',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Smooth Scroll", "mk_framework") ,
            "desc" => __("If you enable this option page scrolling will have smooth with easing effect.", "mk_framework") ,
            "id" => "smoothscroll",
            "default" => 'true',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Image Resize Quality", "mk_framework") ,
            "desc" => __("Using this option you can modify the quaity of the built-in image cropper script theme uses.", "mk_framework") ,
            "id" => "image_resize_quality",
            "default" => "100",
            "min" => "10",
            "max" => "100",
            "step" => "1",
            "unit" => '%',
            "type" => "range",
        ) ,
        array(
            "name" => __("Comments on Pages", "mk_framework") ,
            "desc" => __("Using this option you can enable comments for pages.", "mk_framework") ,
            "id" => "pages_comments",
            "default" => 'false',
            "type" => "toggle",
        ) ,
        array(
            "name" => __("Go to Top", "mk_framework") ,
            "desc" => __("Using this option you can enable or disable go to top button.", "mk_framework") ,
            "id" => "go_to_top",
            "default" => 'true',
            "type" => "toggle",
        ) ,
    ) ,
);
