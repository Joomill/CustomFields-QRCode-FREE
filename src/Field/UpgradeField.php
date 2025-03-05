<?php
/*
 *  package: Custom Fields - QR Code plugin - FREE Version
 *  copyright: Copyright (c) 2025. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 3 or later
 *  link: https://www.joomill-extensions.com
 */

namespace Joomill\Plugin\Fields\Qrcode\Field;

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Form\FormField;
use Joomla\CMS\Language\Text;

class UpgradeField extends FormField
{
	protected $type = 'upgrade';

	protected function getInput()
	{
		$text = Text::_('PLG_FIELDS_QRCODE_FREE_VERSION');

		return
			'<div class="alert alert-warning text-center small">' . $text . '<br/> 
			 <a class="btn btn-success btn-sm text-white mt-3" target="_blank" href="https://www.joomill-extensions.com/extensions/custom-fields-plugins">Custom Fields PRO</a></div>';
	}
}