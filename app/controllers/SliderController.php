<?php

class SliderController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('slider.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('slider.add');
    }


    /**
     * Store a newly created resource in storage.
     * @return Response
     */
    public function store()
    {
        $file = Input::file('img1'); // your file upload input field in the form should be named 'file'
        $destinationPath = public_path().'/uploads';
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('img1')->move($destinationPath, $filename);
        $RandNumber   		= rand(0, 9999999999);
        if( $uploadSuccess ) {
            require_once('PHPImageWorkshop/ImageWorkshop.php');
            chmod($destinationPath."/".$filename, 0777);
            $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            unlink(public_path().'/uploads/'.$filename);
            $layer->resizeInPixel(400, null, true);
            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."slider";
            $filename = "_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            //connect & insert file record in database
            $slider = Slider::create(array(
                "title1" => Input::get("title1"),
                "title2" => Input::get("title2"),
                "title3" => Input::get("title3"),
                "image1" =>$filename,
                "description1" => Input::get("description1"),
                "description2" => Input::get("description2"),
                "description3" => Input::get("description2"),
            ));
            if(Input::file('img2')){
                $file = Input::file('img2'); // your file upload input field in the form should be named 'file'
                $destinationPath = public_path().'/uploads';
                $filename = $file->getClientOriginalName();
                //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
                $uploadSuccess = Input::file('img2')->move($destinationPath, $filename);
                $RandNumber   		= rand(0, 9999999999);
                if( $uploadSuccess ) {
                    require_once('PHPImageWorkshop/ImageWorkshop.php');
                    chmod($destinationPath."/".$filename, 0777);
                    $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
                    unlink(public_path().'/uploads/'.$filename);
                    $layer->resizeInPixel(400, null, true);
                    $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
                    $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                    $dirPath =public_path().'/uploads/' ."slider";
                    $filename = "_".$RandNumber.".png";
                    $createFolders = true;
                    $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                    $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                    $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                    chmod($dirPath ."/".$filename , 0777);
                    //connect & insert file record in database
                    $slider->image2 = $filename;
                    $slider->save();

                }



            if(Input::file('img3')){
                $file = Input::file('img3'); // your file upload input field in the form should be named 'file'
                $destinationPath = public_path().'/uploads';
                $filename = $file->getClientOriginalName();
                //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
                $uploadSuccess = Input::file('img3')->move($destinationPath, $filename);
                $RandNumber   		= rand(0, 9999999999);
                if( $uploadSuccess ) {
                    require_once('PHPImageWorkshop/ImageWorkshop.php');
                    chmod($destinationPath."/".$filename, 0777);
                    $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
                    unlink(public_path().'/uploads/'.$filename);
                    $layer->resizeInPixel(400, null, true);
                    $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
                    $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                    $dirPath =public_path().'/uploads/' ."slider";
                    $filename = "_".$RandNumber.".png";
                    $createFolders = true;
                    $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                    $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                    $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                    chmod($dirPath ."/".$filename , 0777);
                    //connect & insert file record in database
                    $slider->image3  = $filename;
                    $slider->save();
                }
            }
            }



            }
        }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $slider = Slider::all();
        return View::make('slider.list', compact('slider'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return View::make('slider.edit', compact('slider'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $slider = Slider::find($id);
        $slider->title1 = Input::get('title1');
        $slider->title2 = Input::get('title2');
        $slider->title3 = Input::get('title3');
        $slider->description1 = Input::get('description1');
        $slider->description2 = Input::get('description2');
        $slider->description3 = Input::get('description3');
        $slider->save();

        $file = Input::file('img1'); // your file upload input field in the form should be named 'file'
        $destinationPath = public_path().'/uploads';
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('img1')->move($destinationPath, $filename);
        $RandNumber   		= rand(0, 9999999999);
        if( $uploadSuccess ) {
            require_once('PHPImageWorkshop/ImageWorkshop.php');
            chmod($destinationPath."/".$filename, 0777);
            $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            unlink(public_path().'/uploads/'.$filename);
            $layer->resizeInPixel(400, null, true);
            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."slider";
            $filename = "_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            if($slider->image1 != ""){
                unlink(public_path().'/uploads/slider/'.$slider->image1);
            }

            $slider->image1 = $filename;
            $slider->save();
        }

        $file = Input::file('img2'); // your file upload input field in the form should be named 'file'
        $destinationPath = public_path().'/uploads';
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('img2')->move($destinationPath, $filename);
        $RandNumber   		= rand(0, 9999999999);
        if( $uploadSuccess ) {
            require_once('PHPImageWorkshop/ImageWorkshop.php');
            chmod($destinationPath."/".$filename, 0777);
            $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            unlink(public_path().'/uploads/'.$filename);
            $layer->resizeInPixel(400, null, true);
            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."slider";
            $filename = "_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            if($slider->image2 != ""){
                unlink(public_path().'/uploads/slider/'.$slider->image2);
            }

            $slider->image2 = $filename;
            $slider->save();
        }

        $file = Input::file('img3'); // your file upload input field in the form should be named 'file'
        $destinationPath = public_path().'/uploads';
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('img3')->move($destinationPath, $filename);
        $RandNumber   		= rand(0, 9999999999);
        if( $uploadSuccess ) {
            require_once('PHPImageWorkshop/ImageWorkshop.php');
            chmod($destinationPath."/".$filename, 0777);
            $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            unlink(public_path().'/uploads/'.$filename);
            $layer->resizeInPixel(400, null, true);
            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."slider";
            $filename = "_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            if($slider->image3 != ""){
                unlink(public_path().'/uploads/slider/'.$slider->image3);
            }

            $slider->image3 = $filename;
            $slider->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);

        $slider->delete();
    }

}
