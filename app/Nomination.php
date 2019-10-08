<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    protected $fillable = ['nominator_id', 'nominee_id', 'office', 'election_at'];

    public $timestamps = ['created_at', 'updated_at', 'election_at'];

    /**
     *
     * The user who made the nomination
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nominator()
    {
        return $this->belongsTo(User::class, 'nominator_id');
    }

    public function nominee()
    {
        return $this->belongsTo(User::class, 'nominee_id');
    }

}
