<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'value',
        'setting_group_id',
        'type'
    ];

    public function group()
    {
        return $this->belongsTo(SettingGroup::class,'setting_group_id');
    }

    public static function getValue($name)
    {
        return self::where('name',$name)->pluck('value')->first();
    }
}
