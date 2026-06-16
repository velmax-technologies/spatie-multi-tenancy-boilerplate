<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

abstract class CrudController extends Controller
{
  
    protected string $model;
    protected string $jsonResource;
    protected string $formRequest;
     
    public function index(){
        $model = $this->model::all();
        return $this->jsonResource::collection($model)->additional($this->preparedResponse('index'));
    }

    public function show(int $id){
        $model = $this->model::findOrFail($id);
        return (new $this->jsonResource($model))->additional($this->preparedResponse('show'));
    }

    public function store(){
        $request = app($this->formRequest)->validated();
        $model = $this->model::create($request);
        return (new $this->jsonResource($model))->additional($this->preparedResponse('store'));
    }

    public function update(int $id){
        $request = app($this->formRequest)->validated();
        $model = $this->model::findOrFail($id);
        $model->fill($request);
        $model->save();
        return (new $this->jsonResource($model))->additional($this->preparedResponse('update'));
    }

    public function destroy(int $id){
        $model = $this->model::findOrFail($id);
        $model->delete();
        return (new $this->jsonResource($model))->additional($this->preparedResponse('destroy'));
    }
    

    // hooks
    protected function afterStore(Model $record, FormRequest $request): void {}
    protected function afterUpdate(Model $record, FormRequest $request): void {}
    protected function afterDestroy(Model $record, FormRequest $request): void {}
}
