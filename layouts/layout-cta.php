<?php
    $image = get_sub_field('image');
    $image_id = $image['ID'];
    $image_url = $image['url'];
    $image_alt = $image['alt'];
    $image_large = $image['sizes']['large'];

    $title = get_sub_field('title');
    $content = get_sub_field('content');

?>

<div class="layout cta">
    <div class="wrapper">
        <div class="image">
            <img <?php acf_responsive_image($image_id, $image_large, '1600px'); ?>  alt="<?php echo $image_alt; ?>" />
        </div>
        <div class="content">
            <h2 class="title"><?php echo $title; ?></h2>
            <?php echo $content; ?>
            <?php include(locate_template('layouts/component-button.php')); ?>
        </div>
    </div>
</div>
