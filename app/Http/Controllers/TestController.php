<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use OSS\OssClient;
use OSS\Core\OssException;

class TestController extends Controller
{
    //
    protected $accessKeyId='LTAICK1JDSHU98OY';
    protected $accessKeySecret='Ib6tR9PRW0hY3TB1ZePTMBSELcSP8a';

    public function index()
    {
        $ossClient = new OssClient($this->accessKeyId, $this->accessKeySecret, 'oss-cn-beijing.aliyuncs.com');
        $bucket='a1809a';
        $object='b.txt';
        $content ='lllll';
        $cc=$ossClient->putObject($bucket, $object, $content);
        var_dump($cc);
    }


    public function vedio()
    {
            $ossClient = new OssClient($this->accessKeyId, $this->accessKeySecret, 'oss-cn-beijing.aliyuncs.com');
            $bucket='a1809a';
            $object=Str::random(15).time().mt_rand(1,99999);

            //获取所有的文件
        $path=storage_path('app/public/files');
           $file= scandir($path);
           foreach ($file as $k=>$v)
           {
                if($v=='.'||$v == '..'){
                    continue;
                }else{
                    $content = $path.'/'.$v;
                    try{
                        $cc=$ossClient->uploadFile($bucket,'files/'.$v,$content);
                    } catch(OssException $e) {
                        printf(__FUNCTION__ . ": FAILED\n");
                        printf($e->getMessage() . "\n");
                        return;
                    }
                    unlink($content);
                    echo $v.'上传成功';
                }
           }
    }
}
