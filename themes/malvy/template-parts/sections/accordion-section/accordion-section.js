document.addEventListener("DOMContentLoaded", function(event) {

    document.querySelectorAll('.accordion-section .item_title').forEach((item) =>

        item.addEventListener('click', () => {
            let elHeight = item.nextElementSibling.scrollHeight;

            const sibling = item.nextElementSibling;
            if(sibling.classList.contains('active')) {
                item.classList.remove('active');
                sibling.classList.remove('active');
                sibling.style.height = '0';
            } else {
                sibling.classList.add('active');
                item.classList.add('active');
                sibling.style.height = elHeight +'px';
            }
        })
    )
});