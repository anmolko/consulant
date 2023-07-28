<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Job;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    private $path;
    private $thumbpath;
    protected Course $model;
    public function __construct(Course $course)
    {
        $this->middleware('auth');
        $this->path         = public_path('/images/course');
        $this->thumbpath    = public_path('/images/course/thumb');
        $this->model       = $course;

    }
    public function index()
    {
        $courses      = $this->model->orderBy('created_at','desc')->get();
        return view('backend.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return view('backend.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $data = [
            'title'                 => $request->input('title'),
            'slug'                  => $this->model->changeToSlug($request->input('title')),
            'code'                  => strtok($request->input('title'), " ").'-COR-'.rand(1,500),
            'description'           => $request->input('description'),
            'living'                => $request->input('living'),
            'entry_requirement'     => $request->input('entry_requirement'),
            'visa_requirement'      => $request->input('visa_requirement'),
            'education_cost'        => $request->input('education_cost'),
            'after_graduation'      => $request->input('after_graduation'),
            'useful_links'          => $request->input('useful_links'),
            'image'                 => $request->input('image'),
            'meta_title'            => $request->input('meta_title'),
            'meta_tags'             => $request->input('meta_tags'),
            'meta_description'      => $request->input('meta_description'),
            'created_by'            => Auth::user()->id,
        ];

        if(!empty($request->file('image'))){
            $image        = $request->file('image');
            $name         = uniqid().'_job_'.$image->getClientOriginalName();
            if (!is_dir($this->path)) {
                mkdir($this->path, 0777);
            }
            if (!is_dir($this->thumbpath)) {
                mkdir($this->thumbpath, 0777);
            }
            $thumb         = 'thumb_'.$name;
            $path          = base_path().'/public/images/course/';
            $thumb_path    = base_path().'/public/images/course/thumb/';
            $moved         = Image::make($image->getRealPath())->orientate()->save($path.$name);
            $thumb         = Image::make($image->getRealPath())->fit(370, 190)->orientate()->save($thumb_path.$thumb);

            if ($moved && $thumb){
                $data['image']= $name;
            }
        }

            $status = $this->model->create($data);
        if($status){
            Session::flash('success','Course details Created Successfully');
        }
        else{
            Session::flash('error','Course details Creation Failed');
        }
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function edit($id)
    {
        $edit           = Course::find($id);

        return view('backend.course.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $course                        = Course::find($id);
        DB::beginTransaction();
        try {
            $course->title                 = $request->input('title');
            $course->code                  = strtok($request->input('title'), " ").'-COR-'.rand(1,500);
            $course->slug                  = $this->model->changeToSlug($request->input('title'));
            $course->description           = $request->input('description');
            $course->living                = $request->input('living');
            $course->entry_requirement     = $request->input('entry_requirement');
            $course->visa_requirement      = $request->input('visa_requirement');
            $course->education_cost        = $request->input('education_cost');
            $course->after_graduation      = $request->input('after_graduation');
            $course->useful_links          = $request->input('useful_links');
            $course->meta_title            = $request->input('meta_title');
            $course->meta_tags             = $request->input('meta_tags');
            $course->meta_description      = $request->input('meta_description');
            $course->updated_by            = Auth::user()->id;
            $oldimage                      = $course->image;
            $thumbimage                    = 'thumb_'.$course->image;

            if (!empty($request->file('image'))){
                $image                = $request->file('image');
                $name                 = uniqid().'_'.$image->getClientOriginalName();
                $thumb                = 'thumb_'.$name;
                $path                 = base_path().'/public/images/course/';
                $thumb_path           = base_path().'/public/images/course/thumb/';
                $moved                = Image::make($image->getRealPath())->orientate()->save($path.$name);
                $thumb                = Image::make($image->getRealPath())->fit(370, 190)->orientate()->save($thumb_path.$thumb);

                if ($moved && $thumb){
                    $course->image = $name;
                    if (!empty($oldimage) && file_exists(public_path().'/images/course/'.$oldimage)){
                        @unlink(public_path().'/images/course/'.$oldimage);
                    }

                    if (!empty($thumbimage) && file_exists(public_path().'/images/course/thumb/'.$thumbimage)){
                        @unlink(public_path().'/images/course/thumb/'.$thumbimage);
                    }
                }
            }

            $course->update();

            DB::commit();
            Session::flash('success','Course details was updated Successfully');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            Session::flash('error','Course details was not updated. Something went wrong.');
        }

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $delete       = Course::find($id);
        $rid          = $delete->id;
        $thumbimage   = 'thumb_'.$delete->image;

        if (!empty($delete->image) && file_exists(public_path().'/images/course/'.$delete->image)){
            @unlink(public_path().'/images/course/'.$delete->image);
        }
        if (!empty($thumbimage) && file_exists(public_path().'/images/course/thumb/'.$thumbimage)){
            @unlink(public_path().'/images/course/thumb/'.$thumbimage);
        }
        $recuuu          = $delete->delete();
        if($recuuu){
            $status ='success';
            return response()->json(['status'=>$status,'message'=>'Course details has been removed! ']);        }
        else{
            $status ='error';
            return response()->json(['status'=>$status,'message'=>'Course details could not be removed. Try Again later !']);
        }
    }

    public function updateStatus(Request $request, $id){
        $course          = Course::find($id);
        $course->status  = $request->status;
        $status          = $course->update();
        $new_status      = ($course->status == 'draft') ? "Draft":"Published";
        $value           = ($course->status == 'draft') ? "publish":"draft";
        if($status){
            $status ='success';
            return response()->json(['status'=>$status,'new_status'=>$new_status,'id'=>$id,'value'=>$value]);
        }
        else{
            $status ='error';
            return response()->json(['status'=>$status,'new_status'=>$new_status,'id'=>$id,'value'=>$value]);
        }
        return response()->json($confirmed);

    }
}
