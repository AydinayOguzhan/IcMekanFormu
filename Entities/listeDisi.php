<?php

class ListeDisi{
    private $header;
    public function getHeader()
    {
        return $this->header;
    }
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    private $input;
    public function getInput()
    {
        return $this->input;
    }
    public function setInput($input)
    {
        $this->input = $input;
        return $this;
    }
}