$(document).ready(function () {
    //initialize swiper when document ready  
    var swiper = new Swiper('.slider-lv1', {
        slidesPerView: 5,
        paginationClickable: true,
        spaceBetween: 15,
        autoplay: 5500,
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev',
        autoplayDisableOnInteraction: false
    });
    var mySwiper = new Swiper ('.slider-lv2', {
        // Optional parameters
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 15,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });      
    var mySwiper = new Swiper ('.slider-lv3', {
        // Optional parameters
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 4000,
        speed: 800,
        autoplayDisableOnInteraction: false
    });
    var mySwiper = new Swiper ('.testimonial-slider-ver', {
        // Optional parameters
        direction: 'vertical',
        slidesPerView: 5,
        autoHeight: true
        // pagination: '.swiper-pagination',
    });
    var SwiperTestiHori = new Swiper ('.testimonial-slider-hori', {
        // Optional parameters
         slidesPerView: 1,
         autoplay: 3000,
        pagination: '.swiper-pagination',
        spaceBetween: 5,
        autoplay: false,
        autoplayDisableOnInteraction: false
    });

    $(document).ready(function(){
        $('#id_city').on('change',function(){
            var id_city = $(this).val();
            var token = $('input[name="_token"]').val();
            console.log(token);
            $.ajax({
                url: '{!!route("contact.postAjaxCenter")!!}',
                data: {'_token':token, 'data':id_city},
                type: "POST",
                success:function(data){
                    $('#id_center').val(data.rs);
                },
            })
        });

        $('#formOSC').validate({
            errorElement: "span",
            rules: {
                name: "required",
                email: "required",
                phone: {required: true, digits: true, minlength: 10, maxlength: 11},
                id_city: "required",
                country: "required"
            },
            messages: {
                name: "Vui lòng nhập họ tên",
                phone: {
                    required: "Vui lòng nhập số điện thoại di động",
                    digits: "Vui lòng nhập số điện thoại di động",
                    minlength: "Vui lòng nhập số điện thoại di động",
                },
                email: "Vui lòng nhập email",
                id_city: "Vui lòng chọn Thành Phố bạn đăng ký",
                country: "Vui lòng chọn quốc gia bạn muốn du học"
            },
            submitHandler:function(data){
                var strRandom = Math.random().toString(36);
                var d = new Date();
                strRandom += d.toLocaleString();
                $("input[name='id_hash']").val($.md5(strRandom));
                _swga.postLead();
            },
        })
    })
    
});