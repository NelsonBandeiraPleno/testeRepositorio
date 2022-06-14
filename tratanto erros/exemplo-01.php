<?php

//function error_handler(int $errno, string $errstr, string $errfile = '', int $errline = 0, $errcontext = array()): bool {
//    return json_encode(array(
//        'code' => $errno,
//        'message' => $errstr,
//        'file' => $errfile,
//        'line' => $errline,
//        'context' => $errcontext
//        ));
//}
//error_handler(1,'','',1, [0,1]);
//
//
//set_error_handler();
//echo 100 / 0;


try {
    echo 100 / 0;
} catch (\Throwable $th) {
    echo json_encode(
        array(
            "code"=>$th->getCode(),
            "message"=>$th->getMessage(),
            "file"=>$th->getFile(),
            "line"=>$th->getLine()
        )
    );
}