$(document).ready(function() {
    $('.nav-link.active .sub-menu').slideDown();
    // $("p").slideUp();

    $('#sidebar-menu .arrow').click(function() {
        $(this).parents('li').children('.sub-menu').slideToggle();
        $(this).toggleClass('fa-angle-right fa-angle-down');
    });
});
mix.js([
    'resources/js/app.js',
    'node_modules/tinymce/tinymce.min.js',
], 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css');

// mix.copyDirectory('node_modules/tinymce/plugins', 'public/js/tinymce/plugins');
// mix.copyDirectory('node_modules/tinymce/themes', 'public/js/tinymce/themes');
// mix.copyDirectory('node_modules/tinymce/icons', 'public/js/tinymce/icons');
// mix.copyDirectory('node_modules/tinymce/skins', 'public/js/tinymce/skins')