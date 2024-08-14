<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameClient',
        'lastname',
        's_lastname',
        'email',
        'phone',
        'id_state',
        'id_town'
    ];

    public function StateFunction():BelongsTo{
        return $this->belongsTo(State::class, 'id_state');
    }

    public function TownFunction():BelongsTo{
        return $this->belongsTo(Town::class, 'id_town');
    }
}
