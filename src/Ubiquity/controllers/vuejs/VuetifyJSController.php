<?php


namespace Ubiquity\controllers\vuejs;


use PHPMV\VueJS;

abstract class VuetifyJSController extends VueJSController {
	protected function createView(): VueJS {
		return $this->vueManager->createVue('v-app','app',true);
	}

}