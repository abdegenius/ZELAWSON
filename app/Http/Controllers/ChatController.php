<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    public function add($id, $pid) {
        $chat_count = Chat::where("user_id", Auth::id())->where("agent_id", $id)->count();
        if($chat_count == 0){
            $chat = new Chat();
            $chat->user_id = Auth::id();
            $chat->agent_id = $id;
            $chat->property_id = $pid;
            $chat->chat_id = Str::uuid();
            $chat->status = "open";
            $chat->save();
            return redirect()->route('chat.view', $chat->chat_id);
        }
        else{
            $chat = Chat::where("user_id", Auth::id())->where("agent_id", $id)->first();
            return redirect()->route('chat.view', $chat->chat_id);
        }
    }

    public function view($chat_id){
        $chat = Chat::where("user_id", Auth::id())->where("chat_id", $chat_id)->first();
        if($chat){
            return view("chat.view", [
                "chat" => $chat
            ]);
        }
        abort(404);
    }

    public function index(){
        $chats = Chat::where("user_id", Auth::id())->orderBy("id", "desc")->get();
        return view("chat.index", [
            "chats" => $chats
        ]);
    }

    public function delete($chat_id){
        $chat = Chat::where("user_id", Auth::id())->where("chat_id", $chat_id)->first();
        if($chat){
            $chat->delete();
            return redirect()->back()->withSuccessReport("Chat deleted successfully");
        }
        abort(404);
    }

}
