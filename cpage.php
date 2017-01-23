<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1/23/2017
 * Time: 1:29 PM
 */
class cpage{
    private $title;
    private $content;

    public function __construct($title) {
        $this->title = $title;
    }

    public function __destruct() {
        // clean up here
    }
    //Þetta birtir textan á síðunni sem við settum inn á index.php
    public function render() {
        echo "<H1>{$this->title}</H1>";
        echo $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }
}
