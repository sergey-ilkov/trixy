<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CallStreamTask;
use App\Models\CallStreamToken;
use App\Models\Post;
use App\Models\User;
use App\Services\Backend\CallStream\CallStreamService;
use App\Services\Backend\CallStream\CallStreamTaskService;
use App\Services\Backend\CallStream\CallStreamTokenService;
use App\Services\Frontend\AuthUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    //

    public function show($token)
    {
        return $token;
    }

    public function index(AuthUserService $authUser, CallStreamService $callStream, CallStreamTokenService $callStreamToken, CallStreamTaskService $callStreamTask)
    {

        // $posts = Post::where('slider', 1)->get();
        // dd($posts);

        // $token = str()->random(64);
        // $data = [
        //     'token' => $token,
        //     'url' => 'https://test.com',
        // ];

        // return view('frontend.emails.password', compact('data'));

        // dd(config('services.call_stream.url_task_last4'));
        // $access_token = $callStreamToken->getAccessToken();
        // // dd($access_token->token);
        // $res = $callStream->logout($access_token->token);

        // if ($res) {
        //     $callStreamToken->setTokensNull();

        //     dd($res);
        // }
        // dd($access_token);
        // $dataStart = Carbon::now();

        // $access_token = $callStreamToken->getAccessToken();


        // if ($access_token && $access_token->token) {
        // $phone = '38095';
        // $task = $callStream->task($access_token->token, $phone);

        // $user = User::find(10);
        // $callStreamTask->createTask($user, $task);


        // $dataEnd = Carbon::now();

        // echo $dataStart . '<br>';
        // echo $dataEnd . '<br>';
        // dd($task);
        // }
        // $task = CallStreamTask::where('task_id', '8526b440-9dd7-4a21-98e2-5851b09a8e2e')->where('expires_at', '>', Carbon::now())->first();
        // $task = CallStreamTask::where('task_id', '8526b440-9dd7-4a21-98e2-5851b09a8e2e')->first();
        // echo $task;
        // dd($task);

        // $callStreamToken->setTokensNull();

        // dd($authUser->checkTokenValidity());

        // $user = User::find(10);
        // $phone = $user->phone;
        // dd(substr($phone, 0, 3), substr($phone, -3));

        // +380952057139

        return view('frontend.test.index');


        echo 'Test call <br>';
    }
}