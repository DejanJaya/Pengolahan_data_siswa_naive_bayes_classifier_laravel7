@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Rekap Nilai Rata Rata Per Kelas
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rekap Nilai Rata Rata Per Kelas</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box">
                <div id="chartNilai">

                </div>

            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>

<!-- /.content -->

@stop


@section('footer')
<script src="{{url('/asset/js/bootstrap-editable.min.js')}}"></script>
<script src="{{url('/asset/js/highcharts.js')}}"></script>
<script>
    Highcharts.chart('chartNilai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Rekap Nilai Rata rata Per Kelas'
    },
    xAxis: {
        categories: {!!json_encode($tahun)!!},
        crosshair: true
    },
    subtitle: {
        text: 'Tahun 2015/2016 s/d 2018/2019'
    },
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Nilai'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: {!!json_encode($label[0])!!},
        data: {!!json_encode($rata2['fisika'])!!}
    }, {
        name: {!!json_encode($label[1])!!},
        data: {!!json_encode($rata2['pkn'])!!} 
    }, {
        name: {!!json_encode($label[2])!!},
        data: {!!json_encode($rata2['jepang'])!!} 
    }, {
        name: {!!json_encode($label[3])!!},
        data: {!!json_encode($rata2['inggris'])!!}
    }, {
        name: {!!json_encode($label[4])!!},
        data: {!!json_encode($rata2['mtk'])!!} 
    }, {
        name: {!!json_encode($label[5])!!},
        data: {!!json_encode($rata2['bindo'])!!} 
    }, {
        name: {!!json_encode($label[6])!!},
        data: {!!json_encode($rata2['kejuruan'])!!} 
    }]
});    
</script>


@stop