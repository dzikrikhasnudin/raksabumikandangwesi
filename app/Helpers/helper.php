<?php

use App\Models\Contact;
use App\Models\Page;

if (!function_exists('total_message')) {
    function total_message()
    {
        $total_message = Contact::count();

        return $total_message;
    }
}
