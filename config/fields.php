<?php

return [
    [
        'name' => 'tab_notice',
        'type' => 'FieldsetTabOpen',
        'label' => 'Störereinstellungen',
        'tags' => 'tabs',
        'icon' => 'Tag',
    ],
    [
        'name' => 'tab_notice_END',
        'type' => 'FieldsetClose',
        'label' => 'Close an open fieldset',
        'tags' => 'tabs',
        'icon' => 'Tag',
    ],
    [
        'name' => 'link_intern',
        'type' => 'Page',
        'label' => 'Link (intern)',
        'tags' => 'links',
        'icon' => 'Link',
        'width' => 25,
        'derefAsPage' => 2,
        'inputfield' => 'InputfieldPageListSelect',
        'parent_id' => 0,
        'labelFieldName' => 'title',
        'collapsed' => 0,
    ],
    [
        'name' => 'link_extern',
        'type' => 'Text',
        'label' => 'Link (extern)',
        'tags' => 'links',
        'icon' => 'Link',
        'width' => 25,
        'formatter' => 'TextformatterEntities'
    ],
    [
        'name' => 'link_text',
        'type' => 'Text',
        'label' => 'Link Text',
        'tags' => 'links',
        'icon' => 'Link',
        'width' => 25,
        'formatter' => 'TextformatterEntities'
    ],
    [
        'name' => 'text',
        'type' => 'Textarea',
        'label' => 'Zusammenfassung',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 100,
        'formatter' => '',
        'inputfieldClass' => 'InputfieldCKEditor'
    ],
    [
        'name' => 'checkbox_hazard',
        'type' => 'Checkbox',
        'label' => 'Störer anzeigen?',
        'tags' => 'settings',
        'icon' => 'Check',
        'width' => 25,
        'formatter' => null,
        'inputfieldClass' => null,
    ],
];