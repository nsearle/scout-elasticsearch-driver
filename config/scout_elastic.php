<?php

return [
    'client' => [
        'hosts' => [
            env('SCOUT_ELASTIC_HOST', 'localhost:9200'),
        ],
    ],
    'update_mapping' => env('SCOUT_ELASTIC_UPDATE_MAPPING', true),
    'exclude_type' => env('SCOUT_ELASTIC_EXCLUDE_TYPE', true),
    'indexer' => env('SCOUT_ELASTIC_INDEXER', 'single'),
    'document_refresh' => env('SCOUT_ELASTIC_DOCUMENT_REFRESH'),
];
