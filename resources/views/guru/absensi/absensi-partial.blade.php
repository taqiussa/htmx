<div id="absensi" class="pt-2 overflow-x-auto">
    <table class="w-full text-md text-slate-600">
        <thead class="text-md text-slate-600 bg-gray-50">
            <tr>
                <th scope='col' class="px-2 py-3">
                    No
                </th>
                <th scope='col' class="px-2 py-3 text-left">
                    Nama
                </th>
                <th scope='col' class="px-2 py-3 text-left">
                    Kehadiran
                </th>
                <th scope='col' class="px-2 py-3 text-left">
                    Guru
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listSiswa as $siswa)
            <tr class="bg-white border-b hover:bg-slate-300 odd:bg-slate-200">
                <td class="px-2 py-2 font-medium text-center text-slate-600">
                    {{ $loop->iteration }}
                </td>
                <td class="px-2 py-2 font-medium text-slate-600">
                    {{ $siswa->user?->name }}
                </td>
                <td class="px-2 py-2 font-medium text-slate-600">
                    <form hx-post="{{ route('absensi.simpan',['nis' => $siswa->nis]) }}" hx-trigger="change"
                        hx-include="*">
                        @csrf
                        <x-kehadiran :kehadiran="$siswa->absensi?->kehadiran_id ?? '' " :id="$siswa->nis" />
                    </form>
                </td>
                <td class="px-2 py-2 font-medium text-slate-600">
                    {{ $siswa->absensi?->guru?->name }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>