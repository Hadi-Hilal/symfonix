<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company_name',
        'project_budget',
        'service_interest',
        'service_id',
        'service_matches',
        'problem_statement',
        'chat_transcript',
        'meta',
        'botman_user_id',
        'botman_driver',
        'locale',
        'ip_address',
        'blocked',
    ];

    public function service()
    {
        return $this->belongsTo(\Modules\Services\Models\Service::class);
    }

    protected $casts = [
        'service_matches' => 'array',
        'chat_transcript' => 'array',
        'meta' => 'array',
    ];
}
