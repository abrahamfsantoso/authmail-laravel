<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function email()
    {
        // return new AttachmentMail;
        Mail::to('abrahamfsantoso@gmail.com')->send(new AttachmentMail());
    }
}
