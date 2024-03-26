@extends('layout')
@section('title')
@endsection
@section('content')
@section('name_table')
    <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
        Employees
    </div>
@endsection

<div class="m-3 items-center justify-center bg-white">
    <div class="w-full table-auto p-6 overflow-scroll px-0 max-h-screen">
        <table class="w-full table-auto p-6 overflow-x-auto overflow-y-auto">

            {{-- name head  --}}
            <thead>
                <tr>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Name</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Full Name</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Email</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Number</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Description</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Address</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            City</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Country</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Postal</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Status</p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Edit
                        </p>
                    </th>
                    <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4">
                        <p
                            class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">
                            Delete
                        </p>
                    </th>
                </tr>
            </thead>



            {{-- content  --}}
            <tbody>
                @foreach ($employees as $item)
                <tr>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">
                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                {{$item->name}}</p>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                            {{$item->full_name}}</p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed
                            {{$item->email}}</p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed
                            {{$item->number}}</p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed
                            {{$item->description}}</p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed
                            {{$item->address}}</p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed
                            {{$item->city}}</p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed
                            {{$item->country}}</p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">
                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">
                                    {{$item->postal_code}}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="w-max">
                            <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md"
                                style="opacity: 1;">
                                <span class="">{{$item->status}}</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <a href="{{route('editData',$item->id)}}"
                            class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                            type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="h-4 w-4">
                                    <path
                                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <a href="{{route('deleteData',$item->id)}}"
                            class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20"
                            type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="h-4 w-4 text-black-500">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.707 2.293a1 1 0 00-1.414 1.414L9.586 12 2.293 19.293a1 1 0 101.414 1.414L12 13.414l6.293 6.293a1 1 0 101.414-1.414L13.414 12l6.293-6.293a1 1 0 10-1.414-1.414L12 10.586 5.707 4.293a1 1 0 00-1.414-1.414z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
