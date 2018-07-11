

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3, //số icon hiển thị
    loop:true, //vòng lặp
    margin:10,
    dots:false,//tắt cái dấu tròn nhiều chấm phía dưới
    // nav:false, //dùng để hiện thị 2 nút pav-next
    autoplay:true,
    autoplayTimeout:5000, //thời gian chuyển động
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})