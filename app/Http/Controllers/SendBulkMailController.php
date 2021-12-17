<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendBulkQueueEmail;
use Illuminate\Support\Facades\Artisan;

class SendBulkMailController extends Controller
{
    public function sendBulkMail(Request $request)
    {
    	$details = [
    		'subject' => 'Weekly Notification'
    	];

    	// send all mail in the queue.
        $job = (new SendBulkQueueEmail($details))
            ->delay(
            	now()
            	->addSeconds(2)
            ); 

        dispatch($job);

        echo "Bulk mail send successfully in the background...";
    }
}
