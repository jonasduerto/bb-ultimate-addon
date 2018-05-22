<?php 
    $settings->input_text_color = UABB_Helper::uabb_colorpicker( $settings, 'input_text_color' );
    $settings->input_background_color = UABB_Helper::uabb_colorpicker( $settings, 'input_background_color', true );
    $settings->input_border_color = UABB_Helper::uabb_colorpicker( $settings, 'input_border_color' );
    $settings->input_border_active_color = UABB_Helper::uabb_colorpicker( $settings, 'input_border_active_color' );
    
    $settings->btn_text_color = UABB_Helper::uabb_colorpicker( $settings, 'btn_text_color' );
    $settings->btn_text_hover_color = UABB_Helper::uabb_colorpicker( $settings, 'btn_text_hover_color' );
    $settings->btn_background_color = UABB_Helper::uabb_colorpicker( $settings, 'btn_background_color', true );
    $settings->btn_background_hover_color = UABB_Helper::uabb_colorpicker( $settings, 'btn_background_hover_color', true );

    $settings->label_color = UABB_Helper::uabb_colorpicker( $settings, 'label_color' );

    $settings->input_border_width = ( $settings->input_border_width != '' ) ? $settings->input_border_width : '1';
    $settings->form_bg_color = UABB_Helper::uabb_colorpicker( $settings, 'form_bg_color', true );
    $settings->invalid_msg_color = UABB_Helper::uabb_colorpicker( $settings, 'invalid_msg_color' );
    $settings->success_msg_color = UABB_Helper::uabb_colorpicker( $settings, 'success_msg_color' );
    $settings->error_msg_color = UABB_Helper::uabb_colorpicker( $settings, 'error_msg_color' );
    $settings->invalid_border_color = UABB_Helper::uabb_colorpicker( $settings, 'invalid_border_color' );
    $settings->checkbox_color = UABB_Helper::uabb_colorpicker( $settings, 'checkbox_color' );
    $settings->terms_color = UABB_Helper::uabb_colorpicker( $settings, 'terms_color' );
?>
.fl-node-<?php echo $id; ?> {
	width: 100%;
}

/* Form Style */
.fl-node-<?php echo $id; ?> .uabb-contact-form {
	<?php if ( $settings->form_bg_type == 'color' ) { ?>
		background-color: <?php echo $settings->form_bg_color; ?>;
	<?php }elseif ( $settings->form_bg_type == 'image' ) { ?>
		background-image: url(<?php echo FLBuilderPhoto::get_attachment_data($settings->form_bg_img)->url; ?>);
		background-position: <?php echo $settings->form_bg_img_pos; ?>;
		background-size: <?php echo $settings->form_bg_img_size; ?>;
		background-repeat: <?php echo $settings->form_bg_img_repeat; ?>;
	<?php }elseif( $settings->form_bg_type == 'gradient' ) { ?>
		<?php UABB_Helper::uabb_gradient_css( $settings->form_bg_gradient ); ?>
	<?php } ?>
	<?php 
	if( isset( $settings->form_spacing ) && $settings->form_spacing != '' && isset( $settings->form_spacing_dimension_top ) && $settings->form_spacing_dimension_top == '' && isset( $settings->form_spacing_dimension_bottom ) && $settings->form_spacing_dimension_bottom == '' && isset( $settings->form_spacing_dimension_left ) && $settings->form_spacing_dimension_left == '' && isset( $settings->form_spacing_dimension_right ) && $settings->form_spacing_dimension_right == '' ) {
		echo $settings->form_spacing; ?>;
	<?php } else { ?>
		<?php  
	    if(isset($settings->form_spacing_dimension_top) ){
	        echo ( $settings->form_spacing_dimension_top != '' ) ? 'padding-top:'.$settings->form_spacing_dimension_top.'px;' : ''; 
	    }
	    if(isset($settings->form_spacing_dimension_bottom) ){
	        echo ( $settings->form_spacing_dimension_bottom != '' ) ? 'padding-bottom:'.$settings->form_spacing_dimension_bottom.'px;' : '';
	    }
	    if(isset($settings->form_spacing_dimension_left) ){
	        echo ( $settings->form_spacing_dimension_left != '' ) ? 'padding-left:'.$settings->form_spacing_dimension_left.'px;' : '';
	    }
	    if(isset($settings->form_spacing_dimension_right) ){
	        echo ( $settings->form_spacing_dimension_right != '' ) ? 'padding-right:'.$settings->form_spacing_dimension_right.'px;' : '';
	    }
	} 
	?>
	<?php if ( $settings->form_radius != ''  ) { ?>
		border-radius:<?php echo ($settings->form_radius != '') ? $settings->form_radius : '0'; ?>px;
	<?php } ?>
}

.fl-node-<?php echo $id; ?> .uabb-form-error-message-required {
	background: <?php echo $settings->invalid_msg_color; ?>;
}

.fl-node-<?php echo $id; ?> .uabb-form-error-message span {
	color: <?php echo $settings->invalid_msg_color; ?>;
}

.fl-node-<?php echo $id; ?> .uabb-success, 
.fl-node-<?php echo $id; ?> .uabb-success-none, 
.fl-node-<?php echo $id; ?> .uabb-success-msg {
	color: <?php echo $settings->success_msg_color; ?>;
}

.fl-node-<?php echo $id; ?> .uabb-send-error,
.fl-node-<?php echo $id; ?> .uabb-contact-error {
	color: <?php echo $settings->error_msg_color; ?>;
}

.fl-node-<?php echo $id; ?> .uabb-success-none, 
.fl-node-<?php echo $id; ?> .uabb-success-msg,
.fl-node-<?php echo $id; ?> .uabb-send-error,
.fl-node-<?php echo $id; ?> .uabb-contact-error {
	text-align: <?php echo $settings->error_msg_alignment; ?>;
}


.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap .uabb-error textarea, 
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap .uabb-error input[type=text], 
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap .uabb-error input[type=tel], 
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap .uabb-error input[type=email] {
	border-color: <?php echo $settings->invalid_border_color; ?>;
}

