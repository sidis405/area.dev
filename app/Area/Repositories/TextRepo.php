<?php

namespace Area\Repositories;

use Area\Models\PageText;

/**
* PageText Repo
*/
class TextRepo
{

    public function updateText($id, $data)
    {
        $text = PageText::find($id);
        $text->update(['value' => $data->input('value')]);
        $text->save();

        return $text;
    }

    public function save(PageText $text)
    {
        $text->save();

        return $text;
    }

    public function getAll($howMany = null)
    {
        return PageText::orderBy('created_at', 'ASC')->get();
    }

    public function getBySlug($slug)
    {
        return PageText::whereSlug($slug)->first();
    }

    public function getById($id)
    {
        return PageText::whereId($id)->first();
    }
}
