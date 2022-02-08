<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function post_send_message(Request $request){
        $file = "";
        $destinationPath = 'images/messages/';
        if($request->file("file")){
            $file = date('YmdHis') . "." . $request->file("file")->getClientOriginalExtension();
            $request->file("file")->move($destinationPath, $file);
        }
        $message = new Message();
        $message->chat_id = $request->chat_id;
        $message->receiver_id = $request->receiver_id;
        $message->sender_id = $request->sender_id;
        $message->body = $request->body;
        $message->message_id = time();
        $message->file = $file ? asset($destinationPath.$file) : "";
        $message->save();
        return response()->json([
            "success" => true
        ]);
    }

    public function view_message($chat_id){
        $messages = Message::where("chat_id", $chat_id)->orderBy("id", "asc")->get();
        foreach($messages as $row){
        ?>
            <div class="message <?php echo Auth::id() == $row->sender_id ? "sender" : "receiver"; ?>">
                <?php echo $row->body; ?>
                <p class="text-white">
                    <small><?php echo $row->created_at->fromNow(); ?></small>
                    <?php echo $row->file ? "<small class='ml-2'><a href='".$row->file."' target='_blank'>View file</a></small>" : ""; ?> 
                </p>
            </div>
        <?php
        }
    }
}

