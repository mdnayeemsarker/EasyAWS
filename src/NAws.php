<?php

namespace Mdnayeemsarker\EasyAws;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class NAws
{
    protected $awsAccessKeyId;
    protected $awsSecretAccessKey;
    protected $awsDefaultRegion;
    protected $awsBucket;
    protected $awsUrl;
    protected $isDebug;

    public function __construct()
    {
        $this->awsAccessKeyId = Config::get('app.ne_aws_access_key_id');
        $this->awsSecretAccessKey = Config::get('app.ne_aws_secret_access_key');
        $this->awsDefaultRegion = Config::get('app.ne_aws_default_region');
        $this->awsBucket = Config::get('app.ne_aws_bucket');
        $this->awsUrl = Config::get('app.ne_aws_url');
        $this->isDebug = Config::get('app.ne_is_debug', false);
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
        ', ne_aws_secret_access_key ' . $this->awsAccessKeyId . 
        ', ne_aws_default_region ' . $this->awsAccessKeyId . 
        ', ne_aws_bucket ' . $this->awsAccessKeyId . 
        ', ne_aws_url ' . $this->awsAccessKeyId ;
        ', isDebug ' . $this->isDebug ;
        return $all;
    }

}