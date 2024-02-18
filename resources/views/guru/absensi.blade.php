<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Absensi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-5 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <form class="grid grid-cols-4 gap-2" hx-get="{{ route('absensi-partial') }}" hx-trigger="change"
                    hx-target="#absensi">
                    <x-tanggal :tanggal="$tanggal" />
                    <x-tahun :tahun="$tahun"  />
                    <x-kelas :listKelas="$listKelas" :kelas_id="$kelas_id" />
                    <x-jam :jam="$jam" />
                </form>
                <form hx-post="{{ route('absensi.simpan') }}" hx-include="*" hx-target="#full">
                    <x-primary-button class="mt-5">
                        {{ __('Set Hadir') }}
                    </x-primary-button>
                </form>
                <div id="absensi" class="pt-2 overflow-x-auto">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>