<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NbcRepository;
use App\Nilai;

class PerhitunganController extends Controller
{
    //
    public function __construct(NbcRepository $nbc_repository)
    {
        $this->nbc_repository = $nbc_repository;
    }

    public function perhitungan1516()
    {
        $nilai = $this->nbc_repository->getNilai("2015/2016");
        $jumlah_siswa = $this->nbc_repository->getTotalSiswa("2015/2016");

        $a_kali = 1;
        $a_tambah = 0;
        for ($i = 0; $i < count($nilai['a']); $i++) {
            $a[$i] = $nilai['a'][$i] / $jumlah_siswa;
            $a_kali *= $a[$i];
            $a_tambah += $nilai['a'][$i];
        }

        $b_kali = 1;
        $b_tambah = 0;
        for ($i = 0; $i < count($nilai['b']); $i++) {
            $b[$i] = $nilai['b'][$i] / $jumlah_siswa;
            $b_kali *= $b[$i];
            $b_tambah += $nilai['b'][$i];
        }

        $c_kali = 1;
        $c_tambah = 0;
        for ($i = 0; $i < count($nilai['c']); $i++) {
            $c[$i] = $nilai['c'][$i] / $jumlah_siswa;
            $c_kali *= $c[$i];
            $c_tambah += $nilai['c'][$i];
        }

        $d_kali = 1;
        $d_tambah = 0;
        for ($i = 0; $i < count($nilai['d']); $i++) {
            $d[$i] = $nilai['d'][$i] / $jumlah_siswa;
            $d_kali *= $d[$i];
            $d_tambah += $nilai['d'][$i];
        }

        $e_kali = 1;
        $e_tambah = 0;
        for ($i = 0; $i < count($nilai['e']); $i++) {
            $e[$i] = $nilai['e'][$i] / $jumlah_siswa;
            $e_kali *= $e[$i];
            $e_tambah += $nilai['e'][$i];
        }

        $data = array(
            "a" => array(
                "a_dasar" => $nilai['a'],
                "a_hasil_bagi" => $a,
                "a_hasil_kali" => $a_kali
            ),
            "b" => array(
                "b_dasar" => $nilai['b'],
                "b_hasil_bagi" => $b,
                "b_hasil_kali" => $b_kali
            ),
            "c" => array(
                "c_dasar" => $nilai['c'],
                "c_hasil_bagi" => $c,
                "c_hasil_kali" => $c_kali
            ),
            "d" => array(
                "d_dasar" => $nilai['d'],
                "d_hasil_bagi" => $d,
                "d_hasil_kali" => $d_kali
            ),
            "e" => array(
                "e_dasar" => $nilai['e'],
                "e_hasil_bagi" => $e,
                "e_hasil_kali" => $a_kali
            ),
            "jumlah_siswa" => $jumlah_siswa
        );
        return view("perhitungan.perhitungan1516", $data);
    }

    public function perhitungan1617()
    {
        $nilai = $this->nbc_repository->getNilai("2016/2017");
        $jumlah_siswa = $this->nbc_repository->getTotalSiswa("2016/2017");

        $a_kali = 1;
        $a_tambah = 0;
        for ($i = 0; $i < count($nilai['a']); $i++) {
            $a[$i] = $nilai['a'][$i] / $jumlah_siswa;
            $a_kali *= $a[$i];
            $a_tambah += $nilai['a'][$i];
        }

        $b_kali = 1;
        $b_tambah = 0;
        for ($i = 0; $i < count($nilai['b']); $i++) {
            $b[$i] = $nilai['b'][$i] / $jumlah_siswa;
            $b_kali *= $b[$i];
            $b_tambah += $nilai['b'][$i];
        }

        $c_kali = 1;
        $c_tambah = 0;
        for ($i = 0; $i < count($nilai['c']); $i++) {
            $c[$i] = $nilai['c'][$i] / $jumlah_siswa;
            $c_kali *= $c[$i];
            $c_tambah += $nilai['c'][$i];
        }

        $d_kali = 1;
        $d_tambah = 0;
        for ($i = 0; $i < count($nilai['d']); $i++) {
            $d[$i] = $nilai['d'][$i] / $jumlah_siswa;
            $d_kali *= $d[$i];
            $d_tambah += $nilai['d'][$i];
        }

        $e_kali = 1;
        $e_tambah = 0;
        for ($i = 0; $i < count($nilai['e']); $i++) {
            $e[$i] = $nilai['e'][$i] / $jumlah_siswa;
            $e_kali *= $e[$i];
            $e_tambah += $nilai['e'][$i];
        }

        $data = array(
            "a" => array(
                "a_dasar" => $nilai['a'],
                "a_hasil_bagi" => $a,
                "a_hasil_kali" => $a_kali
            ),
            "b" => array(
                "b_dasar" => $nilai['b'],
                "b_hasil_bagi" => $b,
                "b_hasil_kali" => $b_kali
            ),
            "c" => array(
                "c_dasar" => $nilai['c'],
                "c_hasil_bagi" => $c,
                "c_hasil_kali" => $c_kali
            ),
            "d" => array(
                "d_dasar" => $nilai['d'],
                "d_hasil_bagi" => $d,
                "d_hasil_kali" => $d_kali
            ),
            "e" => array(
                "e_dasar" => $nilai['e'],
                "e_hasil_bagi" => $e,
                "e_hasil_kali" => $a_kali
            ),
            "jumlah_siswa" => $jumlah_siswa
        );
        return view("perhitungan.perhitungan1617", $data);
    }

