<?php

namespace App\Exports;
use App\Models\Report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportsExport implements FromCollection, WithHeadings
{
    protected $records;

    public function __construct(array $records)
    {
        $this->records = $records;
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        // Fetch the reports based on selected IDs
        return Report::whereIn('id', $this->records)
        ->with('email')
        ->get([
            'order_id', 
            'channel_name', 
            'title', 
            'client_name', 
            'brand_name', 
            'duration', 
            'language',
            'tvc_id', 
            'delivered_date_time',
            'attach_type',
            'agency', 
        ]);
    }

     /**
     * Return the headings for the columns.
     */
    public function headings(): array
    {
        return [
            'ORDER ID',
            'CHANNEL',
            'TITLE',
            'CLIENT',
            'BRAND',
            'DURATION',
            'LANGUAGE',
            'TVC ID',
            'STATUS DATE',
            'SENT AS',
            'AGENCY'
        ];
    }
}
