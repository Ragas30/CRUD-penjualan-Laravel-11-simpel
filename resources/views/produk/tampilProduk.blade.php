@extends('template.header')
@section('title',"Data Produk")
@section('content')
<section class="border grid-flow-col shadow-2xl my-10 rounded-2xl bg-white text:slate-600 w-3/4 mx-auto px-4">

  <div class="-m-1.5 overflow-x-auto my-10">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="border rounded-lg divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
        <div class="py-3 px-4">
          <div class="relative max-w-xs">
            <label for="hs-table-search" class="sr-only">Search</label>
            <input type="text" name="hs-table-search" id="hs-table-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search for items">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
              <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="overflow-hidden font-black">
          <table class="px-8 min-w-full divide-y  dark:divide-neutral-700">
            <thead class="bg-gray-50 dark:bg-neutral-700">
              <tr>
                <th scope="col" class="py-3 px-4 pe-0">
                  <div class="flex items-center h-5">
                    <input id="hs-table-search-checkbox-all" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                    <label for="hs-table-search-checkbox-all" class="sr-only">Checkbox</label>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">No</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Nama Produk</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Deskripsi</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Harga</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Foto</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"></th>
              </tr>
            </thead>
            @foreach ($produks as $index =>  $i)
                
           
            <tbody class="divide-y text-black dark:divide-neutral-700 ">
              <tr>
                <td class="py-3 ps-4">
                  <div class="flex items-center h-5">
                    <input id="hs-table-search-checkbox-1" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                    <label for="hs-table-search-checkbox-1" class="sr-only">Checkbox</label>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">{{$index + 1}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">{{ $i->nama_produk }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-black ">{{ $i->deskripsi }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->harga }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800  flex justify-center"><img src="{{ asset($i->foto) }}" alt="" class="w-1/2"></td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                  <a href="{{ route('produk.edit', $i->id) }}" type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Edit</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                  <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div> 
</section>
@endsection<div class="flex flex-col">
 