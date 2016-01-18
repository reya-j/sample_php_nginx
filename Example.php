<?php
class Example {
  public function test() {
  	$text = file_get_contents("http://example.org:80/test");
    return $text;
  }
}
?>
