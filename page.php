<?= self::before(); ?>
<div class="container">
  <div class="row d-flex align-items-stretch pb-5">
	  <div class="col-lg-4 col-xl-3 pt-5 mt-1">
		  <?= $page->time->{r('-', '_', $site->language)}; ?>
		<br><a href="<?= $parent->url; ?>" class="font-weight-normal">
		  <?= $parent->title; ?>
		</a>
		</div>
		<div class="col-lg-8 col-xl-6 pt-5">
			<h1 class="mb-5">
			  <?= $page->title; ?>
			</h1>
			<div class="lead my-5">
				<?= $page->description; ?>
			</div>
			<?= $page->content; ?>
		</div>
	</div>
</div>
<?= self::after(); ?>
