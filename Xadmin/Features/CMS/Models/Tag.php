<?php

namespace Xadmin\Features\CMS\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = ["name", "slug", "group"];
}
