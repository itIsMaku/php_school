<?php

class Upload
{

    private $image;
    public $fileName;
    private $tempName;
    public $extension;
    private $size;
    private $allowedExtensions = array('jpeg', 'jpg', 'png');
    public $errors = array();

    public function __construct($image)
    {
        $this->image = $image;
        $this->fileName = $image['name'];
        $this->tempName = $image['tmp_name'];
        $tmp = explode('.', $this->fileName);
        $this->extension = strtolower(end($tmp));
        $this->size = $image['size'];
    }

    public function checkFile(): void
    {
        if (!in_array($this->extension, $this->allowedExtensions)) {
            $this->errors[] = "Soubor může být pouze jpeg, jpg nebo png.";

        }

        if ($this->size > 2097152) {
            $this->errors[] = "Soubor může být pouze 2MB.";
        }
    }

    public function moveFile(): bool
    {

        $this->checkFile();

        if (!empty($this->errors)) {
            $this->showErrors();
            return false;
        }

        return move_uploaded_file($this->tempName, 'images/' . $this->fileName);
    }

    public function showErrors(): void
    {
        print_r($this->errors);
    }

}