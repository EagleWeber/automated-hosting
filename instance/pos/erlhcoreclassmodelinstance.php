<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lhc_instance_client";
$def->class = "erLhcoreClassModelInstance";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['request'] = new ezcPersistentObjectProperty();
$def->properties['request']->columnName   = 'request';
$def->properties['request']->propertyName = 'request';
$def->properties['request']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['expires'] = new ezcPersistentObjectProperty();
$def->properties['expires']->columnName   = 'expires';
$def->properties['expires']->propertyName = 'expires';
$def->properties['expires']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['address'] = new ezcPersistentObjectProperty();
$def->properties['address']->columnName   = 'address';
$def->properties['address']->propertyName = 'address';
$def->properties['address']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['email'] = new ezcPersistentObjectProperty();
$def->properties['email']->columnName   = 'email';
$def->properties['email']->propertyName = 'email';
$def->properties['email']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['status'] = new ezcPersistentObjectProperty();
$def->properties['status']->columnName   = 'status';
$def->properties['status']->propertyName = 'status';
$def->properties['status']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['time_zone'] = new ezcPersistentObjectProperty();
$def->properties['time_zone']->columnName   = 'time_zone';
$def->properties['time_zone']->propertyName = 'time_zone';
$def->properties['time_zone']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['date_format'] = new ezcPersistentObjectProperty();
$def->properties['date_format']->columnName   = 'date_format';
$def->properties['date_format']->propertyName = 'date_format';
$def->properties['date_format']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['date_hour_format'] = new ezcPersistentObjectProperty();
$def->properties['date_hour_format']->columnName   = 'date_hour_format';
$def->properties['date_hour_format']->propertyName = 'date_hour_format';
$def->properties['date_hour_format']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['date_date_hour_format'] = new ezcPersistentObjectProperty();
$def->properties['date_date_hour_format']->columnName   = 'date_date_hour_format';
$def->properties['date_date_hour_format']->propertyName = 'date_date_hour_format';
$def->properties['date_date_hour_format']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;


return $def;

?>