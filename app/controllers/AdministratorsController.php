<?php

class AdministratorsController extends BaseController {

    public function index()
    {
        $wordByCategory = [];
        $rows = Category::with('words')->get();
        foreach ($rows as $row) {
            $obj = new StdClass;
            $obj->label = $row->name;
            $obj->value = $row->words->count();
            $wordByCategory[] = $obj;
        }
        return View::make('admin.index', compact('wordByCategory'));
    }

    public function store()
    {
        $word = new Word;
        $word->category_id = Input::get('category_id');
        $word->content = Input::get('content');
        $word->save();
        $correct = [false, false, false, false];
        $correct[Input::get('trueAnswer')] = true;
        $answers = [new Answer(['content' => Input::get('answers-1'), 'correct' => $correct[0]]),
                             new Answer(['content' => Input::get('answers-2'), 'correct' => $correct[1]]),
                             new Answer(['content' => Input::get('answers-3'), 'correct' => $correct[2]]),
                             new Answer(['content' => Input::get('answers-4'), 'correct' => $correct[3]])];
        $word->answers()->saveMany($answers);
        return Redirect::to('admin/words');
    }

    public function destroy($id)
    {
        $word = Word::find($id);
        $word->answers()->delete();
        $word->delete();
        return Redirect::to('admin/words');
    }

    public function update($id)
    {
        $word = Word::find($id);
        $word->category_id = Input::get('category_id');
        $word->content = Input::get('content');
        $word->save();
        $correct = [false, false, false, false];
        $correct[Input::get('trueAnswer')] = true;
        $answers = $word->answers()->get();
        for ($i = 0; $i < 4; $i++) {
            $answers[$i]->content = Input::get('answers-'.($i+1));
            $answers[$i]->correct = $correct[$i];
            $answers[$i]->save();
        }
        return Redirect::to('admin/words');
    }
}
