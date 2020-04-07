<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Lesson;
use App\Transformers\LessonTransformer;
use App\Traits\ResponseTrait;
use App\Repos\Lesson\DbLessonRepository;

class LessonsController extends Controller
{
    protected $lessonTransformer;
    protected $lessonRepo;

    use ResponseTrait;

    public function __construct(LessonTransformer $lessonTransformer, DbLessonRepository $lessonRepo){
        $this->lessonTransformer = $lessonTransformer;
        $this->lessonRepo = $lessonRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$lessons = Lesson::all();
        $lessons = $this->lessonRepo->getAll();

        return $this->respond([
            'lessons' => $this->lessonTransformer->transformCollection($lessons->toArray())
        ]);

        // return response()->json([
        //         'lessons' => $this->lessonTransformer->transformCollection($lessons->toArray())
        //     ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $lesson = Lesson::find($id); 
        $lesson = $this->lessonRepo->getById($id);

        if(!$lesson){
            
            return $this->setStatusCode(404)->respondNotFound('Lessons not found!');
            
            // return response()->json([
            //         'error' => [
            //             'message' => 'lesson not found'
            //         ]
            //     ], 404);
        }
        return $this->respond([
            'lesson' => $this->lessonTransformer->transform($lesson->toArray())
        ]);

        // return response()->json([
        //         'lesson' => $this->lessonTransformer->transform($lesson->toArray())
        //     ], 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
