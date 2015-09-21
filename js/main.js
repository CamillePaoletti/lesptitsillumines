$(document).ready(function() {

$('nav a.nav-button').on('click', function(e){
    //$(this).addClass('active').siblings().removeClass('active');
    e.preventDefault();
    //$('html, body').scrollTop(1800);
    var element=$(this).attr('href');
    var posi=$(element).position().top;
    $('html, body').animate({'scrollTop':(posi-66),});
});

$(document).on('scroll', function(e){
    var posiScroll=$('html').scrollTop();
    if(posiScroll>180){
         //$('header').css({'position':'fixed'})
         $('.header-container').addClass('anim');
         $('.lucien').addClass('anim');
    }else{
        //$('header').css({'position':'static'})
        $('.header-container').removeClass('anim');
        $('.lucien').removeClass('anim');
    }
});

$('nav a:last-child').on('click', function(){
    $('.equipe').css('background-color', 'pink');
});

$('.offrir').hover(
    function(){$('.pop-upOffrir').removeClass('hidden');},
    function(){$('.pop-upOffrir').addClass('hidden');}
);

$('.abonner').hover(
    function(){$('.pop-upAbonner').removeClass('hidden');},
    function(){$('.pop-upAbonner').addClass('hidden');}
);

$('.carousel-etapes').owlCarousel({
    pagination: true,
    singleItem: true,
    paginationNumbers: true,
});

$('.carousel-etapes .owl-page').on('click', function(){
    var numero = $(this).index(".owl-page");
    $('.legende0, .legende1, .legende2').hide()
    $('.legende'+numero).fadeIn(500);
})

$('.carousel-kit-img').owlCarousel({
    pagination: true,
    singleItem: true,
});

$('.carousel-kits').owlCarousel({
    items: 4,
    navigation: true
});

$('.carousel-kits .owl-prev').html('<i class="fa fa-caret-left fa-3x"></i>');

$('.carousel-kits .owl-next').html('<i class="fa fa-caret-right fa-3x"></i>');

$('.carousel-kits figure').on('click', function(){
    var cekit = $(this).data('kit');
    //console.log($(this).data('kit'));
    $('.kit').hide();
    $('.'+cekit).show();
    //$('figure').removeClass('hidden');
    //$(this).addClass('hidden')
});

$('.btn-newsletter').on('click', function(){
    $.post(
        'php/news_add_mail.php',
        {email: $('.text-newsletter')[0].value},
        function(data){alert(data);}
    );
});

})