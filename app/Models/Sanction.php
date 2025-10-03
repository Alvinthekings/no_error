<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    use HasFactory;

    protected $fillable = [
        'severity',
        'major_category',
        'offense_count',
        'sanction_type',
        'description',
    ];

    /**
     * Get the sanction for a given severity, category, and offense count
     */
    public static function getSanction($severity, $majorCategory = null, $offenseCount = 1)
    {
        $query = self::where('severity', $severity)
                    ->where('offense_count', $offenseCount);

        if ($severity === 'major' && $majorCategory) {
            $query->where('major_category', $majorCategory);
        }

        return $query->first();
    }

    /**
     * Get all sanctions for a severity and category
     */
    public static function getSanctionsBySeverity($severity, $majorCategory = null)
    {
        $query = self::where('severity', $severity);

        if ($severity === 'major' && $majorCategory) {
            $query->where('major_category', $majorCategory);
        }

        return $query->orderBy('offense_count')->get();
    }
}
