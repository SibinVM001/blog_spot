<?php
/*******************************
    Author : Sibin V M
    Title : Helper Methods
    Created Date : 12-06-2022
********************************/

namespace App\Http\Helpers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

trait CommonHelper {

    /**
     * @param Request $request
     * @return $this|false|string
     */

    // method for uploading the file to storage
    public function uploadFile(Request $request, $fieldname = 'image', $directory = 'images' ) {
        
        $fileName = $request->file('image')->hashName(); 
        $source = storage_path().'/app/public/images/'.$fileName;
        Image::make($request->file('image'))->fit(340, 220)->save($source);
       
        return $fileName;
    }

    // method for creating or updating the data into the databse
    public function createOrUpdate(Request $request, $model, $method) {

        // set indian timezone
        date_default_timezone_set('Asia/Calcutta');

        if ($request->image) {
            
            $image_title = $request['image']->getClientOriginalName();
            $image = $request['image'] = $this->uploadFile($request, 'image', 'images');
            // if image is in the request save or update the data to tha databse
            $model->title = $request->title;
            $model->image = $image;
            $model->image_title = $image_title;
            $model->content = $request->content;
            $model->$method();
        }
        else {      
            // if image is not in the request save or update the data with image is NULL to tha databse  
            $model->title = $request->title;
            $model->content = $request->content;
            $model->$method();
        }

        return $model;
    }

    public function dateFormator ($date) {

        $time = strtotime($date);
        $newformat = date('jS M Y, l \a\t\ h:i A',$time);
        return $newformat;

    }
}