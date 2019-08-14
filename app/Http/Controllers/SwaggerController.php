<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @SWG\Swagger(
 *     basePath="/",
 *     host="域名",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="测试 API",
 *         description="测试 API 1.0 版本",
 *         termsOfService="/",
 *         @SWG\Contact(name="测试 API Team"),
 *         @SWG\License(name="MIT")
 *     ),
 *     @SWG\Definition(
 *         definition="ErrorModel",
 *         type="object",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
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