<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @SWG\Swagger(
 *     basePath="/",
 *     host="localhost:82",
 *     schemes={"http","https"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="测试 API",
 *         description="测试 API 1.0 版本",
 *         @SWG\Contact(name="测试 API Team"),
 *     )
 * )
 */
class SwaggerController extends Controller
{
    public function doc()
    {
        //或者 $swagger = \Swagger\scan(realpath(__DIR__.'/../../'));
       $swagger = \Swagger\scan(app_path('Http/Controllers/'));
        return response()->json("123", 200);
    }

}