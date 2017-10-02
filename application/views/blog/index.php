<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
<?php if($posts): ?>
	<?php foreach($posts as $post): ?>
		<h1><?php echo $post->title; ?></h1>
		
		<a href="<?php echo base_url('blog/detail/').$post->slug;  ?>">Read More</a>
	<?php endforeach; ?>
<?php endif; ?>
</body>
</html>