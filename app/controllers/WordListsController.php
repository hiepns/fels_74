<?php

class WordListsController extends \BaseController {

    public function index()
    {
        if (Request::ajax()) {
            $category = Category::findOrFail(Input::get('category_id'));
            $words = $this->getWords($category, Input::get('option'));
            return View::make('wordlists.words', compact('words'));
        }

        $categories = Category::lists('name', 'id');
        return View::make('wordlists.index', compact('categories'))
            ->with('title', 'Word List');
    }

    public function store()
    {
        $category = Category::findOrFail(Input::get('category_id'));
        $words = $this->getWords($category, Input::get('option'));
        $pdf = PDF::loadView('wordlists/pdf', compact('words', 'category'));
        return $pdf->download('data.pdf');
    }

    private function getWords($category, $option)
    {
        switch ($option) {
            case 'all':
                return $category->words;
                break;

            case 'learned':
                $userLessonWords = Auth::user()->getLessonWords();
                return Word::learnedWords($userLessonWords, $category->id);
                break;

            case 'not learned':
                $userLessonWords = Auth::user()->getLessonWords();
                return Word::notLearnedWords($userLessonWords, $category->id);
                break;

            default:
                return null;
                break;
        }
    }
}
