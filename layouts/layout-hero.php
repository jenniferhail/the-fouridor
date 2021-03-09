<?php
    $bg_settings = get_sub_field('bg_settings');
    $image = get_sub_field('image');
    $video = get_sub_field('video');

    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');

    if ($bg_settings == 'image') {
        $background = '<div class="background" style="background-image: url(' . $image['url'] . ');"></div>';
    } elseif ($bg_settings == 'video') {
        $background = '<video autoplay loop class="video-background" muted plays-inline> <source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4"> </video>';
    } else {
        exit;
    }
?>

<div class="layout hero">
    <?php echo $background; ?>
    <div class="wrapper">
        <div class="content">
            <h2 class="title"><?php echo $title; ?></h2>
            <?php if ($subtitle): ?>
                <p class="subtitle"><?php echo $title; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
