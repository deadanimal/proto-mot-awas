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
                <h4 class="page-title">Semakan</h4>
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
                        <div class="amchart" id="chartdivadminsemakan1"></div>
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
                    <div class="chart">
                        <div class="amchart" id="chartdivadminsemakan2"></div>
                    </div>
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

        // Create chart instance
        var chart = am4core.create("chartdivadminsemakan1", am4charts.XYChart);
        chart.scrollbarX = new am4core.Scrollbar();

        // Add data
        chart.data = [{
            "country": "Jan",
            "visits": 3025
        }, {
            "country": "Feb",
            "visits": 1882
        }, {
            "country": "Mac",
            "visits": 1809
        }, {
            "country": "Apr",
            "visits": 1322
        }, {
            "country": "Mei",
            "visits": 1122
        }, {
            "country": "Jun",
            "visits": 1114
        }, {
            "country": "Jul",
            "visits": 984
        }, {
            "country": "Ogos",
            "visits": 711
        }, {
            "country": "Sep",
            "visits": 665
        }, {
            "country": "Okt",
            "visits": 580
        }, {
            "country": "Nov",
            "visits": 443
        }, {
            "country": "Dis",
            "visits": 441
        }];

        // Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "country";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 30;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.verticalCenter = "middle";
        categoryAxis.renderer.labels.template.rotation = 270;
        categoryAxis.tooltip.disabled = true;
        categoryAxis.renderer.minHeight = 110;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.minWidth = 50;

        // Create series
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.sequencedInterpolation = true;
        series.dataFields.valueY = "visits";
        series.dataFields.categoryX = "country";
        series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
        series.columns.template.strokeWidth = 0;

        series.tooltip.pointerOrientation = "vertical";

        series.columns.template.column.cornerRadiusTopLeft = 10;
        series.columns.template.column.cornerRadiusTopRight = 10;
        series.columns.template.column.fillOpacity = 0.8;

        // on hover, make corner radiuses bigger
        var hoverState = series.columns.template.column.states.create("hover");
        hoverState.properties.cornerRadiusTopLeft = 0;
        hoverState.properties.cornerRadiusTopRight = 0;
        hoverState.properties.fillOpacity = 1;

        series.columns.template.adapter.add("fill", function(fill, target) {
            return chart.colors.getIndex(target.dataItem.index);
        });

        // Cursor
        chart.cursor = new am4charts.XYCursor();

    }); // end am4core.ready()

    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_dataviz);
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdivadminsemakan2", am4charts.PieChart);

        // Add data
        chart.data = [{
            "country": "Melebihi had laju",
            "litres": 501.9
        }, {
            "country": "Tidak memakai tali pinggang keledar",
            "litres": 301.9
        }, {
            "country": "Lesen tamat tempoh",
            "litres": 201.1
        }, {
            "country": "Cukai jalan tamat tempoh",
            "litres": 165.8
        }, ];

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "litres";
        pieSeries.dataFields.category = "country";
        pieSeries.slices.template.stroke = am4core.color("#fff");
        pieSeries.slices.template.strokeOpacity = 1;

        // This creates initial animation
        pieSeries.hiddenState.properties.opacity = 1;
        pieSeries.hiddenState.properties.endAngle = -90;
        pieSeries.hiddenState.properties.startAngle = -90;

        chart.hiddenState.properties.radius = am4core.percent(0);


    }); // end am4core.ready()
</script>

@stop