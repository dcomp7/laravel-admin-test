<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Book') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('books.index') }}"
                    class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    {{ __('<- Back') }}
                </a>
                <form action="{{ route('books.store') }}" method="POST" >
                    @csrf
                <div class="mb-4">
                    <label for="textname"
                        class="block mb-2 text-sm font-bold text-gray-700">{{ __('Book Title') }}</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="title"
                        placeholder="{{ __('Book Title') }}">
                    @error('title') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textemail"
                        class="block mb-2 text-sm font-bold text-gray-700">{{ __('Description') }}</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="description"
                        placeholder="{{ __('Description') }}">
                    @error('description') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textemail"
                           class="block mb-2 text-sm font-bold text-gray-700">{{ __('Author') }}</label>
                    <input type="text"
                           class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                           name="author"
                           placeholder="{{ __('Author') }}">
                    @error('author') <span class="text-red-500">{{ $message }}
                </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textemail"
                           class="block mb-2 text-sm font-bold text-gray-700">{{ __('Page Count') }}</label>
                    <input type="text"
                           class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                           name="page_count"
                           placeholder="{{ __('Page Count') }}">
                    @error('page_count') <span class="text-red-500">{{ $message }}
            </span>@enderror
                </div>
                <div>
                    <button type="submit"
                    class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        {{ __('Save') }}
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
