<section class="accordion-section">
    <style>
        <?php include('accordion-section.css');?>
    </style>
    <?
    $image = get_field('image');
    $title = get_field('title');
    $items = get_field('items');
    ?>
    <div class="container">
        <h2><?php echo $title; ?></h2>
        <div class="wrapper">
            <div class="left_box">
                <?php if ($image):?>
                    <div class="img_wrap">
                        <img src="<?=$image['url']?>" alt="<?=$image['alt']?>"  />
                    </div>
                <?php endif; ?>
            </div>
            <div class="right_box">
                <?php
                if($items):
                    foreach($items as $item):
                        ?>
                        <div class="item">
                            <div class="item_title">
                                <span><?=$item['item_title']?></span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.375 10C19.375 10.2984 19.2565 10.5845 19.0455 10.7955C18.8345 11.0065 18.5484 11.125 18.25 11.125H11.125V18.25C11.125 18.5484 11.0065 18.8345 10.7955 19.0455C10.5845 19.2565 10.2984 19.375 10 19.375C9.70163 19.375 9.41548 19.2565 9.2045 19.0455C8.99353 18.8345 8.875 18.5484 8.875 18.25V11.125H1.75C1.45163 11.125 1.16548 11.0065 0.954505 10.7955C0.743526 10.5845 0.625 10.2984 0.625 10C0.625 9.70163 0.743526 9.41548 0.954505 9.2045C1.16548 8.99353 1.45163 8.875 1.75 8.875H8.875V1.75C8.875 1.45163 8.99353 1.16548 9.2045 0.954505C9.41548 0.743526 9.70163 0.625 10 0.625C10.2984 0.625 10.5845 0.743526 10.7955 0.954505C11.0065 1.16548 11.125 1.45163 11.125 1.75V8.875H18.25C18.5484 8.875 18.8345 8.99353 19.0455 9.2045C19.2565 9.41548 19.375 9.70163 19.375 10Z" fill="#003028"/>
                                </svg>
                            </div>
                            <div class="item_content">
                                <div class="item_content_intro">
                                    <?=$item['item_content']?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                endif;
                ?>

            </div>
        </div>
    </div>
    <script>
        <?php include('accordion-section.js');?>
    </script>
</section>