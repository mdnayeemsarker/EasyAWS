<?php

namespace Mdnayeemsarker\EasyAws;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class NAws
{
    protected $awsAccessKeyId;
    protected $awsSecretAccessKey;
    protected $awsDefaultRegion;
    protected $awsBucket;
    protected $awsUrl;
    protected $awsPath;
    protected $storagePath;
    protected $filesystemDriver;
    protected $isDebug;
    protected $type;

    public function __construct()
    {
        $this->awsAccessKeyId = Config::get('easyaws.ne_aws_access_key_id');
        $this->awsSecretAccessKey = Config::get('easyaws.ne_aws_secret_access_key');
        $this->awsDefaultRegion = Config::get('easyaws.ne_aws_default_region');
        $this->awsBucket = Config::get('easyaws.ne_aws_bucket');
        $this->awsUrl = Config::get('easyaws.ne_aws_url');
        $this->awsPath = Config::get('easyaws.ne_aws_path');
        $this->isDebug = Config::get('easyaws.ne_is_debug', false);
        $this->type = $this->initializeTypes();

        $this->storagePath = Config::get('easyaws.ne_storage_path');
        $this->filesystemDriver = Config::get('easyaws.ne_filesystem_driver');

    }

    protected function initializeTypes(){
        return [
            'jpg' => 'image',
            'jpeg' => 'image',
            'png' => 'image',
            'svg' => 'image',
            'webp' => 'image',
            'gif' => 'image',
            'mp4' => 'video',
            'mpg' => 'video',
            'mpeg' => 'video',
            'webm' => 'video',
            'ogg' => 'video',
            'avi' => 'video',
            'mov' => 'video',
            'flv' => 'video',
            'swf' => 'video',
            'mkv' => 'video',
            'wmv' => 'video',
            'wma' => 'audio',
            'aac' => 'audio',
            'wav' => 'audio',
            'mp3' => 'audio',
            'zip' => 'archive',
            'rar' => 'archive',
            '7z' => 'archive',
            'doc' => 'document',
            'txt' => 'document',
            'docx' => 'document',
            'pdf' => 'document',
            'csv' => 'document',
            'xml' => 'document',
            'ods' => 'document',
            'xlr' => 'document',
            'xls' => 'document',
            'xlsx' => 'document',
        ];   
    }
    public function upload_file($file)
    {
        $ext = strtolower($file->getClientOriginalExtension());

        if (isset($this->type[$ext])) {
            $data['file_original_name'] = '';
            $arr = explode('.', $file->getClientOriginalName());
            for ($i = 0; $i < count($arr) - 1; $i++) {
                if ($i == 0) {
                    $data['file_original_name'] .= $arr[$i];
                } else {
                    $data['file_original_name'] .= '.' . $arr[$i];
                }
            }
            $path = $file->store($this->storagePath, $this->filesystemDriver);
            $data['extension'] = $ext;
            $data['file_name'] = $path;
            $data['file_size'] = $file->getSize();
        }
        return $data;
    }

    public function checkAwsAccessKeyId()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkAwsAccessKeyId: ' . $this->awsAccessKeyId);
        }
        return $this->awsAccessKeyId;
    }
    public function checkAwsSecretAccessKey()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkAwsSecretAccessKey: ' . $this->awsSecretAccessKey);
        }
        return $this->awsSecretAccessKey;
    }
    public function checkAwsDefaultRegion()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkAwsDefaultRegion: ' . $this->awsDefaultRegion);
        }
        return $this->awsDefaultRegion;
    }
    public function checkAwsBucket()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkAwsBucket: ' . $this->awsBucket);
        }
        return $this->awsBucket;
    }
    public function checkAwsUrl()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkAwsUrl: ' . $this->awsUrl);
        }
        return $this->awsUrl;
    }
    public function checkAwsPath()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkIsDebug: ' . $this->awsPath);
        }
        return $this->awsPath;
    }
    public function checkStoragePath()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkStoragePath: ' . $this->storagePath);
        }
        return $this->storagePath;
    }
    public function checkFilesystemDriver()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkFilesystemDriver: ' . $this->filesystemDriver);
        }
        return $this->filesystemDriver;
    }
    public function checkIsDebug()
    {
        if ($this->isDebug) {
            Log::info('NE AWS checkIsDebug: ' . $this->isDebug);
        }
        return $this->isDebug;
    }
    public function checkAll()
    {
        $all = 
        'ne_aws_access_key_id ' . $this->awsAccessKeyId . 
        ', ne_aws_secret_access_key ' . $this->awsSecretAccessKey . 
        ', ne_aws_default_region ' . $this->awsDefaultRegion . 
        ', ne_aws_bucket ' . $this->awsBucket . 
        ', ne_aws_url ' . $this->awsUrl .
        ', ne_aws_path ' . $this->awsPath .
        ', ne_storage_path ' . $this->storagePath .
        ', filesystem_driver ' . $this->filesystemDriver .
        ', isDebug ' . $this->isDebug ;
        return $all;
    }

}