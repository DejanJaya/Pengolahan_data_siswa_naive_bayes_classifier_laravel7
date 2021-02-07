@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Analisis Siswa 2015/2016
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Analisis 2015/2016</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box">
                <div id="chartNilai">

                </div>

            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-6">
            <div class="box">
                <div id="chartRata">

                </div>

            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box">
                <div id="chartJenisKelamin">

                </div>

            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-6">
            <div class="box">
                <div id="chartNilaiTer">

                </div>

            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="row">
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box">
                <div id="Probabilitas">

                </div>

            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-6">
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
    Highcharts.chart('chartNilai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Rekapitulasi Kriteria Penilaian'
    },
    subtitle: {
        text: 'Tahun 2015/2016'
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
            // dataLabels: {
            //     enabled: true
            // }
             pointPadding: 0.2,
             borderWidth: 0
        }
        
    },
    series: [{
        name: {!!json_encode($nilai[0])!!},
        data: {!!json_encode($nilai_a)!!} // a

    }, {
        name: {!!json_encode($nilai[1])!!},
        data: {!!json_encode($nilai_b)!!} // b
    }, {
        name: {!!json_encode($nilai[2])!!},
        data: {!!json_encode($nilai_c)!!} // c
    }, {
        name: {!!json_encode($nilai[3])!!},
        data: {!!json_encode($nilai_d)!!} // d
    }, {
        name: {!!json_encode($nilai[4])!!},
        data: {!!json_encode($nilai_e)!!} // e
    }]
});    
</script>

<script>
    Highcharts.chart('chartRata', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Rata-rata Nilai siswa perangkatan'
    },
    subtitle: {
        text: 'Tahun 2015/2016'
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
            '<td style="padding:0"><b>{point.y:.2f}</b></td></tr>',
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
        name: {!!json_encode($rata[0])!!},
        data: {!!json_encode($rata_a)!!}

    }, {
        name: {!!json_encode($rata[1])!!},
        data: {!!json_encode($rata_b)!!} 
    }, {
        name: {!!json_encode($rata[2])!!},
        data: {!!json_encode($rata_c)!!} 
    }]
});    
</script>

<script>
    Highcharts.chart('chartNilaiTer', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Nilai Tertinggi dan Terendah Per Angkatan'
    },
    subtitle: {
        text: 'Tahun 2015/2016'
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
            '<td style="padding:0"><b>{point.y:.2f}</b></td></tr>',
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
        name: {!!json_encode($nilai_siswa[0])!!},
        data: {!!json_encode($nilai_siswa_a)!!}

    }, {
        name: {!!json_encode($nilai_siswa[1])!!},
        data: {!!json_encode($nilai_siswa_b)!!} 
    }]
});    
</script>

<script>
    Highcharts.chart('chartJenisKelamin', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jenis Kelamin Per Kelas'
    },
    subtitle: {
        text: 'Tahun 2015/2016'
    },
    xAxis: {
        categories: {!!json_encode($rata)!!},
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
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
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
        name: {!!json_encode($jenis_kelamin[0])!!},
        data: {!!json_encode($jkkelas_a)!!}
    }, {
        name: {!!json_encode($jenis_kelamin[1])!!},
        data: {!!json_encode($jkkelas_b)!!}
    }]
});    
</script>

<script>
    Highcharts.chart('Probabilitas', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Rekapitulasi Probabilitas Kriteria Penilaian'
    },
    subtitle: {
        text: 'Tahun 2015/2016'
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
        text: 'Rekapitulasi Class Variabel & Probabilitas '
    },
    subtitle: {
        text: 'Tahun 2015/2016'
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