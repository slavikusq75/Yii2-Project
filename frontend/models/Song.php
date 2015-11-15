<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Song extends Model
{
    public $style;
    public $composer;
    public $bitrate;

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * @return mixed
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * @param mixed $composer
     */
    public function setComposer($composer)
    {
        $this->composer = $composer;
    }

    /**
     * @return mixed
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * @param mixed $bitrate
     */
    public function setBitrate($bitrate)
    {
        $this->bitrate = $bitrate;
    }

    public function __toString()
    {
        $songDetails = 'Style - ' . $this->getStyle() . "<br>\n";
        $songDetails .= 'Bitrate - ' . $this->getBitrate() . "<br>\n";
        $songDetails .= 'Composer: ' . $this->getComposer() . "<br>\n";

        return $songDetails;
    }
}
