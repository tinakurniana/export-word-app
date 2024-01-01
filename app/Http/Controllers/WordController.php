<?php

namespace App\Http\Controllers;

use ZipArchive;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WordController extends Controller
{
    public function index(Request $request)
    {
        $this->risapat($request);
        $this->lampiranRisapat($request);
        $this->lampiran2Risapat($request);
        $this->juspeng($request);
        $this->suratPenetapan($request);
        $this->lampiranSuratPenetapan($request);
        $this->boq($request);
        $this->lap_pemberi_tugas($request);
        $this->createZip();
        return response()->download(public_path('Surat.zip'));
    }

    public function risapat(Request $request)
    {
        // dd($request->all());
        $judul_risapat = $request->judul_risapat;
        $no_risapat = $request->no_risapat;

        $tgl_risapat = $request->tgl_risapat;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_risapat)->translatedFormat('l /d F Y');
        $tgl_risapat = $date;

        $peserta_rapat = $request->peserta_rapat;
        $ketua_mitra = $request->ketua_mitra;
        $admin_mitra = $request->admin_mitra;
        $pks_khs = $request->pks_khs;
        $no_pks_khs = $request->no_pks_khs;

        $tgl_pks_khs = $request->tgl_pks_khs;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_pks_khs)->translatedFormat('d F Y');
        $tgl_pks_khs = $date;

        $no_nde = $request->no_nde;

        $tgl_nde = $request->tgl_nde;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_nde)->translatedFormat('d F Y');
        $tgl_nde = $date;

        $perihal_nde = $request->judul_risapat;
        $no_juspeng_risapat = $request->no_juspeng;
        $undangan_lisan = $request->judul_risapat;
        $nilai_sp = $request->nilai_sp;
        $terbilang_sp = $request->terbilang_sp;
        $nilai_sp_ppn = $request->nilai_sp_ppn;
        $terbilang_sp_ppn = $request->terbilang_sp_ppn;
        $jabatan_ketua_mitra = $request->jabatan_ketua_mitra;

        $nik_pihak_telkom = $request->nik_pihak_telkom;
        $jabatan_pihak_telkom = $request->jabatan_pihak_telkom;

        $pihak_telkom = null;
        if ($request->nama_pihak_telkom !== null) {
            $pihak_telkom = $request->nama_pihak_telkom;
        } else {
            $pihak_telkom = $request->pihak_telkom;
        }

        //script Php Word
        // Creating the new document
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Template Risalah Rapat.docx');

        //edit string
        // dd($jabatan_pihak_telkom);
        $phpWord->setValues([
            'judul_risapat' => $judul_risapat,
            'no_risapat' => $no_risapat,
            'tgl_risapat' => $tgl_risapat,
            'peserta_rapat' => $peserta_rapat,
            'ketua_mitra' => $ketua_mitra,
            'admin_mitra' => $admin_mitra,
            'pks_khs' => $pks_khs,
            'no_pks_khs' => $no_pks_khs,
            'tgl_pks_khs' => $tgl_pks_khs,
            'no_nde' => $no_nde,
            'tgl_nde' => $tgl_nde,
            'perihal_nde' => $perihal_nde,
            'no_juspeng_risapat' => $no_juspeng_risapat,
            'undangan_lisan' => $undangan_lisan,
            'nilai_sp' => $nilai_sp,
            'terbilang_sp' => $terbilang_sp,
            'nilai_sp_ppn' => $nilai_sp_ppn,
            'terbilang_sp_ppn' => $terbilang_sp_ppn,
            'jabatan_ketua_mitra' => $jabatan_ketua_mitra,
            'jabatan_pihak_telkom' => htmlspecialchars($jabatan_pihak_telkom),
            'nik_pihak_telkom' => $nik_pihak_telkom,
            'nama_pihak_telkom' => $pihak_telkom,
        ]);

        $phpWord->saveAs('Risalah Rapat.docx');
    }

    public function lampiranRisapat(Request $request)
    {
        $judul_lampiran = $request->judul_risapat;
        $nilai_sp_lampiran = $request->nilai_sp;
        $ppn_aja = $request->ppn_aja;
        $nilai_sp_ppn_lampiran = $request->nilai_sp_ppn;


        //script Php Word
        // Creating the new document
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Template Lampiran Risalah Rapat.docx');

        //edit string
        $phpWord->setValues([
            'judul_lampiran' => $judul_lampiran,
            'nilai_sp_lampiran' => $nilai_sp_lampiran,
            'ppn_aja' => $ppn_aja,
            'nilai_sp_ppn_lampiran' => $nilai_sp_ppn_lampiran
        ]);

        $phpWord->saveAs('Lampiran Risalah Rapat.docx');
    }

    public function lampiran2Risapat(Request $request)
    {
        $no_risapat3 = $request->no_risapat;

        $tgl_risapat4 = $request->tgl_risapat;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_risapat4)->translatedFormat('d F Y');
        $tgl_risapat4 = $date;

        $judul_lampiran2 = $request->judul_risapat;

        $peserta_rapat = null;
        if ($request->peserta_rapat == "Mitra Lainnya") {
            $peserta_rapat = $request->peserta_rapat_lainnya;
        } else {
            $peserta_rapat = $request->peserta_rapat;
        }

        $ketua_mitra2 = $request->ketua_mitra;
        $jabatan_ketua_mitra2 = $request->jabatan_ketua_mitra;

        //script Php Word
        // Creating the new document
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Template Lampiran 2 Risalah Rapat.docx');

        //edit string
        $phpWord->setValues([
            'no_risapat3' => $no_risapat3,
            'tgl_risapat4' => $tgl_risapat4,
            'judul_lampiran2' => $judul_lampiran2,
            'mitra_usaha3' => $peserta_rapat,
            'ketua_mitra2' => $ketua_mitra2,
            'jabatan_ketua_mitra2' => $jabatan_ketua_mitra2
        ]);

        $phpWord->saveAs('Lampiran 2 Risalah Rapat.docx');
    }

    public function juspeng(Request $request)
    {
        $no_juspeng = $request->no_juspeng;
        $nama_kegiatan = $request->judul_risapat;
        $no_akun = $request->no_akun;
        $jenis_anggaran = $request->jenis_anggaran;
        $total_anggaran = $request->nilai_sp;
        $terbilang_anggaran = $request->terbilang_sp;
        $saat_penggunaan = $request->saat_penggunaan;
        $no_juskeb = $request->no_juskeb;

        $tgl_juskeb = $request->tgl_juskeb;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_juskeb)->translatedFormat('d F Y');
        $tgl_juskeb = $date;

        $perihal_juskeb = $request->perihal_juskeb;
        $no_nde2 = $request->no_nde;

        $tgl_nde2 = $request->tgl_nde;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_nde2)->translatedFormat('d F Y');
        $tgl_nde2 = $date;

        $perihal_nde2 = $request->judul_risapat;
        $tersedia_anggaran = $request->saat_penggunaan;
        $no_pr = $request->no_pr;

        $tgl_pr = $request->tgl_pr;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_pr)->translatedFormat('d F Y');
        $tgl_pr = $date;

        $peserta_rapat = null;
        if ($request->peserta_rapat == "Mitra Lainnya") {
            $peserta_rapat = $request->peserta_rapat_lainnya;
        } else {
            $peserta_rapat = $request->peserta_rapat;
        }

        $pks_khs2 = $request->pks_khs;
        $no_pks_khs2 = $request->no_pks_khs;

        $tgl_pks_khs2 = $request->tgl_pks_khs;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_pks_khs2)->translatedFormat('d F Y');
        $tgl_pks_khs2 = $date;

        $waktu_penggunaan = $request->saat_penggunaan;
        $lamp_no_pr = $request->no_pr;

        $lamp_tgl_pr = $request->tgl_pr;
        // Set tgl ke Indonesia
        $date = Carbon::parse($lamp_tgl_pr)->translatedFormat('d F Y');
        $lamp_tgl_pr = $date;

        $tgl_ttd = $request->tgl_ttd;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_ttd)->translatedFormat('d F Y');
        $tgl_ttd = $date;

        $nilai_sp = $request->nilai_sp;

        //script Php Word
        // Creating the new document
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Template Justifikasi Pengadaan.docx');

        //edit string
        $phpWord->setValues([
            'no_juspeng' => $no_juspeng,
            'nama_kegiatan' => $nama_kegiatan,
            'no_akun' => $no_akun,
            'jenis_anggaran' => $jenis_anggaran,
            'total_anggaran' => $nilai_sp,
            'terbilang_anggaran' => $terbilang_anggaran,
            'saat_penggunaan' => $saat_penggunaan,
            'no_juskeb' => $no_juskeb,
            'tgl_juskeb' => $tgl_juskeb,
            'perihal_juskeb' => $perihal_juskeb,
            'no_nde2' => $no_nde2,
            'tgl_nde2' => $tgl_nde2,
            'perihal_nde2' => $perihal_nde2,
            'tersedia_anggaran' => $tersedia_anggaran,
            'no_pr' => $no_pr,
            'tgl_pr' => $tgl_pr,
            'mitra_usaha' => $peserta_rapat,
            'pks_khs2' => $pks_khs2,
            'no_pks_khs2' => $no_pks_khs2,
            'tgl_pks_khs2' => $tgl_pks_khs2,
            'waktu_penggunaan' => $waktu_penggunaan,
            'lamp_no_pr' => $lamp_no_pr,
            'lamp_tgl_pr' => $lamp_tgl_pr,
            'tgl_ttd' => $tgl_ttd
        ]);

        $phpWord->saveAs('Justifikasi Pengadaan.docx');
    }

    public function suratPenetapan(Request $request)
    {
        $no_surat = $request->no_surat;

        $tgl_surat = $request->tgl_surat;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_surat)->translatedFormat('d F Y');
        $tgl_surat = $date;

        $tujuan = $request->tujuan;
        $alamat_jalan = $request->alamat_jalan;
        $alamat_kota = $request->alamat_kota;
        $perihal = $request->judul_risapat;
        $pks_khs3 = $request->pks_khs;
        $no_pks_khs3 = $request->no_pks_khs;

        $tgl_pks_khs3 = $request->tgl_pks_khs;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_pks_khs3)->translatedFormat('d F Y');
        $tgl_pks_khs3 = $date;

        $perihal_risapat = $request->judul_risapat;
        $no_risapat2 = $request->no_risapat;

        $tgl_risapat2 = $request->tgl_risapat;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_risapat2)->translatedFormat('d F Y');
        $tgl_risapat2 = $date;

        $lingkup_pekerjaan = $request->judul_risapat;
        $harga_borongan = $request->nilai_sp;
        $terbilang_harga_borongan = $request->terbilang_sp;
        $borongan_ppn = $request->nilai_sp_ppn;
        $ppn_aja2 = $request->ppn_aja;

        //script Php Word
        // Creating the new document
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Template Surat Penetapan.docx');

        //edit string
        $phpWord->setValues([
            'no_surat' => $no_surat,
            'tgl_surat' => $tgl_surat,
            'tujuan' => $tujuan,
            'alamat_jalan' => $alamat_jalan,
            'alamat_kota' => $alamat_kota,
            'perihal' => $perihal,
            'pks_khs3' => $pks_khs3,
            'no_pks_khs3' => $no_pks_khs3,
            'tgl_pks_khs3' => $tgl_pks_khs3,
            'perihal_risapat' => $perihal_risapat,
            'no_risapat2' => $no_risapat2,
            'tgl_risapat2' => $tgl_risapat2,
            'lingkup_pekerjaan' => $lingkup_pekerjaan,
            'harga_borongan' => $harga_borongan,
            'terbilang_harga_borongan' => $terbilang_harga_borongan,
            'borongan_ppn' => $borongan_ppn,
            'ppn_aja2' => $ppn_aja2
        ]);

        $phpWord->saveAs('Surat Penetapan.docx');
    }

    public function lampiranSuratPenetapan(Request $request)
    {
        $judul_lampiran = $request->judul_risapat;
        $nilai_sp_lampiran = $request->nilai_sp;
        $ppn_aja = $request->ppn_aja;
        $nilai_sp_ppn_lampiran = $request->nilai_sp_ppn;

        //script Php Word
        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Template Lampiran Surat Penetapan.docx');

        //edit string
        $phpWord->setValues([
            'judul_lampiran' => $judul_lampiran,
            'nilai_sp_lampiran' => $nilai_sp_lampiran,
            'ppn_aja' => $ppn_aja,
            'nilai_sp_ppn_lampiran' => $nilai_sp_ppn_lampiran
        ]);

        $phpWord->saveAs('Lampiran Surat Penetapan.docx');
    }

    public function boq(Request $request)
    {
        $judul_lampiran = $request->judul_risapat;
        $nilai_sp_lampiran = $request->nilai_sp;
        $ppn_aja = $request->ppn_aja;
        $nilai_sp_ppn_lampiran = $request->nilai_sp_ppn;

        //script Php Word
        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Template BoQ.docx');

        //edit string
        $phpWord->setValues([
            'judul_lampiran' => $judul_lampiran,
            'nilai_sp_lampiran' => $nilai_sp_lampiran,
            'ppn_aja' => $ppn_aja,
            'nilai_sp_ppn_lampiran' => $nilai_sp_ppn_lampiran
        ]);

        $phpWord->saveAs('BoQ.docx');
    }

    public function lap_pemberi_tugas(Request $request)
    {
        $no_surat_laporan = $request->no_surat_laporan;
        $judul_pengadaan = $request->judul_risapat;
        $no_nde3 = $request->no_nde;

        $tgl_nde3 = $request->tgl_nde;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_nde3)->translatedFormat('d F Y');
        $tgl_nde3 = $date;

        $perihal_nde3 = $request->judul_risapat;

        $tgl_risapat3 = $request->tgl_risapat;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_risapat3)->translatedFormat('d F Y');
        $tgl_risapat3 = $date;

        $total_anggaran2 = $request->nilai_sp;
        $terbilang_anggaran2 = $request->terbilang_sp;

        $tgl_pembuatan_laporan = $request->tgl_ttd;
        // Set tgl ke Indonesia
        $date = Carbon::parse($tgl_pembuatan_laporan)->translatedFormat('d F Y');
        $tgl_pembuatan_laporan = $date;

        $peserta_rapat = null;
        if ($request->peserta_rapat == "Mitra Lainnya") {
            $peserta_rapat = $request->peserta_rapat_lainnya;
        } else {
            $peserta_rapat = $request->peserta_rapat;
        }

        $mgr_terkait = $request->mgr_terkait;

        //script Php Word
        // Creating the new document
        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('Template Laporan Pemberi Tugas.docx');

        //edit string
        $phpWord->setValues([
            'no_surat_laporan' => $no_surat_laporan,
            'judul_pengadaan' => $judul_pengadaan,
            'no_nde3' => $no_nde3,
            'tgl_nde3' => $tgl_nde3,
            'perihal_nde3' => $perihal_nde3,
            'tgl_risapat3' => $tgl_risapat3,
            'mitra_usaha2' => $peserta_rapat,
            'total_anggaran2' => $total_anggaran2,
            'terbilang_anggaran2' => $terbilang_anggaran2,
            'tgl_pembuatan_laporan' => $tgl_pembuatan_laporan,
            'mgr_terkait' => $mgr_terkait
        ]);

        $phpWord->saveAs('Laporan Pemberi Tugas.docx');
    }

    public function createZip()
    {
        $zip = new ZipArchive;
        $zipFileName = 'Surat.zip';

        if ($zip->open(public_path($zipFileName), ZipArchive::CREATE) === TRUE) {
            $filesToZip = [
                public_path('Risalah Rapat.docx'),
                public_path('Lampiran Risalah Rapat.docx'),
                public_path('Lampiran 2 Risalah Rapat.docx'),
                public_path('Justifikasi Pengadaan.docx'),
                public_path('Surat Penetapan.docx'),
                public_path('Lampiran Surat Penetapan.docx'),
                public_path('BoQ.docx'),
                public_path('Laporan Pemberi Tugas.docx')
            ];

            foreach ($filesToZip as $file) {
                $zip->addFile($file, basename($file));
            }

            $zip->close();
        } else {
            return "Failed to create the zip file.";
        }
    }
}
