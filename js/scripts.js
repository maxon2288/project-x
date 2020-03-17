$(document).ready(function () {

    jQuery.fn.reverse = function() {
        return this.pushStack(this.get().reverse(), arguments);
    };

    $html = $('html');
    $body = $('body');

    $loading = $('#loading');
    $header = $('#header');
    $nav = $('#nav');
    $menu = $('#menu');
    $footer = $('#footer');

    $droid = $('#droid');
    $dots = $('#dots');

    $SECTIONS = $('#sections');
    $sections = $SECTIONS.find('section');
    $scrollBlocks = $('#scroll-blocks');

    $promo = $('#promo');
    $hello = $('#hello');
    $naturals = $('#naturals');
    $toothpaste = $('#toothpaste');
    $contents = $('#contents');
    $contentsSlider = $('#contents-slider');
    $research = $('#research');
    $30sec = $('#s30sec');
    $showcase = $('#showcase');
    $feedback = $('#feedback');

    $PRODUCTS = $('#products');

    $PRODUCT = $('#product');

    //Adaptive
    function responsive() {
        //PARAMS
        $wH = $(window).height();
        $wW = $(window).width();

        //
    }

    responsive();
    $(window).on('resize', responsive);

    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });
    //Scrolling
    //jQuery Mouse Wheel Plugin: https://github.com/jquery/jquery-mousewheel
    $SECTIONS.mousewheel(function(event) {

        $curBlock = $SECTIONS.find('.active');

        if (event.originalEvent.wheelDelta > 0) {
            //console.log('prev');
            $nextBlock = $curBlock.prev('section');
        } else {
            //console.log('next');
            $nextBlock = $curBlock.next('section');
        }

        if($nextBlock.length) {
            $nextID = $nextBlock.attr('id');

            blockInit($nextID);
        }
    });
    // //jQuery TouchSwipe Plugin: https://github.com/mattbryson/TouchSwipe-Jquery-Plugin
    $SECTIONS.swipe({
        swipe:function(event, direction, distance, duration, fingerCount, fingerData) {

            $curBlock = $SECTIONS.find('.active');

            if(direction == 'down') {
                $nextBlock = $curBlock.prev('section');
                if ($curBlock.attr('id') === 'feedback' && document.body.scrollTop > 40) {
                    $nextBlock = null;
                }
            } else if(direction == 'up') {
                $nextBlock = $curBlock.next('section');
            }

            if(direction == 'down' || direction == 'up') {
                if ($nextBlock && $nextBlock.length) {
                    $nextID = $nextBlock.attr('id');
                    blockInit($nextID);
                }
            }
        },
        threshold: 20,
        preventDefaultEvents: false
    });

    //Init Functions
    function blockInit(blockId, faded = true, product) {
        console.log(blockId);

        $droid.find('.droid-offset').css({'margin-bottom': 0});

        $droid.click(function () {
            blockInit('feedback');
        });

        var blockCurrent = document.getElementById(blockId);

        if (blockCurrent) {
            blockCurrent.querySelectorAll('.lazy').forEach(function(lazyBlock) {
                lazyLoadInstance.load(lazyBlock);
            });
        }

        if (blockId == 'products' || blockId == 'product') {
            $body.removeClass('scrolled');
            $body.addClass('scrolled-2');

            $SECTIONS.addClass('pushed');
            $sections.removeClass('active');
            $droid.addClass('open');
            $dots.removeClass('open');

            if (blockId == 'products') {
                $PRODUCTS.addClass('pushed');
                $PRODUCT.addClass('pushed');

                setTimeout(function () {
                    $PRODUCTS.removeClass('pushed');
                }, 800);
            }

            if (blockId == 'product') {
                $PRODUCTS.addClass('pushed');
                $PRODUCT.addClass('pushed');

                $PRODUCT.find('.product-page').removeClass('active');
                $PRODUCT.find('.product-page .product-carousel .carousel-cell').removeClass('is-selected');

                setTimeout(function () {
                    $PRODUCT.removeClass('pushed');

                    $PRODUCT.scrollTop(0);
                    $PRODUCT.find('#'+product+' .product-carousel .carousel-cell').addClass('is-selected');
                    $PRODUCT.find('#'+product+' .ingredients-carousel').flickity('resize');

                    $PRODUCT.find('#'+product).addClass('active');
                }, 800);
            }
        } else {
            $SECTIONS.removeClass('pushed');
            $PRODUCTS.addClass('pushed');
            $PRODUCT.addClass('pushed');

            if (!$SECTIONS.hasClass('blocked')) {
                $body.removeClass('scrolled');
                $body.removeClass('scrolled-2');

                $SECTIONS.addClass('blocked');

                //
                $oldID = $SECTIONS.find('.active').attr('id');

                if(blockId == 'hello' && $(window).width() <= 600) {
                    if($oldID == 'promo') {
                        blockId = 'naturals';
                    }
                    if($oldID == 'naturals') {
                        blockId = 'promo';
                    }
                }


                $dots.find('div').removeClass('is-active');
                $dots.find('[data-to='+blockId+']').addClass('is-active');

                if (blockId == 'promo') {
                    //Moving Letters: https://tobiasahlin.com/moving-letters/
                    anime.timeline().add({
                        targets: "#promo .title-text .letter",
                        opacity: [0, 1],
                        easing: "easeInOutQuad",
                        duration: 1600,
                        delay: function (e, t) {
                            return 50 * (t + 1)
                        }
                    });
                }

                var droidVideo = document.getElementById("droidVideo");

                if (blockId == 'hello') {
                    droidVideo.currentTime = 0;
                    droidVideo.play();
                } else {
                    droidVideo.pause();
                }

                if (blockId == 'naturals') {
                    //Counter
                    $naturals.find('.counter').addClass('init');
                } else {
                    $naturals.find('.counter').removeClass('init');

                    if ($naturals.find('[data-play]').hasClass('is-playing')) {
                        $naturals.find('[data-play]').trigger('click');
                    }
                }

                if (blockId == 'contents') {
                    //
                } else {

                    if ($contents.find('[data-play]').hasClass('is-playing')) {
                        $contents.find('[data-play]').trigger('click');
                    }
                }

                if (blockId == 'toothpaste') {
                    setTimeout(function () {
                        var $toothpasteSlider = $toothpaste.find('.toothpaste-carousel').flickity();
                        var flkty = $toothpasteSlider.data('flickity');

                        var $toothpasteSliderIndex = flkty.selectedIndex;
                        var $toothpasteSliderLength = flkty.slides.length;

                        if ($toothpasteSliderIndex == 0) {
                            $toothpasteSlider.flickity('select', 1);
                        }
                    }, 1000);
                }

                if (blockId == 'contents-slider') {
                    setTimeout(function () {
                        var $contentsCarousel = $contentsSlider.find('.contents-carousel').flickity();
                        $contentsCarousel.flickity('select', 0);
                    }, 1200);
                }

                if (blockId == 'research') {
                    setTimeout(function () {
                        $research.find('.research-list-item').addClass('is-visible');
                    }, 1000);
                } else {
                    $research.find('.research-list-item').removeClass('is-visible');
                }

                if (blockId == 's30sec') {
                    $30secFrame = 1;

                    setTimeout(function () {
                        s30Interval = setInterval(function () {
                            $30sec.find('.frame-outer').addClass('animate');
                            $30sec.find('.dirt-scale').addClass('animate');
                            $30sec.find('.dirt-scale img').addClass('animate');

                            $30secFrame++;

                            if ($30secFrame > 30) {
                                clearInterval(s30Interval);
                            }

                            $frameActive = $30sec.find('.frame.is-active');

                            if ($frameActive.next('.frame').length) {
                                $frameActive.next('.frame').addClass('is-active');
                                $frameActive.removeClass('is-active');
                            }
                        }, 200);
                    }, 1500);
                } else {
                    if (typeof s30Interval !== 'undefined') {
                        clearInterval(s30Interval);
                    }

                    setTimeout(function () {
                        $30sec.find('.frame.is-active').removeClass('is-active');
                        $30sec.find('.frame:first').addClass('is-active');

                        $30sec.find('.frame-outer').removeClass('animate');
                        $30sec.find('.dirt-scale').removeClass('animate');
                        $30sec.find('.dirt-scale img').removeClass('animate');
                    }, 800);
                }

                if (blockId == 'showcase') {
                    if ($showcase.hasClass('is-third')) {
                        $showcase.removeClass('is-third');
                        $showcase.addClass('is-second');
                    } else if (!$showcase.hasClass('is-first')) {
                        $showcase.removeClass('is-second');
                        $showcase.removeClass('is-third');
                        $showcase.addClass('is-first');
                    }

                    $showcase.addClass('blocked');

                    setTimeout(function () {
                        $showcase.removeClass('blocked');
                    }, 2000);
                }

                if (blockId == 'feedback') {
                    $('.products-link').fadeOut(800);

                    setTimeout(function () {
                        $body.addClass('scrolled');
                    }, 800);
                } else {
                    $('.products-link').fadeIn(800);
                }


                //Initialization

                $SECTIONS.find('.active').removeClass('active');

                if (($oldID == 'contents' && blockId == 'contents-slider') || ($oldID == 'contents-slider' && blockId == 'contents')) {
                    $('#' + blockId).addClass('active');
                } else {
                    setTimeout(function () {
                        $('#' + blockId).addClass('active');
                    }, 800);
                }

                if (blockId != 'showcase' && blockId != 'feedback') {
                    setTimeout(function () {
                        $SECTIONS.removeClass('blocked');
                    }, 2000);
                }

                if (blockId != 'promo' && blockId != 'hello') {
                    $droid.addClass('open');
                    $dots.addClass('open');
                } else {
                    $droid.removeClass('open');
                    $dots.removeClass('open');
                }
            }
        }
    }



    //Showcase
    $showcase.mousewheel(function(event) {

        if(!$showcase.hasClass('blocked')) {

            $showcase.addClass('blocked');

            if (event.originalEvent.wheelDelta > 0) {
                if($showcase.hasClass('is-third')) {
                    $showcase.removeClass('is-third');
                    $showcase.addClass('is-second');
                } else if($showcase.hasClass('is-second')) {
                    $showcase.removeClass('is-second');
                    $showcase.addClass('is-first');
                } else if($showcase.hasClass('is-first')) {
                    $showcase.removeClass('is-first');

                    if($showcase.hasClass('active')) {
                        $SECTIONS.removeClass('blocked');
                    }
                }
            } else {
                if($showcase.hasClass('is-second')) {
                    $showcase.removeClass('is-second');
                    $showcase.addClass('is-third');

                    if($showcase.hasClass('active')) {
                        $SECTIONS.removeClass('blocked');
                    }
                } else if($showcase.hasClass('is-first')) {
                    $showcase.removeClass('is-first');
                    $showcase.addClass('is-second');
                }
            }

            setTimeout(function () {
                $showcase.removeClass('blocked');
            }, 2000);
        }
    });
    $showcase.swipe({
        swipe:function(event, direction, distance, duration, fingerCount, fingerData) {

            if(!$showcase.hasClass('blocked')) {

                $showcase.addClass('blocked');

                if (direction == 'down') {
                    if($showcase.hasClass('is-third')) {
                        $showcase.removeClass('is-third');
                        $showcase.addClass('is-second');
                    } else if($showcase.hasClass('is-second')) {
                        $showcase.removeClass('is-second');
                        $showcase.addClass('is-first');
                    } else if($showcase.hasClass('is-first')) {
                        $showcase.removeClass('is-first');

                        if($showcase.hasClass('active')) {
                            $SECTIONS.removeClass('blocked');
                        }
                    }
                } else if(direction == 'up') {
                    if($showcase.hasClass('is-second')) {
                        $showcase.removeClass('is-second');
                        $showcase.addClass('is-third');

                        if($showcase.hasClass('active')) {
                            $SECTIONS.removeClass('blocked');
                        }
                    } else if($showcase.hasClass('is-first')) {
                        $showcase.removeClass('is-first');
                        $showcase.addClass('is-second');
                    }
                }

                setTimeout(function () {
                    $showcase.removeClass('blocked');
                }, 2000);
            }

        },
        threshold: 20
    });



    //Document Loaded
    function documentLoaded() {

        if($body.hasClass('loading')) {
            //Block Effects
            $('#nav').fitText(3.75);

            //dots
            $sections.each(function () {
                $dataId = $(this).attr('id');

                $dots.append('<div class="dot slide-to" data-to="'+$dataId+'"></div>');
            });


            //Animate Scroll
            $('.slide-to').click(function (e) {
                e.preventDefault();
                $id = $(this).data('to');

                $dataProduct = $(this).data('product');

                if($SECTIONS.find('.active').attr('id') != $id) {
                    $SECTIONS.removeClass('blocked');

                    if($dataProduct) {
                        blockInit($id, true, $dataProduct);
                    } else {
                        blockInit($id);
                    }

                    if($menu.hasClass('menu-visible')) {
                        $header.find('.menu').removeClass('close');
                        $header.find('.logo').removeClass('white');
                        $menu.removeClass('menu-visible');
                        $body.removeClass('menu-visible')
                        $menu.fadeOut(800);
                    }
                }
            });


            $header.find('.menu').click(function () {
                if(!$(this).hasClass('close')) {
                    $(this).addClass('close');

                    $menu.fadeIn(800);
                    $body.addClass('menu-visible')
                    $menu.addClass('menu-visible');
                    $header.find('.logo').addClass('white');
                } else {
                    $(this).removeClass('close');

                    $menu.fadeOut(800);
                    $menu.removeClass('menu-visible');
                    $body.removeClass('menu-visible')
                    $header.find('.logo').removeClass('white');
                }
            });


            //Promo Block

            if($promo.length) {

                if($(window).width() < $(window).height()) {
                    $waveVideo = 480;
                } else {
                    $waveVideo = 1080;
                }

                $promo.find('.wave').html('<video class="lazy" data-src="upload/Wave_'+$waveVideo+'.mp4?v1" muted="" preload="" autoplay="" loop="" playsinline=""></video>');

                $promo.find('.title-text').each(function () {
                    $(this).html($(this).html().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
                });

                //FitText: http://fittextjs.com
                $promo.find('.title-text').fitText(1.2);
                //$promo.find('.title.mobile').fitText(0.75);

                if($(window).width() > 600) {
                    //Magnetic Effect: https://codepen.io/mikewagz/pen/VWKemL
                    const ui = {btn: document.querySelector(".magnetic")}, state = {
                        bounds: ui.btn.getBoundingClientRect(),
                        threshold: parseInt(ui.btn.dataset.threshold),
                        ratio: parseInt(ui.btn.dataset.ratio),
                        isMagnetic: !1,
                        mouse: {x: 0, y: 0},
                        ease: {x: 0, y: 0, scale: 1, value: ui.btn.dataset.ease},
                        transform: {x: 0, y: 0, scale: 1, max: ui.btn.dataset.max},
                        width: window.innerWidth,
                        height: window.innerHeight,
                        history: !1,
                        scale: ui.btn.dataset.scale
                    }, mouseMove = ({pageX: t, pageY: e}) => {
                        Object.assign(state, {mouse: {x: t, y: e}, isMagnetic: isMagnetic(t, e)})
                    }, resize = () => {
                        Object.assign(state, {
                            bounds: ui.btn.getBoundingClientRect(),
                            width: window.innerWidth,
                            height: window.innerHeight
                        })
                    }, isMagnetic = (t, e) => {
                        const {bounds: s} = state, a = s.left + s.width / 2, i = s.top + s.height / 2,
                            n = Math.abs(a - t), o = Math.abs(i - e),
                            r = Math.sqrt(n * n + o * o) < s.width / 2 + state.threshold;
                        return !state.history && r ? (ui.btn.classList.add("is-hover"), Object.assign(state, {
                            threshold: state.threshold * state.ratio,
                            history: !0
                        })) : state.history && !r && (ui.btn.classList.remove("is-hover"), Object.assign(state, {
                            threshold: state.threshold / state.ratio,
                            history: !1
                        })), r
                    }, run = () => {
                        requestAnimationFrame(run);
                        const {isMagnetic: t, transform: e, mouse: s, width: a, height: i, ease: n, max: o, scale: r} = state;
                        e.x = t ? (s.x - a / 2) / a * e.max : 0, e.y = t ? (s.y - i / 2) / i * e.max : 0, e.scale = t ? r : 1, n.x += (e.x - n.x) * n.value, n.y += (e.y - n.y) * n.value, n.scale += (e.scale - n.scale) * n.value, Object.assign(ui.btn.style, {transform: `\n\t\t\ttranslate(\n\t\t\t\t${n.x.toFixed(2)}px,\n\t\t\t\t${n.y.toFixed(2)}px\n\t\t\t)\n\t\t\ttranslateZ(0)\n\t\t\tscale(\n\t\t\t\t${n.scale.toFixed(2)}\n\t\t\t)`})
                    }, init = () => {
                        document.addEventListener("mousemove", mouseMove), window.addEventListener("resize", resize), run()
                    };
                    document.addEventListener("mousemove", mouseMove), window.addEventListener("resize", resize), run();
                }
            }

            //Hello Video Block

            if($hello.length) {
                if($(window).width() > 1280) {
                    $robotVideo = 1080;
                } else if($(window).width() > 640) {
                    $robotVideo = 720;
                } else {
                    $robotVideo = 480;
                }

                $hello.find('.droid').html('<video id="droidVideo" class="lazy" data-src="upload/droid_'+$robotVideo+'.mp4?v1" muted="" preload=""></video>');

                var droidVideo = document.getElementById("droidVideo");

                droidVideo.addEventListener("ended", function (e) {
                    blockInit('naturals');
                }, false);

            }

            //Naturals Block

            if($naturals.length) {

                //FitText: http://fittextjs.com
                $naturals.find('.percent').fitText(0.21);
                $naturals.find('.label').fitText(0.75);
                //$naturals.find('.sentences').fitText(1.55);
                $naturals.find('.sentences').fitText(1.75);

                //Counter
                $naturals.find('.cnt').append('<span class="counter"><ul class="n1"><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul><ul class="n2"><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul></span>');

                //jquery-circle-progress: http://kottenator.github.io/jquery-circle-progress/

                /*
                var naturalTimelapse = $naturals.find('.timelapse');

                if($(window).width() <= 600) {
                    $progressSize = $(window).width()*0.66;
                } else if($(window).width() > $(window).height()) {
                    $progressSize = $(window).width()*0.34;
                } else {
                    $progressSize = $(window).width()*0.6;
                }

                naturalTimelapse.circleProgress({
                    startAngle: -Math.PI,
                    size: $progressSize,
                    value: 0.0,
                    fill: {color: '#77CBD2'},
                    emptyFill: 'rgba(0, 0, 0, 0)',
                    animation: {duration: 300, easing: 'linear'}
                });
                */

                setTimeout(function () {

                    /*
                    $naturals.find('.video-inner').prepend('<video src="upload/naturals.mp4?v2" id="naturalVideo" preload="" poster="upload/naturals-poster.jpg"></video>');

                    //Демонстрация JS управления HTML5 video и audio: http://calendar.vpogiba.info/wg/js/objhtml/media-demonstration.htm
                    var naturalVideo = document.getElementById("naturalVideo");

                    $naturals.find('[data-play]').click(function () {
                        if($(this).hasClass('is-playing')) {
                            $(this).removeClass('is-playing');

                            naturalVideo.pause();
                        } else {
                            $(this).addClass('is-playing');

                            naturalVideo.play();
                        }
                    });

                    naturalVideo.addEventListener("timeupdate", function(e) {
                        $cur = (naturalVideo.currentTime/350);
                        if($cur > 1) { $cur = 1; }

                        naturalTimelapse.circleProgress('value', $cur);

                        $naturals.find('.sentences p').removeClass('sub-active');

                        if(naturalVideo.currentTime >= 0 && naturalVideo.currentTime < 14) {
                            $naturals.find('.sentence-1').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 14 && naturalVideo.currentTime < 46) {
                            $naturals.find('.sentence-2').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 46 && naturalVideo.currentTime < 79) {
                            $naturals.find('.sentence-3').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 79 && naturalVideo.currentTime < 107) {
                            $naturals.find('.sentence-4').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 107 && naturalVideo.currentTime < 127) {
                            $naturals.find('.sentence-5').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 127 && naturalVideo.currentTime < 144) {
                            $naturals.find('.sentence-6').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 144 && naturalVideo.currentTime < 168) {
                            $naturals.find('.sentence-7').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 168 && naturalVideo.currentTime < 215) {
                            $naturals.find('.sentence-8').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 215 && naturalVideo.currentTime < 249) {
                            $naturals.find('.sentence-9').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 249 && naturalVideo.currentTime < 258) {
                            $naturals.find('.sentence-10').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 258 && naturalVideo.currentTime < 282) {
                            $naturals.find('.sentence-11').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 282 && naturalVideo.currentTime < 314) {
                            $naturals.find('.sentence-12').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 314 && naturalVideo.currentTime < 339) {
                            $naturals.find('.sentence-13').addClass('sub-active').addClass('sub-height');
                        } else if(naturalVideo.currentTime >= 339) {
                            $naturals.find('.sentence-14').addClass('sub-active').addClass('sub-height');
                        }
                    }, false);

                    naturalVideo.addEventListener("ended", function(e) {

                        $naturals.find('[data-play]').removeClass('is-playing');
                        $naturals.find('.sentences p').removeClass('sub-active').removeClass('sub-height');
                        $naturals.find('.sentence-1').addClass('sub-active').addClass('sub-height');

                        blockInit('toothpaste');
                    }, false);

                    $naturals.find('.resize').click(function () {
                        if (naturalVideo.mozRequestFullScreen) {
                            naturalVideo.mozRequestFullScreen();
                        } else {
                            naturalVideo.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                        }
                    });

                    function videoFullscreen(init) {
                        if(init) {
                            $naturals.find('[data-play]').addClass('is-playing');
                            naturalVideo.play();
                        } else {
                            $naturals.find('[data-play]').removeClass('is-playing');
                            naturalVideo.pause();
                        }
                    }

                    naturalVideo.addEventListener("mozfullscreenchange",function(){
                        videoFullscreen(document.mozFullScreen);
                    }, false);

                    naturalVideo.addEventListener("webkitfullscreenchange",function(){
                        videoFullscreen(document.webkitIsFullScreen);
                    }, false);
                    */

                    //
                    $naturals.find('.video-inner-2').prepend('<video class="lazy" data-src="upload/naturals.mp4?v2" id="naturalVideo2" preload="" poster="upload/naturals-poster.jpg"></video>');

                    var naturalVideo2 = document.getElementById("naturalVideo2");


                    $naturals.find('.button').click(function () {
                        if (naturalVideo2.mozRequestFullScreen) {
                            naturalVideo2.mozRequestFullScreen();
                        } else {
                            naturalVideo2.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                        }
                        naturalVideo2.play();
                    });

                    function videoFullscreen2(init) {
                        if(init) {
                            naturalVideo2.play();
                        } else {
                            naturalVideo2.pause();
                        }
                    }

                    naturalVideo2.addEventListener("mozfullscreenchange",function(){
                        videoFullscreen2(document.mozFullScreen);
                    }, false);

                    naturalVideo2.addEventListener("webkitfullscreenchange",function(){
                        videoFullscreen2(document.webkitIsFullScreen);
                    }, false);
                }, 2000);
            }

            //Toothpaste Block

            if($toothpaste.length) {

                //FitText: http://fittextjs.com
                $toothpaste.find('.name').fitText(0.55);
                $toothpaste.find('.natural').fitText(1.5);
                $toothpaste.find('.subtitles').fitText(1.75);

                //Counter
                $toothpaste.find('.cnt').append('<div class="counter"><div class="n1"><div class="num-item">0</div><div class="num-item">1</div><div class="num-item">2</div><div class="num-item">3</div><div class="num-item">4</div><div class="num-item">5</div><div class="num-item">6</div><div class="num-item">7</div><div class="num-item">8</div><div class="num-item">9</div></div><div class="n2"><div class="num-item">0</div><div class="num-item">1</div><div class="num-item">2</div><div class="num-item">3</div><div class="num-item">4</div><div class="num-item">5</div><div class="num-item">6</div><div class="num-item">7</div><div class="num-item">8</div><div class="num-item">9</div></div><span>,</span><div class="n3"><div class="num-item">0</div><div class="num-item">1</div><div class="num-item">2</div><div class="num-item">3</div><div class="num-item">4</div><div class="num-item">5</div><div class="num-item">6</div><div class="num-item">7</div><div class="num-item">8</div><div class="num-item">9</div></div></div>');

                $toothpaste.find('.key-visual').each(function () {
                    $keyVisualDir = $(this).data('product');

                    $(this).find('div').each(function () {
                        $keyVisualName = $(this).attr('class');

                        $(this).html('<span class="magnify"><img class="lazy" data-src="upload/kv/'+$keyVisualDir+'/'+$keyVisualName+'.png?v1"/></span>');


                    });

                    if($('#'+$keyVisualDir).length) {
                        $('#'+$keyVisualDir).find('.key-visual').prepend($(this).html());
                    }
                });


                $toothpaste.find('.toothpaste-carousel').on( 'ready.flickity', function() {
                    $toothpaste.find('.toothpaste-carousel').append('<div class="slider-range"><input type="hidden" class="slider-input" value="0" /></div>');

                    $toothpaste.find('.slider-input').jRange({
                        from: 0,
                        to: $toothpaste.find('.toothpaste-carousel .carousel-cell').length,
                        step: 1,
                        showLabels: false,
                        showScale: false,
                        width: $(window).height()*0.2,
                        //snap: true,
                        onstatechange: function (state) {
                            $toothpaste.find('.toothpaste-carousel').flickity('select', state);
                        }
                    });

                    $toothpaste.find('.slider-input').click(function () {
                        $thisVal = $(this).val();
                        $(this).jRange('setValue', $thisVal);
                    });
                });

                var $toothpasteSlider = $toothpaste.find('.toothpaste-carousel').flickity({
                    // options
                    cellAlign: 'center',
                    //wrapAround: true,
                    //draggable: false,
                    pageDots: false,
                    //prevNextButtons: false,
                    selectedAttraction: 0.01,
                    friction: 0.15
                });
                var flkty = $toothpasteSlider.data('flickity');

                //Dots
                $dotIndex = 1;

                $toothpaste.find('.key-visual').each(function () {
                    $dotColor = $toothpaste.find('.name-'+$dotIndex+' .line-3').data('color');

                    $toothpaste.find('.dots').append('<div class="dot dot-'+$dotIndex+' lazy" data-bg="url(/img/dot-'+$dotIndex+'.png)"></div>');
                    $dotIndex++;
                });

                setTimeout(function () {
                }, 0);

                $toothpaste.find('.dot').click(function () {
                    $slideQ = $(this).index();
                    $toothpasteSlider.flickity('select', $slideQ+1);
                });

                //Slider select
                $toothpasteSlider.on( 'select.flickity', function( event, index ) {
                    //console.log( 'Flickity select ' + index );

                    var $toothpasteSliderIndex = index;
                    var $toothpasteSliderLength = flkty.slides.length;

                    //Names
                    $offsetTop = 0;
                    $namesHeight = 0;

                    $toothpaste.find('.names .name').removeClass('is-active');
                    setTimeout(function () {
                        $toothpaste.find('.names .name').removeClass('is-active');
                        $toothpaste.find('.names .name-'+$toothpasteSliderIndex).addClass('is-active');

                        $toothpaste.find('.button').data('product', $toothpaste.find('.names .name.is-active').data('product'));
                        $toothpaste.find('.button').attr('id', 'button-'+$toothpaste.find('.names .name.is-active').data('product'));
                    }, 1200);

                    //Natural
                    $naturalPercent = $toothpaste.find('.is-selected').data('natural');
                    $naturalPercent = $naturalPercent.split('|');

                    $toothpaste.find('.n1').attr('class', 'n1 c'+$naturalPercent[0]);
                    $toothpaste.find('.n2').attr('class', 'n2 c'+$naturalPercent[1]);
                    $toothpaste.find('.n3').attr('class', 'n3 c'+$naturalPercent[2]);

                    //Sentences
                    $offsetTop = 0;

                    $toothpaste.find('.sentences .sentence').removeClass('is-active');
                    setTimeout(function () {
                        $toothpaste.find('.sentences .sentence-'+$toothpasteSliderIndex).addClass('is-active');
                    }, 1200);

                    //Color Button
                    $buttonColor = $toothpaste.find('.names .name.is-active [data-color]').data('color');
                    $toothpaste.find('.button svg .border').css({'stroke': '#'+$buttonColor});
                    $toothpaste.find('.button svg+.word').css({'fill': '#'+$buttonColor});

                    //Dots Active
                    $toothpaste.find('.dots .dot').removeClass('is-active');
                    $toothpaste.find('.dots .dot-'+$toothpasteSliderIndex).addClass('is-active');

                    //Right Button
                    if($toothpasteSliderIndex == $toothpasteSliderLength-2) {
                        $toothpaste.find('.right').fadeOut(800);
                    } else {
                        $toothpaste.find('.right').fadeIn(800);
                    }
                    //Left Button
                    if($toothpasteSliderIndex < 2) {
                        $toothpaste.find('.left').fadeOut(800);
                    } else {
                        $toothpaste.find('.left').fadeIn(800);
                    }
                    //Left Button
                    if($toothpasteSliderIndex < 1) {
                        $toothpasteSlider.flickity('select', 1);
                    }

                    if($toothpasteSliderIndex == 0) {
                        $toothpasteSlider.flickity('select', 1);
                    }

                    if($toothpasteSliderIndex == $toothpasteSliderLength-1) {
                        $toothpasteSlider.flickity('select', $toothpasteSliderLength-2);
                    }

                    $toothpaste.find('.slider-input').val($toothpasteSliderIndex).click();
                });

                $toothpaste.find('.arrow').click(function () {
                    if($(this).hasClass('right')) {
                        $toothpasteSlider.flickity('next');
                    } else {
                        $toothpasteSlider.flickity('previous');
                    }
                });

                $body.mousemove(function (e) {
                    var x = 0, y = 0;

                    if(!$toothpaste.hasClass('freeze') && $toothpaste.hasClass('active')) {
                        $toothpaste.addClass('freeze');

                        x = (e.pageX - ($(window).width() / 2)) / 20;
                        y = (e.pageY - ($(window).height() / 2)) / 20;

                        $toothpaste.find('.is-selected .key-visual .magnify').reverse().each(function () {
                            $(this).css({'transform': 'translate(' + x + 'px, ' + y + 'px)'});

                            x = x * 0.8;
                            y = y * 0.8;

                            //console.log(x, y);
                        });

                        setTimeout(function () {
                            $toothpaste.removeClass('freeze');
                        }, 100);
                    }
                });
            }

            //Contents Block

            if($contents.length) {

                //FitText: http://fittextjs.com
                $contents.find('.percent').fitText(0.21);
                $contents.find('.label').fitText(0.75);
                //$contents.find('.sentences').fitText(1.55);
                $contents.find('.sentences').fitText(1.75);

                //jquery-circle-progress: http://kottenator.github.io/jquery-circle-progress/
                var contentsTimelapse = $contents.find('.timelapse');

                if($(window).width() <= 600) {
                    $progressSize = $(window).width()*0.7;
                } else if($(window).width() > $(window).height()) {
                    $progressSize = $(window).width()*0.34;
                } else {
                    $progressSize = $(window).width()*0.6;
                }

                contentsTimelapse.circleProgress({
                    startAngle: -Math.PI,
                    size: $progressSize,
                    value: 0.0,
                    fill: {color: '#6C9E3F'},
                    emptyFill: 'rgba(0, 0, 0, 0)',
                    animation: {duration: 300, easing: 'linear'}
                });

                setTimeout(function () {

                    $contents.find('.video-inner').prepend('<video class="lazy" data-src="upload/contents.mp4?v2" id="contentsVideo" preload="" poster="upload/contents-poster.jpg"></video>');

                    //Демонстрация JS управления HTML5 video и audio: http://calendar.vpogiba.info/wg/js/objhtml/media-demonstration.htm
                    var contentsVideo = document.getElementById("contentsVideo");


                    $contents.find('[data-play]').click(function () {
                        if($(this).hasClass('is-playing')) {
                            $(this).removeClass('is-playing');

                            contentsVideo.pause();
                        } else {
                            $(this).addClass('is-playing');

                            contentsVideo.play();
                        }
                    });

                    contentsVideo.addEventListener("timeupdate", function(e) {
                        $cur = (contentsVideo.currentTime/216);
                        if($cur > 1) { $cur = 1; }

                        contentsTimelapse.circleProgress('value', $cur);
                        //console.log($cur);

                        $contents.find('.sentences p').removeClass('sub-active');

                        if(contentsVideo.currentTime >= 0 && contentsVideo.currentTime < 9) {
                            $contents.find('.sentence-1').addClass('sub-active').addClass('sub-height');
                        } else if(contentsVideo.currentTime >= 9 && contentsVideo.currentTime < 27) {
                            $contents.find('.sentence-2').addClass('sub-active').addClass('sub-height');
                        } else if(contentsVideo.currentTime >= 27 && contentsVideo.currentTime < 65) {
                            $contents.find('.sentence-3').addClass('sub-active').addClass('sub-height');
                        } else if(contentsVideo.currentTime >= 65 && contentsVideo.currentTime < 109) {
                            $contents.find('.sentence-4').addClass('sub-active').addClass('sub-height');
                        } else if(contentsVideo.currentTime >= 109 && contentsVideo.currentTime < 135) {
                            $contents.find('.sentence-5').addClass('sub-active').addClass('sub-height');
                        } else if(contentsVideo.currentTime >= 135 && contentsVideo.currentTime < 161) {
                            $contents.find('.sentence-6').addClass('sub-active').addClass('sub-height');
                        } else if(contentsVideo.currentTime >= 161 && contentsVideo.currentTime < 202) {
                            $contents.find('.sentence-7').addClass('sub-active').addClass('sub-height');
                        } else if(contentsVideo.currentTime >= 202) {
                            $contents.find('.sentence-8').addClass('sub-active').addClass('sub-height');
                        }
                    }, false);

                    contentsVideo.addEventListener("ended", function(e) {

                        $contents.find('[data-play]').removeClass('is-playing');
                        $contents.find('.sentences p').removeClass('sub-active').removeClass('sub-height');
                        $contents.find('.sentence-1').addClass('sub-active').addClass('sub-height');

                        blockInit('contents-slider');
                    }, false);

                    $contents.find('.resize').click(function () {
                        if (contentsVideo.mozRequestFullScreen) {
                            contentsVideo.mozRequestFullScreen();
                        } else {
                            contentsVideo.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                        }
                    });

                    function videoFullscreen2(init) {
                        if(init) {
                            $contents.find('[data-play]').addClass('is-playing');
                            contentsVideo.play();
                        } else {
                            $contents.find('[data-play]').removeClass('is-playing');
                            contentsVideo.pause();
                        }
                    }

                    contentsVideo.addEventListener("mozfullscreenchange",function(){
                        videoFullscreen2(document.mozFullScreen);
                    }, false);

                    contentsVideo.addEventListener("webkitfullscreenchange",function(){
                        videoFullscreen2(document.webkitIsFullScreen);
                    }, false);

                    //
                    $contents.find('.video-inner-2').prepend('<video class="lazy" data-src="upload/contents.mp4?v2" id="contentsVideo2" preload="" poster="upload/contents-poster.jpg"></video>');

                    var contentsVideo2 = document.getElementById("contentsVideo2");


                    $contents.find('.button').click(function () {
                        if (contentsVideo2.mozRequestFullScreen) {
                            contentsVideo2.mozRequestFullScreen();
                        } else {
                            contentsVideo2.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                        }
                        contentsVideo2.play();
                    });

                    function videoFullscreen3(init) {
                        if(init) {
                            contentsVideo2.play();
                        } else {
                            contentsVideo2.pause();
                        }
                    }

                    contentsVideo2.addEventListener("mozfullscreenchange",function(){
                        videoFullscreen3(document.mozFullScreen);
                    }, false);

                    contentsVideo2.addEventListener("webkitfullscreenchange",function(){
                        videoFullscreen3(document.webkitIsFullScreen);
                    }, false);
                }, 2000);
            }

            //Contents Slider Block

            if($contentsSlider.length) {

                //FitText: http://fittextjs.com
                $contentsSlider.find('.percent').fitText(0.21);
                $contentsSlider.find('.label').fitText(0.75);
                $contentsSlider.find('.sentences').fitText(1.55);

                // $contentsSlider.find('.description h3').each(function () {
                //     $(this).fitText(1.3);
                // });

                // $contentsSlider.find('.description p').each(function () {
                //     $(this).fitText(1.55);
                // });

                $contentsSlider.find('.img').each(function () {
                    $dataImg = $(this).data('img');

                    $(this).html('<img class="lazy" data-src="'+$dataImg+'"/>');
                });

                $contentsSlider.find('.contents-carousel').on( 'ready.flickity', function() {
                    $contentsSlider.find('.contents-carousel').append('<div class="slider-range"><input type="hidden" class="slider-input" value="0" /></div>');

                    $contentsSlider.find('.slider-input').jRange({
                        from: 0,
                        to: $contentsSlider.find('.contents-carousel .carousel-cell').length,
                        step: 1,
                        showLabels: false,
                        showScale: false,
                        width: $(window).height()*0.2,
                        //snap: true,
                        onstatechange: function (state) {
                            $contentsSlider.find('.contents-carousel').flickity('select', state);
                        }
                    });

                    $contentsSlider.find('.slider-input').click(function () {
                        $thisVal = $(this).val();
                        $(this).jRange('setValue', $thisVal);
                    });
                });

                var $contentsCarousel = $contentsSlider.find('.contents-carousel').flickity({
                    // options
                    cellAlign: 'left',
                    //wrapAround: true,
                    contain: true,
                    //draggable: false,
                    pageDots: false,
                    //prevNextButtons: false,
                    selectedAttraction: 0.01,
                    friction: 0.15
                });
                var flkty2 = $contentsCarousel.data('flickity');

                //Slider select
                $oldFlkty2 = 0;

                $contentsCarousel.on( 'select.flickity', function( event, index ) {
                    //console.log( 'Flickity select ' + index );

                    var $contentsCarouselIndex = index;
                    var $contentsCarouselLength = flkty2.slides.length;

                    //inercia
                    if($contentsCarouselIndex > $oldFlkty2) {
                        $contentsSlider.find('.contents-carousel').addClass('process-left');
                    } else {
                        $contentsSlider.find('.contents-carousel').addClass('process-right');
                    }

                    $oldFlkty2 = $contentsCarouselIndex;

                    setTimeout(function () {
                        $contentsSlider.find('.contents-carousel').removeClass('process-left').removeClass('process-right');
                    }, 600);

                    if($contentsCarouselIndex > 0) {
                        $contentsSlider.find('.main-text').fadeOut(800);
                    } else {
                        $contentsSlider.find('.main-text').fadeIn(800);
                    }

                    $contentsSlider.find('.slider-input').val($contentsCarouselIndex).click();
                });
            }

            //Research Block

            if($research.length) {

                //FitText: http://fittextjs.com
                $research.find('.description h3').fitText(0.8);
                $research.find('.description p').fitText(2);

                $research.find('.research-list').fitText(3.5);
            }

            //30 sec Block

            if($30sec.length) {

                //FitText: http://fittextjs.com

                $30sec.find('.main-text .small').fitText(0.73);
                $30sec.find('.main-text .big').fitText(0.135);
                $30sec.find('.main-text .middle').fitText(0.4);
                $30sec.find('.second-text').fitText(1.55);

                var i = 1;
                while (i <= 30) {
                    $30sec.find('.frame-insert').append('<img data-src="upload/30s/frame-'+i+'.png?v2" data-sec="'+i+'" class="frame lazy">');
                    i++;
                }

                $body.mousemove(function (e) {
                    var x = 0, y = 0;

                    if(!$30sec.hasClass('freeze') && $30sec.hasClass('active')) {
                        $30sec.addClass('freeze');

                        x = (e.pageX - ($(window).width() / 2)) / 30;
                        y = (e.pageY - ($(window).height() / 2)) / 30;

                        $30sec.find('.magnify').reverse().each(function () {
                            $(this).css({'transform': 'translate(' + x + 'px, ' + y + 'px)'});

                            x = x * 0.75;
                            y = y * 0.75;

                            //console.log(x, y);
                        });

                        setTimeout(function () {
                            $30sec.removeClass('freeze');
                        }, 100);
                    }
                });
            }

            //Showcase Block

            if($showcase.length) {

                //FitText: http://fittextjs.com
                $showcase.find('.title').fitText(0.5);
                $showcase.find('.text h3').fitText(1);
                $showcase.find('.text p').fitText(1.5);

                $body.mousemove(function (e) {
                    var x = 0, y = 0;

                    if(!$showcase.hasClass('freeze') && $showcase.hasClass('active')) {
                        $showcase.addClass('freeze');

                        x = (e.pageX - ($(window).width() / 2)) / 20;
                        y = (e.pageY - ($(window).height() / 2)) / 20;


                        if($showcase.hasClass('is-second')) {
                            x = x/4;
                            y = y/4;
                        }

                        $showcase.find('.magnify').each(function () {
                            $(this).css({'transform': 'translate(' + x + 'px, ' + y + 'px)'});

                            if($showcase.hasClass('is-first')) {
                                x = x * 0.8;
                                y = y * 0.8;
                            }

                            //console.log(x, y);
                        });

                        setTimeout(function () {
                            $showcase.removeClass('freeze');
                        }, 100);
                    }
                });
            }

            //Feedback Block

            if($feedback.length) {

                //$feedback.find('.description').fitText(2);
                $feedback.find('.feedback-form h3').fitText(0.8);
                $feedback.find('.navigate').fitText(1.5);
                $feedback.find('.footer .block').fitText(1.25);

                $body.scroll(function (e) {
                    $offset = $feedback.find('.scroll-offset').offset();

                    if($offset.top >= 0) {
                        $SECTIONS.removeClass('blocked');
                    }
                });

                const $fields = $feedback.find('input, textarea');

                $fields.click(function () {
                    $(this).focus();
                });

                $fields.on('input', (event) => {
                    const currentField = event.currentTarget;

                    if (currentField.value) {
                        currentField.classList.add('isValue')
                    } else {
                        currentField.classList.remove('isValue')
                    }
                });

                $feedback.find('form').submit(function (e) {
                    e.preventDefault();
                });

                $(document).on('click touchend', function(event) {
                    $feedback.css({"-webkit-overflow-scrolling":"touch"});
                    $feedback.find('.scroll-offset').css({"-webkit-transform":"translate3d(0, 0, 0)"});
                });
            }



            //LOAD

            $body.removeClass('loading');
            $loading.fadeOut(1000);

            blockInit('promo');
            //blockInit('product', true, 'biomed-gum-sensitive');

            //Promo Block

            if($PRODUCTS.length) {
                $PRODUCTS.find('.description h3').fitText(0.75);

                $PRODUCTS.find('[data-img]').each(function () {
                    $dataImg = $(this).data('img');

                    $(this).html('<img class="lazy" data-src="'+$dataImg+'?v2"/>');

                });

                function productsFilter() {
                    $productsFilterArray = '.blank';

                    $PRODUCTS.find('.filter-item.is-selected').each(function () {
                        $productsFilterArray += ', .'+$(this).data('filter');
                    });

                    if($productsFilterArray != '.blank') {
                        $PRODUCTS.find('.catalog-item').hide();
                        $PRODUCTS.find($productsFilterArray).show();
                    } else {
                        $PRODUCTS.find('.catalog-item').show();
                    }

                    if($PRODUCTS.find('.filter-item-2.is-selected').length) {
                        $productsFilter2Array = '.for-blank';

                        $PRODUCTS.find('.filter-item-2').not('.is-selected').each(function () {
                            $productsFilter2Array += ', .'+$(this).data('filter');
                        });

                        $PRODUCTS.find($productsFilter2Array).hide();
                    }
                }

                $PRODUCTS.find('.filter-item').click(function () {
                    $(this).toggleClass('is-selected');

                    productsFilter();
                });

                $PRODUCTS.find('.filter-item-2').click(function () {
                    $(this).toggleClass('is-selected');

                    productsFilter();
                });

            }



            //Promo Block

            if($PRODUCT.length) {

                //FitText: http://fittextjs.com
                $PRODUCT.find('.description .name').fitText(0.55);
                $PRODUCT.find('.description h3').fitText(1.25);
                $PRODUCT.find('.description p').fitText(1.25);

                $PRODUCT.find('.double-change').click(function () {
                    $(this).closest('.carousel-cell').find('.double').fadeToggle(0);
                });

                $PRODUCT.find('.feature .number').fitText(0.15);
                $PRODUCT.find('.cols-4 .feature p').fitText(1.5);
                $PRODUCT.find('.cols-3 .feature p').fitText(2.1);

                $PRODUCT.find('.ingredients .head h3').fitText(0.55);
                $PRODUCT.find('.ingredients .head h4').fitText(1.25);

                $PRODUCT.find('.ingredients .head-2 h3').fitText(1.85);
                $PRODUCT.find('.ingredients .head-2 h4').fitText(1.15);

                $PRODUCT.find('.ingredients-carousel h3').fitText(0.9);
                $PRODUCT.find('.ingredients-carousel p').fitText(1.25);

                $PRODUCT.find('[data-img]').each(function () {
                    $dataImg = $(this).data('img');

                    $(this).prepend('<img class="lazy" data-src="'+$dataImg+'?v2"/>');

                });

                $PRODUCT.find('.product-page').each(function () {
                    $thisProduct = $(this);

                    const $ingredientsCarousel = $thisProduct.find('.ingredients-carousel');

                    $ingredientsCarousel.on( 'ready.flickity', function() {
                        $ingredientsCarousel.append('<div class="slider-range"><input type="hidden" class="slider-input" value="0" /></div>');

                        $thisProduct.find('.slider-input').jRange({
                            from: 0,
                            to: $thisProduct.find('.ingredients-carousel .carousel-cell').length,
                            step: 1,
                            showLabels: false,
                            showScale: false,
                            width: $(window).height()*0.2,
                            //snap: true,
                            onstatechange: function (state) {
                                $PRODUCT.find('.product-page.active .ingredients-carousel').flickity('select', state);
                            }
                        });

                        $thisProduct.find('.slider-input').click(function () {
                            $thisVal = $(this).val();
                            $(this).jRange('setValue', $thisVal);
                        });
                    });

                    $ingredientsCarousel.each(function () {
                        $(this).flickity({
                            // options
                            cellAlign: 'left',
                            //wrapAround: true,
                            contain: true,
                            //draggable: false,
                            pageDots: false,
                            prevNextButtons: false,
                            selectedAttraction: 0.01,
                            friction: 0.15,
                            dragThreshold: 10
                        });
                    });

                    $ingredientsCarousel.on( 'select.flickity', function( event, index ) {
                        //console.log( 'Flickity select ' + index );

                        $PRODUCT.find('.product-page.active .slider-input').val(index).click();
                    });

                    $ingredientsCarousel.on( 'touchstart', function( event, index ) {
                        console.log('touchstart');
                        $body.css("overflow","hidden");
                    });

                    $ingredientsCarousel.on( 'touchend ', function( event, index ) {
                        console.log('touchend');
                        $body.css("overflow","scroll");
                    });
                });

                $PRODUCT.find('.why .head h3, .research .head h3, .catalog .head h3, .also .head h3').fitText(1);
                $PRODUCT.find('.catalog .head-2 h3').fitText(1.5);
                $PRODUCT.find('.why .head h4').fitText(1.75);

                $PRODUCT.find('.why-item p').fitText(1.75);

                $PRODUCT.find('.footer .block').fitText(1.75);

                $body.mousemove(function (e) {
                    var v = 0, w = 0;

                    if(!$PRODUCT.hasClass('freeze') && !$PRODUCT.hasClass('pushed')) {
                        $PRODUCT.addClass('freeze');

                        v = (e.pageX - ($(window).width() / 2)) / 20;
                        w = (e.pageY - ($(window).height() / 2)) / 20;

                        $PRODUCT.find('.is-selected .key-visual .magnify').reverse().each(function () {
                            $(this).css({'transform': 'translate(' + v + 'px, ' + w + 'px)'});

                            v = v * 0.8;
                            w = w * 0.8;

                            //console.log(x, y);
                        });

                        setTimeout(function () {
                            $PRODUCT.removeClass('freeze');
                        }, 100);
                    }
                });


                //Scrolling

                $lastActiveOld = '';


                function scrolling() {
                    if($wW > 600) {
                        if($PRODUCT.find('.product-page.active').length) {
                            $wW = $(window).width();
                            $wH = $(window).height();

                            $top1 = $html.scrollTop();
                            $top2 = $body.scrollTop();

                            if ($top1) {
                                $top = $top1;
                            } else {
                                $top = $top2;
                            }

                            $lastActive = '';

                            $PRODUCT.find('.product-page.active .fade-block').each(function () {
                                $topBlock = $top + ($(window).height() * 0.8);

                                if ($topBlock >= $(this).offset().top) {
                                    $(this).removeClass('disabled');
                                } else {
                                    $(this).addClass('disabled');
                                }
                            });

                            $topBlock = $top + $(window).height();
                            if ($topBlock >= $PRODUCT.find('.product-page.active .footer').offset().top) {
                                $robotOffset = $topBlock - $PRODUCT.find('.product-page.active .footer').offset().top;

                                $droid.find('.droid-offset').css({'margin-bottom': $robotOffset + 'px'});
                            } else {
                                $droid.find('.droid-offset').css({'margin-bottom': 0});
                            }
                        }

                    } else {
                        $PRODUCT.find('.product-page .fade-block').removeClass('disabled');
                    }
                }
                $body.on('scroll', function(e) {
                    scrolling();
                });
                scrolling();

            }
        }
    }

    //onload
    window.onload = documentLoaded;
    setTimeout(documentLoaded, 2000);


    $('#feedback-form').on('submit', function(e) {
        $.ajax({
            type: "POST",
            url: '/send-form.php',
            data: $(this).serializeArray(),
            dataType: 'json',
            success: function(json_answer){
                alert('Спасибо, ваше сообщение отправлено.');
                $('#feedback-form')[0].reset();
            }
        });
    });

});