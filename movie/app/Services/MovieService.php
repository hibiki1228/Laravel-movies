<?php

namespace App\Services;

use App\Repositories\MovieRepositoryInterface;
use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\FindByIdDto;
use App\Http\Dto\Movie\UpdateDto;
use App\Entities\Movie\MovieList;
use App\Entities\Movie\Movie;
use App\Http\Requests\MovieRequest;

class MovieService
{
    public function __construct(
        MovieRepositoryInterface $movieRepository
    ) {
        $this->movieRepository = $movieRepository;
    }

    /**
     * 投稿内容の取得
     *
     * @return Model
     */
    public function getAllMovies()
    {
        return $this->movieRepository->getAllMovies();
    }

    /**
     * 投稿内容の保存
     *
     * @param Request $post_data
     * @return Model
     */
    public function store(MovieRequest $post_data)
    {
        return $this->movieRepository->store($post_data);
    }

    /**
     * 投稿内容IDに紐づく投稿内容の取得
     *
     * @param integer $movie_id
     * @return Model
     */
    public function getMovie(int $movie_id)
    {
        return $this->movieRepository->getMovie($movie_id);
    }

    /**
     * 投稿削除
     *
     * @param integer $movie_id
     * @return Model
     */
    public function deleteMovie(int $movie_id)
    {
        $this->movieRepository->deleteMovie($movie_id);
    }

    public function createNew(MovieRequest $post_data)
    {
        return $this->movieRepository->createNew($post_data);
    }
}
