<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1/23/2017
 * Time: 1:28 PM
 */
//Þessi klassi er blueprint fyrir hvernig síðan á að vera
    class csite {
        private $headers;
        private $footers;
        private $page;

        public function __construct() {
            $this->headers = array();
            $this->footers = array();
        }

        public function __destruct() {
            // Hlutir sem þú vilt eyða
        }

        public function render() {// Þetta function tekur hluti eins og footer og header og birtir þá á síðunni
            foreach($this->headers as $header) {
                include $header;
            }
            $this->page->render();

            foreach($this->footers as $footer) {
                include $footer;
            }

        }

        public function addHeader($file) {
            $this->headers[] = $file;
        }

        public function addFooter($file) {
            $this->footers[] = $file;
        }

        public function setPage(cpage $page) {
            $this->page = $page;
        }
    }
?>