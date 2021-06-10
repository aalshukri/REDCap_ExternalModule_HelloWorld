<?php
/**
 * Hello World External Module
 * @author Ayesh Alshukri
 * @version 1.0
 */
namespace Company\HelloWorldExternalModule;

/**
 * Summary : Class to provide Hello World External Module.
 * Class HelloWorldExternalModule
 * @package Company\HelloWorldExternalModule
 */
class HelloWorldExternalModule extends \ExternalModules\AbstractExternalModule {

    public function __construct() {
        parent::__construct();
        // Other code to run when object is instantiated
    }

    function redcap_data_entry_form($project_id, $record, $instrument, $event_id, $group_id, $repeat_instance)
    {
        print '<div class="yellow">Hello World.</div>';
    }

}