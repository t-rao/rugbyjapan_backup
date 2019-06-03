
$(document).ready(function(){
  var speed = 800;

  // check for hash and if div exist... scroll to div
  var hash = window.location.hash;
  if($(hash).length) scrollToID(hash, speed);
});

function scrollToID(id, speed) {
  var offSet = 170;
  var obj = $(id).offset();
  var targetOffset = obj.top - offSet;
  $('html,body').animate({ scrollTop: targetOffset }, speed);
}

// Google map custom code


function initMap() {

  var gmarkers1 = [];
  var markers1 = markers_lg_lt;

  var infowindow = new google.maps.InfoWindow({
    content: ''
  });

  var iconBase = 'https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/';
// console.log(markers_lg_lt);
  // markers1 = [
  //   ['1', 'Nissan Stadium', 35.510250, 139.606361, ['things'],'things.png'],
  //   ['2', 'Oriental Table ', 35.508861, 139.615139, ['cafe'],'cafe.png'],
  //   ['3', 'Montbell', 35.441444, 139.661167, ['shopping'],'shopping.png'],
  //   ['4', 'YCAT ', 35.464333, 139.625139, ['things'],'things.png'],
  //   ['5', 'Cupnoodles Museum', 35.455500, 139.638917, ['things'],'things.png'],
  //   ['6', 'Hard Rock ', 35.455806, 139.633083, ['cafe'],'cafe.png'],
  //   ['7', 'Osanbashi Terminal', 35.451194, 139.647417, ['things'],'things.png'],
  //   ['8', 'Yokohama Museum', 35.457056, 139.630972, ['culture'],'culture.png'],
  //   ['9', 'Rugby Diner 7 oath', 35.447556, 139.638944, ['nightlife'],'night_life.png'],
  //   ['10', 'Hamagyu', 35.447944, 139.629917, ['cafe'],'cafe.png'],
  //   ['11', 'Orbi', 35.457250, 139.632222, ['things'],'things.png'],
  //   ['12', 'Hakkeijima', 35.337389, 139.645889, ['things'],'things.png'],
  //   ['13', 'Mirai Yokocho', 35.454972, 139.631250, ['cafe'],'cafe.png'],
  //   ['14', 'Bennys place', 35.437833, 139.645361, ['nightlife'],'night_life.png'],
  //   ['15', 'Hotel New Grand', 35.444833, 139.649639, ['cafe'],'cafe.png'],
  //   ['16', 'Sojiji Temple', 35.506861, 139.670833, ['culture'],'culture.png'],
  //   ['17', 'Sheraton Hotel', 35.466750, 139.620194, ['cafe'],'cafe.png'],
  //   ['18', 'Kinpira Kitchen', 35.447611, 139.629833, ['cafe'],'cafe.png'],
  //   ['19', 'Sainkeien Garden', 35.417972, 139.661306, ['culture'],'culture.png'],
  //   ['20', 'Stove’s', 35.463722, 139.619278, ['cafe'],'cafe.png'],
  //   ['21', 'Yokohama Cosmoworld', 35.455222, 139.636889, ['things'],'things.png'],
  //   ['22', 'Yokohama Sky Cruise', 35.463111, 139.637583, ['things'],'things.png'],
  //   ['23', 'InterCon Hotel', 35.457611, 139.637222, ['things'],'things.png'],
  //   ['24', 'Noh Theatre', 35.452556, 139.625250, ['culture'],'culture.png'],
  //   ['25', 'Bay Hotel Tokyu', 35.456861, 139.635167, ['things'],'things.png'],
  //   ['26', 'Full Monty', 35.445583, 139.629083, ['nightlife'],'night_life.png'],
  //   ['27', 'Green Sheep', 35.463056, 139.617444, ['nightlife'],'night_life.png'],
  //   ['28', 'Marine & walk Yokohama', 35.454611, 139.642139, ['shopping'],'shopping.png'],
  //   ['29', 'Stadium', 35.443333, 139.640083, ['things'],'things.png'],
  //   ['30', 'The Space', 35.447361, 139.639306, ['things'],'things.png'],
  //   ['31', 'Motion Blue', 35.452694, 139.643333, ['nightlife'],'night_life.png'],
  //   ['32', 'Sake Bar', 35.463694, 139.615500, ['nightlife'],'night_life.png'],
  //   ['33', 'Mirai Manyo Club', 35.456000, 139.638250, ['things'],'things.png'],
  //   ['34', 'Ramen Museum', 35.509861, 139.614556, ['things'],'things.png'],
  //   ['35', 'Sky Duck Counter', 35.452750, 139.632500, ['things'],'things.png'],
  //   ['36', 'Kirin Brewery', 35.490750, 139.665778, ['things'],'things.png'],
  //   ['37', 'Yakatabune', 35.450611, 139.633167, ['things'],'things.png'],
  //   ['38', 'Gimme Gimme', 35.448028, 139.630194, ['nightlife'],'night_life.png'],
  //   ['39', 'Edosei', 35.442306, 139.645806, ['cafe'],'cafe.png'],
  //   ['40', 'Yamashita Park', 35.445750, 139.649583, ['things'],'things.png'],
  //   ['41', 'Yokohama Seryna-Romanjaya', 35.446750, 139.636361, ['cafe'],'cafe.png'],
  //   ['42', 'Haikara', 35.446639, 139.639083, ['culture'],'culture.png'],
  //   ['43', 'Imai Dojo', 35.442667, 139.641361, ['culture'],'culture.png'],
  //   ['44', 'Red Brick', 35.452639, 139.642806, ['culture'],'culture.png'],
  //   ['45', 'Cafe Giang', 35.443861, 139.647278, ['cafe'],'cafe.png'],
  //   ['46', 'Sea Bass', 35.445972, 139.651167, ['things'],'things.png'],
  //   ['47', 'Tinys ', 35.443278, 139.626556, ['things'],'things.png'],
  //   ];


  var markerCount = markers1.length



  var styledMapType = new google.maps.StyledMapType(
    [{
        "elementType": "geometry",
        "stylers": [{
          "color": "#f5f5f5"
        }]
      },
      {
        "elementType": "labels.icon",
        "stylers": [{
          "visibility": "off"
        }]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#616161"
        }]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [{
          "color": "#f5f5f5"
        }]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#bdbdbd"
        }]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
          "color": "#eeeeee"
        }]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#757575"
        }]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
          "color": "#e5e5e5"
        }]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#9e9e9e"
        }]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [{
          "color": "#ffffff"
        }]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#757575"
        }]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [{
          "color": "#dadada"
        }]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#616161"
        }]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#9e9e9e"
        }]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [{
          "color": "#e5e5e5"
        }]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [{
          "color": "#eeeeee"
        }]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "color": "#c9c9c9"
        }]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#9e9e9e"
        }]
      }
    ], {
      name: 'Styled Map'
    });




