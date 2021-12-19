<div class="row">
<style>
<?php if($flip_itemperrow==6){ ?>
.fb-d1-element {
	padding: 0px ;
	
	width:100% ;
}
<?php } else { ?>
.fb-d1-element {
	padding: 0px ;
	
	width:100% ;
}
<?php } ?>
<?php echo $flip_custom_css; ?>
	
.fb-d1-stel-pack-flip-box-layer-title
{
	<?php if($flip_title_fontfamily!="0") { ?>
	 font-family:'<?php echo $flip_title_fontfamily; ?>' !important ;
	<?php } ?>	
	font-size:<?php echo $flip_title_font; ?>px !important;
	color:<?php echo $fliptitlecolor; ?> !important;
	text-align:<?php echo $flip_textalign; ?> ;
}
.fb-d1-stel-pack-flip-box-layer-description
{
	<?php if($flip_desc_font!="0") { ?>
	  font-family:'<?php echo $flip_desc_font; ?>' !important ;
	<?php } ?>	
	font-size:<?php echo $flip_desc_font_size; ?>px !important;
	color:<?php echo $flipdesccolor; ?> ;	
	text-align:<?php echo $flip_textalign; ?> ;
}
.fb-d1-stel-pack-flip-box-button
{
	font-family:'Open Sans',sans-serif ;
	color:<?php echo $flipbuttoncolor; ?> !important;
	background-color:<?php echo $flipbuttonbackccolor; ?> ;
	border:2px solid <?php echo $flipbuttonborderccolor; ?> ;
	
}
.fb-d1-stel-pack-flip-box-button:hover
{
	border:2px solid <?php echo $flipbuttonhbordercolor; ?> ;
	color:<?php echo $flipbuttonhcolor; ?> !important;
	background-color:<?php echo $flipbuttonbackhcolor; ?> ;
}



.fb-d1-parent-530 .fb-d1-element.fb-d1-element-6a0a1de .fb-d1-stel-pro-widget-flip-box-minimal-wrapper  .imgback<?php echo $j; ?>{
	background-image:url(<?php echo $flip_image_field; ?>) ;
}
.fb-d1-stel-pack-flip-box-back {
    background-color: <?php echo $flipbackgcolor; ?> ;
}


.button-div-design1
{
	
	text-align:<?php echo $flip_textalign; ?> ;
	
}
.fb-d1-ele-widget-stel-flip-box-minimal.fb-d1-stel-pack-flip-box-effect-flip.stel-pack-flip-box-direction-right .fb-d1-stel-pack-flip-box-back{
	<?php if($flip_fliptype=="Top to Bottom"){ ?>
	-webkit-transform:rotateX(180deg) rotateY(0) ;transform:rotateX(180deg) rotateY(0) ;
	<?php } ?>
	<?php if($flip_fliptype=="Bottom to Top"){ ?>
	-webkit-transform:rotateX(-180deg) rotateY(0) ;transform:rotateX(-180deg) rotateY(0) ;
	<?php } ?>
	<?php if($flip_fliptype=="Left to Right"){ ?>
	-webkit-transform:rotateX(0) rotateY(-180deg) ;transform:rotateX(0) rotateY(-180deg) ;
	<?php } ?>
	<?php if($flip_fliptype=="Right to Left"){ ?>
	-webkit-transform:rotateX(0) rotateY(180deg) ;transform:rotateX(0) rotateY(180deg) ;
	<?php } ?>
}
.fb-d1-stel-pack-flip-box-effect-flip.stel-pack-flip-box-direction-right .fb-d1-stel-pro-widget-flip-box-minimal-wrapper:hover .fb-d1-stel-pack-flip-box-front{
	<?php if($flip_fliptype=="Top to Bottom"){ ?>
	-webkit-transform:rotateX(-180deg) rotateY(0) ;transform:rotateX(-180deg) rotateY(0) ;
	<?php } ?>
	<?php if($flip_fliptype=="Bottom to Top"){ ?>
	-webkit-transform:rotateX(180deg) rotateY(0) ;transform:rotateX(180deg) rotateY(0) ;
	<?php } ?>
	<?php if($flip_fliptype=="Left to Right"){ ?>
	-webkit-transform:rotateX(0) rotateY(180deg) ;transform:rotateX(0) rotateY(180deg) ;
	<?php } ?>
	<?php if($flip_fliptype=="Right to Left"){ ?>
	-webkit-transform:rotateX(0) rotateY(-180deg);transform:rotateX(0) rotateY(-180deg) ;
	<?php } ?>
}
</style>

