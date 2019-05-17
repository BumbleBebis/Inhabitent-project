<?php

function inhabitent_home_url(){
  return home_url();
}

function inhabitent_logo_url() {
  return 'Inhabitent Camping Supplies';
}

add_filter('login_headertitle', 'inhabitent_logo_url_title');

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri();
            ?>/images/logos/inhabitent-logo-full.svg);
		height:160px;
		width:160px;
		background-size: 160px 160px;
		background-repeat: no-repeat;
    padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>
