<?php

namespace Source\App\Api;

use Source\Models\Faq\Question;

class Faqs extends Api
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
    }
    public function listFaqs(): void
    {
        $questions = new Question();
        $this->back($questions->selectAll(), 200);
    }

}