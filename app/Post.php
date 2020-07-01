<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Post
 * @package App
 * @property int $id
 * @property string $text
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Post extends Model
{
    public function likes(): HasMany
    {
        return $this->hasMany(PostLike::class);
    }
}
