<?php


namespace Ubiquity\controllers\vuejs;


use PHPMV\fw\ubiquity\UVueManager;
use PHPMV\VueJS;

abstract class VueJSController extends \Ubiquity\controllers\Controller {

	protected ?UVueManager $vueManager;
	protected ?VueJS $vue;

	/**
	 * Returns the new VueJS application.
	 * @return VueJS
	 */
	protected function createView():VueJS{
		return $this->vueManager->createVue('#app','app',false);
	}

	public function initialize() {
		$this->vueManager=UVueManager::getInstance($this);
		$this->vue??=$this->createView();
	}

	public function loadView($viewName, $pData = null, $asString = false) {
		$pData['script_foot'] = $this->vueManager->__toString();
		return parent::loadView($viewName, $pData, $asString);
	}


}