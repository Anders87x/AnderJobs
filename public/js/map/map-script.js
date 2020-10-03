
(function ($) {
  "use strict";

$(function() {

    // Snazzy Map Style - https://snazzymaps.com/style/8097/wy
    var mapStyle = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#d2d1d1"
            },
            {
                "visibility": "on"
            }
        ]
    }
];
    var center = { lat: 40.712776, lng: -74.005974 };
    var offsetCenter = function(dx, dy) {
        return { lat: center.lat + dx, lng: center.lng + dy };
    };
    // Add a custom marker
    var markerIcon = {
        path: 'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
        fillColor: '#ff8a00',
        fillOpacity: 0.95,
        scale: 2,
        strokeColor: '#fff',
        strokeWeight: 3,
        anchor: new google.maps.Point(12, 24)
    };

    // Create the map
    var map = new google.maps.Map($('.map-canvas')[0], {
        zoom: 12,
        styles: mapStyle,
        center: new google.maps.LatLng(40.712776, -74.005974)
    });



    var dx = 0.003;
    var placements = [
        {
            title: 'Stockroom Assistant',
            link: '#',
            bgImg: 'images/svg/01.svg',
            body: '<p><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i>Freelance</a></p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.718062, lng : -74.078939 }
        },
        {
            title: 'Group Marketing Manager',
            link: '#',
            bgImg: 'images/svg/02.svg',
            body: '<p><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.723945, lng : -74.000588 },
        },
        {
            title: 'Part Time Sales Assistant',
            link: '#',
            bgImg: 'images/svg/03.svg',
            body: '<p><a class="temporary" href="#"><i class="fas fa-suitcase pr-1"></i>Temporary</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.731375, lng : -74.006193 },
        },
        {
            title: 'Customer Service Assistant',
            link: '#',
            bgImg: 'images/svg/04.svg',
            body: '<p><a class="full-time" href="#"><i class="fas fa-suitcase pr-1"></i>Full time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.733391, lng : -73.985345 },
        },
        {
            title: 'Web Developer – .net',
            link: '#',
            permalink: 'hitest',
            bgImg: 'images/svg/05.svg',
            body: '<p><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.731245, lng : -74.032788 },
        },
        {
            title: 'Data Entry Administrator',
            link: '#',
            bgImg: 'images/svg/06.svg',
            body: '<p><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i>Freelance</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.728991, lng : -74.167134 },
        },
        {
            title: 'Stockroom Assistant',
            link: '#',
            bgImg: 'images/svg/07.svg',
            body: '<p><a class="temporary" href="#"><i class="fas fa-suitcase pr-1"></i>Temporary</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.682143, lng : -74.259448 },
        },
        {
            title: 'Post Room Operative',
            link: '#',
            bgImg: 'images/svg/08.svg',
            body: '<p><a class="full-time" href="#"><i class="fas fa-suitcase pr-1"></i>Full time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.748761, lng : -74.306119 },
        },
        {
            title: 'Research Administrator',
            link: '#',
            bgImg: 'images/svg/09.svg',
            body: '<p><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i>Freelance</a></p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.675113, lng : -73.843865 },
        },
        {
            title: 'Group Marketing Manager',
            link: '#',
            bgImg: 'images/svg/10.svg',
            body: '<p><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.727430, lng : -73.800626 },
        },
        {
            title: 'Customer Service Assistant',
            link: '#',
            bgImg: 'images/svg/11.svg',
            body: '<p><a class="temporary" href="#"><i class="fas fa-suitcase pr-1"></i>Temporary</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.715981, lng : -73.897336 },
        },
        {
            title: 'Part Time Sales Assistant',
            link: '#',
            bgImg: 'images/svg/12.svg',
            body: '<p><a class="full-time" href="#"><i class="fas fa-suitcase pr-1"></i>Full time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.669385, lng : -73.705160 },
        },
        {
            title: 'Web Developer – .net',
            link: '#',
            bgImg: 'images/svg/13.svg',
            body: '<p><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i>Freelance</a></p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.826483, lng : -74.014765 },
        },
        {
            title: 'Data Entry Administrator',
            link: '#',
            bgImg: 'images/svg/14.svg',
            body: '<p><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.884132, lng : -73.913512 },
        },
        {
            title: 'Research Administrator',
            link: '#',
            bgImg: 'images/svg/15.svg',
            body: '<p><a class="full-time" href="#"><i class="fas fa-suitcase pr-1"></i>Full time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.915531, lng : -74.062449 },
        },
        {
            title: 'Personal Shopping',
            link: '#',
            bgImg: 'images/svg/16.svg',
            body: '<p><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i>Freelance</a></p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.653759, lng : -73.994861 },
        },
        {
            title: 'Post Room Operative',
            link: '#',
            bgImg: 'images/svg/17.svg',
            body: '<p><a class="full-time" href="#"><i class="fas fa-suitcase pr-1"></i>Full time</a>.</p>' +
                '<div class="mt-2 job-grid-map-price"><span class="mr-2"><i class="fas fa-filter pr-1"></i>Accountancy </span> <span class="ml-auto"> <i class="fas fa-map-marker-alt pr-1"> </i> Needham, MA </span></div>',
            LatLng: { lat : 40.669385, lng : -74.116001 },
        },

    ];

    $.each(placements, function(i, e) {
       /* var marker = new google.maps.Marker({
            map: map,
            draggable: true,
            position: e.LatLng
        });
        var info = new SnazzyInfoWindow($.extend({}, {
            marker: marker,
            placement: e.type,
            content: e.type,
            panOnOpen: false
        }));*/
     //   info.open();


    var marker = new google.maps.Marker({
        map: map,
        icon: markerIcon,
        position: e.LatLng //new google.maps.LatLng(40.72, -74)
    });

    // Set up handle bars
    var template = Handlebars.compile($('#marker-content-template').html());

    // Set up a close delay for CSS animations
    var info = null;
    var closeDelayed = false;
    var closeDelayHandler = function() {
        $(info.getWrapper()).removeClass('active');
        setTimeout(function() {
            closeDelayed = true;
            info.close();
        }, 300);
    };


    // Add a Snazzy Info Window to the marker
    info = new SnazzyInfoWindow({
        marker: marker,
        wrapperClass: 'custom-window',
        offset: {
            top: '-72px'
        },
        edgeOffset: {
            top: 50,
            right: 60,
            bottom: 50
        },
        closeWhenOthersOpen: true,
        border: false,
        closeButtonMarkup: '<button type="button" class="custom-close">&#215;</button>',
        content: template({
            title: e.title,
            link:e.link,
            subtitle: e.subtitle,
            bgImg: e.bgImg,
            body: e.body
        }),
        callbacks: {
            open: function() {


                $(this.getWrapper()).addClass('open');
            },
            afterOpen: function() {
                var wrapper = $(this.getWrapper());
                wrapper.addClass('active');
                wrapper.find('.custom-close').on('click', closeDelayHandler);
            },
            beforeClose: function() {
                if (!closeDelayed) {
                    closeDelayHandler();
                    return false;
                }
                return true;
            },
            afterClose: function() {
                var wrapper = $(this.getWrapper());
                wrapper.find('.custom-close').off();
                wrapper.removeClass('open');
                closeDelayed = false;
            }
        }
    });
    });


    // Open the Snazzy Info Window
   // info.open();
});

})(jQuery);
