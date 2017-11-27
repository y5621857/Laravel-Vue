<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    /**
     * TODO 与视频模型一对多关联
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
