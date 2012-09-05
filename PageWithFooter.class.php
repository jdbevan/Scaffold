<?php

class PageWithFooter extends Page {

	function render() {
		parent::render();
		$this->renderFooter();
	}
	
	private function renderFooter() {
		echo "<hr>\n";
		echo "<p>We don't use cookies. We'd use the blink tag if we could though. &copy; Jon Bevan</p>\n";
	}

}

?>
