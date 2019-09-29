<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateFormatter extends Controller
{
    protected $stamp;

    public function __construct(\DateTime $stamp)
    {
        $this->stamp = $stamp;
    }

    public function getStamp()
    {
        return $this->stamp;
    }
}
