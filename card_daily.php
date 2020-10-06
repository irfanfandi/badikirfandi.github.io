<section class="ftco-animate" id="skills-section">
		<div class="container text-center my-3">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Daily Work</h1>
					<h2 class="mb-4">Daily Work Mobile Devolopment</h2>
				</div>
			</div>
			<div class="row mx-auto my-auto">
				<div id="recipeCarousel2" class="carousel carousel2 slide w-100" data-ride="carousel2">
					<div class="carousel-inner w-100" role="listbox">
					<div class="carousel-item carousel-item2 active">
							<div class="col-md-4">
									<iframe width="100%" height="330" src="https://www.youtube.com/embed/pO0GeKtjfVs">
									</iframe>
							</div>
						</div>
						<?php $data = ['https://www.youtube.com/embed/m9yUmJvHlTQ','https://www.youtube.com/embed/viXiNDE5_u4',
					'https://www.youtube.com/embed/E82LljLkDho','https://www.youtube.com/embed/FGl-2KeJbgM','https://www.youtube.com/embed/ihVwAclpiGc'];  foreach ($data as $d) {?>
						<div class="carousel-item carousel-item2">
							<div class="col-md-4">
									<iframe width="100%" height="330" src="<?= $d ?>">
									</iframe>
							</div>
						</div>
						<?php ;}?>
					<a class="carousel-control-prev w-auto" href="#recipeCarousel2" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon bg-dark border  rounded-circle"
							aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next w-auto" href="#recipeCarousel2" role="button" data-slide="next">
						<span class="carousel-control-next-icon bg-dark border  rounded-circle"
							aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section>
