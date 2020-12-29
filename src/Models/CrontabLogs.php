<?php

namespace Dcat\Admin\Crontab\Models;

use Illuminate\Database\Eloquent\Model;

class CrontabLogs extends Model
{
    //
    protected $table = 'crontab_log';
    protected $fillable = ['type'];

    public function crontab(){
        return $this->belongsTo(Crontabs::class, 'cid', 'id');
    }
}
