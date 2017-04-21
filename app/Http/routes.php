<?php
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
session_start();
$app->get('/', function () {
    return view('base',['postpath' => route('postpath')]);
});

$app->post('/',['as' => 'postpath', function() use ($app) {
    $request = $app->request;
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'comment' => 'required'
    ]);

    if($request->input('messages') == '' || $request->input('messages') == null){
        $client = new Client();
        $res = $client->post(env('API_URL'), [
            'auth' => [env('API_USERNAME'), env('API_PASSWORD')],
            'content-type' => 'application/json',
            'json' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'description' => $request->input('comment')
            ]
        ]);

        if($res->getReasonPhrase() != "Created" ){
            return redirect()->back()->withMessage("Unable to process")->withInput();
        }
    }

    return view('thanks');
}]);
