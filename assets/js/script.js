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
            console.log(height)
        }

        $backdrop.css({
            top: headerBottom + 'px',
            height: height + 'px',
            bottom: 'auto'
        });
    }

    function openMenu($item) {
        $('.header__menu > .menu-item-has-children').removeClass('show');

        $header.addClass('menu-show');
        $item.addClass('show');

        setTimeout(function () {
            updateBackdropHeight();
        }, 10);
    }

    function closeMenu() {
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

});