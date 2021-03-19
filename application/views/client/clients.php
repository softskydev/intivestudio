<section class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="d-flex flex-column flex-lg-row no-gutters border rounded bg-white o-hidden">
					<a href="<?= base_url('client/'.str_replace(' ', '-', $image->name)) ?>" class="d-block position-relative bg-gradient col-xl-6 order-lg-2">
						<div class="divider divider-side transform-flip-y d-none d-lg-block"></div>
						<img class="card-img-top flex-fill hover-fade-out" src="<?= base_url($image->img) ?>" alt="Image accompanying Amara testimonial">
						<div class="badge badge-light badge-pill">
							<img src="<?= base_url($image->logo) ?>" alt="Aven company logo" class="icon icon-sm m-1 m-lg-2">
						</div>
					</a>
					<div class="p-4 p-md-5 col-xl">
						<div class="p-lg-4 p-xl-5">
							<h1><?= $headers['clients-header-1']['title'] ?></h1>
							<p class="lead">
								<?= $headers['clients-header-1']['content'] ?>
							</p>
							<a href="<?= base_url('client/'.str_replace(' ', '-', $image->name)) ?>" class="lead stretched-link">Read Story</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-3 mt-lg-5">
			<?php $limit = count($clients) > 6 ? 6 : count($clients) ?>
			<?php for ($i = 0; $i < $limit; $i++) : ?>
				<div class="col-lg-6 mb-4">
					<div class="row flex-column flex-sm-row align-items-center">
						<a class="col-sm-5" href="<?= base_url('client/'.str_replace(' ', '-', $clients[$i]->name)) ?>">
							<img class="rounded img-fluid hover-fade-out" src="<?= $clients[$i]->img ?>" alt="Image accompanying Circle testimonial">
						</a>
						<div class="col">
							<div class="mb-4">
								<img src="<?= $clients[$i]->logo ?>" alt="<?= $clients[$i]->name ?> company logo" class="icon icon-sm">
							</div>
							<div>
								<?php
								if (strlen($clients[$i]->content)>60) {
									$st = '...';
								} else {
									$st = '';
								}

								?>
								<p class="h5">&ldquo;<?= substr($clients[$i]->content, 0, 60) ?><?= $st?>&rdquo;</p>
							</div>
						</div>
					</div>
				</div>
			<?php endfor ?>
		</div>
	</div>
</section>
<section class="pb-0">
	<div class="container">
		<div class="row">

			<?php foreach ($clients as $c){ ?>
				<div class="col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-4">
					<div class="card h-100 hover-box-shadow">
						<div class="d-block bg-gradient rounded-top position-relative">
							<img class="card-img-top hover-fade-out" style="width: 100%;height:200px;object-fit:cover;object-position:top" src="<?= $c->img ?>" alt="Image accompanying Circle testimonial">
							<div class="badge badge-light">
								<img src="<?= $c->logo ?>" alt="<?= $c->name ?> company logo" class="icon icon-sm m-lg-1">
							</div>
						</div>
						<div class="card-body">
							<h3><?= $c->name ?></h3>
							<?php
								if ($c->type == 'website & mobile') {
									$type = 'Website & Mobile';
								}else{
									$type = 'Filter Instagram';
								}
							?>
							<label for=""><?= $type?></label>
							<p>
								<?= $c->content ?>
							</p>
							<a href="<?= base_url('client/'.str_replace(' ', '-', $c->name)) ?>" class="stretched-link">Read Story</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<section class="pb-0">
		<div class="divider divider-bottom bg-primary-3 mt-5"></div>
</section>