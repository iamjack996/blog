<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Posts;

class PostController extends Controller
{
    private $postsModel;

    public function __construct(Posts $postsModel)
    {
        $this->postsModel = $postsModel;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws Exception
     */
    public function index()
    {
        try {
            $posts = $this->postsModel->index();
        } catch (Exception $e) {
            dd($e);
            throw new Exception('Posts Get All Failed');
        }
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function store(Request $request)
    {
        try {
            $post = $this->postsModel->store($request);
            if (!$post) {
                return redirect()->route('posts.create');
            }
//            dd($post);
            return redirect()->route('posts.index');
        } catch (Exception $e) {
            dd($e);
            throw new Exception('Store A New Posts Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
