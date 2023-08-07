<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\Users\UserCreateRequest;
use App\Http\Requests\Api\Users\UserUpdateRequest;
use App\Http\Transformers\UserTransformer;
use App\Repositories\Eloquent\UserRepository;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @property UserRepository
     */
    private $repository;

    public function __construct(
        UserTransformer $transformer,
        UserRepository $repository,
        Request $request
    ){
        parent::__construct($transformer, $request);
        $this->repository = $repository;
    }

    public function index()
    {
        $users = $this->repository->all();
        return $this->respondWithCollection($users);
    }

    public function show(int $id)
    {
        $user = $this->repository->find($id);
        return $this->respondWithItem($user);
    }

    public function create(UserCreateRequest $request)
    {
        $user = $this->repository->create($request->validated());
        return $this->respondWithItem($user, 201);
    }

    public function update(UserUpdateRequest $request)
    {
        $updated = $this->repository->update($request->validated(), $request->input('user_id'));

        if(!$updated)
            throw new Exception(__('messages.controller.common.error_500'), 500);

        return $this->respondWithMessage(__('messages.controller.user.updated'));
    }

    public function delete($id)
    {
        $deleted = $this->repository->delete($id);

        if(!$deleted)
            throw new Exception(__('messages.controller.common.error_500'), 500);

        return $this->respondWithMessage(__('messages.controller.user.deleted'));
    }
}
