<?php

namespace App\Exports;

use App\Models\UserExcel;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
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
}
