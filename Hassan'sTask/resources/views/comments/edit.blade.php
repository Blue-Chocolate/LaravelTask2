<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('commentS ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container ">
            @if($errors->any())

            @foreach($errors->all() as $error)

            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                @endforeach
                @endif

                <form class="  flex flex-col items-center  w-full  max-w-[100%]" method="POST"
                    enctype="multipart/form-data" action="{{route('posts.update',$comment->id)}}">
                    @csrf
                  


                    <div class="mb-5 w-[400px]">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            is published</label>
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="is_published" id="is_published">
                            <option value="true" @selected(old('is_published',$comment->is_published)==true )>true
                            </option>
                            <option value="false" @selected(old('is_published',$comment->is_published)==false )>false
                            </option>
                        </select>

                    </div>
                    <div class="mb-5 w-[400px]">
                        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            content</label>
                        <textarea name="content" class="bg-gray-50 border border-gray-300 
                        text-gray-900 text-sm rounded-lg focus:ring-blue-500
                         focus:border-blue-500 block w-full  dark:bg-gray-700
                          dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                           dark:focus:ring-blue-500 dark:focus:border-blue-500" cols="50" rows="10">
                           {{old('content',$comment->content)}}
                    </textarea>
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>



            </div>
        </div>
    </div>
</x-app-layout>