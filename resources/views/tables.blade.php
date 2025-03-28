@extends('layouts.app')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
        <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
            Customer Details
        </h2>
        <!-- CTA -->
        <a
            class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            href="{{ route('dashboard') }}"
        >
            <div class="flex items-center">
            <svg
                class="w-5 h-5 mr-2"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                ></path>
            </svg>
            <span> Table making. Refer sa source code via > resources/views/forms.blade.php .</span>
            </div>
            <span>View more &RightArrow;</span>
        </a>

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
                    <th class="px-4 py-3">Customer ID</th>
                    <th class="px-4 py-3">Customer Name</th>
                    <th class="px-4 py-3">Address</th>
                    <th class="px-4 py-3">Phone Number</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody
                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                        class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                        <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                        />
                        <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                        ></div>
                        </div>
                        <div>
                        <p class="font-semibold">12457</p>
                        </p>
                        </div>
                    </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                    Dency Samson
                    </td>
                    <td class="px-4 py-3 text-xs">
                    Sto. Rosario
                    </td>
                    <td class="px-4 py-3 text-sm">
                    09229527545
                    </td>
                    <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                        <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit"
                        >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                            ></path>
                        </svg>
                        </button>
                        <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Delete"
                        >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"
                            ></path>
                        </svg>
                        </button>
                    </div>
                    </td>
                </tr>

                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                        class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                        <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                            alt=""
                            loading="lazy"
                        />
                        <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                        ></div>
                        </div>
                        <div>
                        <p class="font-semibold">41527</p>
                        </div>
                    </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                    Ashlee Niclos Lustre
                    </td>
                    <td class="px-4 py-3 text-xs">
                    Biglang Gwapo Street
                    </td>
                    <td class="px-4 py-3 text-sm">
                    09214587412
                    </td>
                    <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                        <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit"
                        >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                            ></path>
                        </svg>
                        </button>
                        <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Delete"
                        >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"
                            ></path>
                        </svg>
                        </button>
                    </div>
                    </td>
                </tr>

                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                        class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                        <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                        />
                        <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                        ></div>
                        </div>
                        <div>
                        <p class="font-semibold">4561</p>
                        </div>
                    </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                    Fhiona Domini Escurzon
                    </td>
                    <td class="px-4 py-3 text-xs">
                        Barakatan, Toril
                    </td>
                    <td class="px-4 py-3 text-sm">
                    09548457126
                    </td>
                    <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                        <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit"
                        >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                            ></path>
                        </svg>
                        </button>
                        <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Delete"
                        >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"
                            ></path>
                        </svg>
                        </button>
                    </div>
                    </td>
                </tr>

                  
                
           
                    </li>
                </ul>
                </nav>
            </span>
            </div>
        </div>
        </div>
    </main>
@endsection
