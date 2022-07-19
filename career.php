<?php
require_once("../../../../wp-load.php");
 
 if(isset($_POST['submit'])){

require_once( ABSPATH . 'wp-admin/includes/file.php' );

// you can add some kind of validation here
if( empty( $_FILES[ 'file' ] ) ) {
  wp_die( 'No files selected.' );
}

$upload = wp_handle_upload( 
  $_FILES[ 'file' ], 
  array( 'test_form' => false ) 
);

if( ! empty( $upload[ 'error' ] ) ) {
  wp_die( $upload[ 'error' ] );
}

// it is time to add our uploaded image into WordPress media library
$attachment_id = wp_insert_attachment(
  array(
    'guid'           => $upload[ 'url' ],
    'post_mime_type' => $upload[ 'type' ],
    'post_title'     => basename( $upload[ 'file' ] ),
    'post_content'   => '',
    'post_status'    => 'inherit',
  ),
  $upload[ 'file' ]
);

if( is_wp_error( $attachment_id ) || ! $attachment_id ) {
  wp_die( 'Upload error.' );
}

// update medatata, regenerate image sizes
require_once( ABSPATH . 'wp-admin/includes/image.php' );

wp_update_attachment_metadata(
  $attachment_id,
  wp_generate_attachment_metadata( $attachment_id, $upload[ 'file' ] )
);

// just redirect to the uploaded file
wp_safe_redirect( $upload[ 'url' ] );
 
 
 $filename1 = $upload[ 'url' ];

     
    $to = "rohitweotest@gmail.com"; // this is your Email address
  // $cc = "bsboby@gmail.com";
    $from = $_POST['crss_email']; // this is the sender's Email address
    $crss_name = $_POST['crss_name'];
    $crss_email = $_POST['crss_email'];
     $crss_cv_upload = $filename1;  
   $subject ="Career Form";  

	$mailBody = "
	Name: $crss_name
	Email: $crss_email
	CV: $crss_cv_upload";
    
      $headers = 'From: '. $crss_name .' <'. $crss_email .'>' . "\r\n";
 
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
		if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
				
				// Google secret API
                $secret_key = '6LeFaSEUAAAAAFAdnq8p10gwIOMEIZbXJBdENML04';
				
				// reCAPTCHA response verification
                $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
  
	     wp_mail($to,$subject,$mailBody,$headers);
     }
    header("Location: http://122.160.61.100/dev/nk/gj/carrer-thankyou/");  
  }
?>
