<?php

class LangbarHelper extends AppHelper {

    var $helpers = array(
        'Html',
        'Layout',
    );

    function getLangs() {
	if(($langs = Cache::read('languages_all')) === false){
        $this->Language = & ClassRegistry::init('Language');
	$langs = $this->Language->find('all');
	Cache::write('languages_all', $langs);
	}
        $slug = isset($this->params["named"]["slug"]) ? $this->params["named"]["slug"] : "";
        $type = isset($this->params["named"]["type"]) ? $this->params["named"]["type"] : "";
        return array($langs, $slug, $type);
    }

}

?>
