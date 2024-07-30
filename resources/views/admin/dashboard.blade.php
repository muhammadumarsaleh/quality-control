<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <a href="/quality-control" class="block p-6 max-w-sm bg-blue-500 rounded-lg border border-gray-200 shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">
                <img src="{{ asset('images/card1.png') }}" alt="Quality Control" class="rounded-t-lg">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Quality Control</h5>
                <p class="font-normal text-gray-100">Manage and view quality control data.</p>
            </a>
            <!-- Card 2 -->
            <a href="/standart" class="block p-6 max-w-sm bg-blue-500 rounded-lg border border-gray-200 shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">
                <img src="{{ asset('images/card2.png') }}" alt="Standart" class="rounded-t-lg">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Standart</h5>
                <p class="font-normal text-gray-100">View and manage standards.</p>
            </a>
            
            <!-- Card 3 -->
            <a href="/approval" class="block p-6 max-w-sm bg-blue-500 rounded-lg border border-gray-200 shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">
                <img src="{{ asset('images/card3.png') }}" alt="Approval" class="rounded-t-lg">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Approval</h5>
                <p class="font-normal text-gray-100">Generate and view quality control reports.</p>
            </a>
        </div>
    </div>
</div>
</x-app-layout>