// var yokohama_map = { lat: 35.509999,lng: 139.606394};


  var map = new google.maps.Map(document.getElementById('map'), {
    center:map_lng_lt,
    zoom: 12,
    mapTypeControl: false,
  });


  // var contentString = '<div class="contentyoko">' +
  //                         '<div class="marker_img"><img src="'+yokohama_stadium+'" alt=""/></div>' +
  //                         '<div><h2>International Stadium Yokohama</h2><a class="mark_offical_btn" href="https://www.nissan-stadium.jp/" target="_blank">offical Website</a></div>'+
  //                     '</div>';



  var infowindowyoko = new google.maps.InfoWindow({
    content: contentString
  });

  var city_marker = new google.maps.Marker({
            position: map_lng_lt,
            icon:iconBase + pin ,
            map: map
          });


          city_marker.addListener('click', function() {
              infowindowyoko.open(map, city_marker);

            });

  for (i = 0; i < markerCount; i++) {
    addMarker(markers1[i]);
  }

  // Function to add marker to map
  function addMarker(marker) {
    var category = marker[4];
    var title = marker[1];
    var pos = new google.maps.LatLng(marker[2], marker[3]);
    var content = marker[1];
    var ictype= marker[5];

    marker1 = new google.maps.Marker({
      title: title,
      position: pos,
      icon: iconBase + ictype,
      category: category,
      map: map
    });

    gmarkers1.push(marker1);

    // Marker click listener
google.maps.event.addListener(marker1, 'click', (function(marker1, content) {
  return function() {
    console.log('Gmarker 1 gets pushed');
    infowindow.setContent(content);
    infowindow.open(map, marker1);
    // map.panTo(this.getPosition());
    // map.setZoom(15);
  }
})(marker1, content));



}

// Function on Change of checkbox
updateView = function(element) {
  if (element) {
    //Get array with names of the checked boxes
    checkedBoxes = ([...document.querySelectorAll('input[name=map_marker]:checked')]).map(function(o) {
      return o.id;
    });
    console.log(checkedBoxes);
    for (i = 0; i < markerCount; i++) {
      marker = gmarkers1[i];
      console.log(marker.category)
      //Filter to show any markets containing ALL of the selected options
      if(typeof marker.category == 'object' && marker.category.length === checkedBoxes.length && checkedBoxes.reduce((a, b) => a && marker.category.includes(b), true)){
        marker.setVisible(true);
      } else {
        marker.setVisible(false);
      }
    }
  } else {
    console.log('No param given');
  }
}
  map.mapTypes.set('styled_map', styledMapType);
  map.setMapTypeId('styled_map');

}



