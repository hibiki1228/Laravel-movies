<?php

namespace App\Repositories;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\UpdateDto;
use App\Entities\Movie\MovieList;

class MovieRepository implements MovieRepositoryInterface
{
    public function __construct(Movie $movies)
    {
        $this->movie = $movies;
    }

    /**
     * 投稿内容の取得
     *
     * @return Model
     */
    public function getAllMovies()
    {
        return $this->movie
            ->select('*')
            ->where('is_showing', '=', 1)
            ->get();
    }

    /**
     * 投稿内容IDに紐づく投稿内容の取得
     *
     * @param integer $movie_id
     * @return Model
     */
    public function getMovie(Int $movie_id)
    {
        return $this->movie->find($movie_id);
    }

    /**
     * 投稿内容の保存
     *
     * @param Request $post_data
     * @return Model
     */
    public function store($post_data)
    {
        dd($post_data);
        Movie::where('id', $post_data->id)->update([
            'title' => $post_data->title,
            'image_url' => $post_data->image_url
        ]);
    }

    /**
     * 投稿削除
     *
     * @param integer $movie_id
     * @return Model
     */
    public function deleteMovie(Int $movie_id)
    {
        return $this->movie->where('id', '=', $movie_id)->update(['is_showing' => 0]);
    }

    /**
     * 新規投稿
     *
     *
     */
    public function createNew($post_data)
    {
        Movie::createNew([
            'title' => $post_data->title,
            'image_url' => $post_data->image_url
        ]);
    }
}
