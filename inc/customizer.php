<?php
/**
 * Register custom customizer panels, sections and settings.
 *
 * @package    Bulan
 * @author     ThemePhe
 * @copyright  Copyright (c) 2015, ThemePhe
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 * @since      1.0.0
 */

/**
 * We register our custom customizer by using the hook.
 *
 * @since  1.0.0
 */
function bulan_customizer_register() {

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// ======= Start Customizer Panels/Sections/Settings ======= //
	
	// Theme prefix
	$prefix = 'bulan-';
	
	// General Panels and Sections
	$general_panel = 'general';

	$panels[] = array(
		'id'       => $general_panel,
		'title'    => __( 'General', 'bulan' ),
		'priority' => 10
	);

		// Favicon
		$section = $prefix . 'favicon-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Favicon', 'bulan' ),
			'priority'    => 35,
			'panel'       => $general_panel
		);
		$options[$prefix . 'favicon'] = array(
			'id'           => $prefix . 'favicon',
			'label'        => __( 'Favicon', 'bulan' ),
			'section'      => $section,
			'type'         => 'image',
			'default'      => '',
			'description'  => __( 'File must be <strong>.png</strong> or <strong>.ico</strong> format. Optimal dimensions: <strong>32px x 32px</strong>.', 'bulan' ),
		);
		$options[$prefix . 'mobile-icon'] = array(
			'id'           => $prefix . 'mobile-icon',
			'label'        => __( 'Apple Touch Icon', 'bulan' ),
			'section'      => $section,
			'type'         => 'image',
			'default'      => '',
			'description'  => __( 'File must be <strong>.png</strong> format. Optimal dimensions: <strong>152px x 152px</strong>.', 'bulan' ),
		);

		// RSS
		$section = $prefix . 'rss-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'RSS', 'bulan' ),
			'priority'    => 100,
			'panel'       => $general_panel,
			'description' => __( 'If you fill the custom rss url below, it will replace the default.', 'bulan' ),
		);
		$options[$prefix . 'custom-rss'] = array(
			'id'           => $prefix . 'custom-rss',
			'label'        => __( 'Custom RSS URL (eg. Feedburner)', 'bulan' ),
			'section'      => $section,
			'type'         => 'url',
			'default'      => ''
		);

		// Comment
		$section = $prefix . 'comment-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Comments', 'bulan' ),
			'priority'    => 110,
			'panel'       => $general_panel,
		);
		$options[$prefix . 'page-comment'] = array(
			'id'           => $prefix . 'page-comment',
			'label'        => __( 'Page Comment', 'bulan' ),
			'description'  => __( 'Enable comment on page', 'bulan' ),
			'section'      => $section,
			'type'         => 'switch',
			'default'      => 1
		);

		// Footer Social
		$section = $prefix . 'footer-social-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Social', 'bulan' ),
			'description' => __( 'Please add full profile link, for example https://twitter.com/themephe/', 'bulan' ),
			'priority'    => 120,
			'panel'       => $general_panel,
		);
		$options[$prefix . 'twitter'] = array(
			'id'           => $prefix . 'twitter',
			'label'        => __( 'Twitter Profile', 'bulan' ),
			'section'      => $section,
			'type'         => 'text'
		);
		$options[$prefix . 'facebook'] = array(
			'id'           => $prefix . 'facebook',
			'label'        => __( 'Facebook Profile', 'bulan' ),
			'section'      => $section,
			'type'         => 'text'
		);
		$options[$prefix . 'gplus'] = array(
			'id'           => $prefix . 'gplus',
			'label'        => __( 'Google Plus Profile', 'bulan' ),
			'section'      => $section,
			'type'         => 'text'
		);
		$options[$prefix . 'linkedin'] = array(
			'id'           => $prefix . 'linkedin',
			'label'        => __( 'Linkedin Profile', 'bulan' ),
			'section'      => $section,
			'type'         => 'text'
		);
		$options[$prefix . 'dribbble'] = array(
			'id'           => $prefix . 'dribbble',
			'label'        => __( 'Dribbble Profile', 'bulan' ),
			'section'      => $section,
			'type'         => 'text'
		);
		$options[$prefix . 'instagram'] = array(
			'id'           => $prefix . 'instagram',
			'label'        => __( 'Instagram Profile', 'bulan' ),
			'section'      => $section,
			'type'         => 'text'
		);

		// Footer Text
		$section = $prefix . 'footer-text-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Footer Text', 'bulan' ),
			'priority'    => 125,
			'panel'       => $general_panel,
		);
		$options[$prefix . 'footer-text'] = array(
			'id'           => $prefix . 'footer-text',
			'label'        => '',
			'description'  => __( 'Customize the footer text.', 'bulan' ),
			'section'      => $section,
			'type'         => 'textarea',
			'default'      => '&copy; Copyright ' . date( 'Y' ) . ' <a href="' . esc_url( home_url() ) . '">' . esc_attr( get_bloginfo( 'name' ) ) . '</a> &middot; Designed by <a href="http://themephe.com/">ThemePhe</a>'
		);

	// Header Panels and Sections
	$header_panel = 'header';

	$panels[] = array(
		'id'       => $header_panel,
		'title'    => __( 'Header', 'bulan' ),
		'priority' => 15
	);

		// Logo
		$section = $prefix . 'logo-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Logo', 'bulan' ),
			'priority'    => 30,
			'panel'       => $header_panel
		);
		$options[$prefix . 'logo'] = array(
			'id'      => $prefix . 'logo',
			'label'   => __( 'Regular Logo', 'bulan' ),
			'section' => $section,
			'type'    => 'image',
			'default' => ''
		);
		$options[$prefix . 'retina-logo'] = array(
			'id'           => $prefix . 'retina-logo',
			'label'        => __( 'Retina Logo', 'bulan' ),
			'description'  => __( 'The Retina Logo should be twice the size of the Regular Logo.', 'bulan' ),
			'section'      => $section,
			'type'         => 'image',
			'default'      => '',
		);

		// Sticky Navigation
		$section = $prefix . 'search-icon-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Search', 'bulan' ),
			'description' => __( 'Show search icon', 'bulan' ),
			'priority'    => 35,
			'panel'       => $header_panel
		);
		$options[$prefix . 'search-icon'] = array(
			'id'      => $prefix . 'search-icon',
			'label'   => '',
			'section' => $section,
			'type'    => 'switch',
			'default' => 1
		);

	// Colors Panel and Sections
	$color_panel = 'color';

	$panels[] = array(
		'id'       => $color_panel,
		'title'    => __( 'Color', 'bulan' ),
		'priority' => 20
	);

		// Search colors
		$section = $prefix . 'search-colors-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Search', 'bulan' ),
			'priority'    => 1,
			'panel'       => $color_panel
		);
		$options[$prefix . 'search-icon-color'] = array(
			'id'          => $prefix . 'search-icon-color',
			'label'       => __( 'Icon color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'search-bg-color'] = array(
			'id'          => $prefix . 'search-bg-color',
			'label'       => __( 'Background color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#333333',
			'transport'   => 'postMessage'
		);
		
		// Header colors
		$section = $prefix . 'header-colors-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Header', 'bulan' ),
			'priority'    => 5,
			'panel'       => $color_panel
		);
		$options[$prefix . 'site-title-color'] = array(
			'id'          => $prefix . 'site-title-color',
			'label'       => __( 'Site Title', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'site-desc-color'] = array(
			'id'          => $prefix . 'site-desc-color',
			'label'       => __( 'Site Description', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#777777',
			'transport'   => 'postMessage'
		);

		// Menu colors
		$section = $prefix . 'menu-colors-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Menu', 'bulan' ),
			'priority'    => 15,
			'panel'       => $color_panel
		);
		$options[$prefix . 'menu-link-color'] = array(
			'id'          => $prefix . 'menu-link-color',
			'label'       => __( 'Link color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'menu-current-group'] = array(
			'id'          => $prefix . 'menu-current-group',
			'label'       => __( 'Hover & Current Menu', 'bulan' ),
			'section'     => $section,
			'type'        => 'group-title'
		);
			$options[$prefix . 'menu-current-hover-color'] = array(
				'id'          => $prefix . 'menu-current-hover-color',
				'label'       => __( 'Hover & current menu color', 'bulan' ),
				'section'     => $section,
				'type'        => 'color',
				'default'     => '#2196F3'
			);
			$options[$prefix . 'menu-current-hover-border-color'] = array(
				'id'          => $prefix . 'menu-current-hover-border-color',
				'label'       => __( 'Hover & current menu border color', 'bulan' ),
				'section'     => $section,
				'type'        => 'color',
				'default'     => '#2196F3'
			);

		// Page header colors
		$section = $prefix . 'page-header-colors-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Page Header', 'bulan' ),
			'description' => __( 'This colors are used for: Callout, taxonomy title and excerpt, post excerpt and search result text.', 'bulan' ),
			'priority'    => 20,
			'panel'       => $color_panel
		);
		$options[$prefix . 'page-header-title-color'] = array(
			'id'          => $prefix . 'page-header-title-color',
			'label'       => __( 'Title color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'page-header-excerpt-color'] = array(
			'id'          => $prefix . 'page-header-excerpt-color',
			'label'       => __( 'Excerpt color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#777777',
			'transport'   => 'postMessage'
		);

		// Posts grid colors
		$section = $prefix . 'posts-grid-colors-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Posts Grid', 'bulan' ),
			'description' => __( 'Posts grid is a list of posts displayed on home, archive and search page.', 'bulan' ),
			'priority'    => 20,
			'panel'       => $color_panel
		);
		$options[$prefix . 'grid-img-grayscale'] = array(
			'id'          => $prefix . 'grid-img-grayscale',
			'label'       => __( 'Image grayscale', 'bulan' ),
			'description' => __( 'Grayscale is the \'gray\' effect for the image. Please select the input and scroll up or down to choose the number.', 'bulan' ),
			'section'     => $section,
			'type'        => 'number',
			'default'     => '100',
			'input_attrs' => array(
				'min'   => 0,
				'max'   => 100,
				'step'  => 10
			),
		);
		$options[$prefix . 'grid-title-color'] = array(
			'id'          => $prefix . 'grid-title-color',
			'label'       => __( 'Title color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'grid-title-hover-color'] = array(
			'id'          => $prefix . 'grid-title-hover-color',
			'label'       => __( 'Title hover color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#2196F3'
		);
		$options[$prefix . 'grid-cat-color'] = array(
			'id'          => $prefix . 'grid-cat-color',
			'label'       => __( 'Category color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#777777',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'grid-cat-hover-color'] = array(
			'id'          => $prefix . 'grid-cat-hover-color',
			'label'       => __( 'Category hover color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#2196F3'
		);

		// Posts colors
		$section = $prefix . 'post-colors-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Posts', 'bulan' ),
			'description' => __( 'Used for single post only, please navigate the preview to the existing post.', 'bulan' ),
			'priority'    => 25,
			'panel'       => $color_panel
		);
		$options[$prefix . 'post-text-color'] = array(
			'id'          => $prefix . 'post-text-color',
			'label'       => __( 'Text color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'post-heading-color'] = array(
			'id'          => $prefix . 'post-heading-color',
			'label'       => __( 'Heading color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'post-link-color'] = array(
			'id'          => $prefix . 'post-link-color',
			'label'       => __( 'Link color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#2196F3',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'post-link-hover-color'] = array(
			'id'          => $prefix . 'post-link-hover-color',
			'label'       => __( 'Link hover color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#51adf6'
		);

		// Page colors
		$section = $prefix . 'page-colors-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Page', 'bulan' ),
			'description' => __( 'Used for page only, please navigate the preview to the existing page.', 'bulan' ),
			'priority'    => 30,
			'panel'       => $color_panel
		);
		$options[$prefix . 'page-text-color'] = array(
			'id'          => $prefix . 'page-text-color',
			'label'       => __( 'Text color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'page-heading-color'] = array(
			'id'          => $prefix . 'page-heading-color',
			'label'       => __( 'Heading color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'page-link-color'] = array(
			'id'          => $prefix . 'page-link-color',
			'label'       => __( 'Link color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#2196F3',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'page-link-hover-color'] = array(
			'id'          => $prefix . 'page-link-hover-color',
			'label'       => __( 'Link hover color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#51adf6'
		);

		// Footer colors
		$section = $prefix . 'footer-colors-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Footer', 'bulan' ),
			'priority'    => 35,
			'panel'       => $color_panel
		);
		$options[$prefix . 'footer-bg-color'] = array(
			'id'          => $prefix . 'footer-bg-color',
			'label'       => __( 'Background color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#f5f5f5',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'footer-text-color'] = array(
			'id'          => $prefix . 'footer-text-color',
			'label'       => __( 'Text color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'footer-link-color'] = array(
			'id'          => $prefix . 'footer-link-color',
			'label'       => __( 'Link color', 'bulan' ),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#454545',
			'transport'   => 'postMessage'
		);
		$options[$prefix . 'footer-social-color'] = array(
			'id'          => $prefix . 'footer-social-color',
			'label'       => __( 'Social color', 'bulan' ),
			'section'     => $section,
			'type'        => 'group-title'
		);
			$options[$prefix . 'footer-social-bg-color'] = array(
				'id'          => $prefix . 'footer-social-bg-color',
				'label'       => __( 'Background color', 'bulan' ),
				'section'     => $section,
				'type'        => 'color',
				'default'     => '#333333',
				'transport'   => 'postMessage'
			);
			$options[$prefix . 'footer-social-icon-color'] = array(
				'id'          => $prefix . 'footer-social-icon-color',
				'label'       => __( 'Icon color', 'bulan' ),
				'section'     => $section,
				'type'        => 'color',
				'default'     => '#ffffff',
				'transport'   => 'postMessage'
			);

	// Background Image Panels and Sections
	$bgimage_panel = 'bg_image';

	$panels[] = array(
		'id'       => $bgimage_panel,
		'title'    => __( 'Background Image', 'bulan' ),
		'priority' => 25
	);

	// Typography Panel and Sections
	$typo_panel = 'typography';

	$panels[] = array(
		'id'       => $typo_panel,
		'title'    => __( 'Typography', 'bulan' ),
		'priority' => 30
	);

		// Global typography
		$section = $prefix . 'global-typography';
		$font_choices = customizer_library_get_font_choices();

		$sections[] = array(
			'id'       => $section,
			'title'    => __( 'Global', 'bulan' ),
			'priority' => 5,
			'panel'    => $typo_panel
		);
		$options[$prefix . 'text-font'] = array(
			'id'          => $prefix . 'text-font',
			'label'       => __( 'Text font', 'bulan' ),
			'section'     => $section,
			'type'        => 'select2',
			'choices'     => $font_choices,
			'default'     => 'Crimson Text',
		);
		$options[$prefix . 'heading-font'] = array(
			'id'          => $prefix . 'heading-font',
			'label'       => __( 'Heading font', 'bulan' ),
			'section'     => $section,
			'type'        => 'select2',
			'choices'     => $font_choices,
			'default'     => 'Oswald',
		);

	// Content Panel and Sections
	$content_panel = 'content-layout';

	$panels[] = array(
		'id'       => $content_panel,
		'title'    => __( 'Content Layout', 'bulan' ),
		'priority' => 35
	);

		// Blog
		$section = $prefix . 'blog-layout-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Blog', 'bulan' ),
			'priority'    => 5,
			'panel'       => $content_panel
		);
		$options[$prefix . 'blog-content'] = array(
			'id'          => $prefix . 'blog-content',
			'label'       => __( 'Blog content', 'bulan' ),
			'section'     => $section,
			'type'        => 'radio',
			'default'     => 'content',
			'choices'     => array(
				'content' => __( 'Content', 'bulan' ),
				'excerpt' => __( 'Excerpt', 'bulan' )
			)
		);

		// Posts
		$section = $prefix . 'posts-layout-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Posts', 'bulan' ),
			'description' => __( 'Posts is a single post page. Please navigate the preview to the single post to see changes.', 'bulan' ),
			'priority'    => 10,
			'panel'       => $content_panel
		);
		$options[$prefix . 'post-meta-group'] = array(
			'id'          => $prefix . 'post-meta-group',
			'label'       => __( 'Post Meta', 'bulan' ),
			'section'     => $section,
			'type'        => 'group-title'
		);
			$options[$prefix . 'post-date'] = array(
				'id'          => $prefix . 'post-date',
				'label'       => __( 'Show post date', 'bulan' ),
				'section'     => $section,
				'type'        => 'switch',
				'default'     => 1
			);
			$options[$prefix . 'post-cat'] = array(
				'id'          => $prefix . 'post-cat',
				'label'       => __( 'Show post categories', 'bulan' ),
				'section'     => $section,
				'type'        => 'switch',
				'default'     => 1
			);
			$options[$prefix . 'post-tag'] = array(
				'id'          => $prefix . 'post-tag',
				'label'       => __( 'Show post tags', 'bulan' ),
				'section'     => $section,
				'type'        => 'switch',
				'default'     => 1
			);
			$options[$prefix . 'post-author'] = array(
				'id'          => $prefix . 'post-author',
				'label'       => __( 'Show post author box', 'bulan' ),
				'section'     => $section,
				'type'        => 'switch',
				'default'     => 1
			);
		$options[$prefix . 'post-date-group'] = array(
			'id'          => $prefix . 'post-date-group',
			'label'       => __( 'Post Date', 'bulan' ),
			'section'     => $section,
			'type'        => 'group-title'
		);
			$options[$prefix . 'post-date-style'] = array(
				'id'          => $prefix . 'post-date-style',
				'label'       => __( 'Style', 'bulan' ),
				'section'     => $section,
				'type'        => 'select',
				'default'     => 'absolute',
				'choices'     => array(
					'absolute' => __( 'Absolute (June 16, 2015)', 'bulan' ),
					'relative' => __( 'Relative (1 week ago)', 'bulan' )
				)
			);
		$options[$prefix . 'related-posts-group'] = array(
			'id'          => $prefix . 'related-posts-group',
			'label'       => __( 'Related Posts', 'bulan' ),
			'section'     => $section,
			'type'        => 'group-title'
		);
			$options[$prefix . 'related-posts-title'] = array(
				'id'          => $prefix . 'related-posts-title',
				'label'       => __( 'Related Posts Title', 'bulan' ),
				'section'     => $section,
				'type'        => 'text',
				'default'     => __( 'Related Posts', 'bulan' )
			);
			$options[$prefix . 'related-posts'] = array(
				'id'          => $prefix . 'related-posts',
				'label'       => __( 'Show related posts', 'bulan' ),
				'section'     => $section,
				'type'        => 'switch',
				'default'     => 1
			);
			$options[$prefix . 'related-posts-img'] = array(
				'id'          => $prefix . 'related-posts-img',
				'label'       => __( 'Show related posts thumbnail', 'bulan' ),
				'section'     => $section,
				'type'        => 'switch',
				'default'     => 1
			);

		// Page
		$section = $prefix . 'page-layout-section';

		$sections[] = array(
			'id'          => $section,
			'title'       => __( 'Page', 'bulan' ),
			'priority'    => 15,
			'panel'       => $content_panel
		);
		$options[$prefix . 'page-title'] = array(
			'id'          => $prefix . 'page-title',
			'label'       => __( 'Show page title', 'bulan' ),
			'section'     => $section,
			'type'        => 'switch',
			'default'     => 1
		);

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

}
add_action( 'init', 'bulan_customizer_register' );