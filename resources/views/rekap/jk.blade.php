@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Rekap Jenis Kelamin Per Kelas
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rekap Jenis Kelamin Per Kelas</a></li>
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

title: {
    text: 'Rekap Jenis Kelamin Per Kelas'
},
subtitle: {
        text: 'Tahun 2015/2016 s/d 2018/2019'
    },
yAxis: {
    title: {
        text: 'Jenis Kelamin'
    }
},

xAxis: {
    categories: {!!json_encode($tahun)!!},
    crosshair: true
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: [{
    name: {!!json_encode($label[0])!!},
    data: {!!json_encode($jk['lakilaki'])!!} 
},{
    name: {!!json_encode($label[1])!!},
    data: {!!json_encode($jk['perempuan'])!!} 
}

],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>


@stop