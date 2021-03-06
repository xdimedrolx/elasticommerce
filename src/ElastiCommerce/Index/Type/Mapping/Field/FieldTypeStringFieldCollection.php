<?php
namespace SmartDevs\ElastiCommerce\Index\Type\Mapping\Field;

final class FieldTypeStringFieldCollection extends FieldCollection
{

    /**
     * get type instance for field property
     *
     * @param $type
     * @return FieldTypeBase
     * @throws \InvalidArgumentException
     */
    protected function getTypeInstance($type)
    {
        switch ($type) {
            case 'text': {
                $instance = new FieldTypeString();
                break;
            }
            default: {
                throw new \InvalidArgumentException(sprintf('Invalid type class "%s" for string fields given', $type));
            }
        }
        return $instance->setType($type);
    }
}