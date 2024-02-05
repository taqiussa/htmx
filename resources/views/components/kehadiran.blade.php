@props(['kehadiran', 'id'])
<div class="flex flex-col capitalize text-slate-600">
    <select {{ $attributes }} name="kehadiran" id="{{ $id }}"
        class="w-auto border-gray-300 rounded-md shadow-md focus:border-emerald-500 focus:ring-emerald-300 focus:ring shadow-emerald-300">
        <option value="" selected>Pilih Kehadiran</option>
        <option value="1" @if(old('kehadiran')==1 || $kehadiran==1) selected @endif>
            Hadir
        </option>
        <option value="2" @if(old('kehadiran')==2 || $kehadiran==2) selected @endif>
            Sakit
        </option>
        <option value="3" @if(old('kehadiran')==3 || $kehadiran==3) selected @endif>
            Izin
        </option>
        <option value="4" @if(old('kehadiran')==4 || $kehadiran==4) selected @endif>
            Alpha
        </option>
        <option value="5" @if(old('kehadiran')==5 || $kehadiran==5) selected @endif>
            Bolos
        </option>
        <option value="6" @if(old('kehadiran')==6 || $kehadiran==6) selected @endif>
            Izin Pulang
        </option>
    </select>
</div>