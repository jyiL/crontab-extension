<?php

namespace Dcat\Admin\Crontab\Models;

use Illuminate\Database\Eloquent\Model;

class Crontabs extends Model
{
    //
    protected $table = 'crontab';

    public function crontabLog(){
        return $this->hasMany(CrontabLogs::class, 'cid', 'id');
    }
}
