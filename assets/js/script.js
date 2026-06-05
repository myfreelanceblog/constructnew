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

    $(document).on('click', '.config-nav__item', function(e){
        const id = $(this).attr('data-id');
        const $configTop = $('.config-top');
        const $target = $configTop.find('.config-item--components .modal-line');

        $('.config-nav__item').removeClass('active');
        $(this).addClass('active');
        $('.config').addClass('active-components');

        $('.config-tab__item').removeClass('active');
        $('#'+id).addClass('active');
        
        $configTop.animate({
            scrollTop: $target.position().top
        }, 0);
    })

    $(document).on('click', '.config-back', function() {
        const $configTop = $('.config-top');
        const $target = $configTop.find('.config-item--cat');

        $('.config').removeClass('active-components');
        $('.config-nav__item').removeClass('active');

        $configTop.animate({
            scrollTop: $configTop.scrollTop() + $target.position().top
        }, 0);
    });

    $(document).on('click', '.config-category__item', function(e){
        const parents = $(this).parents('.config-tab__item');
        const cat = $(this).attr('data-cat');
        $(parents).find('.config-category__item').removeClass('active');
        $(this).addClass('active');

        const el = $(parents).find('.config-choice__item[data-cat="' + cat + '"]');
        if (el.length > 0) {
            $(parents).find('.config-choice__item').each(function () {
                if ($(this).attr('data-cat') != cat) {
                    $(this).addClass('hidden');
                } else {
                    $(this).removeClass('hidden');
                }
            });
        } else {
            $(parents).find('.config-choice__item').removeClass('hidden');
        }
    })

    $(document).on('click', '.config-choice__item', function(e){
        const parents = $(this).parents('.config-tab__item');
        $(parents).find('.config-choice__item').removeClass('active');
        $(this).addClass('active');

        const id = $(parents).attr('id');
        const el = $('[data-id="' + id + '"]');
        $(el).find('.config-nav__desc').html($(this).find('.config-choice__title').text());
    })

    $(document).on('click', '.config__zoom', function(e){
        $(this).closest('.config-item').find('.config__swiper .swiper-slide-active a')[0].click();
    })

    function checkScroll() {
        const body = $('body');

        if ($(window).scrollTop() > 50) {
            body.addClass('body-scroll');
        } else {
            body.removeClass('body-scroll');
        }
        setTimeout(() => {updateBackdropHeight();}, 300)
        
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

document.addEventListener('click', function (e) {
    const btn = e.target.closest('[data-modal]');
    if (!btn) return;
    e.preventDefault();
    document.querySelectorAll('.modal').forEach(function (modal) {
        modal.classList.remove('show');
    });
    const modalClass = btn.getAttribute('data-modal');
    const modal = document.querySelector('.modal-' + modalClass);
    if (!modal) return;
    document.body.classList.add('lock');
    modal.classList.add('show');
    const title = btn.getAttribute('data-title');
    const input = modal.querySelector('input[name="form_name"]');
    if (title && input) {
        input.value = title;
    }
});
document.querySelectorAll('.close-modal, .overlay').forEach(function(item) {
    item.addEventListener('click', function() {
        document.querySelectorAll('.modal').forEach(function(modal) {
            modal.classList.remove('show');
        });

        document.body.classList.remove('lock');
    });
});

document.querySelectorAll('.cart-item__more').forEach(function(item) {
    item.addEventListener('click', function() {
        this.closest('.cart-item').classList.toggle('active');
    });
});

document.addEventListener('change', function (e) {
    if (!e.target.matches('.modal-radio input[type="radio"]')) {
        return;
    }
    const modal = e.target.closest('.modal');
    const id = e.target.dataset.id;
    const items = modal.querySelectorAll('.connection-fields__item');
    items.forEach(function (item) {
        item.classList.remove('active');
        const input = item.querySelector('input');
        if (input) {
            input.disabled = true;
        }
    });
    const activeItem = modal.querySelector('.connection-fields__item[data-id="' + id + '"]');
    if (activeItem) {
        activeItem.classList.add('active');
        const input = activeItem.querySelector('input');
        if (input) {
            input.disabled = false;
        }
    }
});
document.querySelectorAll('.modal').forEach(function (modal) {
    const checked = modal.querySelector('.modal-radio input[type="radio"]:checked');
    if (!checked) {
        return;
    }
    const id = checked.dataset.id;
    modal.querySelectorAll('.connection-fields__item').forEach(function (item) {
        const input = item.querySelector('input');
        item.classList.remove('active');
        if (input) {
            input.disabled = true;
        }
    });
    const activeItem = modal.querySelector('.connection-fields__item[data-id="' + id + '"]');
    if (activeItem) {
        activeItem.classList.add('active');
        const input = activeItem.querySelector('input');
        if (input) {
            input.disabled = false;
        }
    }
});

const selects = document.querySelectorAll("select.custom-select-original");
selects.forEach(originalSelect => {
    const wrapper = document.createElement("div");
    wrapper.className = "custom-select-wrapper";

    const display = document.createElement("div");
    display.className = "custom-select-display";

    const displayText = document.createElement("span");
    displayText.textContent = originalSelect.options[originalSelect.selectedIndex]?.text || "Выберите";
    display.appendChild(displayText);

    const optionsList = document.createElement("div");
    optionsList.className = "custom-select-options";

    const optionsWrap = document.createElement("div");
    optionsWrap.className = "custom-select-options__wrap";

    Array.from(originalSelect.options).forEach(option => {
        const optionDiv = document.createElement("div");
        optionDiv.className = "custom-select-option";
        optionDiv.textContent = option.text;
        optionDiv.dataset.value = option.value;

        if (option.selected) {
            optionDiv.classList.add("selected");
        }

        optionDiv.addEventListener("click", () => {
            displayText.textContent = option.text;
            originalSelect.value = option.value;
            originalSelect.dispatchEvent(new Event("change"));

            optionsWrap.querySelectorAll(".custom-select-option").forEach(opt => opt.classList.remove("selected"));
            optionDiv.classList.add("selected");

            wrapper.classList.remove("active");
        });

        optionsWrap.appendChild(optionDiv);
    });

    optionsList.appendChild(optionsWrap);

    display.addEventListener("click", e => {
        e.stopPropagation();
        const isActive = wrapper.classList.contains("active");
        document.querySelectorAll(".custom-select-wrapper.active").forEach(w => w.classList.remove("active"));
        if (!isActive) {
            wrapper.classList.add("active");
        }
    });

    wrapper.appendChild(display);
    wrapper.appendChild(optionsList);
    originalSelect.parentNode.insertBefore(wrapper, originalSelect);

    if (originalSelect.value) {
        display.classList.add("selected");
    }

    originalSelect.addEventListener("change", () => {
        const selectedOption = originalSelect.options[originalSelect.selectedIndex];
        displayText.textContent = selectedOption.text;

        optionsWrap.querySelectorAll(".custom-select-option").forEach(opt => {
            opt.classList.toggle("selected", opt.dataset.value === selectedOption.value);
        });

        if (selectedOption.value) {
            display.classList.add("selected");
        } else {
            display.classList.remove("selected");
        }
    });
});
document.addEventListener("click", () => {
    document.querySelectorAll(".custom-select-wrapper.active").forEach(w => {
        w.classList.remove("active");
    });
});

if (window.location.hash === '#order') {
    document.body.classList.add('cart-order-show');
}
document.querySelector('.cart-price__btn')?.addEventListener('click', () => {
    document.body.classList.add('cart-order-show');
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

let forCount = 0;
document.querySelectorAll('.check, .radio').forEach(function(item) {
    forCount++;
    const isRadio = item.classList.contains('radio');
    const labelClass = isRadio ? '.radio__label' : '.check__label';
    const label = item.querySelector(labelClass);
    const input = item.querySelector('input');
    if (!label || !input) return;
    const baseName = label.getAttribute('for') || input.getAttribute('name') || 'field';
    const newId = (isRadio ? 'radio-' : 'check-') + baseName + forCount;
    label.setAttribute('for', newId);
    input.setAttribute('id', newId);
    item.classList.toggle('active', input.checked);
});
document.addEventListener('change', function(e) {
    const input = e.target.closest('.check__input input, .radio__input input');
    if (!input) return;
    const isRadioInput = input.type === 'radio';
    const parentClass = e.target.closest('.radio') ? '.radio' : '.check';
    document.querySelectorAll(parentClass).forEach(function(item) {
        const currentInput = item.querySelector('input');
        if (!currentInput) return;
        if (isRadioInput && currentInput.name !== input.name) return;
        item.classList.toggle('active', currentInput.checked);
    });
});

document.addEventListener('click', function(e) {
    const btn = e.target.closest('[data-more]');
    if (!btn) return;
    const container = btn.closest('[data-container]');
    if (!container) return;
    const count = parseInt(btn.dataset.count, 10) || 0;
    const itemSelector = btn.dataset.items;
    if (!itemSelector) return;
    const items = container.querySelectorAll(`${itemSelector}.hidden:not(.active)`);
    items.forEach((item, i) => {
        if (i < count) {
            item.classList.add('active');
        }
    });
    const remaining = container.querySelectorAll(`${itemSelector}.hidden:not(.active)`);
    if (remaining.length === 0) {
        btn.closest('.line-btn')?.remove();
        btn?.remove();
    }
});

document.querySelectorAll('.excellence-box').forEach(box => {
    box.querySelectorAll('.excellence-item').forEach(item => {
        item.querySelector('.excellence-item__top').addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });
});

function setHeight(el) { el.style.height = el.scrollHeight + 'px'; }
function collapse(el) { setHeight(el); requestAnimationFrame(() => el.style.height = '0px'); }

document.querySelectorAll('.faq-box__item').forEach(function(box) {
    const firstItem = box.querySelector('.faq-box__item.active .faq-item');
    if (firstItem) {
        const firstAnswer = firstItem.querySelector('.faq-item__answer');
        firstItem.classList.add('active');
        firstAnswer.style.height = firstAnswer.scrollHeight + 'px';
    }
    box.querySelectorAll('.faq-item').forEach(function(item) {
        const title = item.querySelector('.faq-item__title');
        const icon = item.querySelector('.faq-item__icon');
        const answer = item.querySelector('.faq-item__answer');
        function openFaq() {
            box.querySelectorAll('.faq-item.active').forEach(function(activeItem) {
                if (activeItem !== item) {
                    const activeAnswer = activeItem.querySelector('.faq-item__answer');
                    activeItem.classList.remove('active');
                    activeAnswer.style.height = activeAnswer.scrollHeight + 'px';
                    requestAnimationFrame(function() {
                        activeAnswer.style.height = '0px';
                    });
                }
            });
            item.classList.add('active');
            answer.style.height = answer.scrollHeight + 'px';
        }
        function closeFaq() {
            item.classList.remove('active');
            answer.style.height = answer.scrollHeight + 'px';
            requestAnimationFrame(function() {
                answer.style.height = '0px';
            });
        }
        function toggleFaq() {
            if (item.classList.contains('active')) {
                closeFaq();
            } else {
                openFaq();
            }
        }
        if (title) {
            title.addEventListener('click', toggleFaq);
        }
        if (icon) {
            icon.addEventListener('click', toggleFaq);
        }
    });
});

const faqTabs = document.querySelectorAll('.faq-tab__item');
const faqItems = document.querySelectorAll('.faq-box__item');
faqTabs.forEach(function(tab, index) {
    tab.addEventListener('click', function() {
        faqTabs.forEach(function(item) {
            item.classList.remove('active');
        });
        faqItems.forEach(function(item) {
            item.classList.remove('active');
        });
        tab.classList.add('active');
        if (faqItems[index]) {
            faqItems[index].classList.add('active');
        }
    });
});

const delivery = document.querySelector('.product-delivery');
const deliveryMob = document.querySelector('.product-delivery-mob');
if (delivery && deliveryMob) {
    deliveryMob.append(delivery.cloneNode(true));
}

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
            btn.classList.toggle('disabled', ((current === last) || swiper.isEnd));
        });
    }

    function updateNumbers(swiper, currentEl, totalEl) {
        let current = swiper.realIndex + 1;
        let total = swiper.slides.length;
        if (currentEl) {
            currentEl.textContent = String(current).padStart(2, '0');
        }
        if (totalEl) {
            totalEl.textContent = String(total).padStart(2, '0');
        }
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
                            updateNumbers(this, currentEl, totalEl);
                            updateButtons(this, heroLabel, slider);
                        },
                        slideChange: function () {
                            updateNumbers(this, currentEl, totalEl);
                            updateButtons(this, heroLabel, slider);
                        },
                        // reachEnd: function () {
                        //     setTimeout(() => {
                        //         this.slideTo(0);
                        //     }, 4000);
                        // }
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
            }
        });
    }

    const revLabel = 'rev';
    const rev = document.querySelectorAll('.' + revLabel);
    if (rev.length > 0) {
        rev.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + revLabel + '__swiper');
            
            if (swiperContainer) {
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 2,
                    roundLengths: true,
                    spaceBetween: 20,
                    allowTouchMove: false,
                    breakpoints: {
                        0: { slidesPerView: 1 },
                        992: { slidesPerView: 2 },
                    },
                    on: {
                        init: function () {
                            updateButtons(this, revLabel, slider);
                        },
                        slideChange: function () {
                            updateButtons(this, revLabel, slider);
                        },
                    }
                });

                slider.addEventListener('click', function (e) {
                    const nextButton = e.target.closest('.' + revLabel + '__next');
                    const prevButton = e.target.closest('.' + revLabel + '__prev');

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

    const controlLabel = 'control';
    const control = document.querySelectorAll('.' + controlLabel);
    if (control.length > 0) {
        control.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + controlLabel + '__swiper');
            
            if (swiperContainer) {
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 3,
                    roundLengths: true,
                    spaceBetween: 20,
                    breakpoints: {
                        0: { slidesPerView: 1 },
                        768: { slidesPerView: 2 },
                        1024: { slidesPerView: 3 },
                    },
                    on: {
                        init: function () {
                            updateButtons(this, controlLabel, slider);
                        },
                        slideChange: function () {
                            updateButtons(this, controlLabel, slider);
                        },
                    }
                });

                slider.addEventListener('click', function (e) {
                    const nextButton = e.target.closest('.' + controlLabel + '__next');
                    const prevButton = e.target.closest('.' + controlLabel + '__prev');

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
    
    const tariffLabel = 'tariff';
    const tariff = document.querySelectorAll('.' + tariffLabel);
    if (tariff.length > 0) {
        tariff.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + tariffLabel + '__swiper');
            
            if (swiperContainer) {
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 3,
                    roundLengths: true,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: slider.querySelector('.' + tariffLabel + '__next'),
                        prevEl: slider.querySelector('.' + tariffLabel + '__prev'),
                    },
                    breakpoints: {
                        0: { slidesPerView: 1, spaceBetween: 8 },
                        768: { slidesPerView: 2, spaceBetween: 8 },
                        992: { slidesPerView: 3, spaceBetween: 8 },
                        1200: { slidesPerView: 3, spaceBetween: 20 },
                    },
                });
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

    const configSliderLabel = 'config';
    const configSlider = document.querySelectorAll('.' + configSliderLabel);
    if (configSlider.length > 0) {
        configSlider.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + configSliderLabel + '__swiper');
            const currentEl = slider.querySelector('.' + configSliderLabel + '-numb__start');
            const totalEl = slider.querySelector('.' + configSliderLabel + '-numb__end');
            
            if (swiperContainer) {
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    on: {
                        init: function () {
                            updateNumbers(this, currentEl, totalEl);
                            updateButtons(this, configSliderLabel, slider);
                        },
                        slideChange: function () {
                            updateNumbers(this, currentEl, totalEl);
                            updateButtons(this, configSliderLabel, slider);
                        }
                    }
                });

                slider.addEventListener('click', function (e) {
                    const nextButton = e.target.closest('.' + configSliderLabel + '__next');
                    const prevButton = e.target.closest('.' + configSliderLabel + '__prev');

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

    const configCategoryLabel = 'config-category';
    const configCategory = document.querySelectorAll('.' + configCategoryLabel);
    if (configCategory.length > 0) {
        configCategory.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + configCategoryLabel + '__swiper');
            
            if (swiperContainer) {
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 'auto',
                    navigation: {
                        nextEl: slider.querySelector('.' + configCategoryLabel + '__next'),
                        prevEl: slider.querySelector('.' + configCategoryLabel + '__prev'),
                    },
                });
            }
        });
    }

    const personalLabel = 'personal';
    const personal = document.querySelectorAll('.' + personalLabel);

    if (personal.length > 0) {
        personal.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + personalLabel + '__swiper');
            const wrapper = swiperContainer ? swiperContainer.querySelector('.swiper-wrapper') : null;

            if (swiperContainer && wrapper) {
                const slides = Array.from(wrapper.children);
                const slidesCount = slides.length;
                const totalCycles = 5;                      // увеличил с 3 до 5 — больше запас
                const middleOffset = slidesCount * 2;       // стартуем с 2-й копии из 5
                const edgeThreshold = slidesCount + 1;      // телепортируемся заранее, с запасом

                let html = '';
                for (let i = 0; i < totalCycles; i++) {
                    slides.forEach(function (slide) {
                        html += slide.outerHTML;
                    });
                }
                wrapper.innerHTML = html;

                const swiper = new Swiper(swiperContainer, {
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    spaceBetween: 20,
                    loop: false,
                    initialSlide: middleOffset,
                    roundLengths: true,
                    speed: 500,
                    navigation: {
                        nextEl: slider.querySelector('.' + personalLabel + '__next'),
                        prevEl: slider.querySelector('.' + personalLabel + '__prev'),
                    },
                    on: {
                        slideChange: function (sw) {
                            teleportIfNeeded(sw);
                        },
                        slideChangeTransitionEnd: function (sw) {
                            teleportIfNeeded(sw);
                        },
                    },
                });

                function teleportIfNeeded(sw) {
                    const total = slidesCount * totalCycles;
                    const idx = sw.activeIndex;

                    if (idx < edgeThreshold) {
                        sw.slideTo(idx + middleOffset, 0, false);
                    } else if (idx >= total - edgeThreshold) {
                        sw.slideTo(idx - middleOffset, 0, false);
                    }
                }
            }
        });
    }

    const productSliderLabel = 'product-slider';
    const productSliders = document.querySelectorAll('.' + productSliderLabel);

    if (productSliders.length > 0) {
        productSliders.forEach(function (slider) {
            const galBigLabel = '.gal-big';
            const galBigContainer = slider.querySelector(galBigLabel);
            const currentEl = galBigContainer.querySelector('.gal-numb__start');
            const totalEl = galBigContainer.querySelector('.gal-numb__end');
            const zoom = galBigContainer.querySelector('.gal-zoom');
            const galSmallContainer = slider.querySelector('.gal-small__swiper');

            zoom?.addEventListener('click', function (el) {
                this.closest(galBigLabel).querySelector('.swiper-slide-active a').click();
            })

            if (!galBigContainer || !galSmallContainer) return;

            const galBigSwiper = new Swiper('.gal-big__swiper', {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: {
                    nextEl: galBigContainer.querySelector(galBigLabel + '__next'),
                    prevEl: galBigContainer.querySelector(galBigLabel + '__prev'),
                },
                on: {
                    init: function () {
                        updateNumbers(this, currentEl, totalEl);
                    },
                    slideChange: function () {
                        updateNumbers(this, currentEl, totalEl);
                    }
                }
            });

            const galSmallSwiper = new Swiper(galSmallContainer, {
                loop: false,
                slidesPerView: 'auto',
                direction: "vertical",
                mousewheel: {
                    enabled: true,
                },
                breakpoints: {
                    100: {
                        direction: "horizontal",
                        mousewheel: {
                            enabled: false,
                        },
                    },
                    768: {
                        direction: "vertical",
                        mousewheel: {
                            enabled: true,
                        },
                    },
                },
            });

            const thumbItems = slider.querySelectorAll('.gal-small__item');
            if (thumbItems.length > 0) thumbItems[0].classList.add('active');

            galBigSwiper.on('slideChange', function () {
                const i = galBigSwiper.activeIndex;

                thumbItems.forEach(function (item) { item.classList.remove('active'); });
                if (thumbItems[i]) thumbItems[i].classList.add('active');
                galSmallSwiper.slideTo(i);
            });

            thumbItems.forEach(function (item) {
                item.addEventListener('click', function () {
                    const slide = item.closest('.swiper-slide');
                    const i = Array.from(slide.parentElement.children).indexOf(slide);

                    thumbItems.forEach(function (el) { el.classList.remove('active'); });
                    item.classList.add('active');
                    galBigSwiper.slideTo(i);
                });
            });
        });
    }

    const mediaLabel = 'media';
    const media = document.querySelectorAll('.' + mediaLabel);
    if (media.length > 0) {
        media.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + mediaLabel + '__swiper');
            const pagination = slider.querySelector('.' + mediaLabel + '__pagination');
            
            if (swiperContainer) {
                const swiper = new Swiper(swiperContainer, {
                    loop: false,
                    slidesPerView: 4,
                    roundLengths: true,
                    spaceBetween: 20,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                    breakpoints: {
                        0: { slidesPerView: 1, spaceBetween: 8, },
                        568: { slidesPerView: 2, spaceBetween: 8, },
                        768: { slidesPerView: 3, spaceBetween: 16, },
                        992: { slidesPerView: 4, spaceBetween: 20, },
                    },
                });
            }
        });
    }

    const partnersLabel = 'partners';
    const partners = document.querySelectorAll('.' + partnersLabel);
    if (partners.length > 0) {
        partners.forEach(function (slider) {
            const swiperContainer = slider.querySelector('.' + partnersLabel + '__swiper');
            const wrapper = swiperContainer ? swiperContainer.querySelector('.swiper-wrapper') : null;
            if (swiperContainer && wrapper) {
                const slides = Array.from(wrapper.children);
                const slidesCount = slides.length;
                const totalCycles = 3;
                const middleOffset = slidesCount;
                const edgeThreshold = 5;
                let html = '';
                for (let i = 0; i < totalCycles; i++) {
                    slides.forEach(function (slide) {
                        html += slide.outerHTML;
                    });
                }
                wrapper.innerHTML = html;
                const swiper = new Swiper(swiperContainer, {
                    slidesPerView: 6,
                    initialSlide: middleOffset,
                    roundLengths: true,
                    spaceBetween: 20,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        0: { slidesPerView: 2, spaceBetween: 8 },
                        568: { slidesPerView: 3, spaceBetween: 8 },
                        768: { slidesPerView: 4, spaceBetween: 16 },
                        992: { slidesPerView: 6, spaceBetween: 20 },
                    },
                    on: {
                        slideChangeTransitionEnd: function (swiper) {
                            const total = slidesCount * totalCycles;
                            const idx = swiper.activeIndex;
                            const slidesPerView = getSlidesPerView(swiper);
                            let moved = false;

                            if (idx < edgeThreshold) {
                                swiper.slideTo(idx + middleOffset, 0, false);
                                moved = true;
                            } else if (idx >= total - edgeThreshold - slidesPerView) {
                                swiper.slideTo(idx - middleOffset, 0, false);
                                moved = true;
                            }

                            if (moved && swiper.autoplay) {
                                swiper.autoplay.start();
                            }
                        },
                    },
                });
                function getSlidesPerView(swiper) {
                    const value = swiper.params.slidesPerView;
                    if (typeof value === 'number') {
                        return value;
                    }
                    return 1;
                }
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
                            0: {
                                slidesPerView: 'auto',
                                allowTouchMove: true,
                            },
                            1200: {
                                slidesPerView: 3,
                                allowTouchMove: false,
                            },
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

    const wayLabel = 'way';
    document.querySelectorAll('.' + wayLabel).forEach(function (slider) {
        const swiperContainer = slider.querySelector('.' + wayLabel + '__swiper');
        if (!swiperContainer) return;
        let swiper = null;
        function checkSlider() {
            if (window.innerWidth < 768) {
                if (!swiper) {
                    const pagination = slider.querySelector('.' + wayLabel + '__pagination');
                    swiperContainer.classList.remove('grid');
                    swiper = new Swiper(swiperContainer, {
                        loop: false,
                        slidesPerView: 1,
                        roundLengths: true,
                        spaceBetween: 8,
                        pagination: {
                            el: pagination,
                            clickable: true,
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
        checkSlider();
        window.addEventListener('resize', checkSlider);
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