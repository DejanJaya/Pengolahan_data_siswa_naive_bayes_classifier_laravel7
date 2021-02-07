<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NbcRepository;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class RekapController extends Controller
{
    public function __construct(NbcRepository $nbc_repository)
    {
        $this->nbc_repository = $nbc_repository;
    }
    //

    public function rata2nilai()
    {
        $data['tahun'] = array("X 15/16", "XI 15/16", "XII 15/16", "X 16/17", "XI 16/17", "XII 16/17",  "X 17/18", "Xi 17/18", "XII 17/18", "X 18/19", "XI 18/19", "XII 18/19");
        $data['label'] = array("Fisika", "PKN", "B. Jepang", "B. Inggris", "Matematika", "B. Indo", "Kejuruan");
        $data['rata2'] = $this->nbc_repository->getNilaiRata2();
        return view("rekap.rekapratarata", $data);
    }

    public function tinggirendah()
    {
        $data['tahun'] = array("2015/2016", "2016/2017",  "2017/2018", "2018/2019");
        $data['label'] = array("Fisika Tertinggi", "Fisika Terendah", "PKN Tertinggi", "PKN Terendah", "B. Jepang Tertinggi", "B. Jepang Terendah", "B. Inggris Tertinggi", "B. Inggris Terendah", "Matematika Tertinggi", "Matematika Terendah", "B. Indo Tertinggi", "B. Indo Terendah", "Kejuruan Tertinggi", "Kejuruan Terendah");
        $data['minmax'] = $this->nbc_repository->tinggi_rendah();
        return view("rekap.tinggirendah", $data);
    }

    public function nilai()
    {
        $nilai_1516 = $this->nbc_repository->getNilai("2015/2016");
        $nilai_1617 = $this->nbc_repository->getNilai("2016/2017");
        $nilai_1718 = $this->nbc_repository->getNilai("2017/2018");
        $nilai_1819 = $this->nbc_repository->getNilai("2018/2019");

        $data = array(
            "mata_pelajaran" => [
                "Fisika", "PKN", "B. Jepang", "B. Inggris", "Matematika", "B. Indonesia", "Kejuruan Khusus"
            ],
            "nilai_1516" => ["A (100-85) 15/16", "B (84-75) 15/16", "C (74-60) 15/16", "D (59-50) 15/16", "E (49-0) 15/16"],
            "nilai_1617" => ["A (100-85) 16/17", "B (84-75) 16/17", "C (74-60) 16/17", "D (59-50) 16/17", "E (49-0) 16/17"],
            "nilai_1718" => ["A (100-85) 17/18", "B (84-75) 17/18", "C (74-60) 17/18", "D (59-50) 17/18", "E (49-0) 17/18"],
            "nilai_1819" => ["A (100-85) 18/19", "B (84-75) 18/19", "C (74-60) 18/19", "D (59-50) 18/19", "E (49-0) 18/19"],
            "nilai_a_1516" => $nilai_1516['a'],
            "nilai_b_1516" => $nilai_1516['b'],
            "nilai_c_1516" => $nilai_1516['c'],
            "nilai_d_1516" => $nilai_1516['d'],
            "nilai_e_1516" => $nilai_1516['e'],
            "nilai_a_1617" => $nilai_1617['a'],
            "nilai_b_1617" => $nilai_1617['b'],
            "nilai_c_1617" => $nilai_1617['c'],
            "nilai_d_1617" => $nilai_1617['d'],
            "nilai_e_1617" => $nilai_1617['e'],
            "nilai_a_1718" => $nilai_1718['a'],
            "nilai_b_1718" => $nilai_1718['b'],
            "nilai_c_1718" => $nilai_1718['c'],
            "nilai_d_1718" => $nilai_1718['d'],
            "nilai_e_1718" => $nilai_1718['e'],
            "nilai_a_1819" => $nilai_1819['a'],
            "nilai_b_1819" => $nilai_1819['b'],
            "nilai_c_1819" => $nilai_1819['c'],
            "nilai_d_1819" => $nilai_1819['d'],
            "nilai_e_1819" => $nilai_1819['e']
        );
        return view('rekap.nilai', $data);
    }

    public function jk()
    {
        $data['tahun'] = array("X 15/16", "XI 15/16", "XII 15/16", "X 16/17", "XI 16/17", "XII 16/17",  "X 17/18", "Xi 17/18", "XII 17/18", "X 18/19", "XI 18/19", "XII 18/19");
        $data['label'] = array("Laki-laki", "Perempuan");
        $data['jk'] = $this->nbc_repository->getJk();
        return view("rekap.jk", $data);
    }

    public function probabilitas()
    {
        $nilai_1516 = $this->nbc_repository->getNilai("2015/2016");
        $nilai_1617 = $this->nbc_repository->getNilai("2016/2017");
        $nilai_1718 = $this->nbc_repository->getNilai("2017/2018");
        $nilai_1819 = $this->nbc_repository->getNilai("2018/2019");
        $jumlah_siswa_1516 = $this->nbc_repository->getTotalSiswa("2015/2016");
        $jumlah_siswa_1617 = $this->nbc_repository->getTotalSiswa("2016/2017");
        $jumlah_siswa_1718 = $this->nbc_repository->getTotalSiswa("2017/2018");
        $jumlah_siswa_1819 = $this->nbc_repository->getTotalSiswa("2018/2019");

        // 1516 ==========================================================
        $a_kali_1516 = 1;
        $a_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai_1516['a']); $i++) {
            $a_1516[$i] = $nilai_1516['a'][$i] / $jumlah_siswa_1516;
            $a_kali_1516 *= $a_1516[$i];
            $a_tambah_1516 += $a_1516[$i];
        }

        $b_kali_1516 = 1;
        $b_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai_1516['b']); $i++) {
            $b_1516[$i] = $nilai_1516['b'][$i] / $jumlah_siswa_1516;
            $b_kali_1516 *= $b_1516[$i];
            $b_tambah_1516 += $b_1516[$i];
        }

        $c_kali_1516 = 1;
        $c_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai_1516['c']); $i++) {
            $c_1516[$i] = $nilai_1516['c'][$i] / $jumlah_siswa_1516;
            $c_kali_1516 *= $c_1516[$i];
            $c_tambah_1516 += $c_1516[$i];
        }

        $d_kali_1516 = 1;
        $d_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai_1516['d']); $i++) {
            $d_1516[$i] = $nilai_1516['d'][$i] / $jumlah_siswa_1516;
            $d_kali_1516 *= $d_1516[$i];
            $d_tambah_1516 += $d_1516[$i];
        }

        $e_kali_1516 = 1;
        $e_tambah_1516 = 0;
        for ($i = 0; $i < count($nilai_1516['e']); $i++) {
            $e_1516[$i] = $nilai_1516['e'][$i] / $jumlah_siswa_1516;
            $e_kali_1516 *= $e_1516[$i];
            $e_tambah_1516 += $e_1516[$i];
        }

        // 1617 ======================================================================
        $a_kali_1617 = 1;
        $a_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai_1617['a']); $i++) {
            $a_1617[$i] = $nilai_1617['a'][$i] / $jumlah_siswa_1617;
            $a_kali_1617 *= $a_1617[$i];
            $a_tambah_1617 += $a_1617[$i];
        }

        $b_kali_1617 = 1;
        $b_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai_1617['b']); $i++) {
            $b_1617[$i] = $nilai_1617['b'][$i] / $jumlah_siswa_1617;
            $b_kali_1617 *= $b_1617[$i];
            $b_tambah_1617 += $b_1617[$i];
        }

        $c_kali_1617 = 1;
        $c_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai_1617['c']); $i++) {
            $c_1617[$i] = $nilai_1617['c'][$i] / $jumlah_siswa_1617;
            $c_kali_1617 *= $c_1617[$i];
            $c_tambah_1617 += $c_1617[$i];
        }

        $d_kali_1617 = 1;
        $d_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai_1617['d']); $i++) {
            $d_1617[$i] = $nilai_1617['d'][$i] / $jumlah_siswa_1617;
            $d_kali_1617 *= $d_1617[$i];
            $d_tambah_1617 += $d_1617[$i];
        }

        $e_kali_1617 = 1;
        $e_tambah_1617 = 0;
        for ($i = 0; $i < count($nilai_1617['e']); $i++) {
            $e_1617[$i] = $nilai_1617['e'][$i] / $jumlah_siswa_1617;
            $e_kali_1617 *= $e_1617[$i];
            $e_tambah_1617 += $e_1617[$i];
        }

        // 1718 ======================================================================
        $a_kali_1718 = 1;
        $a_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai_1718['a']); $i++) {
            $a_1718[$i] = $nilai_1718['a'][$i] / $jumlah_siswa_1718;
            $a_kali_1718 *= $a_1718[$i];
            $a_tambah_1718 += $a_1718[$i];
        }

        $b_kali_1718 = 1;
        $b_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai_1718['b']); $i++) {
            $b_1718[$i] = $nilai_1718['b'][$i] / $jumlah_siswa_1718;
            $b_kali_1718 *= $b_1718[$i];
            $b_tambah_1718 += $b_1718[$i];
        }

        $c_kali_1718 = 1;
        $c_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai_1718['c']); $i++) {
            $c_1718[$i] = $nilai_1718['c'][$i] / $jumlah_siswa_1718;
            $c_kali_1718 *= $c_1718[$i];
            $c_tambah_1718 += $c_1718[$i];
        }

        $d_kali_1718 = 1;
        $d_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai_1718['d']); $i++) {
            $d_1718[$i] = $nilai_1718['d'][$i] / $jumlah_siswa_1718;
            $d_kali_1718 *= $d_1718[$i];
            $d_tambah_1718 += $d_1718[$i];
        }

        $e_kali_1718 = 1;
        $e_tambah_1718 = 0;
        for ($i = 0; $i < count($nilai_1718['e']); $i++) {
            $e_1718[$i] = $nilai_1718['e'][$i] / $jumlah_siswa_1718;
            $e_kali_1718 *= $e_1718[$i];
            $e_tambah_1718 += $e_1718[$i];
        }

        // 1819 ==================================================================
        $a_kali_1819 = 1;
        $a_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai_1819['a']); $i++) {
            $a_1819[$i] = $nilai_1819['a'][$i] / $jumlah_siswa_1819;
            $a_kali_1819 *= $a_1819[$i];
            $a_tambah_1819 += $a_1819[$i];
        }

        $b_kali_1819 = 1;
        $b_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai_1819['b']); $i++) {
            $b_1819[$i] = $nilai_1819['b'][$i] / $jumlah_siswa_1819;
            $b_kali_1819 *= $b_1819[$i];
            $b_tambah_1819 += $b_1819[$i];
        }

        $c_kali_1819 = 1;
        $c_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai_1819['c']); $i++) {
            $c_1819[$i] = $nilai_1819['c'][$i] / $jumlah_siswa_1819;
            $c_kali_1819 *= $c_1819[$i];
            $c_tambah_1819 += $c_1819[$i];
        }

        $d_kali_1819 = 1;
        $d_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai_1819['d']); $i++) {
            $d_1819[$i] = $nilai_1819['d'][$i] / $jumlah_siswa_1819;
            $d_kali_1819 *= $d_1819[$i];
            $d_tambah_1819 += $d_1819[$i];
        }

        $e_kali_1819 = 1;
        $e_tambah_1819 = 0;
        for ($i = 0; $i < count($nilai_1819['e']); $i++) {
            $e_1819[$i] = $nilai_1819['e'][$i] / $jumlah_siswa_1819;
            $e_kali_1819 *= $e_1819[$i];
            $e_tambah_1819 += $e_1819[$i];
        }

        $data['tahun'] = array(
            "Fisika 2015/2016", "PKN 2015/2016", "B. Jepang 2015/2016", "B. Inggris 2015/2016", "Matematika 2015/2016", "B. Indonesia 2015/2016", "Kejuruan 2015/2016",
            "Fisika 2016/2017", "PKN 2016/2017", "B. Jepang 2016/2017", "B. Inggris 2016/2017", "Matematika 2016/2017", "B. Indonesia 2016/2017", "Kejuruan 2016/2017",
            "Fisika 2017/2018", "PKN 2017/2018", "B. Jepang 2017/2018", "B. Inggris 2017/2018", "Matematika 2017/2018", "B. Indonesia 2017/2018", "Kejuruan 2017/2018",
            "Fisika 2019/2019", "PKN 2019/2019", "B. Jepang 2019/2019", "B. Inggris 2019/2019", "Matematika 2019/2019", "B. Indonesia 2019/2019", "Kejuruan 2019/2019"
        );
        $data['label'] = array("A", "B", "C", "D", "E");


        $data["a"] = array(
            "a_dasar" => array_merge($nilai_1516['a'], $nilai_1617['a'], $nilai_1718['a'], $nilai_1819['a']),
            "a_hasil_bagi" => array_merge($a_1516, $a_1617, $a_1718, $a_1819)
        );
        $data["b"] = array(
            "b_dasar" => array_merge($nilai_1516['b'], $nilai_1617['b'], $nilai_1718['b'], $nilai_1819['b']),
            "b_hasil_bagi" => array_merge($b_1516, $b_1617, $b_1718, $b_1819)
        );
        $data["c"] = array(
            "c_dasar" => array_merge($nilai_1516['c'], $nilai_1617['c'], $nilai_1718['c'], $nilai_1819['c']),
            "c_hasil_bagi" => array_merge($c_1516, $c_1617, $c_1718, $c_1819)
        );
        $data["d"] = array(
            "d_dasar" => array_merge($nilai_1516['d'], $nilai_1617['d'], $nilai_1718['d'], $nilai_1819['d']),
            "d_hasil_bagi" => array_merge($d_1516, $d_1617, $d_1718, $d_1819)
        );
        $data["e"] = array(
            "e_dasar" => array_merge($nilai_1516['e'], $nilai_1617['e'], $nilai_1718['e'], $nilai_1819['e']),
            "e_hasil_bagi" => array_merge($e_1516, $e_1617, $e_1718, $e_1819)
        );

        $data['tahun_a'] = array(
            "A 2015/2016", "B 2015/2016", "C 2015/2016", "D 2015/2016", "E 2015/2016",
            "A 2016/2017", "B 2016/2017", "C 2016/2017", "D 2016/2017", "E 2016/2017",
            "A 2017/2018", "B 2017/2018", "C 2017/2018", "D 2017/2018", "E 2017/2018",
            "A 2018/2019", "B 2018/2019", "C 2018/2019", "D 2018/2019", "E 2018/2019",
        );
        $data['label_a'] = array("Class Variable ", "Probabilitas variable");
        $data['class'] = array(
            $a_kali_1516, $b_kali_1516, $c_kali_1516, $d_kali_1516, $e_kali_1516,
            $a_kali_1617, $b_kali_1617, $c_kali_1617, $d_kali_1617, $e_kali_1617,
            $a_kali_1718, $b_kali_1718, $c_kali_1718, $d_kali_1718, $e_kali_1718,
            $a_kali_1819, $b_kali_1819, $c_kali_1819, $d_kali_1819, $e_kali_1819,
        );
        $data['prob'] = array(
            $a_tambah_1516, $b_tambah_1516, $c_tambah_1516, $d_tambah_1516, $e_tambah_1516,
            $a_tambah_1617, $b_tambah_1617, $c_tambah_1617, $d_tambah_1617, $e_tambah_1617,
            $a_tambah_1718, $b_tambah_1718, $c_tambah_1718, $d_tambah_1718, $e_tambah_1718,
            $a_tambah_1819, $b_tambah_1819, $c_tambah_1819, $d_tambah_1819, $e_tambah_1819,
        );
        return view("rekap.probabilitasVariabel", $data);
    }
}
