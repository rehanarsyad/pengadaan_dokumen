<div>
    @if($document->id_template == 2)
    <div class="template3-10 mt-5">
        @include('forminput.template12-13')
    </div>
    @endif
    <div class="template-12-13 {{ $this->trackHidden == 'template-12-13' ? $this->idTag : 'hidden' }}">
    </div>
</div>
  