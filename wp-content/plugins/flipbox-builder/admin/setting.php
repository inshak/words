<?php
 if ( ! defined( 'ABSPATH' ) ) exit;
?>
<style>
.fb-padding-lr
{
	margin-left:10px;
	margin-right:10px;
}
</style> 
  
<div class="fb-div-design">
	<h1 class="fb-6310-template-list fb-h1-design"><?php _e('Setting','flipbox-builder-text-domain'); ?></h1>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Flip Type:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<select name="flip_fliptype" id="flip_fliptype" class="form-control">
				<option value="Top to Bottom" <?php if($flip_fliptype=='Top to Bottom' ) { echo "selected"; } ?>>Top to Bottom</option>
				<option value="Bottom to Top" <?php if($flip_fliptype=='Bottom to Top' ) { echo "selected"; } ?>>Bottom to Top</option>
				<option value="Left to Right" <?php if($flip_fliptype=='Left to Right' ) { echo "selected"; } ?> >Left to Right</option>
				<option value="Right to Left" <?php if($flip_fliptype=='Right to Left' ) { echo "selected"; } ?> >Right to Left</option>
			</select>
		</div>
	</div>	
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Text Align:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<select name="flip_textalign" id="flip_textalign" class="form-control">
				<option value="Left" <?php if($flip_textalign=='Left' ) { echo "selected"; } ?>>Left</option>
				<option value="Right" <?php if($flip_textalign=='Right' ) { echo "selected"; } ?>>Right</option>
				<option value="Center" <?php if($flip_textalign=='Center' ) { echo "selected"; } ?> >Center</option>
			</select>
		</div>
	</div>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Layout:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<select name="flip_itemperrow" id="flip_itemperrow" class="form-control">
				<option value="6" <?php if($flip_itemperrow=="6" ) { echo "selected"; } ?>>2 Column Layout</option>
				<option value="4" <?php if($flip_itemperrow=="4" ) { echo "selected"; } ?>>3 Column Layout</option>
				<option value="3" <?php if($flip_itemperrow=="3" ) { echo "selected"; } ?> >4 Column Layout</option>
			</select>
		</div>
	</div>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Link Open:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<select name="flip_linkopen" id="flip_linkopen" class="form-control">
				<option value="New Tab" <?php if($flip_linkopen=='New Tab' ) { echo "selected"; } ?>>New Tab</option>
				<option value="Normal" <?php if($flip_linkopen=='Normal' ) { echo "selected"; } ?>>Normal</option>		
			</select>
		</div>
	</div>
</div>

