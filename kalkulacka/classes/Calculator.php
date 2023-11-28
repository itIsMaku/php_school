<?php

class Calculator {

    public function __construct($first, $second) {
        $this->first = $first;
        $this->second = $second;
    }

    public int $first;
    public int $second;

    public function secti() {
        return $this->first + $this->second;
    }

    public function odecti() {
        return $this->first - $this->second;
    }

    public function vynasob() {
        return $this->first * $this->second;
    }

    public function vydel() {
        return $this->first / $this->second;
    }

}

?>
