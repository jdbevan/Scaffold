<?php

class PageWithFooter extends Page {

	// Overwrite the behaviour inherited from the Page class
	protected function renderBody() {
		echo "<body>\n";
		foreach ($this->contents as $content) {
			echo "\t", $content, "\n";
		}
		$this->renderFooter();
		echo "</body>\n";
	}
	
	private function renderFooter() {
		echo "<hr>\n";
		echo "<p>We don't use cookies. We'd use the blink tag if we could though. &copy; Jon Bevan</p>\n";
	}

}

?>
