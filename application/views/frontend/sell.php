<div class="container ">
	<div class="sellwrap">
		<div class="sellbanner"><img src="<?php echo site_url('assets/images/sell-banner.jpg'); ?>" class="img-responsive"></div>
		<div class="row sellformwrap">
			<div class="col-md-5 col-md-offset-1 col-sm-offset-0 col-sm-6  col-xs-8 col-xs-offset-2"><img src="<?php echo site_url('assets/images/sell-left.jpg'); ?>" class="img-responsive"></div>
			<div class="col-md-5 col-md-offset-1 col-sm-6  col-xs-12">
				<div class="sellform">
					<div class="selllabel"></div>
					<div class="seller-form">
						<div class="custom_error_seller"> </div>
						<h4 class="mb20">Leave your number and we will get back to you within 24 hrs</h4>
						<div>
							<?php echo form_open(); ?>
							<div class="form-group"> 
								<div class="input input--sae">
									<input class="input__field input__field--sae" type="text" required/>
									<label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">NAME *</span> </label>
								</div>
							</div>

							<div class="form-group">
								<div class="input input--sae">
									<input class="input__field input__field--sae" type="text" required/>
									<label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">EMAIL *</span> </label>
								</div>
							</div>
							<div class="form-group">
								<div class="input input--sae">
									<input class="input__field input__field--sae" type="text" required/>
									<label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">NUMBER OF PRODUCTS *</span> </label>
								</div>
							</div>
							<div class="form-group">
								<div class="input input--sae">
									<input class="input__field input__field--sae" type="text" required/>
									<label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">CITY *</span> </label>
								</div>
							</div>
							<div class="form-group">
								<div class="input input--sae">
									<input class="input__field input__field--sae" type="text" required/>
									<label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">MOBILE *</span> </label>
								</div>
							</div>
							<div class="form-group">
								<input name="" type="submit" value="SUBMIT" class="btn pinkbtn borderround ">
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>