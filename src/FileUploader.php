<?php

namespace Majid\TestSmartyPhp;

class FileUploader
{
    private const UPLOAD_DIR = __DIR__ . '/test-img';

    public function upload(array $file)
    {
        try {
            \move_uploaded_file($file['tmp_name'], self::UPLOAD_DIR . '/' . $file['name']);

            return $file['name'];
        } catch (\Exception $exception) {
            throw new \Exception('cannot upload image : ' . $exception->getMessage());
        }
    }
}
