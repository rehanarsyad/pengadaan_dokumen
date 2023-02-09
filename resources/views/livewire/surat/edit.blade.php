<div>
    
<form wire:submit.prevent="processUpdate">
    @csrf
  <x-input-label type="date" id="date_signin" wireModel="date_signin" class="{{ $errors->get('date_signin') ? 'border-red-500' : '' }}">
    <x-slot name="label">
        Tanggal Masuk
    </x-slot>
    
    @error('date_signin')
    <x-slot name="error">
        {{ $message }}
    </x-slot>
    @enderror
  </x-input-label>

  <x-input-label type="time" id="hour" wireModel="hour" class="{{ $errors->get('hour') ? 'border-red-500' : '' }}">
    <x-slot name="label">
        Jam
    </x-slot>

    @error('hour')
    <x-slot name="error">
        {{ $message }}
    </x-slot>
    @enderror
  </x-input-label>

  <x-input-label type="text" id="activity" wireModel="activity" class="{{ $errors->get('activity') ? 'border-red-500' : '' }}">
    <x-slot name="label">
        Kegiatan
    </x-slot>

    @error('activity')
    <x-slot name="error">
        {{ $message }}
    </x-slot>
    @enderror
  </x-input-label>

  <x-input-label type="text" id="location" wireModel="location" class="{{ $errors->get('location') ? 'border-red-500' : '' }}">
    <x-slot name="label">
        Lokasi
    </x-slot>

    @error('location')
    <x-slot name="error">
        {{ $message }}
    </x-slot>
    @enderror

  </x-input-label>
  <x-input-label type="text" id="odp_invite" wireModel="odp_invite" class="{{ $errors->get('odp_invite') ? 'border-red-500' : '' }}">
    <x-slot name="label">
        ODP Yang Mengundang
    </x-slot>

    @error('odp_invite')
    <x-slot name="error">
        {{ $message }}
    </x-slot>
    @enderror
  </x-input-label>
  
  <x-teal-button type="submit">
    Submit
  </x-teal-button>
</form>

</div>