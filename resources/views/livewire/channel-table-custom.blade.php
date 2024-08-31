<div class="overflow-y-auto" style="height: 450px;">
    <table class="min-w-full divide-y divide-gray-200 overflow-y-scroll" width="100%">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="20%">
                    <input type="checkbox" id="select-all" wire:click="toggleSelectAll">
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="20%">
                    Channel Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="20%">
                    Contact Person
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="20%">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="20%">
                    Phone
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($channels as $channel)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="checkbox"   wire:model="checkedItems.{{ $channel->id }}" wire:change="handleCheckboxChange($event.target.value)"  name="selectedRows[]" value="{{ $channel->id }}">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $channel->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $channel->contact_person }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $channel->email  }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $channel->phone_no }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        @if(strlen($selected) > 0)
            
        @endif
        @if(count($selectedRows) > 0)
        {{ dd($selectedRows) }}
            <button wire:click="unselectAll" class="bg-red-500 text-white p-2 rounded">Unselect All</button>
        @endif
    </div>
</div>