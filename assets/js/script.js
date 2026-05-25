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

    const $items = $('.how-item');
    function updateActiveItem() {

        const windowCenter = $(window).height() / 2;
        let currentItem = null;
        let closestOffset = Infinity;

        $items.each(function () {
            const $item = $(this);
            const rect = this.getBoundingClientRect();
            const itemCenter = rect.top + rect.height / 2;
            const offset = Math.abs(windowCenter - itemCenter);
            if (offset < closestOffset) {
                closestOffset = offset;
                currentItem = $item;
            }
        });
        $items.removeClass('active');
        if (currentItem) {
            currentItem.addClass('active');
        }
    }
    updateActiveItem();
    $(window).on('scroll resize', updateActiveItem);
});

function initSliders() {
    function updateButtons(swiper, label, slider) {
        const nextButtons = slider.querySelectorAll('.' + label + '__next');
        const prevButtons = slider.querySelectorAll('.' + label + '__prev');

        const current = swiper.activeIndex;
        const last = swiper.slides.length - 1;

        prevButtons.forEach(btn => {
            btn.classList.toggle('disabled', current === 0);
        });

        nextButtons.forEach(btn => {
            btn.classList.toggle('disabled', current === last);
        });
    }
    
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
                            updateButtons(this, heroLabel, slider);
                        },
                        slideChange: function () {
                            updateNumbers(this);
                            updateButtons(this, heroLabel, slider);
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
            }
        });
    }
    
    const installLabel = 'install';
    const install = document.querySelectorAll('.' + installLabel);
    if (install.length > 0) {
        install.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + installLabel + '__swiper');
            
            if (swiperContainer) {
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 1,
                    roundLengths: true,
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },
                    on: {
                        init: function () {
                            updateButtons(this, installLabel, slider);
                        },
                        slideChange: function () {
                            updateButtons(this, installLabel, slider);
                        }
                    }
                });

                slider.addEventListener('click', function (e) {
                    const nextButton = e.target.closest('.' + installLabel + '__next');
                    const prevButton = e.target.closest('.' + installLabel + '__prev');

                    if (nextButton) {
                        e.preventDefault();
                        swiper.slideNext();
                    }

                    if (prevButton) {
                        e.preventDefault();
                        swiper.slidePrev();
                    }
                });
            }
        });
    }

    const hitLabel = 'hit';
    document.querySelectorAll('.' + hitLabel).forEach(function (slider) {
        const swiperContainer = slider.querySelector('.' + hitLabel + '__swiper');

        if (!swiperContainer) return;

        let swiper = null;

        function checkHitSlider() {
            if (window.innerWidth > 768) {
                if (!swiper) {
                    swiperContainer.classList.remove('grid');

                    swiper = new Swiper(swiperContainer, {
                        loop: false,
                        slidesPerView: 3,
                        roundLengths: true,
                        navigation: {
                            nextEl: slider.querySelector('.' + hitLabel + '__next'),
                            prevEl: slider.querySelector('.' + hitLabel + '__prev'),
                        },
                        allowTouchMove: false,
                        spaceBetween: 20,
                        breakpoints: {
                            0: { slidesPerView: 'auto' },
                            1200: { slidesPerView: 3 },
                        },
                    });
                }
            } else {
                swiperContainer.classList.add('grid');

                if (swiper) {
                    swiper.destroy(true, true);
                    swiper = null;
                }
            }
        }

        checkHitSlider();
        window.addEventListener('resize', checkHitSlider);
    });

    const cardItemLabel = 'card-item';
    const cardItem = document.querySelectorAll('.' + cardItemLabel);
    const isDesktop = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    if (cardItem.length > 0) {
        cardItem.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + cardItemLabel + '__swiper');
            const wrapSlider = slider.querySelector('.' + cardItemLabel + '__slider');
            
            if (swiperContainer) {
                const pagination = slider.querySelector('.' + cardItemLabel + '__pagination');
                
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 1,
                    roundLengths: true,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },
                });

                if (isDesktop) {
                    wrapSlider.addEventListener('mousemove', function (e) {
                        const rect = slider.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const percent = x / rect.width;

                        let targetIndex = Math.floor(percent * swiper.slides.length);

                        if (targetIndex < 0) targetIndex = 0;
                        if (targetIndex >= swiper.slides.length) {
                            targetIndex = swiper.slides.length - 1;
                        }

                        if (swiper.activeIndex !== targetIndex) {
                            swiper.slideTo(targetIndex);
                        }
                    });

                    wrapSlider.addEventListener('mouseleave', function () {
                        swiper.slideTo(0);
                    });
                }
                
            }
        });
    }
}

function initUI() {
    initSliders()
}