/* Input Fields CSS */
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap input,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap textarea {
	<?php if ( $settings->input_vertical_padding != '' ) { ?>
	padding-top: <?php echo $settings->input_vertical_padding; ?>px;
	padding-bottom: <?php echo $settings->input_vertical_padding; ?>px;
	<?php } ?>
	<?php if ( $settings->input_horizontal_padding != '' ) { ?>
	padding-left: <?php echo $settings->input_horizontal_padding; ?>px;
	padding-right: <?php echo $settings->input_horizontal_padding; ?>px;
	<?php } ?>
}

.fl-node-<?php echo $id; ?> .uabb-form-error-message::before {
	<?php if ( $settings->input_horizontal_padding != '' ) { ?>
	right: <?php echo $settings->input_horizontal_padding; ?>px;
	<?php } ?>
}

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap input,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap input:focus,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap textarea,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-checkbox span:before {
    border-radius: 0;
    text-align: <?php echo $settings->input_text_align; ?>;
    border-color: <?php echo uabb_theme_text_color( $settings->input_border_color ); ?>;
    color: <?php echo uabb_theme_text_color( $settings->input_text_color ); ?>;
    <?php if( $settings->input_background_color != '' ) { ?>
    background: <?php echo $settings->input_background_color; ?>;
    <?php } ?>
    border-width: <?php echo $settings->input_border_width; ?>px;
}

<?php if( $settings->input_border_active_color != '' ) { ?>
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap input:active,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap input:focus,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap textarea:active,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap textarea:focus,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-checkbox span:focus:before,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-checkbox span:active:before {
    border-color: <?php echo $settings->input_border_active_color; ?>;
}
<?php } ?>

/* Placeholder Colors */

.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group .uabb-error input::-webkit-input-placeholder,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group .uabb-error textarea::-webkit-input-placeholder {
	color: <?php echo $settings->invalid_msg_color; ?> !important;
}

.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group .uabb-error input:-moz-placeholder,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group .uabb-error textarea:-moz-placeholder { 		/* Firefox 18- */
	color: <?php echo $settings->invalid_msg_color; ?> !important;
}

.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group .uabb-error input::-moz-placeholder,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group .uabb-error textarea::-moz-placeholder {  	/* Firefox 19+ */
	color: <?php echo $settings->invalid_msg_color; ?> !important;
}

.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group .uabb-error input:-ms-input-placeholder,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group .uabb-error textarea:-ms-input-placeholder {  
	color: <?php echo $settings->invalid_msg_color; ?> !important;
}


.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group input::-webkit-input-placeholder,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group textarea::-webkit-input-placeholder {
	color: <?php echo uabb_theme_text_color( $settings->input_text_color ); ?>;
}

.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group input:-moz-placeholder,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group textarea:-moz-placeholder { 		/* Firefox 18- */
	color: <?php echo uabb_theme_text_color( $settings->input_text_color ); ?>;
	opacity: 1;
}

.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group input::-moz-placeholder,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group textarea::-moz-placeholder {  	/* Firefox 19+ */
	color: <?php echo uabb_theme_text_color( $settings->input_text_color ); ?>;
	opacity: 1;
}

.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group input:-ms-input-placeholder,
.fl-node-<?php echo $id; ?> .uabb-input-group-wrap .uabb-input-group textarea:-ms-input-placeholder {  
	color: <?php echo uabb_theme_text_color( $settings->input_text_color ); ?>;
}

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-form-outter {
	<?php echo ( $settings->input_top_margin != '' ) ? 'margin-top: '.$settings->input_top_margin.'px;' : '' ; ?>
	<?php echo ( $settings->input_bottom_margin != '' ) ? 'margin-bottom: '.$settings->input_bottom_margin.'px;' : 'margin-bottom: 10px;'; ?>
}

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-form-outter-textarea {
	<?php echo ( $settings->textarea_top_margin != '' ) ? 'margin-top: '.$settings->textarea_top_margin.'px;' : '' ; ?>
	<?php echo ( $settings->textarea_bottom_margin != '' ) ? 'margin-bottom: '.$settings->textarea_bottom_margin.'px;' : 'margin-bottom: 10px;'; ?>
}

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-submit-btn {
	<?php echo ( $settings->btn_top_margin != '' ) ? 'margin-top: '.$settings->btn_top_margin.'px;' : 'margin-top: 0;'; ?>
}

/* Label */

.fl-node-<?php echo $id; ?> .uabb-contact-form label {
	<?php echo ( $settings->label_top_margin != '' ) ? 'margin-top: '.$settings->label_top_margin.'px;' : '' ; ?>
	<?php echo ( $settings->label_bottom_margin != '' ) ? 'margin-bottom: '.$settings->label_bottom_margin.'px;' : ''; ?>
}

.fl-node-<?php echo $id; ?> .uabb-input-group.uabb-recaptcha > .uabb-grecaptcha {
	<?php echo ( $settings->input_top_margin != '' ) ? 'margin-top: '.$settings->input_top_margin.'px;' : '' ; ?>
	<?php echo ( $settings->input_bottom_margin != '' ) ? 'margin-bottom: '.$settings->input_bottom_margin.'px;' : 'margin-bottom: 10px;'; ?>
}

/* Button CSS */
<?php
$settings->btn_background_color = uabb_theme_button_bg_color( $settings->btn_background_color );
$settings->btn_background_hover_color = uabb_theme_button_bg_hover_color( $settings->btn_background_hover_color );
$settings->btn_text_color 		= uabb_theme_button_text_color( $settings->btn_text_color );
$settings->btn_text_hover_color = uabb_theme_button_text_hover_color( $settings->btn_text_hover_color );

$settings->btn_border_width = ( isset( $settings->btn_border_width ) && $settings->btn_border_width != '' ) ? $settings->btn_border_width : '2';



// Border Size & Border Color

if ( $settings->btn_style == 'transparent' ) {
	$border_size = $settings->btn_border_width;
	$border_color = $settings->btn_background_color;
	$border_hover_color =  $settings->btn_background_hover_color ;
}


