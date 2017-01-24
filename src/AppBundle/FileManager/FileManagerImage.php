<?php

namespace AppBundle\FileManager;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Upload;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/01/17
 * Time: 08:26
 */
class FileManagerImage implements InterfaceFileManager
{


    /**
     * @param array $files
     * @param $folderName
     */
    public function upload (array $files = array(), $folderName)
    {

        $fileCollections = new ArrayCollection();
        $dir = 'uploads/'.$folderName;

        if (!file_exists($dir)){
            mkdir($dir, 0755, true);
        }

        foreach ($files as $file){
            if ($file){
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $dir,
                    $fileName
                );

                $upload = new Upload();
                $upload->setPath($dir.'/'.$fileName);
                $fileCollections->add($upload);
            }

        }
        return $fileCollections;
    }


}