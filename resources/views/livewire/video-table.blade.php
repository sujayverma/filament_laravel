<div class="overflow-y-auto">
   
    @if(count($videos) > 0)
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{-- <input type="checkbox" id="select-all-videos" wire:click="toggleVideoSelectAll"> --}}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Language
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Beta No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    File Name
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($videos as $video)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="checkbox"   wire:model="checkedVideoItems.{{ $video->id }}"  wire:click="handleVideoCheckboxChange({{ $video->id }})"  name="selectedRows[]" value="{{ $video->id }}">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $video->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $video->language  }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $video->beta_no  }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $video->download_url  }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else

    <div class="mt-4">
        <h3>No Videos for this Campaign</h3>
      {{-- @if($channelID !='')
        {{ $channelID }}
      @endif --}}
    </div>
    @endif
</div>
