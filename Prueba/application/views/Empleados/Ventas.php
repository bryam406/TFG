




 <div class="container" style="margin-top: 100px;">
    <div class="row">
        <h1 style="text-align: center;">GRAFICOS VENTAS</h1>   
    </div>
    <hr>
    <div class="row">
        <!-- izq -->
        <div class="col-lg-6">
            <div id="graficaIzq"></div>
        </div>
        <!-- fin izq -->

        <!-- der -->
        <div class="col-lg-6">
            <div id="graficaDer"></div>
        </div>
        <!-- fin der -->
    </div>
</div>


<div class="container" style="margin-top: 100px;">
    <div id="barras"/>
    <p class="highcharts-description">
        <hr>
</div>

<br>
<br>
<br>

    <div class="container">
        <div class="row">
            <h1 style="text-align: center;">GRAFICOS VENTAS POR MODELO</h1>



        <hr>

        <div class="row">
            <div class="col-lg-4">
                <div id="graficaFs"></div>
            </div>
            <div class="col-lg-4">
                <div id="graficaP"></div>
            </div> 
            <div class="col-lg-4">
                <div id="graficaL"></div>
            </div> 
        </div>
    </div>




    <script type="text/javascript">
        Highcharts.chart('graficaDer', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: 'Porcentaje de ventas por empleado',
                align: 'center'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            }, tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Share',
                data: [


                    <?php
                    $tamano = sizeof($ventas);
                    $c=0;
                    foreach($ventas as $venta)
                    {
                        if($c == ($tamano-1))
                        {
                            echo "{ name: '".$venta['NombreUsuario']."', y: ".$venta['Total']."}";
                        }else{
                            echo "{ name: '".$venta['NombreUsuario']."', y: ".$venta['Total']."},";
                        }    
                        $c++;
                    }
                    ?>
                    ]
            }]
        });


        Highcharts.chart('graficaIzq', {

            title: {
                text: 'Ventas realizadas'
            },

            xAxis: {
                tickInterval: 1,
                type: 'logarithmic',
                accessibility: {
                    rangeDescription: 'Range: 1 to 100.000.000'
                }
            },

            yAxis: {
                type: 'logarithmic',
                minorTickInterval: 0.1,
                accessibility: {
                    rangeDescription: 'Range: 1 to  100.000.000'
                }
            },

            tooltip: {
                headerFormat: '<b>{series.name}</b><br />',
                pointFormat: 'x = {point.x}, y = {point.y}'
            },

            series: [{
                data: [ <?php
                    $tamano = sizeof($ganancias);
                    $c=0;
                    foreach($ganancias as $gan)
                    {
                        if($c == ($tamano-1))
                        {
                            echo "{ name: '".$gan['empleadoID']."', y: ".$gan['Precio']."}";
                        }else{
                            echo "{ name: '".$gan['empleadoID']."', y: ".$gan['Precio']."},";
                        }    
                        $c++;
                    }
                    ?>],
                pointStart: 1
            }]
        });








        Highcharts.chart('barras', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'center',
                text: 'Marcas de coches mas vendidas'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total percent market share'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [
            {
                name: 'Browsers',
                colorByPoint: true,
                data: [



                   <?php
                   $tamano = sizeof($coches);
                   $c=0;
                   foreach($coches as $venta)
                   {
                    if($c == ($tamano-1))
                    {
                        echo "{ name: '".$venta['marca']."', y: ".$venta['vendidos']."}";
                    }else{
                        echo "{ name: '".$venta['marca']."', y: ".$venta['vendidos']."},";
                    }    
                    $c++;
                }
                ?>

                ]
            }
            ],

        });







        Highcharts.chart('graficaFs', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: 'Modelos Lamborghini mas vendidos',
                align: 'center'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            }, tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                                 }
            },
            series: [{
                type: 'pie',
                name: 'Share',
                data: [


                    <?php
                    $tamano = sizeof($modelos);
                    $c=0;
                    foreach($modelos as $venta)
                    {
                        if($c == ($tamano-1))
                        {
                            echo "{ name: '".$venta['modelo']."', y: ".$venta['vendidos']."}";
                        }else{
                            echo "{ name: '".$venta['modelo']."', y: ".$venta['vendidos']."},";
                        }    
                        $c++;
                    }
                    ?>
                    ]
            }]
        });










        Highcharts.chart('graficaP', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: 'Modelos Bugatti mas vendidos',
                align: 'center'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            }, tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Share',
                data: [


                    <?php
                    $tamano = sizeof($modelosP);
                    $c=0;
                    foreach($modelosP as $venta)
                    {
                        if($c == ($tamano-1))
                        {
                            echo "{ name: '".$venta['modelo']."', y: ".$venta['vendidos']."}";
                        }else{
                            echo "{ name: '".$venta['modelo']."', y: ".$venta['vendidos']."},";
                        }    
                        $c++;
                    }
                    ?>
                    ]
            }]
        });







        Highcharts.chart('graficaL', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: 'Modelos Nissan mas vendidos',
                align: 'center'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            }, tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Share',
                data: [


                    <?php
                    $tamano = sizeof($modelosL);
                    $c=0;
                    foreach($modelosL as $venta)
                    {
                        if($c == ($tamano-1))
                        {
                            echo "{ name: '".$venta['modelo']."', y: ".$venta['vendidos']."}";
                        }else{
                            echo "{ name: '".$venta['modelo']."', y: ".$venta['vendidos']."},";
                        }    
                        $c++;
                    }
                    ?>
                    ]
            }]
        });











    </script>









