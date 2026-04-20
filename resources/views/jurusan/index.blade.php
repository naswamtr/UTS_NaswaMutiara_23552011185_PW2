<x-app-layout>
    <div class="p-6">

        <!-- Header: Judul + Back -->
        <div class="flex justify-between items-center mb-4">

            <h2 class="text-xl font-bold">
                Data Jurusan
            </h2>

            <a href="{{ route('dashboard') }}"
               class="bg-gray-500 text-white px-4 py-2 rounded">
                ← Dashboard
            </a>

        </div>

        <a href="{{ route('jurusan.create') }}"
           class="bg-white-500 text-black px-4 py-2 rounded">
            Tambah Jurusan
        </a>

        <table class="table-auto border mt-4 w-full">
            <thead>
                <tr>
                    <th class="border px-4 py-2 text-center">No</th>
                    <th class="border px-4 py-2 text-center">Kode Jurusan</th>
                    <th class="border px-4 py-2 text-center">Nama Jurusan</th>
                    <th class="border px-4 py-2 text-center">Akreditasi</th> <!-- ✅ -->
                    <th class="border px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($jurusans as $index => $jurusan)
                <tr>

                    <td class="border px-4 py-2 text-center">
                        {{ $index + 1 }}
                    </td>

                    <td class="border px-4 py-2 text-center">
                        {{ $jurusan->kode_jurusan }}
                    </td>

                    <td class="border px-4 py-2">
                        {{ $jurusan->nama_jurusan }}
                    </td>

                    <td class="border px-4 py-2 text-center">
                        {{ $jurusan->akreditasi }} 
                    </td>

                    <td class="border px-4 py-2 text-center">

                        <a href="{{ route('jurusan.edit', $jurusan->id) }}"
                           class="bg-white-400 text-black px-3 py-1 rounded mr-2">
                            Edit
                        </a>

                        <form action="{{ route('jurusan.destroy', $jurusan->id) }}"
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