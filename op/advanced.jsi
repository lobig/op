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

