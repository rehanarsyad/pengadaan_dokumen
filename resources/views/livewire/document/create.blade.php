<div>
  <div class="flex mb-5 {{ !empty($this->trackHidden) ? 'hidden' : 'block' }}">
    <div class="mr-3">
      <h3 wire:click="click('template-3-10')" class="font-mono cursor-pointer text-gray-50 rounded-lg bg-teal-600 p-3 text-center text-1xl">Template 3-10 SPBJ(GD)</h3>
    </div>
    <div class="mr-3">
      <h3 wire:click="click('template-12-13')" class="font-mono cursor-pointer text-gray-50 rounded-lg bg-teal-600 p-3 text-center text-1xl">Template 12 - 13. SPMK (GD)</h3>
    </div>
  </div>
  <div class="flex items-center {{ empty($this->trackHidden) ? 'hidden' : 'block' }} mb-6">
    <p wire:click="click('')" class="mx-auto w-40 text-center text-white h-8 rounded-lg bg-teal-600 cursor-pointer hover:bg-teal-700"><i class="bi bi-cursor-fill"></i> Select Template</p>
  </div>

  <div class="template3-10 {{ $this->trackHidden == 'template-3-10' ? $this->idTag : 'hidden' }}">
    @include('forminput.template3-10')
  </div>
  <div class="template-12-13 {{ $this->trackHidden == 'template-12-13' ? $this->idTag : 'hidden' }}">
    @include('forminput.template12-13')
  </div>
</div>
