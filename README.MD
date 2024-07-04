# Laravel Easy AWS

THis is This is an aws helper package. If you use this package and that one is compleatly manage your aws file upload, delete, file url, download etc.

## Installation

To install the package, use Composer:

```bash
composer require mdnayeemsarker/easy-aws
```

Set Key for aws use in config/app.php

```bash
'ne_aws_access_key_id' => env('NE_AWS_ACCESS_KEY_ID', 'or set here'),
'ne_aws_secret_access_key' => env('NE_AWS_SECRET_ACCESS_KEY', 'or set here'),
'ne_aws_default_region' => env('NE_AWS_DEFAULT_REGION', 'or set here'),
'ne_aws_bucket' => env('NE_AWS_BUCKET', 'or set here'),
'ne_aws_url' => env('NE_AWS_URL', 'or set here'),
'ne_is_debug' => env('NE_IS_DEBUG', 'or set here true/false'),
```

Set Key for variable in env (optional)

```bash
NE_AWS_ACCESS_KEY_ID='AWS_ACCESS_KEY_ID'
NE_AWS_SECRET_ACCESS_KEY='AWS_SECRET_ACCESS_KEY'
NE_AWS_DEFAULT_REGION='AWS_DEFAULT_REGION'
NE_AWS_BUCKET='AWS_BUCKET'
NE_AWS_URL='AWS_URL'
NE_IS_DEBUG='true/false'
```

* find this crediential in your aws S3 bucket console.


## Getting To Know Yeoman

* Feel free to [learn more about MD NAYEEM SARKER](https://github.com/mdnayeemsarker).


## License

MIT © [MD NAYEEM SARKER](https://github.com/mdnayeemsarker)