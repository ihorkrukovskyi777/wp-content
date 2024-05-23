<style>
/*templates-parts/css-parts/footer-css.php*/
/*Moduls*/
/* image for wysiwyg */    
.alignleft {
	float: left;
	margin: 7px 28px 28px 0;
    height: auto!important;
}
.alignright {
	float: right;
	margin: 7px 0 28px 28px;
    height: auto!important;
}
.aligncenter {
	clear: both;
	display: block;
	margin: 7px auto;
    height: auto!important;
}
/* end image for wysiwyg */
/*Footer Customization*/



/* modals */
.custom-modal .trigger{
    text-align: center;
    padding: 7px 13px;
    background: #3e3e3e;
    color: #fff;
    font-size: 15px;
    outline: none;
    border: none;
    border-radius: 5px;
    font-family: cursive;
}

.custom-modal {
    position: fixed;
    left: 0;
    z-index: 999;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);
}
.custom-modal.transition {
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
.custom-modal .modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.custom-modal .close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.custom-modal .close-button:hover {
    background-color: darkgray;
}
.custom-modal.show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}
/* end modals */
footer {
    padding: 20px 0;
}
footer .footer_item h3 {
    margin: 0 0 18px 0;
    font-size: 18px;
    line-height: 1.05;
    font-weight: 600;
    font-family: var(--font);
    text-transform: uppercase;
}

footer .footer_item ul {
    padding: 0;
    margin: 0;
}

footer .footer_intro {
    display: grid;
    grid-template-columns: 1fr 2fr;
}
footer .footer_items {
    display: flex;
    flex-wrap: wrap;
}
footer .footer_item {
    margin-right: 100px;
}
footer .footer_item:last-of-type {
    margin-right: 0;
}
footer .footer_item li a {
    padding: 5px 0;
    display: inline-block;
    font-size: 16px;
    color: var(--text_color);
}
footer .footer_item li {
    margin-bottom: 4px;
}
footer .footer_item li:last-of-type {
    margin-bottom: 0;
}
footer .footer_item li a:hover {
    color: var(--main_color);
}
footer .copyright-footer p,
footer .copyright-footer .links{
    font-size: 12px;
    line-height: 1.16;
    margin: 0;
}
footer .copyright-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
</style>









