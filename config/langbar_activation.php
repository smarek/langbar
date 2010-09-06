<?php

/**
 * Langbar Activation
 *
 * @package  Langbar
 * @author   Marek Sebera <marek.sebera@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.msebera.cz
 */
class LangbarActivation {

    /**
     * onActivate will be called if this returns true
     *
     * @param  object $controller Controller
     * @return boolean
     */
    public function beforeActivation(&$controller) {
        return true;
    }

    /**
     * Called after activating the plugin in ExtensionsPluginsController::admin_toggle()
     *
     * @param object $controller Controller
     * @return void
     */
    public function onActivation(&$controller) {
        $controller->Block->save(array(
            'region_id' => 4,
            'title' => 'Langbar',
            'alias' => 'langbar',
            'body' => '[element:langbar plugin="Langbar"]',
            'show_title' => 1,
            'status' => 1
        ));
        return true;
    }

    /**
     * onDeactivate will be called if this returns true
     *
     * @param  object $controller Controller
     * @return boolean
     */
    public function beforeDeactivation(&$controller) {
        return true;
    }

    /**
     * Called after deactivating the plugin in ExtensionsPluginsController::admin_toggle()
     *
     * @param object $controller Controller
     * @return void
     */
    public function onDeactivation(&$controller) {
        $controller->Block->deleteAll(array('Block.alias' => "langbar"), false, array('beforeDelete', 'afterDelete'));
        return true;
    }

}

?>
