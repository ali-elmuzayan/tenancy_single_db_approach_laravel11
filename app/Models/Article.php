<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $guarded = [];


    public function tenant() {
        return $this->belongsTo(Tenant::class);
    }

    

    public static function booted() {
        static::addGlobalScope(new TenantScope);

        static::creating(function (Article $article) {
            $article->tenant_id = Auth::user()->tenant_id;
        });
    }
}
