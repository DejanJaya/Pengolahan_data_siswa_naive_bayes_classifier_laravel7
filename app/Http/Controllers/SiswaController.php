<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Siswa;
use App\User;
use App\Mapel;
use App\Kelas;
use App\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Repositories\NbcRepository;


class SiswaController extends Controller
{
    public function __construct(NbcRepository $nbc_repository)
    {
        $this->nbc_repository = $nbc_repository;
    }
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_siswa = Siswa::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->paginate(10);
        } else {
            $data_siswa = Siswa::all();
        }

        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required',
            'email' => 'required|email|unique:users',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'avatar' => 'mimes:jpeg,png'
        ]);

        //insert table users
        $user = new User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('12345');
        $user->remember_token = Str::random(60);
        $user->save();

        //insert table siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses', 'Data berhasil diinput');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa/edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete(Siswa $siswa)
    {

        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data berhasil dihapus');
    }


    public function analisisNilai()
    {
        $nilai = $this->nbc_repository->getNilai("2015/2016");
        $rata = $this->nbc_repository->getRataRata("2015/2016");
        $nilai_siswa = $this->nbc_repository->getNilaiTer("2015/2016");
        $jkkelas = $this->nbc_repository->getJenisKelaminKelas("2015/2016");
        $jumlah_siswa_1516 = $this->nbc_repository->getTotalSiswa("2015/2016");


        $a_kali_1516 = 1;
        $a_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai['a']); $i++) {
            $a_1516[$i] = $nilai['a'][$i] / $jumlah_siswa_1516;
            $a_kali_1516 *= $a_1516[$i];
            $a_tambah_1516 += $a_1516[$i];
        }

        $b_kali_1516 = 1;
        $b_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai['b']); $i++) {
            $b_1516[$i] = $nilai['b'][$i] / $jumlah_siswa_1516;
            $b_kali_1516 *= $b_1516[$i];
            $b_tambah_1516 += $b_1516[$i];
        }

        $c_kali_1516 = 1;
        $c_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai['c']); $i++) {
            $c_1516[$i] = $nilai['c'][$i] / $jumlah_siswa_1516;
            $c_kali_1516 *= $c_1516[$i];
            $c_tambah_1516 += $c_1516[$i];
        }

        $d_kali_1516 = 1;
        $d_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai['d']); $i++) {
            $d_1516[$i] = $nilai['d'][$i] / $jumlah_siswa_1516;
            $d_kali_1516 *= $d_1516[$i];
            $d_tambah_1516 += $d_1516[$i];
        }

        $e_kali_1516 = 1;
        $e_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai['e']); $i++) {
            $e_1516[$i] = $nilai['e'][$i] / $jumlah_siswa_1516;
            $e_kali_1516 *= $e_1516[$i];
            $e_tambah_1516 += $e_1516[$i];
        }

        $data1['tahun'] = array(
            "Fisika 2015/2016", "PKN 2015/2016", "B. Jepang 2015/2016", "B. Inggris 2015/2016", "Matematika 2015/2016", "B. Indonesia 2015/2016", "Kejuruan 2015/2016",
        );
        $data1['label'] = array("A", "B", "C", "D", "E");

        $data1["a"] = array(
            "a_dasar" => array_merge($nilai['a']),
            "a_hasil_bagi" => array_merge($a_1516)
        );
        $data1["b"] = array(
            "b_dasar" => array_merge($nilai['b']),
            "b_hasil_bagi" => array_merge($b_1516)
        );
        $data1["c"] = array(
            "c_dasar" => array_merge($nilai['c']),
            "c_hasil_bagi" => array_merge($c_1516)
        );
        $data1["d"] = array(
            "d_dasar" => array_merge($nilai['d']),
            "d_hasil_bagi" => array_merge($d_1516)
        );
        $data1["e"] = array(
            "e_dasar" => array_merge($nilai['e']),
            "e_hasil_bagi" => array_merge($e_1516)
        );

        $data1['tahun_a'] = array(
            "A 2015/2016", "B 2015/2016", "C 2015/2016", "D 2015/2016", "E 2015/2016",
        );
        $data1['label_a'] = array("Class Variable ", "Probabilitas variable");
        $data1['class'] = array(
            $a_kali_1516, $b_kali_1516, $c_kali_1516, $d_kali_1516, $e_kali_1516,
        );
        $data1['prob'] = array(
            $a_tambah_1516, $b_tambah_1516, $c_tambah_1516, $d_tambah_1516, $e_tambah_1516,
        );

        $data = array(
            "jenis_kelamin" => ["Laki-laki", "Perempuan"],
            "mata_pelajaran" => ["Fisika", "PKN", "B. Jepang", "B. Inggris", "Matematika", "B. Indonesia", "Kejuruan Khusus"],
            "nilai" => ["A (100-85)", "B (84-75)", "C (74-60)", "D (59-50)", "E (49-0)"],
            "rata"  => ["X", "XI", "XII"],
            "nilai_siswa" => ["nilai tertinggi", "nilai terendah"],
            "nilai_siswa_a" => $nilai_siswa['a'],
            "nilai_siswa_b" => $nilai_siswa['b'],
            "jkkelas_a" => $jkkelas['lakilaki'],
            "jkkelas_b" => $jkkelas['perempuan'],
            "rata_a" => $rata['a'],
            "rata_b" => $rata['b'],
            "rata_c" => $rata['c'],
            "nilai_a" => $nilai['a'],
            "nilai_b" => $nilai['b'],
            "nilai_c" => $nilai['c'],
            "nilai_d" => $nilai['d'],
            "nilai_e" => $nilai['e']
        );
        return view('analisis_nilai.analisis20152016', $data, $data1);
    }

    public function analisisNilai1617()
    {
        $nilai = $this->nbc_repository->getNilai("2016/2017");
        $rata = $this->nbc_repository->getRataRata("2016/2017");
        $nilai_siswa = $this->nbc_repository->getNilaiTer("2016/2017");
        $jkkelas = $this->nbc_repository->getJenisKelaminKelas("2016/2017");
        $jumlah_siswa_1617 = $this->nbc_repository->getTotalSiswa("2016/2017");

        $a_kali_1617 = 1;
        $a_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai['a']); $i++) {
            $a_1617[$i] = $nilai['a'][$i] / $jumlah_siswa_1617;
            $a_kali_1617 *= $a_1617[$i];
            $a_tambah_1617 += $a_1617[$i];
        }

        $b_kali_1617 = 1;
        $b_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai['b']); $i++) {
            $b_1617[$i] = $nilai['b'][$i] / $jumlah_siswa_1617;
            $b_kali_1617 *= $b_1617[$i];
            $b_tambah_1617 += $b_1617[$i];
        }

        $c_kali_1617 = 1;
        $c_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai['c']); $i++) {
            $c_1617[$i] = $nilai['c'][$i] / $jumlah_siswa_1617;
            $c_kali_1617 *= $c_1617[$i];
            $c_tambah_1617 += $c_1617[$i];
        }

        $d_kali_1617 = 1;
        $d_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai['d']); $i++) {
            $d_1617[$i] = $nilai['d'][$i] / $jumlah_siswa_1617;
            $d_kali_1617 *= $d_1617[$i];
            $d_tambah_1617 += $d_1617[$i];
        }

        $e_kali_1617 = 1;
        $e_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai['e']); $i++) {
            $e_1617[$i] = $nilai['e'][$i] / $jumlah_siswa_1617;
            $e_kali_1617 *= $e_1617[$i];
            $e_tambah_1617 += $e_1617[$i];
        }

        $data1['tahun'] = array(
            "Fisika 2016/2017", "PKN 2016/2017", "B. Jepang 2016/2017", "B. Inggris 2016/2017", "Matematika 2016/2017", "B. Indonesia 2016/2017", "Kejuruan 2016/2017"
        );
        $data1['label'] = array("A", "B", "C", "D", "E");


        $data1["a"] = array(
            "a_dasar" => array_merge($nilai['a']),
            "a_hasil_bagi" => array_merge($a_1617)
        );
        $data1["b"] = array(
            "b_dasar" => array_merge($nilai['b']),
            "b_hasil_bagi" => array_merge($b_1617)
        );
        $data1["c"] = array(
            "c_dasar" => array_merge($nilai['c']),
            "c_hasil_bagi" => array_merge($c_1617)
        );
        $data1["d"] = array(
            "d_dasar" => array_merge($nilai['d']),
            "d_hasil_bagi" => array_merge($d_1617)
        );
        $data1["e"] = array(
            "e_dasar" => array_merge($nilai['e']),
            "e_hasil_bagi" => array_merge($e_1617)
        );

        $data1['tahun_a'] = array(
            "A 2016/2017", "B 2016/2017", "C 2016/2017", "D 2016/2017", "E 2016/2017",
        );
        $data1['label_a'] = array("Class Variable ", "Probabilitas variable");
        $data1['class'] = array(
            $a_kali_1617, $b_kali_1617, $c_kali_1617, $d_kali_1617, $e_kali_1617,
        );
        $data1['prob'] = array(
            $a_tambah_1617, $b_tambah_1617, $c_tambah_1617, $d_tambah_1617, $e_tambah_1617,
        );

        $data = array(
            "jenis_kelamin" => ["Laki-laki", "Perempuan"],
            "mata_pelajaran" => ["Fisika", "PKN", "B. Jepang", "B. Inggris", "Matematika", "B. Indonesia", "Kejuruan Khusus"],
            "nilai" => ["A (100-85)", "B (84-75)", "C (74-60)", "D (59-50)", "E (49-0)"],
            "rata"  => ["X", "XI", "XII"],
            "nilai_siswa" => ["nilai tertinggi", "nilai terendah"],
            "nilai_siswa_a" => $nilai_siswa['a'],
            "nilai_siswa_b" => $nilai_siswa['b'],
            "jkkelas_a" => $jkkelas['lakilaki'],
            "jkkelas_b" => $jkkelas['perempuan'],
            "rata_a" => $rata['a'],
            "rata_b" => $rata['b'],
            "rata_c" => $rata['c'],
            "nilai_a" => $nilai['a'],
            "nilai_b" => $nilai['b'],
            "nilai_c" => $nilai['c'],
            "nilai_d" => $nilai['d'],
            "nilai_e" => $nilai['e']
        );
        return view('analisis_nilai.analisis20162017', $data, $data1);
    }

    public function analisisNilai1718()
    {
        $nilai = $this->nbc_repository->getNilai("2017/2018");
        $rata = $this->nbc_repository->getRataRata("2017/2018");
        $nilai_siswa = $this->nbc_repository->getNilaiTer("2017/2018");
        $jkkelas = $this->nbc_repository->getJenisKelaminKelas("2017/2018");
        $jumlah_siswa_1718 = $this->nbc_repository->getTotalSiswa("2017/2018");

        $a_kali_1718 = 1;
        $a_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai['a']); $i++) {
            $a_1718[$i] = $nilai['a'][$i] / $jumlah_siswa_1718;
            $a_kali_1718 *= $a_1718[$i];
            $a_tambah_1718 += $a_1718[$i];
        }

        $b_kali_1718 = 1;
        $b_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai['b']); $i++) {
            $b_1718[$i] = $nilai['b'][$i] / $jumlah_siswa_1718;
            $b_kali_1718 *= $b_1718[$i];
            $b_tambah_1718 += $b_1718[$i];
        }

        $c_kali_1718 = 1;
        $c_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai['c']); $i++) {
            $c_1718[$i] = $nilai['c'][$i] / $jumlah_siswa_1718;
            $c_kali_1718 *= $c_1718[$i];
            $c_tambah_1718 += $c_1718[$i];
        }

        $d_kali_1718 = 1;
        $d_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai['d']); $i++) {
            $d_1718[$i] = $nilai['d'][$i] / $jumlah_siswa_1718;
            $d_kali_1718 *= $d_1718[$i];
            $d_tambah_1718 += $d_1718[$i];
        }

        $e_kali_1718 = 1;
        $e_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai['e']); $i++) {
            $e_1718[$i] = $nilai['e'][$i] / $jumlah_siswa_1718;
            $e_kali_1718 *= $e_1718[$i];
            $e_tambah_1718 += $e_1718[$i];
        }

        $data1['tahun'] = array(
            "Fisika 2017/2018", "PKN 2017/2018", "B. Jepang 2017/2018", "B. Inggris 2017/2018", "Matematika 2017/2018", "B. Indonesia 2017/2018", "Kejuruan 2017/2018"
        );
        $data1['label'] = array("A", "B", "C", "D", "E");

        $data1["a"] = array(
            "a_dasar" => array_merge($nilai['a']),
            "a_hasil_bagi" => array_merge($a_1718)
        );
        $data1["b"] = array(
            "b_dasar" => array_merge($nilai['b']),
            "b_hasil_bagi" => array_merge($b_1718)
        );
        $data1["c"] = array(
            "c_dasar" => array_merge($nilai['c']),
            "c_hasil_bagi" => array_merge($c_1718)
        );
        $data1["d"] = array(
            "d_dasar" => array_merge($nilai['d']),
            "d_hasil_bagi" => array_merge($d_1718)
        );
        $data1["e"] = array(
            "e_dasar" => array_merge($nilai['e']),
            "e_hasil_bagi" => array_merge($e_1718)
        );

        $data1['tahun_a'] = array(
            "A 2017/2018", "B 2017/2018", "C 2017/2018", "D 2017/2018", "E 2017/2018",
        );
        $data1['label_a'] = array("Class Variable ", "Probabilitas variable");
        $data1['class'] = array(
            $a_kali_1718, $b_kali_1718, $c_kali_1718, $d_kali_1718, $e_kali_1718,
        );
        $data1['prob'] = array(
            $a_tambah_1718, $b_tambah_1718, $c_tambah_1718, $d_tambah_1718, $e_tambah_1718,
        );

        $data = array(
            "jenis_kelamin" => ["Laki-laki", "Perempuan"],
            "mata_pelajaran" => ["Fisika", "PKN", "B. Jepang", "B. Inggris", "Matematika", "B. Indonesia", "Kejuruan Khusus"],
            "nilai" => ["A (100-85)", "B (84-75)", "C (74-60)", "D (59-50)", "E (49-0)"],
            "rata"  => ["X", "XI", "XII"],
            "nilai_siswa" => ["nilai tertinggi", "nilai terendah"],
            "nilai_siswa_a" => $nilai_siswa['a'],
            "nilai_siswa_b" => $nilai_siswa['b'],
            "jkkelas_a" => $jkkelas['lakilaki'],
            "jkkelas_b" => $jkkelas['perempuan'],
            "rata_a" => $rata['a'],
            "rata_b" => $rata['b'],
            "rata_c" => $rata['c'],
            "nilai_a" => $nilai['a'],
            "nilai_b" => $nilai['b'],
            "nilai_c" => $nilai['c'],
            "nilai_d" => $nilai['d'],
            "nilai_e" => $nilai['e']
        );

        return view('analisis_nilai.analisis20172018', $data, $data1);
    }

    public function analisisNilai1819()
    {
        $nilai = $this->nbc_repository->getNilai("2018/2019");
        $rata = $this->nbc_repository->getRataRata("2018/2019");
        $nilai_siswa = $this->nbc_repository->getNilaiTer("2018/2019");
        $jkkelas = $this->nbc_repository->getJenisKelaminKelas("2018/2019");
        $jumlah_siswa_1819 = $this->nbc_repository->getTotalSiswa("2018/2019");

        $a_kali_1819 = 1;
        $a_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai['a']); $i++) {
            $a_1819[$i] = $nilai['a'][$i] / $jumlah_siswa_1819;
            $a_kali_1819 *= $a_1819[$i];
            $a_tambah_1819 += $a_1819[$i];
        }

        $b_kali_1819 = 1;
        $b_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai['b']); $i++) {
            $b_1819[$i] = $nilai['b'][$i] / $jumlah_siswa_1819;
            $b_kali_1819 *= $b_1819[$i];
            $b_tambah_1819 += $b_1819[$i];
        }

        $c_kali_1819 = 1;
        $c_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai['c']); $i++) {
            $c_1819[$i] = $nilai['c'][$i] / $jumlah_siswa_1819;
            $c_kali_1819 *= $c_1819[$i];
            $c_tambah_1819 += $c_1819[$i];
        }

        $d_kali_1819 = 1;
        $d_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai['d']); $i++) {
            $d_1819[$i] = $nilai['d'][$i] / $jumlah_siswa_1819;
            $d_kali_1819 *= $d_1819[$i];
            $d_tambah_1819 += $d_1819[$i];
        }

        $e_kali_1819 = 1;
        $e_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai['e']); $i++) {
            $e_1819[$i] = $nilai['e'][$i] / $jumlah_siswa_1819;
            $e_kali_1819 *= $e_1819[$i];
            $e_tambah_1819 += $e_1819[$i];
        }

        $data1['tahun'] = array(
            "Fisika 2019/2019", "PKN 2019/2019", "B. Jepang 2019/2019", "B. Inggris 2019/2019", "Matematika 2019/2019", "B. Indonesia 2019/2019", "Kejuruan 2019/2019"
        );
        $data1['label'] = array("A", "B", "C", "D", "E");

        $data1["a"] = array(
            "a_dasar" => array_merge($nilai['a']),
            "a_hasil_bagi" => array_merge($a_1819)
        );
        $data1["b"] = array(
            "b_dasar" => array_merge($nilai['b']),
            "b_hasil_bagi" => array_merge($b_1819)
        );
        $data1["c"] = array(
            "c_dasar" => array_merge($nilai['c']),
            "c_hasil_bagi" => array_merge($c_1819)
        );
        $data1["d"] = array(
            "d_dasar" => array_merge($nilai['d']),
            "d_hasil_bagi" => array_merge($d_1819)
        );
        $data1["e"] = array(
            "e_dasar" => array_merge($nilai['e']),
            "e_hasil_bagi" => array_merge($e_1819)
        );

        $data1['tahun_a'] = array(
            "A 2018/2019", "B 2018/2019", "C 2018/2019", "D 2018/2019", "E 2018/2019",
        );
        $data1['label_a'] = array("Class Variable ", "Probabilitas variable");
        $data1['class'] = array(
            $a_kali_1819, $b_kali_1819, $c_kali_1819, $d_kali_1819, $e_kali_1819,
        );
        $data1['prob'] = array(
            $a_tambah_1819, $b_tambah_1819, $c_tambah_1819, $d_tambah_1819, $e_tambah_1819,
        );

        $data = array(
            "jenis_kelamin" => ["Laki-laki", "Perempuan"],
            "mata_pelajaran" => ["Fisika", "PKN", "B. Jepang", "B. Inggris", "Matematika", "B. Indonesia", "Kejuruan Khusus"],
            "nilai" => ["A (100-85)", "B (84-75)", "C (74-60)", "D (59-50)", "E (49-0)"],
            "rata"  => ["X", "XI", "XII"],
            "nilai_siswa" => ["nilai tertinggi", "nilai terendah"],
            "nilai_siswa_a" => $nilai_siswa['a'],
            "nilai_siswa_b" => $nilai_siswa['b'],
            "jkkelas_a" => $jkkelas['lakilaki'],
            "jkkelas_b" => $jkkelas['perempuan'],
            "rata_a" => $rata['a'],
            "rata_b" => $rata['b'],
            "rata_c" => $rata['c'],
            "nilai_a" => $nilai['a'],
            "nilai_b" => $nilai['b'],
            "nilai_c" => $nilai['c'],
            "nilai_d" => $nilai['d'],
            "nilai_e" => $nilai['e']
        );
        return view('analisis_nilai.analisis20182019', $data, $data1);
    }


    public function datanilai()
    {
        $data_nilai = Nilai::all();

        return view('nilai.index', ['data_nilai' => $data_nilai]);
    }


    public function getdatasiswa()
    {
        $siswa = Siswa::select('siswa.*');

        return \DataTables::eloquent($siswa)
            ->addColumn('nama_lengkap', function ($s) {
                return $s->nama_depan . ' ' . $s->nama_belakang;
            })

            ->addColumn('aksi', function ($s) {
                return '<a href="/siswa/delete/' . $s->id . '"" class="btn btn-danger btn-sm" siswa-id="$s->id">Delete</>';
            })
            ->rawColumns(['nama_lengkap', 'aksi'])
            ->toJson();
    }

    public function importexcel(Request $request)
    {
        Excel::import(new \App\Imports\SiswaImport, $request->file('data_siswa'));
        return redirect()->back()->with('sukses', 'Data berhasil di import');
    }
}
