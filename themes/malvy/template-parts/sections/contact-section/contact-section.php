<section class="contact-section">
    <style>
        <?php include('contact-section.css');?>
    </style>
    <?
    $image = get_field('image');
    $title = get_field('form_title');
    $form_field = get_field('form_field');
    ?>
    <div class="wrapper">
        <div class="left_box">
            <?php if ($image):?>
                <div class="img_wrap">
                    <img class="main_image" src="<?=$image['url']?>" alt="<?=$image['alt']?>"  />
                </div>
            <?php endif; ?>
        </div>
        <div class="right_box">
            <div class="right_box_intro">
                <h2><?php echo $title; ?></h2>
                <?php echo $form_field; ?>
            </div>
        </div>
    </div>
</section>