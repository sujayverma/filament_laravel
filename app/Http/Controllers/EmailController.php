<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use App\Models\Channel;
use App\Models\Video;

class EmailController extends Controller
{
    //

    public function print(Request $request)
    {
        $ids = explode(',', $request->input('ids'));
        $emails = Email::whereIn('id', $ids)->orderBy('id', 'desc')->get();
        $e = [];
        $i=0;
        foreach($emails as $email)
        {
            $values[$i]['channel'] = Channel::where('id', $email->channel_id)->pluck('name')->first();
            $videoStr = substr($email->video_ids, 1, -1);
            $videoIDs = preg_replace('/"/', '', $videoStr);
            if(strpos($videoIDs, ','))
            {
                $videoArr = explode(',', $videoIDs);
            }
            else
            {
                $videoArr = [$videoIDs];
            }
            
            $videos = Video::whereIn('id', $videoArr)->pluck('name')->toArray();
            $values[$i]['video'] = count($videos) > 0 ? implode(', ', $videos) : "Video File Deleted"; 
            $values[$i]['email_subject'] = $email->email_subject;
            $values[$i]['status'] = $email->status;
            $values[$i]['sending_date_time'] = $email->sending_date_time;
            $values[$i]['delivered_date_time'] = $email->delivered_date_time;

            $i++;
        }
        

        // Render a print view
        return view('emails.print', compact('values'));
    }
}