(function($) {
  "use strict";

  // manual carousel controls
  $('.next').click(function() {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function() {
    $('.carousel').carousel('prev');
    return false;
  });

})(jQuery);

var weekday = new Array(7);
weekday[0] = "SUN";
weekday[1] = "Mon";
weekday[2] = "Tue";
weekday[3] = "Wed";
weekday[4] = "Thu";
weekday[5] = "Fri";
weekday[6] = "Sat";
var months = new Array(12);
months[0] = "JAN";
months[1] = "FRB";
months[2] = "MAR";
months[3] = "APR";
months[4] = "MAY";
months[5] = "JUN";
months[6] = "JUl";
months[7] = "AUG";
months[8] = "SEP";
months[8] = "OCT";
months[10] = "NOV";
months[11] = "DEC";

var today = new Date();
var todaydate = today.getDate();
var thismonth = months[today.getMonth()];
var todayday = weekday[today.getDay()];


$('.day').text(todayday);
$('.date').text(todaydate);
$('.month').text(thismonth);


$(document).ready(function() {
  $("select.fillters").change(function() {
    var value = $(this).children("option:selected").val();
    if (value == "all") {
      $('.filter').show('1000');
    } else {
      $(".filter").not('.' + value).hide('3000');
      $('.filter').filter('.' + value).show('3000');

    }

  });
});


$(document).ready(function() {
  $('input[type="checkbox"]').click(function() {
    if ($(this).prop("checked") == true) {} else if ($(this).prop("checked") == false) {

    }
  });
});



$('.readmore').click(function() {
  event.preventDefault();
  var $el = $(this);
  var $p = $el.parent();
  if ($p.children('p+.mob_d')) {
    $p.children('p+.mob_d').toggleClass('mob_drop_vis mob_drop');

    $($el).text(function(i, text){
      return text === "Read more" ? "Close" : "Read more";
  });

  if($($el).text() == 'Close'){
    $($el).css('width','70px');
  }else{
    $($el).css('width','100px');
  }

  }
  // $( ".readmore" ).text( "Read more" );
});


var $products = $('.venu li'),
  $checks = $('.inner_tab_container input[type="checkbox"]'),
  $category = $('.inner_tab_container select.category');
$('.inner_tab_container').on('change', 'input, select', function() {
  var $lis = $products,
    category = $category.val(),
    $checked = $checks.filter(':checked');

  if (category != 'showall') {
    $lis = $lis.filter(function() {
      return $(this).data('category').indexOf(category) >= 0;
    });
  }

  if ($checked.length) {
    $checked.each(function() {
      $lis = $lis.filter('[data-' + $(this).val() + '="t"]');
    }).get();
  }

  $lis.show();
  $products.not($lis).hide()
});



(function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      e.preventDefault();
      $(this).siblings('.sub-menu').toggle();
      // Close one dropdown when selecting another
      $('.sub-menu').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.sub-menu').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      // $('.menu-main-menu-container').prepend('<a href="#" id="closebtn">&times;</a>');
      $('.menu-main-menu-container').css('width', '100%');
      $('#closebtn').css('display', 'block');
      $('#closebtn').css('opacity', '1');
    });

$('#closebtn').click(function() {
  $('.menu-main-menu-container').css('width', '0%');
  $('#closebtn').css('display', 'none');
  $('#closebtn').css('opacity', '0');
});

$('.menu li:nth-child(2) a').click(function() {
  $('.menu-main-menu-container').css('width', '0%');
  $('#closebtn').css('display', 'none');
  $('#closebtn').css('opacity', '0');
});

  }); // end DOM ready
})(jQuery); // end jQuery



//numbers
$(document).ready(function() {
var modalhas = ["#sapporastad", "#kamaishistad","#kumagayastad","#tokyostad","#yokohamastad","#shizukastad","#toyotastad","#hanazonostad","#kobestad","#fukuokastad","#kumaotostad","#oitastad"];
  $(".menu-item-13 .sub-menu li").each(function() {
    var $this = $(this);
    $this.children('a').prepend("<span>" + ($this.index()+1) + "</span>");
    $this.children('a').attr("data-toggle", "modal");
    $this.children('a').attr("data-target", modalhas[($this.index())]);
});
});

var countDownDate = new Date("Sept 20, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days ;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

//
// var deadline = new Date("septmeber 20, 2019").getTime();
// var x = setInterval(function() {
// var now = new Date().getTime();
// var t = deadline - now;
// var days = Math.floor(t / (1000 * 60 * 60 * 24));
// console.log(deadline);
// $("#demo").text(days);
//     if (t < 0) {
//         clearInterval(x);
//         document.getElementById("demo").innerHTML = "Done";
//     }
// }, 1000);




jQuery(document).ready(function() {

  var btn = $('#topbutton');

  $(window).scroll(function() {

    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });

});


$(".menu-item-12 a").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 2000);
});
