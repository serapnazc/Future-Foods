<?php
	include('./includes-website/html_header.php');
?>


	<!-- Start Contact 2 -->
	<section class="content-block contact-2">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div id="contact" class="form-container">
          	<fieldset>
							<form method="post" action="#" name="contactform" id="contactform">
								<div class="form-group">
	                <input name="name" id="name" type="text" value="" placeholder="Name" class="form-control" />
								</div>
								<div class="form-group">
	                <input name="email" id="email" type="text" value="" placeholder="Email" class="form-control" />
								</div>
								<div class="form-group">
	                <input name="phone" id="phone" type="text" value="" placeholder="Phone" class="form-control" />
								</div>
								<div class="form-group">
		              <textarea name="comments" id="comments" class="form-control" rows="3" placeholder="Message" id="textArea"></textarea>
									<div class="editContent">
										<p class="small text-muted"><span class="guardsman">* All fields are required.</span> Once we receive your message we will respond as soon as possible.</p>
									</div>
								</div>
								<div class="form-group">
		              <button class="btn btn-primary" type="submit" id="cf-submit" name="submit">Send</button>
								</div>
							</form>
						</fieldset>
					</div><!-- /.form-container -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
    <!--// END Contact 2 -->


<?php
	include('./includes-website/footer.php');
?>
