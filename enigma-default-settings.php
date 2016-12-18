<?php
function weblizar_default_settings()
{
	return $wl_theme_options=array(
			//Logo and Fevicon header			
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'180',
			//'text_title'=>'off',
			'upload_image_favicon'=>'',
			'google_analytics' =>'',
			'custom_css'=>'',
			'front_page' => 'on',
			
			//Service
			'home_service_title'=>'Our Services',
			'service_column'=>'3',
			'no_of_service'=>'6',
			'extra_home_text' =>'Enigma theme home page extra option.',
			
			//Slider Settings
			'side_pause' =>'yes',
			'side_interval' => '5000',
			
			//slide portfolio
			'home_portfolio_title'=>'Our Portfolio',
			'portfolio_related_project_title'=>'Related Project',
			'portfolio_slide_duration' =>'1000',
			'portfolio_slide_timeoutduration' =>'1000',
			'portfolio_slide_item'=>'4',
			'light_box_style'=>'photobox_a',	
			
			//blog
			'home_blog_heading'=>'Recent News',
			'blog_slide_duration' =>'2000',
			'blog_slide_timeoutduration' =>'2000',
			'blog_slide_item'=>'3',
			
			//testimonial
			'home_testi_title'=>'What Our Client Say',
			'testi_slide_duration' =>'2000',
			'testi_slide_timeoutduration' =>'2000',
			'testi_slide_item'=>'1',
			'testi_slide_item_autoplay'=>'true',
			
			//client
			'home_client_title'=>'Meet Our Greatest Partnery',
			'client_slide_duration' =>'2000',
			'client_slide_timeoutduration' =>'2000',
			'client_slide_item'=>'4',
			'client_slide_rotation'=>'true',
			
			//call out
			'call_out_text' =>'Yepp! This is just a design for your awesome website and i am m sure you gona love',
			'call_out_link'=>'#',
			'call_out_button_text'=>'MORE FEATURES',
			'call_out_icon'=>'fa fa-thumbs-up',
			'call_out_button_target'=>'_blank',
			
			//skin_layout
			'style_sheet' =>'default.css',
			'header_position' =>'fixed',
			'layout_selector' =>'wide',
			'back_image' =>'bg_img1',
			'layout_type' =>'off',
			'custom_color_enbled'=>'off',
			'weblizar_custom_color'=>'#31A3DD',
			
			//Social media links
			'header_section_social_media_enbled'=>'on',
			'footer_section_social_media_enbled'=>'on',
			
			'twitter_link'=> "https://twitter.com/",
			'facebook_link'=> "https://facebook.com",
			'linkedin_link'=> "http://linkedin.com/",
			'google_plus'=> "https://plus.google.com/",
			'dribble_link'=> "https://dribbble.com/",
			'youtube_link'=> "https://www.youtube.com/",
			'flicker_link'=> "https://www.flickr.com/",
			'instagram_link'=> "https://instagram.com/",
			
			//contact settings
			'work_time_text' => 'Work Time',
			'work_time'=> 'Mon. - Fri. 10.00 - 22.00',
			'contact_heading' => "Get in touch with us",
			'contact_description' => "We care not only to create quality themes, but as well make sure users succeed to setup.",
			'general_info_text'=>'GENERAL INFO',
			'contact_email' => "lizarweb@gmail.com",
			'phone_number_text' =>'Phone Number',
			'contact_phone_no' => "48 880 450 120",
			'work_time_text' =>'Work Time',
			'work_time' =>'Mon. - Fri. 10.00 - 22.00',
			'where_we_are_text'=>'Where We are',
			'contact_address' => "128 New York USA",
			'google_map_on_contact'=>'on',
			'google_maps' => "https://maps.google.co.in/?ie=UTF8&ll=25.705888,76.871338&spn=1.217564,3.348083",

			//footer customization 
			'footer_customizations' => 'Copyright 2014 Enigma Theme',
			'developed_by_text' => ' Developed By',
			'developed_by_weblizar_text' => 'Weblizar',
			'developed_by_link' => 'http://weblizar.com/',
			
			// Google Font Style
			'header_font' => 'Open Sans',
			'header_tagline_font' => 'Open Sans',
			'header_link_font' => 'Open Sans',
			'header_menu_font' => 'Open Sans',
			
			'sidebar_title_font' => 'Open Sans',
			'sidebar_desc_font' => 'Open Sans',
			
			'home_title' => 'Open Sans',
			'service_title_font' => 'Open Sans',
			'service_desc_font' => 'Open Sans',
			
			'slider_title_font' => 'Open Sans',
			'slider_desc_font' => 'Open Sans',
			'slider_btn_font' => 'Open Sans',
			
			'port_btn_font' => 'Open Sans',
			'port_cat_font' => 'Open Sans',
			'port_desc_page_font' => 'Open Sans',
			
			'blog_title_font' => 'Open Sans',
			'blog_desc_page_font' => 'Open Sans',
			'blog_btn_font' => 'Open Sans',
			
			'testi_desc_font' => 'Open Sans',
			'callout_font' => 'Open Sans',
			
			'footer_font' => 'Open Sans',
			'footer_widget_title_font' => 'Open Sans',
			'footer_widget_desc_font' => 'Open Sans',
			
			//google Font Size
			'header_font_size' => 50,
			'header_tag_font_size' =>16,
			'header_link_font_size' => 18,
			'header_menu_font_size' => 15,
			
			'slider_title_font_size' => 40,
			'slider_desc_font_size' => 17,
			'slider_btn_font_size' => 20,
			
			'home_title_font_size' => 30,
			'ser_title_font_size' => 24,
			'ser_desc_font_size' => 18,

			'port_btn_font_size' => 22,
			'port_cat_font_size' => 13,
			
			'blog_title_font_size' => 22,
			'blog_btn_font_size' => 16,
			
			'sidebar_title_font_size' =>22,
			
			'footer_font_size' =>15,
			'footer_wgt_title_font_size' =>24,			
			
			//coming_soon
			'coming_soon' => 'off',
			'coming_soon_heading' => 'SITE IS UNDER CONSTRUCTION',
			'coming_soon_desc' => 'We are about to finish this Please come after a while..',
			'coming_soon_img' => '',
			
			//custom Link
			'cpt_slider' => 'enigma-slider',
			'cpt_service' => 'enigma-service',
			'cpt_portfolio' => 'enigma-portfolio',
			'cpt_testimonial' => 'enigma-testimonial',
			'cpt_client' => 'enigma-client',
			'cpt_team' => 'enigma-team',

			'home_page_layout'=>array('service','portfolio','blog','testimonial','client','calloutarea'),			
		);
}


