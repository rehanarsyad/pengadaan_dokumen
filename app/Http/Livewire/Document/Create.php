<?php

namespace App\Http\Livewire\Document;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;

use Livewire\Component;
use Nette\Utils\Random;

class Create extends Component
{
    public $trackHidden, $idTag = 'hidden';
    public $surat_ppk_ke_pbj, $nama_kegiatan, $hpsrab, $tglspbj,
            $undangan_pengadaan_langsung, $tglupl, $terbilHPS, $tglpenawaran, $tglbaEva, $tglbhpl,
            $tgl_sp, $penyedia, $tglpenawar, $hrgpenawaran, $terbilangPenawaran, $peyettd, $jbtpenye,
            $ba_evaluasi_penawaran, $tglbaEvaTerbil, $babaphpl, $tglbhplterbil, $nilaiKontrak, $alamatPeye,
            $npwp, $terbilkontrak, $sppbj_ke_penyedia_ppk, $tglSSPBJ, $nomorSPK, $tglSPK, $tglBast, 
            $surat_perintah_mulai_kerja_spmk, $surat_pesanan, $tgl_spmk, $tgl_baphp, $ba_pemeriksaan_hasil_pekerjaan_baphp,
            $tgl_baphp_terbil, $bast, $tglBastTerbil, $an_bank, $no_rek, $bank_penyedia, $tglBapTerbil, $berita_acara_pembayaran_bap;

    public function render()
    {
        return view('livewire.document.create');
    }

    public function processForm() {
        dd($this->tglspbj);
    }

    public function generateDocument($name_template)
    {
        try {
            if($name_template == 'template-3-10') {
                $id_template = 1;
                $nama_file = '3_10_SP_BJ_(GD)';
                $templateProcessor = new TemplateProcessor('template/' . $nama_file . '.docx');
            }

            if($name_template == 'template-12-13') {
                $id_template = 2;
                $nama_file = '12_13_SPMK_(GD)';
                $templateProcessor = new TemplateProcessor('template/' . $nama_file . '.docx');
            }

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
            
            $name_document = preg_replace('/_/', " ", $nama_file);
            $nama_file = $nama_file. '-' . random_int(1, 10000);
            $templateProcessor->saveAs(storage_path('app/public/'. $nama_file.'.docx'));
            $newDoc = Document::create([
                'no_document' => 'PDK-' . random_int(2, 4),
                'name' => $name_document,
                'data' => json_encode($data),
                'fileName' =>  $nama_file.'.docx',
                'id_template' => $id_template
            ]);

            // return response()->download(storage_path('app/public/' . $nama_file. '.docx'));
            // return download($file)->deleteFileAfterSend()->with(['message' => 'File has been downloaded'])->header('Refresh', '2;url=' . route('home'));

            return redirect()->route('document')->with('flash.banner', 'Document Berhasil Ditambahkan');

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function click($id)
    {
        $this->trackHidden = $id;
        if($this->idTag == 'block')
        {
            return $this->idTag = 'hidden';
        }

        return $this->idTag = 'block';
    }
}
