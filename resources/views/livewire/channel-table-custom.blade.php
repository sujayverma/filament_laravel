<div class="overflow-y-auto" style="height: 450px;">
    <table class="fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5 overflow-y-scroll" width="100%">
        <thead class="divide-y divide-gray-200 dark:divide-white/5">
            <tr class="bg-gray-50 dark:bg-white/5">
                <th scope="col" class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-ta-selection-cell w-1" >
                    <input type="checkbox" id="select-all" wire:click="toggleSelectAll">
                </th>
                <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-name" style=";">
                    <span class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start">
                        <span class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white">
                        Channel Name
                        </span>
                    </span>
                </th>
                <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-contact-person" style=";">
                    <span class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start">
                        <span class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white">
                        Contact Person
                        </span>
                    </span>
                </th>
                <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-email" style=";">
                    <span class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start">
                        <span class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white">
                        Email
                        </span>
                    </span>
                </th>
                <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-phone-no" style=";">
                    <span class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start">
                        <span class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white">
                        Phone
                        </span>
                    </span>
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
            @foreach($channels as $channel)
                <tr class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5">
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-ta-selection-cell w-1">
                        <div class="px-3 py-4">
                            <label class="flex">
                                <input type="checkbox"   wire:model="checkedItems.{{ $channel->id }}" wire:change="handleCheckboxChange($event.target.value)"  name="selectedRows[]" value="{{ $channel->id }}">
                            </label>
                        </div>
                    </td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name">
                        <div class="fi-ta-col-wrp">
                            <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                <div class="flex ">
                                    <div class="fi-ta-text-item inline-flex items-center gap-1.5  ">
                                        <span class="fi-ta-text-item-label text-sm leading-6 text-gray-950 dark:text-white  " style=""> {{ $channel->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-contact-person">
                        <div class="fi-ta-col-wrp">
                            <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                <div class="flex ">
                                    <div class="flex max-w-max" style="">
                                        <div class="fi-ta-text-item inline-flex items-center gap-1.5  ">
                                            <span class="fi-ta-text-item-label text-sm leading-6 text-gray-950 dark:text-white  " style="">{{ $channel->contact_person }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email">
                        <div class="fi-ta-col-wrp">
                            <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                <div class="flex whitespace-normal ">
                                    <div class="fi-ta-text-item inline-flex items-center gap-1.5  ">
                                        <span class="fi-ta-text-item-label text-sm leading-6 text-gray-950 dark:text-white  " style="">{{ $channel->email  }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-phone-no">
                        <div class="fi-ta-col-wrp">
                            <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                <div class="flex ">
                                    <div class="flex max-w-max" style="">
                                        <div class="fi-ta-text-item inline-flex items-center gap-1.5  ">
                                            <span class="fi-ta-text-item-label text-sm leading-6 text-gray-950 dark:text-white  " style=""> {{ $channel->phone_no }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        @if(strlen($selected) > 0)
            
        @endif
        @if(count($selectedRows) > 0)
        {{-- {{ dd($selectedRows) }} --}}
            <button wire:click="unselectAll" class="bg-red-500 text-white p-2 rounded">Unselect All</button>
        @endif
    </div>
</div>
