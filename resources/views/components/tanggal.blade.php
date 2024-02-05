@props(['tanggal', 'label'])
<div class="flex flex-col capitalize text-slate-600">
    <div>
        Tanggal {{ $label ?? '' }}
    </div>
    <input type="date" {{ $attributes }} name='tanggal' id='tanggal' value="{{ old('tanggal') ?? $tanggal }}"
        class="w-full border-gray-300 rounded-md shadow-md focus:border-emerald-500 focus:ring-emerald-300 shadow-emerald-300 focus:ring">
    <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
</div>