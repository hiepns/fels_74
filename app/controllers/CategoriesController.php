<?php

class CategoriesController extends \BaseController {

    public function index()
    {
        $categories = Category::all();
        $userLessonWords = Auth::user()->getLessonWords();

        $learnedWordsCount = [];
        foreach ($categories as $category) {
        	$learnedWords = Word::learnedWords($userLessonWords, $category->id);
        	$learnedWordsCount[$category->id] = $learnedWords->count();
        }

        return View::make('categories.index', compact('categories', 'learnedWordsCount'))
            ->with('title', 'Category');
    }
}
