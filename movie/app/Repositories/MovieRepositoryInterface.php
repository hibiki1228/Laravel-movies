<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface MovieRepositoryInterface
{
    /**
     * 映画内容の取得
     *
     * @return Model
     */
    public function getAllMovies();

    /**
     * 映画内容IDに紐づく投稿内容の取得
     *
     * @param integer $movie_id
     * @return Model
     */
    public function getMovie(Int $movie_id);

    /**
     * 投稿内容の保存
     *
     * @param Request $post_data
     * @return Model
     */
    public function store($post_data);

    // public function updateMovie(UpdateDto $updateDto);

    /**
     * 投稿削除
     *
     * @param integer $movie_id
     * @return Model
     */
    public function deleteMovie(Int $movie_id);

    /**
     * 新規投稿
     */
    public function createNew($post_data);
}
