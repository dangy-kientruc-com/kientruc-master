	function percentJs(json) {
    var $ppc = $('.progress-pie-chart');
    $.each($ppc, function () {
        var number = $(this).data('percent');
        var percent = number*(100/json.best);
        var deg = 360 * percent / 100;

        if (percent >= 75) {
            $(this).addClass('gt-50 maufrom75');
        }else if (percent >= 50) {
            $(this).addClass('gt-50 maufrom50');
           
        }else{
            $(this).addClass('maufrom25');
          
        }

        $(this).find('.ppc-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
        $(this).find('.ppc-percents span').html(number + json.txt);
    });
}

percentJs({txt: '%', best: 100});
	$(document).ready(function() {
		  $("#owl-data").owlCarousel({
		      navigation : false,
		      loop:true, // Show next and prev buttons
		      items:3,
		      singleItem:false,
		      dots:true,
		      margin:8,
		      dotsContainer:'.profileviewer-left-data-dots',
		  });
		
		  $("#owl").owlCarousel({
		      navigation : true, // Show next and prev buttons
		      items:1,
		      singleItem:true,
		      dotsContainer:'.profileviewer-right-top-dots',
		  });
		// new WOW().init();
	});

	$(document).ready(function(){
		var mb=$(window).width();
		if(mb<=900)
		{
			$('#menu').addClass('owl-carousel');
			$('#menu').addClass(' owl-theme');
			if(mb<=400)
			{$('#menu').append("<div class='profileviewer-right-menu-li'></div>")}
			$('.profileviewer-right-menu-li').addClass('item');
			$('#menu').owlCarousel({
				 items:3,
				 dots:false,
			});
			$('.owl-item').css("width","auto");
		}
		else if(mb<=1100)
		{

			$('#menu').addClass('owl-carousel');
			$('#menu').addClass(' owl-theme');
			$('.profileviewer-right-menu-li').addClass('item');
			$('#menu').owlCarousel({
				 items:4,
				 dots:false,
			});
			$('.owl-item').css("width","auto");
		}
	})
	//chart1 
	var ctxL = document.getElementById("lineChart1").getContext('2d');
	var ctxL2 = document.getElementById("lineChart2").getContext('2d');
	var labels=["15 thag 6", "16 thg 6", "17 thg 6", "18 thg 6", "19 thg 6", "20 thg 6", "21 thg 6"];
	var options={
		responsive: true
	      	,
	      	layout:{
	    		padding:0,
	    	},
	    	title:{
	    		display:false,
	    		text: 'Precision-Recall Curve',
	    	},
	      	tooltips: {
			      enabled: true,
			      intersect: false,
			     borderThickness:5,
			     fontColor:'red',
			     backgroundColor:'#FFF',
			     borderColor:'#d3d3d3',
			     borderWidth:1,
			     displayColors:true,
			     bodyFontColor:'#000000',
			     pointBorderColor: 'green',
			     xPadding:10,
			     yPadding:7,
			    labelColors:"#000000",
			    labelRadius:10,
			     cornerRadius:3	,
			      callbacks: {
							     title: function() {
							       return '';
							     },
							     beforeLabel: function(tooltipItem, data) { 
							       return  ;
							     },
							     labelColor: function(tooltipItem, chart) {
				                    return {
				                        borderColor: 'green',
				                        backgroundColor: 'green',
				                        borderWidth:50,
				                    };
				                },
			 				}
			},
	      	scales: {
	        	yAxes: [{
	          		ticks: {
	          			 type: 'linear',
	            		beginAtZero: true,
	            		min:0,
	            		fontSize:14,
	            		mirror:true,

	          		},
	          		gridLines: {
		              	display: true,
		              	drawBorder: false,
						drawOnChartArea: true,
						drawTicks:false,
						zeroLineWidth:0,
		            },
	        		

	        	}],
	        	xAxes:[{
	        		display: true,
		            gridLines: {

		              	display: false,
						drawTicks:true,
						tickMarkLength:10,
						zeroLineWidth:50,
						offsetGridLines:true
		            },
	        		ticks: {
	        			 type: 'linear',
	            		beginAtZero: true,
	            		min: 0,
	            		fontSize:14,
	            		fontStyle:'italic',
	            		mirror:true,
	          		}  
	        	}]
	      	},
		    legend:{
		      	display:false
		    },
		    maintainAspectRatio: false,

	}
	var options2={
		responsive: true
	      	,
	      	layout:{
	    		padding:0,
	    	},
	    	title:{
	    		display:false,
	    		text: 'Precision-Recall Curve',
	    	},
	      	tooltips: {
			      enabled: true,
			      intersect: false,
			     borderThickness:5,
			     fontColor:'red',
			     backgroundColor:'#FFF',
			     borderColor:'#d3d3d3',
			     borderWidth:1,
			     displayColors:true,
			     bodyFontColor:'#000000',
			     pointBorderColor: '#474747',
			     xPadding:10,
			     yPadding:7,
			    labelColors:"#000000",
			    labelRadius:10,
			     cornerRadius:3	,
			      callbacks: {
							     title: function() {
							       return '';
							     },
							     beforeLabel: function(tooltipItem, data) { 
							       return  ;
							     },
							     labelColor: function(tooltipItem, chart) {
				                    return {
				                        borderColor: '#474747',
				                        backgroundColor: '#474747',
				                        borderWidth:50,
				                    };
				                },
			 				}
			},
	      	scales: {
	        	yAxes: [{
	          		ticks: {
	          			 type: 'linear',
	            		beginAtZero: true,
	            		min:0,
	            		fontSize:14,
	            		mirror:true,

	          		},
	          		gridLines: {
		              	display: true,
		              	drawBorder: false,
						drawOnChartArea: true,
						drawTicks:false,
						zeroLineWidth:0,
		            },
	        		

	        	}],
	        	xAxes:[{
	        		display: true,
		            gridLines: {

		              	display: false,
						drawTicks:true,
						tickMarkLength:10,
						zeroLineWidth:50,
						offsetGridLines:true
		            },
	        		ticks: {
	        			 type: 'linear',
	            		beginAtZero: true,
	            		min: 0,
	            		fontSize:14,
	            		fontStyle:'italic',
	            		mirror:true,
	          		}  
	        	}]
	      	},
		    legend:{
		      	display:false
		    },
		    maintainAspectRatio: false,

	}
	var myLineChart = new Chart(ctxL, {
	    type: 'line',

	    data: {
	      	labels: labels,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,5, 8, 14],
		          	backgroundColor: [
		            	'rgba(0,255,0,0.1)',
		          	],
		          	borderColor: [
		            	'green',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: 'green',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: 'green',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options,
	   
	});
	var myLineChart2 = new Chart(ctxL2, {
	    type: 'line',

	    data: {
	      	labels: labels,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,5, 8, 14],
		          	backgroundColor: [
		            	'rgba(0,255,0,0.1)',
		          	],
		          	borderColor: [
		            	'green',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: 'green',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: 'green',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options,
	   
	});
	var ctxL3 = document.getElementById("lineChart3").getContext('2d');
	var myLineChart3 = new Chart(ctxL3, {
	    type: 'line',

	    data: {
	      	labels: labels,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,5, 8, 14],
		          	backgroundColor: [
		            	'rgba(0,255,0,0.1)',
		          	],
		          	borderColor: [
		            	'green',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: 'green',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: 'green',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options,
	   
	});
	var ctxL4 = document.getElementById("lineChart4").getContext('2d');
	var myLineChart3 = new Chart(ctxL4, {
	    type: 'line',

	    data: {
	      	labels: labels,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,5, 8, 14],
		          	backgroundColor: [
		            	'rgba(0,0,0,0.1)',
		          	],
		          	borderColor: [
		            	'#474747',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: '#474747',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: '#474747',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options2,
	   
	});
	var ctxL5 = document.getElementById("lineChart5").getContext('2d');
	var myLineChart5 = new Chart(ctxL5, {
	    type: 'line',

	    data: {
	      	labels: labels,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,5, 8, 14],
		          	backgroundColor: [
		            	'rgba(0,0,0,0.1)',
		          	],
		          	borderColor: [
		            	'#474747',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: '#474747',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: '#474747',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options2,
	   
	});
	$('.choise-time').change(function(){
		$('.profileviewer-chart-canvas-1').html('');
		$('.profileviewer-chart-canvas-1').html("<canvas id='lineChart11' height='130' width='850'></canvas>");
		var labels2=["thang 1" , "thanh 2","thang 3","thang 4","thang 5","thang6","thang 7"];
		 var ctxL = document.getElementById("lineChart11").getContext('2d');
		var myLineChart= new Chart(ctxL, {
	    type: 'line',

	    data: {
	      	labels: labels2,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,5, 14],
		          	backgroundColor: [
		            	'rgba(0,255,0,0.1)',
		          	],
		          	borderColor: [
		            	'green',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: 'green',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: 'green',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options,
	   
	  });
		$('.profileviewer-chart-canvas-2').html('');
		$('.profileviewer-chart-canvas-2').html("<canvas id='lineChart2' height='130' width='850'></canvas>");
		var labels2=["thang 1" , "thanh 2","thang 3","thang 4","thang 5","thang6","thang 7"];
		 var ctxL = document.getElementById("lineChart2").getContext('2d');
		var myLineChart= new Chart(ctxL, {
	    type: 'line',

	    data: {
	      	labels: labels2,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,5, 14,0],
		          	backgroundColor: [
		            	'rgba(0,255,0,0.1)',
		          	],
		          	borderColor: [
		            	'green',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: 'green',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: 'green',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options,
	   
	  });
		$('.profileviewer-chart-canvas-3').html('');
		$('.profileviewer-chart-canvas-3').html("<canvas id='lineChart3' height='130' width='850'></canvas>");
		var labels2=["thang 1" , "thanh 2","thang 3","thang 4","thang 5","thang6","thang 7"];
		 var ctxL = document.getElementById("lineChart3").getContext('2d');
		var myLineChart= new Chart(ctxL, {
	    type: 'line',

	    data: {
	      	labels: labels2,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,],
		          	backgroundColor: [
		            	'rgba(0,255,0,0.1)',
		          	],
		          	borderColor: [
		            	'green',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: 'green',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: 'green',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options,
	   
	  });
		$('.profileviewer-chart-canvas-4').html('');
		$('.profileviewer-chart-canvas-4').html("<canvas id='lineChart4' height='130' width='850'></canvas>");
		var labels2=["thang 1" , "thanh 2","thang 3","thang 4","thang 5","thang6","thang 7"];
		 var ctxL = document.getElementById("lineChart4").getContext('2d');
		var myLineChart= new Chart(ctxL, {
	    type: 'line',

	    data: {
	      	labels: labels2,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,],
		          	backgroundColor: [
		            	'rgba(0,0,0,0.1)',
		          	],
		          	borderColor: [
		            	'#474747',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: '#474747',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: '#474747',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options2,
	   
	  });
		$('.profileviewer-chart-canvas-5').html('');
		$('.profileviewer-chart-canvas-5').html("<canvas id='lineChart5' height='130' width='850'></canvas>");
		var labels2=["thang 1" , "thanh 2","thang 3","thang 4","thang 5","thang6","thang 7"];
		 var ctxL = document.getElementById("lineChart5").getContext('2d');
		var myLineChart= new Chart(ctxL, {
	    type: 'line',

	    data: {
	      	labels: labels2,
		    datasets: [{
		          	label: "",
		          	data: [7, 4, 3, 5,],
		          	backgroundColor: [
		            	'rgba(0,0,0,0.1)',
		          	],
		          	borderColor: [
		            	'#474747',
		          	],
		          	borderWidth: 2,
		          	pointBorderWidth: 0,
				    pointRadius: 2,
				    pointBorderColor: '#474747',
				    pointHoverRadius: 2,
				    pointHoverBorderWidth: 2,
				    pointHoverBackgroundColor:'',
				    pointHoverBorderColor: '#474747',
				    pointBackgroundColor: 'transparent',

				   	lineTension:0,
				   	 type: 'line',

		        },]
	    	},
	   options:options2,
	   
	  });
	})