/*
* General Settings
*/

function reset_general_setting()
{
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['upload_image_logo']="";
	$wl_theme_options['height']=55;
	$wl_theme_options['width']=150;
	$wl_theme_options['upload_image_favicon']="";
	//$wl_theme_options['text_title']="on";			
	$wl_theme_options['google_analytics']="";
	$wl_theme_options['custom_css']="";
	$wl_theme_options['front_page']='on';	
	update_option('enigma_options_pro',$wl_theme_options);
}

function reset_service_setting()
{
	//slide
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['home_service_title'] = 'Our Services';
	$wl_theme_options['service_column'] = '3';
	$wl_theme_options['no_of_service'] = '6';
	update_option('enigma_options_pro', $wl_theme_options);
}

//Slider Settings

function reset_slider_setting() {
		$wl_theme_options = get_option('enigma_options_pro');
		$wl_theme_options['side_pause'] ="yes";
		$wl_theme_options['side_interval'] ="5000";
		update_option('enigma_options_pro', $wl_theme_options);	
}
function reset_portfolio_setting()
{
	//Portfolio
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['home_portfolio_title'] = 'Our Portfolio';
	$wl_theme_options['portfolio_related_project_title'] = 'Related Project';
	$wl_theme_options['portfolio_slide_duration'] = '1000';
	$wl_theme_options['portfolio_slide_timeoutduration'] = '1000';
	$wl_theme_options['portfolio_slide_item'] = '4';
	$wl_theme_options['light_box_style'] = 'photobox_a';			
	update_option('enigma_options_pro',$wl_theme_options);
	
}

