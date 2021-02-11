<?php

namespace App\Imports;

use App\employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new employee([
            'firstname'=>$row[0],
            'lastname'=> $row[1],
            'age'=>$row[2],
            'address'=>$row[3],
            'email'=>$row[4],
            'gender'=>$row[2],

        ]);
    }
}
