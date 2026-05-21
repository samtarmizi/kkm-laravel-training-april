<?php

namespace App\Exports;

use App\Models\Visitor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VisitorExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Phone',
            'Email',
            'Created At',
            'Updated At',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Visitor::all();
    }
}
