<?php

namespace App\Imports;

use App\Models\UserExcel;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserExcel([
            'Name'     => $row[1],
            'Email'    => $row[2],
            'Phone'    => $row[3],
        ]);
    }
}
