<?php

declare(strict_types=1);

namespace Manzadey\LaravelOrchidHelpers\Orchid\Helpers\Sights;

use Orchid\Screen\Fields\Label;
use Orchid\Screen\Sight;

class ForeignSight
{
    public static function make($entityName, $propertyName, string $title) : Sight
    {
        return Sight::make($entityName, $title ?? attrName($entityName))
        ->render(function ($model) use ($entityName, $propertyName){
            return  Label::make()->value(optional($model->$entityName)->$propertyName);
        });
    }
}
