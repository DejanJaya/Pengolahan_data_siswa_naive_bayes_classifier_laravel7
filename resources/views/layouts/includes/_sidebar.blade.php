<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="@if(auth()->user()->role == 'siswa')
                {{auth()->user()->siswa->getAvatar()}}
                @else
                  /images/default.jpg
                @endif" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{auth()->user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> <span>Dashboards</span></a></li>
      @if(auth()->user()->role == 'admin')
      <li class="header">Master data</li>

      <li>
        <a href="{{url('/siswa')}}">
          <i class="fa fa-users"></i>
          <span>Siswa</span>
        </a>
      </li>
      <li><a href="{{url('/siswa/datanilai')}}"><i class="fa fa-book"></i> <span>Nilai Siswa</span></a></li>

      <li class="header">Analisis Data Siswa</li>
      @endif
      @if(auth()->user()->role == 'kepsek' || auth()->user()->role == 'admin' )
      <li
        class="treeview @if (Request::is('siswa/analisisnilai') || Request::is('siswa/analisisnilai1617') || Request::is('siswa/analisisnilai1718') || Request::is('siswa/analisisnilai1819')) active @endif">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Analisis Data Siswa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="@if (Request::is('siswa/analisisnilai')) active @endif"><a
              href="{{url('/siswa/analisisnilai')}}"><i class="fa fa-circle-o"></i> Analisis
              2015/2016</a>
          </li>
          <li class="@if (Request::is('siswa/analisisnilai1617')) active @endif"><a
              href="{{url('/siswa/analisisnilai1617')}}"><i class="fa fa-circle-o"></i> Analisis 2016/2017</a></li>
          <li class="@if (Request::is('siswa/analisisnilai1718')) active @endif"><a
              href="{{url('/siswa/analisisnilai1718')}}"><i class="fa fa-circle-o"></i> Analisis 2017/2018</a></li>
          <li class="@if (Request::is('siswa/analisisnilai1819')) active @endif"><a
              href="{{url('/siswa/analisisnilai1819')}}"><i class="fa fa-circle-o"></i> Analisis 2018/2019</a></li>
        </ul>
      </li>
      <li class="treeview @if (Request::is('rekap*')) active @endif">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Rekap</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="@if (Request::is('rekap/ratarata')) active @endif"><a href="{{url('/rekap/ratarata')}}"><i
                class="fa fa-circle-o"></i> Rata Rata Nilai</a></li>
          <li class="@if (Request::is('rekap/minmax')) active @endif"><a href="{{url('rekap/minmax')}}"><i
                class="fa fa-circle-o"></i> Nilai Tertinggi dan Terendah</a>
          </li>
          <li class="@if (Request::is('rekap/nilai')) active @endif"><a href="{{url('rekap/nilai')}}"><i
                class="fa fa-circle-o"></i> Kriteria Nilai</a>
          </li>
          <li class="@if (Request::is('rekap/no4')) active @endif"><a href="{{url('rekap/probabilitas')}}"><i
                class="fa fa-circle-o"></i> Probabilitas Kriteria Penilaian</a>
          </li>
          <li class="@if (Request::is('rekap/no4')) active @endif"><a href="{{url('rekap/probabilitas')}}"><i
                class="fa fa-circle-o"></i> Class Variabel & Probabilitas</a>
          </li>
          <li class="@if (Request::is('rekap/jk')) active @endif"><a href="{{url('rekap/jk')}}"><i
                class="fa fa-circle-o"></i> Jenis Kelamin</a>
          </li>
        </ul>
      </li>
      @endif
      @if(auth()->user()->role == 'admin')
      <li class="treeview @if (Request::is('perhitungan*')) active @endif">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Perhitungan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="@if (Request::is('perhitungan/1516')) active @endif"><a href="{{url('/perhitungan/1516')}}"><i
                class="fa fa-circle-o"></i> Perhitungan 2015/2016</a></li>
          <li class="@if (Request::is('perhitungan/1617')) active @endif"><a href="{{url('perhitungan/1617')}}"><i
                class="fa fa-circle-o"></i> Perhitungan 2016/2017</a>
          </li>
          <li class="@if (Request::is('perhitungan/1718')) active @endif"><a href="{{url('perhitungan/1718')}}"><i
                class="fa fa-circle-o"></i> Perhitungan 2017/2018</a>
          </li>
          <li class="@if (Request::is('perhitungan/1819')) active @endif"><a href="{{url('perhitungan/1819')}}"><i
                class="fa fa-circle-o"></i> Perhitungan 2018/2019</a>
          </li>
        </ul>
      </li>
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>