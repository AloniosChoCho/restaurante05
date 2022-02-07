<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuList extends Model
{
  public function platillos(): HasMany
  {
    return $this->hasMany(SubMenuList::class, 'id_menu_list', 'id');
  }
}
