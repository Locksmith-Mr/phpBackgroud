<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/8/14
 * Time: 15:22
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * @SWG\Tag(
 *   name="pet",
 *   description="你的宠物信息",
 *   @SWG\ExternalDocumentation(
 *     description="查看更多",
 *     url="localhost:82"
 *   )
 * )
 * @SWG\Tag(
 *   name="store",
 *   description="查看宠物店订单"
 * )
 * @SWG\Tag(
 *   name="user",
 *   description="用户操作记录",
 *   @SWG\ExternalDocumentation(
 *     description="关于宠物店",
 *     url="http://swagger.io"
 *   )
 * )
 */
class TestController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/tset/{petId}",
     *     summary="通过ID查询宠物",
     *     description="返回宠物信息",
     *     operationId="getPetById",
     *     tags={"pet"},
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *     @SWG\Parameter(
     *         description="通过ID进行查询",
     *         in="path",
     *         name="petId",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful",
     *         @SWG\Schema(ref="#/definitions/Pet")
     *     )
     * )
     */
    public function test1()
    {
       $test= DB::table('product')->get();
//        response()->json($test);
//        return view('test');
        return $test;
    }

    public function test2(){
        echo "123";
    }

}