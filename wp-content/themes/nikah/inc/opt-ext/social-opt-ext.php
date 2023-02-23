<?php

function nikah_social_link_ext_opt() {

	$nikah_social_link_opt = array(

		array(
			'id'=>'facebook_profile',
			'type' => 'text',
			'title' => esc_html__('Facebook Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'twitter_profile',
			'type' => 'text',
			'title' => esc_html__('twitter Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),


		array(
			'id'=>'google_profile',
			'type' => 'text',
			'title' => esc_html__('Google+ Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),


		array(
			'id'=>'linkedin_profile',
			'type' => 'text',
			'title' => esc_html__('linkedin Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),


		array(
			'id'=>'pinterest_profile',
			'type' => 'text',
			'title' => esc_html__('Pinterest Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'dribble_profile',
			'type' => 'text',
			'title' => esc_html__('Dribble Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'flickr_profile',
			'type' => 'text',
			'title' => esc_html__('Flickr Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'behance_profile',
			'type' => 'text',
			'title' => esc_html__('Behance Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'youtube_profile',
			'type' => 'text',
			'title' => esc_html__('Youtube Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'soundcloud_profile',
			'type' => 'text',
			'title' => esc_html__('Soundcloud Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'codepen_profile',
			'type' => 'text',
			'title' => esc_html__('Codepen Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'deviantart_profile',
			'type' => 'text',
			'title' => esc_html__('Deviantart Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'digg_profile',
			'type' => 'text',
			'title' => esc_html__('Digg Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'dropbox_profile',
			'type' => 'text',
			'title' => esc_html__('Dropbox Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'github_profile',
			'type' => 'text',
			'title' => esc_html__('Github Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'instagram_profile',
			'type' => 'text',
			'title' => esc_html__('Instagram Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'skype_profile',
			'type' => 'text',
			'title' => esc_html__('Skype Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'spotify_profile',
			'type' => 'text',
			'title' => esc_html__('Spotify Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'steam_profile',
			'type' => 'text',
			'title' => esc_html__('Steam Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'trello_profile',
			'type' => 'text',
			'title' => esc_html__('Trello Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'tumblr_profile',
			'type' => 'text',
			'title' => esc_html__('Tumblr Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'vimeo_profile',
			'type' => 'text',
			'title' => esc_html__('Vimeo Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'wechat_profile',
			'type' => 'text',
			'title' => esc_html__('Wechat Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'weibo_profile',
			'type' => 'text',
			'title' => esc_html__('Weibo Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'wordpress_profile',
			'type' => 'text',
			'title' => esc_html__('WordPress Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'xing_profile',
			'type' => 'text',
			'title' => esc_html__('Xing Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'yahoo_profile',
			'type' => 'text',
			'title' => esc_html__('Yahoo Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'yelp_profile',
			'type' => 'text',
			'title' => esc_html__('Yelp Profile', 'nikah'),
			'validate' => 'url',
			'default' => ''
			),
		/* end of single post padding */
	);

	return $nikah_social_link_opt;
}