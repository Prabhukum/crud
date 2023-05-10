<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class productImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $count = NULL;

        $count = User::where('id',$row[0])->first();

        if(isset($count)) {

            User::where('id', $row[0])
                    ->update([

                        'Date'             => $row[1],

                'BM_BatchID'       => $row[2],

                'BM_BatchName'     => $row[3],

                'CountyName' => $row[4],

                'ImageID'          => $row[5],

                'ImageName'        => $row[6],

                'AddendumID'       => $row[7],

                'DocType_Name'     => $row[8],

                'Level_name'       => $row[9],

                'FieldLabel'       => $row[10],

                'IndexFieldValue'  => $row[11],

                'VerifyFieldValue' => $row[12],

                'IndexUser'        => $row[13],

                'VerifyUser'       => $row[14],
                
                'Error/No Error'   => $row[15],

                'Vendor Name'      => $row[16],

                'Status'           => $row[17],

                'created_at'       => now(),

                'updated_at'       => now(),
                    ]);
            return;
        }
        else {
            return new user([

                'Date'             => $row[1],

                'BM_BatchID'       => $row[2],

                'BM_BatchName'     => $row[3],

                 'CountyName' => $row[4],

                'ImageID'          => $row[5],

                'ImageName'        => $row[6],

                'AddendumID'       => $row[7],

                'DocType_Name'     => $row[8],

                'Level_name'       => $row[9],

                'FieldLabel'       => $row[10],

                'IndexFieldValue'  => $row[11],

                'VerifyFieldValue' => $row[12],

                'IndexUser'        => $row[13],

                'VerifyUser'       => $row[14],

                'Error/No Error'   => $row[15],

                'Vendor Name'      => $row[16],

                'Status'           => $row[17],

                'created_at'       => now(),

                'updated_at'       => now(),
            ]);
        }
    }
}
