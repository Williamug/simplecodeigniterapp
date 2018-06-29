<!DOCTYPE html>
<html>
<head>
	<title>My Blog | <?php echo $page_title ?></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
	<div class="container">
		<h1><?php echo $page_heading ?></h1>
		<h2>Todo List</h2>
		<ul class="list-group">
			<?php foreach($todo_list as $item): ?>
				<li class="list-group-item"><?php echo $item; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php //echo anchor('blog/comments', 'Click here'); ?>
	</div>
</body>
</html>