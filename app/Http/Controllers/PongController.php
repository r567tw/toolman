<?php

namespace App\Http\Controllers;

class PongController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/ping",
     *      operationId="ping",
     *      tags={"Ping"},
     *      summary="Health checker",
     *      description="Health checker",
     *      @OA\Response(
     *          response=200,
     *          description="請求成功"
     *       )
     * )
     * Returns pong
     */
    public function ping()
    {
        return response()->json(['message' => 'pong']);
    }
}
