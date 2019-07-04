/**
 Template Name: Abstack - Bootstrap 4 Web App kit
 Author: CoderThemes
 Email: coderthemes@gmail.com
 File: Dashboard
 */


!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },

        //init
        ChartJs.prototype.init = function() {
            //creating lineChart
            var lineChart = {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                datasets: [{
                    label: "Conversion Rate",
                    fill: false,
                    backgroundColor: '#5d6dc3',
                    borderColor: '#5d6dc3',
                    data: [44,60,-33,58,-4,57,-89,60,-33,58]
                }, {
                    label: "Average Sale Value",
                    fill: false,
                    backgroundColor: '#3ec396',
                    borderColor: "#3ec396",
                    borderDash: [5, 5],
                    data: [-68,41,86,-49,2,65,-64,86,-49,2]
                }]
            };

            var lineOpts = {
                responsive: true,
                // title:{
                //     display:true,
                //     text:'Chart.js Line Chart'
                // },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        // scaleLabel: {
                        //     display: true,
                        //     labelString: 'Month'
                        // },
                        gridLines: {
                            color: "rgba(0,0,0,0.1)"
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: "rgba(255,255,255,0.05)",
                            fontColor: '#fff'
                        },
                        ticks: {
                            max: 100,
                            min: -100,
                            stepSize: 20
                        }
                    }],
                }
            };

            this.respChart($("#transactions-chart"),'Line',lineChart, lineOpts);

            //barchart
            var barChart = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Sales Analytics",
                        backgroundColor: "#3ec396",
                        borderColor: "#3ec396",
                        borderWidth: 1,
                        hoverBackgroundColor: "#3ec396",
                        hoverBorderColor: "#3ec396",
                        data: [65, 59, 80, 81, 56, 89, 40,20]
                    }
                ]
            };
            var barOpts = {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: "rgba(255,255,255,0.05)",
                            fontColor: '#fff'
                        },
                        ticks: {
                            max: 100,
                            min: 20,
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: "rgba(0,0,0,0.1)"
                        }
                    }]
                }
            };

            this.respChart($("#sales-history"),'Bar',barChart, barOpts);
        },
        $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
    function($) {
        "use strict";
        $.ChartJs.init()
    }(window.jQuery);


