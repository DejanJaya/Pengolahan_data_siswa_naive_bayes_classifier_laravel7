<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Nilai;

class NbcRepository
{
    public function getNilai($tahun_ajaran)
    {
        $nilai['a'][0] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_fisika >= :nilai_fisika_min and nilai_fisika <= :nilai_fisika_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_fisika_min" => 85, "nilai_fisika_max" => 100]));
        $nilai['a'][1] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_pkn >= :nilai_pkn_min and nilai_pkn <= :nilai_pkn_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_pkn_min" => 85, "nilai_pkn_max" => 100]));
        $nilai['a'][2] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bjepang >= :nilai_bjepang_min and nilai_bjepang <= :nilai_bjepang_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bjepang_min" => 85, "nilai_bjepang_max" => 100]));
        $nilai['a'][3] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_binggris >= :nilai_binggris_min and nilai_binggris <= :nilai_binggris_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_binggris_min" => 85, "nilai_binggris_max" => 100]));
        $nilai['a'][4] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_mtk >= :nilai_mtk_min and nilai_mtk <= :nilai_mtk_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_mtk_min" => 85, "nilai_mtk_max" => 100]));
        $nilai['a'][5] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bindo >= :nilai_bindo_min and nilai_bindo <= :nilai_bindo_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bindo_min" => 85, "nilai_bindo_max" => 100]));
        $nilai['a'][6] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_kejuruan >= :nilai_kejuruan_min and nilai_kejuruan <= :nilai_kejuruan_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_kejuruan_min" => 85, "nilai_kejuruan_max" => 100]));

        $nilai['b'][0] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_fisika >= :nilai_fisika_min and nilai_fisika < :nilai_fisika_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_fisika_min" => 75, "nilai_fisika_max" => 85]));
        $nilai['b'][1] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_pkn >= :nilai_pkn_min and nilai_pkn < :nilai_pkn_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_pkn_min" => 75, "nilai_pkn_max" => 85]));
        $nilai['b'][2] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bjepang >= :nilai_bjepang_min and nilai_bjepang < :nilai_bjepang_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bjepang_min" => 75, "nilai_bjepang_max" => 85]));
        $nilai['b'][3] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_binggris >= :nilai_binggris_min and nilai_binggris < :nilai_binggris_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_binggris_min" => 75, "nilai_binggris_max" => 85]));
        $nilai['b'][4] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_mtk >= :nilai_mtk_min and nilai_mtk < :nilai_mtk_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_mtk_min" => 75, "nilai_mtk_max" => 85]));
        $nilai['b'][5] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bindo >= :nilai_bindo_min and nilai_bindo < :nilai_bindo_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bindo_min" => 75, "nilai_bindo_max" => 85]));
        $nilai['b'][6] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_kejuruan >= :nilai_kejuruan_min and nilai_kejuruan < :nilai_kejuruan_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_kejuruan_min" => 75, "nilai_kejuruan_max" => 85]));

        $nilai['c'][0] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_fisika >= :nilai_fisika_min and nilai_fisika < :nilai_fisika_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_fisika_min" => 60, "nilai_fisika_max" => 75]));
        $nilai['c'][1] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_pkn >= :nilai_pkn_min and nilai_pkn < :nilai_pkn_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_pkn_min" => 60, "nilai_pkn_max" => 75]));
        $nilai['c'][2] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bjepang >= :nilai_bjepang_min and nilai_bjepang < :nilai_bjepang_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bjepang_min" => 60, "nilai_bjepang_max" => 75]));
        $nilai['c'][3] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_binggris >= :nilai_binggris_min and nilai_binggris < :nilai_binggris_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_binggris_min" => 60, "nilai_binggris_max" => 75]));
        $nilai['c'][4] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_mtk >= :nilai_mtk_min and nilai_mtk < :nilai_mtk_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_mtk_min" => 60, "nilai_mtk_max" => 75]));
        $nilai['c'][5] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bindo >= :nilai_bindo_min and nilai_bindo < :nilai_bindo_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bindo_min" => 60, "nilai_bindo_max" => 75]));
        $nilai['c'][6] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_kejuruan >= :nilai_kejuruan_min and nilai_kejuruan < :nilai_kejuruan_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_kejuruan_min" => 60, "nilai_kejuruan_max" => 75]));

        $nilai['d'][0] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_fisika >= :nilai_fisika_min and nilai_fisika < :nilai_fisika_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_fisika_min" => 50, "nilai_fisika_max" => 60]));
        $nilai['d'][1] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_pkn >= :nilai_pkn_min and nilai_pkn < :nilai_pkn_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_pkn_min" => 50, "nilai_pkn_max" => 60]));
        $nilai['d'][2] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bjepang >= :nilai_bjepang_min and nilai_bjepang < :nilai_bjepang_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bjepang_min" => 50, "nilai_bjepang_max" => 60]));
        $nilai['d'][3] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_binggris >= :nilai_binggris_min and nilai_binggris < :nilai_binggris_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_binggris_min" => 50, "nilai_binggris_max" => 60]));
        $nilai['d'][4] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_mtk >= :nilai_mtk_min and nilai_mtk < :nilai_mtk_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_mtk_min" => 50, "nilai_mtk_max" => 60]));
        $nilai['d'][5] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bindo >= :nilai_bindo_min and nilai_bindo < :nilai_bindo_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bindo_min" => 50, "nilai_bindo_max" => 60]));
        $nilai['d'][6] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_kejuruan >= :nilai_kejuruan_min and nilai_kejuruan < :nilai_kejuruan_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_kejuruan_min" => 50, "nilai_kejuruan_max" => 60]));

        $nilai['e'][0] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_fisika >= :nilai_fisika_min and nilai_fisika < :nilai_fisika_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_fisika_min" => 0, "nilai_fisika_max" => 50]));
        $nilai['e'][1] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_pkn >= :nilai_pkn_min and nilai_pkn < :nilai_pkn_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_pkn_min" => 0, "nilai_pkn_max" => 50]));
        $nilai['e'][2] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bjepang >= :nilai_bjepang_min and nilai_bjepang < :nilai_bjepang_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bjepang_min" => 0, "nilai_bjepang_max" => 50]));
        $nilai['e'][3] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_binggris >= :nilai_binggris_min and nilai_binggris < :nilai_binggris_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_binggris_min" => 0, "nilai_binggris_max" => 50]));
        $nilai['e'][4] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_mtk >= :nilai_mtk_min and nilai_mtk < :nilai_mtk_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_mtk_min" => 0, "nilai_mtk_max" => 50]));
        $nilai['e'][5] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_bindo >= :nilai_bindo_min and nilai_bindo < :nilai_bindo_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_bindo_min" => 0, "nilai_bindo_max" => 50]));
        $nilai['e'][6] = count(DB::select('select * from nilai where tahun_ajaran = :tahun_ajaran and nilai_kejuruan >= :nilai_kejuruan_min and nilai_kejuruan < :nilai_kejuruan_max', ['tahun_ajaran' => $tahun_ajaran, "nilai_kejuruan_min" => 0, "nilai_kejuruan_max" => 50]));

        return $nilai;
    }

