@extends('layouts.base')

@section('title', 'Page Title')

@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <h4>
                        <script>
                            var today = new Date();
                            var dd = today.getDate();

                            var mm = today.getMonth() + 1;
                            var yyyy = today.getFullYear();
                            if (dd < 10) {
                                dd = '0' + dd;
                            }

                            if (mm < 10) {
                                mm = '0' + mm;
                            }
                            today = mm + '-' + dd + '-' + yyyy;

                            document.write(today)
                        </script>
                    </h4>
                </div>
                <h4 class="page-title">Pemantauan Operasi Kamera</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3">Jumlah Penilaian dan Semakan</h5>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart">
                        <div class="amchart" id="chartdivadminoperasikamera1"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3">Semakan dan Penilaian Sudah Disemak</h5>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Saman ID</th>
                                <th>Semakan ID</th>
                                <th>Tarikh</th>
                                <th>Masa</th>
                                <th>Nama</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>ABCD1234</td>
                                <td>EFGH5678</td>
                                <td>01/03/2020</td>
                                <td>10.00 AM</td>
                                <td>Ali bin Ahmad</td>
                            </tr>
                            <tr>
                                <td>JAFR7531</td>
                                <td>KEGJ5832</td>
                                <td>18/04/2020</td>
                                <td>12.00 PM</td>
                                <td>Salim bin Yaakub</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

</div>

<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_dataviz);
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdivadminoperasikamera1", am4charts.XYChart);

        var data = [];
        var value = 50;
        for (var i = 0; i < 300; i++) {
            var date = new Date();
            date.setHours(0, 0, 0, 0);
            date.setDate(i);
            value -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
            data.push({
                date: date,
                value: value
            });
        }

        chart.data = data;

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.minGridDistance = 60;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueY = "value";
        series.dataFields.dateX = "date";
        series.tooltipText = "{value}"

        series.tooltip.pointerOrientation = "vertical";

        chart.cursor = new am4charts.XYCursor();
        chart.cursor.snapToSeries = series;
        chart.cursor.xAxis = dateAxis;

        //chart.scrollbarY = new am4core.Scrollbar();
        chart.scrollbarX = new am4core.Scrollbar();

    }); // end am4core.ready()
</script>

@stop