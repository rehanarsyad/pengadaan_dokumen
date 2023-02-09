<div>
    
<form wire:submit.prevent="processUpdate">
    @csrf
  <x-input-label type="text" id="name" wireModel="name" class="{{ $errors->get('name') ? 'border-red-500' : '' }}">
    <x-slot name="label">
        Nama
    </x-slot>
    
    @error('name')
    <x-slot name="error">
        {{ $message }}
    </x-slot>
    @enderror
  </x-input-label>

  <x-input-label type="email" id="email" wireModel="email" class="{{ $errors->get('email') ? 'border-red-500' : '' }}">
    <x-slot name="label">
        Email
    </x-slot>

    @error('email')
    <x-slot name="error">
        {{ $message }}
    </x-slot>
    @enderror
  </x-input-label>
    <div class="mb-3">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
        <select id="countries" wire:model="role_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light {{ $errors->get('role_name') ? 'border-red-500' : '' }}">
            <option value="">Choose a role</option>
            @foreach ($role as $r)
            <option <?= $r->name == $role_name ? 'selected' : '' ?> value="{{ $r->name }}">{{ $r->name }}</option>
            @endforeach
        </select>
        @error('role_name')
          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
        @enderror
    </div>  

  
  <x-teal-button type="submit">
    Submit
  </x-teal-button>
</form>

</div>