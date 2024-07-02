<section class="text_cards_block">
    <?php include('text_cards_block-css.php')?>
    <div class="container">
        <h3 class="title"><?=get_field('title')?></h4>
        <?php
            $cards = get_field('cards_items');
            if($cards):
        ?>
            <div class="cards_wrap">
                <?php foreach($cards as $card):?>
                    <div class="card_item">
                        <h4 class="card_title"><?=$card['card_title']?></h4>
                        <div class="card_text"><?=$card['card_text']?></div>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
</section>