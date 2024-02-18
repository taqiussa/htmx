@props(['jam'])
<div class="flex flex-col capitalize text-slate-600">
    <div>
        jam
    </div>
    <select name="jam" id="jam"
        class="w-full border-gray-300 rounded-md shadow-md focus:border-emerald-500 focus:ring-emerald-300 shadow-emerald-300 focus:ring">
        <option value="">Pilih Jam</option>
        <option 
        value="1-2"
        @if (old('jam') == '1-2' || $jam == '1-2')
            selected
        @endif
        >
            1-2
        </option>
        <option 
        value="3-4"
        @if (old('jam') == '3-4' || $jam == '3-4')
            selected
        @endif
        >
            3-4
        </option>
        <option 
        value="5-6"
        @if (old('jam') == '5-6' || $jam == '5-6')
            selected
        @endif
        >
            5-6
        </option>
        <option 
        value="7-8"
        @if (old('jam') == '7-8' || $jam == '7-8')
            selected
        @endif
        >
            7-8
        </option>
    </select>
    <x-input-error :messages="$errors->get('jam')" class="mt-2" />
</div>