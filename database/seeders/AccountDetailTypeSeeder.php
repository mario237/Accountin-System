<?php

namespace Database\Seeders;

use App\Models\AccountDetailType;
use Illuminate\Database\Seeder;

class AccountDetailTypeSeeder extends Seeder
{
    public function run()
    {

        //Accounts receivable
        $accounts_receivable = [
            'Accounts receivable (A/R)',
        ];

        //Current assets

        $current_assets = [
            'Allowance for bad debts',
            'Assets available for sale',
            'Development Costs',
            'Employee Cash Advances',
            'Inventory',
            'Investments - Other',
            'Loans To Officers',
            'Loans to Others',
            'Loans to Shareholders',
            'Other current assets',
            'Prepaid Expenses',
            'Retainage',
            'Undeposited funds',
        ];


        //Cash and cash equivalents

        $cash_equivalents = [
            'Bank',
            'Cash and Cash Equivalents',
            'Cash on hand',
            'Client trust accounts',
            'Money market',
            'Rents held in trust',
            'Savings'
        ];


        //Fixed assets

        $fixed_assets = [
            'Accumulated depletion',
            'Accumulated depreciation on property, plant and equipment',
            'Buildings',
            'Depletable assets',
            'Furniture and fixtures',
            'Land',
        ];


        //Non-current assets

        $non_current_assets = [
            'Accumulated amortisation of non-current assets',
            'Assets held for sale',
            'Deferred tax',
            'Goodwill',
            'Intangible assets',
            'Lease buyout',
            'Licences',
            'Long-term investments',
            'Organisational costs',
            'Other non-current assets',
            'Security deposits'
        ];


        //Accounts payable
        $accounts_payable = ['Accounts payable (A/P)'];


        //Credit card
        $credit_card = ['Credit card'];


        //Current liabilities
        $current_liabilities = [
            'Accrued Liabilities',
            'Client Trust accounts - liabilities',
            'Current tax liability',
            'Current portion of obligations under finance leases',
            'Dividends payable',
            'Income tax payable',
            'Insurance payable',
            'Line of credit',
            'Loan payable',
            'Other current liabilities',
            'Payroll clearing',
            'Payroll liabilities',
            'Prepaid expenses payable',
            'Rents in trust - liability to offset the Rents in trust',
            'Sales and service tax payable'
        ];

        //Non-Current liabilities
        $non_Current_liabilities = [
            'Accrued holiday payable',
            'Accrued Non-current liabilities',
            'Liabilities related to assets held for sale',
            'Long-term debt',
            'Notes payable',
            'Other non-current liabilities',
            'Shareholder notes payable'
        ];


        //Owner's equity
        $owner_equity = [
            'Accumulated adjustment',
            'Dividend disbursed',
            'Equity in earnings of subsidiaries',
            'Opening Balance Equity',
            'Ordinary shares',
            'Other comprehensive income',
            "Owner's Equity",
            'Paid-in capital or surplus',
            'Partner Contributions',
            'Partner Distributions',
            "Partner's Equity",
            'Preferred shares',
            'Retained Earnings',
            'Share capital',
            'Treasury Shares',
            ''
        ];


        //Income
        $income = [
            'Discounts/Refunds Given',
            'Non-Profit Income',
            'Other Primary Income',
            'Revenue - General',
            'Sales - retail',
            'Sales - wholesale',
            'Sales of Product Income',
            'Service/Fee Income',
            'Unapplied Cash Payment Income'
        ];

        //Other Income
        $other_income = [
            'Dividend income',
            'Interest earned',
            'Loss on disposal of assets',
            'Other Investment Income',
            'Other Miscellaneous Income',
            'Other operating income',
            'Tax-Exempt Interest',
            'Unrealised loss on securities, net of tax'
        ];


        //Cost of Sales
        $cost_of_sales = [
            'Cost of labour - COS',
            'Equipment rental - COS',
            'Freight and delivery - COS',
            'Other costs of sales - COS',
            'Supplies and materials - COS'
        ];


        //Expenses
        $expenses = [
            'Advertising/Promotional',
            'Amortisation expense',
            'Auto',
            'Bad debts',
            'Bank charges',
            'Charitable Contributions',
            'Commissions and fees',
            'Cost of Labour',
            'Dues and Subscriptions',
            'Equipment rental',
            'Finance costs',
            'Income tax expense',
            'Insurance',
            'Interest paid',
            'Legal and professional fees',
            'Loss on discontinued operations, net of tax',
            'Management compensation',
            'Meals and entertainment',
            'Office/General Administrative Expenses',
            'Other Miscellaneous Service Cost',
            'Other selling expenses',
            'Payroll Expenses',
            'Rent or Lease of Buildings',
            'Repair and maintenance',
            'Shipping and delivery expense',
            'Supplies and materials',
            'Taxes Paid',
            'Travel expenses - general and admin expenses',
            'Travel expenses - selling expense',
            'Unapplied Cash Bill Payment Expense',
            'Utilities'
        ];


        //Other Expenses
        $other_expenses = [
            'Amortisation',
            'Depreciation',
            'Exchange Gain or Loss',
            'Other Expense',
            'Penalties and settlements'
        ];

        $data = [
            $this->getArrayOfTypes($accounts_receivable, 1),
            $this->getArrayOfTypes($current_assets, 2),
            $this->getArrayOfTypes($cash_equivalents, 3),
            $this->getArrayOfTypes($fixed_assets, 4),
            $this->getArrayOfTypes($non_current_assets, 5),
            $this->getArrayOfTypes($accounts_payable, 6),
            $this->getArrayOfTypes($credit_card, 7),
            $this->getArrayOfTypes($current_liabilities, 8),
            $this->getArrayOfTypes($non_Current_liabilities, 9),
            $this->getArrayOfTypes($owner_equity, 10),
            $this->getArrayOfTypes($income, 11),
            $this->getArrayOfTypes($other_income, 12),
            $this->getArrayOfTypes($cost_of_sales, 13),
            $this->getArrayOfTypes($expenses, 14),
            $this->getArrayOfTypes($other_expenses, 15),

        ];

        foreach ($data as $datum) {
            AccountDetailType::insert($datum);
        }

    }

    private function getArrayOfTypes($arrayData, $account_id): array
    {
        foreach ($arrayData as $value) {
            $data = array(
                'name' => $value,
                'description' => '',
                'account_type_id' => $account_id,
                'created_at' => now(),
                'updated_at' => now()
            );

            $array[] = $data;
        }

        return $array;
    }
}
