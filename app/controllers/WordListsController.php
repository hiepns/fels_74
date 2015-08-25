<?php

class WordListsController extends \BaseController {

    public function index()
    {
        if (Request::ajax()) {
            $category = Category::findOrFail(Input::get('category_id'));

            switch (Input::get('option')) {
                case 'all':
                    $words = $category->words;
                    return View::make('wordlists.words', compact('words'));
                    break;

                case 'learned':
                    $userLessonWords = Auth::user()->getLessonWords();
                    $words = Word::learnedWords($userLessonWords, $category->id);

                    return View::make('wordlists.words', compact('words'));
                    break;

                case 'not learned':
                    $userLessonWords = Auth::user()->getLessonWords();
                    $words = Word::notLearnedWords($userLessonWords, $category->id);
                    return View::make('wordlists.words', compact('words'));
                    break;
                
                default:
                    return null;
                    break;
            }
        } 

        $categories = Category::lists('name', 'id');
        return View::make('wordlists.index', compact('categories'))
            ->with('title', 'Word List');
    }
}
