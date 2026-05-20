<script>
    async function loadYandexMap() {
        if (window.ymaps) return;
        await loadScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
    }

    function loadModule(src) {
        return new Promise(resolve => {
            if (document.querySelector(`script[src="${src}"]`)) return resolve();

            const s = document.createElement('script');
            s.src = src;
            s.type = 'module';
            s.onload = resolve;
            document.body.appendChild(s);
        });
    }

    function loadScript(src) {
        return new Promise(resolve => {
            if (document.querySelector(`script[src="${src}"]`)) return resolve();

            const s = document.createElement('script');
            s.src = src;
            s.onload = resolve;
            document.body.appendChild(s);
        });
    }

    function loadStyle(href) {
        return new Promise(resolve => {
            if (document.querySelector(`link[href="${href}"]`)) return resolve();

            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = href;
            link.onload = resolve;
            document.head.appendChild(link);
        });
    }

    let loaded = false;

    async function lazyLoad() {
        if (loaded) return;
        loaded = true;

        await loadStyle('assets/css/libs/swiper-bundle.min.css');
        await loadStyle('assets/css/libs/fancybox.css');

        await loadScript('assets/js/libs/swiper-bundle.min.js');
        await loadScript('assets/js/libs/fancybox.umd.js');

        await loadScript('assets/js/libs/inputmask.min.js');

        await loadYandexMap();

        initUI();
        
        initMap();
    }

    function initMap() {
        const mapEl = document.getElementById('map');
        if (!mapEl) return;

        const point = [55.796835, 37.542689];
        const contactTitle = 'Спецуборка';
        const caption = 'Москва, Ленинградский пр‑т, д. 50, эт. 3, офис 305';

        ymaps.ready(function () {
            const myMap = new ymaps.Map('map', {
                center: point,
                zoom: 11,
                controls: ['zoomControl']
            });

            const myPlacemark = new ymaps.Placemark(point, {
                balloonContent: caption,
                iconCaption: contactTitle
            }, {
                preset: 'islands#blueDotIconWithCaption'
            });

            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
        });
    }

    ['scroll', 'mousemove', 'touchstart'].forEach(e => {
        window.addEventListener(e, lazyLoad, {
            once: true
        });
    });

    setTimeout(lazyLoad, 3000);
</script>