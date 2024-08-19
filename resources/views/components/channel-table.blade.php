<div class="overflow-y-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <input type="checkbox" id="select-all">
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
                        <input type="checkbox" name="select-row" value="{{ $channel->id }}">
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
</div>

<script>
    document.getElementById('select-all').addEventListener('click', function(event) {
        let checkboxes = document.querySelectorAll('input[name="select-row"]');
        checkboxes.forEach(checkbox => checkbox.checked = event.target.checked);
    });
</script>