// Background Gradient
if ( $settings->btn_style == 'gradient' ) {
	if ( ! empty( $settings->btn_background_color ) ) {
		$bg_grad_start = '#'.FLBuilderColor::adjust_brightness( uabb_parse_color_to_hex( $settings->btn_background_color ), 30, 'lighten' );
	}
	if ( ! empty( $settings->btn_background_hover_color ) ) {
		$bg_hover_grad_start = '#'.FLBuilderColor::adjust_brightness( uabb_parse_color_to_hex( $settings->btn_background_hover_color ), 30, 'lighten' );
	}
}

if( $settings->msg_height != '' ) {
?>

.fl-node-<?php echo $id; ?> .uabb-contact-form textarea {
	min-height: <?php echo $settings->msg_height; ?>px;
}

<?php
}
if( isset( $settings->btn_icon ) && isset( $settings->btn_icon_position ) ) {
?>
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-contact-form-submit i {
<?php
	echo ( $settings->btn_icon != '' && $settings->btn_icon_position == 'before' ) ? 'margin-right: 8px;' : '';
	echo ( $settings->btn_icon != '' && $settings->btn_icon_position == 'after' ) ? 'margin-left: 8px;' : '';
?>
}
<?php
}
?>

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-contact-form-submit i,
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-contact-form-submit span {
	display: inline-block;
	vertical-align: middle;
}

<?php
if ( $settings->btn_align != 'full' ) { ?>
.fl-node-<?php echo $id; ?> .uabb-submit-btn {
	text-align: <?php echo $settings->btn_align; ?>;
}
<?php } ?>

.fl-builder-content .fl-node-<?php echo $id; ?> .uabb-module-content.uabb-contact-form .uabb-contact-form-submit {
	border-radius: <?php echo  ( $settings->btn_radius != '' ) ? $settings->btn_radius : '4'; ?>px;
	
	<?php if ( $settings->btn_style == 'flat' ) { ?>
		background: <?php echo uabb_theme_base_color( $settings->btn_background_color ); ?>;
	<?php }elseif ( $settings->btn_style == 'transparent' ) { ?>
		background-color: rgba(0, 0, 0, 0);
		border-style: solid;
		border-color: <?php echo $border_color; ?>;
		border-width: <?php echo $settings->btn_border_width; ?>px;
	<?php }elseif ( $settings->btn_style == 'gradient' ) { ?>
		background: -moz-linear-gradient(top,  <?php echo $bg_grad_start; ?> 0%, <?php echo $settings->btn_background_color; ?> 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $bg_grad_start; ?>), color-stop(100%,<?php echo $settings->btn_background_color; ?>)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  <?php echo $bg_grad_start; ?> 0%,<?php echo $settings->btn_background_color; ?> 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  <?php echo $bg_grad_start; ?> 0%,<?php echo $settings->btn_background_color; ?> 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  <?php echo $bg_grad_start; ?> 0%,<?php echo $settings->btn_background_color; ?> 100%); /* IE10+ */
		background: linear-gradient(to bottom,  <?php echo $bg_grad_start; ?> 0%,<?php echo $settings->btn_background_color; ?> 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $bg_grad_start; ?>', endColorstr='<?php echo $settings->btn_background_color; ?>',GradientType=0 ); /* IE6-9 */
	<?php }elseif ( $settings->btn_style == '3d' ) { ?>
		position: relative;
		-webkit-transition: none;
		   -moz-transition: none;
				transition: none;
		background: <?php echo uabb_theme_base_color( $settings->btn_background_color ); ?>;
		<?php $shadow_color = "#" . FLBuilderColor::adjust_brightness( uabb_parse_color_to_hex( $settings->btn_background_color ), 30, 'darken' ); ?>
		box-shadow: 0 6px <?php echo $shadow_color; ?>;
	<?php } ?>

	color: <?php echo uabb_theme_text_color( $settings->btn_text_color ); ?>;
	
	<?php if ( $settings->btn_align == 'full' ) { ?>
		width:100%;
	<?php } ?>
	padding: <?php echo uabb_theme_button_padding( '' ); ?>;
	<?php
	echo ( $settings->btn_vertical_padding != '' ) ? 'padding-top: ' . $settings->btn_vertical_padding . 'px;padding-bottom: ' . $settings->btn_vertical_padding . 'px;' : '';
	echo ( $settings->btn_horizontal_padding != '' ) ? 'padding-left: ' . $settings->btn_horizontal_padding . 'px;padding-right: ' . $settings->btn_horizontal_padding . 'px;' : '';
	?>
}


.fl-builder-content .fl-node-<?php echo $id; ?> .uabb-module-content.uabb-contact-form .uabb-contact-form-submit:hover {
	<?php if ( $settings->btn_style == 'flat' ) { ?>
		<?php if( $settings->btn_text_hover_color != '' ) { ?>
		color: <?php echo $settings->btn_text_hover_color; ?>;
		<?php } ?>

		<?php if( $settings->btn_background_hover_color != '' ) { ?>
		background: <?php echo $settings->btn_background_hover_color; ?>;
		<?php } ?>
	<?php }elseif ( $settings->btn_style == 'transparent' ) { ?>
		<?php if( $settings->btn_text_hover_color != '' ) { ?>
		color: <?php echo $settings->btn_text_hover_color; ?>;
		<?php } ?>

		border-style: solid;
		border-color: <?php echo $border_hover_color; ?>;

		<?php
		if( $settings->hover_attribute != 'border' ) {
		?>
			background:<?php echo $border_hover_color; ?>;
		<?php
		}
		?>
		
		border-width: <?php echo $settings->btn_border_width; ?>px;
	<?php }elseif ( $settings->btn_style == 'gradient' ) { ?>
		<?php if( $settings->btn_text_hover_color != '' ) { ?>
		color: <?php echo $settings->btn_text_hover_color; ?>;
		<?php } ?>

		background: -moz-linear-gradient(top,  <?php echo $bg_hover_grad_start; ?> 0%, <?php echo $settings->btn_background_hover_color; ?> 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $bg_hover_grad_start; ?>), color-stop(100%,<?php echo $settings->btn_background_hover_color; ?>)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  <?php echo $bg_hover_grad_start; ?> 0%,<?php echo $settings->btn_background_hover_color; ?> 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  <?php echo $bg_hover_grad_start; ?> 0%,<?php echo $settings->btn_background_hover_color; ?> 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  <?php echo $bg_hover_grad_start; ?> 0%,<?php echo $settings->btn_background_hover_color; ?> 100%); /* IE10+ */
		background: linear-gradient(to bottom,  <?php echo $bg_hover_grad_start; ?> 0%,<?php echo $settings->btn_background_hover_color; ?> 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $bg_hover_grad_start; ?>', endColorstr='<?php echo $settings->btn_background_hover_color; ?>',GradientType=0 ); /* IE6-9 */
	<?php }elseif ( $settings->btn_style == '3d' ) { ?>
		top: 2px;
		box-shadow: 0 4px <?php echo uabb_theme_base_color( $shadow_color ); ?>;
	<?php } ?>

}


