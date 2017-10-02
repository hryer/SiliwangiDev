<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
<?php if($posts): ?>
		<h1><?php echo $posts->title; ?></h1>
		<p> <?php echo $posts->desc; ?> </p>

<?php endif; ?>
</body>
</html>