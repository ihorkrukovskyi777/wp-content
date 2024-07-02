<style>
    .framed_text_and_image{
        position: relative;
        margin: 100px 0;
    }
    .framed_text_and_image .container {
        max-width: 100%;
        padding: 0 calc((100vw - 980px) / 2) 0 0;
    }
    .framed_text_and_image .wrapper{
        display: grid;
        grid-template-columns: 1.23fr 1fr;
        grid-gap: 20px 52px;
    }
    .framed_text_and_image .title{
        margin: 0;
    }
    .framed_text_and_image .text{
        font-size: 18px;
    }
    .framed_text_and_image .text p{
        margin: 0;
    }
    .framed_text_and_image .text p:not(:first-child){
        margin: 30px 0 0;
    }
    .framed_text_and_image .image_block{
        position: relative;
        padding-top: 92%;
        border-radius: 10px;
        overflow: hidden;
    }
    .framed_text_and_image .image_block img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    @media(min-width:992px){
        .framed_text_and_image::before {
            content: '';
            position: absolute;
            top: 51px;
            right: 0;
            width: calc((100vw - 980px) / 2 + 230px);
            height: calc(100% - 102px);
            background: var(--main_color);
            border-radius: 46px 0 0 46px;
        }
        .framed_text_and_image .wrapper {
            border: 1px solid var(--text_color);
            border-left: 0;
            border-radius: 0 46px 46px 0;
            padding: 115px 65px 115px calc((100vw - 1280px) / 2);
            position: relative;
        }
        .framed_text_and_image .text{
            grid-row: 2 / 3;
        }
        .framed_text_and_image .image_block{
            grid-row: 1 / 3;
        }
    }
    @media(max-width:1311px){
        .framed_text_and_image .container {
            padding-right: 146px;
        }
        .framed_text_and_image::before {
            width: 376px;
        }
        .framed_text_and_image .wrapper {
            padding-left: 16px;
        }
    }
    @media(max-width:991px){
        .framed_text_and_image .container {
            padding: 0 16px;
        }
        .framed_text_and_image .wrapper {
            grid-template-columns: 100%;
            grid-row-gap: 50px;
            padding: 0;
        }
        .framed_text_and_image .title {
            text-align: center;
        }
        .framed_text_and_image .text{
            order: 1;
            margin-top: 15px;
        }
        .framed_text_and_image .image_block {
            padding-top: 64%;
            overflow: visible;
        }
        .framed_text_and_image .image_block img {
            border-radius: 10px;
        }
        .framed_text_and_image .image_block::before {
            content: '';
            position: absolute;
            top: -27px;
            right: -16px;
            width: 71.5vw;
            height: calc(100% + 54px);
            background: var(--main_color);
            border-radius: 10px 0 0 10px;
        }
    }
    @media(max-width:767px){
        .framed_text_and_image{
            margin: 60px 0 90px;
        }
    }
</style>