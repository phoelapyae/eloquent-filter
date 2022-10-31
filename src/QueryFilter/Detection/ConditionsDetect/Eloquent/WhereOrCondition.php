<?php

namespace eloquentFilter\QueryFilter\Detection\ConditionsDetect\Eloquent;

use eloquentFilter\QueryFilter\Detection\DetectorConditionsContract;
use eloquentFilter\QueryFilter\Queries\WhereOr;

/**
 * Class WhereOrCondition.
 */
class WhereOrCondition implements DetectorConditionsContract
{
    /**
     * @param $field
     * @param $params
     * @param $is_overide_method
     *
     * @return string|null
     */
    public static function detect($field, $params, $is_overide_method = false): ?string
    {
        if ($field == 'or') {
            $method = WhereOr::class;
        }

        return $method ?? null;
    }
}
