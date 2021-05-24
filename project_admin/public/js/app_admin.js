$(document).ready(function() {
    $('.nav-link.active .sub-menu').slideDown();
    $("p").slideUp();

    $('#sidebar-menu .arrow').click(function() {
        $(this).parents('li').children('.sub-menu').slideToggle();
        $(this).toggleClass('fa-angle-right fa-angle-down');
    });
});