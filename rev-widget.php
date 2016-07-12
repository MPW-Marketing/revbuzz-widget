<?php
/*
Plugin Name: MPW Review Buzz Widget
Description:
Version: 0.1
Author: dmm
Text Domain: rev-buzz
*/

function review_buzz_widget ( $atts ) {
  $attribs = shortcode_atts( array(
       'review_id' => '',
       'review_link' => '',
   ), $atts );
   $rev_id = $attribs['review_id'];
   $rev_link = $attribs['review_link'];
  $cont = '<style>.review-buzz-widget img {width:170px;} .review-buzz-widget {z-index:999;position:fixed; top:140px; right:0px; width: 170px;} .homeBtn a {
 color: #fff;
}@media screen and (max-width:1023px) and (min-width:768px){.review-buzz-widget{top:222px;}}@media screen and (max-width:767px) {.review-buzz-widget{top:110px;}}</style>
<div class="review-buzz-widget"><!--Begin REVIEWBUZZ widget--><script type="text/javascript" src="//www.reviewbuzz.com/app/public/js/widget.js?id='.$rev_id.'"></script>
<noscript><a href="'.$rev_link.'" style="font-size:12px;"><img width="170" style="cursor: pointer" src="//www.reviewbuzz.com/app/public/images/popup-widget/reviewbuzz_widget_icon.png" alt=""><br>Customer Reviews </a></noscript><!--End REVIEWBUZZ widget--></div>
<script>function revResize() {
var main_cont_position = jQuery("#main_container");
var main_left = main_cont_position.position().left;
var main_width = main_cont_position.width();
var rev_buzz_width = jQuery(".review-buzz-widget").width();
var main_right = main_left + main_width - rev_buzz_width;
jQuery(".review-buzz-widget").css("left", main_right);
}
window.onresize = revResize;
jQuery(document).ready(function(){
revResize ();
});
</script>';

return $cont;
}
add_shortcode( 'rev_widget', 'review_buzz_widget' );
