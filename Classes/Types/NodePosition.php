<?php
namespace Ttree\Headless\Types;

use GraphQL\Type\Definition\EnumType;
use Neos\Flow\Annotations as Flow;

/**
 * A GraphQL enum type definition describing the possible values for positions in node move mutations
 */
class NodePosition extends EnumType
{

    public function __construct()
    {
        return parent::__construct([
            'name' => 'NodePosition',
            'values' => [
                'BEFORE' => ['value' => 'before'],
                'INTO' => ['value' => 'into'],
                'AFTER' => ['value' => 'after']
            ]
        ]);
    }
}
