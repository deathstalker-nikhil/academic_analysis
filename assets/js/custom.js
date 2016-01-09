function getRegion(){
    return document.cookie.replace(/(?:(?:^|.*;\s*)region\s*\=\s*([^;]*).*$)|^.*$/, "$1");
}
function saveRegion(data){
    document.cookie = "region="+data+";path=/";
}
$(document).ready(function(){
  $(document).on('change','select[name="location"]',function(){
      region = $(this).val();
      saveRegion(region);
      window.location.reload();
  });
	$('.forgotPasswordForm').submit(function(){
		var params = {};
		$.each($(this).serializeArray(), function(i, field) {
			params[field.name] = field.value;
		});	
		$(this).find('button[type="submit"]').addClass('disabled');
		$(this).closest('.modal').modal('toggle');
		$.ajax({
		  url: "/home/forgot_password",
		  method: "POST",
		  data:params
		})
		.done(function( data ) {
		  if(data == ''){
		  	alert('Incomplete Data');
		  }else if(data == 0){
		  	alert('Invaid Mail');
		  }else if(data == 1){
		  	alert('Mail Send');
		  }
		})
		.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});  
});

function getFilteredDealsBySubcategory(){
	var locations = [];
	var malls = [];
	var dealsWithCoupons = 0;
	$('#locationsList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			locations.push($(this).find('input[type="checkbox"]').val());
		}
	});
	$('#mallsList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			malls.push($(this).find('input[type="checkbox"]').val());
		}		
	});

	if($('#dealsWithCoupons').is(':checked')){
		dealsWithCoupons = 1;
	}	
	
	var data = {'city':locations,'malls':malls,'category':$('#category').val(),'subcategory':$('#subcategory').val(),'coupons':dealsWithCoupons};
	$.ajax({
	  url: "/home/getFilteredDealsBySubcategory",
	  method: "GET",
	  data:data
	})
	.done(function( data ) {
	  if(data != ''){
	  	$('.dealContainer').html(data);
	  }else{
	  	$('.dealContainer').html('<h2>No result</h2>');
	  }
	})
	.fail(function( jqXHR, textStatus ) {
	  alert( "Request failed: " + textStatus );
	});	
}

function getFilteredDealsByCategory(){
	var locations = [];
	var malls = [];
	var subcategory = [];
	var dealsWithCoupons = 0;
	$('#locationsList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			locations.push($(this).find('input[type="checkbox"]').val());
		}
	});
	
	$('#subCategoryList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			subcategory.push($(this).find('input[type="checkbox"]').val());
		}
	});	

	$('#mallsList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			malls.push($(this).find('input[type="checkbox"]').val());
			console.log(malls);
		}		
	});

	if($('#dealsWithCoupons').is(':checked')){
		dealsWithCoupons = 1;
	}

	var data = {'city':locations,'malls':malls,'subcategory':subcategory,'category':$('#category').val(),'coupons':dealsWithCoupons};
	$.ajax({
	  url: "/home/getFilteredDealsByCategory",
	  method: "GET",
	  data:data
	})
	.done(function( data ) {
	  if(data != ''){
	  	$('.dealContainer').html(data);
	  }else{
	  	$('.dealContainer').html('<h2>No result</h2>');
	  }
	})
	.fail(function( jqXHR, textStatus ) {
	  alert( "Request failed: " + textStatus );
	});		
}

$('#mainSearchForm').submit(function (){
	var params = '';
	$.each($('#mainSearchForm').serializeArray(), function(i, field) {
		params += '&'+field.name+'='+field.value;
	});
	params = params.substring(1, params.length);
	window.location = '/search?'+params;
});

function getFilteredDealsFromSearch(){
	var locations = [];
	var malls = [];
	var category = [];
	var dealsWithCoupons = 0;
	$('#locationsList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			locations.push($(this).find('input[type="checkbox"]').val());
		}
	});
	
	$('#categoriesList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			category.push($(this).find('input[type="checkbox"]').val());
		}
	});	

	$('#mallsList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			malls.push($(this).find('input[type="checkbox"]').val());
			console.log(malls);
		}		
	});

	if($('#dealsWithCoupons').is(':checked')){
		dealsWithCoupons = 1;
	}
	var data = {'city':locations,'malls':malls,'category':category,'region':$('#region').val(),'query':$('#query').val(),'coupons':dealsWithCoupons};
	$.ajax({
	  url: "/home/filteredSearchData",
	  method: "GET",
	  data:data
	})
	.done(function( data ) {
	  if(data != ''){
	  	$('.dealContainer').html(data);
	  }else{
	  	$('.dealContainer').html('<h2>No result</h2>');
	  }
	})
	.fail(function( jqXHR, textStatus ) {
	  alert( "Request failed: " + textStatus );
	});	
}
