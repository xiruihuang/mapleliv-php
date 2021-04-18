/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3 & 4
Version: 4.1.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.1/admin/
*/

var getMonthName = function(number) {
    var month = [];
    month[0] = "JAN";
    month[1] = "FEB";
    month[2] = "MAR";
    month[3] = "APR";
    month[4] = "MAY";
    month[5] = "JUN";
    month[6] = "JUL";
    month[7] = "AUG";
    month[8] = "SEP";
    month[9] = "OCT";
    month[10] = "NOV";
    month[11] = "DEC";
    
    return month[number];
};

var getDate = function(date) {
    var currentDate = new Date(date);
    var dd = currentDate.getDate();
    var mm = currentDate.getMonth() + 1;
    var yyyy = currentDate.getFullYear();
    
    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    currentDate = yyyy+'-'+mm+'-'+dd;
    
    return currentDate;
};

var handleVisitorsAreaChart = function(d1,d2) {
	var handleGetDate = function(minusDate) {
		var d = new Date();
			d = d.setDate(d.getDate() - minusDate);
		return d;
	};

	var visitorAreaChartData = [{
		'key' : 'My Profits',
		'color' : COLOR_AQUA,
		'values' : d1
	}, {
		'key' : 'Total Profits',
		'color' : COLOR_BLUE,
		'values' : d2
	}];

	nv.addGraph(function() {
		var stackedAreaChart = nv.models.stackedAreaChart()
			.useInteractiveGuideline(false)
			.x(function(d) { return d[0] })
			.y(function(d) { return d[1] })
			.pointSize(2.0)
			.margin({'left':60,'right': 25,'top': 20,'bottom':20})
			.controlLabels({stacked: 'Stacked'})
			.showControls(true)
			.duration(300);

		stackedAreaChart.xAxis.tickFormat(function(d) { 
			var monthsName = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
			d = new Date(d);
			d = monthsName[d.getMonth()] + ' ' + d.getDate();
			return d ;
		});
		stackedAreaChart.yAxis.tickFormat(d3.format(',.0f'));

		d3.select('#visitors-line-chart')
			.append('svg')
			.datum(visitorAreaChartData)
			.transition().duration(1000)
			.call(stackedAreaChart)
			.each('start', function() {
				setTimeout(function() {
					d3.selectAll('#visitors-line-chart *').each(function() {
						if(this.__transition__)
							this.__transition__.duration = 1;
					})
				}, 0)
			});

		nv.utils.windowResize(stackedAreaChart.update);
		return stackedAreaChart;
	});
};

var handleVisitorsDonutChart = function(Yours,Others) {
	var visitorDonutChartData = [
		{ 'label': 'Yours', 'value' : Yours, 'color': COLOR_BLUE }, 
		{ 'label': 'Pool', 'value' : Others, 'color': COLOR_GREEN }
	];
	var arcRadius = [
		{ inner: 0.65, outer: 0.93 },
		{ inner: 0.6, outer: 1 }
	];

	nv.addGraph(function() {
	  var donutChart = nv.models.pieChart()
		  .x(function(d) { return d.label })
		  .y(function(d) { return d.value })
		  .margin({'left': 10,'right':  10,'top': 10,'bottom': 10})
		  .showLegend(false)
		  .donut(true) 
		  .growOnHover(false)
		  .arcsRadius(arcRadius)
		  .donutRatio(0.5);
		
		donutChart.labelFormat(d3.format(',.0f'));
		
		d3.select('#visitors-donut-chart').append('svg')
			.datum(visitorDonutChartData)
			.transition().duration(3000)
			.call(donutChart);
		
		return donutChart;
	});
};

var handleVisitorsVectorMap = function() {
    if ($('#visitors-map').length !== 0) {
        $('#visitors-map').vectorMap({
            map: 'world_merc_en',
            scaleColors: [COLOR_BLACK_LIGHTER, COLOR_BLACK],
            container: $('#visitors-map'),
            normalizeFunction: 'linear',
            hoverOpacity: 0.5,
            hoverColor: false,
            zoomOnScroll: false,
            markerStyle: {
                initial: {
                    fill: COLOR_BLACK,
                    stroke: 'transparent',
                    r: 3
                }
            },
            regions: [{
                attribute: 'fill'
            }],
            regionStyle: {
                initial: {
                    fill: COLOR_BLACK_LIGHTER,
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0.4,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 0.8
                },
                selected: {
                    fill: 'yellow'
                }
            },
            series: {
                regions: [{
					values: {
						IN: COLOR_BLUE,
						US: COLOR_GREEN,
						MN: COLOR_GREY_DARKER
					}
                }]
            },
            focusOn: {
                x: 0.5,
                y: 0.5,
                scale: 1
            },
            backgroundColor: 'transparent'
        });
    }
};

var handleScheduleCalendar = function() {
    var monthNames = ["January", "February", "March", "April", "May", "June",  "July", "August", "September", "October", "November", "December"];
    var dayNames = ["S", "M", "T", "W", "T", "F", "S"];

    var now = new Date(),
        month = now.getMonth() + 1,
        year = now.getFullYear();

    var events = [
        [
            '2/' + month + '/' + year,
            'Popover Title',
            '#',
            COLOR_GREEN,
            'Some contents here'
        ],
        [
            '5/' + month + '/' + year,
            'Tooltip with link',
            'http://www.seantheme.com/',
            COLOR_BLACK
        ],
        [
            '18/' + month + '/' + year,
            'Popover with HTML Content',
            '#',
            COLOR_BLACK,
            'Some contents here <div class="text-right"><a href="http://www.google.com">view more >>></a></div>'
        ],
        [
            '28/' + month + '/' + year,
            'Color Admin V1.3 Launched',
            'http://www.seantheme.com/color-admin-v1.3',
            COLOR_BLACK,
        ]
    ];
    var calendarTarget = $('#schedule-calendar');
    $(calendarTarget).calendar({
        months: monthNames,
        days: dayNames,
        events: events,
        popover_options:{
            placement: 'top',
            html: true
        }
    });
    $(calendarTarget).find('td.event').each(function() {
        var backgroundColor = $(this).css('background-color');
        $(this).removeAttr('style');
        $(this).find('a').css('background-color', backgroundColor);
    });
    $(calendarTarget).find('.icon-arrow-left, .icon-arrow-right').parent().on('click', function() {
        $(calendarTarget).find('td.event').each(function() {
            var backgroundColor = $(this).css('background-color');
            $(this).removeAttr('style');
            $(this).find('a').css('background-color', backgroundColor);
        });
    });
};

var handleDashboardGritterNotification = function() {
	setTimeout(function() {
		$.gritter.add({
			title: 'Welcome back, Admin!',
			text: 'Version V1.12 is now posted!!  Profits System and Basic Analysis System added',
			image: '../assets/img/user/user-12.jpg',
			sticky: true,
			time: '',
			class_name: 'my-sticky-class'
		});
	}, 1000);
};

var DashboardV2 = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleVisitorsAreaChart(d1,d2);
            handleVisitorsDonutChart(Yours,Others);
            handleVisitorsVectorMap();
            handleScheduleCalendar();
            handleDashboardGritterNotification();
        }
    };
}();