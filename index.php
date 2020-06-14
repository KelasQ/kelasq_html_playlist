<?php require_once ('template/header.php'); ?>

<div class="container">
	<div class="row mt-2 text-center">
		<div class="col-md-12">
			<img src="<?= $thumbnailChannel; ?>" alt="KelasQ Thumbnail Picture" class="shadow mx-auto d-block rounded-circle" width="100">
		</div>
		<div class="col-md-12 mx-auto d-block mt-1">
			<h3><?= $titlePlaylist; ?></h3>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-md-6 col-sm-12 col-lg-6 mx-auto d-block">
			<select name="menu" id="menu" class="form-control shadow">
				<option value="">- Pilih Menu -</option>
				<?php 
				foreach ($playlistApi['items'] as $row) : 
					$videoId = $row['snippet']['resourceId']['videoId'];
					$title = $row['snippet']['title'];
					?>
					<option value="<?= $videoId; ?>" videoId="<?= $videoId; ?>"><?= $title; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-md-8 col-sm-12 col-lg-8 mx-auto d-block">
			<div class="loading">
				<img src="assets/img/loader.gif" class="mx-auto d-block rounded-circle" width="200">
			</div>			
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item shadow" src="" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<?php require_once ('template/footer.php'); ?>