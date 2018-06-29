
	<div class="container">
		<h1><?php echo $page_heading ?></h1>
		<p><?php echo $page_discription ?></p>
		<hr>
		<h2>Todo List</h2>
		<ul class="list-group">
			<?php foreach($todo_list as $item): ?>
				<li class="list-group-item"><?php echo $item; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php //echo anchor('blog/comments', 'Click here'); ?>
	</div>
