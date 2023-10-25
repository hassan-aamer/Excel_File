<?php

namespace App\Exports;

use App\Models\UserExcel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return UserExcel::all();
        return UserExcel::select([
            'id',
            'Name',
            'Email',
            'Phone',
        ])->get();
    }
    public function headings(): array
    {
        return ["ID", "Name", "Email", "Phone"];
    }
}
