@extends('layouts.app')

@section('content')

    <div class="flex flex-col">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
        <table class="min-w-full">
          <thead>
            <tr>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Id</th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Author</th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-100"></th>
            </tr>
          </thead>
          <tbody>
          @foreach($posts as $post)
              <tr class="{{ $loop->odd ? 'bg-white' : 'bg-gray-100' }}">
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">{{ $post->id }}</td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">{{ $post->title }}</td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">Jason McCreary</td>
                  <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                    <a href="{{ route('post.edit', $post) }}" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
                  </td>
              </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>



@endsection