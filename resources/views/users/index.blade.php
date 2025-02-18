@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-start items-start p-7">
        <div class="w-full flex justify-between mb-5">
            <h1 class="text-4xl font-bold uppercase text-red-950">users page</h1>
            @if (session('success'))
                <div
                    class="flex items-center justify-between p-4 mb-4 text-green-800 bg-green-100 border border-green-300 rounded-lg ">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-sm font-medium">Permissions Successfully Updated</span>
                    </div>
                </div>
            @endif

        </div>




        <div class="w-full">

            <table class="min-w-full border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Username</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Manage Permissions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-100 transition-all">
                            <td class="px-6 py-3 font-semibold text-gray-800">{{ $user->name }}</td>
                            <td class="px-6 py-3 text-gray-700">{{ $user->email }}</td>
                            <td class="px-6 py-3">
                                <form action="{{ route('update-permissions', $user->id) }}" method="POST"
                                    class="space-y-2 flex justify-between">
                                    @csrf
                                    @foreach ($user->roles as $role)
                                        <div class="mb-2">
                                            <p class="text-blue-500 font-semibold">{{ $role->name }}</p>
                                            <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-1">
                                                @foreach ($permissions as $permission)
                                                    <label
                                                        class="flex items-center space-x-2 bg-gray-100 p-2 rounded-md shadow-sm">
                                                        <input type="checkbox" name="permissions[]"
                                                            value="{{ $permission->name }}"
                                                            class="form-checkbox text-blue-500 h-5 w-5"
                                                            @if ($user->hasPermissionTo($permission->name)) checked @endif>
                                                        <span class="text-gray-800">{{ $permission->name }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="flex justify-center items-center h-100" style="margin-top: 0 !important;">
                                        <button type="submit"
                                            class=" bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                                            Update Permissions
                                        </button>
                                    </div>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection
