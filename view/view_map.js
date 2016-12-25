$('#myMapModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});

var myCenter=new google.maps.LatLng(53, -1.33);
var marker=new google.maps.Marker({
    position:myCenter
});

function initialize() {
  var mapProp = {
      center:myCenter,
      zoom: 14,
      draggable: false,
      scrollwheel: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
  marker.setMap(map);
    
  google.maps.event.addListener(marker, 'click', function() {
      
    infowindow.setContent(contentString);
    infowindow.open(map, marker);
    
  }); 
};

$('.btn').click(function(){

  	initialize();

});

