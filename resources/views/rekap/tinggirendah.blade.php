@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Rekap Nilai Tertinggi dan Terendah Siswa
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rekap Nilai Tertinggi dan Terendah Siswa</a></li>
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
    text: 'Nilai Tertinggi dan Terendah Siswa'
},
subtitle: {
        text: 'Tahun 2015/2016 s/d 2018/2019'
    },
yAxis: {
    title: {
        text: 'Nilai'
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
    data: {!!json_encode($minmax['fisika_tinggi'])!!} 
},{
    name: {!!json_encode($label[1])!!},
    data: {!!json_encode($minmax['fisika_rendah'])!!} 
},{
    name: {!!json_encode($label[2])!!},
    data: {!!json_encode($minmax['pkn_tinggi'])!!} 
},{
    name: {!!json_encode($label[3])!!},
    data: {!!json_encode($minmax['pkn_rendah'])!!} 
},{
    name: {!!json_encode($label[4])!!},
    data: {!!json_encode($minmax['jepang_tinggi'])!!} 
},{
    name: {!!json_encode($label[5])!!},
    data: {!!json_encode($minmax['jepang_rendah'])!!} 
},{
    name: {!!json_encode($label[6])!!},
    data: {!!json_encode($minmax['inggris_tinggi'])!!} 
},{
    name: {!!json_encode($label[7])!!},
    data: {!!json_encode($minmax['inggris_rendah'])!!} 
},{
    name: {!!json_encode($label[8])!!},
    data: {!!json_encode($minmax['mtk_tinggi'])!!} 
},{
    name: {!!json_encode($label[9])!!},
    data: {!!json_encode($minmax['mtk_rendah'])!!} 
},{
    name: {!!json_encode($label[10])!!},
    data: {!!json_encode($minmax['bindo_tinggi'])!!} 
},{
    name: {!!json_encode($label[11])!!},
    data: {!!json_encode($minmax['bindo_rendah'])!!} 
},{
    name: {!!json_encode($label[11])!!},
    data: {!!json_encode($minmax['kejuruan_tinggi'])!!} 
},{
    name: {!!json_encode($label[12])!!},
    data: {!!json_encode($minmax['kejuruan_rendah'])!!} 
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