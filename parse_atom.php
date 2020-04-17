<?php

$atomXml = simplexml_load_file('xml/atom.xml');
$order = [];
$lineItems = [];

$atomChildren = $atomXml->children('atom', true);
$mChildren = $atomChildren[0]->children('m', true);
$d = $mChildren[0]->children('d', true);
$order['order_number'] = (string) $d->PONumber;

$mChildren = $atomChildren[1]->children('m', true);
$atomFeed = $mChildren[0]->children('atom', true);
$atomEntry = $atomFeed[0]->children('atom', true);

foreach ($atomEntry->entry as $entry) {
    $atomContent = $entry->children('atom', true);
    $properties = $atomContent[0]->children('m', true);
    $dProperty = $properties[0]->children('d', true);
    $lineItem = [];
    $lineItem['sku'] = (string) $dProperty->Material;
    $lineItem['quantity'] = (int) (string) $dProperty->Quantity;
    $lineItems[] = $lineItem;
}

$order['line_items'] = $lineItems;

print_r($order);