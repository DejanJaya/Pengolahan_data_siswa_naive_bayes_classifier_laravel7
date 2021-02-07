@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Rekap Probabilitas & Class Variabel
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rekap Probabilitas & Class Variabel</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box">
                <div id="Probabilitas">

                </div>

            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box">
                <div id="ClassVariabelProbabilitas">

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
    Highcharts.chart('Probabilitas', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Rekap Probabilitas Kriteria Penilaian'
    },
    subtitle: {
        text: 'Tahun 2015/2016 s/d 2018/2019'
    },
    xAxis: {
        categories: {!!json_encode($tahun)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        max: 1,
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
        data: {!!json_encode($a['a_hasil_bagi'])!!} // a
    },{
        name: {!!json_encode($label[1])!!},
        data: {!!json_encode($b['b_hasil_bagi'])!!} // a
    },{
        name: {!!json_encode($label[2])!!},
        data: {!!json_encode($c['c_hasil_bagi'])!!} // a
    },{
        name: {!!json_encode($label[3])!!},
        data: {!!json_encode($d['d_hasil_bagi'])!!} // a
    },{ 
        name: {!!json_encode($label[4])!!},
        data: {!!json_encode($e['e_hasil_bagi'])!!} // a
    }]
});    
</script>

<script>
    Highcharts.chart('ClassVariabelProbabilitas', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Rekap Class Variabel & Probabilitas'
    },
    subtitle: {
        text: 'Tahun 2015/2016 s/d 2018/2019'
    },
    xAxis: {
        categories: {!!json_encode($tahun_a)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        max: 5,
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
        name: {!!json_encode($label_a[0])!!},
        data: {!!json_encode($class)!!}
    },{
        name: {!!json_encode($label_a[1])!!},
        data: {!!json_encode($prob)!!}
    }]
});    
</script>


@stop