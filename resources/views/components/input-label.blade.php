@props(['disabled' => false, 'id', 'type', 'wireModel', 'check'])
<div class="mb-6">
    <label for="{{ !empty($id) ? $id : '' }}" class="block mb-2 text-1xl font-semibold text-gray-900 dark:text-gray-300">
        <i class="bi bi-shield-check mr-1 {{ !empty($check) ? 'text-green-500' : '' }}"></i>{{ $label }}
    </label>
    <input type="{{ $type }}" id="{{ !empty($id) ? $id : '' }}" wire:model="{{ !empty($wireModel) ? $wireModel : '' }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'shadow-lg bg-gray-50 border border-teal-700 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light']) !!}>
    @if(!empty($error))
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $error }}</p>
    @endif
</div>