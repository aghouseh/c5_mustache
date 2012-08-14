<?php defined('C5_EXECUTE') or die(_("Access Denied."));

/**
 * Class that allows for the implementation of the Mustache templating engine
 * @package Mustache
 * @author Andrew Householder <aghouseh@me.com>
 * @category Packages
 * @copyright  Copyright (c) 2012 Andrew Householder. (http://www.aghouseh.com)
 * Special thanks to Tom Selleck for the inspiration that is his most excellent mustache.
 */

class MustachePackage extends Package {

	protected $pkgHandle = 'mustache';
	protected $appVersionRequired = '5.4.1';
	protected $pkgVersion = '0.9.0';
	
	public function getPackageDescription() {
		return t("Provides access to the Mustache templating engine for PHP and JavaScript throughout your site.");
	}
	
	public function getPackageName() {
		return t("Mustache");
	}
	
	public function install() {
		$pkg = parent::install();
	}
	
	public function on_start() {
		View::getInstance()->addFooterItem(Loader::helper('html')->javascript('mustache.js', $this->pkgHandle));
	}

}