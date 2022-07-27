<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="土爾曼API文件",
 *      description="測試Swagger文件",
 *      @OA\Contact(
 *          email="r567tw@gmail.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 * @OA\Tag(name="Ping", description="ping")
 * @OA\Tag(name="Post", description="post")
 * @OA\server(
 *      url = "https://rocky-stream-36893.herokuapp.com",
 *      description="Heroku"
 * )
 * @OA\server(
 *      url = "http://toolman.test",
 *      description="本機"
 * )
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
