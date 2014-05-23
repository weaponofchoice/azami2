var image = new google.maps.MarkerImage(
		//'../content/themes/azami/img/marker.png',
    'http://azami.woc-dev.nl/content/themes/azami2/img/marker.png',
    new google.maps.Size(66,66),    // size of the image
    new google.maps.Point(0,0), // origin, in this case top-left corner
    new google.maps.Point(33, 33)    // anchor, i.e. the point half-way along the bottom of the image
	
	
	
);

var map;
    $(document).ready(function(){

		map = new GMaps({
			scrollwheel: false,
			zoom: 19,
			el: '#map',
			lat: 52.080643,
			lng: 4.307691,
			mapTypeControlOptions: {
			          mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm", "cloudmade"]
			        }
		});
		
		
		
		map.addMarker({
			lat: 52.080643,
			lng: 4.307691,
			title: 'UFS',
			icon: image
			
		});
		
		var styles = [
	    {
	        "featureType": "landscape",
	        "stylers": [
	            {
	                "saturation": -100
	            },
	            {
	                "lightness": 65
	            },
	            {
	                "visibility": "on"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "stylers": [
	            {
	                "saturation": -100
	            },
	            {
	                "lightness": 51
	            },
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "road.highway",
	        "stylers": [
	            {
	                "saturation": -100
	            },
	            {
	                "visibility": "simplified"
	            }
	        ]
	    },
	    {
	        "featureType": "road.arterial",
	        "stylers": [
	            {
	                "saturation": -100
	            },
	            {
	                "lightness": 30
	            },
	            {
	                "visibility": "on"
	            }
	        ]
	    },
	    {
	        "featureType": "road.local",
	        "stylers": [
	            {
	                "saturation": -100
	            },
	            {
	                "lightness": 40
	            },
	            {
	                "visibility": "on"
	            }
	        ]
	    },
	    {
	        "featureType": "transit",
	        "stylers": [
	            {
	                "saturation": -100
	            },
	            {
	                "visibility": "simplified"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative.province",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "water",
	        "elementType": "labels",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "lightness": -25
	            },
	            {
	                "saturation": -100
	            }
	        ]
	    },
	    {
	        "featureType": "water",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "hue": "#ffff00"
	            },
	            {
	                "lightness": -25
	            },
	            {
	                "saturation": -97
	            }
	        ]
	    }
		];

		map.setOptions({styles: styles});
	   
		
})