@extends('layout')

    @section('title')
        Tableau de bord
    @endsection

    @section('style')
      <link rel="stylesheet" media="screen, print" href="/assets/css/page-invoice.css">
    @endsection

    @section('breadcrumbParent')
        Scolarity Expert 1.0
    @endsection

    @section('breadcrumbChild')
        Dashboard
    @endsection

    @section('badge')
        <sup class='badge badge-warning fw-800' style="letter-spacing:2px;font-size:12px">Année 2022-2023</sup>
    @endsection

    @section('headerDash')
           
            <div class="d-flex mr-4">
                <div class="js-easy-pie-chart color-warning-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="34" data-piesize="105" data-linewidth="10" data-scalelength="5">
                                    <div class="js-easy-pie-chart color-warning-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="45" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">45%</div>
                                    </div>
               </div>
               <label class="mb-0 mt-2 mt-md-0" style="font-weight:bold; letter-spacing:2px ; font-size:18px">Charges</label>
               
            </div>
            <div class="d-flex mr-4">
               <div class="js-easy-pie-chart color-success-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="34" data-piesize="105" data-linewidth="10" data-scalelength="5">
                                    <div class="js-easy-pie-chart color-success-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="34" data-piesize="70" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                        <div class="position-absolute pos-top pos-left pos-right pos-bottom d-flex align-items-center justify-content-center fw-500 fs-xl text-dark">34%</div>
                                    </div>
               </div>
               <label class="mb-0 mt-2 mt-md-0" style="font-weight:bold; letter-spacing:2px ; font-size:18px">Marge</label>
             
            </div>
    @endsection

    @section('contents')
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        <strong style="font-size:30px" class="fw-500">234</strong>
                            <small class="m-0 l-h-n">Effectif des Elèves</small>
                        </h3>
                    </div>
                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        <strong style="font-size:30px" class="fw-500">2300</strong><sup>Ar</sup>
                            <small class="m-0 l-h-n">Ressource</small>
                        </h3>
                    </div>
                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        <strong style="font-size:30px" class="fw-500">3455</strong><sup>Ar</sup>
                            <small class="m-0 l-h-n">Charges (Dépenses)</small>
                        </h3>
                    </div>
                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0">
                            <strong style="font-size:30px" class="fw-500">344</strong><sup>Ar</sup>
                            <small class="m-0 l-h-n">Marge Obtenue</small>
                        </h3>
                    </div>
                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                </div>
            </div>
           
        </div>



        <div class="row">
            <div class="col-lg-6">
                <div id="panel-2" class="panel panel-locked" data-panel-sortable data-panel-collapsed data-panel-close>
                    <div class="panel-hdr">
                        <h2>
                            Détail <span class="fw-300"><i>Ressources</i></span>
                        </h2>
                        
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content position-relative">
                           <div class="pb-2 pt-3">
                                <div class="row">
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-warning-200 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,5,8,2</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Droits</label>
                                            <h4 class="font-weight-bold mb-0">23223%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-info-500 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">5,3,1,7,9</span>
                                        </div>

                                      
                                        <div>
                                            <label class="fs-sm mb-0">Ecolage</label>
                                            <h4 class="font-weight-bold mb-0">3353%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-success-300 rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">3,4,3,5,5</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">T M + Friandise</label>
                                            <h4 class="font-weight-bold mb-0">32324%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-3 d-sm-flex align-items-center">
                                        <div class="p-2 mr-3 bg-secondary rounded">
                                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 27, &quot;height&quot;: 27 }">6,4,7,5,6</span>
                                        </div>
                                        <div>
                                            <label class="fs-sm mb-0">Participation</label>
                                            <h4 class="font-weight-bold mb-0">43%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="row  mb-g">
                                    <div class="col-md-12 d-flex align-items-center">
                                        <div id="flotPie" class="w-100" style="height:250px"></div>
                                    </div>
                                    
                                </div>
                                <div id="flot-area" style="width:100%; height:300px;display:none"></div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-6">

                <div id="panel-3" class="panel panel-locked" data-panel-sortable data-panel-collapsed data-panel-close>
                    <div class="panel-hdr">
                        <h2>
                             <span class="fw-300"><i>Pourcentage de Paiement</i></span>
                        </h2>
                       
                    </div>

             
                    <div class="panel-container show">
                        <div class="panel-content position-relative">
                            <div class="pb-5 pt-3">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 mr-lg-auto">
                                        
                                        <div class="d-flex mt-2 mb-1 text-warning" style="letter-spacing:2px;font-weight:bold">
                                            Friandise (43%)
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-warning-200" role="progressbar" style="width: 43%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex mt-2 mb-1 text-info" style="letter-spacing:2px;font-weight:bold">
                                            Ecolage (12%)
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-info-500" role="progressbar" style="width: 12%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6 col-lg-6 mr-lg-auto">
                                        <div class="d-flex mt-2 mb-1 text-success" style="letter-spacing:2px;font-weight:bold">
                                            T M (23%)
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-success-200" role="progressbar" style="width: 23%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    
                                    
                                        <div class="d-flex mt-2 mb-1 text-secondary" style="letter-spacing:2px;font-weight:bold">
                                            Participation (12%)
                                        </div>
                                        <div class="progress progress-xs mb-3">
                                            <div class="progress-bar bg-secondary-500" role="progressbar" style="width: 12%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="flotVisit" style="width:100%; height:208px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                       

    @endsection

    @section('script')
        <script src="/assets/js/statistics/peity/peity.bundle.js"></script>
        <script src="/assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script>
            /* defined datas */
            var dataTargetProfit = [
                [1354586000000, 153],
                [1364587000000, 658],
                [1374588000000, 198],
                [1384589000000, 663],
                [1394590000000, 801],
                [1404591000000, 1080],
                [1414592000000, 353],
                [1424593000000, 749],
                [1434594000000, 523],
                [1444595000000, 258],
                [1454596000000, 688],
                [1464597000000, 364]
            ]
            var dataProfit = [
                [1354586000000, 53],
                [1364587000000, 65],
                [1374588000000, 98],
                [1384589000000, 83],
                [1394590000000, 980],
                [1404591000000, 808],
                [1414592000000, 720],
                [1424593000000, 674],
                [1434594000000, 23],
                [1444595000000, 79],
                [1454596000000, 88],
                [1464597000000, 36]
            ]
            var dataSignups = [
                [1354586000000, 647],
                [1364587000000, 435],
                [1374588000000, 784],
                [1384589000000, 346],
                [1394590000000, 487],
                [1404591000000, 463],
                [1414592000000, 479],
                [1424593000000, 236],
                [1434594000000, 843],
                [1444595000000, 657],
                [1454596000000, 241],
                [1464597000000, 341]
            ]
            var dataSet1 = [
                [0, 10],
                [100, 8],
                [200, 7],
                [300, 5],
                [400, 4],
                [500, 6],
                [600, 3],
                [700, 2]
            ]

            $(document).ready(function()
            {


                var dataSetPie = [
                {
                    label:"Droit",
                    data: 12334,
                    color: myapp_get_color.warning_200
                },
                {
                    label: "Ecolage",
                    data: 12000,
                    color: myapp_get_color.info_500
                },
                {
                    label: "T M Friandise",
                    data: 12,
                    color: myapp_get_color.success_200
                },
                {
                    label: "Participation",
                    data: 23444,
                    color: myapp_get_color.secondary
                }];


                $.plot($("#flotPie"), dataSetPie,
                {
                    series:
                    {
                        pie:
                        {
                            innerRadius: 0.5,
                            show: true,
                            radius: 1,
                            label:
                            {
                                show: true,
                                radius: 2 / 3,
                                threshold: 0.1
                            }
                        }
                    },
                    legend:
                    {
                        show: false
                    }
                });
                /* init datatables */
               
   

                /* flot toggle example */
                var flot_toggle = function()
                {

                    var data = [
                    {
                        label: "Target Profit",
                        data: dataTargetProfit,
                        color: myapp_get_color.info_400,
                        bars:
                        {
                            show: true,
                            align: "center",
                            barWidth: 30 * 30 * 60 * 1000 * 80,
                            lineWidth: 0,
                            /*fillColor: {
                            	colors: [myapp_get_color.primary_500, myapp_get_color.primary_900]
                            },*/
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0.9
                                },
                                {
                                    opacity: 0.1
                                }]
                            }
                        },
                        highlightColor: 'rgba(255,255,255,0.3)',
                        shadowSize: 0
                    },
                    {
                        label: "Actual Profit",
                        data: dataProfit,
                        color: myapp_get_color.warning_500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    },
                    {
                        label: "User Signups",
                        data: dataSignups,
                        color: myapp_get_color.success_500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    }]

                    var options = {
                        grid:
                        {
                            hoverable: true,
                            clickable: true,
                            tickColor: '#f2f2f2',
                            borderWidth: 1,
                            borderColor: '#f2f2f2'
                        },
                        tooltip: true,
                        tooltipOpts:
                        {
                            cssClass: 'tooltip-inner',
                            defaultTheme: false
                        },
                        xaxis:
                        {
                            mode: "number"
                        },
                        yaxes:
                        {
                            tickFormatter: function(val, axis)
                            {
                                return "$" + val;
                            },
                            max: 1200
                        }

                    };

                    var plot2 = null;

                    function plotNow()
                    {
                        var d = [];
                        $("#js-checkbox-toggles").find(':checkbox').each(function()
                        {
                            if ($(this).is(':checked'))
                            {
                                d.push(data[$(this).attr("name").substr(4, 1)]);
                            }
                        });
                        if (d.length > 0)
                        {
                            if (plot2)
                            {
                                plot2.setData(d);
                                plot2.draw();
                            }
                            else
                            {
                                plot2 = $.plot($("#flot-toggles"), d, options);
                            }
                        }

                    };

                    $("#js-checkbox-toggles").find(':checkbox').on('change', function()
                    {
                        plotNow();
                    });
                    plotNow()
                }
                flot_toggle();
                /* flot toggle example -- end*/

                /* flot area */
                var flotArea = $.plot($('#flot-area'), [
                {
                    data: dataSet1,
                    label: 'New Customer',
                    color: myapp_get_color.success_200
                }
                ],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 2,
                            fill: true,
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0
                                },
                                {
                                    opacity: 0.5
                                }]
                            }
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        tickColor: '#ddd',
                        aboveData: true,
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: 'transparent'
                    },
                    yaxis:
                    {
                        tickLength: 1,
                        min: 0,
                        max: 100,
                        color: '#eee',
                        font:
                        {
                            size: 0,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        tickLength: 1,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }

                });
                /* flot area -- end */

                var flotVisit = $.plot('#flotVisit', [
                {
                    data: [
                        [3, 32455],
                        [4, 34333],
                        [5, 3432],
                        [6, 12334]
                    
                    ],
                    color: myapp_get_color.success_200
                }],
                {
                    series:
                    {
                        shadowSize: 0,
                        lines:
                        {
                            show: true,
                            lineWidth: 2,
                            fill: true,
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0
                                },
                                {
                                    opacity: 0.12
                                }]
                            }
                        }
                    },
                    grid:
                    {
                        borderWidth: 0
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 100,
                        tickColor: '#ddd',
                        ticks: [
                            [0, ''],
                            [20, '20'],
                            [40, '40'],
                            [60, '60'],
                            [80,'80'],
                            [100,'100']
                        ],
                        font:
                        {
                            color: '#444',
                            size: 10
                        }
                    },
                    xaxis:
                    {

                        tickColor: '#eee',
                        ticks: [
                            [2, ''],
                            [3, 'Friandise'],
                            [4, 'Ecolage'],
                            [5, 'T M'],
                            [6, 'Participation']
                            
                           
                        ],
                        font:
                        {
                            color: '#999',
                            size: 9
                        }
                    }
                });


            });

        </script>
    @endsection