@extends('layouts.app')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
        <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
            APPOINTMENTS
        </h2>
        
         <!-- Search Bar -->
    <div class="mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Search customer...">
    </div>
        <!-- With actions -->
        <h4
            class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
        >
        </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                >
                    <th class="px-4 py-3">Patient's Name</th>
                    <th class="px-4 py-3">Dental Type</th>
                    <th class="px-4 py-3">Gender</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Status</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
    <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
            <div class="flex items-center text-sm">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                <div>
                    <p class="font-semibold">Dency Samson</p>
                </div>
            </div>
        </td>
        <td class="px-4 py-3 text-sm">
            Braces
        </td>
        <td class="px-4 py-3 text-xs">
            Male
        </td>
        <td class="px-4 py-3 text-sm">
            03/24/2025
        </td>
        <td class="px-4 py-3">
            <div class="relative">
                <span class="px-3 py-1 text-sm font-semibold rounded-lg"
                    style="background-color: #BFDBFE; color: #1E40AF;">
                    Scheduled
                </span>
            </div>
        </td>
    </tr>
    <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
            <div class="flex items-center text-sm">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                <div>
                    <p class="font-semibold">Ashlee Nicole Lustre</p>
                </div>
            </div>
        </td>
        <td class="px-4 py-3 text-sm">
            Cleaning
        </td>
        <td class="px-4 py-3 text-xs">
            Male
        </td>
        <td class="px-4 py-3 text-sm">
            03/26/2025
        </td>
        <td class="px-4 py-3">
            <div class="relative">
                <span class="px-3 py-1 text-sm font-semibold rounded-lg"
                    style="background-color: #FDE68A; color: #92400E;">
                    In Process
                </span>
            </div>
        </td>
    </tr>
    <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
            <div class="flex items-center text-sm">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                <div>
                    <p class="font-semibold">Fhiona Domini Escurzon</p>
                </div>
            </div>
        </td>
        <td class="px-4 py-3 text-sm">
            Tooth Extraction
        </td>
        <td class="px-4 py-3 text-xs">
            Female
        </td>
        <td class="px-4 py-3 text-sm">
            03/28/2025
        </td>
        <td class="px-4 py-3">
            <div class="relative">
                <span class="px-3 py-1 text-sm font-semibold rounded-lg"
                    style="background-color: #A7F3D0; color: #065F46;">
                    Done
                </span>
            </div>
        </td>
    </tr>
</tbody>

        </div>
        </div>
    </main>
@endsection
