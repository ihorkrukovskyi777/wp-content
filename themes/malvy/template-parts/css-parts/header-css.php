<style>
/* Header Styles */
header{
    position: relative;
    width: 100%;
    z-index: 999;
    background: #fff;
}
header .container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 26px;
    padding-bottom: 26px;
}
header nav {
    display: flex;
}
header nav ul {
    display: flex;
}
header nav li{
    position: relative;
}

header nav li.no_open > a {
    /*pointer-events: none;*/
    /*touch-action: none;*/
    cursor: default;

}


header nav li a{
    padding: 13px 26px;
    color: var(--text_color);
    display: block;
    text-decoration: none!important;
    font-size: 18px;
    line-height: 1.16;
    font-weight: 500;
    position: relative;
}
header nav li a:hover{
    color: var(--main_color);
}
header nav .menu-header-menu-container > ul > li{
    display: inline-block;
}
header nav .menu-header-menu-container > ul > li > a{
    text-transform: uppercase;
}
header nav .menu-item-has-children .sub-menu{
    position: absolute;
    top: calc(100% + 10px);
    max-width: 100%;
    left: 0;
    padding-top: 0;
    box-shadow: 0 4px 4px rgb(0 0 0 / 25%);
    display: block;
    overflow: hidden;
    height: 0;
    transition: .4s;
}
/* header .fixing.activated nav .menu-item-has-children .sub-menu {
     top: 120%;
}*/

header nav .menu-item-has-children .sub-menu li{
    width: 100%;
    max-width: 100%;
}
header nav .menu-item-has-children .sub-menu li a{
    padding: 12px 25px;
    display: block;
    background: #F7F6F4;
    color: var(--text_color);
    margin-top: 0;
    text-align: center;
    border-top: 1px solid rgba(22, 46, 58, 0.2);
    font-size: 14px;
}
header nav .menu-item-has-children .sub-menu li:first-child a{
    border-top: 9px solid var(--text_color);
}
header nav .menu-item-has-children .sub-menu li a:hover{
    color: var(--text_color);
}
header nav .menu-item-has-children .sub-menu .sub-menu{
    top: 0;
    left: 100%;
}
header nav .menu-item-has-children .sub-menu .caret{
    margin-left: 4px;
}
.openMenu{
    display: block!important;
}
/*sticky header*/
.fixing{
    top: -70px;
    transition: top 0.3s
}
.fixing.activated{
    position: fixed;
    width: 100%;
    left: 0;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,.16)
}
.fixing.activated .container{
    padding-top: 10px;
    padding-bottom: 10px;
}
/*end sticky header*/
/*mobile menu*/
.mobileMenu{
    display: none;
    cursor: pointer;
    height: 38px;
    padding: 8px 9px;
    margin-left: 15px;
    width: 50px;
}
.iconAnime{
    position: relative;
    height: 100%;
    width: 100%;
}
.iconAnime span{
    height: 3px;
    width: 100%;
    border-radius: 3px;
    background: var(--main_color);
    position: absolute;
    left: 0;
}
.iconAnime span:first-child{
    top: 0;
    transition: all 0.25s;
}
.iconAnime span:nth-child(2){
    top: calc(50% - 2px);
    transition: all 0.25s;
}
.iconAnime span:last-child{
    bottom: 0;
    transition: all 0.25s;
}
.mobileMenuOpen .iconAnime span:first-child{
    top: calc(50% - 4px);
    transform: rotate(225deg);
}
.mobileMenuOpen .iconAnime span:nth-child(2){
    top: calc(50% - 2px);
    display:none;
}
.mobileMenuOpen .iconAnime span:last-child{
    top: 7px;
    transform: rotate(135deg);
}
.menu-item-has-children .thereCaret.active{
    transform: rotate(90deg);
}
.menu-item-has-children .thereCaret{
    position: absolute;
    top: 0;
    right: 5px;
    cursor: pointer;
    vertical-align: middle;
    padding: 10px;
    display: flex;
    align-items: center;
    transition: .3s;
}
.thereCaret img{
    height: 25px;
    transition: 0.3s;
    display: block;
}
@media(min-width: 1200px) {
    header .menu-item-has-children .thereCaret {
        display: none;
    }
}
/*end mobile menu*/
/*End Header Styles*/

/*Responsivness*//*Responsivness*//*Responsivness*/

@media(min-width:1199px){
    header nav li a {
        position: relative;
    }

    header nav .hidden-overflow {
        overflow: inherit !important;
    }
    header nav .menu-item-has-children .sub-menu .sub-menu {
        overflow: hidden !important;
    }

    header nav li.menu-item-has-children > a:before {
        position: absolute;
        content: '';
        display: block;
        width: 100%;
        height: 30px;
        background: transparent;
        top: 100%;
        left: 0;
        pointer-events: none;
        z-index: 1;
        cursor: pointer;
    }

    header nav li.menu-item-has-children > a:hover:before {
        pointer-events: inherit;
        background: transparent;
    }
}
@media(min-width:1199px){
    .menu-item-has-children ul li a:hover{
        background: var(--main_color) !important;
        color: var(--text_color) !important;
    }
}

@media(max-width: 1199px) {
    header nav li a {
        font-size: 16px;
        padding: 13px 19px;
    }
    header nav .menu-item-has-children .sub-menu li a {
        font-size: 12px;
        width: 100%;
    }
    header nav li a {
        width: 100%;
    }

    header nav {
        padding: 0;
        margin-top: 0;
        background: var(--main_color);
        overflow: auto;

    }
    header nav::-webkit-scrollbar {
        width: 0;
    }

    header nav .menu-item-has-children .sub-menu {
        /*transition: .4s;
        overflow: hidden;
        height: 0;*/
    }
    header nav ul {
        flex-direction: column;
    }
    header nav li{
        display: block!important;
        text-align: left;
    }
    header nav li a {
        padding: 10px 15px;
        margin-top: 0;
        color: var(--text_color) !important;
        background: none!important;
        display: inline-block;
    }
    header nav li a:after {
        display: none;
    }
    .mobileMenu{
        display: block;
    }

    header nav {
        height: 0;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        transition: .4s all;
    }

    .fixing .wrap-nav{
        overflow: hidden;
    }



    .menu-item-has-children ul li a{
        padding: 5px 15px;
    }
    .header-nav .menu-header-menu-container > ul > li{
        margin-right: 0!important;
    }
    .header-nav .menu-header-menu-container > ul > li > a{
        text-transform: uppercase;
        padding: 10px 15px!important;
    }
    .sub-menu{
        padding-left: 20px!important;
        text-transform: uppercase;
    }
    .sub-menu,
    .sub-menu .sub-menu{
        position: static!important;
    }

    header nav .menu-item-has-children .sub-menu {
        box-shadow: none;
    }
    header nav .menu-item-has-children .sub-menu li:first-child a {
        border-top: none;
    }
    header nav .menu-item-has-children .sub-menu li a {
        text-align: left;
    }
}
@media(max-width:600px){
    .fixing.activated{
        top:0!important;
    }
}
</style>
