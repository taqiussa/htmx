@props(['listKelas', 'kelas_id'])
<div class="flex flex-col capitalize text-slate-600">
    <div>
        kelas
    </div>
    <select name="kelas_id" id="kelas_id"
        class="w-full border-gray-300 rounded-md shadow-md focus:border-emerald-500 focus:ring-emerald-300 shadow-emerald-300 focus:ring">
        <option value="">Pilih Kelas</option>
        @foreach ($listKelas as $kelas)
        <option
            value="{{ $kelas->id }}"
            @if (old('kelas_id') == $kelas->id || $kelas_id  == $kelas->id)
                selected
            @endif
            >
            {{ $kelas->nama }}
        </option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('kelas_id')" class="mt-2" />
</div>