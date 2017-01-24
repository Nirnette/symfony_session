<?php

namespace AppBundle\FileManager;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/01/17
 * Time: 08:25
 */
interface InterfaceFileManager
{
    /**
     * @param array $files
     * @param $folderName
     */
    public function upload(array $files, $folderName);


}