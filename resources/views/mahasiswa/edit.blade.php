<x-app-layout>

<div class="p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-4">

        <h2 class="text-xl font-bold">
            Edit Mahasiswa
        </h2>

        <a href="{{ route('mahasiswa.index') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded">
            ← Kembali
        </a>

    </div>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label class="block font-medium">
                NIM
            </label>

            <input type="text"
                   name="nim"
                   value="{{ $mahasiswa->nim }}"
                   class="border px-3 py-2 w-full rounded"
                   required>

        </div>

        <div class="mb-4">

            <label class="block font-medium">
                Nama
            </label>

            <input type="text"
                   name="nama"
                   value="{{ $mahasiswa->nama }}"
                   class="border px-3 py-2 w-full rounded"
                   required>

        </div>

        <div class="mb-4">

            <label class="block font-medium">
                Jurusan
            </label>

            <select name="jurusan_id"
                    class="border px-3 py-2 w-full rounded"
                    required>

                <option value="">
                    -- Pilih Jurusan --
                </option>

                @foreach ($jurusans as $jurusan)

                <option value="{{ $jurusan->id }}"
                    {{ $mahasiswa->jurusan_id == $jurusan->id ? 'selected' : '' }}>

                    {{ $jurusan->nama_jurusan }}

                </option>

                @endforeach

            </select>

        </div>

        <button type="submit"
                class="bg-white-400 text-black px-4 py-2 rounded">
            Update
        </button>

    </form>

</div>

</x-app-layout>