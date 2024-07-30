<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Quality Control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('quality-control.update', $qualityControl->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="report_id" class="block text-gray-700">Report ID</label>
                            <input type="text" name="report_id" id="report_id" class="w-full border-gray-300 rounded-lg" value="{{ $qualityControl->report_id }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="inspektor" class="block text-gray-700">Inspektor</label>
                            <input type="text" name="inspektor" id="inspektor" class="w-full border-gray-300 rounded-lg" value="{{ $qualityControl->inspektor }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_pengecekan" class="block text-gray-700">Tanggal Pengecekan</label>
                            <input type="date" name="tanggal_pengecekan" id="tanggal_pengecekan" class="w-full border-gray-300 rounded-lg" value="{{ $qualityControl->tanggal_pengecekan }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="area" class="block text-gray-700">Area</label>
                            <input type="text" name="area" id="area" class="w-full border-gray-300 rounded-lg" value="{{ $qualityControl->area }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="sub_area" class="block text-gray-700">Sub Area</label>
                            <input type="text" name="sub_area" id="sub_area" class="w-full border-gray-300 rounded-lg" value="{{ $qualityControl->sub_area }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="eksekutor" class="block text-gray-700">Eksekutor</label>
                            <input type="text" name="eksekutor" id="eksekutor" class="w-full border-gray-300 rounded-lg" value="{{ $qualityControl->eksekutor }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi_temuan" class="block text-gray-700">Deskripsi Temuan</label>
                            <textarea name="deskripsi_temuan" id="deskripsi_temuan" class="w-full border-gray-300 rounded-lg" required>{{ $qualityControl->deskripsi_temuan }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="foto_temuan_sebelum" class="block text-gray-700">Foto Temuan Sebelum</label>
                            <input type="file" name="foto_temuan_sebelum" id="foto_temuan_sebelum" class="w-full border-gray-300 rounded-lg">
                        </div>
                        <div class="mb-4">
                            <label for="foto_temuan_sesudah" class="block text-gray-700">Foto Temuan Sesudah</label>
                            <input type="file" name="foto_temuan_sesudah" id="foto_temuan_sesudah" class="w-full border-gray-300 rounded-lg">
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-gray-700">Status</label>
                            <input type="text" name="status" id="status" class="w-full border-gray-300 rounded-lg" value="{{ $qualityControl->status }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="close_date" class="block text-gray-700">Close Date</label>
                            <input type="date" name="close_date" id="close_date" class="w-full border-gray-300 rounded-lg" value="{{ $qualityControl->close_date }}">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
