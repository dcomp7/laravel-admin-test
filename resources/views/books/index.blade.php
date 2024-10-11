<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 book__grid">
                <a href="{{ route('books.create') }}"
                   class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                   {{ __('Create New Book') }}
                </a>
                <form class="book-filter" action="{{ route('books.index') }}" method="get">
                    <input class="book-filter__query" value="{{ $query }}" placeholder="{{ __('Type a book title') }}" name="query" type="text" />
                    <input class="book-filter__button px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25" type="submit" value="{{ __('OK') }}" />
                </form>
                @if ($message = Session::get('success'))
                <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ $message }}</p>
                        </div>
                    </div>
                </div>
                @endif
                <div class="book-table__wrapper">
                <table class="w-full table-fixed book-table">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">{{ __('Book Title') }}</th>
                            <th class="px-4 py-2 border">{{ __('Description') }}</th>
                            <th class="px-4 py-2 border">{{ __('Author') }}</th>
                            <th class="px-4 py-2 border">{{ __('Page Count') }}</th>
                            <th class="px-4 py-2 border">{{ __('Creation Date') }}</th>
                            <th class="px-4 py-2 border">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($books))
                            @foreach($books as $row)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $row->title }}</td>
                                    <td class="px-4 py-2 border">{{ $row->description }}</td>
                                    <td class="px-4 py-2 border">{{ $row->author }}</td>
                                    <td class="px-4 py-2 border">{{ $row->page_count }}</td>
                                    <td class="px-4 py-2 border">{{ date_format($row->created_at, 'd/m/Y H:i:s') }}</td>
                                    <td class="px-4 py-2 border">
                                        <form action="{{ route('books.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('books.show', $row->id) }}" class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                                                {{ __('Show') }}
                                            </a>
                                            <a href="{{ route('books.edit', $row->id) }}" class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                                                {{ __('Edit') }}
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="delete" class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-md hover:bg-red-500 active:bg-red-700 focus:outline-none focus:border-red-700 focus:shadow-outline-gray disabled:opacity-25">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td class="px-4 py-2 border text-red-500" colspan="6">{{ __('No books found.') }}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                </div>
                <div>&nbsp;</div>
                {{ $books->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
