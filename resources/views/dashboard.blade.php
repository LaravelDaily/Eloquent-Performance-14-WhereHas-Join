<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full border divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Booking Time</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50">
                                <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Bookings</span>
                            </th>
                        </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                        @foreach ($times as $time)
                            <tr class="bg-white">
                                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                    {{ $time->start_time }}
                                </td>
                                <td class="px-6 py-4 text-sm text-center leading-5 text-gray-900 whitespace-no-wrap">
                                    {{ $time->bookings_count }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
