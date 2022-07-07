<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function acountNr()
        {
        $controlNumber = '';
        $bankCode = '23456';
        for ($i = 0; $i < 2; $i++) {
            $controlNumber .= rand(0, 9);
        }
        $uniqNumber = '';
        for ($j = 0; $j < 11; $j++) {
            $uniqNumber .= rand(0, 9);
        }
        return 'LT' . $controlNumber . $bankCode . $uniqNumber;
        }
}
