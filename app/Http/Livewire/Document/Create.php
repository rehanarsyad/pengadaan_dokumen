<?php

namespace App\Http\Livewire\Document;
use PhpOffice\PhpWord\TemplateProcessor;

use Livewire\Component;

class Create extends Component
{
    public $surat_ppk_ke_pbj, $nama_kegiatan, $hpsrab, $tglspbj,
            $undangan_pengadaan_langsung, $tglupl, $terbilHPS, $tglpenawaran, $tglbaEva, $tglbhpl,
            $tgl_sp, $penyedia, $tglpenawar, $hrgpenawaran, $terbilangPenawaran, $peyettd, $jbtpenye,
            $ba_evaluasi_penawaran, $tglbaEvaTerbil, $babaphpl, $tglbhplterbil, $nilaiKontrak, $alamatPeye,
            $npwp, $terbilkontrak, $sppbj_ke_penyedia_ppk, $tglSSPBJ, $nomorSPK, $tglSPK, $tglBast;

    public function render()
    {
        return view('livewire.document.create');
    }

    public function processForm() {
        dd($this->tglspbj);
    }

    public function generateDocument()
    {
        try {
            $templateProcessor = new TemplateProcessor('template/3_10_SP_BJ_(GD).docx');

            $data = [
                'surat_ppk_ke_pbj' => $this->surat_ppk_ke_pbj,
                'nama_kegiatan' => $this->nama_kegiatan,
                'hpsrab' => $this->hpsrab,
                'tglspbj' => $this->tglspbj,
                'undangan_pengadaan_langsung' => $this->undangan_pengadaan_langsung,
                'tglupl' => $this->tglupl,
                'Penyedia' => $this->penyedia,
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
                'tglSPK' => $this->tglSPK
            ];

            foreach ($data as $key => $value) {
                $templateProcessor->setValue($key, $value);
            }
            $templateProcessor->saveAs('output.docx');
            
            return response()->download('output.docx');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
