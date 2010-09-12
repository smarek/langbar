<?php

class LangbarHelper extends AppHelper {

    var $helpers = array(
        'Html',
        'Layout',
    );

    function getLangs() {
	if(($langs = Cache::read('langbar.langs')) === false){
        $this->Language = & ClassRegistry::init('Language');
        $slug = isset($this->params["named"]["slug"]) ? $this->params["named"]["slug"] : "";
        $type = isset($this->params["named"]["type"]) ? $this->params["named"]["type"] : "";
	$langs = $this->Language->find('all');
	Cache::write('langbar.langs', $langs);
	}
        return array($langs, $slug, $type);
    }

}

?>
