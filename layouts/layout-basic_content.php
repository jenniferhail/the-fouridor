<?php
	$title = get_sub_field('title');
    $basic_content = get_sub_field('basic_content')
?>

<div class="block layout basic-content">
    <div class="card">
		<div class="card-wrapper">
			<?php if ($title): ?>
				<h2><?php echo $title; ?></h2>
			<?php endif; ?>
			<?php if ($basic_content): ?>
				<?php echo $basic_content; ?>
			<?php endif; ?>
			<?php include(locate_template('layouts/component-button.php')); ?>
		</div>
    </div>
</div>
