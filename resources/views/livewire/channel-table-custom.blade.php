<div class="overflow-y-auto">
    {{-- <input type="text" wire:model.debounce.500ms="search" placeholder="Search Channels..." class="mb-4 p-2 border rounded"> --}}

    <table class="min-w-full divide-y divide-gray-200" width="100%">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <input type="checkbox" id="select-all" wire:click="toggleSelectAll">
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Channel Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Contact Person
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Phone
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($channels as $channel)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="checkbox" wire:click="addRows($event.target.value)" name="selectedRows" value="{{ $channel->id }}">
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

<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('selectedChannels', channels => {
            // Do something with the selected channels
            console.log(channels);
        });
    });

   
    function handleNextStep() {
        // Your custom Alpine.js logic here
        console.log('Next step with Alpine.js');
    }

</script>