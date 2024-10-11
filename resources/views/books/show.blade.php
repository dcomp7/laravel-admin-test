<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Detail') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('books.index') }}"
                    class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    {{ __('<- Back') }}
                </a>
                <table class="w-full table-fixed">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 font-bold">{{ __('Book Title') }}</td>
                            <td>{{ $book->title }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">{{ __('Description') }}</td>
                            <td>{{ $book->description }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">{{ __('Author') }}</td>
                            <td>{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">{{ __('Page Count') }}</td>
                            <td>{{ $book->page_count }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">{{ __('Creation Date') }}</td>
                            <td>{{ date_format($book->created_at, 'd/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
