<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Approval') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-4">
                        <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Tambahkan Data</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border">
                            <thead>
                                <tr class="bg-blue-500 text-white">
                                    <th class="px-4 py-2">UID</th>
                                    <th class="px-4 py-2">Inspektor</th>
                                    <th class="px-4 py-2">Deskripsi Pekerjaan</th>
                                    <th class="px-4 py-2">Area</th>
                                    <th class="px-4 py-2">TagNum</th>
                                    <th class="px-4 py-2">Dokumen</th>
                                    <th class="px-4 py-2">Input Date</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data Dummy -->
                                <tr>
                                    <td class="border px-4 py-2">QC-001</td>
                                    <td class="border px-4 py-2">John Doe</td>
                                    <td class="border px-4 py-2">Deskripsi Pekerjaan 1</td>
                                    <td class="border px-4 py-2">Area 1</td>
                                    <td class="border px-4 py-2">TAG-123</td>
                                    <td class="border px-4 py-2 flex justify-center items-center">
                                        <a href="{{ asset('documents/doc1.pdf') }}" class="text-blue-500">
                                            <i class="fas fa-file-pdf fa-2x"></i>
                                    <td class="border px-4 py-2">2023-05-18</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                        <a href="#" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">QC-002</td>
                                    <td class="border px-4 py-2">Alice Brown</td>
                                    <td class="border px-4 py-2">Deskripsi Pekerjaan 2</td>
                                    <td class="border px-4 py-2">Area 2</td>
                                    <td class="border px-4 py-2">TAG-456</td>
                                    <td class="border px-4 py-2 flex justify-center items-center">
                                        <a href="{{ asset('documents/doc2.pdf') }}" class="text-blue-500">
                                            <i class="fas fa-file-pdf fa-2x"></i>
                                        </a>
                                    </td>
                                    <td class="border px-4 py-2">2023-05-19</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                        <a href="#" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">QC-001</td>
                                    <td class="border px-4 py-2">John Doe</td>
                                    <td class="border px-4 py-2">Deskripsi Pekerjaan 1</td>
                                    <td class="border px-4 py-2">Area 1</td>
                                    <td class="border px-4 py-2">TAG-123</td>
                                    <td class="border px-4 py-2 flex justify-center items-center">
                                        <a href="{{ asset('documents/doc1.pdf') }}" class="text-blue-500">
                                            <i class="fas fa-file-pdf fa-2x"></i>
                                    <td class="border px-4 py-2">2023-05-18</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                        <a href="#" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">QC-002</td>
                                    <td class="border px-4 py-2">Alice Brown</td>
                                    <td class="border px-4 py-2">Deskripsi Pekerjaan 2</td>
                                    <td class="border px-4 py-2">Area 2</td>
                                    <td class="border px-4 py-2">TAG-456</td>
                                    <td class="border px-4 py-2 flex justify-center items-center">
                                        <a href="{{ asset('documents/doc2.pdf') }}" class="text-blue-500">
                                            <i class="fas fa-file-pdf fa-2x"></i>
                                        </a>
                                    </td>
                                    <td class="border px-4 py-2">2023-05-19</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                        <a href="#" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">QC-001</td>
                                    <td class="border px-4 py-2">John Doe</td>
                                    <td class="border px-4 py-2">Deskripsi Pekerjaan 1</td>
                                    <td class="border px-4 py-2">Area 1</td>
                                    <td class="border px-4 py-2">TAG-123</td>
                                    <td class="border px-4 py-2 flex justify-center items-center">
                                        <a href="{{ asset('documents/doc1.pdf') }}" class="text-blue-500">
                                            <i class="fas fa-file-pdf fa-2x"></i>
                                    <td class="border px-4 py-2">2023-05-18</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                        <a href="#" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">QC-002</td>
                                    <td class="border px-4 py-2">Alice Brown</td>
                                    <td class="border px-4 py-2">Deskripsi Pekerjaan 2</td>
                                    <td class="border px-4 py-2">Area 2</td>
                                    <td class="border px-4 py-2">TAG-456</td>
                                    <td class="border px-4 py-2 flex justify-center items-center">
                                        <a href="{{ asset('documents/doc2.pdf') }}" class="text-blue-500">
                                            <i class="fas fa-file-pdf fa-2x"></i>
                                        </a>
                                    </td>
                                    <td class="border px-4 py-2">2023-05-19</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                        <a href="#" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</a>
                                    </td>
                                </tr>
                                <!-- Tambahkan lebih banyak data dummy di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
