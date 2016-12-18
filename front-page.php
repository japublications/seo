<?php
get_header(); 
$wl_theme_options = get_option('enigma_options_pro');
	if ($wl_theme_options['front_page']=="on" && is_front_page())
	{	// Front page content 
		get_template_part('home','slider');
		get_template_part('slide_customjs');	
		$data = $wl_theme_options['home_page_layout'];
		if($data)
		{	foreach($data as $key=>$value)
			{	switch($value) 
				{	case 'service': 
					//****** get home service  ********
					get_template_part('home', 'services');
					break;			
					
					case 'extra': 
					//****** get home service  ********
					get_template_part('home', 'extra');
					break;
					case 'portfolio':
					//****** get home project  ********
					get_template_part('home', 'portfolio');				
					break;
					
					case 'blog': 			
					//****** get home  blog  ********
					get_template_part('home', 'blog');			
					break; 
					
					case 'testimonial': 			
					//****** get home testimonial********
					get_template_part('home', 'testimonial');					
					break; 
					
					case 'client': 			
					//****** get home client ********
					get_template_part('home', 'client');					
					break;
					
					case 'calloutarea': 			
					//****** get home client ********
					get_template_part('home', 'calloutarea');					
					break;
				}
			}
		}	
		get_footer();
	} else {	
		if(get_page_template_slug( get_the_ID() )) {	
			$temp_name= get_page_template_slug( get_the_ID() );
			$temp_name =str_replace('.php', '', $temp_name);
			get_template_part( $temp_name );
		} else	{	
			get_template_part( 'page' );
		} 
	}
?>
