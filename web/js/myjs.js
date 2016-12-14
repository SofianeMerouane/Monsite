
	$(document).ready(function() {
		$('#francemap').vectorMap({
		    map: 'france_fr',
			hoverOpacity: 0.5,
			hoverColor: "orange",
			backgroundColor: "#ffffff",
			color: "blue",
			borderColor: "#000000",
			selectedColor: "orange",
			enableZoom: true,
			showTooltip: true,
		    onRegionClick: function(element, code, region)
		    {
		        var message = 'Région : "'
		            + region 
		            + '" || Id : "'
		            + code
					+ '"';
             
		        alert(message);
		    }
		});
	});
	
