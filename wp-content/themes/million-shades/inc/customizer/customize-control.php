<?php 
/**
 *  Customized Controls.
 *
 * @package million-shades
 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Million_Shades_Customized_Controls' ) ) :

/**
 * nl_Admin Class.
**/
class Million_Shades_Customized_Controls {

	/**
	 * Constructor.
	 */
	public function __construct() {
	    
	    add_action( 'customize_controls_print_styles', array( $this, 'million_shades_customizer_styles' ) );
	 
	}

public function million_shades_customizer_styles() { 

?>
<style>

.customize-control.customize-control-select span.customize-control-title{
	margin-bottom:10px;
}

#customize-control-scroll-up-icon span.customize-control-title {
	margin-top:20px;
}

#customize-control-order-by .customize-control-title {
	margin-top:20px;
}

#customize-controls .customize-section-title > .customize-control-notifications-container:not(.has-overlay-notifications) {
	display:none!important;
}
p.customizer-section-intro.customize-control-description {
	display:none!important;
}
</style>
<!--                       -->

<?php  

$nounderlines = array('blogname','blogdescription','forms-font-size',
'button-size','icon-size',
'pagination-font-size',
'single-meta-color','post-meta-color','post-per-page','enable-post-title',
'post-exerpt-length',
'title-length');


foreach ($nounderlines  as $control) { ?>

<style>

#customize-control-<?php echo esc_html($control) ?> span.customize-control-title {
	
	text-transform: uppercase;
	color: #58719E;
	font-size:12px;
	margin-bottom:7px;
}
</style>

<?php 
}
?>

<?php 

$leftControlss = array();
$leftControls  = array();
$leftControlss = million_shades_left_customize_controls();

foreach ($leftControlss  as $leftControls) { 
	foreach ($leftControls as $leftControl) {
?> 
<style>
#customize-control-<?php echo esc_html($leftControl) ?>{
		width:48%;
		margin:0 auto;
		float:left;
		display:inline;
		clear:none;
}

</style>
<?php 
}
}
?>


<?php  $lcontrolls = array('title-length'); 
foreach ($lcontrolls  as $lcontroll) { 
?>
<style>
#customize-control-<?php echo esc_html($lcontroll) ?> {
	width:48%;
	margin:0px auto;
	float:left;
	display:inline;
	clear:none;

} 

#customize-control-<?php echo esc_html($lcontroll) ?> span.customize-control-title {

	margin-bottom:3px ;
}
</style>
<?php 
}
?>


<?php  

$underlines = million_shades_underline_customized_control();
foreach ($underlines  as $control) { ?>

<style>

#customize-control-<?php echo esc_html($control) ?> span.customize-control-title {
	text-transform: uppercase;
	border-bottom:1px solid #58719E;
	color: #58719E;
	font-size:12px;
	margin-bottom:7px;
}

</style>

<?php 
}

?>
<?php 

$checkboxes = million_shades_checkbox_customized_control();

foreach ($checkboxes  as $control) { ?>

<style>

#customize-control-<?php echo esc_html($control) ?> label {
	text-transform: uppercase;
	
	color: #58719E;
	font-size:12px;
	margin-bottom:7px;
}

</style>

<?php 
}

?>

<?php 

$selectControls = array('site-header-alignment','blogdescription');


foreach ($selectControls  as $selectControl) { ?>

<style>

#customize-control-<?php echo esc_html($selectControl) ?> .customize-control-title {
		
		margin-bottom:15px;
		text-transform: uppercase;
		border-bottom:1px solid #58719E;
		color: #58719E;
		font-size:12px;
		
}

</style>

<?php 
}

?>

<style>
#customize-control-logo-width{
	width:45%;
	margin:0px auto;
	float:right;
	display:inline;
	clear:none;

}

#customize-control-logo-height{
		width:45%;
		margin:0px;
		float:left;
		display:inline;
		clear:none;
	
}

</style>




<style>
	#customize-control-overlay-margin-top{
		width:45%;
		margin:0px;
		float:left;
		display:inline;
		clear:none;
	}
	#customize-control-overlay-margin-right {
		width:50%;
		margin:0px auto;
		float:right;
		display:inline;
		clear:none;

	}
	#customize-control-overlay-margin-bottom {
		width:45%;
		margin:0px;
		float:left;
		display:inline;
		clear:none;
	}
	#customize-control-overlay-margin-left{
		width:50%;
		margin:0px auto;
		float:right;
		display:inline;
		clear:none;

	}
</style>	

	
<?php

}

}

endif;

return new Million_Shades_Customized_Controls();
