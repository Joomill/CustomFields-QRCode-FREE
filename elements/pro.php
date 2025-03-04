<?php
/*
 *  package: Custom Fields - QR Code plugin - FREE Version
 *  copyright: Copyright (c) 2025. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 3 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Form\Field\ListField;
use Joomla\CMS\Form\FormHelper;
use Joomla\CMS\Language\Text;

FormHelper::loadFieldClass('list');

class JFormFieldPRO extends ListField
{
	protected $type = 'pro';

	protected function getInput()
	{
		$text = Text::_('PLG_FIELDS_QRCODE_PARAMS_PRO_ONLY');

		return
			'<code>' . $text . '</code>';
	}
}