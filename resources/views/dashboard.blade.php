<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="" action="{{ route('dashboard') }}" method="get">
                        <input class="book-filter__query" placeholder="{{ __('Type a city') }}" name="query" type="text" />
                        <input class="book-filter__button px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25" type="submit" value="{{ __('Go') }}" />
                    </form>
                    {{ __("Weather in") }} {{ $forecast['city'] }}<br/>
                    {{ $forecast['temp'] }}° - {{ $forecast['description'] }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
