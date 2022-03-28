<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\MovieService;
use App\Http\Requests\MovieRequest;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Null_;

class MovieController extends Controller
{

    public function __construct(
        MovieService $movieService
    ) {
        $this->movieService = $movieService;
    }

    /**
     * 映画一覧ページの表示
     *
     * @return view
     */
    public function index()
    {
        $movie_infos = $this->movieService->getALLMovies();
        return view('admin.movies.index', ['movie_infos' => $movie_infos]);
    }

    /**
     * 新規投稿作成
     *
     * @return view
     */
    public function create(/*MovieRequest $post_data*/)
    {
        // $this->movieService->create($post_data);
        return view('admin.movies.create');
    }

    /**
     * 新規作成・投稿編集の情報保存
     *
     * @param MovieRequest $post_data
     * @return view
     */
    public function store(MovieRequest $post_data)
    {
        dd($post_data);
        $this->movieService->store($post_data);
        return redirect(route('movies.index'));
    }

    /**
     * 投稿編集
     *
     * @param integer $movie_id
     * @return view
     */
    public function edit(int $movie_id)
    {
        $movie_info = $this->movieService->getMovie($movie_id);
        return view('admin.movies.edit', ['movie_info' => $movie_info]);
    }

    /**
     * 投稿編集
     *
     * @param integer $movie_id
     * @return view
     */
    public function show(int $movie_id)
    {
        $movie_info = $this->movieService->getMovie($movie_id);
        return view('admin.movies.show', ['movie_info' => $movie_info]);
    }

    /**
     * 投稿削除
     *
     * @param integer $movie_id
     * @return view
     */
    public function deleteMovie(int $movie_id)
    {
        $this->movieService->deleteMovie($movie_id);
        return redirect(route('movies.index'));
    }
}
