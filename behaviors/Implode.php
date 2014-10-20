<?php
/**
 * implode / explode before after save
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 20.10.2014
 * @since 1.0.0
 */
namespace skeeks\sx\behaviors;

use yii\db\BaseActiveRecord;
use \yii\base\Behavior;
use yii\db\Expression;
use yii\behaviors\AttributeBehavior;

/**
 * Class Implode
 * @package skeeks\sx\behaviors
 */
class Implode extends Behavior
{
    /**
     * @var string the attribute that will receive timestamp value
     * Set this property to false if you do not want to record the creation time.
     */
    public $fields      = [];
    public $delimetr    = ',';

    public function events()
    {
        return [
            BaseActiveRecord::EVENT_BEFORE_INSERT   => "implodeFields",
            BaseActiveRecord::EVENT_BEFORE_UPDATE   => "implodeFields",
            BaseActiveRecord::EVENT_AFTER_FIND      => "explodeFields",
        ];
    }

    public function implodeFields($event)
    {
        foreach ($this->fields as $fielName)
        {
            if ($this->owner->{$fielName})
            {
                $this->owner->{$fielName} = implode($this->delimetr, $this->owner->{$fielName});
            } else
            {
                $this->owner->{$fielName} = "";
            }
        }
    }


    public function explodeFields($event)
    {
        foreach ($this->fields as $fielName)
        {
            if ($this->owner->{$fielName})
            {
                $this->owner->{$fielName} = explode($this->delimetr, $this->owner->{$fielName});
            }
            else
            {
                $this->owner->{$fielName} = [];
            }
        }
    }


}
