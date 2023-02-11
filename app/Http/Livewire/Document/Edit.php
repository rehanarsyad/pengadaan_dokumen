<?php

namespace App\Http\Livewire\Document;

use App\Models\Document;
use Livewire\Component;
use PhpOffice\PhpWord\TemplateProcessor;

class Edit extends Component
{
    public $trackHidden, $idTag, $document;
    public $surat_ppk_ke_pbj, $nama_kegiatan, $hpsrab, $tglspbj,
            $undangan_pengadaan_langsung, $tglupl, $terbilHPS, $tglpenawaran, $tglbaEva, $tglbhpl,
            $tgl_sp, $penyedia, $tglpenawar, $hrgpenawaran, $terbilangPenawaran, $peyettd, $jbtpenye,
            $ba_evaluasi_penawaran, $tglbaEvaTerbil, $babaphpl, $tglbhplterbil, $nilaiKontrak, $alamatPeye,
            $npwp, $terbilkontrak, $sppbj_ke_penyedia_ppk, $tglSSPBJ, $nomorSPK, $tglSPK, $tglBast, 
            $surat_perintah_mulai_kerja_spmk, $surat_pesanan, $tgl_spmk, $tgl_baphp, $ba_pemeriksaan_hasil_pekerjaan_baphp,
            $tgl_baphp_terbil, $bast, $tglBastTerbil, $an_bank, $no_rek, $bank_penyedia, $tglBapTerbil, $berita_acara_pembayaran_bap;

    public function render()
    {
        return view('livewire.document.edit');
    }

    public function mount($document) {
        $this->document = $document;
        $data = json_decode($document->data);
        $this->fill([
            'surat_ppk_ke_pbj' => $data->surat_ppk_ke_pbj,
            'nama_kegiatan' => $data->nama_kegiatan,
            'hpsrab' => $data->hpsrab,
            'tglspbj' => $data->tglspbj,
            'undangan_pengadaan_langsung' => $data->undangan_pengadaan_langsung,
            'tglupl' => $data->tglupl,
            'penyedia' => $data->penyedia,
            'terbilHPS' => $data->terbilHPS,
            'tglpenawaran' => $data->tglpenawaran,
            'tglbaEva' => $data->tglbaEva,
            'tglbhpl' => $data->tglbhpl,
            'tgl_sp' => $data->tgl_sp,
            'tglpenawar' => $data->tglpenawar,
            'hrgpenawaran' => $data->hrgpenawaran,
            'terbilangPenawaran' => $data->terbilangPenawaran,
            'peyettd' => $data->peyettd,
            'jbtpenye' => $data->jbtpenye,
            'ba_evaluasi_penawaran' => $data->ba_evaluasi_penawaran,
            'tglbaEvaTerbil' => $data->tglbaEvaTerbil,
            'babaphpl' => $data->babaphpl,
            'tglbhplterbil' => $data->tglbhplterbil,
            'nilaiKontrak' => $data->nilaiKontrak,
            'alamatPeye' => $data->alamatPeye,
            'npwp' => $data->npwp,
            'terbilkontrak' => $data->terbilkontrak,
            'sppbj_ke_penyedia_ppk' => $data->sppbj_ke_penyedia_ppk,
            'tglSSPBJ' => $data->tglSSPBJ,
            'tglBast' => $data->tglBast,
            'nomorSPK' => $data->nomorSPK,
            'tglSPK' => $data->tglSPK,
            'surat_perintah_mulai_kerja_spmk' => $data->surat_perintah_mulai_kerja_spmk,
            'surat_pesanan' => $data->surat_pesanan,
            'tgl_spmk' => $data->tgl_spmk,
            'tgl_baphp' => $data->tgl_baphp,
            'ba_pemeriksaan_hasil_pekerjaan_baphp' => $data->ba_pemeriksaan_hasil_pekerjaan_baphp,
            'tgl_baphp_terbil' => $data->tgl_baphp_terbil,
            'bast' => $data->bast,
            'tglBastTerbil' => $data->tglBastTerbil,
            'an_bank' => $data->an_bank,
            'no_rek' => $data->no_rek,
            'bank_penyedia' => $data->bank_penyedia,
            'tglBapTerbil' => $data->tglBapTerbil,
            'berita_acara_pembayaran_bap' => $data->berita_acara_pembayaran_bap
        ]);
    }

    public function generateDocument()
    {
        if($this->document->id_template == 2)
        {
            $nama_file = '12_13_SPMK_(GD)';
        }
        $templateProcessor = new TemplateProcessor('template/' . $nama_file . '.docx');


        $data = [
            'surat_ppk_ke_pbj' => $this->surat_ppk_ke_pbj,
            'nama_kegiatan' => $this->nama_kegiatan,
            'hpsrab' => $this->hpsrab,
            'tglspbj' => $this->tglspbj,
            'undangan_pengadaan_langsung' => $this->undangan_pengadaan_langsung,
            'tglupl' => $this->tglupl,
            'penyedia' => $this->penyedia,
            'terbilHPS' => $this->terbilHPS,
            'tglpenawaran' => $this->tglpenawaran,
            'tglbaEva' => $this->tglbaEva,
            'tglbhpl' => $this->tglbhpl,
            'tgl_sp' => $this->tgl_sp,
            'tglpenawar' => $this->tglpenawar,
            'hrgpenawaran' => $this->hrgpenawaran,
            'terbilangPenawaran' => $this->terbilangPenawaran,
            'peyettd' => $this->peyettd,
            'jbtpenye' => $this->jbtpenye,
            'ba_evaluasi_penawaran' => $this->ba_evaluasi_penawaran,
            'tglbaEvaTerbil' => $this->tglbaEvaTerbil,
            'babaphpl' => $this->babaphpl,
            'tglbhplterbil' => $this->tglbhplterbil,
            'nilaiKontrak' => $this->nilaiKontrak,
            'alamatPeye' => $this->alamatPeye,
            'npwp' => $this->npwp,
            'terbilkontrak' => $this->terbilkontrak,
            'sppbj_ke_penyedia_ppk' => $this->sppbj_ke_penyedia_ppk,
            'tglSSPBJ' => $this->tglSSPBJ,
            'tglBast' => $this->tglBast,
            'nomorSPK' => $this->nomorSPK,
            'tglSPK' => $this->tglSPK,
            'surat_perintah_mulai_kerja_spmk' => $this->surat_perintah_mulai_kerja_spmk,
            'surat_pesanan' => $this->surat_pesanan,
            'tgl_spmk' => $this->tgl_spmk,
            'tgl_baphp' => $this->tgl_baphp,
            'ba_pemeriksaan_hasil_pekerjaan_baphp' => $this->ba_pemeriksaan_hasil_pekerjaan_baphp,
            'tgl_baphp_terbil' => $this->tgl_baphp_terbil,
            'bast' => $this->bast,
            'tglBastTerbil' => $this->tglBastTerbil,
            'an_bank' => $this->an_bank,
            'no_rek' => $this->no_rek,
            'bank_penyedia' => $this->bank_penyedia,
            'tglBapTerbil' => $this->tglBapTerbil,
            'berita_acara_pembayaran_bap' => $this->berita_acara_pembayaran_bap
        ];

        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }
        
        $nama_file = $nama_file. '-' . random_int(1, 10000);
        $templateProcessor->saveAs(storage_path('app/public/'. $nama_file.'.docx'));
        $this->document->update([
            'data' => json_encode($data),
        ]);

        return redirect('/admin/document/edit/'. $this->document->id)->with('flash.banner', 'Document Berhasil diedit');

    }
}
