$(document).ready(function(){
	
	$('#price-range-submit').hide();

	$("#min_price,#max_price").on('change', function () {

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());

	  if (min_price_range > max_price_range) {
		$('#max_price').val(min_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });
	  
	});


	$("#min_price,#max_price").on("paste keyup", function () {                                        

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());
	  
	  if(min_price_range == max_price_range){

			max_price_range = min_price_range + 100;
			
			$("#min_price").val(min_price_range);		
			$("#max_price").val(max_price_range);
	  }

	  $(".slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$(function () {
	  $("#slider-range").slider({
		range: true,
		orientation: "horizontal",
		min: 100,
		max: 1000,
		values: [100, 1000],
		step: 100,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }
		  
		  $("#min_price").val(ui.values[0]);
		  $("#max_price").val(ui.values[1]);
		  var a1=ui.values[0];
		  var a2=ui.values[1];
		  var a =(a1-100)/900 *100;
		  $('#min_price').css("left","calc("+a+"% - 15px)");
		  var a =(a2-100)/900 *100;
		  $('#max_price').css("left","calc("+a+"% - 15px)");
		}
	  });

	  $("#min_price").val($("#slider-range").slider("values", 0));
	  $("#max_price").val($("#slider-range").slider("values", 1));

	});
	$(function () {
	  $("#slider-range2").slider({
		range: true,
		orientation: "horizontal",
		min: 300,
		max: 2000,
		values: [0, 2000],
		step: 100,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }
		  	$("#min_price2").val(ui.values[0]);
		  	$("#max_price2").val(ui.values[1]);
		   	var a1=ui.values[0];
		   	var a2=ui.values[1];
		   	var a =(a1-300)/1700 *100;
		   	$('#min_price2').css("left","calc("+a+"% - 15px)");
		   	var a =(a2-300)/1700 *100;
		  	 $('#max_price2').css("left","calc("+a+"% - 15px)");
		}

	  });
	  $("#min_price2").val($("#slider-range2").slider("values", 0));
	  $("#max_price2").val($("#slider-range2").slider("values", 1));

	});
	$(function () {
	  $("#slider-range3").slider({
		value: 0,
      orientation: "horizontal",
      range: "min",
      max:5,
      step:1,
      animate: false,
      slide:function(event,ui)
      {
		  $('#min_price3').val(ui.value);
		  var a=ui.value;
		  a=a/5 *100;
		  $('#min_price3').css("left","calc("+a+"% - 6px)");
		  $('#max_price3').css("left","calc("+a+"%)");
		  // $('.form-search-nc-start').after().css("left","calc("+a+"% - 6px)");
      }
	  });

	   $("#min_price3").val($("#slider-range3").slider("values", 0));
	  // $("#max_price3").val($("#slider-range3").slider("values", 1));

	});
	$(function () {
	  $("#slider-range4").slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 20,
		values: [0, 10000],
		step: 1,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }
		  
		  $("#min_price4").val(ui.values[0]);
		  $("#max_price4").val(ui.values[1]);
		  var a1=ui.values[0];
		  var a2=ui.values[1];
		  var a =(a1-0)/20 *100;
		  $('#min_price4').css("left","calc("+a+"% - 6px)");
		  var a =(a2-0)/20 *100;
		  $('#max_price4').css("left","calc("+a+"% - 6px)");
		}
	  });

	  $("#min_price4").val($("#slider-range4").slider("values", 0));
	  $("#max_price4").val($("#slider-range4").slider("values", 1));

	});
	$("#slider-range,#price-range-submit").click(function () {

	  var min_price = $('#min_price').val();
	  var max_price = $('#max_price').val();

	  $("#searchResults").text("Here List of products will be shown which are cost between " + min_price  +" "+ "and" + " "+ max_price + ".");
	});

});