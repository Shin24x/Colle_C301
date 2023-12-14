<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    // Define the table associated with the model
    protected $table = 'ts_quiz_questions';

    // Define the fillable columns
    protected $fillable = [
        'module_id',
        'difficulty_level',
        'question_text',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'correct_option', // Add this line
    ];

    // Add any additional methods or relationships here
}
