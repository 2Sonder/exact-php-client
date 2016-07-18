<?php namespace Picqer\Financials\Exact;

class Project extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountContact',
        'AccountName',
        'AllowAdditionalInvoicing',
        'BlockEntry',
        'BlockRebilling',
        'BudgetedAmount',
        'BudgetedCosts',
        'BudgetedHoursPerHourType',
        'BudgetedRevenue',
        'BudgetType',
        'BudgetTypeDescription',
        'Classification',
        'ClassificationDescription',
        'Code',
        'CostsAmountFC',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomerPOnumber',
        'Description',
        'Division',
        'DivisionName',
        'EndDate',
        'FixedPriceItem',
        'FixedPriceItemDescription',
        'InvoiceAsQuoted',
        'InvoiceTerms',
        'Manager',
        'ManagerFullname',
        'MarkupPercentage',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PrepaidItem',
        'PrepaidItemDescription',
        'PrepaidType',
        'PrepaidTypeDescription',
        'ProjectRestrictionEmployees',
        'ProjectRestrictionItems',
        'ProjectRestrictionRebillings',
        'SalesTimeQuantity',
        'SourceQuotation',
        'StartDate',
        'TimeQuantityToAlert'
    ];
    
    protected $url = 'project/Projects';

}
