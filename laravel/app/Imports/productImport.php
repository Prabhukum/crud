<?php

namespace App\Imports;

use App\Models\product;
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

        $count = product::where('product_id',$row[0])->first();

        if(isset($count)) {

            product::where('product_id', $row[0])
                    ->update([
                        'product_name'=>$row[1],
                        'product_desc'=>$row[2],
                        'product_mrp'=>$row[3],
                        'product_image'=>$row[4]
                    ]);
            return;
        }
        else {
            return new product([
                'product_name'=>$row[1],
                'product_desc'=>$row[2],
                'product_mrp'=>$row[3],
                'product_image'=>$row[4]
            ]);
        }
    }
}
