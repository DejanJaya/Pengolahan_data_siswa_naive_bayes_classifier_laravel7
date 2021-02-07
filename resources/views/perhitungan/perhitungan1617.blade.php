@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->

<section class="content-header">
    <h1>
        Perhitungan NBC Tahun Ajaran 2016/2017
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Perhitungan class variable</a></li>
    </ol>
</section>

<section class="content">
    <div class="container-fluid">
        <h5>Perhitungan Class Variabel</h5>
        <h6>Untuk mengetahui hasil variabel,kalikan semua hasil variabel pada Analisis Nilai tahun ajaran 2016 / 2017
            berikut:<h6>
                <li>Variabel A </li>
                <ul>
                    P (Fisika | Variabel A = {{$a["a_dasar"][0]}} / {{$jumlah_siswa}}) *
                    P (PKN | Variabel A = {{$a["a_dasar"][1]}} / {{$jumlah_siswa}}) *
                    P (B. Jepang | Variabel A = {{$a["a_dasar"][2]}} / {{$jumlah_siswa}}) *
                    P (B. Inggris | Variabel A = {{$a["a_dasar"][3]}} / {{$jumlah_siswa}}) *
                    P (Matematika | Variabel A = {{$a["a_dasar"][4]}} / {{$jumlah_siswa}}) *
                    P (B. Indonesia | Variabel A = {{$a["a_dasar"][5]}} / {{$jumlah_siswa}}) *
                    P (Kejuruan | Variabel A = {{$a["a_dasar"][6]}} / {{$jumlah_siswa}})
                </ul>
                <ul>
                    = {{$a["a_hasil_bagi"][0]}} * {{number_format($a["a_hasil_bagi"][1],3 ) }} * {{number_format($a["a_hasil_bagi"][2],3 ) }} *
                    {{number_format($a["a_hasil_bagi"][3],3 ) }} * {{$a["a_hasil_bagi"][4]}} * {{number_format($a["a_hasil_bagi"][5],3 ) }} *
                    {{number_format($a["a_hasil_bagi"][6],3 ) }}
                </ul>
                <ul>
                    = {{$a["a_hasil_kali"]}}
                </ul>

                <li>Variabel B </li>
                <ul>
                    P (Fisika | Variabel B = {{$b["b_dasar"][0]}} / {{$jumlah_siswa}}) *
                    P (PKN | Variabel B = {{$b["b_dasar"][1]}} / {{$jumlah_siswa}}) *
                    P (B. Jepang | Variabel B = {{$b["b_dasar"][2]}} / {{$jumlah_siswa}}) *
                    P (B. Inggris | Variabel B = {{$b["b_dasar"][3]}} / {{$jumlah_siswa}}) *
                    P (Matematika | Variabel B = {{$b["b_dasar"][4]}} / {{$jumlah_siswa}}) *
                    P (B. Indonesia | Variabel B = {{$b["b_dasar"][5]}} / {{$jumlah_siswa}}) *
                    P (Kejuruan | Variabel B = {{$b["b_dasar"][6]}} / {{$jumlah_siswa}})
                </ul>
                <ul>
                    = {{number_format($b["b_hasil_bagi"][0],3 ) }} * {{number_format($b["b_hasil_bagi"][1],3 ) }} * {{number_format($b["b_hasil_bagi"][2],3 ) }} *
                    {{number_format($b["b_hasil_bagi"][3],3 ) }} * {{number_format($b["b_hasil_bagi"][4],3 ) }} * {{number_format($b["b_hasil_bagi"][5],3 ) }} *
                    {{number_format($b["b_hasil_bagi"][6],3 ) }}
                </ul>
                <ul>
                    = {{number_format($b["b_hasil_kali"],3 ) }}
                </ul>

                <li>Variabel C </li>
                <ul>
                    P (Fisika | Variabel C = {{$c["c_dasar"][0]}} / {{$jumlah_siswa}}) *
                    P (PKN | Variabel C = {{$c["c_dasar"][1]}} / {{$jumlah_siswa}}) *
                    P (B. Jepang | Variabel C = {{$c["c_dasar"][2]}} / {{$jumlah_siswa}}) *
                    P (B. Inggris | Variabel C = {{$c["c_dasar"][3]}} / {{$jumlah_siswa}}) *
                    P (Matematika | Variabel C = {{$c["c_dasar"][4]}} / {{$jumlah_siswa}}) *
                    P (B. Indonesia | Variabel C = {{$c["c_dasar"][5]}} / {{$jumlah_siswa}}) *
                    P (Kejuruan | Variabel C = {{$c["c_dasar"][6]}} / {{$jumlah_siswa}})
                </ul>
                <ul>
                    = {{number_format($c["c_hasil_bagi"][0],3 ) }} * {{number_format($c["c_hasil_bagi"][1],3 ) }} * {{number_format($c["c_hasil_bagi"][2],3 ) }} *
                    {{number_format($c["c_hasil_bagi"][3],3 ) }} * {{number_format($c["c_hasil_bagi"][4],3 ) }} * {{number_format($c["c_hasil_bagi"][5],3 ) }} *
                    {{number_format($c["c_hasil_bagi"][6],3 ) }}
                </ul>
                <ul>
                    = {{number_format($c["c_hasil_kali"],6 ) }}
                </ul>

                <li>Variabel D </li>
                <ul>
                    P (Fisika | Variabel D = {{$d["d_dasar"][0]}} / {{$jumlah_siswa}}) *
                    P (PKN | Variabel D = {{$d["d_dasar"][1]}} / {{$jumlah_siswa}}) *
                    P (B. Jepang | Variabel D = {{$d["d_dasar"][2]}} / {{$jumlah_siswa}}) *
                    P (B. Inggris | Variabel D = {{$d["d_dasar"][3]}} / {{$jumlah_siswa}}) *
                    P (Matematika | Variabel D = {{$d["d_dasar"][4]}} / {{$jumlah_siswa}}) *
                    P (B. Indonesia | Variabel D = {{$d["d_dasar"][5]}} / {{$jumlah_siswa}}) *
                    P (Kejuruan | Variabel D = {{$d["d_dasar"][6]}} / {{$jumlah_siswa}})
                </ul>
                <ul>
                    = {{$d["d_hasil_bagi"][0]}} * {{number_format($d["d_hasil_bagi"][1],3 ) }} * {{number_format($d["d_hasil_bagi"][2],3 ) }} *
                    {{number_format($d["d_hasil_bagi"][3],3 ) }} * {{$d["d_hasil_bagi"][4]}} * {{number_format($d["d_hasil_bagi"][5],3 ) }} *
                    {{number_format($d["d_hasil_bagi"][6],3 ) }}
                </ul>
                <ul>
                    = {{$d["d_hasil_kali"]}}
                </ul>

                <li>Variabel E </li>
                <ul>
                    P (Fisika | Variabel E = {{$e["e_dasar"][0]}} / {{$jumlah_siswa}}) *
                    P (PKN | Variabel E = {{$e["e_dasar"][1]}} / {{$jumlah_siswa}}) *
                    P (B. Jepang | Variabel E = {{$e["e_dasar"][2]}} / {{$jumlah_siswa}}) *
                    P (B. Inggris | Variabel E = {{$e["e_dasar"][3]}} / {{$jumlah_siswa}}) *
                    P (Matematika | Variabel E = {{$e["e_dasar"][4]}} / {{$jumlah_siswa}}) *
                    P (B. Indonesia | Variabel E = {{$e["e_dasar"][5]}} / {{$jumlah_siswa}}) *
                    P (Kejuruan | Variabel E = {{$e["e_dasar"][6]}} / {{$jumlah_siswa}})
                </ul>
                <ul>
                    = {{$e["e_hasil_bagi"][0]}} * {{$e["e_hasil_bagi"][1]}} * {{$e["e_hasil_bagi"][2]}} *
                    {{$e["e_hasil_bagi"][3]}} * {{$e["e_hasil_bagi"][4]}} * {{$e["e_hasil_bagi"][5]}} *
                    {{$e["e_hasil_bagi"][6]}}
                </ul>
                <ul>
                    = {{$e["e_hasil_kali"]}}
                </ul>
    </div>
