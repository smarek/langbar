<?php

class LangbarHelper extends AppHelper {

    var $helpers = array(
        'Html',
        'Layout',
    );

    function getLangs() {
        $this->Language = & ClassRegistry::init('Language');
        $slug = isset($this->params["named"]["slug"]) ? $this->params["named"]["slug"] : "";
        $type = isset($this->params["named"]["type"]) ? $this->params["named"]["type"] : "";
        return array($this->Language->find('all'), $slug, $type);
    }

}

?>