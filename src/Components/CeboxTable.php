<?php
namespace Cebox\Components;

class CeboxTable {
    private $headers;
    private $data;
    private $class;
    
    public function __construct() {
        $this->headers = [];
        $this->data = [];
        $this->class = 'cebox-table';
    }
    
    public function setHeader($headers) {
        $this->headers = $headers;
        return $this;
    }
    
    public function setData($data) {
        $this->data = $data;
        return $this;
    }
    
    public function setClass($class) {
        $this->class = $class;
        return $this;
    }
    
    public function render() {
        $html = sprintf('<table class="%s">', $this->class);
        
        if (!empty($this->headers)) {
            $html .= '<thead><tr>';
            foreach ($this->headers as $header) {
                $html .= sprintf('<th>%s</th>', htmlspecialchars($header));
            }
            $html .= '</tr></thead>';
        }
        
        if (!empty($this->data)) {
            $html .= '<tbody>';
            foreach ($this->data as $row) {
                $html .= '<tr>';
                foreach ($row as $cell) {
                    $html .= sprintf('<td>%s</td>', $cell);
                }
                $html .= '</tr>';
            }
            $html .= '</tbody>';
        }
        
        $html .= '</table>';
        return $html;
    }
}