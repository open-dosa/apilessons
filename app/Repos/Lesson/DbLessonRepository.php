<?php 
namespace App\Repos\Lesson;

use App\Repos\DbRepository;
use App\Lesson;

class DbLessonRepository extends DbRepository implements LessonRepository {


    /**
     * @param Product $model
     */
    function __construct(Lesson $model)
    {        
        parent::__construct($model);

    }

    public function getAll(){        
        return $this->model->all();
    }

}