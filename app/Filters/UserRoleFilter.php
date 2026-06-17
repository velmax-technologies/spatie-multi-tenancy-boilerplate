<?php

namespace App\Filters;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class UserRoleFilter implements Filter
{
    public function __invoke(
        Builder $query,
        mixed $value,
        string $property
    ): void {
        $query->whereHas('roles', function ($q) use ($value) {
            $q->where('name', $value);
        });
    }
}
