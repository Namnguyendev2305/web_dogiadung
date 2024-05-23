// thanh cuon
jQuery(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});
jQuery('.scrollToTop').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 800);
    return false;
});
// category
const toggler = document.querySelector("#Togglers");
const categoriesItem = document.querySelector(".categories_item");
toggler.addEventListener("click", () => {
    categoriesItem.classList.toggle("active");
});
// ảnh
$(document).ready(function () {
    $('.image_con img').click(function () {
        let image_file = $(this).attr('src');
        $('#mainImage').attr('src', image_file);
    });
});
// active li
let item_nav = document.querySelectorAll(".nav_list li");
item_nav.forEach(item_navs=>{
    item_navs.addEventListener("click",function(){
        remove_active();
        item_navs.classList.add("active");
    })
})
function remove_active(){
    item_nav.forEach(item_navs=>{
        item_navs.classList.remove("active");
    })
}




