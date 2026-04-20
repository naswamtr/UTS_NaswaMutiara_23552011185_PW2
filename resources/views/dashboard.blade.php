<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Sistem Akademik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="text-lg mb-6">
                        Menu CRUD Akademik
                    </h3>

                <div class="grid grid-cols-3 gap-6">

                    <!-- Jurusan -->
                    <a href="{{ route('jurusan.index') }}"
                    class="bg-white-500 text-black px-6 py-6 rounded-lg text-center 
                            border border-gray-200 shadow-sm 
                            hover:shadow-md hover:bg-white-600 transition">
                        Data Jurusan
                    </a>

                    <!-- Mahasiswa -->
                    <a href="{{ route('mahasiswa.index') }}"
                    class="bg-white-500 text-black px-6 py-6 rounded-lg text-center 
                            border border-gray-200 shadow-sm 
                            hover:shadow-md hover:bg-white-600 transition">
                        Data Mahasiswa
                    </a>

                    <!-- Matakuliah -->
                    <a href="{{ route('matakuliah.index') }}"
                    class="bg-white-500 text-black px-6 py-6 rounded-lg text-center 
                            border border-gray-200 shadow-sm 
                            hover:shadow-md hover:bg-white-600 transition">
                        Data Matakuliah
                    </a>

                </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>