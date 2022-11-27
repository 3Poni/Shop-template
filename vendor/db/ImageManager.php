<?php

namespace Vendor\DB;

use Vendor\DB\Contracts\IFileManager;


class ImageManager implements IFileManager
{
    public string $filename;
    public string $file_tmp_name;

    public function store($file, string $location): string
    {
        $meme = explode('.', $file['name']);
        $this->file_tmp_name = $file['tmp_name'];
        $this->filename = uniqid() . '.' . $meme[count($meme) - 1];
        move_uploaded_file($this->file_tmp_name, $location . $this->filename);
        return $this->filename;
    }

    public function delete($file, string $location)
    {
        $file_path = $location . $file;
        $base_dir = realpath($_SERVER["DOCUMENT_ROOT"]);
        $file_delete = "$base_dir$file_path";
        if (file_exists($file_delete)) {
            unlink($file_delete);
        } else {
            echo "Файла не существует";
        }
    }

}