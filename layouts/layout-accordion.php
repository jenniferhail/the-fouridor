<?php
    $display_intro = get_sub_field('display_intro');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
?>

<div class="layout accordion">
    <div class="wrapper">
        <div class="content">

            <?php if ($display_intro): ?>
                <div class="intro">
                    <h2 class="title"><?php echo $title; ?></h2>
                    <?php if ($subtitle): ?>
                        <p class="subtitle"><?php echo $subtitle; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if( have_rows('acc_item') ): ?>
            	<ul class="acc-list">
            	<?php while( have_rows('acc_item') ): the_row(); ?>

            		<li class="acc-item">
                        <h3 class="title"><?php the_sub_field('title'); ?></h3>
                        <div class="acc-content">
                            <div class="acc-content-wrapper">
                                <?php the_sub_field('content'); ?>
                                <?php include(locate_template('layouts/component-button.php')); ?>
                            </div>
                        </div>
            		</li>

            	<?php endwhile; ?>
            	</ul>
            <?php endif; ?>

        </div>
    </div>
</div>
