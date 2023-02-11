<div class="flex-col">
    <form wire:submit.prevent="generateDocument('template-3-10')">
      @csrf
      {{-- NO 3 - 4 --}}
      <div class="flex mb-6">
        <div class="w-1/3 mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">3</p>
          </div>
          <x-input-label type="text" id="surat_ppk_ke_pbj" check="{{ $this->surat_ppk_ke_pbj }}" wireModel="surat_ppk_ke_pbj" class="{{ $errors->get('surat_ppk_ke_pbj') ? 'border-red-500' : '' }}">
            <x-slot name="label">
                Surat PPK Ke PBJ
            </x-slot>
            
            @error('surat_ppk_ke_pbj')
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

          <x-input-label type="text" id="hpsrab" check="{{ $this->hpsrab }}" wireModel="hpsrab" class="{{ $errors->get('hpsrab') ? 'border-red-500' : '' }}">
            <x-slot name="label">
              HPSRAB
            </x-slot>

            @error('hpsrab')
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

        <div class="w-2/3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">4</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-5">
              <x-input-label type="text" id="undangan_pengadaan_langsung" check="{{ $this->undangan_pengadaan_langsung }}" wireModel="undangan_pengadaan_langsung" class="{{ $errors->get('undangan_pengadaan_langsung') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Undangan Pengadaan Langsung
                </x-slot>
                
                @error('undangan_pengadaan_langsung')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglupl" check="{{ $this->tglupl }}" wireModel="tglupl" class="{{ $errors->get('tglupl') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal UPL
                </x-slot>

                @error('tglupl')
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

              <x-input-label type="text" id="hpsrab" check="{{ $this->hpsrab }}" wireModel="hpsrab" class="{{ $errors->get('hpsrab') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    HPSRAB
                </x-slot>

                @error('hpsrab')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
            </div>
            <div class="w-1/2">
              <x-input-label type="text" id="terbilHPS" check="{{ $this->terbilHPS }}" wireModel="terbilHPS" class="{{ $errors->get('terbilHPS') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Terbil HPS
                </x-slot>

                @error('terbilHPS')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglpenawaran" check="{{ $this->tglpenawaran }}" wireModel="tglpenawaran" class="{{ $errors->get('tglpenawaran') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal Penawaran
                </x-slot>

                @error('tglpenawaran')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglbaEva" check="{{ $this->tglbaEva }}" wireModel="tglbaEva" class="{{ $errors->get('tglbaEva') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal baEva
                </x-slot>
                
                @error('tglbaEva')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglbhpl" check="{{ $this->tglbhpl }}" wireModel="tglbhpl" class="{{ $errors->get('tglbhpl') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal BHPL
                </x-slot>
                
                @error('tglbhpl')
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

            </div>
          </div>
        </div>
      </div>
      {{-- END NO 3 - 4 --}}

      {{-- NO 5 - 6 --}}
      <div class="flex mb-6">
        {{-- NO 5 --}}
        <div class="w-1/2 mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">5</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-5">
              <x-input-label type="date" id="tglpenawar" check="{{ $this->tglpenawar }}" wireModel="tglpenawar" class="{{ $errors->get('tglpenawar') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal Penawar
                </x-slot>
                
                @error('tglpenawar')
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

              <x-input-label type="text" id="undangan_pengadaan_langsung" check="{{ $this->undangan_pengadaan_langsung }}" wireModel="undangan_pengadaan_langsung" class="{{ $errors->get('undangan_pengadaan_langsung') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Undangan Pengadaan Langsung
                </x-slot>

                @error('undangan_pengadaan_langsung')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglupl" check="{{ $this->tglupl }}" wireModel="tglupl" class="{{ $errors->get('tglupl') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal UPL
                </x-slot>

                @error('tglupl')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
            </div>

            <div class="w-1/2">
              <x-input-label type="text" id="hrgpenawaran" check="{{ $this->hrgpenawaran }}" wireModel="hrgpenawaran" class="{{ $errors->get('hrgpenawaran') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Harga Penawaran
                </x-slot>

                @error('hrgpenawaran')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="terbilangPenawaran" check="{{ $this->terbilangPenawaran }}" wireModel="terbilangPenawaran" class="{{ $errors->get('terbilangPenawaran') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Terbilang Penawaran
                </x-slot>

                @error('terbilangPenawaran')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="peyettd" check="{{ $this->peyettd }}" wireModel="peyettd" class="{{ $errors->get('peyettd') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Peye TTD
                </x-slot>

                @error('peyettd')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="jbtpenye" check="{{ $this->jbtpenye }}" wireModel="jbtpenye" class="{{ $errors->get('jbtpenye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Jabatan Penye
                </x-slot>

                @error('jbtpenye')
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
        <div class="w-1/2 mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">6</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-5">
              <x-input-label type="text" id="ba_evaluasi_penawaran" check="{{ $this->ba_evaluasi_penawaran }}" wireModel="ba_evaluasi_penawaran" class="{{ $errors->get('ba_evaluasi_penawaran') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    BA Evaluasi Penawaran
                </x-slot>
                
                @error('ba_evaluasi_penawaran')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglbaEva" check="{{ $this->tglbaEva }}" wireModel="tglbaEva" class="{{ $errors->get('tglbaEva') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal baEva
                </x-slot>
                
                @error('tglbaEva')
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

              <x-input-label type="text" id="hpsrab" check="{{ $this->hpsrab }}" wireModel="hpsrab" class="{{ $errors->get('hpsrab') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  HPSRAB
                </x-slot>

                @error('hpsrab')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
            </div>

            <div class="w-1/2">
              <x-input-label type="text" id="terbilHPS" check="{{ $this->terbilHPS }}" wireModel="terbilHPS" class="{{ $errors->get('terbilHPS') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Terbilang HPS
                </x-slot>

                @error('terbilHPS')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglbaEvaTerbil" check="{{ $this->tglbaEvaTerbil }}" wireModel="tglbaEvaTerbil" class="{{ $errors->get('tglbaEvaTerbil') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal Ba Evaluasi Terbilang
                </x-slot>

                @error('tglbaEvaTerbil')
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

              <x-input-label type="text" id="hrgpenawaran" check="{{ $this->hrgpenawaran }}" wireModel="hrgpenawaran" class="{{ $errors->get('hrgpenawaran') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Harga Penawaran
                </x-slot>

                @error('hrgpenawaran')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>
            </div>
          </div>

        </div>
        {{-- END NO 6 --}}
      </div>
      {{-- END NO 5 -6 --}}

      <div class="flex mb-6">
        {{--  --}}
        <div class="w-2/3 mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">7</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-5">
              <x-input-label type="text" id="babaphpl" check="{{ $this->babaphpl }}" wireModel="babaphpl" class="{{ $errors->get('babaphpl') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    BABAPHPL
                </x-slot>
                
                @error('babaphpl')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglbhpl" check="{{ $this->tglbhpl }}" wireModel="tglbhpl" class="{{ $errors->get('tglbhpl') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Tanggal BHPL
                </x-slot>

                @error('tglbhpl')
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

              <x-input-label type="text" id="hpsrab" check="{{ $this->hpsrab }}" wireModel="hpsrab" class="{{ $errors->get('hpsrab') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  HPSRAB
                </x-slot>

                @error('hpsrab')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="text" id="terbilHPS" check="{{ $this->terbilHPS }}" wireModel="terbilHPS" class="{{ $errors->get('terbilHPS') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Terbilang HPS
                </x-slot>

                @error('terbilHPS')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglbhplterbil" check="{{ $this->tglbhplterbil }}" wireModel="tglbhplterbil" class="{{ $errors->get('tglbhplterbil') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal BHPL Terbilang
                </x-slot>

                @error('tglbhplterbil')
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

              <x-input-label type="text" id="hrgpenawaran" check="{{ $this->hrgpenawaran }}" wireModel="hrgpenawaran" class="{{ $errors->get('hrgpenawaran') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    Harga Penawaran
                </x-slot>

                @error('hrgpenawaran')
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

              <x-input-label type="text" id="npwp" check="{{ $this->npwp }}" wireModel="npwp" class="{{ $errors->get('npwp') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                    NPWP
                </x-slot>
                
                @error('npwp')
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

              <x-input-label type="text" id="sppbj_ke_penyedia_ppk" check="{{ $this->sppbj_ke_penyedia_ppk }}" wireModel="sppbj_ke_penyedia_ppk" class="{{ $errors->get('sppbj_ke_penyedia_ppk') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  SPPBJ Ke Penyedia PPK
                </x-slot>
                
                @error('sppbj_ke_penyedia_ppk')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="tglSSPBJ" check="{{ $this->tglSSPBJ }}" wireModel="tglSSPBJ" class="{{ $errors->get('tglSSPBJ') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Tanggal SSPBJ
                </x-slot>
                
                @error('tglSSPBJ')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

            </div>
          </div>
        </div>

        <div class="w-1/3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">8</p>
          </div>
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

          <x-input-label type="text" id="tglpenawaran" check="{{ $this->tglpenawaran }}" wireModel="tglpenawaran" class="{{ $errors->get('tglpenawaran') ? 'border-red-500' : '' }}">
            <x-slot name="label">
              Tanggal Penawaran
            </x-slot>

            @error('tglpenawaran')
            <x-slot name="error">
                {{ $message }}
            </x-slot>
            @enderror
          </x-input-label>

          <x-input-label type="date" id="nilaiKontrak" check="{{ $this->nilaiKontrak }}" wireModel="nilaiKontrak" class="{{ $errors->get('nilaiKontrak') ? 'border-red-500' : '' }}">
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

        </div>
      </div>

      <div class="flex mb-6">
        <div class="w-2/3 mr-3 mb-6 px-5 rounded-lg bg-gray-50 shadow-lg shadow-teal-600">
          <div class="number rounded-full bg-teal-600 w-10 h-10 relative -top-4 -left-7">
            <p class="text-center text-2xl text-white font-bold">9</p>
          </div>
          <div class="flex">
            <div class="w-1/2 mr-5">
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

              <x-input-label type="text" id="peyettd" check="{{ $this->peyettd }}" wireModel="peyettd" class="{{ $errors->get('peyettd') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Peye TTD
                </x-slot>

                @error('peyettd')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

            </div>
            <div class="w-1/2">

              <x-input-label type="text" id="jbtpenye" check="{{ $this->jbtpenye }}" wireModel="jbtpenye" class="{{ $errors->get('jbtpenye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Jabatan Penye
                </x-slot>

                @error('jbtpenye')
                <x-slot name="error">
                    {{ $message }}
                </x-slot>
                @enderror
              </x-input-label>

              <x-input-label type="date" id="alamatPeye" check="{{ $this->alamatPeye }}" wireModel="alamatPeye" class="{{ $errors->get('alamatPeye') ? 'border-red-500' : '' }}">
                <x-slot name="label">
                  Alamat Peye
                </x-slot>

                @error('alamatPeye')
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