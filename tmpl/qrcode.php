<?php
/*
 *  package: Custom Fields - QR Code plugin - FREE Version
 *  copyright: Copyright (c) 2023. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 3 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Factory;

//add stylesheet for responsive container
$document = Factory::getDocument();
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