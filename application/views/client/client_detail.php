<section class="p-0 border-top border-bottom bg-light row no-gutters">
	<div class="col-lg-5 col-xl-6 order-lg-2">
		<div class="divider divider-side transform-flip-y bg-light d-none d-lg-block"></div>
		<img class="flex-fill" src="<?php echo base_url($client->img) ?>" alt="blog.1.image">
	</div>
	<div class="col-lg-7 col-xl-6">
		<div class="container min-vh-lg-70 min-vh-xl-80 d-flex align-items-center">
			<div class="row justify-content-center">
				<div class="col col-md-10 col-xl-9 py-4 py-sm-5">
					<div class="my-4 my-md-5 my-lg-0 my-xl-5">
						<img src="<?= base_url($client->logo) ?>" alt="<?= $client->logo ?>" style="height: 100px;">
						<h1 class="display-4 mt-4 mt-lg-5">
							<?= $client->quotes ?>
						</h1>
						<p class="lead">
							<?= $client->content ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row align-items-start justify-content-around">
			<div class="col-md-9 col-lg col-xl-4 sticky-lg-top mb-5 mb-lg-0">
				<ul class="list-group pr-xl-4">
					<li class="list-group-item px-4 py-3 d-flex justify-content-between">
						<h6 class="mb-0">Company</h6>
						<div><?= $client->name ?></div>
					</li>
					<li class="list-group-item px-4 py-3 d-flex justify-content-between">
						<h6 class="mb-0">Location</h6>
						<div><?= ucfirst($client->lokasi) ?></div>
					</li>
					<li class="list-group-item px-4 py-3 d-flex justify-content-between">
						<h6 class="mb-0">Industry</h6>
						<div><?= $client->industri ?></div>
					</li>
					<?php
					if ($client->type == 'website & mobile') { ?>
						<li class="list-group-item px-4 py-3 d-flex justify-content-between">
							<h6 class="mb-0">Size</h6>
							<div><?= $client->size ?> +</div>
						</li>
					<?php
					}
					?>
					<li class="list-group-item px-4 py-3 d-flex justify-content-between">
						<h6 class="mb-0">Link</h6>
						<?php
						if (strlen($client->website) > 30) {
							$st = '...';
						} else {
							$st = '';
						}

						?>
						<div><a href="<?= $client->website ?>" target="_blank"><?= substr($client->website, 0, 30) ?><?= $st ?></a>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-xl-7 col-lg-8 col-md-9">
				<article class="article">
					<?= $client->article ?>
				</article>
			</div>
		</div>
	</div>
</section>
<section class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="d-flex flex-column flex-lg-row no-gutters border rounded bg-white o-hidden">
					<a href="<?= base_url('client/' . $random->name) ?>" class="d-block position-relative bg-gradient col-xl-6 order-lg-2">
						<div class="divider divider-side transform-flip-y d-none d-lg-block"></div>
						<img class="card-img-top flex-fill hover-fade-out" src="<?= base_url($random->img) ?>" alt="Image accompanying Circle testimonial">
						<div class="badge badge-light badge-pill">
							<img src="<?= base_url($random->logo) ?>" alt="Asgardia company logo" class="icon icon-sm m-1 m-lg-2">
						</div>
					</a>
					<div class="p-4 p-md-5 col-xl">
						<div class="p-lg-4 p-xl-5">
							<h1>&ldquo;<?= $random->name ?>&rdquo;</h1>
							<p class="lead">
								<?= $random->content ?>
							</p>
							<a href="<?= base_url('client/' . str_replace(' ', '-', $random->name)) ?>" class="lead stretched-link">Read Story</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pb-0">
	<div class="divider divider-bottom bg-primary-3 mt-5"></div>
</section>