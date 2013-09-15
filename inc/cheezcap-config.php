<?php
/**
 * Config for CheezCAP
 */

$cap = new CheezCap( array(
		new CheezCapGroup( 'Homepage Images Left', 'leftGroup',
			array(
				new CheezCapTextOption(
					'Top Left',
					'Enter the image URL for the image that you would like in the top left',
					'left_top_left',
					'http://placekitten.com/234/115'
				),
				new CheezCapTextOption(
					'Top Right',
					'Enter the image URL for the image that you would like in the top right',
					'left_top_right',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Middle Left',
					'Enter the image URL for the image that you would like in the middle left',
					'left_middle_left',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Middle Middle',
					'Enter the image URL for the image that you would like in the midde middle',
					'left_middle_middle',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Middle Right',
					'Enter the image URL for the image that you would like in the middle right',
					'left_middle_right',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Bottom Left',
					'Enter the image URL for the image that you would like in the bottom left',
					'left_bottom_left',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Bottom Right',
					'Enter the image URL for the image that you would like in the bottom right',
					'left_bottom_right',
					'http://placekitten.com/234/115'
				),

			)
		),
		new CheezCapGroup( 'Homepage Images Center', 'centerGroup',
			array(
				new CheezCapTextOption(
					'Top',
					'Enter the image URL for the image that you would like in the top left',
					'center_top',
					'http://placekitten.com/203/176'
				),
				new CheezCapTextOption(
					'Bottom',
					'Enter the image URL for the image that you would like in the top right',
					'center_bottom',
					'http://placekitten.com/203/176'
				),
			)
		),
		new CheezCapGroup( 'Homepage Images Right', 'rightGroup',
			array(
				new CheezCapTextOption(
					'Top Left',
					'Enter the image URL for the image that you would like in the top left',
					'right_top_left',
					'http://placekitten.com/234/115'
				),
				new CheezCapTextOption(
					'Top Right',
					'Enter the image URL for the image that you would like in the top right',
					'right_top_right',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Middle Left',
					'Enter the image URL for the image that you would like in the middle left',
					'right_middle_left',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Middle Middle',
					'Enter the image URL for the image that you would like in the midde middle',
					'right_middle_middle',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Middle Right',
					'Enter the image URL for the image that you would like in the middle right',
					'right_middle_right',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Bottom Left',
					'Enter the image URL for the image that you would like in the bottom left',
					'right_bottom_left',
					'http://placekitten.com/112/115'
				),
				new CheezCapTextOption(
					'Bottom Right',
					'Enter the image URL for the image that you would like in the bottom right',
					'right_bottom_right',
					'http://placekitten.com/234/115'
				),

			)
		),
	), array(
		'themename'			=> 'Home',
		'req_cap_to_edit'	=> 'manage_options',
		'cap_menu_position'	=> 99,
	)
);

function make_get_cap_option( $option_name ) {
	return cheezcap_get_option( $option_name );
}