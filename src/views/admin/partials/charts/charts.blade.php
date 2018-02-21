@extends('admin.layout')

@section('content')

@include('admin.partials.header-content')

    <!-- Charts JS -->
    <script src="{{ asset('js/charts/highcharts.js') }}"></script>

    <div class="panel panel-default">
        <div class="panel-heading">. : : Table Example : : .</div>
        <div class="panel-body">

            <div id="display-posts" class="row">
                <div class="col-md-12 col-md-offset-0 col-xs-12 col-xs-offset-0">
                    <div id="container" style="margin-right: 5px; height: 400px; min-width: 300px"></div>
                    <script type="text/javascript">
                        
                        var elevationData = [
                            [8, 1120],
                            [16, 700],
                            [24, 920],
                            [32, 1260]
                        ];
                        // Now create the chart
                        Highcharts.chart('container', {
                            chart: {
                                type: 'area',
                                zoomType: 'x',
                                panning: true,
                                panKey: 'shift'
                            },
                            title: {
                                text: 'Sesion 400 Hrs 2/5 NLH'
                            },
                            subtitle: {
                                text: 'Casino Encore Las Vegas NV.'
                            },
                            annotations: [{
                                labelOptions: {
                                    backgroundColor: 'rgba(255,255,255,0.5)',
                                    verticalAlign: 'top',
                                    y: 15
                                },

                            }, {
                                labelOptions: {
                                    shape: 'connector',
                                    align: 'right',
                                    justify: false,
                                    crop: true,
                                    style: {
                                        fontSize: '0.8em',
                                        textOutline: '1px white'
                                    }
                                },                   
                            }],
                            xAxis: {
                                labels: {
                                    format: '<b>{value} Hrs</b>'
                                },
                                minRange: 5,
                                title: {
                                    text: 'Lapse Time Session'
                                }
                            },
                            yAxis: {
                                startOnTick: true,
                                endOnTick: false,
                                maxPadding: 0.35,
                                title: {
                                    text: null
                                },
                                labels: {
                                    format: '<b>$ {value}.00</b>'
                                }
                            },
                            tooltip: {
                                headerFormat: 'Lapse Time: {point.x:.1f} Hrs<br>Location: Casino Encore Las Vegas NV.<br>',
                                pointFormat: 'Profit/Loss <b>$ {point.y}.00</b>',
                                shared: true
                            },
                            legend: {
                                enabled: false
                            },
                             plotOptions: {
                                area: {
                                    fillColor: {
                                        linearGradient: {
                                            x1: 0,
                                            y1: 0,
                                            x2: 0,
                                            y2: 1
                                        },
                                        stops: [
                                            [0, Highcharts.getOptions().colors[0]],
                                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                                        ]
                                    },
                                    marker: {
                                        radius: 2
                                    },
                                    lineWidth: 1,
                                    states: {
                                        hover: {
                                            lineWidth: 1
                                        }
                                    },
                                    threshold: null
                                }
                            },
                            series: [{
                                data: elevationData,
                                lineColor: Highcharts.getOptions().colors[0],
                                color: Highcharts.getOptions().colors[1],
                                fillOpacity: 0.5,
                                name: 'Elevation',
                                marker: {
                                    enabled: false
                                },
                                threshold: null
                            }]
                        });
                    </script>          
                </div>
            </div> 
        
        </div>
    </div>

@endsection

