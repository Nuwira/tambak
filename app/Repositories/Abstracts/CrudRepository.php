<?php

namespace App\Repositories\Abstracts;

use App\Contracts\BasicCrud;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class CrudRepository implements BasicCrud
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function lists(Request $request)
    {
        return $this->model->get();
    }

    abstract public function paginate(Request $request, $number = 15);

    public function view($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($data = [])
    {
        return $this->model->create($data);
    }

    public function update($id, $data = [])
    {
        $model = $this->model->findOrFail($id);
        $model->fill($data);
        $model->save();

        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
    }
}