</section>

<section class="content">

    <div class="container-fluid">

        <h5>Perhitungan Probabilitas Variabel</h5>
        <li>Variabel A </li>
        <ul>Perhitungan variabel A dengan probabilitas yaitu jumlah total siswa dibagi dengan hasil jumlah siswa
            pada masing- masing variabel, dengan hasil sebagai berikut:</ul>
        <ul>
            <li>Nilai A Fisika, Jumlah siswa Dengan nilai A = {{$a["a_dasar"][0]}} / {{$jumlah_siswa}}</li>
            <li>Nilai A PKN, Jumlah siswa Dengan nilai A = {{$a["a_dasar"][1]}} / {{$jumlah_siswa}}</li>
            <li>Nilai A B. Jepang, Jumlah siswa Dengan nilai A = {{$a["a_dasar"][2]}} / {{$jumlah_siswa}}</li>
            <li>Nilai A B. Inggris, Jumlah siswa Dengan nilai A = {{$a["a_dasar"][3]}} / {{$jumlah_siswa}}</li>
            <li>Nilai A Matematika, Jumlah siswa Dengan nilai A = {{$a["a_dasar"][4]}} / {{$jumlah_siswa}}</li>
            <li>Nilai A B. Indonesia, Jumlah siswa Dengan nilai A = {{$a["a_dasar"][5]}} / {{$jumlah_siswa}}</li>
            <li>Nilai A Kejuruan, Jumlah siswa Dengan nilai A = {{$a["a_dasar"][6]}} / {{$jumlah_siswa}}</li>
        </ul>

        <div class="box mb-3">
            <div class="box-header">
                <h3 class="box-title"> Nilai Hasil Probabilitas Variabel A </h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Fisika</th>
                                <th>PKN</th>
                                <th>B. Jepang</th>
                                <th>B. Inggris</th>
                                <th>Matematika</th>
                                <th>B. Indonesia</th>
                                <th>Kejuruan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$a["a_hasil_bagi"][0]}}</td>
                                <td>{{number_format($a["a_hasil_bagi"][1],3 ) }}</td>
                                <td>{{number_format($a["a_hasil_bagi"][2],3 ) }}</td>
                                <td>{{number_format($a["a_hasil_bagi"][3],3 ) }}</td>
                                <td>{{$a["a_hasil_bagi"][4]}}</td>
                                <td>{{number_format($a["a_hasil_bagi"][5],3 ) }}</td>
                                <td>{{number_format($a["a_hasil_bagi"][6],3 ) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h5>Perhitungan Probabilitas Variabel</h5>
        <li>Variabel B </li>
        <ul>Perhitungan variabel B dengan probabilitas yaitu jumlah total siswa dibagi dengan hasil jumlah siswa
            pada masing - masing variabel, dengan hasil sebagai berikut:</ul>
        <ul>
            <li>Nilai B Fisika, Jumlah siswa Dengan nilai B = {{$b["b_dasar"][0]}} / {{$jumlah_siswa}}</li>
            <li>Nilai B PKN, Jumlah siswa Dengan nilai B = {{$b["b_dasar"][1]}} / {{$jumlah_siswa}}</li>
            <li>Nilai B B. Jepang, Jumlah siswa Dengan nilai B = {{$b["b_dasar"][2]}} / {{$jumlah_siswa}}</li>
            <li>Nilai B B. Inggris, Jumlah siswa Dengan nilai B = {{$b["b_dasar"][3]}} / {{$jumlah_siswa}}</li>
            <li>Nilai B Matematika, Jumlah siswa Dengan nilai B = {{$b["b_dasar"][4]}} / {{$jumlah_siswa}}</li>
            <li>Nilai B B. Indonesia, Jumlah siswa Dengan nilai B = {{$b["b_dasar"][5]}} / {{$jumlah_siswa}}</li>
            <li>Nilai B Kejuruan, Jumlah siswa Dengan nilai B = {{$b["b_dasar"][6]}} / {{$jumlah_siswa}}</li>
        </ul>

        <div class="box mb-3">
            <div class="box-header">
                <h3 class="box-title"> Nilai Hasil Probabilitas Variabel B </h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Fisika</th>
                                <th>PKN</th>
                                <th>B. Jepang</th>
                                <th>B. Inggris</th>
                                <th>Matematika</th>
                                <th>B. Indonesia</th>
                                <th>Kejuruan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{number_format($b["b_hasil_bagi"][0],3 ) }}</td>
                                <td>{{number_format($b["b_hasil_bagi"][1],3 ) }}</td>
                                <td>{{number_format($b["b_hasil_bagi"][2],3 ) }}</td>
                                <td>{{number_format($b["b_hasil_bagi"][3],3 ) }}</td>
                                <td>{{number_format($b["b_hasil_bagi"][4],3 ) }}</td>
                                <td>{{number_format($b["b_hasil_bagi"][5],3 ) }}</td>
                                <td>{{number_format($b["b_hasil_bagi"][6],3 ) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h5>Perhitungan Probabilitas Variabel</h5>
        <li>Variabel C </li>
        <ul>Perhitungan variabel C dengan probabilitas yaitu jumlah total siswa dibagi dengan hasil jumlah siswa
            pada masing - masing variabel, dengan hasil sebagai berikut:</ul>
        <ul>
            <li>Nilai C Fisika, Jumlah siswa Dengan nilai C = {{$c["c_dasar"][0]}} / {{$jumlah_siswa}}</li>
            <li>Nilai C PKN, Jumlah siswa Dengan nilai C = {{$c["c_dasar"][1]}} / {{$jumlah_siswa}}</li>
            <li>Nilai C B. Jepang, Jumlah siswa Dengan nilai C = {{$c["c_dasar"][2]}} / {{$jumlah_siswa}}</li>
            <li>Nilai C B. Inggris, Jumlah siswa Dengan nilai C = {{$c["c_dasar"][3]}} / {{$jumlah_siswa}}</li>
            <li>Nilai C Matematika, Jumlah siswa Dengan nilai C = {{$c["c_dasar"][4]}} / {{$jumlah_siswa}}</li>
            <li>Nilai C B. Indonesia, Jumlah siswa Dengan nilai C = {{$c["c_dasar"][5]}} / {{$jumlah_siswa}}</li>
            <li>Nilai C Kejuruan, Jumlah siswa Dengan nilai C = {{$c["c_dasar"][6]}} / {{$jumlah_siswa}}</li>
        </ul>

        <div class="box mb-3">
            <div class="box-header">
                <h3 class="box-title"> Nilai Hasil Probabilitas Variabel C </h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Fisika</th>
                                <th>PKN</th>
                                <th>B. Jepang</th>
                                <th>B. Inggris</th>
                                <th>Matematika</th>
                                <th>B. Indonesia</th>
                                <th>Kejuruan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{number_format($c["c_hasil_bagi"][0],3 ) }}</td>
                                <td>{{number_format($c["c_hasil_bagi"][1],3 ) }}</td>
                                <td>{{number_format($c["c_hasil_bagi"][2],3 ) }}</td>
                                <td>{{number_format($c["c_hasil_bagi"][3],3 ) }}</td>
                                <td>{{number_format($c["c_hasil_bagi"][4],3 ) }}</td>
                                <td>{{number_format($c["c_hasil_bagi"][5],3 ) }}</td>
                                <td>{{number_format($c["c_hasil_bagi"][6],3 ) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h5>Perhitungan Probabilitas Variabel</h5>
        <li>Variabel D </li>
        <ul>Perhitungan variabel D dengan probabilitas yaitu jumlah total siswa dibagi dengan hasil jumlah siswa
            pada masing - masing variabel, dengan hasil sebagai berikut:</ul>
        <ul>
            <li>Nilai D Fisika, Jumlah siswa Dengan nilai D = {{$d["d_dasar"][0]}} / {{$jumlah_siswa}}</li>
            <li>Nilai D PKN, Jumlah siswa Dengan nilai D = {{$d["d_dasar"][1]}} / {{$jumlah_siswa}}</li>
            <li>Nilai D B. Jepang, Jumlah siswa Dengan nilai D = {{$d["d_dasar"][2]}} / {{$jumlah_siswa}}</li>
            <li>Nilai D B. Inggris, Jumlah siswa Dengan nilai D = {{$d["d_dasar"][3]}} / {{$jumlah_siswa}}</li>
            <li>Nilai D Matematika, Jumlah siswa Dengan nilai D = {{$d["d_dasar"][4]}} / {{$jumlah_siswa}}</li>
            <li>Nilai D B. Indonesia, Jumlah siswa Dengan nilai D = {{$d["d_dasar"][5]}} / {{$jumlah_siswa}}</li>
            <li>Nilai D Kejuruan, Jumlah siswa Dengan nilai D = {{$d["d_dasar"][6]}} / {{$jumlah_siswa}}</li>
        </ul>

        <div class="box mb-3">
            <div class="box-header">
                <h3 class="box-title"> Nilai Hasil Probabilitas Variabel D </h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Fisika</th>
                                <th>PKN</th>
                                <th>B. Jepang</th>
                                <th>B. Inggris</th>
                                <th>Matematika</th>
                                <th>B. Indonesia</th>
                                <th>Kejuruan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$d["d_hasil_bagi"][0]}}</td>
                                <td>{{number_format($d["d_hasil_bagi"][1],3 ) }}</td>
                                <td>{{number_format($d["d_hasil_bagi"][2],3 ) }}</td>
                                <td>{{number_format($d["d_hasil_bagi"][3],3 ) }}</td>
                                <td>{{$d["d_hasil_bagi"][4]}}</td>
                                <td>{{number_format($d["d_hasil_bagi"][5],3 ) }}</td>
                                <td>{{number_format($d["d_hasil_bagi"][6],3 ) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h5>Perhitungan Probabilitas Variabel</h5>
        <li>Variabel E </li>
        <ul>Perhitungan variabel E dengan probabilitas yaitu jumlah total siswa dibagi dengan hasil jumlah siswa
            pada masing - masing variabel, dengan hasil sebagai berikut:</ul>
        <ul>
            <li>Nilai E Fisika, Jumlah siswa Dengan nilai E = {{$e["e_dasar"][0]}} / {{$jumlah_siswa}}</li>
            <li>Nilai E PKN, Jumlah siswa Dengan nilai E = {{$e["e_dasar"][1]}} / {{$jumlah_siswa}}</li>
            <li>Nilai E B. Jepang, Jumlah siswa Dengan nilai E = {{$e["e_dasar"][2]}} / {{$jumlah_siswa}}</li>
            <li>Nilai E B. Inggris, Jumlah siswa Dengan nilai E = {{$e["e_dasar"][3]}} / {{$jumlah_siswa}}</li>
            <li>Nilai E Matematika, Jumlah siswa Dengan nilai E = {{$e["e_dasar"][4]}} / {{$jumlah_siswa}}</li>
            <li>Nilai E B. Indonesia, Jumlah siswa Dengan nilai E = {{$e["e_dasar"][5]}} / {{$jumlah_siswa}}</li>
            <li>Nilai E Kejuruan, Jumlah siswa Dengan nilai E = {{$e["e_dasar"][6]}} / {{$jumlah_siswa}}</li>
        </ul>

        <div class="box mb-3">
            <div class="box-header">
                <h3 class="box-title"> Nilai Hasil Probabilitas Variabel E </h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dataTable1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Fisika</th>
                                <th>PKN</th>
                                <th>B. Jepang</th>
                                <th>B. Inggris</th>
                                <th>Matematika</th>
                                <th>B. Indonesia</th>
                                <th>Kejuruan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$e["e_hasil_bagi"][0]}}</td>
                                <td>{{$e["e_hasil_bagi"][1]}}</td>
                                <td>{{$e["e_hasil_bagi"][2]}}</td>
                                <td>{{$e["e_hasil_bagi"][3]}}</td>
                                <td>{{$e["e_hasil_bagi"][4]}}</td>
                                <td>{{$e["e_hasil_bagi"][5]}}</td>
                                <td>{{$e["e_hasil_bagi"][6]}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- /.content -->

@stop


@section('footer')
<script src="{{url('/asset/js/bootstrap-editable.min.js')}}"></script>
@stop