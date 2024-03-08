@props(['name', 'type', 'label', 'id'])
<div>
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $label }}
    </label>
    <input name="{{ $name }}" id="{{ $id }}" {{ $attributes }}
        class="bg-gray-50 border  focus:outline-purple-500 border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:outline-purple-500 " />
    @error('email')
        <div class="text-red-500 text-xs">
            {{ $message }}
        </div>
    @enderror
</div>
