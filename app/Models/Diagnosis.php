<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
    protected $table = 'diagnosis';
    protected $casts = [
        "gejala" => "array",
    ];

    /**
     * Get the user that owns the Diagnosis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }
}
