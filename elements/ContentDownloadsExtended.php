<?php
/**
 * Erweitertes Inhaltselement Downloads
 * Extension for Contao Open Source CMS, Copyright (C) Leo Feyer
 *
 * Copyright (C) 2017 Julian Knorr
 *
 * @package			Erweitertes Inhaltselement Downloads
 * @author			Julian Knorr <git@jknorr.eu>
 * @copytight		Copyright (C) 2017 Julian Knorr
 * @date			2017
 * @license			MIT
 */

/**
 * Content element "downloads-extended".
 *
 * @author Julian Knorr
 */
class ContentDownloadsExtended extends \ContentDownloads
{
	
	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		parent::compile();
		
		if ($this->numberOfItems > 0) {
			$files = $this->Template->files;
			$files = array_slice($files, 0, $this->numberOfItems, true);
			$this->Template->files = $files;
		}
	}
}

?>