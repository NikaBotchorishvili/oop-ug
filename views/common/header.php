<header>
		<div class="container">
			<nav>
				<ul>
					<li>
						<!-- $this->data Can Be Accessed From Here Because header.php Is included Nn layout.php
							 And layout.php Is Included In Controller.php -->
						<?php foreach($this->data['menu'] as $key => $value): ?>
							<a href="<?= $value['path'] ?>"><?= $value['name'] ?></a>
						<?php endforeach; ?>
					</li>
				</ul>
			</nav>
		</div>
	</header>