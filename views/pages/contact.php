<main>
	<section class="single-page-content page-contact">
		<div class="container">
			<h1>Contact Us</h1>
			<form id="contact-form" method="POST">
				<input type="hidden" name="action" value="sendEmail">
				<div class="form-group">
					<label>Name</label>
					<input  type="text" name="name">
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input  type="text" name="last-name">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input  type="text" name="email">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea  name="message"></textarea>
				</div>
				<div class="form-group">
					<button class="link-default">Send</button>
				</div>
				<?php if(isset($_GET['e']) && !empty($_GET['e'])): 
						$response_message = '';
						if($_GET['e'] == 0){
							$response_message = "Email Has Been Sent";	//this response message isn't showing needs fix
						}else{
							$response_message = "Email Hasn't Been Sent";
						}
						echo "<p>" . $response_message ."</p>";
					  endif; ?>
			</form>
		</div>
	</section>
</main>
