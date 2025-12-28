<a {{ $attributes->merge([
    'class' => '
        block w-full px-4 py-2 text-left text-sm font-medium
        !text-green-600 
        hover:bg-green-50 hover:text-green-700
        dark:hover:bg-gray-800 hover:!text-[#E8F5E]
        focus:outline-none focus:bg-green-100 dark:focus:bg-gray-700
        transition-colors duration-200 ease-in-out
    '
]) }}>
    {{ $slot }}
</a>
