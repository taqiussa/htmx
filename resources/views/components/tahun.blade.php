@props(['tahun'])
<div class="flex flex-col capitalize text-slate-600">
    <div>
        tahun
    </div>
    <select {{ $attributes }} name="tahun" id="tahun"
        class="w-full border-gray-300 rounded-md shadow-md focus:border-emerald-500 focus:ring-emerald-300 shadow-emerald-300 focus:ring">
        <option value="">Pilih Tahun</option>
        @for ($i = 2020; $i < gmdate('Y'); $i++) <option value="{{ $i + 1 . ' / ' . ($i + 2) }}" @if (old('tahun')==($i
            + 1 . ' / ' . ($i + 2)) || $tahun==($i + 1 . ' / ' . ($i + 2))) selected @endif>
            {{ $i + 1 . ' / ' . ($i + 2) }}
            </option>
            @endfor
    </select>
    <x-input-error :messages="$errors->get('tahun')" class="mt-2" />
</div>