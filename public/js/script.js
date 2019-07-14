( function($) {
    var listItemHeight = $(".naccs ul").find("li:eq(" + 0 + ")").innerHeight();      
        $(".naccs ul").height(listItemHeight + "px");
    
    $(document).ready(function() {
        //sliders
        $(".banners").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            navElement : "img alt='arrow' src='http://apoehali.com.ua/premiumline/img/left.png'",
            smartSpeed: 1000,
            loop:true,
            autoplay:false,
            autoplayTimeout:5000,
            responsiveClass:true,
        });
        $(".relative-products-slider-wrap").owlCarousel({
            dots: true,
            smartSpeed: 1000,
            loop:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                648:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });

        /* lightSlider */

        $('.service-slider').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:3,
            slideMargin:0,
            thumbMargin: 20,
            galleryMargin: 20,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '.service-slider .lslide'
                });
            }   
        });

        var car_images_slider = $('#car_images_gallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:3,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#car_images_gallery .lslide'
                });
            }   
        });

        $('#goToPrevSlide').click(function(){
            car_images_slider.goToPrevSlide(); 
        });
        $('#goToNextSlide').click(function(){
            car_images_slider.goToNextSlide(); 
        });

        //end sliders

        /* Date time picker */

        $('input[name="borrowDate"]').datepicker({
            format: 'dd/mm/yyyy',
            orientation: "bottom auto",
            language: "ru",
            todayHighlight: true,
            toggleActive: true
        });

        $('input[name="returnDate"]').datepicker({
            format: 'dd/mm/yyyy',
            orientation: "bottom auto",
            language: "ru",
            todayHighlight: true,
            toggleActive: true
        });

        $('#header-form-input-pick-up').datepicker({
            format: 'dd/mm/yyyy',
            orientation: "bottom auto",
            language: "ru",
            todayHighlight: true,
            toggleActive: true
        });

        $('#header-form-input-return').datepicker({
            format: 'dd/mm/yyyy',
            orientation: "bottom auto",
            language: "ru",
            todayHighlight: true,
            toggleActive: true
        });

        //$("#header-form-input-pick-up-time");
        
        //end date time picker

        //ratings
        $('.testimonial-rating').barrating({
            theme: 'css-stars'
        });
        //end ratings

        //validate
        $("#reservationForm").validate();
        $("#orderServiceForm").validate();

        //Wizard
        var wizard_click = 1;
        $('.wizard_click').text(wizard_click.toString());
        $('.tab-next-button').click(function() {
            wizard_click++;
            $('.wizard_click').text(wizard_click.toString());
            $('.nav-tabs .active').parent().next('li').find('a').trigger('click');

            $('.tab-previous-button').removeClass('wizard-button-disactive');
            $('.tab-previous-button').removeClass('disabled');
            $('.tab-previous-button').attr('aria-disabled', 'false');

            if (wizard_click == 2) {
                $('.continue_pick_car').text('Выбрать автомобиль');
                $('.continue_pick_car').removeClass('home-form-rent-car-btn');

                var departure_point = $('#home-form-input-departure').children("option:selected").text();
                $('.home-form-departure').text(departure_point);
                var destination_point = $('#home-form-input-destination').children("option:selected").text();
                $('.home-form-destination').text(destination_point);
                var date_pick_up = $('#header-form-input-pick-up').val();
                $('.home-form-departure-date').text(date_pick_up);
                var date_return = $('#header-form-input-return').val();
                $('.home-form-return-date').text(date_return);
                var passengers = $('.btn-passangers-count').text();
                $('.home-form-passangers-count').text(passengers);

                var time_pick_up = $('#header-form-input-pick-up-time').val();
                $('input[name="input_departure_time"]').val(time_pick_up);
                var time_return = $('#header-form-input-return-time').val();
                $('input[name="input_return_time"]').val(time_return);
                $('.home-form-departure-time').text(time_pick_up);
                $('.home-form-return-time').text(time_return);

                var adult_count = $('#adult-count').val();
                var child5plus_count = $('#child5plus-count').val();
                var child1plus_count = $('#child1plus-count').val();
                var infant_count = $('#infant-count').val();
            } else if (wizard_click == 3) {
                $('.tab-next-button').addClass('wizard-button-disactive');
                $('.tab-next-button').addClass('disabled');
                $('.tab-next-button').attr('aria-disabled', 'true');
                $('.pick-car-btn').css('display', 'none');
                $('.order-car-btn').css('display', 'block');
                $('.search-place').css('z-index', '1000');

                //-------

                var pick_up_date_parts_1 = $('#header-form-input-pick-up').val();
                var return_date_parts_2 = $('#header-form-input-return').val();

                pick_up_date_parts_1 = pick_up_date_parts_1.split('/');
                return_date_parts_2 = return_date_parts_2.split('/');

                var pick_up_date_1 = new Date(pick_up_date_parts_1[2], pick_up_date_parts_1[1] - 1, pick_up_date_parts_1[0]);
                var return_date_2 = new Date(return_date_parts_2[2], return_date_parts_2[1] - 1, return_date_parts_2[0]);

                var timeDiff = Math.abs(return_date_2.getTime() - pick_up_date_1.getTime());
                var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                var selected_car_rent_price = parseFloat($('input[name="input_selected_car_rent_price"]').val());
                var rent_car_total_price = (selected_car_rent_price * diffDays);
                $('.home-form-total-price').text(rent_car_total_price);
                $('input[name="total_price"]').val(rent_car_total_price);

                //-------
            }
        });
    
        $('.tab-previous-button').click(function() {
            wizard_click--;
            $('.search-place').css('z-index', '9');
            $('.wizard_click').text(wizard_click.toString());
            $('.nav-tabs .active').parent().prev('li').find('a').trigger('click');

            $('.tab-next-button').removeClass('wizard-button-disactive');
            $('.tab-next-button').removeClass('disabled');
            $('.tab-next-button').attr('aria-disabled', 'false');

            if (wizard_click == 2) {
                $('.continue_pick_car').text('Выбрать автомобиль');
                $('.continue_pick_car').removeClass('home-form-rent-car-btn');
                $('.pick-car-btn').css('display', 'block');
                $('.order-car-btn').css('display', 'none');
            } else if (wizard_click == 1) {
                $('.tab-previous-button').addClass('wizard-button-disactive');
                $('.tab-previous-button').addClass('disabled');
                $('.tab-previous-button').attr('aria-disabled', 'true');
                $('.continue_pick_car').text('Заказать трансфер');
                $('.continue_pick_car').removeClass('home-form-rent-car-btn');
            }
        });

        var form_errors = [];

        $('.continue_pick_car').click(function() {
            var form_input_departure = $('#home-form-input-departure').children("option:selected").text();
            var form_input_destination = $('#home-form-input-destination').children("option:selected").text();
            var header_form_input_return = $('#header-form-input-return').val();
            if (form_input_destination == 'Выбрать...') {
                form_errors[0] = 'enter destination value';
                $('.header-form-block-errors').css('display', 'block');
                $('#home-form-input-destination').addClass('form-control-border');
            } else {
                form_errors.splice(0, 1)
                $('.header-form-block-errors').css('display', 'none');
                $('#home-form-input-destination').removeClass('form-control-border');
            }
            if (header_form_input_return == '') {
                form_errors[1] = 'enter date return value';
                $('.header-form-block-errors').css('display', 'block');
                $('#header-form-input-return').addClass('form-control-border');
            } else {
                form_errors.splice(1, 1)
                $('.header-form-block-errors').css('display', 'none');
                $('#header-form-input-return').removeClass('form-control-border');
            }

            if (form_errors.length == 0 ) {
                wizard_click++;
                $('.wizard_click').text(wizard_click.toString());
                $('.nav-tabs .active').parent().next('li').find('a').trigger('click');

                $('.tab-previous-button').removeClass('wizard-button-disactive');
                $('.tab-previous-button').removeClass('disabled');
                $('.tab-previous-button').attr('aria-disabled', 'false');

                if (wizard_click == 1) {
                    $('.continue_pick_car').text('Выбрать автомобиль');
                    $('.continue_pick_car').removeClass('home-form-rent-car-btn');
                }

                if (wizard_click == 2) {
                    $('.continue_pick_car').text('Выбрать автомобиль');
                    $('.continue_pick_car').removeClass('home-form-rent-car-btn');

                    var departure_point = $('#home-form-input-departure').children("option:selected").text();
                    $('.home-form-departure').text(departure_point);
                    var destination_point = $('#home-form-input-destination').children("option:selected").text();
                    $('.home-form-destination').text(destination_point);
                    var date_pick_up = $('#header-form-input-pick-up').val();
                    $('.home-form-departure-date').text(date_pick_up);
                    var date_return = $('#header-form-input-return').val();
                    $('.home-form-return-date').text(date_return);
                    var passengers = $('.btn-passangers-count').text();
                    $('.home-form-passangers-count').text(passengers);

                    var time_pick_up = $('#header-form-input-pick-up-time').val();
                    $('input[name="input_departure_time"]').val(time_pick_up);
                    var time_return = $('#header-form-input-return-time').val();
                    $('input[name="input_return_time"]').val(time_return);
                    $('.home-form-departure-time').text(time_pick_up);
                    $('.home-form-return-time').text(time_return);

                    var adult_count = $('#adult-count').val();
                    var child5plus_count = $('#child5plus-count').val();
                    var child1plus_count = $('#child1plus-count').val();
                    var infant_count = $('#infant-count').val();
                    
                } else if (wizard_click == 3) {
                    $('.tab-next-button').addClass('wizard-button-disactive');
                    $('.tab-next-button').addClass('disabled');
                    $('.tab-next-button').attr('aria-disabled', 'true');
                    $('.pick-car-btn').css('display', 'none');
                    $('.order-car-btn').css('display', 'block');
                    $('.search-place').css('z-index', '1000');

                    //-------

                    var pick_up_date_parts_1 = $('#header-form-input-pick-up').val();
                    var return_date_parts_2 = $('#header-form-input-return').val();

                    pick_up_date_parts_1 = pick_up_date_parts_1.split('/');
                    return_date_parts_2 = return_date_parts_2.split('/');

                    var pick_up_date_1 = new Date(pick_up_date_parts_1[2], pick_up_date_parts_1[1] - 1, pick_up_date_parts_1[0]);
                    var return_date_2 = new Date(return_date_parts_2[2], return_date_parts_2[1] - 1, return_date_parts_2[0]);

                    var timeDiff = Math.abs(return_date_2.getTime() - pick_up_date_1.getTime());
                    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                    var selected_car_rent_price = parseFloat($('input[name="input_selected_car_rent_price"]').val());
                    var rent_car_total_price = (selected_car_rent_price * diffDays);
                    $('.home-form-total-price').text(rent_car_total_price);
                    $('input[name="total_price"]').val(rent_car_total_price);

                    //-------
                }
            }
            
        });
    
        $('.home-header-form-change-car').click(function() {
            wizard_click--;
            $('.wizard_click').text(wizard_click.toString());
            $('.nav-tabs .active').parent().prev('li').find('a').trigger('click');
            $('.tab-next-button').removeClass('wizard-button-disactive');
            $('.tab-next-button').removeClass('disabled');
            $('.tab-next-button').attr('aria-disabled', 'false');
            $('.continue_pick_car').text('Выбрать автомобиль');
            $('.continue_pick_car').removeClass('home-form-rent-car-btn');
            $('.pick-car-btn').css('display', 'block');
            $('.order-car-btn').css('display', 'none');
            $('.search-place').css('z-index', '9');
        });

        //------------------

        $('#home-form-input-departure').on('change', function() {
            /*
            console.log('test');
            var selected_departure = $(this).children("option:selected").text();
            if (selected_departure != 'Выбрать...') {
                $('.form-order-transfer-button-active').css('display', 'block');
                $('.form-order-transfer-button-disable').css('display', 'none');
            } else {
                $('.form-order-transfer-button-active').css('display', 'none');
                $('.form-order-transfer-button-disable').css('display', 'block');
            } */
        });

        var order_transfer_price;

        $('.select-car-item-1').click(function() {
            $(this).toggleClass('car-selected');
            $('.select-car-item-2').removeClass('car-selected');
            $('.select-car-item-3').removeClass('car-selected');
            $(this).find('.card-selector-check').toggleClass('selector-check-enable');
            $('.select-car-item-2').find('.card-selector-check').removeClass('selector-check-enable');
            $('.select-car-item-3').find('.card-selector-check').removeClass('selector-check-enable');

            var car_image = $(this).find('.card-car-image-item').attr("car-image");
            var car_title = $(this).find('.card-car-title').text();
            var car_id = $(this).find('.card-car-id').text();
            var car_rent_price = $(this).find('.car_rent_price_day').text();
            $(".form-selected-car-image").attr("src",car_image);
            $(".form-selected-car-name").text(car_title);
            $('input[name="selected_car_id"]').val(car_id);
            $('input[name="selected_car_rent_price"]').val(car_rent_price);

            var pick_up_date_parts_1 = $('#header-form-input-pick-up').val();
            var return_date_parts_2 = $('#header-form-input-return').val();

            var pick_up_time_parts_1 = $('#header-form-input-pick-up-time').val();
            var return_time_parts_2 = $('#header-form-input-return-time').val();

            $('#car-id').text($('input[name="selected_car_id"]').val());
            $('#car-rent-price').text($('input[name="selected_car_rent_price"]').val());
            
            var point_departure = $('#home-form-input-departure').children("option:selected").text();
            var point_destination = $('#home-form-input-destination').children("option:selected").text();

            $('input[name="departure"]').val(point_departure);
            $('input[name="destination"]').val(point_destination);

            $('#point_departure').text(point_departure);
            $('#point_destination').text(point_destination);

            console.log(point_departure, point_destination);

            if (point_departure != 'Выбрать...') {
                $('.form-order-transfer-button-active').css('display', 'block');
                $('.form-order-transfer-button-disable').css('display', 'none');
            } else {
                $('.form-order-transfer-button-active').css('display', 'none');
                $('.form-order-transfer-button-disable').css('display', 'block');
            }

            if (return_date_parts_2) {
                pick_up_date_parts_1 = pick_up_date_parts_1.split('/');
                return_date_parts_2 = return_date_parts_2.split('/');

                pick_up_time_parts_1 = pick_up_time_parts_1.split(':');
                return_time_parts_2 = return_time_parts_2.split(':');

                var pick_up_date_1 = new Date(pick_up_date_parts_1[2], pick_up_date_parts_1[1] - 1, pick_up_date_parts_1[0], pick_up_time_parts_1[0], pick_up_time_parts_1[1]);
                var return_date_2 = new Date(return_date_parts_2[2], return_date_parts_2[1] - 1, return_date_parts_2[0], return_time_parts_2[0], return_time_parts_2[1]);

                $('#pick_up_date').text(pick_up_date_1);
                $('#return_date').text(return_date_2);

                var timeDiff = Math.abs(return_date_2.getTime() - pick_up_date_1.getTime());
                var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                var selected_car_rent_price = parseFloat(car_rent_price);
                var rent_car_total_price = (selected_car_rent_price * diffDays);
                $('.home-form-total-price').text(rent_car_total_price);
                $('input[name="total_price"]').val(rent_car_total_price);
            } else {
                $('.home-form-total-price').text(car_rent_price);
                $('input[name="total_price"]').val(car_rent_price);
            }
        });
        $('.select-car-item-2').click(function() {
            $(this).toggleClass('car-selected');
            $('.select-car-item-1').removeClass('car-selected');
            $('.select-car-item-3').removeClass('car-selected');
            $(this).find('.card-selector-check').toggleClass('selector-check-enable');
            $('.select-car-item-1').find('.card-selector-check').removeClass('selector-check-enable');
            $('.select-car-item-3').find('.card-selector-check').removeClass('selector-check-enable');

            var car_image = $(this).find('.card-car-image-item').attr("car-image");
            var car_title = $(this).find('.card-car-title').text();
            var car_id = $(this).find('.card-car-id').text();
            var car_rent_price = $(this).find('.car_rent_price_day').text();
            $(".form-selected-car-image").attr("src",car_image);
            $(".form-selected-car-name").text(car_title);
            $('input[name="selected_car_id"]').val(car_id);
            $('input[name="selected_car_rent_price"]').val(car_rent_price);

            var pick_up_date_parts_1 = $('#header-form-input-pick-up').val();
            var return_date_parts_2 = $('#header-form-input-return').val();

            var pick_up_time_parts_1 = $('#header-form-input-pick-up-time').val();
            var return_time_parts_2 = $('#header-form-input-return-time').val();

            $('#car-id').text($('input[name="selected_car_id"]').val());
            $('#car-rent-price').text($('input[name="selected_car_rent_price"]').val());
            
            var point_departure = $('#home-form-input-departure').children("option:selected").text();
            var point_destination = $('#home-form-input-destination').children("option:selected").text();

            $('#point_departure').text(point_departure);
            $('#point_destination').text(point_destination);

            console.log(point_departure, point_destination);

            if (point_departure != 'Выбрать...') {
                $('.form-order-transfer-button-active').css('display', 'block');
                $('.form-order-transfer-button-disable').css('display', 'none');
            } else {
                $('.form-order-transfer-button-active').css('display', 'none');
                $('.form-order-transfer-button-disable').css('display', 'block');
            }

            if (return_date_parts_2) {
                pick_up_date_parts_1 = pick_up_date_parts_1.split('/');
                return_date_parts_2 = return_date_parts_2.split('/');

                pick_up_time_parts_1 = pick_up_time_parts_1.split(':');
                return_time_parts_2 = return_time_parts_2.split(':');

                var pick_up_date_1 = new Date(pick_up_date_parts_1[2], pick_up_date_parts_1[1] - 1, pick_up_date_parts_1[0], pick_up_time_parts_1[0], pick_up_time_parts_1[1]);
                var return_date_2 = new Date(return_date_parts_2[2], return_date_parts_2[1] - 1, return_date_parts_2[0], return_time_parts_2[0], return_time_parts_2[1]);

                $('#pick_up_date').text(pick_up_date_1);
                $('#return_date').text(return_date_2);

                var timeDiff = Math.abs(return_date_2.getTime() - pick_up_date_1.getTime());
                var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                var selected_car_rent_price = parseFloat(car_rent_price);
                var rent_car_total_price = (selected_car_rent_price * diffDays);
                $('.home-form-total-price').text(rent_car_total_price);
                $('input[name="total_price"]').val(rent_car_total_price);
            } else {
                $('.home-form-total-price').text(car_rent_price);
                $('input[name="total_price"]').val(car_rent_price);
            }
        });
        $('.select-car-item-3').click(function() {
            $(this).toggleClass('car-selected');
            $('.select-car-item-1').removeClass('car-selected');
            $('.select-car-item-2').removeClass('car-selected');
            $(this).find('.card-selector-check').toggleClass('selector-check-enable');
            $('.select-car-item-2').find('.card-selector-check').removeClass('selector-check-enable');
            $('.select-car-item-1').find('.card-selector-check').removeClass('selector-check-enable');

            var car_image = $(this).find('.card-car-image-item').attr("car-image");
            var car_title = $(this).find('.card-car-title').text();
            var car_id = $(this).find('.card-car-id').text();
            var car_rent_price = $(this).find('.car_rent_price_day').text();
            $(".form-selected-car-image").attr("src",car_image);
            $(".form-selected-car-name").text(car_title);
            $('input[name="selected_car_id"]').val(car_id);
            $('input[name="selected_car_rent_price"]').val(car_rent_price);

            var pick_up_date_parts_1 = $('#header-form-input-pick-up').val();
            var return_date_parts_2 = $('#header-form-input-return').val();

            var pick_up_time_parts_1 = $('#header-form-input-pick-up-time').val();
            var return_time_parts_2 = $('#header-form-input-return-time').val();

            $('#car-id').text($('input[name="selected_car_id"]').val());
            $('#car-rent-price').text($('input[name="selected_car_rent_price"]').val());
            
            var point_departure = $('#home-form-input-departure').children("option:selected").text();
            var point_destination = $('#home-form-input-destination').children("option:selected").text();

            $('#point_departure').text(point_departure);
            $('#point_destination').text(point_destination);

            $('input[name="departure"]').val(point_departure);
            $('input[name="destination"]').val(point_destination);

            console.log(point_departure, point_destination);

            if (point_departure != 'Выбрать...') {
                $('.form-order-transfer-button-active').css('display', 'block');
                $('.form-order-transfer-button-disable').css('display', 'none');
            } else {
                $('.form-order-transfer-button-active').css('display', 'none');
                $('.form-order-transfer-button-disable').css('display', 'block');
            }

            if (return_date_parts_2) {
                pick_up_date_parts_1 = pick_up_date_parts_1.split('/');
                return_date_parts_2 = return_date_parts_2.split('/');

                pick_up_time_parts_1 = pick_up_time_parts_1.split(':');
                return_time_parts_2 = return_time_parts_2.split(':');

                var pick_up_date_1 = new Date(pick_up_date_parts_1[2], pick_up_date_parts_1[1] - 1, pick_up_date_parts_1[0], pick_up_time_parts_1[0], pick_up_time_parts_1[1]);
                var return_date_2 = new Date(return_date_parts_2[2], return_date_parts_2[1] - 1, return_date_parts_2[0], return_time_parts_2[0], return_time_parts_2[1]);

                $('#pick_up_date').text(pick_up_date_1);
                $('#return_date').text(return_date_2);

                var timeDiff = Math.abs(return_date_2.getTime() - pick_up_date_1.getTime());
                var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

                var selected_car_rent_price = parseFloat(car_rent_price);
                var rent_car_total_price = (selected_car_rent_price * diffDays);
                $('.home-form-total-price').text(rent_car_total_price);
                $('input[name="total_price"]').val(rent_car_total_price);
            } else {
                $('.home-form-total-price').text(car_rent_price);
                $('input[name="total_price"]').val(car_rent_price);
            }
        });
        
        $('.card-item-1').click(function() {
            $(this).toggleClass('car-selected');
            $('.card-item-2').removeClass('car-selected');
            $('.card-item-3').removeClass('car-selected');
            $(this).find('.card-selector-check').toggleClass('selector-check-enable');
            $('.card-item-2').find('.card-selector-check').removeClass('selector-check-enable');
            $('.card-item-3').find('.card-selector-check').removeClass('selector-check-enable');

            var car_image = $(this).find('.card-car-image-item').attr("car-image");
            var car_title = $(this).find('.card-car-title').text();
            var car_id = $(this).find('.card-car-id').text();
            var car_rent_price = $(this).find('.car_rent_price_day').text();
            $(".form-selected-car-image").attr("src",car_image);
            $(".form-selected-car-name").text(car_title);
            $('input[name="input_selected_car_id"]').val(car_id);
            $('input[name="input_selected_car_rent_price"]').val(car_rent_price);
        });
        $('.card-item-2').click(function() {
            $(this).toggleClass('car-selected');
            $('.card-item-1').removeClass('car-selected');
            $('.card-item-3').removeClass('car-selected');
            $(this).find('.card-selector-check').toggleClass('selector-check-enable');
            $('.card-item-1').find('.card-selector-check').removeClass('selector-check-enable');
            $('.card-item-3').find('.card-selector-check').removeClass('selector-check-enable');

            var car_image = $(this).find('.card-car-image-item').attr("car-image");
            var car_title = $(this).find('.card-car-title').text();
            var car_id = $(this).find('.card-car-id').text();
            var car_rent_price = $(this).find('.car_rent_price_day').text();
            $(".form-selected-car-image").attr("src",car_image);
            $(".form-selected-car-name").text(car_title);
            $('input[name="input_selected_car_id"]').val(car_id);
            $('input[name="input_selected_car_rent_price"]').val(car_rent_price);
        });
        $('.card-item-3').click(function() {
            $(this).toggleClass('car-selected');
            $('.card-item-1').removeClass('car-selected');
            $('.card-item-2').removeClass('car-selected');
            $(this).find('.card-selector-check').toggleClass('selector-check-enable');
            $('.card-item-2').find('.card-selector-check').removeClass('selector-check-enable');
            $('.card-item-1').find('.card-selector-check').removeClass('selector-check-enable');

            var car_image = $(this).find('.card-car-image-item').attr("car-image");
            var car_title = $(this).find('.card-car-title').text();
            var car_id = $(this).find('.card-car-id').text();
            var car_rent_price = $(this).find('.car_rent_price_day').text();
            $(".form-selected-car-image").attr("src",car_image);
            $(".form-selected-car-name").text(car_title);
            $('input[name="input_selected_car_id"]').val(car_id);
            $('input[name="input_selected_car_rent_price"]').val(car_rent_price);
        });

        $('input[name="car"]').val($( "#input_car_id option:selected" ).text());
        $('#input_car_id').on('change', function() {
            var selectedCar = $(this).children("option:selected").text();
            $('input[name="car"]').val(selectedCar);
        });

        $('#home-form-input-departure').on('change', function() {
            var selected_departure = $(this).children("option:selected").val();
            if (selected_departure == '2') {
                $('#modal-departure-address').modal('show');
            } else if (selected_departure == '3') {
                $('#modal-departure-station').modal('show');
            } else if (selected_departure == '4') {
                $('#modal-departure-hotels').modal('show');
            } else if (selected_departure == '5') {
                $('#modal-departure-cities').modal('show');
            }
        });

        $('#home-form-input-destination').on('change', function() {
            var selected_departure = $(this).children("option:selected").val();
            if (selected_departure == '2') {
                $('#modal-destination-address').modal('show');
            } else if (selected_departure == '3') {
                $('#modal-destination-station').modal('show');
            } else if (selected_departure == '4') {
                $('#modal-destination-hotels').modal('show');
            } else if (selected_departure == '5') {
                $('#modal-destination-cities').modal('show');
            }
        });

        

        $('#home-form-input-destination').on('change', function() {
            var selected_destination = $(this).children("option:selected").text();
            $('#modal-destination').modal('show');
        });

        $('#departure-address-continue').click(function() {
            var departure_address_input = $('#departure-address').val();
            $('#input-departure-option-selected-2').text(departure_address_input);
            $('#home-form-input-departure').val("selected-2");
        });

        $('#destination-address-continue').click(function() {
            var destination_address_input = $('#destination-address').val();
            $('#input-destination-option-selected-2').text(destination_address_input);
            $('#home-form-input-destination').val("selected-2");
        });

        $('#departure-station-continue').click(function() {
            var departure_station_input = $('input[name=departure_station]:checked').val();
            $('#input-departure-option-selected-2').text(departure_station_input);
            $('#home-form-input-departure').val("selected-2");
        });

        $('#destination-station-continue').click(function() {
            var destination_station_input = $('input[name=destination_station]:checked').val();
            $('#input-destination-option-selected-2').text(destination_station_input);
            $('#home-form-input-destination').val("selected-2");
        });

        var options_hotels = {
            searchClass: 'list-search',
            valueNames: ['hotel']
        };

        var departureHotelsList = new List('departure-hotels-list', options_hotels);
        var destinationHotelsList = new List('destination-hotels-list', options_hotels);

        var options_cities = {
            searchClass: 'list-search',
            valueNames: ['city']
        };

        var departureCitiesList = new List('departure-cities-list', options_cities);
        var destinationCitiesList = new List('destination-cities-list', options_cities);

        $('#departure-hotels-list ul li').click(function() {
            $('#departure-hotels-list ul li').removeClass('list-select');
            $(this).toggleClass('list-select');
        });

        $('#destination-hotels-list ul li').click(function() {
            $('#destination-hotels-list ul li').removeClass('list-select');
            $(this).toggleClass('list-select');
        });

        $('#departure-hotels-continue').click(function() {
            var departure_hotels_input = $('#departure-hotels-list ul li.list-select').text();
            $('#input-departure-option-selected-2').text(departure_hotels_input);
            $('#home-form-input-departure').val("selected-2");
        });

        $('#destination-hotels-continue').click(function() {
            var destination_hotels_input = $('#destination-hotels-list ul li.list-select').text();
            $('#input-destination-option-selected-2').text(destination_hotels_input);
            $('#home-form-input-destination').val("selected-2");
        });

        $('#departure-cities-list ul li').click(function() {
            $('#departure-cities-list ul li').removeClass('list-select');
            $(this).toggleClass('list-select');

            $('.list-search-cities').val($(this).text());
        });
        $('#destination-cities-list ul li').click(function() {
            $('#destination-cities-list ul li').removeClass('list-select');
            $(this).toggleClass('list-select');

            $('.list-search-cities').val($(this).text());
        });

        $('#departure-cities-continue').click(function() {
            var departure_cities_input = $('#departure-cities-list ul li.list-select').text();
            var custom_citie_address = $('#custom_citie_address').val();
            $('#input-departure-option-selected-2').text(departure_cities_input+', '+custom_citie_address);
            $('#home-form-input-departure').val("selected-2");
        });

        $('#destination-cities-continue').click(function() {
            var destination_cities_input = $('#destination-cities-list ul li.list-select').text();
            var destination_custom_citie_address = $('#destination_custom_citie_address').val();
            $('#input-destination-option-selected-2').text(destination_cities_input+', '+destination_custom_citie_address);
            $('#home-form-input-destination').val("selected-2");
        });

        $('#passengers-button-ok').click(function() {
            var adult_count = parseInt($('#adult-count').val());
            var child5plus_count = parseInt($('#child5plus-count').val());
            var child1plus_count = parseInt($('#child1plus-count').val());
            var infant_count = parseInt($('#infant-count').val());
            
            adult_count = adult_count || 0;
            child5plus_count = child5plus_count || 0;
            child1plus_count = child1plus_count || 0;
            infant_count = infant_count || 0;

            passangers_count = (adult_count + child5plus_count + child1plus_count + infant_count);
            $('.btn-passangers-count').text(passangers_count);
        });

        $('#home-form-order-car-btn').click(function() {
            var form_customer_first_name = $('#form_customer_first_name').val();
            $('input[name="input_customer_first_name"]').val(form_customer_first_name);
            var form_customer_last_name = $('#form_customer_last_name').val();
            $('input[name="input_customer_last_name"]').val(form_customer_last_name);
            var form_customer_email = $('#form_customer_email').val();
            $('input[name="input_customer_email"]').val(form_customer_email);
            var form_customer_phone = $('#form_customer_phone').val();
            $('input[name="input_customer_phone"]').val(form_customer_phone);
            var form_customer_message = $('#form_customer_message').val();
            $('input[name="input_customer_message"]').val(form_customer_message);

            //-------

            var departure_point = $('#home-form-input-departure').children("option:selected").text();
            $('input[name="input_departure"]').val(departure_point);
            var destination_point = $('#home-form-input-destination').children("option:selected").text();
            $('input[name="input_destination"]').val(destination_point);
            var date_pick_up = $('#header-form-input-pick-up').val();
            $('input[name="input_departure_date"]').val(date_pick_up);
            var date_return = $('#header-form-input-return').val();
            $('input[name="input_return_date"]').val(date_return);
            var time_pick_up = $('#header-form-input-pick-up-time').val();
            $('input[name="input_departure_time"]').val(time_pick_up);
            var time_return = $('#header-form-input-return-time').val();
            $('input[name="input_return_time"]').val(time_return);

            var adult_count = $('#adult-count').val();
            $('input[name="input_adult_count"]').val(adult_count);
            var child5plus_count = $('#child5plus-count').val();
            $('input[name="input_child5plus_count"]').val(child5plus_count);
            var child1plus_count = $('#child1plus-count').val();
            $('input[name="input_child1plus_count"]').val(child1plus_count);
            var infant_count = $('#infant-count').val();
            $('input[name="input_infant_count"]').val(infant_count);
        });

        $('input.form-input-pick-up-time').timepicker({ 'step': 15, 'timeFormat': 'H:i' });
        $('input.form-input-return-time').timepicker({ 'step': 15, 'timeFormat': 'H:i' });

        /* Voucher payment */

        //$('#voucher-pay-btn').attr('disabled', 'disabled');
        var disabled_btn = true;
        var click_trigger_1 = 0;
        var click_trigger_2 = 0;
        var click_trigger_3 = 0;
        var click_trigger_4 = 0;
        //$('#voucher-pay-btn').text('Выбирете метод оплаты');

        $('.payment-item-1').click(function() {
            click_trigger_1++;
            click_trigger_2 = 0;
            click_trigger_3 = 0;
            click_trigger_4 = 0;
            $(this).toggleClass('payment-selected');
            $('.payment-item-2').removeClass('payment-selected');
            $('.payment-item-3').removeClass('payment-selected');
            $('.payment-item-4').removeClass('payment-selected');
            var payment_method = $(this).find('.payment_method_value').text();
            var payment_name = $(this).find('.payment-method-title').text();
            $('input[name="payment_method"]').val(payment_method);
            $('input[name="payment_name"]').val(payment_name);

            $('#payment_method_cash_to_driver').toggleClass('payment-selected');
            $('#payment_method_card_to_driver').removeClass('payment-selected');
            $('#payment_method_card_online').removeClass('payment-selected');
            $('#payment_method_PayPal').removeClass('payment-selected');

            if (click_trigger_1 & 1) {
                $('#payment_method_none').removeClass('payment-selected');
            } else {
                $('#payment_method_none').addClass('payment-selected');
            }
            

            /* if (click_trigger_1 & 1) {
                disabled_btn = false;
                $('#voucher-pay-btn').removeAttr('disabled');
                $('#voucher-pay-btn').text('Оплатить');
            } else {
                disabled_btn = true;
                $('#voucher-pay-btn').text('Выбирете метод оплаты');
                $('#voucher-pay-btn').attr('disabled', 'disabled');
                $(".form-selected-payment-name").text('не выбрано');
            } */
        });
        $('.payment-item-2').click(function() {
            click_trigger_2++;
            click_trigger_1 = 0;
            click_trigger_3 = 0;
            click_trigger_4 = 0;
            $(this).toggleClass('payment-selected');
            $('.payment-item-1').removeClass('payment-selected');
            $('.payment-item-3').removeClass('payment-selected');
            $('.payment-item-4').removeClass('payment-selected');
            var payment_method = $(this).find('.payment_method_value').text();
            var payment_name = $(this).find('.payment-method-title').text();
            $('input[name="payment_method"]').val(payment_method);
            $('input[name="payment_name"]').val(payment_name);

            $('#payment_method_cash_to_driver').removeClass('payment-selected');
            $('#payment_method_card_to_driver').toggleClass('payment-selected');
            $('#payment_method_card_online').removeClass('payment-selected');
            $('#payment_method_PayPal').removeClass('payment-selected');

            if (click_trigger_2 & 1) {
                $('#payment_method_none').removeClass('payment-selected');
            } else {
                $('#payment_method_none').addClass('payment-selected');
            }

            /* if (click_trigger_2 & 1) {
                disabled_btn = false;
                $('#voucher-pay-btn').removeAttr('disabled');
                $('#voucher-pay-btn').text('Оплатить');

                $('#voucher-pay-btn').css('display', 'block');
                $('#voucher-pay-btn-liqpay').css('display', 'none');
            } else {
                disabled_btn = true;
                $('#voucher-pay-btn').text('Выбирете метод оплаты');
                $('#voucher-pay-btn').attr('disabled', 'disabled');
                $(".form-selected-payment-name").text('не выбрано');
            } */
        });
        $('.payment-item-3').click(function() {
            click_trigger_3++;
            click_trigger_2 = 0;
            click_trigger_1 = 0;
            click_trigger_4 = 0;
            $(this).toggleClass('payment-selected');
            $('.payment-item-1').removeClass('payment-selected');
            $('.payment-item-2').removeClass('payment-selected');
            $('.payment-item-4').removeClass('payment-selected');
            var payment_method = $(this).find('.payment_method_value').text();
            var payment_name = $(this).find('.payment-method-title').text();
            $('input[name="payment_method"]').val(payment_method);
            $('input[name="payment_name"]').val(payment_name);

            $('#payment_method_cash_to_driver').removeClass('payment-selected');
            $('#payment_method_card_to_driver').removeClass('payment-selected');
            $('#payment_method_card_online').toggleClass('payment-selected');
            $('#payment_method_PayPal').removeClass('payment-selected');

            if (click_trigger_3 & 1) {
                $('#payment_method_none').removeClass('payment-selected');
            } else {
                $('#payment_method_none').addClass('payment-selected');
            }

            /* if (click_trigger_3 & 1) {
                disabled_btn = false;
                $('#voucher-pay-btn').removeAttr('disabled');
                $('#voucher-pay-btn').text('Оплатить');

                $('#voucher-pay-btn').css('display', 'none');
                $('#voucher-pay-btn-liqpay').css('display', 'block');
            } else {
                disabled_btn = true;
                $('#voucher-pay-btn').text('Выбирете метод оплаты');
                $('#voucher-pay-btn').attr('disabled', 'disabled');
                $(".form-selected-payment-name").text('не выбрано');

                $('#voucher-pay-btn').css('display', 'block');
                $('#voucher-pay-btn-liqpay').css('display', 'none');
            } */
        });
        $('.payment-item-4').click(function() {
            click_trigger_4++;
            click_trigger_2 = 0;
            click_trigger_3 = 0;
            click_trigger_1 = 0;
            $(this).toggleClass('payment-selected');
            $('.payment-item-1').removeClass('payment-selected');
            $('.payment-item-2').removeClass('payment-selected');
            $('.payment-item-3').removeClass('payment-selected');
            var payment_method = $(this).find('.payment_method_value').text();
            var payment_name = $(this).find('.payment-method-title').text();
            $('input[name="payment_method"]').val(payment_method);
            $('input[name="payment_name"]').val(payment_name);

            $('#payment_method_cash_to_driver').removeClass('payment-selected');
            $('#payment_method_card_to_driver').removeClass('payment-selected');
            $('#payment_method_card_online').removeClass('payment-selected');
            $('#payment_method_PayPal').toggleClass('payment-selected');

            if (click_trigger_4 & 1) {
                $('#payment_method_none').removeClass('payment-selected');
            } else {
                $('#payment_method_none').addClass('payment-selected');
            }

           /*  if (click_trigger_4 & 1) {
                disabled_btn = false;
                $('#voucher-pay-btn').removeAttr('disabled');
                $('#voucher-pay-btn').text('Оплатить');

                $('#voucher-pay-btn').css('display', 'block');
                $('#voucher-pay-btn-liqpay').css('display', 'none');
            } else {
                disabled_btn = true;
                $('#voucher-pay-btn').text('Выбирете метод оплаты');
                $('#voucher-pay-btn').attr('disabled', 'disabled');
                $(".form-selected-payment-name").text('не выбрано');
            } */
        });
        
        /* $('#header-form-input-pick-up-time').timepicker();
        $('#header-form-input-return-time').timepicker(); */

        $('input:radio[name=carrier_type]').change(function() {
            if (this.value == 'legal_person') {
                //alert("legal_person");
            }
            else if (this.value == 'individual_person') {
                //alert("individual_person");
            }
        });

        /* -------- */

        var div = $('.top-line');

		$(window).scroll(function(){
		var top = $(this).scrollTop();
		if (top > 1) {
			div.addClass('scroll');
		} else {
		        div.removeClass('scroll');}
		});

        $('.mobile-btn').click(function(){
            $('.nav-info').slideToggle();
            $('.mobile-btn').toggleClass('active');
        });

        /* Google Maps */
        

        /* ----- */
    
    });

    $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                  inputBox.val('');
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }
     $(document).ready(function() {
         $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true
        });
    });
} ) ( jQuery );