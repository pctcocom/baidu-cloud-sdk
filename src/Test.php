<?php
namespace Pctco\BaiDuCloudSdk;
include 'BaiduBce.phar';

use BaiduBce\BceClientConfigOptions;
use BaiduBce\Util\MimeTypes;
use BaiduBce\Http\HttpHeaders;
use BaiduBce\Services\Bos\BosClient;
class Test{
   public function abc(){
      //新建BosClient
      $client = new BosClient([
         'credentials' => array(
            'accessKeyId' => '38a266e2928f404693838981c68bf8bd',
            'secretAccessKey' => '3d00f32caab94c12bbd97c7999f31f9e',
            'sessionToken' => ''
        ),
        'endpoint' => 'http://bd.bcebos.com',
        'stsEndpoint' => '',
      ]);
      // try {
      //    $client->putObjectFromFile('app-develop-test', 'abc.jpg',app()->getRootPath().'entrance/uploads/temp/21/05/608d56b2dc82d.jpg');
      //    return true;
      // } catch (\BaiduBce\Exception\BceBaseException $e) {
      //    // $e->getStatusCode()
      //    return false;
      // }

      // 删除文件
      // try {
      //    $client->deleteObject('app-develop-test', 'abc.jpg');
      //    return true;
      // } catch (\BaiduBce\Exception\BceBaseException $e) {
      //    // $e->getStatusCode()
      //    return false;
      // }

      // 判断文件是否存在
      // try {
      //    $client->getObjectMetadata('app-develop-test', 'abc.jpg');
      //    return true;
      // } catch (\BaiduBce\Exception\BceBaseException $e) {
      //    // $e->getStatusCode()
      //    return false;
      // }

      // $status =

      return $status;
   }
}
