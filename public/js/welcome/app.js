$(function () {
    'use strict';

    // Showing page loader
    $(window).load(function () {
        setTimeout(function () {
            $(".page_loader").fadeOut("fast");
        }, 100)
        // $('link[id="style_sheet"]').attr('href', 'css/skins/default.css');
        $('.logo img').attr('src', 'img/logos/logo.png');

        // Filterizr initialization
        if($('.filtr-container').length > 0) {
            $(function () {
                $('.filtr-container').filterizr(
                    {
                        delay: 1
                    }
                );
            });
        }

        $('.filters-listing-navigation li').click(function() {
            $('.filters-listing-navigation .filtr').removeClass('active');
            $(this).addClass('active');
        });
    });

    // WOW animation library initialization
    var wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            mobile: false
        }
    );
    wow.init();

    // Banner slider
    (function ($) {
        //Function to animate slider captions
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $('#carousel-example-generic')
        var $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);
        //Pause carousel
        $myCarousel.carousel('pause');
        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
        $('#carousel-example-generic').carousel({
            interval: 3000,
            pause: "false"
        });
    })(jQuery);

    // Page scroller initialization.
    // $.scrollUp({
    //     scrollName: 'page_scroller',
    //     scrollDistance: 300,
    //     scrollFrom: 'top',
    //     scrollSpeed: 500,
    //     easingType: 'linear',
    //     animation: 'fade',
    //     animationSpeed: 200,
    //     scrollTrigger: false,
    //     scrollTarget: false,
    //     scrollText: '<i class="fa fa-chevron-up"></i>',
    //     scrollTitle: false,
    //     scrollImg: false,
    //     activeOverlay: false,
    //     zIndex: 2147483647
    // });

    // Counter
    function isCounterElementVisible($elementToBeChecked) {
        var TopView = $(window).scrollTop();
        var BotView = TopView + $(window).height();
        var TopElement = $elementToBeChecked.offset().top;
        var BotElement = TopElement + $elementToBeChecked.height();
        return ((BotElement <= BotView) && (TopElement >= TopView));
    }

    $(window).scroll(function () {
        $(".counter").each(function () {
            var isOnView = isCounterElementVisible($(this));
            if (isOnView && !$(this).hasClass('Starting')) {
                $(this).addClass('Starting');
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }
        });
    });

    // Range sliders initialization
    $(".range-slider-ui").each(function () {
        var minRangeValue = $(this).attr('data-min');
        var maxRangeValue = $(this).attr('data-max');
        var minName = $(this).attr('data-min-name');
        var maxName = $(this).attr('data-max-name');
        var unit = $(this).attr('data-unit');

        $(this).append("" +
            "<span class='min-value'></span> " +
            "<span class='max-value'></span>" +
            "<input class='current-min' type='hidden' name='"+minName+"'>" +
            "<input class='current-max' type='hidden' name='"+maxName+"'>"
        );
        $(this).slider({
            range: true,
            min: minRangeValue,
            max: maxRangeValue,
            values: [minRangeValue, maxRangeValue],
            slide: function (event, ui) {
                event = event;
                var currentMin = parseInt(ui.values[0]);
                var currentMax = parseFloat(ui.values[1]);
                $(this).children(".min-value").text( currentMin + " " + unit);
                $(this).children(".max-value").text(currentMax + " " + unit);
                $(this).children(".current-min").val(currentMin);
                $(this).children(".current-max").val(currentMax);
            }
        });

        var currentMin = parseInt($(this).slider("values", 0));
        var currentMax = parseFloat($(this).slider("values", 1));
        $(this).children(".min-value").text( currentMin + " " + unit);
        $(this).children(".max-value").text(currentMax + " " + unit);
        $(this).children(".current-min").val(currentMin);
        $(this).children(".current-max").val(currentMax);
    });

    // Select picket
    $('.selectpicker').selectpicker();

    // Search option's icon toggle
    $('.search-options-btn').click(function () {
        $('.search-contents').toggleClass('show-search-area');
        $('.search-options-btn .fa').toggleClass('fa-chevron-down');
    });

    // Carousel with partner initialization
    (function () {
        $('#ourPartners').carousel({interval: 3600});
    }());

    (function () {
        $('.our-partners .item').each(function () {
            var itemToClone = $(this);
            for (var i = 1; i < 4; i++) {
                itemToClone = itemToClone.next();
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }
                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-" + (i))
                    .appendTo($(this));
            }
        });
    }());

    // Background video playing script
    $(document).ready(function () {
        $(".player").mb_YTPlayer();
    });


    $(document).on('click','.fa-star', function() {
        // this = this
        if($(this).hasClass('star-checked')) {
            $(this).removeClass('star-checked')
            $.post('/dislike', {
                anuncio_id: $(this).data('id'),
                tipo: $(this).attr('tipo'),
                modelo:$(this).attr('modelo'),
                _token: $('meta[name="csrf-token"]').attr('content')
            }, function(){
                // this.attr('title', 'Añadir a Favoritos' )
            });
        } else {
            $(this).addClass('star-checked')
            $.post('/like', {
                anuncio_id: $(this).data('id'),
                tipo: $(this).attr('tipo'),
                modelo:$(this).attr('modelo'),
                _token: $('meta[name="csrf-token"]').attr('content')
            }, function(){
                // this.attr('title', 'Quidar de favoritos' )
            });
        }
    })

    $(document).on('click', '.ofertar', function(){
        $("#save-oferta").attr('anuncio-id', $(this).data('id'));
        $("#save-oferta").attr('tipo', $(this).attr('tipo'));
        $("#oferta-monto").text( 'Precio Actual: ' + $(this).attr('moneda') + '$' + Number($(this).attr('monto')).toLocaleString({}));
        $("#ofertaModal").modal('show');
    });


    $(document).on('click', '.contra-oferta', function(){
        $("#save-contra-oferta").attr('oferta-id', $(this).attr('oferta-id'));
        $("#contra-oferta-monto").text($(this).attr('moneda'));
        $("#ultima-oferta").text(Number($(this).attr('monto')).toLocaleString());

        $("#contra-oferta").modal('show')
        // $("#ofertaModal").modal('show');
    });


    $(document).on('click', '#save-oferta', function(){
        var amount = $("#offer_amount");
        if(amount.val() != 0 || amount.val() != 1) {
            $.post('/ofertar', {
                anuncio_id: $(this).attr('anuncio-id'),
                tipo: $(this).attr('tipo'),
                monto: amount.val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            }, function(){
                $("#ofertaModal").modal('hide');
                swal("Listo", "Oferta enviada correctamente", "success");
                location.reload();
            });
        }
    });

    $(document).on('click', '#save-contra-oferta', function(){
        var amount = $("#amount");
        if(amount.val() != 0 || amount.val() != 1) {
            console.log(amount.val());
            console.log(Number($("#ultima-oferta").text()));
            if( amount.val() > parseFloat($("#ultima-oferta").text().replace(/\,/g,''), 10) )
            {
                $.post('/contra-oferta', {
                    id: $(this).attr('oferta-id'),
                    monto: amount.val(),
                    _token: $('meta[name="csrf-token"]').attr('content')
                }, function(){
                    $("#contra-oferta").modal('hide')
                    swal("Listo", "Contra Oferta enviada correctamente", "success");
                    location.reload();
                });
            } else {
                $("#contra-oferta").modal('hide')
                swal('Aviso','La contra oferta debe ser mayor al  monto enviado anteriormente')
            }
        }
    });


    $(document).on('click', '.cancelar-oferta', function(){
         var id = $(this).attr('oferta-id');
        swal({
            title: "Eliminar",
            text: "¿Deseas cancelar esta oferta?",
            type: "warning",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si",
            showCancelButton: true,
            closeOnConfirm: false
        }, function () {
            $.post('/cancelar-oferta', {
                id: id,
                _token: $('meta[name="csrf-token"]').attr('content')
            }, function(){
                swal("Listo", "Oferta cancelada enviada correctamente", "success");
                location.reload();
            });
        });
           
    });

    // Multilevel menus
    $('[data-submenu]').submenupicker();

    // Expending/Collapsing advance search content
    $('.show-more-options').click(function () {
        if ($(this).find('.fa').hasClass('fa-minus-circle')) {
            $(this).find('.fa').removeClass('fa-minus-circle');
            $(this).find('.fa').addClass('fa-plus-circle');
        } else {
            $(this).find('.fa').removeClass('fa-plus-circle');
            $(this).find('.fa').addClass('fa-minus-circle');
        }
    });

    var videoWidth = $('.sidebar-widget').width();
    var videoHeight = videoWidth * .61;
    $('.sidebar-widget iframe').css('height', videoHeight);

    // Dropzone initialization
    Dropzone.autoDiscover = false;
    $(function () {
        $("div#myDropZone").dropzone({
            url: "/file-upload"
        });
    });


    // SO something in mega menu
    jQuery(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
    })

    // Magnify activation
    $('.property-magnify-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{enabled:true}
        });
    });

    $('.portfolio-item').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{enabled:true}
    });


    // Modal activation
    $('.property-video').on('click', function () {
        $('#propertyModal').modal('show');
    });


    resizeModalsContent();
    function resizeModalsContent() {
        var winWidth = $(window).width();
        var videoWidth = 450;
        if(winWidth < 992 && winWidth > 767) {
            videoWidth = 600;
        } else if(winWidth <= 768) {
            videoWidth = winWidth - 20;
        }

        var ratio = .6666;
        var videoHeight = videoWidth * ratio;
        $('.modalIframe').css('height', videoHeight);
    }


    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".fa")
            .toggleClass('fa-minus fa-plus');
    }

    $('.panel-group').on('shown.bs.collapse', toggleChevron);
    $('.panel-group').on('hidden.bs.collapse', toggleChevron);

    // Switching Color schema
    $('.color-plate').on('click', function () {
        var name = $(this).attr('data-color');
        $('link[id="style_sheet"]').attr('href', 'css/skins/' + name + '.css');
        if (name == 'default') {
            $('.logo img').attr('src', 'img/logos/logo.png');
        }
        else {
            $('.logo img').attr('src', 'img/logos/' + name + '-logo.png');
        }
    });

    $('.setting-button').on('click', function () {
        $('.option-panel').toggleClass('option-panel-collased');
    });

    $(window).resize(function () {
        resizeModalsContent();
    });
});

// mCustomScrollbar initialization
(function ($) {
    $(window).resize(function () {
        $('#map').css('height', $(this).height() - 110);
        if ($(this).width() > 768) {
            $(".map-content-sidebar").mCustomScrollbar(
                {theme: "minimal-dark"}
            );
            $('.map-content-sidebar').css('height', $(this).height() - 110);
        } else {
            $('.map-content-sidebar').mCustomScrollbar("destroy"); //destroy scrollbar
            $('.map-content-sidebar').css('height', '100%');
        }
        }).trigger("resize");
})(jQuery);