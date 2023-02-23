<?php

function nikah_content_typography_ext_opt() {

	$nikah_content_typo_opt = array(

		

		/* main content typography */
		array(
			'id'=>'content-body-font',
			'type' => 'typography', 
			'title' => esc_html__('Body Typography', 'nikah'),
			'compiler' => true,
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>true, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to false
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'units'=>'px', // Defaults to px
			'subtitle'=> esc_html__('Set website body font (leave form empty if you want to use default)', 'nikah'),
			'default'=> array(

                'font-style'  => '400',
                'font-family' => 'Raleway',
                'font-backup' => 'Georgia, serif',
                'font-size'   => '16px',
                'line-height' => '25.6px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
				'text-align' => 'inherit',
				'google' => true,
			)
		),


		array(
			'id'=>'content-heading-font',
			'type' => 'typography', 
			'compiler' => true,
			'title' => esc_html__('Heading Typography', 'nikah'),
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>true, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>false,
			'line-height'=>false,
			'word-spacing'=>false, // Defaults to false
			'letter-spacing'=>false, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'units'=>'px', // Defaults to px
			'subtitle'=> esc_html__('Set website heading font (leave form empty if you want to use default)', 'nikah'),
			'default'=> array(
				
				'font-style'  => '600',
                'font-family' => 'Lora',
                'font-backup' => "'Arial Black', Gadget, sans-serif",
				'text-align' => 'inherit',
				'google' => true,
			)
		),

		/* Heading Type */
		array(
			'id'       => 'content_heading_select',
			'type'     => 'button_set',
			'title'    => esc_html__('Heading Type Typography', 'nikah'),
			'subtitle' => '',
			'options'  => array(
				'h1_typo'    => esc_html__('H1 Typography', 'nikah'),
				'h2_typo'    => esc_html__('H2 Typography', 'nikah'),
				'h3_typo'    => esc_html__('H3 Typography', 'nikah'),
				'h4_typo'    => esc_html__('H4 Typography', 'nikah'),
				'h5_typo'    => esc_html__('H5 Typography', 'nikah'),
				'h6_typo'    => esc_html__('H6 Typography', 'nikah'),
			),
			'default'  => 'h1_typo',
		),

		array(
			'id'=>'heading1_typo',
			'type' => 'typography', 
			'title' => esc_html__('Heading 1 Typography', 'nikah'),
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-family'=>false,
			'font-weight'=>false,
			'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'text-align'=>false,
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to true
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'required' => array(
				array( 'content_heading_select', '=', 'h1_typo' ),
			),
			'units'=>'px', // Defaults to px
			'subtitle'=> esc_html__('Set website heading font (leave form empty if you want to use default)', 'nikah'),
			'default'=> array(

				'font-family' => 'inherit',
				'font-backup' => 'inherit',
				'google'      => true,
				'font-size'   => '42px',
				'line-height' => '47.25px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
			)
		),

		array(
			'id'=>'heading2_typo',
			'type' => 'typography', 
			'title' => esc_html__('Heading 2 Typography', 'nikah'),
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-family'=>false,
			'font-weight'=>false,
			'text-align'=>false,
			'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to true
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'required' => array(
				array( 'content_heading_select', '=', 'h2_typo' ),
			),
			'units'=>'px', // Defaults to px
			'subtitle'=> esc_html__('Set website heading font (leave form empty if you want to use default)', 'nikah'),
			'default'=> array(

				'font-family' => 'inherit',
				'font-backup' => 'inherit',
				'google'      => true,
				'font-size'   => '36px',
				'line-height' => '45px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
			)
		),

		array(
			'id'=>'heading3_typo',
			'type' => 'typography', 
			'title' => esc_html__('Heading 3 Typography', 'nikah'),
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-family'=>false,
			'text-align'=>false,
			'font-weight'=>false,
			'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to true
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'required' => array(
				array( 'content_heading_select', '=', 'h3_typo' ),
			),
			'units'=>'px', // Defaults to px
			'subtitle'=> esc_html__('Set website heading font (leave form empty if you want to use default)', 'nikah'),
			'default'=> array(

				'font-family' => 'inherit',
				'font-backup' => 'inherit',
				'google'      => true,
				'font-size'   => '24px',
				'line-height' => '30px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
			)
		),

		array(
			'id'=>'heading4_typo',
			'type' => 'typography', 
			'title' => esc_html__('Heading 4 Typography', 'nikah'),
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-family'=>false,
			'text-align'=>false,
			'font-weight'=>false,
			'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to true
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'required' => array(
				array( 'content_heading_select', '=', 'h4_typo' ),
			),
			'units'=>'px', // Defaults to px
			'subtitle'=> esc_html__('Set website heading font (leave form empty if you want to use default)', 'nikah'),
			'default'=> array(

				'font-family' => 'inherit',
				'font-backup' => 'inherit',
				'google'      => true,
				'font-size'   => '18px',
				'line-height' => '23.4px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
			)
		),

		array(
			'id'=>'heading5_typo',
			'type' => 'typography', 
			'title' => esc_html__('Heading 5 Typography', 'nikah'),
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-family'=>false,
			'text-align'=>false,
			'font-weight'=>false,
			'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to true
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'required' => array(
				array( 'content_heading_select', '=', 'h5_typo' ),
			),
			'units'=>'px', // Defaults to px
			'subtitle'=> esc_html__('Set website heading font (leave form empty if you want to use default)', 'nikah'),
			'default'=> array(

				'font-family' => 'inherit',
				'font-backup' => 'inherit',
				'google'      => true,
				'font-size'   => '16px',
				'line-height' => '22px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
			)
		),

		array(
			'id'=>'heading6_typo',
			'type' => 'typography', 
			'title' => esc_html__('Heading 6 Typography', 'nikah'),
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-family'=>false,
			'text-align'=>false,
			'font-weight'=>false,
			'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to true
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'required' => array(
				array( 'content_heading_select', '=', 'h6_typo' ),
			),
			'units'=>'px', // Defaults to px
			'subtitle'=> esc_html__('Set website heading font (leave form empty if you want to use default)', 'nikah'),
			'default'=> array(

				'font-family' => 'inherit',
				'font-backup' => 'inherit',
				'google'      => true,
				'font-size'   => '14px',
				'line-height' => '19.6px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
			)
		),

		
	);

return $nikah_content_typo_opt;
}