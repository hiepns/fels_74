<?php

class LessonsController extends \BaseController {

    public function store()
    {
        $category = Category::findOrFail(Input::get('category_id'));
        $userLessonWords = Auth::user()->getLessonWords();
        $notLearnedWords = Word::notLearnedWords($userLessonWords, $category->id);

        if ($notLearnedWords->count() < Config::get('constants.MAX_WORD')) {
            return Redirect::to('/categories')
                ->with('alert-warning', 'Not enough ' . Config::get('constants.MAX_WORD') . ' words to start new lesson!');
        }

        $lesson = new Lesson();
        $lesson->category_id = $category->id;
        $lesson->user_id = Auth::user()->id;

        if ($lesson->save()) {
            $words = $notLearnedWords->random(Config::get('constants.MAX_WORD'));
            foreach ($words as $word) {
               $lesson->words()->attach($word);
            }

            return Redirect::route('lessons.show', $lesson->id);
        }
        
        return Redirect::to('/categories')
            ->with('alert-danger', 'Can not start the lesson!');
    }

    public function show($id)
    {
        $listAnswerIds = LessonWord::groupLesson($id);
        if (!in_array(0, $listAnswerIds)) {
            return Redirect::to('/categories')
                ->with('alert-warning', 'You have finished this lesson!!!');
        }

        $lesson = Lesson::findOrFail($id);
        return View::make('lessons.show', compact('lesson'))
            ->with('title', 'Lesson '. $id);
    }
}
