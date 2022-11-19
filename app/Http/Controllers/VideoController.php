<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return response()->json($videos);
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
        $status = 200;

        if($request->hasFile("video_archivo")){
            $file = $request->file("video_archivo");
            
            $nombre = "video_".time().".".$file->guessExtension();

            $ruta = public_path("videos/".$nombre);

            if($file->guessExtension() == "mp4") {
                copy($file, $ruta);
            } else {
                $status = 404;
            }

            $request->merge([
                'archivo' => $nombre
            ]);
            
            $video = Video::create($request->post());
        }

        $respuesta = ($status == 200) ? $video : '';

        return response()->json([
            'video' => $respuesta
        ], $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return response()->json($video);
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
    public function update(Request $request, Video $video)
    {
        $video->fill($request->post())->save();
        return response()->json([
            'video' => $video
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
    }

    public function traer_videos_por_curso($id_curso)
    {
        $videos = DB::table('videos')->where('curso', $id_curso)->get();

        return response()->json([
            'videos' => $videos
        ]);
    }
}
