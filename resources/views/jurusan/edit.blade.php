<x-app-layout>

<div class="p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-4">

        <h2 class="text-xl font-bold">
            Edit Jurusan
        </h2>

        <a href="{{ route('jurusan.index') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded">
            ← Kembali
        </a>

    </div>

    <form action="{{ route('jurusan.update',$jurusan->id) }}"
        method="POST">

        @csrf
        @method('PUT')

        <label>Kode Jurusan</label>
        <input type="text"
            name="kode_jurusan"
            value="{{ $jurusan->kode_jurusan }}"
            class="border p-2 w-full mt-2"
        >

        <label class="mt-4 block">Nama Jurusan</label>
        <input type="text"
            name="nama_jurusan"
            value="{{ $jurusan->nama_jurusan }}"
            class="border p-2 w-full mt-2"
        >

        <label class="mt-4 block">Akreditasi</label>
        <select name="akreditasi" class="border p-2 w-full mt-2">
            <option value="A" {{ $jurusan->akreditasi == 'A' ? 'selected' : '' }}>A</option>
            <option value="B" {{ $jurusan->akreditasi == 'B' ? 'selected' : '' }}>B</option>
            <option value="C" {{ $jurusan->akreditasi == 'C' ? 'selected' : '' }}>C</option>
        </select>

        <button class="bg-white-500 text-black px-4 py-2 mt-4 rounded">
            Update
        </button>

    </form>

</div>

</x-app-layout>