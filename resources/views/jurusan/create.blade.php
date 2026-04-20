<x-app-layout>

<div class="p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-4">

        <h2 class="text-xl font-bold">
            Tambah Jurusan
        </h2>

        <a href="{{ route('jurusan.index') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded">
            ← Kembali
        </a>

    </div>

    <form action="{{ route('jurusan.store') }}" method="POST">

        @csrf

        <label>Kode Jurusan</label>
        <input type="text"
            name="kode_jurusan"
            class="border p-2 w-full mt-2"
            placeholder="Contoh: TI"
        >

        <label class="mt-4 block">Nama Jurusan</label>
        <input type="text"
            name="nama_jurusan"
            class="border p-2 w-full mt-2"
            placeholder="Contoh: Teknik Informatika"
        >

        <label class="mt-4 block">Akreditasi</label>
        <select name="akreditasi" class="border p-2 w-full mt-2">
            <option value="">-- Pilih Akreditasi --</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>

        <button type="submit"
            class="bg-white-500 text-black px-4 py-2 mt-4 rounded">
            Simpan
        </button>

    </form>

</div>

</x-app-layout>