<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    // SELESAI
    public function list() {
        $article = new Article;

        return response()->json(
            [
                'status' => 200,
                'message' => null,
                'data' => $article->all()
            ]
        );

    }

    // SELESAI
    public function create() {
        $article = new Article;
        $article -> title = request('title');
        $article -> content = request('content');
        $article -> image = request('image');

        $article -> save();
        // sudah bisa tapi belum selesai
        request() -> file('image') -> storeAs('post-image', request('image'));
        return response()->json(
            [
                'status' => 200,
                'message' => "Article has been successfully posted",
                'data' => $article -> latest() -> first()
            ]
        );
    }

    // SELESAI
    public function getById($id) {
        $article = new Article;
        return response()->json(
            [
                'status' => 200,
                'message' => null,
                'data' => $article->find($id)
            ]
        );
    }

    // belum selesai
    public function update($id) {
        $article = new Article;
        $article -> find($id) -> update([
            'title' => request('title'),
            'content' => request('content'),
            'image' => request('image')
        ]);

        return response()->json(
            [
                'status' => 200,
                'message' => "Article has been successfully updated",
                'data' => $article -> latest() -> first()
            ]
        );
    }

    // belum selesai
    public function delete($id) {
        $article = new Article;
        $article -> find($id) -> delete();

        return response()->json(
            [
                'status' => 200,
                'message' => "Article has been successfully deleted",
                'data' => null
            ]
        );
    }

}