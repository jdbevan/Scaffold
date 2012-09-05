<?php
class Page {
	// Public
	// Any class can access
	$title = "";
	
	// Protected
	// Inherited and parent classes have access
	protected $headers = array();
	protected $contents = array();
	
	// Private
	// Only this class can access
	private $doctype = "<!DOCTYPE html>";

	// Constructor
	// At a minimum it needs a title
	function Page($title) {
		$this->title = $title;
	}
	
	function getTitle() {
		return $this->title;
	}
	
	function addHeader($headerElement) {
		$this->headers[] = $headerElement;
	}
	
	function addContent($contentElement) {
		$this->contents[] = $contentElement;
	}
	
	function render() {
		echo $doctype, "\n";
		renderHeaders();
		renderBody();
	}
	
	// Methods that don't need to be accessible from outside
	// the class itself
	private function renderHeaders() {
		echo "<head>\n";
		echo "\t<title>" . $this->title . "</title>\n";
		foreach($this->headers as $header) {
			echo "\t", $header, "\n";
		}
		echo "</head>\n";
	}
	
	private function renderBody() {
		echo "<body>\n";
		foreach($this->contents as $content) {
			echo "\t", $content, "\n";
		}
		echo "</body>\n";
	}
}
?>
