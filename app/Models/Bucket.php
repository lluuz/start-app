<?php

namespace App\Models;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bucket extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'buckets';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'bucket_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'location',
        'size',
    ];

    /**
     * Get the files for the bucket.
     */
    public function files()
    {
        return $this->hasMany(File::class);
    }
}
