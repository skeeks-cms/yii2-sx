<?php
/**
 * Helpers
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 09.11.2014
 * @since 1.0.0
 */
namespace skeeks\sx\assets;
/**
 * Class Helpers
 * @package skeeks\sx\assets
 */
class Helpers extends BaseAsset
{
    public $css = [];
    public $js = [
        'js/helpers/Helpers.js',
    ];
    public $depends = [
        'skeeks\sx\assets\Core',
    ];
}