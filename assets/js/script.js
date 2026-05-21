$(document).ready(function () {
    const $header = $('.header');
    const $backdrop = $('.header-backdrop');
    function updateBackdropHeight() {
        const $activeItem = $('.header__menu > .menu-item-has-children.show');
        if (!$activeItem.length) return;
        const headerBottom = $header[0].getBoundingClientRect().bottom;
        const $dropdown = $activeItem.find('> .dropdown-menu');
        const indent = 16;
        let height = $dropdown.outerHeight() - indent;
        const $activeSubItem = $activeItem.find('.sub-menu .menu-item-has-children.show').last();

        if ($activeSubItem.length) {
            const $activeSubMenu = $activeSubItem.children('.sub-menu');
            const baseHeight =
                $dropdown.outerHeight() -
                $dropdown.find('.sub-menu').first().outerHeight();
            height = $activeSubMenu.outerHeight() + baseHeight - indent;
        }
        $backdrop.css({
            top: headerBottom + 'px',
            height: height + 'px',
            bottom: 'auto'
        });
    }
    function openMenu($item) {
        $('.header__menu > .menu-item-has-children').removeClass('show');

        $('body').addClass('menu-showed');
        $header.addClass('menu-show');
        $item.addClass('show');

        setTimeout(function () {
            updateBackdropHeight();
        }, 10);
    }
    function closeMenu() {
        $('body').removeClass('menu-showed');
        $header.removeClass('menu-show');
        $('.menu-item-has-children').removeClass('show');
    }
    $('.header__menu > .menu-item-has-children').on('mouseenter', function () {
        openMenu($(this));
    });
    $('.header__menu > .menu-item-has-children').on('mouseleave', function (e) {
        const toElement = e.relatedTarget;

        if (!$(toElement).closest(this).length) {
            closeMenu();
        }
    });
    $('.dropdown-menu .menu-item-has-children').on('mouseenter', function () {
        $(this)
            .siblings('.menu-item-has-children')
            .removeClass('show')
            .find('.menu-item-has-children')
            .removeClass('show');

        $(this).addClass('show');

        updateBackdropHeight();
    });
    $('.dropdown-menu .menu-item-has-children').on('mouseleave', function (e) {
        const toElement = e.relatedTarget;

        if (!$(toElement).closest(this).length) {
            $(this)
                .removeClass('show')
                .find('.menu-item-has-children')
                .removeClass('show');

            updateBackdropHeight();
        }
    });
    $backdrop.on('click', function () {
        closeMenu();
    });


    $('.mob-m').click(function(){
		$('body').toggleClass('open-m');
		if($('body').hasClass('open-m')){
			$('footer').after('<div class="over-bg"></div>');
		}else{
			$('.over-bg').remove();
		}
	});

    $(document).on('click', '.over-bg', function(){
        $(this).remove();
        $('body').toggleClass('open-m');
    });
    
    $('.menu-item__mob-icon').on('click', function (e) {
        e.preventDefault();
        $(this).parents('.menu-item').toggleClass('show-mob');
        return false;
    })

    function checkScroll() {
        const body = $('body');

        if ($(window).scrollTop() > 50) {
            body.addClass('body-scroll');
        } else {
            body.removeClass('body-scroll');
        }
        
        updateBackdropHeight();
    }

    $(window).on('scroll', checkScroll);

    checkScroll();
});

function initSliders() {
    const heroLabel = 'hero';
    const hero = document.querySelectorAll('.' + heroLabel);
    if (hero.length > 0) {
        hero.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + heroLabel + '__swiper');

            const currentEl = slider.querySelector('.' + heroLabel + '-numb__start');
            const totalEl = slider.querySelector('.' + heroLabel + '-numb__end');
            
            if (swiperContainer) {
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 1,
                    roundLengths: true,
                    effect: 'fade',
                    // autoplay: {
                    //     delay: 4000,
                    //     disableOnInteraction: false,
                    // },
                    fadeEffect: {
                        crossFade: true
                    },
                    on: {
                        init: function () {
                            updateNumbers(this);
                            updateButtons(this);
                        },
                        slideChange: function () {
                            updateNumbers(this);
                            updateButtons(this);
                        },
                        reachEnd: function () {
                            setTimeout(() => {
                                this.slideTo(0);
                            }, 4000);
                        }

                    }
                });

                slider.addEventListener('click', function (e) {
                    const nextButton = e.target.closest('.' + heroLabel + '__next');
                    const prevButton = e.target.closest('.' + heroLabel + '__prev');

                    if (nextButton) {
                        e.preventDefault();
                        swiper.slideNext();
                    }

                    if (prevButton) {
                        e.preventDefault();
                        swiper.slidePrev();
                    }
                });

                function updateNumbers(swiper) {
                    let current = swiper.realIndex + 1;
                    let total = swiper.slides.length;
                    if (currentEl) {
                        currentEl.textContent = String(current).padStart(2, '0');
                    }
                    if (totalEl) {
                        totalEl.textContent = String(total).padStart(2, '0');
                    }
                }

                function updateButtons(swiper) {
                    const nextButtons = slider.querySelectorAll('.' + heroLabel + '__next');
                    const prevButtons = slider.querySelectorAll('.' + heroLabel + '__prev');

                    const current = swiper.activeIndex;
                    const last = swiper.slides.length - 1;

                    prevButtons.forEach(btn => {
                        btn.classList.toggle('disabled', current === 0);
                    });

                    nextButtons.forEach(btn => {
                        btn.classList.toggle('disabled', current === last);
                    });
                }
            }
        });
    }
}

function initUI() {
    initSliders()
}