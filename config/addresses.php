<?php

return [

    'models' => [

        /*
         * Which model to use for the Address when using the 'HasAddresses' trait.
         *
         */

        'address' => Madonetr\Addresses\Models\Address::class,

    ],

    'table_names' => [

        /*
         * Define the table name to use when using the 'HasAddresses' trait.
         */

        'addresses' => 'addresses',

    ],

    'column_names' => [

        'model_morph_name' => 'addressable',
        'model_morph_key'  => 'addressable_id',
        'model_morph_type' => 'addressable_type',

    ],

    'fields' => [
        'addresses' => [
            'label'               => 'required|string|max:255',
            'type'                => 'nullable|string|max:140',
            'name'                => 'nullable|string|max:140',
            'company'             => 'nullable|string|max:140',
            'vat_id'              => 'nullable|integer',
            'vat_office'          => 'nullable|string|max:140',
            'address'             => 'nullable|string|max:140',
            'postal_code'         => 'nullable|string',
            'city'                => 'nullable|string|max:140',
            'state'               => 'nullable|string|max:140',
            'country'             => 'nullable|string|max:140',
            'is_public'           => 'sometimes|boolean',
            'is_primary'          => 'sometimes|boolean',
            'is_billing'          => 'sometimes|boolean',
            'is_shipping'         => 'sometimes|boolean',
        ],
    ],
];