.fl-builder-content .fl-node-<?php echo $id; ?> .uabb-module-content.uabb-contact-form .uabb-contact-form-submit:active {
	<?php if ( $settings->btn_style == '3d' ) { ?>
		top: 6px;
		box-shadow: 0 0px <?php echo uabb_theme_base_color( $shadow_color ); ?>;
	<?php } ?>
}


/* Typography CSS */
.fl-node-<?php echo $id; ?> .uabb-contact-form input,
.fl-node-<?php echo $id; ?> .uabb-contact-form textarea {
	
	<?php if( $settings->font_family['family'] != "Default") : ?>
		<?php UABB_Helper::uabb_font_css( $settings->font_family ); ?>
	<?php endif; ?>
    
    <?php if( isset( $settings->font_size_unit ) && $settings->font_size_unit == '' && isset( $settings->font_size['desktop'] ) && $settings->font_size['desktop'] != '' ) { ?>
        font-size: <?php echo $settings->font_size['desktop']; ?>px;
        line-height: <?php echo $settings->font_size['desktop'] + 2; ?>px;
    <?php } else { ?>
        <?php if( isset( $settings->font_size_unit ) && $settings->font_size_unit != '' ) : ?>
            font-size: <?php echo $settings->font_size_unit; ?>px;
            <?php if( $settings->line_height_unit == '' ) ?>
				line-height: <?php echo $settings->font_size_unit + 2; ?>px;
		    <?php endif; ?>
    <?php } ?>
    
    <?php if( isset( $settings->font_size['desktop'] ) && $settings->font_size['desktop'] == '' && isset( $settings->line_height['desktop'] ) && $settings->line_height['desktop'] != '' && $settings->line_height_unit == '' ) { ?>
	 line-height: <?php echo $settings->line_height['desktop']; ?>px;
	<?php } ?>
    
    <?php if( isset( $settings->line_height_unit ) && $settings->line_height_unit == '' && isset( $settings->line_height['desktop'] ) && $settings->line_height['desktop'] != '' ) { ?>
        line-height: <?php echo $settings->line_height['desktop']; ?>px;
    <?php } else { ?>
	    <?php if( isset( $settings->line_height_unit ) && $settings->line_height_unit != '' ) : ?>
	        line-height: <?php echo $settings->line_height_unit; ?>em;
	    <?php endif; ?>
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .uabb-contact-form-submit {
	<?php $uabb_theme_btn_family = apply_filters( 'uabb_theme_button_font_family', '' ); ?>
	
	<?php if ( uabb_theme_button_letter_spacing('') != '' ) { ?>
	letter-spacing: <?php echo uabb_theme_button_letter_spacing(''); ?>;
	<?php } ?>

	<?php if ( uabb_theme_button_text_transform('') != '' ) { ?>
	text-transform: <?php echo uabb_theme_button_text_transform(''); ?>;
	<?php } ?>

	<?php if( $settings->btn_font_family['family'] != "Default") : ?>
		<?php UABB_Helper::uabb_font_css( $settings->btn_font_family ); ?>
	<?php else : ?>
		<?php if( isset( $uabb_theme_btn_family['family'] ) ) { ?>
		font-family: <?php echo $uabb_theme_btn_family['family']; ?>;
		<?php } ?> 
		
		<?php if ( isset( $uabb_theme_btn_family['weight'] ) ) { ?>
		font-weight: <?php echo $uabb_theme_btn_family['weight']; ?>;
		<?php } ?>
	<?php endif; ?>
 
	
	<?php if( isset( $settings->btn_font_size_unit ) && $settings->btn_font_size_unit == '' && isset( $settings->btn_font_size['desktop'] ) && $settings->btn_font_size['desktop'] != '' ) { ?>
        font-size: <?php echo $settings->btn_font_size['desktop']; ?>px;
        line-height: <?php echo $settings->btn_font_size['desktop'] + 2; ?>px;
    <?php } else { ?>
        <?php if( isset( $settings->btn_font_size_unit ) && $settings->btn_font_size_unit != '' ) : ?>
            font-size: <?php echo $settings->btn_font_size_unit; ?>px;
            <?php if( $settings->btn_line_height_unit == '' ) ?>
				line-height: <?php echo $settings->btn_font_size_unit + 2; ?>px;
			<?php else : ?>
				<?php if ( uabb_theme_button_font_size('') != '' ) { ?>
					font-size: <?php echo uabb_theme_button_font_size(''); ?>;
				<?php } ?>
        <?php endif; ?>
    <?php } ?>

    <?php if( isset( $settings->btn_font_size['desktop'] ) && $settings->btn_font_size['desktop'] == '' && isset( $settings->btn_line_height['desktop'] ) && $settings->btn_line_height['desktop'] != '' && $settings->btn_line_height_unit == '' ) { ?>
		line-height: <?php echo $settings->btn_line_height['desktop']; ?>px;
	<?php } ?>
    
     <?php if( isset( $settings->btn_line_height_unit ) && $settings->btn_line_height_unit == '' && isset( $settings->btn_line_height['desktop'] ) && $settings->btn_line_height['desktop'] != '' ) { ?>
        line-height: <?php echo $settings->btn_line_height['desktop']; ?>px;
    <?php } else { ?>
	    <?php if( isset( $settings->btn_line_height_unit ) && $settings->btn_line_height_unit != '' ) : ?>
	        line-height: <?php echo $settings->btn_line_height_unit; ?>em;
	        <?php else : ?>
				<?php if ( uabb_theme_button_line_height('') != '' ) { ?>
					line-height: <?php echo uabb_theme_button_line_height(''); ?>;
				<?php } ?>
	    <?php endif; ?>
    <?php } ?>

}

<?php if ( $settings->form_style == 'style1' && $settings->enable_label == 'yes' ) { ?>
.fl-node-<?php echo $id; ?> .uabb-contact-form label {
	<?php if( $settings->label_font_family['family'] != "Default") : ?>
		<?php UABB_Helper::uabb_font_css( $settings->label_font_family ); ?>
	<?php endif; ?>
    
    <?php if( isset( $settings->label_font_size_unit ) && $settings->label_font_size_unit == '' && isset( $settings->label_font_size['desktop'] ) && $settings->label_font_size['desktop'] != '' ) { ?>
        font-size: <?php echo $settings->label_font_size['desktop']; ?>px;
    <?php } else { ?>
        <?php if( isset( $settings->label_font_size_unit ) && $settings->label_font_size_unit != '' ) : ?>
            font-size: <?php echo $settings->label_font_size_unit; ?>px;
        <?php endif; ?>
    <?php } ?>
    
    <?php if( isset( $settings->label_font_size['desktop'] ) && $settings->label_font_size['desktop'] == '' && isset( $settings->label_line_height['desktop'] ) && $settings->label_line_height['desktop'] != '' && $settings->label_line_height_unit == '' ) { ?>
		line-height: <?php echo $settings->label_line_height['desktop']; ?>px;
	<?php } ?>
    
    <?php if( isset( $settings->label_line_height_unit ) && $settings->label_line_height_unit == '' && isset( $settings->label_line_height['desktop'] ) && $settings->label_line_height['desktop'] != '' ) { ?>
        line-height: <?php echo $settings->label_line_height['desktop']; ?>px;
    <?php } else { ?>
    <?php if( isset( $settings->label_line_height_unit ) && $settings->label_line_height_unit != '' ) : ?>
        line-height: <?php echo $settings->label_line_height_unit; ?>em;
    <?php endif; ?>
    <?php } ?>
	
	<?php if( $settings->label_color != '' ) : ?>
	color: <?php echo $settings->label_color; ?>;
	<?php endif; ?>
}
<?php } ?>

<?php if ( $settings->terms_checkbox == 'show' ) { ?>
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-label {
	<?php if( $settings->checkbox_font_family['family'] != "Default") : ?>
		<?php UABB_Helper::uabb_font_css( $settings->checkbox_font_family ); ?>
	<?php endif; ?>

	<?php if( isset( $settings->checkbox_font_size ) && $settings->checkbox_font_size != '' ) : ?>
	font-size: <?php echo $settings->checkbox_font_size; ?>px;
	<?php endif; ?>

	<?php if( isset( $settings->checkbox_line_height ) && $settings->checkbox_line_height != '' ) : ?>
	line-height: <?php echo $settings->checkbox_line_height; ?>em;
	<?php endif; ?>

	<?php if ( isset( $settings->checkbox_color ) && $settings->checkbox_color != '' ) : ?>

	transition: color 300ms ease;
	color: <?php echo ( false === strpos( $settings->checkbox_color, 'rgb' ) ) ? $settings->checkbox_color : $settings->checkbox_color; ?>;
	<?php endif; ?> 

	<?php if( $settings->checkbox_text_transform != '' ) : ?>
	text-transform: <?php echo $settings->checkbox_text_transform; ?>;
	<?php endif; ?>

	<?php if( $settings->checkbox_text_letter_spacing != '' ) { ?>
	letter-spacing: <?php echo $settings->checkbox_text_letter_spacing; ?>px;
	<?php } ?>
}
<?php } ?>

<?php if ( $settings->terms_checkbox == 'show' ) { ?>
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-text {
	<?php if( $settings->terms_font_family['family'] != "Default") : ?>
		<?php UABB_Helper::uabb_font_css( $settings->terms_font_family ); ?>
	<?php endif; ?>

	<?php if( isset( $settings->terms_font_size ) && $settings->terms_font_size != '' ) : ?>
	font-size: <?php echo $settings->terms_font_size; ?>px;
	<?php endif; ?>

	<?php if( isset( $settings->terms_line_height ) && $settings->terms_line_height != '' ) : ?>
	line-height: <?php echo $settings->terms_line_height; ?>em;
	<?php endif; ?>

	<?php if ( isset( $settings->terms_color ) && $settings->terms_color != ''  ) : ?>
	transition: color 300ms ease;
	color: <?php echo ( false === strpos( $settings->terms_color, 'rgb' ) ) ?  $settings->terms_color : $settings->terms_color; ?>;
	<?php endif; ?>

	<?php if( $settings->terms_text_transform != '' ) : ?>
	text-transform: <?php echo $settings->terms_text_transform; ?>;
	<?php endif; ?>

	<?php if( $settings->terms_text_letter_spacing != '' ) { ?>
	letter-spacing: <?php echo $settings->terms_text_letter_spacing; ?>px;
	<?php } ?>	
}
<?php } ?>

<!-- Terms and Conditions code starts here -->

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap input[type="checkbox"] + span:before {
	background: #fafafa;
}
<?php
$font_size = intval($settings->checkbox_size);
$checked_width = $font_size - intval($settings->checkbox_border_width);
?>
.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap input[type="checkbox"] {
    display: none;
}

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-checkbox .checkbox-label {
    padding-left: 0px;
    -webkit-padding-start: 0px;
}

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap .uabb-terms-label input[type="checkbox"] + span:before {
    content: '';
    <?php  if (  isset($settings->checkbox_bgcolor) && $settings->checkbox_bgcolor != '' ) : ?>
		transition: background-color 300ms ease;
    background-color: <?php echo ( false === strpos( $settings->checkbox_bgcolor, 'rgb' ) ) ? '#' . $settings->checkbox_bgcolor : $settings->checkbox_bgcolor; ?>; 
	<?php endif; ?>
    border-width: <?php echo $settings->checkbox_border_width ?>px;
    border-color: #<?php echo $settings->checkbox_border_color  ?>;
    vertical-align: middle;
    width: <?php echo $settings->checkbox_size ?>px;
    height: <?php echo $settings->checkbox_size ?>px;
    padding: 2px;
    margin-right: 10px;
    text-align: center;
    display: inline-flex;
	align-items: center;
	align-content: center;
}

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap input[type="checkbox"]:checked + span:before {
    content: "\2714";
    font-weight: bold;
    font-size: <?php echo $checked_width ?>px;
    line-height: <?php echo $checked_width ?>px;
    padding-top: 2px;
    color: #<?php echo $settings->checkbox_selected_color ?>;
}

.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-input-group-wrap input[type="checkbox"] + span:before {
    border-radius: <?php echo $settings->checkbox_border_radius ?>px;
}

<!-- Terms and Conditions code ends here -->

/* Typography responsive css */
<?php if($global_settings->responsive_enabled) { // Global Setting If started ?>

	@media ( max-width: <?php echo $global_settings->medium_breakpoint .'px'; ?> ) {
		.fl-node-<?php echo $id; ?> .uabb-contact-form input,
		.fl-node-<?php echo $id; ?> .uabb-contact-form textarea {

		    <?php if( isset( $settings->font_size_unit_medium ) && $settings->font_size_unit_medium == '' && isset( $settings->font_size['medium'] ) && $settings->font_size['medium'] != '' ) { ?>
		        font-size: <?php echo $settings->font_size['medium']; ?>px;
		        line-height: <?php echo $settings->font_size['medium'] + 2; ?>px;
		    <?php } else { ?>
		        <?php if( isset( $settings->font_size_unit_medium ) && $settings->font_size_unit_medium != '' ) : ?>
		            font-size: <?php echo $settings->font_size_unit_medium; ?>px;
		            <?php if($settings->line_height_unit_medium == "") ?>
						line-height: <?php echo $settings->font_size_unit_medium + 2; ?>px;
		        <?php endif; ?>
		    <?php } ?>
		    
		    <?php if( isset( $settings->font_size['medium'] ) && $settings->font_size['medium'] == '' && isset( $settings->line_height['medium'] ) && $settings->line_height['medium'] != '' && $settings->line_height_unit_medium == '' &&  $settings->line_height_unit == '') { ?>
			    line-height: <?php echo $settings->line_height['medium']; ?>px;
			<?php } ?>
	        
	        <?php if( isset( $settings->line_height_unit_medium ) && $settings->line_height_unit_medium == '' && isset( $settings->line_height['medium'] ) && $settings->line_height['medium'] != '' ) { ?>
                line-height: <?php echo $settings->line_height['medium']; ?>px;
            <?php } else { ?>
                <?php if( isset( $settings->line_height_unit_medium ) && $settings->line_height_unit_medium != '' ) : ?>
                    line-height: <?php echo $settings->line_height_unit_medium; ?>em;
                <?php endif; ?>
            <?php } ?>
		}


		.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-text {
			<?php if( isset( $settings->terms_font_size_medium ) && $settings->terms_font_size_medium != '' ) : ?>
				font-size: <?php echo $settings->terms_font_size_medium; ?>px;
			<?php endif; ?>
		    
			<?php if( isset( $settings->terms_line_height_medium ) && $settings->terms_line_height_medium != '' ) : ?>
				line-height: <?php echo $settings->terms_line_height_medium; ?>em;
			<?php endif; ?>
		}

		.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-label {
			<?php if( isset( $settings->checkbox_font_size_medium ) && $settings->checkbox_font_size_medium != '' ) : ?>
				font-size: <?php echo $settings->checkbox_font_size_medium; ?>px;
			<?php endif; ?>
		    
			<?php if( isset( $settings->checkbox_line_height_medium ) && $settings->checkbox_line_height_medium != '' ) : ?>
				line-height: <?php echo $settings->checkbox_line_height_medium; ?>em;
			<?php endif; ?>
		}

		.fl-node-<?php echo $id; ?> .uabb-contact-form-submit {

		    <?php if( isset( $settings->btn_font_size_unit_medium ) && $settings->btn_font_size_unit_medium == '' && isset( $settings->btn_font_size['medium'] ) && $settings->btn_font_size['medium'] != '' ) { ?>
                font-size: <?php echo $settings->btn_font_size['medium']; ?>px;
                line-height: <?php echo  $settings->btn_font_size['medium'] + 2; ?>px;
            <?php } else { ?>
                <?php if( isset( $settings->btn_font_size_unit_medium ) && $settings->btn_font_size_unit_medium != '' ) : ?>
                    font-size: <?php echo $settings->btn_font_size_unit_medium; ?>px;
                    <?php if( $settings->btn_line_height_unit_medium == "" ) ?>
						line-height: <?php echo  $settings->btn_font_size_unit_medium + 2; ?>px;
                <?php endif; ?>
            <?php } ?>
	        
	        <?php if( isset( $settings->btn_font_size['medium'] ) && $settings->btn_font_size['medium'] == '' && isset( $settings->btn_line_height['medium'] ) && $settings->btn_line_height['medium'] != '' && $settings->btn_line_height_unit_medium == '' && $settings->btn_line_height_unit == '') { ?>
			    line-height: <?php echo $settings->btn_line_height['medium']; ?>px;
			<?php } ?>
            
            <?php if( isset( $settings->btn_line_height_unit_medium ) && $settings->btn_line_height_unit_medium == '' && isset( $settings->btn_line_height['medium'] ) && $settings->btn_line_height['medium'] != '' ) { ?>
                line-height: <?php echo $settings->btn_line_height['medium']; ?>px;
            <?php } else { ?>
                <?php if( isset( $settings->btn_line_height_unit_medium ) && $settings->btn_line_height_unit_medium != '' ) : ?>
                    line-height: <?php echo $settings->btn_line_height_unit_medium; ?>em;
                <?php endif; ?>
            <?php } ?>	
		}

		<?php if ( $settings->form_style == 'style1' && $settings->enable_label == 'yes' ) { ?>
			.fl-node-<?php echo $id; ?> .uabb-contact-form label {

			    <?php if( isset( $settings->label_font_size_unit_medium ) && $settings->label_font_size_unit_medium == '' && isset( $settings->label_font_size['medium'] ) && $settings->label_font_size['medium'] != '' ) { ?>
	                font-size: <?php echo $settings->label_font_size['medium']; ?>px;
	                line-height: <?php echo  $settings->label_font_size['medium'] + 2; ?>px;
	            <?php } else { ?>
	                <?php if( isset( $settings->label_font_size_unit_medium ) && $settings->label_font_size_unit_medium != '' ) : ?>
	                    font-size: <?php echo $settings->label_font_size_unit_medium; ?>px;
	                    <?php if( $settings->label_line_height_unit_medium == "" )?>
							line-height: <?php echo  $settings->label_font_size_unit_medium + 2; ?>px;
	                <?php endif; ?>
	            <?php } ?>
			    
			    <?php if( isset( $settings->label_font_size['medium'] ) && $settings->label_font_size['medium'] == '' && isset( $settings->label_line_height['medium'] ) && $settings->label_line_height['medium'] != '' && $settings->label_line_height_unit_medium == '' &&  $settings->label_line_height_unit == '' ) { ?>
				    line-height: <?php echo $settings->label_line_height['medium']; ?>px;
				<?php } ?>
                
                <?php if( isset( $settings->label_line_height_unit_medium ) && $settings->label_line_height_unit_medium == '' && isset( $settings->label_line_height['medium'] ) && $settings->label_line_height['medium'] != '' ) { ?>
	                line-height: <?php echo $settings->label_line_height['medium']; ?>px;
	            <?php } else { ?>
	                <?php if( isset( $settings->label_line_height_unit_medium ) && $settings->label_line_height_unit_medium != '' ) : ?>
	                    line-height: <?php echo $settings->label_line_height_unit_medium; ?>em;
	                <?php endif; ?>
	            <?php } ?>
           }
		<?php } ?>

		.fl-node-<?php echo $id; ?> .uabb-contact-form {
			<?php 
 			    if(isset($settings->form_spacing_dimension_top_medium) ){
 			        echo ( $settings->form_spacing_dimension_top_medium != '' ) ? 'padding-top:'.$settings->form_spacing_dimension_top_medium.'px;' : ''; 
 			    }
 			    if(isset($settings->form_spacing_dimension_bottom_medium) ){
 			        echo ( $settings->form_spacing_dimension_bottom_medium != '' ) ? 'padding-bottom:'.$settings->form_spacing_dimension_bottom_medium.'px;' : '';
 			    }
 			    if(isset($settings->form_spacing_dimension_left_medium) ){
 			        echo ( $settings->form_spacing_dimension_left_medium != '' ) ? 'padding-left:'.$settings->form_spacing_dimension_left_medium.'px;' : '';
 			    }
 			    if(isset($settings->form_spacing_dimension_right_medium) ){
 			        echo ( $settings->form_spacing_dimension_right_medium != '' ) ? 'padding-right:'.$settings->form_spacing_dimension_right_medium.'px;' : '';
 			    } 
			?>
		}
	}

	@media ( max-width: <?php echo $global_settings->responsive_breakpoint .'px'; ?> ) {
		.fl-node-<?php echo $id; ?> .uabb-contact-form input,
		.fl-node-<?php echo $id; ?> .uabb-contact-form textarea {    

		    <?php if( isset( $settings->font_size_unit_responsive ) && $settings->font_size_unit_responsive == '' && isset( $settings->font_size['small'] ) && $settings->font_size['small'] != '' ) { ?>
                font-size: <?php echo $settings->font_size['small']; ?>px;
                line-height: <?php echo  $settings->font_size['small'] + 2; ?>px;
            <?php } else { ?>
                <?php if( isset( $settings->font_size_unit_responsive ) && $settings->font_size_unit_responsive != '' ) : ?>
                    font-size: <?php echo $settings->font_size_unit_responsive; ?>px;
                    <?php if( $settings->line_height_unit_responsive == "" )?>
						line-height: <?php echo  $settings->font_size_unit_responsive + 2; ?>px;
                <?php endif; ?>
            <?php } ?>
		    
		      <?php if( isset( $settings->font_size['small'] ) && $settings->font_size['small'] == '' && isset( $settings->line_height['small'] ) && $settings->line_height['small'] != '' &&  $settings->line_height_unit_responsive == '' &&  $settings->line_height_unit_medium == '' &&  $settings->line_height_unit == '' ) :?>
			    line-height: <?php echo $settings->line_height['small']; ?>px;
			<?php endif; ?> 

			<?php if( isset( $settings->line_height_unit_responsive ) && $settings->line_height_unit_responsive != '' ) : ?>
				line-height: <?php echo $settings->line_height_unit_responsive; ?>em;
			<?php endif; ?>		
		}

		.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-text {
			<?php if( isset( $settings->terms_font_size_responsive ) && $settings->terms_font_size_responsive != '' ) : ?>
				font-size: <?php echo $settings->terms_font_size_responsive; ?>px;
			<?php endif; ?>
		    
			<?php if( isset( $settings->terms_line_height_responsive ) && $settings->terms_line_height_responsive != '' ) : ?>
				line-height: <?php echo $settings->terms_line_height_responsive; ?>em;
			<?php endif; ?>
		}

		.fl-node-<?php echo $id; ?> .uabb-contact-form .uabb-terms-label {    
			<?php if( isset( $settings->checkbox_font_size_responsive ) && $settings->checkbox_font_size_responsive != '' ) : ?>
				font-size: <?php echo $settings->checkbox_font_size_responsive; ?>px;
			<?php endif; ?>
		    
			<?php if( isset( $settings->checkbox_line_height_responsive ) && $settings->checkbox_line_height_responsive != '' ) : ?>
				line-height: <?php echo $settings->checkbox_line_height_responsive; ?>em;
			<?php endif; ?>	            

            <?php if( isset( $settings->line_height_unit_responsive ) && $settings->line_height_unit_responsive == '' && isset( $settings->line_height['small'] ) && $settings->line_height['small'] != '' ) { ?>
                line-height: <?php echo $settings->line_height['small']; ?>px;
            <?php } else { ?>
                <?php if( isset( $settings->line_height_unit_responsive ) && $settings->line_height_unit_responsive != '' ) : ?>
                    line-height: <?php echo $settings->line_height_unit_responsive; ?>em;
                <?php endif; ?>
            <?php } ?>	
			
		}

		.fl-node-<?php echo $id; ?> .uabb-contact-form-submit {

		    <?php if( isset( $settings->btn_font_size_unit_responsive ) && $settings->btn_font_size_unit_responsive == '' && isset( $settings->btn_font_size['small'] ) && $settings->btn_font_size['small'] != '' ) { ?>
                font-size: <?php echo $settings->btn_font_size['small']; ?>px;
                line-height: <?php echo $settings->btn_font_size['small'] + 2; ?>px;
            <?php } else { ?>
                <?php if( isset( $settings->btn_font_size_unit_responsive ) && $settings->btn_font_size_unit_responsive != '' ) : ?>
                    font-size: <?php echo $settings->btn_font_size_unit_responsive; ?>px;
                    <?php if($settings->btn_line_height_unit_responsive == "" )?>
						line-height: <?php echo $settings->btn_font_size_unit_responsive + 2; ?>px;
                <?php endif; ?>
            <?php } ?>
		    
		    <?php if( isset( $settings->btn_font_size['small'] ) && $settings->btn_font_size['small'] == '' && isset( $settings->btn_line_height['small'] ) && $settings->btn_line_height['small'] != '' && $settings->btn_line_height_unit_responsive == '' && $settings->btn_line_height_unit_medium == '' && $settings->btn_line_height_unit == '') : ?>
		    	line-height: <?php echo $settings->btn_line_height['small']; ?>px;
			<?php endif; ?> 
            
             <?php if( isset( $settings->btn_line_height_unit_responsive ) && $settings->btn_line_height_unit_responsive == '' && isset( $settings->btn_line_height['small'] ) && $settings->btn_line_height['small'] != '' ) { ?>
                line-height: <?php echo $settings->btn_line_height['small']; ?>px;
            <?php } else { ?>
                <?php if( isset( $settings->btn_line_height_unit_responsive ) && $settings->btn_line_height_unit_responsive != '' ) : ?>
                    line-height: <?php echo $settings->btn_line_height_unit_responsive; ?>em;
                <?php endif; ?>
            <?php } ?>
		
		}

		<?php if ( $settings->form_style == 'style1' && $settings->enable_label == 'yes' ) { ?>
			.fl-node-<?php echo $id; ?> .uabb-contact-form label {

			    <?php if( isset( $settings->label_font_size_unit_responsive ) && $settings->label_font_size_unit_responsive == '' && isset( $settings->label_font_size['small'] ) && $settings->label_font_size['small'] != '' ) { ?>
	                font-size: <?php echo $settings->label_font_size['small']; ?>px;
	            <?php } else { ?>
	                <?php if( isset( $settings->label_font_size_unit_responsive ) && $settings->label_font_size_unit_responsive != '' ) : ?>
	                    font-size: <?php echo $settings->label_font_size_unit_responsive; ?>px;
	                <?php endif; ?>
	            <?php } ?>
			    
			    <?php if( isset( $settings->label_font_size['small'] ) && $settings->label_font_size['small'] == '' && isset( $settings->label_line_height['small'] ) && $settings->label_line_height['small'] != '' && $settings->label_line_height_unit_responsive == '' &&  $settings->label_line_height_unit == '' &&  $settings->label_line_height_unit_medium == '' ) : ?>
			    	line-height: <?php echo $settings->label_line_height['small']; ?>px;
				<?php endif; ?>
                
                <?php if( isset( $settings->label_line_height_unit_responsive ) && $settings->label_line_height_unit_responsive == '' && isset( $settings->label_line_height['small'] ) && $settings->label_line_height['small'] != '' ) { ?>
	                line-height: <?php echo $settings->label_line_height['small']; ?>px;
	            <?php } else { ?>
	                <?php if( isset( $settings->label_line_height_unit_responsive ) && $settings->label_line_height_unit_responsive != '' ) : ?>
	                    line-height: <?php echo $settings->label_line_height_unit_responsive; ?>em;
	                <?php endif; ?>
	            <?php } ?>
	            
			}
 		<?php } ?>
 		.fl-node-<?php echo $id; ?> .uabb-contact-form {
 			<?php 
 			    if(isset($settings->form_spacing_dimension_top_responsive) ){
 			        echo ( $settings->form_spacing_dimension_top_responsive != '' ) ? 'padding-top:'.$settings->form_spacing_dimension_top_responsive.'px;' : ''; 
 			    }
 			    if(isset($settings->form_spacing_dimension_bottom_responsive) ){
 			        echo ( $settings->form_spacing_dimension_bottom_responsive != '' ) ? 'padding-bottom:'.$settings->form_spacing_dimension_bottom_responsive.'px;' : '';
 			    }
 			    if(isset($settings->form_spacing_dimension_left_responsive) ){
 			        echo ( $settings->form_spacing_dimension_left_responsive != '' ) ? 'padding-left:'.$settings->form_spacing_dimension_left_responsive.'px;' : '';
 			    }
 			    if(isset($settings->form_spacing_dimension_right_responsive) ){
 			        echo ( $settings->form_spacing_dimension_right_responsive != '' ) ? 'padding-right:'.$settings->form_spacing_dimension_right_responsive.'px;' : '';
 			    } 
 			?>
 		}
    }
	<?php
}
?>