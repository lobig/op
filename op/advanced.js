$(document).ready(function(){
	
	$('#searchModal').on('shown.bs.modal', function() {
		$('#search').trigger('focus');
		});
	
	$('.toast').toast('show');
	
	$('#category-dropdown').on('change', function() {
		var category_id = this.value;
		$(function () {
		$.ajax({
			url: 'fetch-subcategory-by-category.php',
			method: 'POST',
			type: 'POST',
			enctype: 'multipart/form-data',
			data: {
				category_id: category_id
			},
			cache: false,
			success: function(result){
				$('#sub-category-dropdown').html(result);
			}
		});
		});
	});
	
});

function showPhoneNumber() {
  var x = document.getElementById("phonenumber");
  if (x.style.display === "none") {
    x.style.display = "inline-block";
  } else {
    x.style.display = "none";
  }
  var x = document.getElementById("phonenumberbutton");
  if (x.style.display === "inline-block") {
    x.style.display = "none";
  } else {
    x.style.display = "none";
  }
}

function setCookie(itemid) {
	var d = new Date();
	d.setTime(d.getTime() + (24*60*60*1000));
	//d.setTime(d.getTime() + (30*1000));
    var expires = "expires=" + d.toGMTString();
	document.cookie = "opweb.viewed.AdvertisementID" + itemid + "=" + itemid + ";" + expires + "";
}

function updateNumberofViews(itemid) {
  	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "http://opweb.ddns.net/services/api/put/protected/updateCountOfViewOnOneAdvertisement.php?AdvertisementId=" + itemid, true);
	xmlhttp.send();	
}

function getCookie(cname) {
	var name = cname + "=";
  	var decodedCookie = decodeURIComponent(document.cookie);
  	var ca = decodedCookie.split(';');
  	for(var i = 0; i < ca.length; i++) {
    	var c = ca[i];
    	while (c.charAt(0) == ' ') {
      	c = c.substring(1);
    	}
    	if (c.indexOf(name) == 0) {
      		return c.substring(name.length, c.length);
    	}
  	}
  	return "";
}

function checkCookie(itemid) {
	var adID=getCookie("opweb.viewed.AdvertisementID" + itemid + "");
  		if (adID != itemid) {
    		setCookie(itemid);
	 		updateNumberofViews(itemid);
  		} 
}





