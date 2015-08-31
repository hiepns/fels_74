<?php

class ResultsController extends \BaseController {

    public function index($lesson_id)
    {
        $lesonWords = LessonWord::groupLesson($lesson_id);
        $chosenAnswers = Answer::chosen($lesonWords);
        
        $score = 0;
        foreach ($chosenAnswers as $answer) {
            if ($answer->correct) {
                $score++;
            }
        }

        $this->logActivities($chosenAnswers[0]->word->category->name);

        return View::make('results.index', compact('score', 'chosenAnswers'))
            ->with('title', 'Result of lesson ' . $lesson_id);
    }

    public function update($lesson_id)
    {
        $lessonWord = LessonWord::where('lesson_id', $lesson_id)
            ->where('word_id', Input::get('word_id'))->first();

        $lessonWord->answer_id = Input::get('answer_id');
        $lessonWord->save();

        return Answer::findOrFail(Input::get('answer_id'))->correct;
    }

    private function logActivities($category_name)
    {
        Activity::create([
            'user_id' => Auth::user()->id,
            'content' => 'Learned ' . Config::get('constants.MAX_WORD') . ' words in Lesson "' . $category_name . '"'
        ]);
    }
}
