<a {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-teal-400 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-teal-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-teal-400 active:bg-teal-50 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</a>