@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Rekap Kriteria Penilaian
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rekap Kriteria Penilaian</a></li>
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
        text: 'Rekap Kriteria Penilaian Siswa'
    },
    subtitle: {
        text: 'Tahun 2015/2016 s/d 2018/2019'
    },
    xAxis: {
        categories: {!!json_encode($mata_pelajaran)!!},
        crosshair: true
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
            '<td style="padding:0"><b>{point.y} siswa</b></td></tr>',
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
        name: {!!json_encode($nilai_1516[0])!!},
        data: {!!json_encode($nilai_a_1516)!!} // a
    }, {
        name: {!!json_encode($nilai_1516[1])!!},
        data: {!!json_encode($nilai_b_1516)!!} // b
    }, {
        name: {!!json_encode($nilai_1516[2])!!},
        data: {!!json_encode($nilai_c_1516)!!} // c
    }, {
        name: {!!json_encode($nilai_1516[3])!!},
        data: {!!json_encode($nilai_d_1516)!!} // d
    }, {
        name: {!!json_encode($nilai_1516[4])!!},
        data: {!!json_encode($nilai_e_1516)!!} // e
    },{
        name: {!!json_encode($nilai_1617[0])!!},
        data: {!!json_encode($nilai_a_1617)!!} // a
    }, {
        name: {!!json_encode($nilai_1617[1])!!},
        data: {!!json_encode($nilai_b_1617)!!} // b
    }, {
        name: {!!json_encode($nilai_1617[2])!!},
        data: {!!json_encode($nilai_c_1617)!!} // c
    }, {
        name: {!!json_encode($nilai_1617[3])!!},
        data: {!!json_encode($nilai_d_1617)!!} // d
    }, {
        name: {!!json_encode($nilai_1617[4])!!},
        data: {!!json_encode($nilai_e_1617)!!} // e
    },{
        name: {!!json_encode($nilai_1718[0])!!},
        data: {!!json_encode($nilai_a_1718)!!} // a
    }, {
        name: {!!json_encode($nilai_1718[1])!!},
        data: {!!json_encode($nilai_b_1718)!!} // b
    }, {
        name: {!!json_encode($nilai_1718[2])!!},
        data: {!!json_encode($nilai_c_1718)!!} // c
    }, {
        name: {!!json_encode($nilai_1718[3])!!},
        data: {!!json_encode($nilai_d_1718)!!} // d
    }, {
        name: {!!json_encode($nilai_1718[4])!!},
        data: {!!json_encode($nilai_e_1718)!!} // e
    },{
        name: {!!json_encode($nilai_1819[0])!!},
        data: {!!json_encode($nilai_a_1819)!!} // a
    }, {
        name: {!!json_encode($nilai_1819[1])!!},
        data: {!!json_encode($nilai_b_1819)!!} // b
    }, {
        name: {!!json_encode($nilai_1819[2])!!},
        data: {!!json_encode($nilai_c_1819)!!} // c
    }, {
        name: {!!json_encode($nilai_1819[3])!!},
        data: {!!json_encode($nilai_d_1819)!!} // d
    }, {
        name: {!!json_encode($nilai_1819[4])!!},
        data: {!!json_encode($nilai_e_1819)!!} // e
    }]
});    
</script>

@stop