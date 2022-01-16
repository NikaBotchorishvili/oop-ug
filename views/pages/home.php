<main>
	<section class="section-1" style="background-image: url('assets/images/img.jpg');">
		<div class="shadow"></div>
		<div class="content">
			<h1><?=Helper::convertString("Build your own website")?></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			<a href="" class="link-default">About Us</a>
		</div>
	</section>
	<section class="section-2">
		<div class="container">
			<div class="home-services">
				<?php foreach($this->data['services'] as $key => $value): ?>
					<div class="service-item">
						<h3><?= $value['name'] ?></h3>
						<p><?= $value['text'] ?></p>
						<a href="" class="link-default-2">Read More</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<section class="section-3">
		<div class="container">
			<div class="content">
				<h3>Get all type of Solutions</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venea</p>
				<a href="" class="link-default">Contact Us</a>
			</div>
		</div>
	</section>
</main>