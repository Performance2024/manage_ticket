<div>
    <label for="{{ $custom_id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $label }}
    </label>
    <input type="{{ $type }}" id="{{ $custom_id }}" wire:model="value"
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
        placeholder="{{ $placeholder }}">
    @error('value')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