function reset_blog_setting()
{
	//blog
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['home_blog_heading'] = 'Recent News';
	$wl_theme_options['blog_slide_duration'] = '2000';
	$wl_theme_options['blog_slide_timeoutduration'] = '2000';
	$wl_theme_options['blog_slide_item'] = '3';
	update_option('enigma_options_pro', $wl_theme_options);
	
}

function reset_testi_setting()
{	
	//testimonial
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['home_testi_title'] ='What Our Client Say';
	$wl_theme_options['testi_slide_duration'] ='2000';
	$wl_theme_options['testi_slide_timeoutduration'] ='2000';
	$wl_theme_options['testi_slide_item'] ='1';
	$wl_theme_options['testi_slide_item_autoplay']='true';
	update_option('enigma_options_pro', $wl_theme_options);
}
function reset_client_setting()
{	
	//client
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['home_client_title']='Meet Our Greatest Partnery';
	$wl_theme_options['client_slide_duration']='2000';
	$wl_theme_options['client_slide_timeoutduration']='2000';
	$wl_theme_options['client_slide_item']='4';
	$wl_theme_options['client_slide_rotation']='true';
	update_option('enigma_options_pro', $wl_theme_options);
}

function reset_callout_setting()
{	
	//callout
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['call_out_text']='Yepp! This is just a design for your awesome website and i am sure you gona love';
	$wl_theme_options['call_out_link']='#';
	$wl_theme_options['call_out_button_text']='MORE FEATURES';
	$wl_theme_options['call_out_icon']='fa fa-thumbs-up';
	$wl_theme_options['call_out_button_target']='on';
	update_option('enigma_options_pro', $wl_theme_options);
}

function reset_skin_layout_setting()
{
	//skin_layout
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['style_sheet']='default.css';
	$wl_theme_options['header_position']='fixed';
	$wl_theme_options['layout_selector']='wide';
	$wl_theme_options['back_image']='bg_img1';
	$wl_theme_options['layout_type']= 'off';
	$wl_theme_options['custom_color_enbled']= 'off';
	$wl_theme_options['weblizar_custom_color']='#31A3DD';
	update_option('enigma_options_pro', $wl_theme_options);
}
/*
* social Settings
*/

function reset_social_setting()
{	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['footer_section_social_media_enbled']="on";
	$wl_theme_options['header_section_social_media_enbled']="on";	
	
	$wl_theme_options['twitter_link']="https://twitter.com/";
	$wl_theme_options['facebook_link']="https://facebook.com/";
	$wl_theme_options['linkedin_link']="https://linkedin.com/";
	$wl_theme_options['google_plus']="https://plus.google.com/";
	$wl_theme_options['dribble_link']="https://plus.google.com/";
	$wl_theme_options['youtube_link']="https://plus.google.com/";
	$wl_theme_options['flicker_link']="https://www.flickr.com/";
	$wl_theme_options['instagram_link']="https://instagram.com/";
	
	update_option('enigma_options_pro', $wl_theme_options);
}

/*
* footer customizations Settings
*/
function reset_footer_customizations_setting()
{	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['footer_customizations']="@ 2014 Weblizar Theme";
	$wl_theme_options['developed_by_text']=" Developed By";
	$wl_theme_options['developed_by_weblizar_text']="Weblizar";
	$wl_theme_options['developed_by_link']="http://weblizar.com/";
	update_option('enigma_options_pro',$wl_theme_options);
}

