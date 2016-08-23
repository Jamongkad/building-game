<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    //
    protected $table = 'Choice';

    public function scopeChoices($query) {
        return $query->leftJoin('Decision', 'Choice.id', '=', 'Decision.decisionId')->select([
            'Choice.id AS ChoiceId', 'Decision.id AS DecisionId', 'Choice.desc', 'Decision.ifTrueDecisionId', 'Decision.ifFalseDecisionId'
        ]);
    }
}
