<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">List Quality Control OVH Tonasa IV</h2>
                    <div class="flex justify-end mb-4">
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Tambahkan Data</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border">
                            <thead>
                                <tr class="bg-sky-500 text-white">
                                    <th class="px-4 py-2">Report ID</th>
                                    <th class="px-4 py-2">Inspektor</th>
                                    <th class="px-4 py-2">Tanggal Pengecekan</th>
                                    <th class="px-4 py-2">Area</th>
                                    <th class="px-4 py-2">Sub Area</th>
                                    <th class="px-4 py-2">Eksekutor</th>
                                    <th class="px-4 py-2">Deskripsi Temuan</th>
                                    <th class="px-4 py-2">Foto Temuan Sebelum</th>
                                    <th class="px-4 py-2">Foto Temuan Sesudah</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Close Date</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data Dummy -->
                                <tr>
                                    <td class="border px-4 py-2">QC-001</td>
                                    <td class="border px-4 py-2">John Doe</td>
                                    <td class="border px-4 py-2">2023-05-18</td>
                                    <td class="border px-4 py-2">Area 1</td>
                                    <td class="border px-4 py-2">Sub Area A</td>
                                    <td class="border px-4 py-2">Jane Smith</td>
                                    <td class="border px-4 py-2">Temuan 1</td>
                                    <td class="border px-4 py-2"><img src="{{ asset('images/sebelum1.png') }}" alt="Sebelum 1" class="w-16 h-16 mx-auto"></td>
                                    <td class="border px-4 py-2"><img src="{{ asset('images/sesudah1.png') }}" alt="Sesudah 1" class="w-16 h-16 mx-auto"></td>
                                    <td class="border px-4 py-2">Open</td>
                                    <td class="border px-4 py-2">-</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                        <a href="#" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
                                    </td>
                                </tr>
                                <!-- Tambahkan lebih banyak data dummy di sini -->
                                <tr>
                                    <td class="border px-4 py-2">QC-002</td>
                                    <td class="border px-4 py-2">Alice Brown</td>
                                    <td class="border px-4 py-2">2023-05-19</td>
                                    <td class="border px-4 py-2">Area 2</td>
                                    <td class="border px-4 py-2">Sub Area B</td>
                                    <td class="border px-4 py-2">Bob White</td>
                                    <td class="border px-4 py-2">Temuan 2</td>
                                    <td class="border px-4 py-2"><img src="{{ asset('images/sebelum2.png') }}" alt="Sebelum 2" class="w-16 h-16 mx-auto"></td>
                                    <td class="border px-4 py-2"><img src="{{ asset('images/sesudah2.png') }}" alt="Sesudah 2" class="w-16 h-16 mx-auto"></td>
                                    <td class="border px-4 py-2">Closed</td>
                                    <td class="border px-4 py-2">2023-05-20</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                        <a href="#" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
