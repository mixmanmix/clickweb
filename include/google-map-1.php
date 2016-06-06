			
			<!-- Google Map -->
			<title>49.218525, -122.978684</title>
			
			<div class="template-component-google-map">
				
				<!-- Content -->
				<div class="template-component-google-map-box">
					<div class="template-component-google-map-box-content"></div>
				</div>
				
				<!-- Button -->
				<a href="#" class="template-component-google-map-button">
					<span class="template-icon-meta-marker"></span>
					<span class="template-component-google-map-button-label-show">Show Map</span>
					<span class="template-component-google-map-button-label-hide">Hide Map</span>
				</a>
				
			</div>
			
			<script type="text/javascript">

				jQuery(document).ready(function()
				{
					jQuery('.template-component-google-map').templateGoogleMap(
					{
						coordinate		:
						{
							lat			:	'49.218525',
							lng			:	'-122.978684'
						},
						dimension		:
						{
							width		:	'100%',
							height		:	'400px'
						},
						marker			:	'media/image/map_pointer.png'
					});
				});
				
			</script>