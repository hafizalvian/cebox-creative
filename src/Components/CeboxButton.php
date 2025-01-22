<?php
namespace Cebox\Components;

class CeboxButton {
    private $text;
    private $type;
    private $class;
    private $icon;
    private $disabled;
    private $loading;
    
    public function __construct() {
        $this->text = '';
        $this->type = 'button';
        $this->class = 'cebox-btn';
        $this->icon = '';
        $this->disabled = false;
        $this->loading = false;
    }
    
    public function setTeks($text) {
        $this->text = $text;
        return $this;
    }
    
    public function setTipe($type) {
        $this->type = $type;
        return $this;
    }
    
    public function setClass($class) {
        $this->class = $class;
        return $this;
    }
    
    public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }
    
    public function setDisabled($disabled) {
        $this->disabled = $disabled;
        return $this;
    }
    
    public function setLoading($loading) {
        $this->loading = $loading;
        return $this;
    }
    
    public function render() {
        $disabled = $this->disabled ? ' disabled' : '';
        $loadingClass = $this->loading ? ' cebox-loading' : '';
        $class = $this->class . $loadingClass;
        
        return sprintf(
            '<button type="%s" class="%s"%s>%s%s</button>',
            $this->type,
            $class,
            $disabled,
            $this->icon ? "<span class=\"cebox-icon\">{$this->icon}</span>" : '',
            $this->text
        );
    }
}