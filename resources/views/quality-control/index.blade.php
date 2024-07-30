<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quality Control OVH Tonasa IV') }}
        </h2>
    </x-slot>

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
                        <a href="{{ route('quality-control.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Tambahkan Data</a>
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
                                @foreach ($qualityControls as $qualityControl)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $qualityControl->report_id }}</td>
                                        <td class="border px-4 py-2">{{ $qualityControl->inspektor }}</td>
                                        <td class="border px-4 py-2">{{ $qualityControl->tanggal_pengecekan }}</td>
                                        <td class="border px-4 py-2">{{ $qualityControl->area }}</td>
                                        <td class="border px-4 py-2">{{ $qualityControl->sub_area }}</td>
                                        <td class="border px-4 py-2">{{ $qualityControl->eksekutor }}</td>
                                        <td class="border px-4 py-2">{{ $qualityControl->deskripsi_temuan }}</td>
                                        <td class="border px-4 py-2"><img src="{{ asset($qualityControl->foto_temuan_sebelum) }}" alt="Sebelum" class="w-16 h-16 mx-auto"></td>
                                        <td class="border px-4 py-2"><img src="{{ asset($qualityControl->foto_temuan_sesudah) }}" alt="Sesudah" class="w-16 h-16 mx-auto"></td>
                                        <td class="border px-4 py-2">{{ $qualityControl->status }}</td>
                                        <td class="border px-4 py-2">{{ $qualityControl->close_date }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('quality-control.edit', $qualityControl->id) }}" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 mr-2">Edit</a>
                                            <form action="{{ route('quality-control.destroy', $qualityControl->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
