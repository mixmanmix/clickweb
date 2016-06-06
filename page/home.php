

				<!-- Header -->
				<div class="template-header">
<?php
		Template::includeTemplateHeaderTop();
?>
					<div class="template-header-bottom">
						<?php Template::includeFile('slider'); ?>
					</div>
					
				</div>

				<!-- Content -->
				<div class="template-content">

					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">
						
						<!-- Header + subheader -->
						<div class="template-component-header-subheader">
							<h2>Who Is ClickWash</h2>
							<div></div>
							<span>Car wash &amp; detailling service</span>
						</div>	
						
						<!-- Layout 33x66% -->
						<div class="template-layout-33x66 template-clear-fix">
							
							<!-- Left column -->
							<div class="template-layout-column-left">
								<img src="media/image/sample/460x678/image_01.jpg" alt=""/>
							</div>
							
							<!-- Right column -->
							<div class="template-layout-column-right">
								
								<!-- Text -->
								<p class="template-padding-reset">
									ClickWash is an eco-friendly, hand car wash and detailing service based in Vancouver, B.C. 
									Our company was founded back in 2016 by a team of experts with more then 10 years of professional car wash experience. 
									We operate car washes through Vancouver lower mainland. Our goal is to provide our customers with the friendliest, most convenient 
									hand car wash experience possible. We use the most modern and up-to-date water reclamation modules as a part of our car wash systems. 
									Our products are all biodegradable and eco-friendly.
								</p>
																
								<!-- Feature list -->
								<div class="template-component-feature-list template-component-feature-list-position-top template-clear-fix">
									
									<!-- Layout 50x50% -->
									<ul class="template-layout-50x50 template-clear-fix">
										
										<!-- Left column -->
										<li class="template-layout-column-left template-margin-bottom-reset">
											<div class="template-component-space template-component-space-2"></div>
											<span class="template-icon-feature-water-drop"></span>
											<h5>The Best Car Wash</h5>
											<ul class="template-component-list">
												<li><span class="template-icon-meta-check"></span>We offer multiple services at a great value</li>
												<li><span class="template-icon-meta-check"></span>Multiple car wash locations throughout Portland</li>
												<li><span class="template-icon-meta-check"></span>Biodegradable and eco-friendly products</li>
												<li><span class="template-icon-meta-check"></span>Pay for your wash electronically and securely</li>
												<li><span class="template-icon-meta-check"></span>Trained and skilled car wash crew members</li>
											</ul>
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right template-margin-bottom-reset">
											<div class="template-component-space template-component-space-2"></div>
											<span class="template-icon-feature-user-chat"></span>
											<h5>Contacting Us</h5>
											<ul class="template-component-list">
												<li><span class="template-icon-meta-check"></span>We are very open and easy to reach company</li>
												<li><span class="template-icon-meta-check"></span>Our email is checked hourly during the day</li>
												<li><span class="template-icon-meta-check"></span>Book an appointment online under 3 minutes</li>
												<li><span class="template-icon-meta-check"></span>Our tool free number will be answered</li>
												<li><span class="template-icon-meta-check"></span>You can pay online for your appointment</li>
											</ul>											
										</li>
										
									</ul>
									
								</div>
								
							</div>
								
						</div>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-section-padding-reset template-clear-fix template-background-color-1">
						
						<!-- Call to action -->
						<div class="template-component-call-to-action">
							<div class="template-main">
								<h3>No 1. Car Wash Booking System</h3>
								<a href="<?php Template::getPageURL('book-your-wash'); ?>" class="template-component-button">Book Appointment</a>
							</div>
						</div>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-background-image template-background-image-5 template-background-image-parallax template-color-white template-clear-fix">
						
						<!-- Mian -->
						<div class="template-main">

							<!-- Header + subheader -->
							<div class="template-component-header-subheader">
								<h2>Our Process</h2>
								<div></div>
								<span>We know your time is valuable</span>
							</div>	

							<!-- Space -->							
							<div class="template-component-space template-component-space-1"></div>
							
							<!-- Process list -->							
							<div class="template-component-process-list template-clear-fix">
								
								<!-- Layout 25x25x25x25% -->
								<ul class="template-layout-25x25x25x25 template-clear-fix template-layout-margin-reset">
									
									<!-- Left column -->
									<li class="template-layout-column-left">
										<span class="template-icon-feature-check"></span>
										<h5>1. Booking</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>
									
									<!-- Center left column -->
									<li class="template-layout-column-center-left">
										<span class="template-icon-feature-car-check"></span>
										<h5>2. Inspection</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>
									
									<!-- Center right column -->
									<li class="template-layout-column-center-right">
										<span class="template-icon-feature-payment"></span>
										<h5>3. Valuation</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>
									
									<!-- Right column -->
									<li class="template-layout-column-right">
										<span class="template-icon-feature-vacuum-cleaner"></span>
										<h5>4. Completion</h5>
									</li>
									
								</ul>
								
							</div>
							
						</div>
							
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">
						
						<!-- Header + subheader -->
						<div class="template-component-header-subheader">
							<h2>Wash Packages</h2>
							<div></div>
							<span>Which wash is the best for your vehicle?</span>
						</div>	
						
						<!-- Booking -->
						<div class="template-component-booking" id="template-booking">

							<form>

								<ul>
									
									<?php Template::includeFile('booking-vehicle-list-2'); ?>
									<?php Template::includeFile('booking-package-list-2'); ?>

								</ul>

							</form>

						</div>
						
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$('#template-booking').booking();
							});
						</script>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-section-padding-reset template-clear-fix">
						
						<!-- Flex layout 50x50% -->
						<div class="template-layout-flex template-background-color-1 template-clear-fix">

							<!-- Left column -->
							<div class="template-background-image template-background-image-1"></div>

							<!-- Right column -->
							<div class="template-section-padding-1">
								
								<!-- Features list -->
								<div class="template-component-feature-list template-component-feature-list-position-top">
									
									<!-- Layout 50x50% -->
									<ul class="template-layout-50x50 template-clear-fix">
										
										<!-- Left column -->
										<li class="template-layout-column-left">
											<span class="template-icon-feature-location-map"></span>
											<h5>Convenience</h5>
											<p>We are dedicated to providing quality service, customer satisfaction at a great value in multiple locations offering convenient hours.</p>
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right">
											<span class="template-icon-feature-eco-nature"></span>
											<h5>Organic products</h5>
											<p>Our products are eco-friendly and interior products are all organic. We use less than a gallon of water with absolutely zero-waste.</p>											
										</li>
										
										<!-- Left column -->
										<li class="template-layout-column-left">
											<span class="template-icon-feature-team"></span>
											<h5>Experienced Team</h5>
											<p>Our crew members are all trained and skilled and fully equiped with equipment and supplies needed that we can deliver the best results.</p>											
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right">
											<span class="template-icon-feature-spray-bottle"></span>
											<h5>Great Value</h5>
											<p>We offer multiple services at a great value to meet your needs. We offer a premium service while saving your time and money.</p>											
										</li>
										
									</ul>
									
								</div>

							</div>

						</div>
						
					</div>
					
						
					
					
					
					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">
						
						<!-- Features list -->
						<div class="template-component-feature-list template-component-feature-list-position-left template-clear-fix">
							
							<!-- Layout 33x33x33% -->
							<ul class="template-layout-33x33x33 template-clear-fix">
								
								<!-- Left column -->
								<li class="template-layout-column-left">
									<span class="template-icon-feature-phone-circle"></span>
									<h5>Call Us At</h5>
									<p>
			              (+604) 569 0606<br/>
										(+604) 700 9781<br/>
									</p>
								</li>
								
								<!-- Center column -->
								<li class="template-layout-column-center">
									<span class="template-icon-feature-location-map"></span>
									<h5>Our Address</h5>
									<p>
										5811 Beresford st.,<br/>
										Burnaby, BC, V5K1J1
									</p>
								</li>
								
								<!-- Right column -->
								<li class="template-layout-column-right">
									<span class="template-icon-feature-clock"></span>
									<h5>Working hours</h5>
									<p>
										On-Demand</p>
								</li>
								
							</ul>
						</div>
						
					</div>
					
					<!-- Google Maps -->
					<div class="template-section template-section-padding-reset template-clear-fix">
						<?php Template::includeFile('google-map-1'); ?>
					</div>
					
				</div>