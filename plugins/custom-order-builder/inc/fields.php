<?php
if (!defined('ABSPATH')) exit;

function spco_get_fields() {
    return [
        'dog_name' => [
            'label' => 'Dog Name',
            'type'  => 'text',
            'required' => true
        ],
        'girth' => [
            'label' => 'Girth (Chest)',
            'type'  => 'number',
            'required' => true
        ],
        'back_length' => [
            'label' => 'Back Length',
            'type'  => 'number',
            'required' => true
        ],
        'neck' => [
            'label' => 'Neck Size',
            'type'  => 'number',
            'required' => true
        ],
        'fabric' => [
            'label' => 'Fabric',
            'type'  => 'select',
            'options' => [
                'fleece' => 'Fleece',
                'flannel' => 'Flannel',
                'wool' => 'Wool',
                'southwest' => 'Southwest Pattern',
            ],
            'required' => true
        ],
        'color' => [
            'label' => 'Color',
            'type'  => 'text',
            'required' => false
        ],
        'notes' => [
            'label' => 'Special Instructions',
            'type'  => 'textarea',
            'required' => false
        ]
    ];
}
