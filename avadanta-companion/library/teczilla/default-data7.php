<?php
function avata_avadanta_get_team_default() {

	return apply_filters(
		'avadanta_team_content', json_encode(
			array(
				array(
				'title'      => esc_html__( 'David Fahim', 'teczilla' ),
				'subtitle'   => esc_html__( 'Web Developer', 'teczilla' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team1.png'),

				),
				array(
				'title'      => esc_html__( 'Kiron Jorge', 'teczilla' ),
				'subtitle'   => esc_html__( 'Web Designer', 'teczilla' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team2.png'),
				),
				array(
				'title'      => esc_html__( 'Robart Jason', 'teczilla' ),
				'subtitle'   => esc_html__( 'Programmer', 'teczilla' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team3.png'),
				),

				array(
				'title'      => esc_html__( 'Muktar Amint', 'teczilla' ),
				'subtitle'   => esc_html__( 'Influencer', 'teczilla' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team4.png'),
				),
				
		
			)
		)
	);
}


function avata_avadanta_get_portfolio_default() {

	return apply_filters(
		'avadanta_portfolio_content', json_encode(
			array(

				array(
				'title'      => esc_html__( 'Valuation', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port8.jpg'),
				'link'       => '#',
				),
				
				

				array(
				'title'      => esc_html__( 'Creative', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port4.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Tasking', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port7.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Marketing', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port1.jpg'),
				'link'       => '#',
				),
				
			
				array(
				'title'      => esc_html__( 'ANalysis', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port5.png'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Environment', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port6.jpg'),
				'link'       => '#',
				),
				
				
		
			)
		)
	);
}

function avata_avadanta_get_slider_default() {

	$theme = wp_get_theme();
	if ('Teczilla Freelancer' == $theme->name) {
		return apply_filters(
			'avadanta_slider_content', json_encode(
				array(
					array(
					'title'      => esc_html__( 'Simple & Intuitive Solution', 'teczilla' ),
					'text'       => esc_html__('The Myths And Realities Of Freelancer', 'teczilla'),
					'link'      => '#',
	                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/teczilla/assets/images/slider-new.png'),
					),
					array(
					'title'      => esc_html__( 'Solution & Integration', 'teczilla' ),
					'text'       => esc_html__('How Gen-Z Has Rediscovered Freelancer', 'teczilla'),
					'link'      => '#',
	                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/teczilla/assets/images/slider-new.png'),
					),
			
				)
			)
		);
	}elseif ('Teczilla Multipurpose' == $theme->name) {
		return apply_filters(
			'avadanta_slider_content', json_encode(
				array(
					array(
					'title'      => esc_html__( 'WE ARE CREATIVE AGENCY', 'teczilla' ),
					'text'       => esc_html__('Manage Your Social Media With Our Expert', 'teczilla'),
					'link'      => '#',
	                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/teczilla/assets/images/slider-multi.png'),
					),
					array(
					'title'      => esc_html__( 'WE ARE CREATIVE AGENCY', 'teczilla' ),
					'text'       => esc_html__('Manage Your Social Media With Our Expert', 'teczilla'),
					'link'      => '#',
	                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/teczilla/assets/images/slider-multi.png'),
					),
			
				)
			)
		);
	}else{

		return apply_filters(
			'avadanta_slider_content', json_encode(
				array(
					array(
					'title'      => esc_html__( 'Simple & Intuitive Solution', 'teczilla' ),
					'text'       => esc_html__('The Myths And Realities Of Freelancer', 'teczilla'),
					'link'      => '#',
	                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/teczilla/assets/images/slider-fince2.png'),
					),
					array(
					'title'      => esc_html__( 'Solution & Integration', 'teczilla' ),
					'text'       => esc_html__('How Gen-Z Has Rediscovered Freelancer', 'teczilla'),
					'link'      => '#',
	                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/teczilla/assets/images/slider-creative.png'),
					),
			
				)
			)
		);
	}
}

function avata_avadanta_get_service_default() {

	return apply_filters(
		'avadanta_service_content', json_encode(
			array(
				array(
				'icon_value' => 'fa-laptop',
				'title'      => esc_html__( 'Digital Marketing', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',

				),
				array(
				'icon_value' => 'fa-bullhorn',
				'title'      => esc_html__( 'Insurance Business', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				),
				array(
				'icon_value' => 'fa-cubes',
				'title'      => esc_html__( 'Business Plan', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				),		
			)
		)
	);
}

function avata_avadanta_get_clients_default() {

	return apply_filters(
		'avadanta_clients_content', json_encode(
			array(
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c1.png'),
				'link'       => '#',
				),
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c2.png'),
				'link'       => '#',
				),
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c3.png'),
				'link'       => '#',
				),

				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c4.png'),
				'link'       => '#',
				),
					array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c5.png'),
				'link'       => '#',
				),
		
			)
		)
	);
}

function avata_avadanta_get_testimonial_default() {

	return apply_filters(
		'avadanta_testimonial_content', json_encode(
			array(
				array(
				'title'      => esc_html__( 'David Fahim', 'teczilla' ),
				'subtitle'   => esc_html__( 'Web Developer', 'teczilla' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi1.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'teczilla'),

				),
				array(
				'title'      => esc_html__( 'Kiron Jorge', 'teczilla' ),
				'subtitle'   => esc_html__( 'Web Designer', 'teczilla' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi2.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'teczilla'),
				),
				array(
				'title'      => esc_html__( 'Robart Jason', 'teczilla' ),
				'subtitle'   => esc_html__( 'Programmer', 'teczilla' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi3.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'teczilla'),
				),				
		
			)
		)
	);
}