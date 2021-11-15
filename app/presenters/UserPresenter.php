<?php

namespace App\presenters;

use Illuminate\Database\Eloquent\Model;

class UserPresenter
{
    public $model;
    public function __construct(Model $model)
    {
      $this->model = $model;
    }
    public function name()
    {
      if ($this->model->id === auth()->id()) {
        return 'You';
      }

      return $this->model->name;
    }

    public function avatar()
    {
      return 'https://www.gravatar.com/avatar/' . md5($this->model->email) . '?s=80&d=mm';
    }
}