    public function getJenisKelamin($tahun_ajaran)
    {
        $jk["p"] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => $tahun_ajaran, "jenis_kelamin" => "P"])->get()->count();
        $jk["l"] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => $tahun_ajaran, "jenis_kelamin" => "L"])->get()->count();
        return $jk;
    }

    public function getJenisKelaminKelas($tahun_ajaran)
    {
        $jkkelas['lakilaki'][0] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => $tahun_ajaran, "jenis_kelamin" => "L", "kelas_id" => "1"])->get()->count();
        $jkkelas['lakilaki'][1] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => $tahun_ajaran, "jenis_kelamin" => "L", "kelas_id" => "2"])->get()->count();
        $jkkelas['lakilaki'][2] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => $tahun_ajaran, "jenis_kelamin" => "L", "kelas_id" => "3"])->get()->count();

        $jkkelas['perempuan'][0] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => $tahun_ajaran, "jenis_kelamin" => "P", "kelas_id" => "1"])->get()->count();
        $jkkelas['perempuan'][1] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => $tahun_ajaran, "jenis_kelamin" => "P", "kelas_id" => "2"])->get()->count();
        $jkkelas['perempuan'][2] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => $tahun_ajaran, "jenis_kelamin" => "P", "kelas_id" => "3"])->get()->count();

        return $jkkelas;
    }

    public function getNilaiTer($tahun_ajaran)
    {
        $nilai_siswa['a'][0] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->max('nilai_fisika');
        $nilai_siswa['a'][1] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->max('nilai_pkn');
        $nilai_siswa['a'][2] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->max('nilai_bjepang');
        $nilai_siswa['a'][3] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->max('nilai_binggris');
        $nilai_siswa['a'][4] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->max('nilai_mtk');
        $nilai_siswa['a'][5] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->max('nilai_bindo');
        $nilai_siswa['a'][6] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->max('nilai_kejuruan');

        $nilai_siswa['b'][0] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->min('nilai_fisika');
        $nilai_siswa['b'][1] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->min('nilai_pkn');
        $nilai_siswa['b'][2] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->min('nilai_bjepang');
        $nilai_siswa['b'][3] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->min('nilai_binggris');
        $nilai_siswa['b'][4] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->min('nilai_mtk');
        $nilai_siswa['b'][5] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->min('nilai_bindo');
        $nilai_siswa['b'][6] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->min('nilai_kejuruan');

        return $nilai_siswa;
    }

    public function getRataRata($tahun_ajaran)
    {
        $rata['a'][0] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 1)->avg('nilai_fisika');
        $rata['a'][1] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 1)->avg('nilai_pkn');
        $rata['a'][2] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 1)->avg('nilai_bjepang');
        $rata['a'][3] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 1)->avg('nilai_binggris');
        $rata['a'][4] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 1)->avg('nilai_mtk');
        $rata['a'][5] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 1)->avg('nilai_bindo');
        $rata['a'][6] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 1)->avg('nilai_kejuruan');

        $rata['b'][0] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 2)->avg('nilai_fisika');
        $rata['b'][1] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 2)->avg('nilai_pkn');
        $rata['b'][2] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 2)->avg('nilai_bjepang');
        $rata['b'][3] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 2)->avg('nilai_binggris');
        $rata['b'][4] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 2)->avg('nilai_mtk');
        $rata['b'][5] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 2)->avg('nilai_bindo');
        $rata['b'][6] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 2)->avg('nilai_kejuruan');

        $rata['c'][0] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 3)->avg('nilai_fisika');
        $rata['c'][1] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 3)->avg('nilai_pkn');
        $rata['c'][2] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 3)->avg('nilai_bjepang');
        $rata['c'][3] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 3)->avg('nilai_binggris');
        $rata['c'][4] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 3)->avg('nilai_mtk');
        $rata['c'][5] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 3)->avg('nilai_bindo');
        $rata['c'][6] = DB::table('nilai')->where(["tahun_ajaran" => $tahun_ajaran])->where('kelas_id', '=', 3)->avg('nilai_kejuruan');

        return $rata;
    }

    public function getTotalSiswa($tahun_ajaran)
    {
        $jumlah_siswa = Nilai::where("tahun_ajaran", $tahun_ajaran)->count();
        return $jumlah_siswa;
    }


    public function getNilaiRata2()
    {
        $rata2["fisika"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 1)->avg('nilai_fisika');
        $rata2["fisika"][1] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 2)->avg('nilai_fisika');
        $rata2["fisika"][2] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 3)->avg('nilai_fisika');
        $rata2["fisika"][3] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 1)->avg('nilai_fisika');
        $rata2["fisika"][4] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 2)->avg('nilai_fisika');
        $rata2["fisika"][5] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 3)->avg('nilai_fisika');
        $rata2["fisika"][6] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 1)->avg('nilai_fisika');
        $rata2["fisika"][7] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 2)->avg('nilai_fisika');
        $rata2["fisika"][8] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 3)->avg('nilai_fisika');
        $rata2["fisika"][9] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 1)->avg('nilai_fisika');
        $rata2["fisika"][10] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 2)->avg('nilai_fisika');
        $rata2["fisika"][11] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 3)->avg('nilai_fisika');

        $rata2["pkn"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 1)->avg('nilai_pkn');
        $rata2["pkn"][1] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 2)->avg('nilai_pkn');
        $rata2["pkn"][2] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 3)->avg('nilai_pkn');
        $rata2["pkn"][3] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 1)->avg('nilai_pkn');
        $rata2["pkn"][4] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 2)->avg('nilai_pkn');
        $rata2["pkn"][5] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 3)->avg('nilai_pkn');
        $rata2["pkn"][6] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 1)->avg('nilai_pkn');
        $rata2["pkn"][7] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 2)->avg('nilai_pkn');
        $rata2["pkn"][8] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 3)->avg('nilai_pkn');
        $rata2["pkn"][9] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 1)->avg('nilai_pkn');
        $rata2["pkn"][10] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 2)->avg('nilai_pkn');
        $rata2["pkn"][11] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 3)->avg('nilai_pkn');

        $rata2["jepang"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 1)->avg('nilai_bjepang');
        $rata2["jepang"][1] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 2)->avg('nilai_bjepang');
        $rata2["jepang"][2] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 3)->avg('nilai_bjepang');
        $rata2["jepang"][3] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 1)->avg('nilai_bjepang');
        $rata2["jepang"][4] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 2)->avg('nilai_bjepang');
        $rata2["jepang"][5] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 3)->avg('nilai_bjepang');
        $rata2["jepang"][6] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 1)->avg('nilai_bjepang');
        $rata2["jepang"][7] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 2)->avg('nilai_bjepang');
        $rata2["jepang"][8] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 3)->avg('nilai_bjepang');
        $rata2["jepang"][9] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 1)->avg('nilai_bjepang');
        $rata2["jepang"][10] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 2)->avg('nilai_bjepang');
        $rata2["jepang"][11] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 3)->avg('nilai_bjepang');

        $rata2["inggris"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 1)->avg('nilai_binggris');
        $rata2["inggris"][1] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 2)->avg('nilai_binggris');
        $rata2["inggris"][2] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 3)->avg('nilai_binggris');
        $rata2["inggris"][3] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 1)->avg('nilai_binggris');
        $rata2["inggris"][4] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 2)->avg('nilai_binggris');
        $rata2["inggris"][5] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 3)->avg('nilai_binggris');
        $rata2["inggris"][6] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 1)->avg('nilai_binggris');
        $rata2["inggris"][7] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 2)->avg('nilai_binggris');
        $rata2["inggris"][8] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 3)->avg('nilai_binggris');
        $rata2["inggris"][9] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 1)->avg('nilai_binggris');
        $rata2["inggris"][10] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 2)->avg('nilai_binggris');
        $rata2["inggris"][11] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 3)->avg('nilai_binggris');

        $rata2["mtk"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 1)->avg('nilai_mtk');
        $rata2["mtk"][1] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 2)->avg('nilai_mtk');
        $rata2["mtk"][2] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 3)->avg('nilai_mtk');
        $rata2["mtk"][3] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 1)->avg('nilai_mtk');
        $rata2["mtk"][4] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 2)->avg('nilai_mtk');
        $rata2["mtk"][5] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 3)->avg('nilai_mtk');
        $rata2["mtk"][6] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 1)->avg('nilai_mtk');
        $rata2["mtk"][7] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 2)->avg('nilai_mtk');
        $rata2["mtk"][8] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 3)->avg('nilai_mtk');
        $rata2["mtk"][9] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 1)->avg('nilai_mtk');
        $rata2["mtk"][10] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 2)->avg('nilai_mtk');
        $rata2["mtk"][11] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 3)->avg('nilai_mtk');

        $rata2["bindo"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 1)->avg('nilai_bindo');
        $rata2["bindo"][1] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 2)->avg('nilai_bindo');
        $rata2["bindo"][2] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 3)->avg('nilai_bindo');
        $rata2["bindo"][3] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 1)->avg('nilai_bindo');
        $rata2["bindo"][4] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 2)->avg('nilai_bindo');
        $rata2["bindo"][5] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 3)->avg('nilai_bindo');
        $rata2["bindo"][6] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 1)->avg('nilai_bindo');
        $rata2["bindo"][7] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 2)->avg('nilai_bindo');
        $rata2["bindo"][8] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 3)->avg('nilai_bindo');
        $rata2["bindo"][9] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 1)->avg('nilai_bindo');
        $rata2["bindo"][10] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 2)->avg('nilai_bindo');
        $rata2["bindo"][11] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 3)->avg('nilai_bindo');

        $rata2["kejuruan"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 1)->avg('nilai_kejuruan');
        $rata2["kejuruan"][1] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 2)->avg('nilai_kejuruan');
        $rata2["kejuruan"][2] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->where('kelas_id', '=', 3)->avg('nilai_kejuruan');
        $rata2["kejuruan"][3] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 1)->avg('nilai_kejuruan');
        $rata2["kejuruan"][4] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 2)->avg('nilai_kejuruan');
        $rata2["kejuruan"][5] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->where('kelas_id', '=', 3)->avg('nilai_kejuruan');
        $rata2["kejuruan"][6] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 1)->avg('nilai_kejuruan');
        $rata2["kejuruan"][7] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 2)->avg('nilai_kejuruan');
        $rata2["kejuruan"][8] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->where('kelas_id', '=', 3)->avg('nilai_kejuruan');
        $rata2["kejuruan"][9] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 1)->avg('nilai_kejuruan');
        $rata2["kejuruan"][10] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 2)->avg('nilai_kejuruan');
        $rata2["kejuruan"][11] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->where('kelas_id', '=', 3)->avg('nilai_kejuruan');
        return $rata2;
    }

    public function tinggi_rendah()
    {
        $minmax["fisika_tinggi"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->max('nilai_fisika');
        $minmax["fisika_tinggi"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->max('nilai_fisika');
        $minmax["fisika_tinggi"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->max('nilai_fisika');
        $minmax["fisika_tinggi"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->max('nilai_fisika');

        $minmax["fisika_rendah"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->min('nilai_fisika');
        $minmax["fisika_rendah"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->min('nilai_fisika');
        $minmax["fisika_rendah"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->min('nilai_fisika');
        $minmax["fisika_rendah"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->min('nilai_fisika');

        $minmax["pkn_tinggi"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->max('nilai_pkn');
        $minmax["pkn_tinggi"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->max('nilai_pkn');
        $minmax["pkn_tinggi"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->max('nilai_pkn');
        $minmax["pkn_tinggi"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->max('nilai_pkn');

        $minmax["pkn_rendah"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->min('nilai_pkn');
        $minmax["pkn_rendah"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->min('nilai_pkn');
        $minmax["pkn_rendah"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->min('nilai_pkn');
        $minmax["pkn_rendah"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->min('nilai_pkn');

        $minmax["jepang_tinggi"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->max('nilai_bjepang');
        $minmax["jepang_tinggi"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->max('nilai_bjepang');
        $minmax["jepang_tinggi"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->max('nilai_bjepang');
        $minmax["jepang_tinggi"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->max('nilai_bjepang');

        $minmax["jepang_rendah"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->min('nilai_bjepang');
        $minmax["jepang_rendah"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->min('nilai_bjepang');
        $minmax["jepang_rendah"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->min('nilai_bjepang');
        $minmax["jepang_rendah"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->min('nilai_bjepang');

        $minmax["inggris_tinggi"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->max('nilai_binggris');
        $minmax["inggris_tinggi"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->max('nilai_binggris');
        $minmax["inggris_tinggi"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->max('nilai_binggris');
        $minmax["inggris_tinggi"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->max('nilai_binggris');

        $minmax["inggris_rendah"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->min('nilai_binggris');
        $minmax["inggris_rendah"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->min('nilai_binggris');
        $minmax["inggris_rendah"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->min('nilai_binggris');
        $minmax["inggris_rendah"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->min('nilai_binggris');

        $minmax["mtk_tinggi"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->max('nilai_mtk');
        $minmax["mtk_tinggi"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->max('nilai_mtk');
        $minmax["mtk_tinggi"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->max('nilai_mtk');
        $minmax["mtk_tinggi"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->max('nilai_mtk');

        $minmax["mtk_rendah"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->min('nilai_mtk');
        $minmax["mtk_rendah"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->min('nilai_mtk');
        $minmax["mtk_rendah"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->min('nilai_mtk');
        $minmax["mtk_rendah"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->min('nilai_mtk');

        $minmax["bindo_tinggi"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->max('nilai_bindo');
        $minmax["bindo_tinggi"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->max('nilai_bindo');
        $minmax["bindo_tinggi"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->max('nilai_bindo');
        $minmax["bindo_tinggi"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->max('nilai_bindo');

        $minmax["bindo_rendah"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->min('nilai_bindo');
        $minmax["bindo_rendah"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->min('nilai_bindo');
        $minmax["bindo_rendah"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->min('nilai_bindo');
        $minmax["bindo_rendah"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->min('nilai_bindo');

        $minmax["kejuruan_tinggi"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->max('nilai_kejuruan');
        $minmax["kejuruan_tinggi"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->max('nilai_kejuruan');
        $minmax["kejuruan_tinggi"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->max('nilai_kejuruan');
        $minmax["kejuruan_tinggi"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->max('nilai_kejuruan');

        $minmax["kejuruan_rendah"][0] = DB::table('nilai')->where("tahun_ajaran", "2015/2016")->min('nilai_kejuruan');
        $minmax["kejuruan_rendah"][1] = DB::table('nilai')->where("tahun_ajaran", "2016/2017")->min('nilai_kejuruan');
        $minmax["kejuruan_rendah"][2] = DB::table('nilai')->where("tahun_ajaran", "2017/2018")->min('nilai_kejuruan');
        $minmax["kejuruan_rendah"][3] = DB::table('nilai')->where("tahun_ajaran", "2018/2019")->min('nilai_kejuruan');

        return $minmax;
    }

    public function getJk()
    {
        $jk["lakilaki"][0] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2015/2016", "jenis_kelamin" => "L", "kelas_id" => "1"])->get()->count();
        $jk["lakilaki"][1] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2015/2016", "jenis_kelamin" => "L", "kelas_id" => "2"])->get()->count();
        $jk["lakilaki"][2] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2015/2016", "jenis_kelamin" => "L", "kelas_id" => "3"])->get()->count();

        $jk["lakilaki"][3] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2016/2017", "jenis_kelamin" => "L", "kelas_id" => "1"])->get()->count();
        $jk["lakilaki"][4] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2016/2017", "jenis_kelamin" => "L", "kelas_id" => "2"])->get()->count();
        $jk["lakilaki"][5] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2016/2017", "jenis_kelamin" => "L", "kelas_id" => "3"])->get()->count();

        $jk["lakilaki"][6] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2017/2018", "jenis_kelamin" => "L", "kelas_id" => "1"])->get()->count();
        $jk["lakilaki"][7] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2017/2018", "jenis_kelamin" => "L", "kelas_id" => "2"])->get()->count();
        $jk["lakilaki"][8] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2017/2018", "jenis_kelamin" => "L", "kelas_id" => "3"])->get()->count();

        $jk["lakilaki"][9] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2018/2019", "jenis_kelamin" => "L", "kelas_id" => "1"])->get()->count();
        $jk["lakilaki"][10] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2018/2019", "jenis_kelamin" => "L", "kelas_id" => "2"])->get()->count();
        $jk["lakilaki"][11] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2018/2019", "jenis_kelamin" => "L", "kelas_id" => "3"])->get()->count();

        $jk["perempuan"][0] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2015/2016", "jenis_kelamin" => "P", "kelas_id" => "1"])->get()->count();
        $jk["perempuan"][1] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2015/2016", "jenis_kelamin" => "P", "kelas_id" => "2"])->get()->count();
        $jk["perempuan"][2] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2015/2016", "jenis_kelamin" => "P", "kelas_id" => "3"])->get()->count();

        $jk["perempuan"][3] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2016/2017", "jenis_kelamin" => "P", "kelas_id" => "1"])->get()->count();
        $jk["perempuan"][4] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2016/2017", "jenis_kelamin" => "P", "kelas_id" => "2"])->get()->count();
        $jk["perempuan"][5] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2016/2017", "jenis_kelamin" => "P", "kelas_id" => "3"])->get()->count();

        $jk["perempuan"][6] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2017/2018", "jenis_kelamin" => "P", "kelas_id" => "1"])->get()->count();
        $jk["perempuan"][7] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2017/2018", "jenis_kelamin" => "P", "kelas_id" => "2"])->get()->count();
        $jk["perempuan"][8] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2017/2018", "jenis_kelamin" => "P", "kelas_id" => "3"])->get()->count();

        $jk["perempuan"][9] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2018/2019", "jenis_kelamin" => "P", "kelas_id" => "1"])->get()->count();
        $jk["perempuan"][10] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2018/2019", "jenis_kelamin" => "P", "kelas_id" => "2"])->get()->count();
        $jk["perempuan"][11] = DB::table('nilai')->join('siswa', 'siswa.id', '=', 'nilai.siswa_id')->where(["tahun_ajaran" => "2018/2019", "jenis_kelamin" => "P", "kelas_id" => "3"])->get()->count();

        return $jk;
    }
}
