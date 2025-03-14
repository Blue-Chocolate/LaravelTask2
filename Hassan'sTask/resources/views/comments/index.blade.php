<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container px-4 py-8  bg-white  mx-auto rounded-lg ">
            <h1 class="text-3xl font-bold text-center mb-8"> commnets Listing</h1>

            <!-- Search and Add User (Static) -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <input type="text" placeholder="Search comments..."
                        class="w-full px-4 py-2 rounded-md border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <a href="{{route('comments.create')}}">
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                        Add New comments
                    </button>
                </a>

            </div>

            <!-- User Table -->
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">post title</th>
                            <th class="py-3 px-6 text-left">user own</th>
                            <th class="py-3 px-6 text-left">content</th>
                            <th class="py-3 px-6 text-left">is approved</th>
                            <th class="py-3 px-6 text-left">created_at</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm">

                        @forelse( $comments as $comment )
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">{{$comment->id}}</td>
                            <td class="py-3 px-6 text-left">{{$comment->post->title}}</td>
                            <td class="py-3 px-6 text-left">{{$comment->user->name}}</td>
                            <td class="py-3 px-6 text-left">{{$comment->content}}</td>
                            <td class="py-3 px-6 text-left">{{$comment->is_approved ? 'true':'false'}}</td>
                            <td class="py-3 px-6 text-left">{{$comment->created_at}}</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <a class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110"
                                        href="{{route('comments.edit',$comment->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{route('comments.destroy',$comment->id)}}" method="comment">
                                        @method('DELETE')
                                        @csrf
                                        <button class="w-4 mr-2 transform hover:text-red-500 hover:scale-110"
                                            type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-3"> no data</td>
                        </tr>
                        @endforelse



                    </tbody>
                </table>
            </div>

            <!-- Static Pagination -->
            <div class="flex justify-between items-center mt-6">
                <div>

                </div>
                <div class="flex space-x-2">
                    {{$comments->links()}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>