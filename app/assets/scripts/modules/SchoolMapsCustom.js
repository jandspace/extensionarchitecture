jQuery(function($){
	var map = new google.maps.Map(document.getElementById("map"), {
		center: new google.maps.LatLng(39.143377, -99.092887), //United States
		zoom: 3, //United States
		streetViewControl: false,
		mapTypeControl: false,
		fullscreenControl: false,
		scrollwheel: false,
		styles: [{
				"featureType": "administrative",
				"elementType": "all",
				"stylers": [{
						"visibility": "on"
					},
					{
						"lightness": 33
					}
				]
			},
			{
				"featureType": "landscape",
				"elementType": "all",
				"stylers": [{
					"color": "#f2e5d4"
				}]
			},
			{
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [{
					"color": "#c5dac6"
				}]
			},
			{
				"featureType": "poi.park",
				"elementType": "labels",
				"stylers": [{
						"visibility": "on"
					},
					{
						"lightness": 20
					}
				]
			},
			{
				"featureType": "road",
				"elementType": "all",
				"stylers": [{
					"lightness": 20
				}]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry",
				"stylers": [{
					"color": "#c5c6c6"
				}]
			},
			{
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [{
					"color": "#e4d7c6"
				}]
			},
			{
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#fbfaf7"
				}]
			},
			{
				"featureType": "water",
				"elementType": "all",
				"stylers": [{
						"visibility": "on"
					},
					{
						"color": "#acbcc9"
					}
				]
			}
		]
	});

	var sm = window.matchMedia( "(min-width: 768px)" );
	if (sm.matches) {
		map.setZoom(4);
	}
	var md = window.matchMedia( "(min-width: 1024px)" );
	if (md.matches) {
		map.setZoom(5);
	}



	var infowindow = new google.maps.InfoWindow();

	// LOCATION INFORMATION

	// US Adult schools
	var adultschools = [
		["<a href='#'' class='ad'>Kaplan Berkeley - US</a>", 37.870456, -122.26795],
		["<a href='#'' class='ad'>Kaplan Boston Fenway - US</a>", 42.348409, -71.096714],
		["<a href='#'' class='ad'>Kaplan Boston Harvard Square - US</a>", 42.372756, -71.120231],
		["<a href='#'' class='ad'>Kaplan Chicago - US</a>", 41.890679, -87.624766],
		["<a href='#'' class='ad'>Kaplan Golden West College - US</a>", 33.733714, -118.001213],
		["<a href='#'' class='ad'>Kaplan Los Angeles Westwood - US</a>", 34.059809, -118.445353],
		["<a href='#'' class='ad'>Kaplan Los Angeles Whittier College - US</a>", 33.976509, -118.031233],
		["<a href='#'' class='ad'>Kaplan Miami - US</a>", 25.731256, -80.258126],
		["<a href='#'' class='ad'>Kaplan New York Empire State - US</a>", 40.748446, -73.985505],
		["<a href='#'' class='ad'>Kaplan Philadelphia - US</a>", 39.948796, -75.161818],
		["<a href='#'' class='ad'>Kaplan Portland - US</a>", 45.525414, -122.684779],
		["<a href='#'' class='ad'>Kaplan San Diego - US</a>", 32.712224, -117.159516],
		["<a href='#'' class='ad'>Kaplan San Francisco - US</a>", 37.786888, -122.399662],
		["<a href='#'' class='ad'>Kaplan Santa Barbara - US</a>", 34.418631, -119.696199],
		["<a href='#'' class='ad'>Kaplan Seattle Downtown - US</a>", 47.605998, -122.339456],
		["<a href='#'' class='ad'>Kaplan Seattle Highline Community College - US</a>", 47.387721, -122.301792]
	];

	// US Thirty schools
	var thirtyschools = [
		["<a href='#'' class='th'>Kaplan New York 30+ School - US</a>", 40.766769, -73.981399]
	];

	// US Junior schools
	var juniorschools = [
		["<a href='#'' class='jr'>Kaplan Los Angeles Junior - US</a>", 33.976357, -118.031558],
		["<a href='#'' class='jr'>Kaplan San Diego Junior - US</a>", 32.712517, -117.159554]
	];

	var marker, i;
	for (i = 0; i < adultschools.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(adultschools[i][1], adultschools[i][2]),
			icon: "https://assetlibs.kaplaninternational.com/_assets/country-hub/images/map-marker-adult-school.png", //Map icon
			map: map
		});
		google.maps.event.addListener(
			marker,
			"click",
			(function(marker, i) {
				return function() {
						infowindow.setContent(adultschools[i][0]);
						infowindow.open(map, marker);
				};
			})(marker, i)
		);
	}

	for (i = 0; i < thirtyschools.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(thirtyschools[i][1], thirtyschools[i][2]),
			icon: "https://assetlibs.kaplaninternational.com/_assets/country-hub/images/map-marker-thirty-school.png", //Map icon
			map: map
		});
		google.maps.event.addListener(
			marker,
			"click",
			(function(marker, i) {
				return function() {
						infowindow.setContent(thirtyschools[i][0]);
						infowindow.open(map, marker);
				};
			})(marker, i)
		);
	}

	for (i = 0; i < juniorschools.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(juniorschools[i][1], juniorschools[i][2]),
			icon: "https://assetlibs.kaplaninternational.com/_assets/country-hub/images/map-marker-junior-school.png", //Map icon
			map: map
		});
		google.maps.event.addListener(
			marker,
			"click",
			(function(marker, i) {
				return function() {
						infowindow.setContent(juniorschools[i][0]);
						infowindow.open(map, marker);
				};
			})(marker, i)
		);
	}
})