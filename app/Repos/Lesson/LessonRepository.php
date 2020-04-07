<?php
namespace App\Repos\Lesson;

interface LessonRepository {

    /**
     * Fetch a record by id
     *
     * @param $id
     */
    public function getById($id);

    public function getAll();

} 