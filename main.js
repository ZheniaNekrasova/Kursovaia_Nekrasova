ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map('map', {
        center: [55.8036960292365, 37.6777094311999],
        zoom: 12,
    });

    var placeMark = new ymaps.PlaceMark([55.8036960292365, 37.6777094311999], {
        hintContent: 'Сокольники',
        baloonContent: 'Название по адресу'
    });

    myMap.geoObjects.add(placeMark);
}