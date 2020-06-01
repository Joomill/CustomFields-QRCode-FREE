<?php
/**
 * Custom Fields - QR Code plugin for Joomla
 *
 * @author Joomill (info@joomill-extensions.com)
 * @copyright Copyright (c) 2017 Joomill
 * @license GNU Public License
 * @link https://www.joomill-extensions.com/
 */

defined('_JEXEC') or die;

//add stylesheet for responsive container
$document = JFactory::getDocument();
$document->addStylesheet('plugins/fields/qrcode/tmpl/style.css');

$value = $field->value;
$align = $fieldParams->get('align');
$size = $fieldParams->get('size');
$color = $fieldParams->get('color');
$color = substr($color, 1);
$bgcolor = $fieldParams->get('bgcolor');
$bgcolor = substr($bgcolor, 1);

$ratio = "";

if ($value == '')
{
	return;
}

echo '<div align="'.$align.'" id="qr_'. $value.'">
<img src="https://api.qrserver.com/v1/create-qr-code/?data=' . urlencode( $value ) . '&amp;size=' . $size . 'x' . $size . '&amp;format=png&amp;color=' . $color . '&amp;bgcolor=' . $bgcolor . '" />
</div>';