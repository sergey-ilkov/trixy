<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Langs;
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
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class TestController extends Controller
{
    //

    public function show($token)
    {
        return $token;
    }

    public function index(AuthUserService $authUser, CallStreamService $callStream, CallStreamTokenService $callStreamToken, CallStreamTaskService $callStreamTask)
    {

        echo 'Test controller <br>';

        // $currentLocale = app()->getLocale();

        // dd($currentLocale);

        // $currentLocale = app()->getLocale();
        // // ? example full sitemap
        // $sitemap = Sitemap::create();
        // foreach (Langs::LOCALES as $locale) {

        //     $segment = '';
        //     if ($locale != 'uk') {
        //         $segment = '/' . $locale;
        //     }
        //     // Add URLs to the sitemap
        //     $sitemap->add(Url::create($segment . '/')->setLastModificationDate(Carbon::yesterday()));
        //     $sitemap->add(Url::create($segment . '/services')->setLastModificationDate(Carbon::yesterday()));
        //     $sitemap->add(Url::create($segment . '/blog')->setLastModificationDate(Carbon::yesterday()));
        //     $sitemap->add(Url::create($segment . '/about')->setLastModificationDate(Carbon::yesterday()));
        //     $sitemap->add(Url::create($segment . '/contacts')->setLastModificationDate(Carbon::yesterday()));

        //     app()->setLocale($locale);
        //     // $sitemap->add(Post::all());
        //     $sitemap->add(Post::where('published', 1)->get());
        // }
        // app()->setLocale($currentLocale);
        // $sitemap->writeToFile('sitemap.xml');

        // // Generate the sitemap  

        // return;


        // ? test sitemap posts foreach
        // $currentLocale = app()->getLocale();

        // $sitemap = Sitemap::create();
        // foreach (Langs::LOCALES as $locale) {
        //     app()->setLocale($locale);
        //     // $sitemap->add(Post::all());
        //     $sitemap->add(Post::where('published', 1)->get());
        // }
        // $sitemap->writeToFile('sitemap.xml');


        // app()->setLocale($currentLocale);

        // return $sitemap;
        // ?
        // ?
        // ?
        // ?
        // ?
        // ? test sitemap posts
        // $sitemap = Sitemap::create();
        // app()->setLocale('ru');

        // $sitemap->add(Post::all());

        // return $sitemap;
        // ?
        // ?
        // ?
        // ?
        // ?
        // ?
        // ?
        // ?
        // ?
        // $sitemap = Sitemap::create();
        // foreach (Langs::LOCALES as $locale) {

        //     $segment = '';
        //     if ($locale != 'uk') {
        //         $segment = '/' . $locale;
        //     }
        //     // Add URLs to the sitemap
        //     $sitemap->add(Url::create($segment . '/')->setLastModificationDate(Carbon::yesterday()));
        //     $sitemap->add(Url::create($segment . '/services')->setLastModificationDate(Carbon::yesterday()));
        //     $sitemap->add(Url::create($segment . '/blog')->setLastModificationDate(Carbon::yesterday()));
        //     $sitemap->add(Url::create($segment . '/about')->setLastModificationDate(Carbon::yesterday()));
        //     $sitemap->add(Url::create($segment . '/contacts')->setLastModificationDate(Carbon::yesterday()));
        // }
        // // Generate the sitemap
        // return $sitemap->writeToFile('sitemap.xml');


        // foreach (Langs::LOCALES as $locale) {
        //     if ($locale == 'uk') {
        //         echo '';
        //     } else {
        //         echo '/' . $locale;
        //     }

        //     echo '<br><br>';
        // }
        // return;

        // $sitemap = Sitemap::create();

        // // Add URLs to the sitemap
        // $sitemap->add(Url::create('/')->setLastModificationDate(Carbon::yesterday()));
        // $sitemap->add(Url::create('/services')->setLastModificationDate(Carbon::yesterday()));
        // $sitemap->add(Url::create('/blog')->setLastModificationDate(Carbon::yesterday()));
        // $sitemap->add(Url::create('/about')->setLastModificationDate(Carbon::yesterday()));
        // $sitemap->add(Url::create('/contacts')->setLastModificationDate(Carbon::yesterday()));

        // // Generate the sitemap
        // return $sitemap->writeToFile('sitemap.xml');

        // Sitemap::create()
        //     ->add(
        //         Url::create('/')
        //             ->setLastModificationDate(Carbon::yesterday())
        //             ->setPriority(1)->setChangeFrequency(Url::CHANGE_FREQUENCY_ALWAYS)
        //     )
        //     ->writeToFile('sitemap.xml');
        // Sitemap::create()
        //     ->add(
        //         Url::create('/services')->setLastModificationDate(Carbon::yesterday())
        //     )
        //     ->writeToFile('sitemap.xml');

        // return;


        // dd(request()->query('page'));



        // return 'success';
        // Sitemap::create()->add(Post::all());


        // dd(url()->getHost());
        // SitemapGenerator::create('https://test.sergeyilkov.com')->writeToFile(public_path('sitemap-4.xml'));
        // SitemapGenerator::create('https://blank-numbers.com/')->writeToFile(public_path('sitemap-3.xml'));
        // SitemapGenerator::create('https://sergeyilkov.com/')->writeToFile(public_path('sitemap-2.xml'));
        // SitemapGenerator::create('https://trixy.com.ua/')->writeToFile(public_path('sitemap.xml'));
        // Artisan::call('migrate:fresh');
        // ? shedule run
        // Artisan::command('logs:clear', function () {
        //     exec('rm -f ' . storage_path('logs/*.log'));
        //     exec('rm -f ' . storage_path('logs/callstream/*.log'));
        //     $this->comment('Logs have been cleared!');
        // })->describe('Clear log files');

        // Artisan::call('logs:clear');
        // return exec('logs:clear');

        // return dd(exec('logs:clear'));


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

        // return view('frontend.test.index');


        // echo 'Test controller <br>';
    }
}