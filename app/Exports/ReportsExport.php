<?php

namespace App\Exports;
use App\Models\Report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReportsExport implements FromCollection, WithHeadings, WithStyles
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
        ->get( )->map(function($report){
        	return [
        		'order_id' => $report->order_id,
        		'channel_name' => $report->channel_name,
        		'title' => $report->title,
        		'client_name' => $report->client_name,
        		'brand_name' => $report->brand_name,
        		'duration' => $report->duration,
        		'language' => $report->language,
        		'tvc_id' => $report->tvc_id,
        		'delivered_date_time' => $report->email->delivered_date_time,
        		'attach_type' => $report->email->attach_type,
        		'agency' => $report->agency
        	];
        });
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
    
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row (1st row is heading)
            1 => ['font' => ['bold' => true]],
        ];
    }
}
