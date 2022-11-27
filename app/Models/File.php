<?php

namespace App\Models;

use App\Models\Bucket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'size',
    ];

    /**
     * Get the bucket that includes a file.
     */
    public function bucket()
    {
        return $this->belongsTo(Bucket::class);
    }
}
