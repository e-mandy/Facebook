<?php

namespace Controller;

class File{

    public static function verify($file){
        $result = [];

        $ext_image = ['png', 'jpeg', 'jpg', 'webp'];
        $ext_video = ['mp4', 'mkv', 'avi'];
        $path = pathinfo($file['name']);
        if($file['size'] > 20000000){
            return [
                'size_error' => "Le fichier est trop volumineuse"
            ];
        }

        if(str_starts_with($file['type'], 'image/')){
            $result['file_type'] = 'image';
            if(!in_array($path['extension'], $ext_image)){
                return [
                    'ext_error' => "L'extension de l'image n'est pas reconnue parmi celle autorisée."
                ];
            }
        }else if(str_starts_with($file['type'], 'video/')){
            $result['file_type'] = 'video';
            if(!in_array($path['extension'], $ext_image)){
                return [
                    'ext_error' => "L'extension de la vidéo n'est pas reconnue parmi celle autorisée."
                ];
            }
        }else{
            return [
                'type_error' => 'Le type de fichier non reconnu'
            ];
        }

        $result['file'] = $file;

        return $result;
    }

    public static function save($file, $type){
        $filename = date('His').'-'.basename($file['name']);
        $dir = 'storage/';

        if($type == 'image'){
            $dir = $dir.'Images/';
        }else if($type == 'video'){
            $dir = $dir.'Videos/';
        }

        return [
            'filename' => $filename,
            'return' => move_uploaded_file($filename, $dir.'/'.$filename)
        ];

    }
}