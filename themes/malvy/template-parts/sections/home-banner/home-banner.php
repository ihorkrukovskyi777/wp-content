<section class="home_banner">
    <?
        $title = get_field('title');
        $button = get_field('button');
        $image = get_field('image');
        $background = get_field('background');
        $background_color = get_field('background_color') ? get_field('background_color') : '#E8C5C7';

    ?>
    <div class="wrapper_home_banner" style="background-color: <?=$background_color?>">
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <?php if ($button):?>
                <a href="<?=$button['url']?>"><?=$button['title']?></a>
            <?php endif; ?>
            <?php if ($image):?>
                <img class="main_image" src="<?=$image['url']?>" alt="<?=$image['alt']?>"  />
            <?php endif; ?>
            <?php if ($background):?>
                <img class="background_image" src="<?=$background['url']?>" alt="<?=$background['alt']?>"  />
            <?php endif; ?>
        </div>
    </div>
</section>  