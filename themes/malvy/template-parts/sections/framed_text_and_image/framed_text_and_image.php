<section class="framed_text_and_image">
    <?php include('framed_text_and_image-css.php')?>
    <div class="container">
        <div class="wrapper">
            <h4 class="title"><?=get_field('title')?></h4>
            <!-- <div class="text_block"> -->
                <div class="text"><?=get_field('text')?></div>
            <!-- </div> -->
            <?php
                $image = get_field('image');
                if($image):
            ?>
                <div class="image_block">
                    <img src="<?=$image['url']?>" alt="<?=$image['alt']?>">
                </div>
            <?php endif;?>
        </div>
    </div>
</section>