<?php

class FrontendsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the frontends
                $frontends = Frontends::all();
                $frontends = Frontends::orderBy('id', 'DESC')->first();
		// load the view and pass the frontends
		return View::make('backend.frontends.index')
			->with('frontends', $frontends);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() 
	{        
		// load the create form (app/views/frontends/create.blade.php)
		return View::make('backend.frontends.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {


    $destinationPath = '';
    $filename        = '';

    if (Input::hasFile('image')) {
        $file            = Input::file('image');
        $destinationPath = 'assets/uploads/img/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
    }
$destinationPath2 = '';
    $filename2        = '';

    if (Input::hasFile('image2')) {
        $file            = Input::file('image2');
        $destinationPath2 = 'assets/uploads/img/';
        $filename2        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath2, $filename2);
    }
    $destinationPath3 = '';
    $filename3        = '';

    if (Input::hasFile('image3')) {
        $file            = Input::file('image3');
        $destinationPath3 = 'assets/uploads/img/';
        $filename3        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath3, $filename3);
    }
    $destinationPath4 = '';
    $filename4        = '';

    if (Input::hasFile('image4')) {
        $file            = Input::file('image4');
        $destinationPath4 = 'assets/uploads/img/';
        $filename4        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath4, $filename4);
    }
    $destinationPath5 = '';
    $filename5        = '';

    if (Input::hasFile('image5')) {
        $file            = Input::file('image5');
        $destinationPath5 = 'assets/uploads/img/';
        $filename5        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath5, $filename5);
    }
    $destinationPath6 = '';
    $filename6        = '';

    if (Input::hasFile('image6')) {
        $file            = Input::file('image6');
        $destinationPath6 = 'assets/uploads/img/';
        $filename6        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath6, $filename6);
    }
    $destinationPath7 = '';
    $filename7        = '';

    if (Input::hasFile('image7')) {
        $file            = Input::file('image7');
        $destinationPath7 = 'assets/uploads/img/';
        $filename7        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath7, $filename7);
    }
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'title'       => 'required',
                        'skills'       => 'required',
                        'portfolioTitle'       => 'required',
                        'aboutTitle'       => 'required',
                        'about1'       => 'required',
                        'about2'       => 'required',
                        'mapsTitle'       => 'required',
                        'skeletonTitle'       => 'required',
                        'skeleton1'       => 'required',
                        'skeleton2'       => 'required',
                        'skeleton3'       => 'required'
                    
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('/backend/dashboard/frontend-settings/create')
				->withErrors($validator);
		} else {


			// store
        
			$frontends = new Frontends;
			$frontends->title       = Input::get('title');
                        $frontends->mainImage        = $destinationPath . $filename;
                        $frontends->skills       = Input::get('skills');
			$frontends->portfolioTitle       = Input::get('portfolioTitle');
			$frontends->portfolioTitle1       = Input::get('portfolioTitle1');
			$frontends->portfolioImage1       = $destinationPath2 . $filename2;
			$frontends->portfolioDesc1       = Input::get('portfolioDesc1');
			$frontends->portfolioSub1       = Input::get('portfolioSub1');
			$frontends->portfolioTitle2       = Input::get('portfolioTitle2');
			$frontends->portfolioImage2       = $destinationPath3 . $filename3;
			$frontends->portfolioDesc2       = Input::get('portfolioDesc2');
			$frontends->portfolioSub2       = Input::get('portfolioSub2');
			$frontends->portfolioTitle3       = Input::get('portfolioTitle3');
			$frontends->portfolioImage3       = $destinationPath4 . $filename4;
			$frontends->portfolioDesc3       = Input::get('portfolioDesc3');
			$frontends->portfolioSub3       = Input::get('portfolioSub3');
			$frontends->portfolioTitle4       = Input::get('portfolioTitle4');
			$frontends->portfolioImage4       = $destinationPath5 . $filename5;
			$frontends->portfolioDesc4       = Input::get('portfolioDesc4');
			$frontends->portfolioSub4       = Input::get('portfolioSub4');
			$frontends->portfolioTitle5       = Input::get('portfolioTitle5');
			$frontends->portfolioImage5       = $destinationPath6 . $filename6;
			$frontends->portfolioDesc5       = Input::get('portfolioDesc5');
			$frontends->portfolioSub5       = Input::get('portfolioSub5');
			$frontends->portfolioTitle6       = Input::get('portfolioTitle6');
			$frontends->portfolioImage6       = $destinationPath7 . $filename7;
			$frontends->portfolioDesc6       = Input::get('portfolioDesc6');
			$frontends->portfolioSub6       = Input::get('portfolioSub6');
			$frontends->aboutTitle       = Input::get('aboutTitle');
			$frontends->about1       = Input::get('about1');
			$frontends->about2       = Input::get('about2');
			$frontends->mapsTitle       = Input::get('mapsTitle');
			$frontends->skeletonTitle       = Input::get('skeletonTitle');
			$frontends->skeleton1       = Input::get('skeleton1');
			$frontends->skeleton2       = Input::get('skeleton2');
			$frontends->skeleton3       = Input::get('skeleton3');
			$frontends->chartsTitle       = Input::get('chartsTitle');
			$frontends->chartsTitle1       = Input::get('chartsTitle1');
			$frontends->chartsProductTitle1       = Input::get('chartsProductTitle1');
			$frontends->chartsProductDesc1       = Input::get('chartsProductDesc1');
			$frontends->chartsPrice1       = Input::get('chartsPrice1');
			$frontends->chartsDesc1       = Input::get('chartsDesc1');
			$frontends->chartsSub1       = Input::get('chartsSub1');
			$frontends->chartsTitle2       = Input::get('chartsTitle2');
			$frontends->chartsProductTitle2       = Input::get('chartsProductTitle2');
			$frontends->chartsProductDesc2       = Input::get('chartsProductDesc2');
			$frontends->chartsPrice2       = Input::get('chartsPrice2');
			$frontends->chartsDesc2       = Input::get('chartsDesc2');
			$frontends->chartsSub2       = Input::get('chartsSub2');
			$frontends->chartsTitle3       = Input::get('chartsTitle3');
			$frontends->chartsProductTitle3       = Input::get('chartsProductTitle3');
			$frontends->chartsProductDesc3       = Input::get('chartsProductDesc3');
			$frontends->chartsPrice3       = Input::get('chartsPrice3');
			$frontends->chartsDesc3       = Input::get('chartsDesc3');
			$frontends->chartsSub3       = Input::get('chartsSub3');
			$frontends->googlizeTitle       = Input::get('googlizeTitle');
			$frontends->googlizeTitle1       = Input::get('googlizeTitle1');
			$frontends->googlize1       = Input::get('googlize1');
			$frontends->googlizeTitle2       = Input::get('googlizeTitle2');
			$frontends->googlize2       = Input::get('googlize2');
			$frontends->googlizeTitle3       = Input::get('googlizeTitle3');
			$frontends->googlize3       = Input::get('googlize3');
			$frontends->googlizeTitle4       = Input::get('googlizeTitle4');
			$frontends->googlize4       = Input::get('googlize4');
                        $frontends->googlizeTitle5       = Input::get('googlizeTitle5');
			$frontends->googlize5       = Input::get('googlize5');
			$frontends->googlizeTitle6       = Input::get('googlizeTitle6');
			$frontends->googlize6       = Input::get('googlize6');
			$frontends->location       = Input::get('location');
			$frontends->aboutTitle1       = Input::get('aboutTitle1');
			$frontends->about3       = Input::get('about3');              

			$frontends->save();

			// redirect
			Session::flash('message', 'Successfully created frontends!');
			return Redirect::to('backend/dashboard/frontend-settings');
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
	
                    // get the frontends
                    $frontends = Frontends::find($id);

		// show the view and pass the frontends to it
		return View::make('backend.frontends.show')
			->with('frontends', $frontends);    
                
               
     
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the frontends
		$frontends = Frontends::find($id);

		// show the edit form and pass the frontends
		return View::make('backend.frontends.edit')
			->with('frontends', $frontends);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
	                'title'       => 'required',
                        

		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		
			// store
			$frontends = Frontends::find($id);
			$frontends->title       = Input::get('title');
                        $frontends->mainImage        = $destinationPath . $filename;
			$frontends->skills       = Input::get('skills');
			$frontends->portfolioTitle       = Input::get('portfolioTitle');
			$frontends->portfolioTitle1       = Input::get('portfolioTitle1');
			$frontends->portfolioImage1       = $destinationPath2 . $filename2;
			$frontends->portfolioDesc1       = Input::get('portfolioDesc1');
			$frontends->portfolioSub1       = Input::get('portfolioSub1');
			$frontends->portfolioTitle2       = Input::get('portfolioTitle2');
			$frontends->portfolioImage2       = $destinationPath3 . $filename3;
			$frontends->portfolioDesc2       = Input::get('portfolioDesc2');
			$frontends->portfolioSub2       = Input::get('portfolioSub2');
			$frontends->portfolioTitle3       = Input::get('portfolioTitle3');
			$frontends->portfolioImage3       = $destinationPath4 . $filename4;
			$frontends->portfolioDesc3       = Input::get('portfolioDesc3');
			$frontends->portfolioSub3       = Input::get('portfolioSub3');
			$frontends->portfolioTitle4       = Input::get('portfolioTitle4');
			$frontends->portfolioImage4       = $destinationPath5 . $filename5;
			$frontends->portfolioDesc4       = Input::get('portfolioDesc4');
			$frontends->portfolioSub4       = Input::get('portfolioSub4');
			$frontends->portfolioTitle5       = Input::get('portfolioTitle5');
			$frontends->portfolioImage5      = $destinationPath6 . $filename6;
			$frontends->portfolioDesc5       = Input::get('portfolioDesc5');
			$frontends->portfolioSub5       = Input::get('portfolioSub5');
			$frontends->portfolioTitle6       = Input::get('portfolioTitle6');
			$frontends->portfolioImage6     = $destinationPath7 . $filename7;
			$frontends->portfolioDesc6       = Input::get('portfolioDesc6');
			$frontends->portfolioSub6       = Input::get('portfolioSub6');
			$frontends->aboutTitle       = Input::get('aboutTitle');
			$frontends->about1       = Input::get('about1');
			$frontends->about2       = Input::get('about2');
			$frontends->mapsTitle       = Input::get('mapsTitle');
			$frontends->skeletonTitle       = Input::get('skeletonTitle');
			$frontends->skeleton1       = Input::get('skeleton1');
			$frontends->skeleton2       = Input::get('skeleton2');
			$frontends->skeleton3       = Input::get('skeleton3');
			$frontends->chartsTitle       = Input::get('chartsTitle');
			$frontends->chartsTitle1       = Input::get('chartsTitle1');
			$frontends->chartsProductTitle1       = Input::get('chartsProductTitle1');
			$frontends->chartsProductDesc1       = Input::get('chartsProductDesc1');
			$frontends->chartsPrice1       = Input::get('chartsPrice1');
			$frontends->chartsDesc1       = Input::get('chartsDesc1');
			$frontends->chartsSub1       = Input::get('chartsSub1');
			$frontends->chartsTitle2       = Input::get('chartsTitle2');
			$frontends->chartsProductTitle2       = Input::get('chartsProductTitle2');
			$frontends->chartsProductDesc2       = Input::get('chartsProductDesc2');
			$frontends->chartsPrice2       = Input::get('chartsPrice2');
			$frontends->chartsDesc2       = Input::get('chartsDesc2');
			$frontends->chartsSub2       = Input::get('chartsSub2');
			$frontends->chartsTitle3       = Input::get('chartsTitle3');
			$frontends->chartsProductTitle3       = Input::get('chartsProductTitle3');
			$frontends->chartsProductDesc3       = Input::get('chartsProductDesc3');
			$frontends->chartsPrice3       = Input::get('chartsPrice3');
			$frontends->chartsDesc3       = Input::get('chartsDesc3');
			$frontends->chartsSub3       = Input::get('chartsSub3');
			$frontends->googlizeTitle       = Input::get('googlizeTitle');
			$frontends->googlizeTitle1       = Input::get('googlizeTitle1');
			$frontends->googlize1       = Input::get('googlize1');
			$frontends->googlizeTitle2       = Input::get('googlizeTitle2');
			$frontends->googlize2       = Input::get('googlize2');
			$frontends->googlizeTitle3       = Input::get('googlizeTitle3');
			$frontends->googlize3       = Input::get('googlize3');
			$frontends->googlizeTitle4       = Input::get('googlizeTitle4');
			$frontends->googlize4       = Input::get('googlize4');
                        $frontends->googlizeTitle5       = Input::get('googlizeTitle5');
			$frontends->googlize5       = Input::get('googlize5');
			$frontends->googlizeTitle6       = Input::get('googlizeTitle6');
			$frontends->googlize6       = Input::get('googlize6');
			$frontends->location       = Input::get('location');
			$frontends->aboutTitle1       = Input::get('aboutTitle1');
			$frontends->about3       = Input::get('about3');  
                        
			$frontends->save();

			// redirect
			Session::flash('message', 'Successfully updated Frontend Settings!');
			return Redirect::to('/backend/dashboard/frontend-settings');
		}
	


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	
                    // get the frontends
                    $frontends = Frontends::find($id);
		    $frontends->delete();

		// redirect
		Session::flash('message', 'Successfully deleted Your Custom Frontends!');
		return Redirect::to('/backend/dashboard/frontend-settings');

	}


}
