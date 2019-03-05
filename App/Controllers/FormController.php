<?php

namespace App\Controllers;

use App\Database\Query;
use App\Http\Request;
use App\Logger\Logger;
use App\View\Redirect;
use App\View\TemplateView;

class FormController
{
    public function view($params)
    {
        $query = new Query;
        $form = $query->fetchRow(
            "SELECT * FROM forms WHERE id = ?",
            [
                $params['id'],
            ]
        );

        return new TemplateView('forms_view', ['form' => $form]);
    }

    public function index()
    {
        $query = new Query();
        $forms = $query->fetchArray("SELECT * FROM forms");

        return new TemplateView('forms_index', ['forms' => $forms]);
    }

    public function create($params, $post)
    {
        if (empty($post['title'])) {
            echo 'Title can not be empty';
            Logger::log('Title can not be empty', __FILE__, __LINE__);
        } else {
            if (empty($post['content'])) {
                echo 'Content can not be empty';
                Logger::log('Content can not be empty', __FILE__, __LINE__);
            } else
            {
                $query = new Query();

            $query->exec(
                "INSERT INTO forms (title, content) VALUES(:title, :content)",
                $post
            );

            $id = $query->lastInsertId();

            return new Redirect('/forms/view?id=' . $id);
        }
    }
}

public
function delete($params)
{
    $query = new Query();
    $query->exec("DELETE FROM forms WHERE id = :id", $params);

    return new Redirect('/forms');
}
}
