<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }

    public function add(Request $request) 
    {
        $this->database
            ->getReference('blog/posts/' . $request['title'])
            ->set([
                'title' => $request['title'] ,
                'content' => $request['content']
            ]);
        
        return response()->json('blog has been created');
    }

    public function list() 
    {
        return response()->json($this->database->getReference('blog/posts')->getValue());
    }

    public function edit(Request $request) 
    {
        $this->database->getReference('blog/posts/' . $request['title'])
            ->update([
                'content/' => $request['content']
            ]);

        return response()->json('blog has been edited');
    }

    public function delete(Request $request)
    {
        $this->database
            ->getReference('blog/posts/' . $request['title'])
            ->remove();

        return response()->json('blog has been deleted');
    }

    /**
     *  Only for testing
     */
    public static function example($teste)
    {
        $database = \App\Services\FirebaseService::connect();
        $newPost  = $database
            ->getReference('blog/posts')
            ->push([
                'title' => 'Laravel FireBase Tutorial' ,
                'category' => $teste
            ]);
        echo '<pre>';
        print_r($newPost->getvalue());
    }
}
