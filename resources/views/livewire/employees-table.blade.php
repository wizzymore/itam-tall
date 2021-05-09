<div>
    <div class="my-2 sm:mt-0">
        <select wire:model.lazy="status" wire:dirty.class="focus:border-yellow-600 focus:ring-yellow-600" class="rounded-l inline">
            <option value="">All</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <div class="inline relative ml-0">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <i class="fas fa-search"></i>
            </span>
            <input wire:dirty.class="focus:border-yellow-600 focus:ring-yellow-600" wire:model.lazy="search" class="pl-7 rounded-r" placeholder="{{__('Search employee')}}..." type="email" name="email"/>
        </div>
    </div>

    <x-table class="{{ $employees->hasPages() ? 'sm:rounded-b-none shadow-none' : '' }}">
        @if(count($employees->items()) > 0)
            @foreach($employees as $employee)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                     src="https://eu.ui-avatars.com/api/?name={{ $employee->full_name }}"
                                     alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $employee->full_name }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $employee->email }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-sm text-gray-500">Optimization</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($employee->status)
                            <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
                            >
              Active
            </span>
                        @else
                            <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                            >
              Inactive
            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    No employees found...
                </td>
            </tr>
        @endif
    </x-table>
    @if($employees->hasPages())
        <div class="bg-white sm:rounded-b-lg px-6 py-4">
            {{ $employees->links() }}
        </div>
    @endif
</div>
