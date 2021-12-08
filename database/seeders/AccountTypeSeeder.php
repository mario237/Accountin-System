<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    public function run()
    {

        $types = [
            ['name'  => 'Accounts receivable (A/R)'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Current assets' , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Cash and cash equivalents'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Fixed assets'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Non-current assets'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Accounts payable (A/P)'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Credit card'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Current liabilities'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Non-current liabilities'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => "Owner's equity"  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Income'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Other income'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Cost of sales'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Expenses'  , 'created_at' => now() , 'updated_at' => now()],
            ['name'  => 'Other expenses'  , 'created_at' => now() , 'updated_at' => now()],

        ];

        AccountType::insert($types);

    }
}
