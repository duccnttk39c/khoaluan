<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa tin tức</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
 	<script src="<?php echo base_url() ?>/ckeditor/ckeditor.js"></script>
 	<script src="<?php echo base_url() ?>/ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<?php include 'header_admin.php'; ?>
	<div class="container mt-3 pt-2">
		<div class="row">
			<div class="col-sm-10 push-sm-1">
				<div class="jumbotron text-xs-center">
					<h1 class="display-3">Sửa tin tức</h1>
					<p class="lead">Form này cho phép sửa tin tức rồi lưu vào cơ sở dữ liệu</p>
					<hr class="m-y-md">
				</div>
				<div class="formthemmoi">
					<form action="<?= base_url() ?>news/updateNews" method="POST" enctype="multipart/form-data">
						<?php foreach ($dulieusua as $value): ?>
						
						<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tiêu đề tin</label>
							<input type="text" name="title" class="form-control" id="formGroupExampleInput" value="<?php echo $value['title'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<img src="<?php echo $value['image_news'] ?>" alt="" class="img-fluid">
							<input type="hidden" value="<?php echo $value['image_news'] ?>" name="image_newsold">
							<label for="formGroupExampleInput">Ảnh tin</label>
							<input type="file" name="image_news" class="form-control" placeholder="Ảnh tin">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Trích dẫn</label>
							<input type="text" name="quote" class="form-control" value="<?php echo $value['quote'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Danh mục tin</label>
							<select name="id_catenews" id="" class="form-control">
								<option value="<?php echo $value['id_catenews'] ?>">
										<?php echo $tendanhmuc ?>
								</option>
							</select>
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Nội dung tin</label>
							<textarea name="content_news" id="content_news" class="content_news" cols="30" rows="10">
								<?php echo $value['content_news'] ?>
							</textarea>
						</fieldset>
						<fieldset class="form-group">
							<input type="submit" class="btn btn-info btn-block btn-lg" value="Lưu tin">
						</fieldset>

						<?php endforeach ?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>

		CKEDITOR.replace( 'content_news', {
		    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
		});
	</script>
</body>
</html>