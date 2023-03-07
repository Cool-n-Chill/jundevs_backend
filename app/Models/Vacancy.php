<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vacancies';
    protected $guarded = false;

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_vacancy', 'vacancy_id', 'skill_id');
    }
}
