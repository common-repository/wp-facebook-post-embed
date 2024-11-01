<?php   
    /* 
    Plugin Name: Wordpress Facebook Post Embed 
    Plugin URI: http://www.thesoulofdesign.com 
    Description: Plugin for embedding  facebook posts into wordpress blog
    Author: Sunil Kumar Samanta
    Version: 1.0 
    Author URI: http://www.thesoulofdesign.com 
    */  
?>
<?php
function fb_post_embed_script() {  
?>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<?php
}  
  
add_action('wp_footer', 'fb_post_embed_script');

function fb_post_embed_shortcode( $atts, $content = null ) {
	return '<fb:post href="' . $content . '">' . '</fb:post>';
}
add_shortcode( 'fbembed', 'fb_post_embed_shortcode' );
?>