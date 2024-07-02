<style>
    .text_cards_block{
        margin: 100px 0;
    }
    .text_cards_block .container{
        max-width: 1312px;
    }
    .text_cards_block .title{
        font-size: 36px;
        margin: 0;
        text-align: center;
    }
    .text_cards_block .cards_wrap{
        /* display: grid; */
        /* grid-template-columns: repeat(3, 1fr); */
        grid-gap: 30px 32px;
        margin-top: 40px;
        
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .text_cards_block .card_item{
        border: 1px solid var(--text_color);
        border-radius: 12px;
        padding: 40px 20px;

        width: calc((100% - 64px) / 3);
    }
    .text_cards_block .card_title{
        margin: 0;
        text-align: center;
    }
    .text_cards_block .card_text{
        margin-top: 10px;
    }


    @media(max-width:991px){
        /* .text_cards_block .cards_wrap{
            grid-template-columns: 1fr 1fr;
        } */
        .text_cards_block .card_item {
            width: calc((100% - 32px) / 2);
        }
    }
    @media(max-width:767px){
        .text_cards_block {
            margin: 60px 0;
        }
        .text_cards_block .cards_wrap{
            /* grid-template-columns: 100%; */
            margin-top: 20px;
        }

        .text_cards_block .card_item {
            width: 100%;
            border-radius: 10px;
            padding: 30px 38px;
        }
    }
</style>