<div class="flex flex-wrap -mx-3 mt-6">
    <div class="w-full px-3">
        <button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-3 text-white rounded-md bg-blue-600 hover:bg-blue-700 w-full uppercase']) }}>
            {{ $slot }}
        </button>
    </div>
</div>