/*
* footer customizations Settings
*/
function reset_font_customizations_setting()
{
	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['header_font']='Open Sans';
	$wl_theme_options['header_tagline_font']='Open Sans';
	$wl_theme_options['header_link_font']='Open Sans';
	$wl_theme_options['header_menu_font']='Open Sans';
	$wl_theme_options['sidebar_title_font']='Open Sans';
	$wl_theme_options['sidebar_desc_font']='Open Sans';
	
	$wl_theme_options['home_title'] = 'Open Sans';
	$wl_theme_options['service_title_font'] = 'Open Sans';
	$wl_theme_options['service_desc_font'] = 'Open Sans';
	
	$wl_theme_options['slider_title_font'] ="Open Sans";
	$wl_theme_options['slider_desc_font'] ="Open Sans";
	$wl_theme_options['slider_btn_font'] ="Open Sans";
	
	$wl_theme_options['port_btn_font'] = 'Open Sans';
	$wl_theme_options['port_cat_font'] = 'Open Sans';
	$wl_theme_options['port_desc_page_font'] = 'Open Sans';
	
	$wl_theme_options['blog_title_font'] = 'Open Sans';
	$wl_theme_options['blog_desc_page_font'] = 'Open Sans';
	$wl_theme_options['blog_btn_font'] = 'Open Sans';
	
	$wl_theme_options['testi_desc_font']='Open Sans';
	
	$wl_theme_options['callout_font']='Open Sans';		
		
	$wl_theme_options['footer_font']='Open Sans';
	$wl_theme_options['footer_widget_title_font']='Open Sans';
	$wl_theme_options['footer_widget_desc_font']='Open Sans';
	
	// Google font size
	$wl_theme_options['header_font_size']=50;
	$wl_theme_options['header_tag_font_size']=16;
	$wl_theme_options['header_link_font_size']=18;
	$wl_theme_options['header_menu_font_size']=15;
	
	$wl_theme_options['slider_title_font_size']=40;
	$wl_theme_options['slider_desc_font_size']=17;
	$wl_theme_options['slider_btn_font_size']=20;
	
	$wl_theme_options['home_title_font_size'] = 30;
	$wl_theme_options['ser_title_font_size'] = 24;
	$wl_theme_options['ser_desc_font_size'] = 18;
	
	$wl_theme_options['port_btn_font_size'] = 22;
	$wl_theme_options['port_cat_font_size'] = 13;	
	
	$wl_theme_options['blog_btn_font_size'] = 16;
	$wl_theme_options['blog_title_font_size'] = 22;
	
	$wl_theme_options['sidebar_title_font_size'] = 22;
	
	$wl_theme_options['footer_font_size']=15;
		
	$wl_theme_options['footer_wgt_title_font_size']= 24;
	update_option('enigma_options_pro',$wl_theme_options);
}

/*
* Conatct Settings
*/

function reset_contact_details_setting()
{	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['contact_heading'] = "Get in touch with us";
	$wl_theme_options['contact_description'] = "We care not only to create quality themes, but as well make sure users succeed to setup.";
	$wl_theme_options['general_info_text'] = "GENERAL INFO";
	$wl_theme_options['contact_email'] = "lizarweb@gmail.com";
	$wl_theme_options['phone_number_text'] = "Phone Number";
	$wl_theme_options['contact_phone_no'] = "48 880 450 120";
	$wl_theme_options['work_time_text'] = 'Work Time';
	$wl_theme_options['work_time'] = 'Mon. - Fri. 10.00 - 22.00';
	$wl_theme_options['where_we_are_text'] = "Where We are";
	$wl_theme_options['contact_address'] = "128 New York USA";
	$wl_theme_options['google_map_on_contact'] = 'on';
	$wl_theme_options['google_maps'] = "https://maps.google.co.in/?ie=UTF8&ll=25.705888,76.871338&spn=1.217564,3.348083";
	update_option('enigma_options_pro',$wl_theme_options);
}
/*
* coming soon settings
*/
function reset_coming_soon_setting()
{	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['coming_soon']='off'; 
	$wl_theme_options['coming_soon_heading']='SITE IS UNDER CONSTRUCTION';
	$wl_theme_options['coming_soon_desc']='We are about to finish this Please come after a while..';
	$wl_theme_options['coming_soon_img']='';
	update_option('enigma_options_pro',$wl_theme_options);
}

//Custom Links Reset Function
function reset_cptlinks()
{	$wl_theme_options = get_option('enigma_options_pro');
	$wl_theme_options['cpt_slider']="enigma-slider";
	$wl_theme_options['cpt_service']="enigma-service";
	$wl_theme_options['cpt_portfolio']="enigma-portfolio";
	$wl_theme_options['cpt_testimonial']="enigma-testimonial";
	$wl_theme_options['cpt_client']="enigma-client";
	$wl_theme_options['cpt_team']="enigma-team";	
	update_option('enigma_options_pro',$wl_theme_options);
}
?>