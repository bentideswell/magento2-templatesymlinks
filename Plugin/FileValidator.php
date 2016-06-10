<?php
/**
 * FishPig_TemplateSymlinks
 * http://fishpig.co.uk/
 */
	
namespace FishPig\TemplateSymlinks\Plugin;

class FileValidator 
{
	/**
	 * Allow for any file as long as it exists to be used for a template
	 *
	 * @param object $subject
	 * @param callback $proceed
	 * @param string $filename
	 * @return bool
	**/
	public function aroundIsValid($subject, $proceed, $filename)
	{
		return $proceed($filename) || file_exists($filename);
	}
}