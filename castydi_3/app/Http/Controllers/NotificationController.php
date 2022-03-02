<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notification($order_id)
    {
        echo $order_id;
    }
}
