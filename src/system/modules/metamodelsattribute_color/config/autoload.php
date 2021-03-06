<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package     MetaModels
 * @subpackage  AttributeColor
 * @author      Stefan Heimes <cms@men-at-work.de>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'MetaModelAttributeColor'              => 'system/modules/metamodelsattribute_color/MetaModelAttributeColor.php',
	'TableMetaModelsAttributeColor'        => 'system/modules/metamodelsattribute_color/TableMetaModelsAttributeColor.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mm_attr_color'              => 'system/modules/metamodelsattribute_color/templates',
));
