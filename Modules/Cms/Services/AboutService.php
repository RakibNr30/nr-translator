<?php

namespace Modules\Cms\Services;


use Modules\Cms\Repositories\AboutRepository;

class AboutService
{
    /**
     * @var $aboutRepository
     */
    protected $aboutRepository;

    /**
     * Constructor
     *
     * @param AboutRepository $aboutRepository
     */
    public function __construct(AboutRepository $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->aboutRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->aboutRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->aboutRepository->find($id);
    }

    /**
     * Update data
     *
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        return $this->aboutRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->aboutRepository->delete($id);
    }

    /**
     * Find data
     *
     * @param $attribute
     * @param $value
     * @return mixed
     */
    public function findBy($attribute, $value)
    {
        return $this->aboutRepository->findBy($attribute, $value);
    }

    /**
     * First or create data
     *
     * @param $data
     * @return mixed
     */
    public function firstOrCreate($data)
    {
        return $this->aboutRepository->model->firstOrCreate($data);
    }

    /**
     * First data
     *
     * @return mixed
     */
    public function first()
    {
        return $this->aboutRepository->model->first();
    }
}
