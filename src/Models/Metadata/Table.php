<?php namespace PHRETS\Models\Metadata;

class Table extends Base
{
    protected $elements = [
        'SystemName',
        'StandardName',
        'LongName',
        'DBName',
        'ShortName',
        'MaximumLength',
        'DataType',
        'Precision',
        'Searchable',
        'Interpretation',
        'Alignment',
        'UseSeparator',
        'EditMaskID',
        'LookupName',
        'MaxSelect',
        'Units',
        'Index',
        'Minimum',
        'Maximum',
        'Default',
        'Required',
        'SearchHelpID',
        'Unique',
        'MetadataEntryID',
        'ModTimeStamp',
        'ForeignKeyName',
        'ForeignField',
        'InKeyIndex',
    ];
    protected $attributes = [
        'Version',
        'Date',
        'Resource',
        'Class',
    ];
}