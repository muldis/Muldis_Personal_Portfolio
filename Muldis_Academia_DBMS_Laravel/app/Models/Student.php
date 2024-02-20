<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * A "student" record represents a student.
 */
class Student extends Model
{
    /**
     * The table associated with the model.
     * (When unspecified, Eloquent defaults to 'students'.)
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The fields of the table, specifically their names.
     * This model property is actually declaring they are all mandatory.
     *
     * @var array[string]
     */
    protected $fillable = [
        'student_sid',
        'student_name',
    ];

    /**
     * The primary key associated with the table.
     * (When unspecified, Eloquent defaults to 'id'.)
     * (Note that Eloquent doesn't support multi-column PKs.)
     *
     * @var string
     */
    protected $primaryKey = 'student_sid';

    /**
     * So Eloquent doesn't try to automatically use "updated_at"/etc columns.
     */
    public $timestamps = false;
}
