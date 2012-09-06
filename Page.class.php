<?php
class Page {
	// Public
	// Any class can access
	public $title = "";
	
	// Protected
	// Inherited and parent classes have access
	protected $headers = array();
	protected $contents = array();
	
	// Private
	// Only this class can access
	private $doctype = "<!DOCTYPE html>";

	// Constructor
	// At a minimum it needs a title
	function __construct($title) {
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
		echo $this->doctype, "\n";
		$this->renderHeaders();
		$this->renderBody();
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
	
	// Must be protected so that PageWithFooter can 'overwrite' it
	// if it's private then PageWithFooter won't have a renderBody function
	// and when PageWithFooter::render() is called, it'll call this function
	// anyway, (unless the render function has been 'overwritten'...)
	protected function renderBody() {
		echo "<body>\n";
		foreach($this->contents as $content) {
			echo "\t", $content, "\n";
		}
		echo "</body>\n";
	}
}
?>
