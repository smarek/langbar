<?php
App::uses('Language', 'Model');
class LangbarHelper extends AppHelper {

    var $helpers = array(
        'Html',
        'Layout',
    );

    function getLangs() {
        if(($langs = Cache::read('languages_all')) === false){
            $this->Language = new Language();
            $langs = $this->Language->find('all', array('conditions' => array('status' => 1)));
            Cache::write('languages_all', $langs);
        }
        $slug = isset($this->params["named"]["slug"]) ? $this->params["named"]["slug"] : "";
        $type = isset($this->params["named"]["type"]) ? $this->params["named"]["type"] : "";
        $others = $this->params["pass"];
        return array($langs, $slug, $type, $others);
    }

}

?>
