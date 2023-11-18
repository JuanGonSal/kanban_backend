<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'order',
        'limit',
        'column_id',
        'created_user_id',
        'assigned_user_id'
    ];

    public function column()
    {
        return $this->belongsTo(Column::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Relación con el usuario creador
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_user_id');
    }

    // Relación con el usuario asignado
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }
}
