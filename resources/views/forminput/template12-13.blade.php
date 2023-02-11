<div class="flex-col">
    <form wire:submit.prevent="generateDocument('template-12-13')">
      @csrf
      {{-- NO 3 - 4 --}}
      <div class="flex mb-6">
        <div class="w-1/2 mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">4</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-5">
              <x-input-label type="text" id="surat_perintah_mulai_kerja_spmk" check="{{ $this->surat_perintah_mulai_kerja_spmk }}" wireModel="surat_perintah_mulai_kerja_spmk" class="{{ $errors->get('surat_perintah_mulai_kerja_spmk') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Surat Perintah Mulai Kerja (SPMK)
                </x-slot>
                
                @error('surat_perintah_mulai_kerja_spmk')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="nama_kegiatan" check="{{ $this->nama_kegiatan }}" wireModel="nama_kegiatan" class="{{ $errors->get('nama_kegiatan') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Nama Kegiatan
                </x-slot>

                @error('nama_kegiatan')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="surat_pesanan" check="{{ $this->surat_pesanan }}" wireModel="surat_pesanan" class="{{ $errors->get('surat_pesanan') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Surat Pesanan
                </x-slot>

                @error('surat_pesanan')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tgl_sp" check="{{ $this->tgl_sp }}" wireModel="tgl_sp" class="{{ $errors->get('tgl_sp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal SP
                </x-slot>

                @error('tgl_sp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="penyedia" check="{{ $this->penyedia }}" wireModel="penyedia" class="{{ $errors->get('penyedia') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Penyedia
                </x-slot>

                @error('penyedia')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
            </div>

            <div class="w-1/2">
              <x-input-label type="text" id="alamatPeye" check="{{ $this->alamatPeye }}" wireModel="alamatPeye" class="{{ $errors->get('alamatPeye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Alamat Peye
                </x-slot>

                @error('alamatPeye')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="peyettd" check="{{ $this->peyettd }}" wireModel="peyettd" class="{{ $errors->get('peyettd') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  TTD Penyedia
                </x-slot>

                @error('peyettd')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tgl_spmk" check="{{ $this->tgl_spmk }}" wireModel="tgl_spmk" class="{{ $errors->get('tgl_spmk') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal SPMK
                </x-slot>
                
                @error('tgl_spmk')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tgl_baphp" check="{{ $this->tgl_baphp }}" wireModel="tgl_baphp" class="{{ $errors->get('tgl_baphp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal BAPHP
                </x-slot>
                
                @error('tgl_baphp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

            </div>
          </div>
        </div>

        <div class="w-1/2 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">3</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-3">
              <x-input-label type="text" id="ba_pemeriksaan_hasil_pekerjaan_baphp" check="{{ $this->ba_pemeriksaan_hasil_pekerjaan_baphp }}" wireModel="ba_pemeriksaan_hasil_pekerjaan_baphp" class="{{ $errors->get('ba_pemeriksaan_hasil_pekerjaan_baphp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  BA Pemeriksaan Hasil Pekerjaan BAPHP
                </x-slot>
                
                @error('ba_pemeriksaan_hasil_pekerjaan_baphp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tgl_baphp" check="{{ $this->tgl_baphp }}" wireModel="tgl_baphp" class="{{ $errors->get('tgl_baphp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal BAPHP
                </x-slot>

                @error('tgl_baphp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tgl_baphp_terbil" check="{{ $this->tgl_baphp_terbil }}" wireModel="tgl_baphp_terbil" class="{{ $errors->get('tgl_baphp_terbil') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal BAPHP Terbilang
                </x-slot>

                @error('tgl_baphp_terbil')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror

              </x-input-label>

              <x-input-label type="text" id="nama_kegiatan" check="{{ $this->nama_kegiatan }}" wireModel="nama_kegiatan" class="{{ $errors->get('nama_kegiatan') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Nama Kegiatan
                </x-slot>

                @error('nama_kegiatan')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="peyettd" check="{{ $this->peyettd }}" wireModel="peyettd" class="{{ $errors->get('peyettd') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  TTD Penyedia
                </x-slot>

                @error('peyettd')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="jbtpenye" check="{{ $this->jbtpenye }}" wireModel="jbtpenye" class="{{ $errors->get('jbtpenye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Jabatan Penyedia
                </x-slot>

                @error('jbtpenye')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
            </div>
            <div class="w-1/2">

              <x-input-label type="text" id="alamatPeye" check="{{ $this->alamatPeye }}" wireModel="alamatPeye" class="{{ $errors->get('alamatPeye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Alamat Penyedia
                </x-slot>

                @error('alamatPeye')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="surat_pesanan" check="{{ $this->surat_pesanan }}" wireModel="surat_pesanan" class="{{ $errors->get('surat_pesanan') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Surat Pesanan
                </x-slot>
                
                @error('surat_pesanan')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tgl_sp" check="{{ $this->tgl_sp }}" wireModel="tgl_sp" class="{{ $errors->get('tgl_sp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal SP
                </x-slot>

                @error('tgl_sp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="nilaiKontrak" check="{{ $this->nilaiKontrak }}" wireModel="nilaiKontrak" class="{{ $errors->get('nilaiKontrak') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Nilai Kontrak
                </x-slot>

                @error('nilaiKontrak')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror

              </x-input-label>

              <x-input-label type="text" id="terbilkontrak" check="{{ $this->terbilkontrak }}" wireModel="terbilkontrak" class="{{ $errors->get('terbilkontrak') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Terbilang Kontrak
                </x-slot>

                @error('terbilkontrak')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglspbj" check="{{ $this->tglspbj }}" wireModel="tglspbj" class="{{ $errors->get('tglspbj') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal SPBJ
                </x-slot>

                @error('tglspbj')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
            </div>
          </div>
        </div>
      </div>
      {{-- END NO 3 - 4 --}}

      {{-- NO 5 - 6 --}}
      <div class="flex mb-6">
        {{-- NO 5 --}}
        <div class="w-2/3 mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">5</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-5">
              <x-input-label type="text" id="bast" check="{{ $this->bast }}" wireModel="bast" class="{{ $errors->get('bast') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    BAST
                </x-slot>
                
                @error('bast')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglBast" check="{{ $this->tglBast }}" wireModel="tglBast" class="{{ $errors->get('tglBast') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal Bast
                </x-slot>

                @error('tglBast')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglBastTerbil" check="{{ $this->tglBastTerbil }}" wireModel="tglBastTerbil" class="{{ $errors->get('tglBastTerbil') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal Bast Terbilang
                </x-slot>

                @error('tglBastTerbil')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="peyettd" check="{{ $this->peyettd }}" wireModel="peyettd" class="{{ $errors->get('peyettd') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    TTD Penyedia
                </x-slot>

                @error('peyettd')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="jbtpenye" check="{{ $this->jbtpenye }}" wireModel="jbtpenye" class="{{ $errors->get('jbtpenye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Jabatan Penyedia
                </x-slot>

                @error('jbtpenye')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
              
            </div>

            <div class="w-1/2">

              <x-input-label type="text" id="alamatPeye" check="{{ $this->alamatPeye }}" wireModel="alamatPeye" class="{{ $errors->get('alamatPeye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Alamat Peye
                </x-slot>

                @error('alamatPeye')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="surat_pesanan" check="{{ $this->surat_pesanan }}" wireModel="surat_pesanan" class="{{ $errors->get('surat_pesanan') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Surat Pesanan
                </x-slot>

                @error('surat_pesanan')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tgl_sp" check="{{ $this->tgl_sp }}" wireModel="tgl_sp" class="{{ $errors->get('tgl_sp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal SP
                </x-slot>

                @error('tgl_sp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="nama_kegiatan" check="{{ $this->nama_kegiatan }}" wireModel="nama_kegiatan" class="{{ $errors->get('nama_kegiatan') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Nama Kegiatan
                </x-slot>

                @error('nama_kegiatan')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="terbilkontrak" check="{{ $this->terbilkontrak }}" wireModel="terbilkontrak" class="{{ $errors->get('terbilkontrak') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Terbilang Kontrak
                </x-slot>

                @error('terbilkontrak')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
          
            </div>
          </div>
        </div>
        {{-- END NO 5 --}}

        {{-- NO 6 --}}
        <div class="w-1/3 mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">6</p>
          </div>

          <x-input-label type="text" id="bast" check="{{ $this->bast }}" wireModel="bast" class="{{ $errors->get('bast') ? 'border-red-500' : '' }}">
            <x-slot name="label">
                Bast
            </x-slot>
            
            @error('bast')
            <x-slot name="error">
                {{ $message }}
            </x-slot>
            @enderror
          </x-input-label>

          <x-input-label type="date" id="tglBast" check="{{ $this->tglBast }}" wireModel="tglBast" class="{{ $errors->get('tglBast') ? 'border-red-500' : '' }}">
            <x-slot name="label">
                Tanggal Bast
            </x-slot>
            
            @error('tglBast')
            <x-slot name="error">
                {{ $message }}
            </x-slot>
            @enderror
          </x-input-label>

          <x-input-label type="text" id="nama_kegiatan" check="{{ $this->nama_kegiatan }}" wireModel="nama_kegiatan" class="{{ $errors->get('nama_kegiatan') ? 'border-red-500' : '' }}">
            <x-slot name="label">
              Nama Kegiatan
            </x-slot>

            @error('nama_kegiatan')
            <x-slot name="error">
                {{ $message }}
            </x-slot>
            @enderror
          </x-input-label>

          <x-input-label type="text" id="peyettd" check="{{ $this->peyettd }}" wireModel="peyettd" class="{{ $errors->get('peyettd') ? 'border-red-500' : '' }}">
            <x-slot name="label">
              TTD Penyedia
            </x-slot>

            @error('peyettd')
            <x-slot name="error">
                {{ $message }}
            </x-slot>
            @enderror
          </x-input-label>

          <x-input-label type="text" id="jbtpenye" check="{{ $this->jbtpenye }}" wireModel="jbtpenye" class="{{ $errors->get('jbtpenye') ? 'border-red-500' : '' }}">
            <x-slot name="label">
              Jabatan Penyedia
            </x-slot>

            @error('jbtpenye')
            <x-slot name="error">
                {{ $message }}
            </x-slot>
            @enderror
          </x-input-label>
        {{-- END NO 6 --}}
        </div>
      </div>
      {{-- END NO 5 -6 --}}

      <div class="flex mb-6">
        {{--  --}}
        <div class="w-full mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">7</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-5">
              <x-input-label type="text" id="berita_acara_pembayaran_bap" check="{{ $this->berita_acara_pembayaran_bap }}" wireModel="berita_acara_pembayaran_bap" class="{{ $errors->get('berita_acara_pembayaran_bap') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Berita Acara Pembayaran BAP
                </x-slot>
                
                @error('berita_acara_pembayaran_bap')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglBapTerbil" check="{{ $this->tglBapTerbil }}" wireModel="tglBapTerbil" class="{{ $errors->get('tglBapTerbil') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal BAP Terbilang
                </x-slot>

                @error('tglBapTerbil')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="peyettd" check="{{ $this->peyettd }}" wireModel="peyettd" class="{{ $errors->get('peyettd') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    TTD Penyedia
                </x-slot>

                @error('peyettd')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="jbtpenye" check="{{ $this->jbtpenye }}" wireModel="jbtpenye" class="{{ $errors->get('jbtpenye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Jabatan Penyedia
                </x-slot>

                @error('jbtpenye')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="penyedia" check="{{ $this->penyedia }}" wireModel="penyedia" class="{{ $errors->get('penyedia') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Penyedia
                </x-slot>

                @error('penyedia')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="alamatPeye" check="{{ $this->alamatPeye }}" wireModel="alamatPeye" class="{{ $errors->get('alamatPeye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Alamat Penyedia
                </x-slot>

                @error('alamatPeye')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="nomorSPK" check="{{ $this->nomorSPK }}" wireModel="nomorSPK" class="{{ $errors->get('nomorSPK') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Nomor SPK
                </x-slot>

                @error('nomorSPK')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

            </div>
            <div class="w-1/2 mr-5">
              <x-input-label type="date" id="tglSPK" check="{{ $this->tglSPK }}" wireModel="tglSPK" class="{{ $errors->get('tglSPK') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal SPK
                </x-slot>
                
                @error('tglSPK')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="surat_pesanan" check="{{ $this->surat_pesanan }}" wireModel="surat_pesanan" class="{{ $errors->get('surat_pesanan') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Surat Pesanan
                </x-slot>

                @error('surat_pesanan')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tgl_sp" check="{{ $this->tgl_sp }}" wireModel="tgl_sp" class="{{ $errors->get('tgl_sp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal SP
                </x-slot>

                @error('tgl_sp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="nama_kegiatan" check="{{ $this->nama_kegiatan }}" wireModel="nama_kegiatan" class="{{ $errors->get('nama_kegiatan') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Nama Kegiatan
                </x-slot>

                @error('nama_kegiatan')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="nilaiKontrak" check="{{ $this->nilaiKontrak }}" wireModel="nilaiKontrak" class="{{ $errors->get('nilaiKontrak') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Nilai Kontrak
                </x-slot>

                @error('nilaiKontrak')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="terbilkontrak" check="{{ $this->terbilkontrak }}" wireModel="terbilkontrak" class="{{ $errors->get('terbilkontrak') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Terbilang Kontrak
                </x-slot>

                @error('terbilkontrak')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="ba_pemeriksaan_hasil_pekerjaan_baphp" check="{{ $this->ba_pemeriksaan_hasil_pekerjaan_baphp }}" wireModel="ba_pemeriksaan_hasil_pekerjaan_baphp" class="{{ $errors->get('ba_pemeriksaan_hasil_pekerjaan_baphp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    BA Pemeriksaan Hasil Pekerjaan BAPHP
                </x-slot>

                @error('ba_pemeriksaan_hasil_pekerjaan_baphp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

            </div>
            <div class="w-1/2">

              <x-input-label type="date" id="tgl_baphp" check="{{ $this->tgl_baphp }}" wireModel="tgl_baphp" class="{{ $errors->get('tgl_baphp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal BAPHP
                </x-slot>

                @error('tgl_baphp')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="bast" check="{{ $this->bast }}" wireModel="bast" class="{{ $errors->get('bast') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Bast
                </x-slot>

                @error('bast')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglBast" check="{{ $this->tglBast }}" wireModel="tglBast" class="{{ $errors->get('tglBast') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal Bast
                </x-slot>

                @error('tglBast')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="bank_penyedia" check="{{ $this->bank_penyedia }}" wireModel="bank_penyedia" class="{{ $errors->get('bank_penyedia') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Bank Penyedia
                </x-slot>
                
                @error('bank_penyedia')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="no_rek" check="{{ $this->no_rek }}" wireModel="no_rek" class="{{ $errors->get('no_rek') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Nomor Rekening
                </x-slot>
                
                @error('no_rek')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="an_bank" check="{{ $this->an_bank }}" wireModel="an_bank" class="{{ $errors->get('an_bank') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  An Bank
                </x-slot>
                
                @error('an_bank')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="flex mt-5 {{ empty($this->trackHidden) ? 'hidden' : 'blok' }}">
      <button class="mx-auto items-center p-2 bg-teal-600 rounded-md font-bold text-gray-200 uppercase tracking-widest shadow-lg hover:bg-teal-800 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-teal-400 active:bg-teal-50 hover:text-white disabled:opacity-25 transition">
        <i class="bi bi-layout-text-sidebar mr-2 text-1xl"></i>SIMPAN & CETAK
      </button>
    </form>
  </div>