    public function perhitungan1718()
    {
        $nilai = $this->nbc_repository->getNilai("2017/2018");
        $jumlah_siswa = $this->nbc_repository->getTotalSiswa("2017/2018");

        $a_kali = 1;
        $a_tambah = 0;
        for ($i = 0; $i < count($nilai['a']); $i++) {
            $a[$i] = $nilai['a'][$i] / $jumlah_siswa;
            $a_kali *= $a[$i];
            $a_tambah += $nilai['a'][$i];
        }

        $b_kali = 1;
        $b_tambah = 0;
        for ($i = 0; $i < count($nilai['b']); $i++) {
            $b[$i] = $nilai['b'][$i] / $jumlah_siswa;
            $b_kali *= $b[$i];
            $b_tambah += $nilai['b'][$i];
        }

        $c_kali = 1;
        $c_tambah = 0;
        for ($i = 0; $i < count($nilai['c']); $i++) {
            $c[$i] = $nilai['c'][$i] / $jumlah_siswa;
            $c_kali *= $c[$i];
            $c_tambah += $nilai['c'][$i];
        }

        $d_kali = 1;
        $d_tambah = 0;
        for ($i = 0; $i < count($nilai['d']); $i++) {
            $d[$i] = $nilai['d'][$i] / $jumlah_siswa;
            $d_kali *= $d[$i];
            $d_tambah += $nilai['d'][$i];
        }

        $e_kali = 1;
        $e_tambah = 0;
        for ($i = 0; $i < count($nilai['e']); $i++) {
            $e[$i] = $nilai['e'][$i] / $jumlah_siswa;
            $e_kali *= $e[$i];
            $e_tambah += $nilai['e'][$i];
        }

        $data = array(
            "a" => array(
                "a_dasar" => $nilai['a'],
                "a_hasil_bagi" => $a,
                "a_hasil_kali" => $a_kali
            ),
            "b" => array(
                "b_dasar" => $nilai['b'],
                "b_hasil_bagi" => $b,
                "b_hasil_kali" => $b_kali
            ),
            "c" => array(
                "c_dasar" => $nilai['c'],
                "c_hasil_bagi" => $c,
                "c_hasil_kali" => $c_kali
            ),
            "d" => array(
                "d_dasar" => $nilai['d'],
                "d_hasil_bagi" => $d,
                "d_hasil_kali" => $d_kali
            ),
            "e" => array(
                "e_dasar" => $nilai['e'],
                "e_hasil_bagi" => $e,
                "e_hasil_kali" => $a_kali
            ),
            "jumlah_siswa" => $jumlah_siswa
        );
        return view("perhitungan.perhitungan1718", $data);
    }

    public function perhitungan1819()
    {
        $nilai = $this->nbc_repository->getNilai("2018/2019");
        $jumlah_siswa = $this->nbc_repository->getTotalSiswa("2018/2019");

        $a_kali = 1;
        $a_tambah = 0;
        for ($i = 0; $i < count($nilai['a']); $i++) {
            $a[$i] = $nilai['a'][$i] / $jumlah_siswa;
            $a_kali *= $a[$i];
            $a_tambah += $nilai['a'][$i];
        }

        $b_kali = 1;
        $b_tambah = 0;
        for ($i = 0; $i < count($nilai['b']); $i++) {
            $b[$i] = $nilai['b'][$i] / $jumlah_siswa;
            $b_kali *= $b[$i];
            $b_tambah += $nilai['b'][$i];
        }

        $c_kali = 1;
        $c_tambah = 0;
        for ($i = 0; $i < count($nilai['c']); $i++) {
            $c[$i] = $nilai['c'][$i] / $jumlah_siswa;
            $c_kali *= $c[$i];
            $c_tambah += $nilai['c'][$i];
        }

        $d_kali = 1;
        $d_tambah = 0;
        for ($i = 0; $i < count($nilai['d']); $i++) {
            $d[$i] = $nilai['d'][$i] / $jumlah_siswa;
            $d_kali *= $d[$i];
            $d_tambah += $nilai['d'][$i];
        }

        $e_kali = 1;
        $e_tambah = 0;
        for ($i = 0; $i < count($nilai['e']); $i++) {
            $e[$i] = $nilai['e'][$i] / $jumlah_siswa;
            $e_kali *= $e[$i];
            $e_tambah += $nilai['e'][$i];
        }

        $data = array(
            "a" => array(
                "a_dasar" => $nilai['a'],
                "a_hasil_bagi" => $a,
                "a_hasil_kali" => $a_kali
            ),
            "b" => array(
                "b_dasar" => $nilai['b'],
                "b_hasil_bagi" => $b,
                "b_hasil_kali" => $b_kali
            ),
            "c" => array(
                "c_dasar" => $nilai['c'],
                "c_hasil_bagi" => $c,
                "c_hasil_kali" => $c_kali
            ),
            "d" => array(
                "d_dasar" => $nilai['d'],
                "d_hasil_bagi" => $d,
                "d_hasil_kali" => $d_kali
            ),
            "e" => array(
                "e_dasar" => $nilai['e'],
                "e_hasil_bagi" => $e,
                "e_hasil_kali" => $a_kali
            ),
            "jumlah_siswa" => $jumlah_siswa
        );
        return view("perhitungan.perhitungan1819", $data);
    }
}
