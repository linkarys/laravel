<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	// $this->layout = 'layout.master';

	protected function setupLayout() {

		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}