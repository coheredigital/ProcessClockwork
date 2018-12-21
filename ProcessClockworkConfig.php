<?php 

namespace ProcessWire;

class ProcessClockworkConfig extends ModuleConfig {

	public function __construct() {
	    $this->add([
		    [
		    	"name" => "storage_period",
		    	"type" => "select",
		    	"required" => true,
		    	"label" => "Storage Period",
		    	"description" => "How far back should requests go?",
		    	"notes" => __("Requests will pile up quickly and are typically only needed for a short time, 1 hour default is recommended, options are given to help facilitate all potential use cases."),
		    	"options" => [
			        '1 hour' => __('1 hour'),
			        '3 hours' => __('3 hours'),
			        '6 hours' => __('6 hours'),
			        '12 hours' => __('12 hours'),
			        '1 day' => __('1day'),
			        '3 MONTH' => __('3 months'),
			        '6 MONTH' => __('6 months'),
			        '1 YEAR' => __('1 year')
			    ],
			    "value" => '1 hour'
		    ]
	    ]);
	}

}