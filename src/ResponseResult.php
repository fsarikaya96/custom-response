<?php

namespace Justfeel\Response;

class ResponseResult
{
    public static function generate(bool $success = true, $message = null, int $statusCode = 200) : object
    {
        if ($success) {
            return response()->json(['success' => $success, 'message' => $message], $statusCode);
        } else {
            return response()->json(['success' => $success, 'errors' => $message, 'errorCode' => $statusCode],$statusCode);
        }
    }
}
