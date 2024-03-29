<?php

namespace App\Http\Controllers;

use App\Models\FileStoragem;
use App\Models\Storage;
use App\Models\TelegraphText;
use App\Models\Text;
use App\Models\UserSite;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TextController extends Controller
{
    public function listText()
    {
        $FileStoragem = FileStoragem::all();
        $storage = Storage::all();
        $TelegraphText = TelegraphText::all();
        $User_site = UserSite::all();
        $text = Text::all();
        return new Response(json_encode($FileStoragem, $storage, $TelegraphText, $User_site, $text));
    }

    public function postText(Response $response)
    {
        $text = $response->get('text');
        $user = $response->get('user');

        $Telegraph_user = new UserSite();
        $Telegraph_text = new Text();

        $Telegraph_user->user = $user;
        $Telegraph_text->text = $text;

        $Telegraph_user->save();
        $Telegraph_text->save();
    }

    public function updateText(Response $response)
    {
        $text = $response->get('text');
        $user = $response->get('user');
        $id = $response->get('id');

        UserSite::find($id)->update(['user'=>$user]);
        text::find($id)->update(['text'=>$text]);

    }

    public function deleteText($id)
    {
        UserSite::where('id', '=', $id)->delete();
        Text::where('id', '=', $id)->delete();
    }
}
