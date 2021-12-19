<div class="row">
<style>
@media screen and (max-width: 768px)
{
	.fb-d8-ele-flip-box__layer__title
	{
		font-size:14px !important;
	}
	.fb-d8-ele-flip-box__layer__description
	{
		font-size:11px !important;
	}
}
@media (min-width: 769px)
{
	.fb-d8-ele-flip-box__layer__title
	{
		font-size:<?php echo $flip_title_font; ?>px !important;
	}
	.fb-d8-ele-flip-box__layer__description
	{
		font-size:<?php echo $flip_desc_font_size; ?>px !important;
	}
}

<?php if($flip_itemperrow==6){ ?>
@media (min-width: 993px) {
  
	.fb-d8-ele-flip-box__image img {
		width: 30% ;	
	}
}
<?php } ?>
<?php if($flip_itemperrow==3){ ?>
@media (min-width: 993px) {
  
	.fb-d8-ele-flip-box__image img {
		width: 70% ;	
	}
}
<?php } ?>
<?php echo $flip_custom_css; ?>

.fb-d8-ele-flip-box__layer__title
{
	<?php if($flip_title_fontfamily!="0") { ?>
	 font-family:'<?php echo $flip_title_fontfamily; ?>' !important ;
	<?php } ?>
	
	color:<?php echo $fliptitlecolor; ?> !important;
	text-align:<?php echo $flip_textalign; ?> ;
	
}
.fb-d8-ele-flip-box__layer__description
{
	<?php if($flip_desc_font!="0") { ?>
	 font-family:'<?php echo $flip_desc_font; ?>' !important ;
	<?php } ?>
	
	color:<?php echo $flipdesccolor; ?> ;	
	text-align:<?php echo $flip_textalign; ?> ;
}

.fb-d8-ele-flip-box__image img
{
	<?php if($flip_textalign=="Left"){ ?>
	float:left ;
	<?php } ?>
	<?php if($flip_textalign=="Right"){ ?>
	float:right ;
	<?php } if($flip_textalign=="Center"){ ?>
	margin:0 auto;
	<?php } ?>
}
.fb-d8-ele-flip-box__button
{
	
	color:<?php echo $flipbuttoncolor; ?> !important;
	background-color:<?php echo $flipbuttonbackccolor; ?> ;
	
	border:2px solid <?php echo $flipbuttonborderccolor; ?> ;
	
}
.fb-d8-ele-flip-box__button:hover
{
	color:<?php echo $flipbuttonhcolor; ?> !important;
	background-color:<?php echo $flipbuttonbackhcolor; ?> ;
	border:2px solid <?php echo $flipbuttonhbordercolor; ?> ;
	
	
}
.fb-d8-ele-flip-box__front {
    background-color: <?php echo $flipfrontcolor; ?>  ;
}
.fb-d8-ele-flip-box__back {
    background-color:<?php echo $flipbackgcolor; ?> ;
}
.fb-d8-ele-flip-box__layer__overlay
{
	text-align:<?php echo $flip_textalign; ?> ;
}
.fb-d8-ele-flip-box--effect-flip.fb-d8-ele-flip-box--direction-down .fb-d8-ele-flip-box__back{
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
	.fb-d8-ele-flip-box--effect-flip.fb-d8-ele-flip-box--direction-down .fb-d8-ele-flip-box:hover .fb-d8-ele-flip-box__front{
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
			$url = wp_get_attachment_image_src($flip_image_id, 'flipbox_image_size', true);
			// echo "<pre>";			
			// print_r($url);die();
?>
<div class="col-md-<?php echo $flip_itemperrow?> col-sm-6 flipbox-col-sm-4 fb-design-8-col">
<div class="fb-d8-ele fb-d8-ele-493">
	<section class="fb-d8-ele-section fb-d8-ele-top-section fb-d8-ele-element fb-d8-ele-element-5dd4de56 fb-d8-ele-section-stretched fb-d8-ele-section-full_width fb-d8-ele-section-height-default fb-d8-ele-section-height-default">
		<div class="fb-d8-ele-container fb-d8-ele-column-gap-default">
			<div class="fb-d8-ele-row">
				<div class="fb-d8-ele-column fb-d8-ele-col-33 fb-d8-ele-top-column fb-d8-ele-element fb-d8-ele-element-1dfc5523">
					<div class="fb-d8-ele-column-wrap fb-d8-ele-element-populated">
						<div class="fb-d8-ele-widget-wrap">
							<div class="fb-d8-ele-column fb-d8-ele-col-33 fb-d8-ele-top-column fb-d8-ele-element fb-d8-ele-element-2d1b8b0c">
								<div class="fb-d8-ele-column-wrap fb-d8-ele-element-populated">
									<div class="fb-d8-ele-widget-wrap">
										<div class="fb-d8-ele-element fb-d8-ele-element-25c5ad72 fb-d8-ele-flip-box--direction-down fb-d8-ele-flip-box--3d fb-d8-ele-flip-box--effect-flip fb-d8-ele-widget fb-d8-ele-widget-flip-box">
											<div class="fb-d8-ele-widget-container">
												<div class="fb-d8-ele-flip-box">
													<div class="fb-d8-ele-flip-box__layer fb-d8-ele-flip-box__front">
														<div class="fb-d8-ele-flip-box__layer__overlay">
															<div class="fb-d8-ele-flip-box__layer__inner">
																<div class="fb-d8-ele-flip-box__image"> <img src="<?php if($flip_image_id==null || $flip_image_id=='' || $flip_image_id==0){ echo $flip_image_field; } else{  echo $url['0']; } ?>" class="attachment-full size-full" alt="" loading="lazy" width="400" height="400" /> </div>
																<h3 class="fb-d8-ele-flip-box__layer__title">
								<?php echo substr($front_title,0,17); ?>						</h3>
																<div class="fb-d8-ele-flip-box__layer__description">
																	<?php if($flip_itemperrow==3){ echo substr($back_description,0,40); } else {
				echo substr($back_description,0,80);
	} ?>
																</div>
															</div>
														</div>
													</div>
													<a class="fb-d8-ele-flip-box__layer fb-d8-ele-flip-box__back" href="<?php echo $back_link; ?>" <?php if($flip_linkopen=="New Tab"){ ?>target="_blank"<?php } ?> >
														<div class="fb-d8-ele-flip-box__layer__overlay">
															<div class="fb-d8-ele-flip-box__layer__inner">
																<h3 class="fb-d8-ele-flip-box__layer__title">
							My Portfolio						</h3> <span style="display:<?php if($back_link=="" || $back_link=="#") { echo "none"; } ?>" class="fb-d8-ele-flip-box__button fb-d8-ele-button fb-d8-ele-size-sm">
						<?php echo $btntext; ?>						</span> </div>
														</div>
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