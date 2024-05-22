<style>
/*Start Settings*/
:root {
    --main_color: #9AC7AF;
    --hover_color: #0088BD;
    --text_color: #003028;
    --font: "Inter", sans-serif;
    --font_second: "Ubuntu", sans-serif;
}

body{
    font: 400 16px/1.5 var(--font);
    color: var(--text_color);
    margin: 0;
}
.button_basic{
    padding: 12px 40px;
    display: inline-block;
    font-size: 18px;
    line-height: 1.22;
    letter-spacing: .3px;
    border-radius: 25px;
    background-color: var(--main_color);
    border: 1px solid var(--main_color);
    color: #fff;
    text-align: center;
}
.button_basic:hover {
    background-color: #fff;
    color: var(--main_color);
}
a {
    transition: .3s ease-in-out;
}
a,
a:hover,
a:focus{
    text-decoration: none;
}
ul,
ol{
    list-style: none;
}
.container{
    width: 100%;
    padding: 0 20px;
    margin: 0 auto;
    max-width: 1240px;
}
*,
:after,
:before{
    box-sizing: border-box;
}
body > .content{
    min-height: 650px;
    width: 100%;
    clear: both;
}
.customClear:before,
.customClear:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;
    clear:both;
}
button,
input[type="submit"],
a img{
    transition:all 0.3s linear;
}
input:not([type="checkbox"]),
select{
    -moz-appearance: none;
    -webkit-appearance: none;
}
iframe,
img{
    max-width: 100%;
}
img{
    vertical-align: middle;
}
a img{
    border: none;
}
input,
textarea,
select{
    border-radius: 0;
    border: none;
    box-shadow: none;
}
h1 {
    font-family: var(--font_second);
    font-size: 100px;
    color: var(--text_color);
}
h2 {
    font-family: var(--font_second);
    font-size: 48px;
    color: var(--text_color);
}
h3 {
    font-family: var(--font_second);
    font-size: 38px;
    color: var(--text_color);
}
h4 {
    font-family: var(--font_second);
    font-size: 28px;
    color: var(--text_color);
}
h5 {
    font-family: var(--font_second);
    font-size: 20px;
    color: var(--text_color);
}
h6 {
    font-family: var(--font_second);
    font-size: 18px;
    color: var(--text_color);
}


</style>