<x-app-layout>

<div class="p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-4">

        <h2 class="text-xl font-bold">
            Tambah Matakuliah
        </h2>

        <a href="{{ route('matakuliah.index') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded">
            ← Kembali
        </a>

    </div>

    <form action="{{ route('matakuliah.store') }}"
          method="POST">

        @csrf

    <label>Kode</label>

        <input type="text"
            name="kode_matakuliah"
            class="border w-full mb-3"
            placeholder="Contoh: KI01"
        >

    <label>Nama</label>

        <input type="text"
            name="nama_matakuliah"
            class="border w-full mb-3"
            placeholder="Contoh: Keamanan Informasi"
        >

    <label>SKS</label>

        <input type="number"
            name="sks"
            class="border w-full mb-3"
        >

    <label>Jurusan</label>

        <select name="jurusan_id"
            class="border w-full mb-3">

            @foreach($jurusans as $jurusan)

            <option value="{{ $jurusan->id }}">
                {{ $jurusan->nama_jurusan }}
            </option>

            @endforeach

        </select>

        <button
            class="bg-white-500 px-4 py-2 rounded">
            Simpan
        </button>

    </form>

</div>

</x-app-layout>