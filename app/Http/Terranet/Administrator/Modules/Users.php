<?php

namespace App\Http\Terranet\Administrator\Modules;


use Terranet\Administrator\Collection\Mutable as MutableCollection;
use Terranet\Administrator\Field\Enum;
use Terranet\Administrator\Modules\Users as CoreUsersModule;

/**
 * Administrator Users Module.
 */
class Users extends CoreUsersModule
{
    protected $showActions = false;
    public function form()
    {
        return $this->scaffoldForm()
            ->update('role',function ($field){
                return Enum::make('Role','role')->setOptions($this->model()::ROLES) ;
            });
    }

    public function columns(): MutableCollection
    {
        return $this->scaffoldColumns()
            ->update('role',function ($field){
                return Enum::make('Role','role')->setOptions($this->model()::ROLES) ;
            });
    }

    public function showIf()
    {
        return auth()->user()->isSuperAdmin;
    }

    public function linkAttributes()
    {
        return ['icon' => 'fas fa-users-cog', 'id' => $this->url()];
    }
}
