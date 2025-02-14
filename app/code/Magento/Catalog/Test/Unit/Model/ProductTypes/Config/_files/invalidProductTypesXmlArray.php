<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

return [
    'types_with_same_name_attribute_value' => [
        '<?xml version="1.0"?><config><type name="some_name" /><type name="some_name" /></config>',
        [
            "Element 'type': Duplicate key-sequence ['some_name'] in unique identity-constraint 'uniqueTypeName'.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type name=\"some_name\"/><type " .
            "name=\"some_name\"/></config>\n2:\n"
        ],
    ],
    'type_without_required_name_attribute' => [
        '<?xml version="1.0"?><config><type /></config>',
        [
            "Element 'type': The attribute 'name' is required but missing.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type/></config>\n2:\n"
        ],
    ],
    'type_with_notallowed_attribute' => [
        '<?xml version="1.0"?><config><type name="some_name"  notallowed="text"/></config>',
        [
            "Element 'type', attribute 'notallowed': The attribute 'notallowed' is not allowed.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type name=\"some_name\" " .
            "notallowed=\"text\"/></config>\n2:\n"
        ],
    ],
    'type_modelinstance_invalid_value' => [
        '<?xml version="1.0"?><config><type name="some_name" modelInstance="123" /></config>',
        [
            "Element 'type', attribute 'modelInstance': [facet 'pattern'] The value '123' is not " .
            "accepted by the pattern '([\\\]?[a-zA-Z_][a-zA-Z0-9_]*)+'.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type name=\"some_name\" " .
            "modelInstance=\"123\"/></config>\n2:\n"
        ],
    ],
    'type_indexpriority_invalid_value' => [
        '<?xml version="1.0"?><config><type name="some_name" indexPriority="-1" /></config>',
        [
            "Element 'type', attribute 'indexPriority': '-1' is not a valid value of the atomic type " .
            "'xs:nonNegativeInteger'.\nLine: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><type name=\"some_name\" indexPriority=\"-1\"/></config>\n2:\n"
        ],
    ],
    'type_canuseqtydecimals_invalid_value' => [
        '<?xml version="1.0"?><config><type name="some_name" canUseQtyDecimals="string" /></config>',
        [
            "Element 'type', attribute 'canUseQtyDecimals': 'string' is not a valid value of the atomic type " .
            "'xs:boolean'.\nLine: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><type name=\"some_name\" canUseQtyDecimals=\"string\"/></config>\n2:\n"
        ],
    ],
    'type_isqty_invalid_value' => [
        '<?xml version="1.0"?><config><type name="some_name" isQty="string" /></config>',
        [
            "Element 'type', attribute 'isQty': 'string' is not a valid value of the atomic type 'xs:boolean'." .
            "\nLine: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type name=\"some_name\" " .
            "isQty=\"string\"/></config>\n2:\n"
        ],
    ],
    'type_pricemodel_without_required_instance_attribute' => [
        '<?xml version="1.0"?><config><type name="some_name"><priceModel /></type></config>',
        [
            "Element 'priceModel': The attribute 'instance' is required but missing.\nLine: 1\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<config><type name=\"some_name\"><priceModel/></type></config>\n2:\n"
        ],
    ],
    'type_pricemodel_instance_invalid_value' => [
        '<?xml version="1.0"?><config><type name="some_name"><priceModel instance="123123" /></type></config>',
        [
            "Element 'priceModel', attribute 'instance': [facet 'pattern'] The value '123123' is not accepted " .
            "by the pattern '([\\\]?[a-zA-Z_][a-zA-Z0-9_]*)+'.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type " .
            "name=\"some_name\"><priceModel instance=\"123123\"/></type></config>\n2:\n"
        ],
    ],
    'type_indexermodel_instance_invalid_value' => [
        '<?xml version="1.0"?><config><type name="some_name"><indexerModel instance="123" /></type></config>',
        [
            "Element 'indexerModel', attribute 'instance': [facet 'pattern'] The value '123' is not accepted " .
            "by the pattern '([\\\\]?[a-zA-Z_][a-zA-Z0-9_]*)+'.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type " .
            "name=\"some_name\"><indexerModel instance=\"123\"/></type></config>\n2:\n"
        ],
    ],
    'type_indexermodel_without_required_instance_attribute' => [
        '<?xml version="1.0"?><config><type name="some_name"><indexerModel /></type></config>',
        [
            "Element 'indexerModel': The attribute 'instance' is required but missing.\nLine: 1\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<config><type name=\"some_name\"><indexerModel/></type></config>\n2:\n"
        ],
    ],
    'stockindexermodel_without_required_instance_attribute' => [
        '<?xml version="1.0"?><config><type name="some_name"><stockIndexerModel /></type></config>',
        [
            "Element 'stockIndexerModel': The attribute 'instance' is required but missing.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><type name=\"some_name\"><stockIndexerModel/></type></config>\n2:\n"
        ],
    ],
    'stockindexermodel_instance_invalid_value' => [
        '<?xml version="1.0"?><config><type name="some_name"><stockIndexerModel instance="1234"/></type></config>',
        [
            "Element 'stockIndexerModel', attribute 'instance': [facet 'pattern'] The value '1234' is not accepted " .
            "by the pattern '([\\\\]?[a-zA-Z_][a-zA-Z0-9_]*)+'.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type " .
            "name=\"some_name\"><stockIndexerModel instance=\"1234\"/></type></config>\n2:\n"
        ],
    ],
    'allowedselectiontypes_without_required_type_handle' => [
        '<?xml version="1.0"?><config><type name="some_name"><allowedSelectionTypes /></type></config>',
        [
            "Element 'allowedSelectionTypes': Missing child element(s). Expected is ( type ).\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><type name=\"some_name\">" .
            "<allowedSelectionTypes/></type></config>\n2:\n"
        ],
    ],
    'allowedselectiontypes_type_without_required_name' => [
        '<?xml version="1.0"?><config><type name="some_name"><allowedSelectionTypes><type/></allowedSelectionTypes>"
        . "</type></config>',
        [
            "Element 'type': The attribute 'name' is required but missing.\nLine: 1\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<config><type name=\"some_name\"><allowedSelectionTypes><type/>" .
            "</allowedSelectionTypes>\"\n2:        . \"</type></config>\n3:\n",
            "Element 'type': Character content other than whitespace is not allowed because the content type " .
            "is 'element-only'.\nLine: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><type name=\"some_name\"><allowedSelectionTypes><type/>" .
            "</allowedSelectionTypes>\"\n2:        . \"</type></config>\n3:\n"
        ],
    ]
];