<?php 
	$i = 1;
	$j = 1;
	if ($TotalCount != - 1)
	{
		switch($flip_itemperrow){
			case(6):
				$row=2;
			break;
			case(4):
				$row=3;
			break;
			case(3):
				$row=4;
			break;
		}
		foreach ($All_data as $single_data)
		{
			
			$front_title = $single_data['front_title'];
			$front_icon = $single_data['front_icon'];
			$back_description = $single_data['back_description'];
			$btntext = $single_data['btntext'];
			$back_link = $single_data['back_link'];
			$flip_image_field = $single_data['flip_image_field'];
			$flip_image_id = $single_data['flip_image_id']; 
			$url = wp_get_attachment_image_src(((int)$flip_image_id), 'flipbox_image_size1', true);
?>
<div class="col-md-<?php echo $flip_itemperrow?> col-sm-6 flipbox-col-sm-4 fb-design-1-col">
<div class="fb-d1-parent fb-d1-parent-530">
	<section class="fb-d1-element fb-d1-element-49b78de fb-d1-parent-section-boxed fb-d1-parent-section-height-default fb-d1-parent-section-height-default fb-d1-parent-section fb-d1-parent-top-section">
		<div class="fb-d1-parent-container fb-d1-parent-column-gap-default">
			<div class="fb-d1-parent-row">
				<div class="fb-d1-element fb-d1-element-6a0a1de stel-pack-flip-box-direction-right fb-d1-stel-pack-flip-box-3d fb-d1-stel-pack-flip-box-effect-flip fb-d1-parent-widget fb-d1-stel-transition-disabled fb-d1-ele-widget-stel-flip-box-minimal">
					<div class="fb-d1-parent-widget-container">
						<div class="fb-d1-stel-pro-widget-flip-box-minimal-wrapper">
							<div class="fb-d1-stel-pack-flip-box-layer fb-d1-stel-pack-flip-box-front imgback<?php echo $j; ?>" style="background-image:url(<?php if($flip_image_id==null || $flip_image_id=='' || $flip_image_id==0){ echo $flip_image_field; } else{  echo $url['0']; } ?>);">
								<div class="fb-d1-stel-pack-flip-box-layer-overlay">
									<div class="fb-d1-stel-pack-flip-box-layer-inner">
										<h3 class="fb-d1-stel-pack-flip-box-layer-title"><?php echo substr($front_title,0,20); ?></h3>
										<div class="fb-d1-stel-pack-flip-box-layer-description">
											<?php echo substr($back_description,0,80); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="fb-d1-stel-pack-flip-box-layer fb-d1-stel-pack-flip-box-back">
								<div class="fb-d1-stel-pack-flip-box-layer-overlay">
									<div class="fb-d1-stel-pack-flip-box-layer-inner">
										<h3 class="fb-d1-stel-pack-flip-box-layer-title"><?php echo substr($front_title,0,20); ?></h3>
										<div class="fb-d1-stel-pack-flip-box-layer-description">
											<?php if($flip_itemperrow==3){ echo substr($back_description,0,40); } else {
												echo substr($back_description,0,80);
											} ?>
										</div>
										<div class="button-div-design1">
											<a class="fb-d1-stel-pack-flip-box-button fb-d1-parent-button fb-d1-parent-size-sm fb-d1-parent-animation-pulse-grow" href="<?php echo $back_link; ?>" <?php if($flip_linkopen=="New Tab"){ ?>target="_blank"<?php } ?> style="display:<?php if($back_link=="" || $back_link=="#") { echo "none"; } ?>">
												<?php echo $btntext; ?>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
			<?php
			$i++;
			$j++;			
			
		}

	}
?>
</div>

