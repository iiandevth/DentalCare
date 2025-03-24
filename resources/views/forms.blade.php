@extends('layouts.app')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
        <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
            PATIENT'S REGISTRATION
        </h2>
        <!-- General elements -->
        <h4
            class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
        >
        </h4>
        <div
            class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-6"
        >
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">First Name</span>
            <input
                class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe"
            />
            </label>
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Middle Name</span>
            <input
                class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Snape"
            />
            </label>

            </label>

            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Last Name</span>
            <input
                class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Severus"
            />
            </label>

            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Birth Date</span>
            <input class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                type="date" name="bday" id="bday" >
            </label>

            <div class="mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Gender
            </span>
            <div class="mt-2">
                <label
                class="inline-flex items-center text-gray-600 dark:text-gray-400"
                >
                <input
                    type="radio"
                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="accountType"
                    value="personal"
                />
                <span class="ml-2">Male</span>
                </label>
                <label
                class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400"
                >
                <input
                    type="radio"
                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="accountType"
                    value="busines"
                />
                <span class="ml-2">Female</span>
                </label>
            </div>
            </div>

            </label>
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Address</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Address"
            />
            </label>
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email Address</span>
            <!-- focus-within sets the color for the icon when input is focused -->
            <div
                class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400"
            >
                <input
                class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="jane@example.com"
                />
                <div
                class="absolute inset-y-0 flex items-center ml-3 pointer-events-none"
                >
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    ></path>
                </svg>
                </div>
            </div>
            </label>   
            </label>

            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Phone Number</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Phone Number"
            />
            </label>

            <div>
            <button
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
            >
                Submit
            </button>
            </div>
        </div>
        </div>
    </main>
@endsection
