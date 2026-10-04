<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function vits_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'vits_setup' );

function vits_about_template() {
	$path = trim( (string) parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
	$pages = array(
		'about-us' => 'about-page.php',
		'contact'  => 'contact-page.php',
		'services' => 'services-page.php',
	);
	if ( ! isset( $pages[ $path ] ) ) {
		return;
	}
	status_header( 200 );
	include get_stylesheet_directory() . '/' . $pages[ $path ];
	exit;
}
add_action( 'template_redirect', 'vits_about_template' );

function vits_register_enquiries() {
	register_post_type(
		'vits_enquiry',
		array(
			'labels'       => array(
				'name'          => 'Enquiries',
				'singular_name' => 'Enquiry',
			),
			'public'       => false,
			'show_ui'      => true,
			'show_in_menu' => true,
			'menu_icon'    => 'dashicons-email',
			'supports'     => array( 'title', 'editor' ),
		)
	);
}
add_action( 'init', 'vits_register_enquiries' );

function vits_save_enquiry() {
	check_ajax_referer( 'vits_enquiry', 'nonce' );

	$name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
	$phone   = preg_replace( '/\s+/', '', sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) ) );
	$email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
	$job     = sanitize_text_field( wp_unslash( $_POST['job'] ?? '' ) );
	$company = sanitize_text_field( wp_unslash( $_POST['company'] ?? '' ) );
	$city    = sanitize_text_field( wp_unslash( $_POST['city'] ?? '' ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

	$phone_ok = (bool) preg_match( '/^(?:\+91[\-]?)?[6-9]\d{9}$/', $phone );
	if ( $name === '' || ! $phone_ok || ! is_email( $email ) || $message === '' ) {
		wp_send_json_error( array( 'message' => 'Please check the required fields.' ), 400 );
	}

	$post_id = wp_insert_post(
		array(
			'post_type'    => 'vits_enquiry',
			'post_status'  => 'private',
			'post_title'   => $name . ' — ' . $email,
			'post_content' => $message,
		),
		true
	);
	if ( is_wp_error( $post_id ) ) {
		wp_send_json_error( array( 'message' => 'Could not save the enquiry.' ), 500 );
	}

	update_post_meta( $post_id, 'phone', $phone );
	update_post_meta( $post_id, 'email', $email );
	update_post_meta( $post_id, 'job', $job );
	update_post_meta( $post_id, 'company', $company );
	update_post_meta( $post_id, 'city', $city );

	$body  = "Name: $name\nPhone: $phone\nEmail: $email\nJob title: $job\nCompany: $company\nCity: $city\n\n$message";
	$headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );

	// Testing inbox. Switch this back to admin@venkatesh-it.co.in when the site goes live.
	$staff_sent = wp_mail( 'vridhigandhi29@gmail.com', 'New enquiry from ' . $name, $body, $headers );
	$guest_sent = wp_mail(
		$email,
		'We received your message — Venkatesh IT Solutions',
		"Hello $name,\n\nThank you for reaching out. Our team will review your request and get back to you.\n\nVenkatesh IT Solutions",
		array( 'Content-Type: text/plain; charset=UTF-8' )
	);

	wp_send_json_success(
		array(
			'saved'      => true,
			'staff_mail' => (bool) $staff_sent,
			'guest_mail' => (bool) $guest_sent,
		)
	);
}
add_action( 'wp_ajax_vits_enquiry', 'vits_save_enquiry' );
add_action( 'wp_ajax_nopriv_vits_enquiry', 'vits_save_enquiry' );
