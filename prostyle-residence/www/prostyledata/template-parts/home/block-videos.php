<?php 
	$vidGroup = get_field('video_introduce');
    $videoThumbnail = wp_get_attachment_image_url( $vidGroup['video_thumbnail']['ID'], $size = 'origin', $icon = false );
    $videoURL = $vidGroup['video_url']."?rel=0";
?>

<section class="section_video bg_common">
	<div class="w_section_video">
		<div class="container">
			<div class="row">
				<div class="col col-12 col-sm-8 offset-sm-2">
					<h2 class="headline"><img src="<?php SGVinK::the_images_uri(); ?>/MOVIE.png" height="35" class="img-responsive" alt="Image"></h2>
					<div class="frame_video">
						<a class="btnVideo" href="#" data-target="#modal_video" data-toggle="modal" data-src="<?php echo $videoURL; ?>"><img src="<?php echo $videoThumbnail; ?>" alt="" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>