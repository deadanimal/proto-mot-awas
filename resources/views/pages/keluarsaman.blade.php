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
                            <h5 class="h3">Jumlah Saman Dikenakan</h5>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart">
                        <div class="amchart" id="chartdivadminkeluarsaman1"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3">Jumlah Lokasi Dikenakan Saman</h5>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart">
                        <div class="amchart" id="chartdivadminkeluarsaman2"></div>
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
        var chart = am4core.create("chartdivadminkeluarsaman1", am4charts.XYChart);
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
        var chart = am4core.create("chartdivadminkeluarsaman2", am4charts.XYChart3D);

        // Add data
        chart.data = [{
            "country": "Kuala Lumpur",
            "visits": 4025
        }, {
            "country": "Selangor",
            "visits": 1882
        }, {
            "country": "Johor",
            "visits": 1809
        }, {
            "country": "Perak",
            "visits": 1322
        }, {
            "country": "Pahang",
            "visits": 1122
        }, {
            "country": "Melaka",
            "visits": 1114
        }, {
            "country": "Negeri Sembilan",
            "visits": 984
        }, {
            "country": "Terengganu",
            "visits": 711
        }, {
            "country": "Kelantan",
            "visits": 665
        }, {
            "country": "Sabah",
            "visits": 580
        }, {
            "country": "Sarawak",
            "visits": 443
        }, {
            "country": "Labuan",
            "visits": 441
        }, {
            "country": "Kedah",
            "visits": 395
        }, {
            "country": "Pulau Pinang",
            "visits": 386
        }, {
            "country": "Perlis",
            "visits": 384
        }, {
            "country": "Putrajaya",
            "visits": 338
        }, ];

        // Create axes
        let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "country";
        categoryAxis.renderer.labels.template.rotation = 270;
        categoryAxis.renderer.labels.template.hideOversized = false;
        categoryAxis.renderer.minGridDistance = 20;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.verticalCenter = "middle";
        categoryAxis.tooltip.label.rotation = 270;
        categoryAxis.tooltip.label.horizontalCenter = "right";
        categoryAxis.tooltip.label.verticalCenter = "middle";

        let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.title.text = "Countries";
        valueAxis.title.fontWeight = "bold";

        // Create series
        var series = chart.series.push(new am4charts.ColumnSeries3D());
        series.dataFields.valueY = "visits";
        series.dataFields.categoryX = "country";
        series.name = "Visits";
        series.tooltipText = "{categoryX}: [bold]{valueY}[/]";
        series.columns.template.fillOpacity = .8;

        var columnTemplate = series.columns.template;
        columnTemplate.strokeWidth = 2;
        columnTemplate.strokeOpacity = 1;
        columnTemplate.stroke = am4core.color("#FFFFFF");

        columnTemplate.adapter.add("fill", function(fill, target) {
            return chart.colors.getIndex(target.dataItem.index);
        })

        columnTemplate.adapter.add("stroke", function(stroke, target) {
            return chart.colors.getIndex(target.dataItem.index);
        })

        chart.cursor = new am4charts.XYCursor();
        chart.cursor.lineX.strokeOpacity = 0;
        chart.cursor.lineY.strokeOpacity = 0;

    }); // end am4core.ready()
</script>

@stop