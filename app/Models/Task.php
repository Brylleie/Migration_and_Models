<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_completed'
    ];

    public function addTask($record) {
        return DB::transaction(function() use ($record) {
            return self::create($record);
        });
    }

    public function updateTask($id, $record) {
        return DB::transaction(function() use ($record, $id) {
            return $this->where('id', $id)->update([
                'name' => $record['name'],
                'description' => $record['description'],
                'is_completed' => $record['is_completed'],
            ]);
        });
    }

    public function deleteTask($id) {
        return DB::transaction(function() use ($id) {
            return $this->where('id', $id)->delete();
        });
    }
}