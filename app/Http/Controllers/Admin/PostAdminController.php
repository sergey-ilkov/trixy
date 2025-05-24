<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostAdminFormRequest;
use App\Models\Language;
use App\Services\Admin\PostAdminService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class PostAdminController extends Controller
{

    public $postService;

    public function __construct(PostAdminService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {

        $posts = $this->postService->getPagination(10);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $languages = Language::all();
        return view('admin.posts.create', compact('languages'));
    }

    public function store(PostAdminFormRequest $request)
    {



        $request->validate([
            'image' => 'required',
        ]);

        $post = $this->postService->createPost($request);


        if ($post) {
            alert(__('admin.success.create'));
        } else {
            alert(__('admin.errors.error'), 'danger');
        }

        return back();
    }

    public function show($id)
    {

        $post = $this->postService->showPost($id);

        if (!$post) {
            alert(__('admin.errors.no-data'), 'danger');
            return back();
        }

        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {


        $post = $this->postService->getPost($id);

        if (!$post) {
            alert(__('admin.errors.no-data'), 'danger');
            return back();
        }
        $languages = Language::all();
        return view('admin.posts.edit', compact('post', 'languages'));
    }

    public function update(PostAdminFormRequest $request, $id)
    {


        $res = $this->postService->updatePost($id, $request);

        if ($res) {
            alert(__('admin.success.updated'));
        } else {
            alert(__('admin.errors.error'), 'danger');
        }

        return back();
    }
    public function destroy($id)
    {

        if (auth()->user()->role !== 'superadmin') {

            alert(__("You don't have access"), 'danger');
            return back();
        }

        $res = $this->postService->deletePost($id);

        if ($res) {
            alert(__('admin.success.delete'));
        } else {
            alert(__('admin.errors.delete'), 'danger');
        }

        return back();
    }
}