<div class="fb-div-design">
	<h1 class="fb-6310-template-list fb-h1-design" ><?php _e('Flipbox Background Color Setting','flipbox-builder-text-domain'); ?></h1>
	<div class="row mb-3 fb-padding-lr design-1-front">
		<label class="col-form-label col-sm-2 "><?php _e('Front:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipfrontcolor; ?>" name="flipfrontcolor" id="flipfrontcolor" class="my-color-field form-control" data-default-color="<?php echo $flipfrontcolor; ?>" /> </div>
	</div>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Back:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipbackgcolor; ?>" name="flipbackgcolor" id="flipbackgcolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
</div>
<div class="flip_icon_class fb-div-design" >
	<h1 class="fb-6310-template-list flip_icon_class fb-h1-design" ><?php _e('Icon Setting','flipbox-builder-text-domain'); ?></h1>	
	<div class="row mb-3 fb-padding-lr flip_icon_class">
		<label class="col-form-label col-sm-2"><?php _e('Size:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<div class="range-slider">
				<input type="range" name="flip_icon_size" value="<?php echo $flip_icon_size; ?>" min="1" max="80" range="true" style="" id="range1"> <span class="range-value" id="rangevalue1"><?php echo $flip_icon_size; ?></span> </div>
		</div>
	</div>
	<div class="row mb-3 fb-padding-lr flip_icon_class iconcolorclass">
		<label class="col-form-label col-sm-2"><?php _e('Color:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipiconcolor; ?>" name="flipiconcolor" id="flipiconcolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
	<div class="row mb-3 fb-padding-lr flip_icon_class iconcolorclass">
		<label class="col-form-label col-sm-2"><?php _e('Back:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipbackcolor; ?>" name="flipbackcolor" id="flipbackcolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
</div>

<div class="fb-div-design">
	<h1 class="fb-6310-template-list fb-h1-design" ><?php _e('Title Setting','flipbox-builder-text-domain'); ?></h1>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Size:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<div class="range-slider">
				<input type="range" name="flip_title_font" value="<?php echo $flip_title_font; ?>" min="1" max="40" range="true" style="" id="range5"> <span class="range-value" id="rangevalue5"><?php echo $flip_title_font; ?></span> </div>
		</div>
	</div>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Color:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $fliptitlecolor; ?>" name="fliptitlecolor" id="fliptitlecolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Font:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<select name="flip_title_fontfamily" id="flip_title_fontfamily" class="form-control">
				<option value="Arial" <?php if($flip_title_fontfamily=='Arial' ) { echo "selected"; } ?>>Arial</option>
				<option value="Arial Black" <?php if($flip_title_fontfamily=='Arial Black' ) { echo "selected"; } ?> >Arial Black</option>
				<option value="Courier New" <?php if($flip_title_fontfamily=='Courier New' ) { echo "selected"; } ?> >Courier New</option>
				<option value="Georgia" <?php if($flip_title_fontfamily=='Georgia' ) { echo "selected"; } ?> >Georgia</option>
				<option value="Grande" <?php if($flip_title_fontfamily=='Grande' ) { echo "selected"; } ?> >Grande</option>
				<option value="Helvetica" <?php if($flip_title_fontfamily=='Helvetica' ) { echo "selected"; } ?> >Helvetica Neue</option>
				<option value="Impact" <?php if($flip_title_fontfamily=='Impact' ) { echo "selected"; } ?> >Impact</option>
				<option value="Lucida" <?php if($flip_title_fontfamily=='Lucida' ) { echo "selected"; } ?> >Lucida</option>
				<option value="Lucida Grande" <?php if($flip_title_fontfamily=='Lucida Grande' ) { echo "selected"; } ?> >Lucida Grande</option>
				<option value="Open Sans" <?php if($flip_title_fontfamily=='Open Sans' ) { echo "selected"; } ?> >Open Sans</option>
				<option value="OpenSansBold" <?php if($flip_title_fontfamily=='OpenSansBold' ) { echo "selected"; } ?> >OpenSansBold</option>
				<option value="Palatino Linotype" <?php if($flip_title_fontfamily=='Palatino Linotype' ) { echo "selected"; } ?> >Palatino</option>
				<option value="Sans" <?php if($flip_title_fontfamily=='Sans' ) { echo "selected"; } ?> >Sans</option>
				<option value="sans-serif" <?php if($flip_title_fontfamily=='sans-serif' ) { echo "selected"; } ?> >Sans-Serif</option>
				<option value="Tahoma" <?php if($flip_title_fontfamily=='Tahoma' ) { echo "selected"; } ?> >Tahoma</option>
				<option value="Times New Roman" <?php if($flip_title_fontfamily=='Times New Roman' ) { echo "selected"; } ?> >Times New Roman</option>
				<option value="Trebuchet" <?php if($flip_title_fontfamily=='Trebuchet' ) { echo "selected"; } ?> >Trebuchet</option>
				<option value="Verdana" <?php if($flip_title_fontfamily=='Verdana' ) { echo "selected"; } ?> >Verdana</option>
				<option value="0" <?php if($flip_title_fontfamily=='0' ) { echo "selected"; } ?>>Theme Default Style</option>
			</select>
		</div>
	</div>
</div>
<div class="fb-div-design">
	<h1 class="fb-6310-template-list fb-h1-design" ><?php _e('Description Setting','flipbox-builder-text-domain'); ?></h1>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Font:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<div class="range-slider">
				<input type="range" name="flip_desc_font_size" value="<?php echo $flip_desc_font_size; ?>" min="1" max="30" range="true" style="" id="range6"> <span class="range-value" id="rangevalue6"><?php echo $flip_desc_font_size; ?></span> </div>
		</div>
	</div>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Color:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipdesccolor; ?>" name="flipdesccolor" id="flipdesccolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
	<div class="row mb-3 fb-padding-lr">
		<label class="col-form-label col-sm-2"><?php _e('Font:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<select name="flip_desc_font" id="flip_desc_font" class="form-control">
				<option value="Arial" <?php if($flip_desc_font=='Arial' ) { echo "selected"; } ?>>Arial</option>
				<option value="Arial Black" <?php if($flip_desc_font=='Arial Black' ) { echo "selected"; } ?> >Arial Black</option>
				<option value="Courier New" <?php if($flip_desc_font=='Courier New' ) { echo "selected"; } ?> >Courier New</option>
				<option value="Georgia" <?php if($flip_desc_font=='Georgia' ) { echo "selected"; } ?> >Georgia</option>
				<option value="Grande" <?php if($flip_desc_font=='Grande' ) { echo "selected"; } ?> >Grande</option>
				<option value="Helvetica" <?php if($flip_desc_font=='Helvetica' ) { echo "selected"; } ?> >Helvetica Neue</option>
				<option value="Impact" <?php if($flip_desc_font=='Impact' ) { echo "selected"; } ?> >Impact</option>
				<option value="Lucida" <?php if($flip_desc_font=='Lucida' ) { echo "selected"; } ?> >Lucida</option>
				<option value="Lucida Grande" <?php if($flip_desc_font=='Lucida Grande' ) { echo "selected"; } ?> >Lucida Grande</option>
				<option value="Open Sans" <?php if($flip_desc_font=='Open Sans' ) { echo "selected"; } ?> >Open Sans</option>
				<option value="OpenSansBold" <?php if($flip_desc_font=='OpenSansBold' ) { echo "selected"; } ?> >OpenSansBold</option>
				<option value="Palatino Linotype" <?php if($flip_desc_font=='Palatino Linotype' ) { echo "selected"; } ?> >Palatino</option>
				<option value="Sans" <?php if($flip_desc_font=='Sans' ) { echo "selected"; } ?> >Sans</option>
				<option value="sans-serif" <?php if($flip_desc_font=='sans-serif' ) { echo "selected"; } ?> >Sans-Serif</option>
				<option value="Tahoma" <?php if($flip_desc_font=='Tahoma' ) { echo "selected"; } ?> >Tahoma</option>
				<option value="Times New Roman" <?php if($flip_desc_font=='Times New Roman' ) { echo "selected"; } ?> >Times New Roman</option>
				<option value="Trebuchet" <?php if($flip_desc_font=='Trebuchet' ) { echo "selected"; } ?> >Trebuchet</option>
				<option value="Verdana" <?php if($flip_desc_font=='Verdana' ) { echo "selected"; } ?> >Verdana</option>
				<option value="0" <?php if($flip_desc_font=='0' ) { echo "selected"; } ?>>Theme Default Style</option>
			</select>
		</div>
	</div>
</div>
<div class="fb-div-design">
	<h1 class="fb-6310-template-list d12 flip_button_class fb-h1-design" ><?php _e('Button Setting','flipbox-builder-text-domain'); ?></h1>
	<div class="row mb-3 fb-padding-lr d12 flip_button_class" style="">
		<label class="col-form-label col-sm-2"><?php _e('Color:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipbuttoncolor; ?>" name="flipbuttoncolor" id="flipbuttoncolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
	<div class="row mb-3 fb-padding-lr d12 flip_button_class" style="">
		<label class="col-form-label col-sm-2"><?php _e('Background:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipbuttonbackccolor; ?>" name="flipbuttonbackccolor" id="flipbuttonbackccolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
	<div class="row mb-3 fb-padding-lr d12 flip_button_class" style="">
		<label class="col-form-label col-sm-2"><?php _e('Border Color:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipbuttonborderccolor; ?>" name="flipbuttonborderccolor" id="flipbuttonborderccolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
</div>

<div class="fb-div-design">
	<h1 class="fb-6310-template-list d12 flip_button_class fb-h1-design" ><?php _e('Button Hover Setting','flipbox-builder-text-domain'); ?></h1>
	<div class="row mb-3 fb-padding-lr d12 flip_button_class" style="">
		<label class="col-form-label col-sm-2"><?php _e('Color:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipbuttonhcolor; ?>" id="flipbuttonhcolor" name="flipbuttonhcolor" class="my-color-field form-control" data-default-color="#e91e63" /> </div>
	</div>
	<div class="row mb-3 fb-padding-lr d12 flip_button_class" style="">
		<label class="col-form-label col-sm-2"><?php _e('Background:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipbuttonbackhcolor; ?>" name="flipbuttonbackhcolor" id="flipbuttonbackhcolor" class="my-color-field form-control" data-default-color="<?php echo $flipbuttonbackhcolor; ?>" /> </div>
	</div>
	<div class="row mb-3 fb-padding-lr d12 flip_button_class" style="">
		<label class="col-form-label col-sm-2"><?php _e('Border color:','flipbox-builder-text-domain'); ?></label>
		<div class="col-sm-10">
			<input type="text" value="<?php echo $flipbuttonhbordercolor; ?>" name="flipbuttonhbordercolor" id="flipbuttonhbordercolor" class="my-color-field form-control" data-default-color="<?php echo $flipbuttonhbordercolor; ?>" /> </div>
	</div>
</div>	  
<script>
jQuery(document).ready(function() {
	var rangeSlider = function() {
		var slider = jQuery('.range-slider'),
			range = jQuery('#range5'),
			value = jQuery('#rangevalue5');
		slider.each(function() {
			value.each(function() {
				var value = jQuery(this).prev().attr('value');
				jQuery(this).html(value);
			});
			range.each(function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
			range.on('input', function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).next(value).html(this.value);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
		});
	};
	rangeSlider();
});
jQuery(document).ready(function() {
	var rangeSlider = function() {
		var slider = jQuery('.range-slider'),
			range = jQuery('#range6'),
			value = jQuery('#rangevalue6');
		slider.each(function() {
			value.each(function() {
				var value = jQuery(this).prev().attr('value');
				jQuery(this).html(value);
			});
			range.each(function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
			range.on('input', function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).next(value).html(this.value);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
		});
	};
	rangeSlider();
});
jQuery(document).ready(function() {
	var rangeSlider = function() {
		var slider = jQuery('.range-slider'),
			range = jQuery('#range1'),
			value = jQuery('#rangevalue1');
		slider.each(function() {
			value.each(function() {
				var value = jQuery(this).prev().attr('value');
				jQuery(this).html(value);
			});
			range.each(function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
			range.on('input', function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).next(value).html(this.value);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
		});
	};
	rangeSlider();
});


function range5slider() {
	var rangeSlider = function() {
		var slider = jQuery('.range-slider'),
			range = jQuery('#range5'),
			value = jQuery('#rangevalue5');
		slider.each(function() {
			value.each(function() {
				var value = jQuery(this).prev().attr('value');
				jQuery(this).html(value);
			});
			range.each(function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
			range.on('input', function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).next(value).html(this.value);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
		});
	};
	rangeSlider();
}

function range6slider() {
	var rangeSlider = function() {
		var slider = jQuery('.range-slider'),
			range = jQuery('#range6'),
			value = jQuery('#rangevalue6');
		slider.each(function() {
			value.each(function() {
				var value = jQuery(this).prev().attr('value');
				jQuery(this).html(value);
			});
			range.each(function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
			range.on('input', function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).next(value).html(this.value);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
		});
	};
	rangeSlider();
}
function range1slider() {
	var rangeSlider = function() {
		var slider = jQuery('.range-slider'),
			range = jQuery('#range1'),
			value = jQuery('#rangevalue1');
		slider.each(function() {
			value.each(function() {
				var value = jQuery(this).prev().attr('value');
				jQuery(this).html(value);
			});
			range.each(function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
			range.on('input', function() {
				var per = ((parseInt(this.value) / parseInt(this.max)) * 100);
				jQuery(this).next(value).html(this.value);
				jQuery(this).css('background', 'linear-gradient(to right,#D110A5 ' + per + '%,#ffffff ' + per + '%)');
			});
		});
	};
	rangeSlider();
}

function colorpicker1() {
	jQuery('.my-color-field').wpColorPicker();
}
</script>