<x-app-layout>

<div class="p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-4">

        <h2 class="text-xl font-bold">
            Data Mahasiswa
        </h2>

        <a href="{{ route('dashboard') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded">
            ← Dashboard
        </a>

    </div>

    <a href="{{ route('mahasiswa.create') }}"
       class="bg-white-500 text-black px-4 py-2 rounded">
        Tambah Mahasiswa
    </a>

    <table class="table-auto border mt-4 w-full">

        <thead>
            <tr>
                <th class="border px-4 py-2 text-center">No</th>
                <th class="border px-4 py-2 text-center">NIM</th>
                <th class="border px-4 py-2 text-center">Nama</th>
                <th class="border px-4 py-2 text-center">Jurusan</th>
                <th class="border px-4 py-2 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($mahasiswas as $index => $mhs)

            <tr>

                <td class="border px-4 py-2 text-center">
                    {{ $index + 1 }}
                </td>

                <td class="border px-4 py-2 text-center">
                    {{ $mhs->nim }}
                </td>

                <td class="border px-4 py-2">
                    {{ $mhs->nama }}
                </td>

                <td class="border px-4 py-2">
                    {{ $mhs->jurusan->nama_jurusan ?? '-' }}
                </td>

                <td class="border px-4 py-2 text-center">

                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                       class="bg-white-400 text-black px-3 py-1 rounded mr-2">
                        Edit
                    </a>

                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                          method="POST"
                          style="display:inline;"
                          onsubmit="return confirm('Yakin mau hapus data ini?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="bg-red-500 text-white px-3 py-1 rounded">
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