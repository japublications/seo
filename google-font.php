<?php $wl_theme_options = get_option('enigma_options_pro'); ?>

<style>
.logo a{
	font-family: <?php echo $wl_theme_options['header_font']; ?> !important;
}
.logo p{
	font-family: <?php echo $wl_theme_options['header_tagline_font']; ?>;
}
.head-contact-info li{
	font-family: <?php echo $wl_theme_options['header_link_font']; ?>;
}
.navbar-default .navbar-nav li a, .navbar-default .navbar-nav .active a .dropdown-menu li a{
	font-family: <?php echo $wl_theme_options['header_menu_font']; ?> !important;
}
.carousel-text h1{
	font-family: <?php echo $wl_theme_options['slider_title_font']; ?> !important;
}
.carousel-list li{
	font-family: <?php echo $wl_theme_options['slider_desc_font']; ?>;
}
.carousel-text .enigma_blog_read_btn{
	font-family: <?php echo $wl_theme_options['slider_btn_font']; ?>;
}

.enigma_heading_title h3{
	font-family: <?php echo $wl_theme_options['home_title']; ?> !important;
}
.enigma_service_detail h3, 
.enigma_service_detail_2 h3 a{
	font-family: <?php echo $wl_theme_options['service_title_font']; ?>;
}
.enigma_service_detail p, 
.enigma_service_detail_2 p{
	font-family: <?php echo $wl_theme_options['service_desc_font']; ?>;
}
.enigma_home_portfolio_caption h3 a{
	font-family: <?php echo $wl_theme_options['port_btn_font']; ?>;
}
.enigma_home_portfolio_caption p, 
.nav-pills li a{
	font-family: <?php echo $wl_theme_options['port_cat_font']; ?>;
}
.enigma_header_breadcrum_title h1, 
.breadcrumb li, 
.enigma-project-detail-sidebar p small, 
.enigma-project-detail-sidebar p, 
.enigma_heading_title2 h3,
.enigma_blog_post_content p,
.enigma_team_caption h3,
.enigma_team_caption small, 
.enigma_cotact_form_div p, 
.enigma_form_group label, 
.enigma_send_button, 
.error_404 p, 
.enigma-project-detail-sidebar .launch-enigma-project a, 
.enigma-project-description p, 
.about-content p{
	font-family: <?php echo $wl_theme_options['port_desc_page_font']; ?>;
}
.enigma_blog_thumb_wrapper h2 a{
	font-family: <?php echo $wl_theme_options['blog_title_font']; ?>;
}
.enigma_blog_thumb_wrapper p, 
.enigma_blog_thumb_date li, 
.enigma_post_date span.date, 
.enigma_post_date h6, 
.blog-date-left li a, 
.enigma_fuul_blog_detail_padding h2 a,
.enigma_fuul_blog_detail_padding p, 
.enigma_comment_title h3, 
h4.enigma_comment_detail_title, 
.enigma_comment_date, 
.enigma_comment_detail p,
.reply a, 
.enigma_comment_form_section h2, 
.comment-form p, 
.enigma_comment_form_section label, 
#enigma_send_button{
	font-family: <?php echo $wl_theme_options['blog_desc_page_font']; ?>;
}
.enigma_blog_read_btn{
	font-family: <?php echo $wl_theme_options['blog_btn_font']; ?>;
}
.enigma_testimonial_area p, span, h3, .space p, h5{
	font-family: <?php echo $wl_theme_options['testi_desc_font']; ?>;
}
.enigma_callout_area p, .enigma_callout_area a{
	font-family: <?php echo $wl_theme_options['callout_font']; ?>;
}
.enigma_footer_area p{
	font-family: <?php echo $wl_theme_options['footer_font']; ?>;
}
.enigma_footer_widget_title{
	font-family: <?php echo $wl_theme_options['footer_widget_title_font']; ?>;
}
.enigma_footer_widget_area h6, 
.enigma_footer_widget_column address p,
.enigma_footer_widget_column .textwidget, 
.enigma_footer_widget_column ul li a, 
.enigma_footer_widget_column ul#recentcomments li,
.enigma_footer_widget_column ul#recentcomments li a, 
.enigma_footer_widget_column .tagcloud a{
	font-family: <?php echo $wl_theme_options['footer_widget_desc_font']; ?>;
}
.enigma_sidebar_widget_title h2{
	font-family: <?php echo $wl_theme_options['sidebar_title_font']; ?>;
}
.enigma_sidebar_link p a, 
.enigma_widget_tags a, 
.form-control, 
.enigma_sidebar_widget ul li a, 
.enigma_sidebar_widget .textwidget, 
.testimonial-author-info h2, 
.descrp, 
.enigma_recent_widget_post h3 a, 
.enigma_recent_widget_post_date, #wp-calendar, 
.enigma_sidebar_widget p, 
.enigma_sidebar_widget ul li, 
.tagcloud a{
	font-family: <?php echo $wl_theme_options['sidebar_desc_font']; ?>;
}

@media (min-width:768px){
	.logo a{
		font-size : <?php echo $wl_theme_options['header_font_size']; ?>px !important;
	}
	.logo p{
		font-size : <?php echo $wl_theme_options['header_tag_font_size']; ?>px !important;
	}
	.head-contact-info li{
		font-size: <?php echo $wl_theme_options['header_link_font_size']; ?>px;
	}
	.navbar-default .navbar-nav li a, .navbar-default .navbar-nav .active a .dropdown-menu li a{
		font-size: <?php echo $wl_theme_options['header_menu_font_size']; ?>px !important;
	}
	.carousel-text h1{
		font-size: <?php echo $wl_theme_options['slider_title_font_size']; ?>px !important;
	}
	.carousel-list li{
		font-size: <?php echo $wl_theme_options['slider_desc_font_size']; ?>px !important;
	}
	.carousel-text .enigma_blog_read_btn{
		font-size: <?php echo $wl_theme_options['slider_btn_font_size']; ?>px !important;
	}
	.enigma_heading_title h3{
		font-size: <?php echo $wl_theme_options['home_title_font_size']; ?>px !important;
	}
	.enigma_service_detail h3, .enigma_service_detail_2 h3 a{
		font-size: <?php echo $wl_theme_options['ser_title_font_size']; ?>px !important;
	}
	.enigma_service_detail p, .enigma_service_detail_2 p{
		font-size: <?php echo $wl_theme_options['ser_desc_font_size']; ?>px !important;
	}
	.enigma_home_portfolio_caption h3 a{
		font-size: <?php echo $wl_theme_options['port_btn_font_size']; ?>px !important;
	}
	.enigma_home_portfolio_caption p, .nav-pills li a{
		font-size: <?php echo $wl_theme_options['port_cat_font_size']; ?>px !important;
	}
	.enigma_blog_thumb_wrapper h2 a{
		font-size: <?php echo $wl_theme_options['blog_title_font_size']; ?>px !important;
	}
	.enigma_blog_read_btn{
		font-size: <?php echo $wl_theme_options['blog_btn_font_size']; ?>px !important;
	}
	.enigma_footer_area p{
		font-size: <?php echo $wl_theme_options['footer_font_size']; ?>px !important;
	}
	.enigma_footer_widget_title{
		font-size: <?php echo $wl_theme_options['footer_wgt_title_font_size']; ?>px !important;
	}
	.enigma_sidebar_widget_title h2{
		font-size: <?php echo $wl_theme_options['sidebar_title_font_size']; ?>px !important;
	}
}
</style>