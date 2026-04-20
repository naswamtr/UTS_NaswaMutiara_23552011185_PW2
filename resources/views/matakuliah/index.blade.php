<x-app-layout>

<div class="p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-4">

        <h2 class="text-xl font-bold">
            Data Matakuliah
        </h2>

        <a href="{{ route('dashboard') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded">
            ← Dashboard
        </a>

    </div>

    <a href="{{ route('matakuliah.create') }}"
        class="bg-white-500 text-black px-4 py-2 rounded">
        Tambah Matakuliah
    </a>

    <table class="table-auto border mt-4 w-full">

        <thead>
            <tr>
                <th class="border px-4 py-2">No</th>
                <th class="border px-4 py-2">Kode</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">SKS</th>
                <th class="border px-4 py-2">Jurusan</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($matakuliahs as $index => $matakuliah)

            <tr>

                <td class="border px-4 py-2">
                {{ $index + 1 }}
                </td>

                <td class="border px-4 py-2">
                {{ $matakuliah->kode_matakuliah }}
                </td>

                <td class="border px-4 py-2">
                {{ $matakuliah->nama_matakuliah }}
                </td>

                <td class="border px-4 py-2">
                {{ $matakuliah->sks }}
                </td>

                <td class="border px-4 py-2">
                {{ $matakuliah->jurusan->nama_jurusan ?? '-' }}
                </td>

                <td class="border px-4 py-2 text-center">

                    <a href="{{ route('matakuliah.edit', $matakuliah->id) }}"
                        class="bg-white-400 px-3 py-1 rounded">
                        Edit
                    </a>

                    <form action="{{ route('matakuliah.destroy',$matakuliah->id) }}"
                        method="POST"
                        style="display:inline"
                        onsubmit="return confirm('Yakin mau hapus data ini?')">

                        @csrf
                        @method('DELETE')

                        <button class="bg-red-500 text-white px-3 py-1 rounded">
                        Hapus
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

</x-app-layout>