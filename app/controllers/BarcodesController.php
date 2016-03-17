<?php

class BarcodesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the nerds
		$barcodes = Barcodes::all();

		// load the view and pass the nerds
		return View::make('backend.barcodes.index')
			->with('barcodes', $barcodes);
	}

        private function _import_csv($path, $filename)
{

$csv = $path . $filename; 

//ofcourse you have to modify that with proper table and field names
$query = sprintf("LOAD DATA local INFILE '%s' INTO TABLE barcodes FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"' ESCAPED BY '\"' LINES TERMINATED BY '\\n' IGNORE 0 LINES (`barcode`, `name`, `price`)", addslashes($csv));

return DB::connection()->getpdo()->exec($query);

}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
                		{
                      	return View::make('backend.barcodes.create');

    
     
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
{
                        function generateRandomString($length = 10) {
  $characters = '0123456789';
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $randomString;
}
    $altercode = generateRandomString();
    $destinationPath = '';
    $filename        = '';

    if (Input::hasFile('image1')) {
        $file            = Input::file('image1');
        $destinationPath = 'assets/uploads/products/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
    }
$destinationPath2 = '';
    $filename2        = '';

    if (Input::hasFile('image2')) {
        $file            = Input::file('image2');
        $destinationPath2 = 'assets/uploads/products/';
        $filename2        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath2, $filename2);
    }
    $destinationPath3 = '';
    $filename3        = '';

    if (Input::hasFile('image3')) {
        $file            = Input::file('image3');
        $destinationPath3 = 'assets/uploads/products/';
        $filename3        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath3, $filename3);
    }
    // validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
                        'name'       => 'required',
                        'price'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('/backend/dashboard/barcode-generator/create')
				->withErrors($validator);
		} else {

          
			// store
        
			$barcodes = new Barcodes;
			$barcodes->barcode       = $altercode;
                        $barcodes->name       = Input::get('name');
                        $barcodes->desc       = Input::get('desc');
			$barcodes->price       = Input::get('price');
			$barcodes->cat       = Input::get('cat');
			$barcodes->image1       = $destinationPath . $filename;
			$barcodes->image2       = $destinationPath2 . $filename2;
			$barcodes->image3       = $destinationPath3 . $filename3;

			$barcodes->save();

			// redirect
			Session::flash('message', 'Successfully created Product!');
			return Redirect::to('/backend/dashboard/barcode-generator/');
		}
}	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		
                    // get the frontends
                    $barcodes = Barcodes::find($id);

		// show the view and pass the frontends to it
		return View::make('backend.barcodes.show')
			->with('barcodes', $barcodes);    
                
               
     
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$barcodes = Barcodes::find($id);

        return View::make('backend.barcodes.edit')->with('barcodes', $barcodes);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
    $destinationPath = '';
    $filename        = '';

    if (Input::hasFile('image1')) {
        $file            = Input::file('image1');
        $destinationPath = 'assets/uploads/products/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
    }
$destinationPath2 = '';
    $filename2        = '';

    if (Input::hasFile('image2')) {
        $file            = Input::file('image2');
        $destinationPath2 = 'assets/uploads/products/';
        $filename2        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath2, $filename2);
    }
    $destinationPath3 = '';
    $filename3        = '';

    if (Input::hasFile('image3')) {
        $file            = Input::file('image3');
        $destinationPath3 = 'assets/uploads/products/';
        $filename3        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath3, $filename3);
    }
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
                        'name'       => 'required',
                        'price'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);
		// process the login
		
		// process the login
		if ($validator->fails()) {
			return Redirect::to('/backend/dashboard/barcode-generator/')
				->withErrors($validator);
		} else {
			// store
        
			$barcodes = Barcodes::find($id);
			$barcodes->barcode       = Input::get('barcode');
                        $barcodes->name       = Input::get('name');
                        $barcodes->desc       = Input::get('desc');
			$barcodes->price       = Input::get('price');
			$barcodes->cat       = Input::get('cat');
                        $barcodes->image1       = $destinationPath . $filename;
			$barcodes->image2       = $destinationPath2 . $filename2;
			$barcodes->image3       = $destinationPath3 . $filename3;

			$barcodes->save();
			// redirect
			Session::flash('message', 'Successfully update Product!');
			return Redirect::to('/backend/dashboard/barcode-generator/');
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
		// delete
		$barcodes = Barcodes::find($id);
		$barcodes->delete();
		// redirect
		Session::flash('message', 'Successfully deleted the Product!');
			return Redirect::to('/backend/dashboard/barcode-generator/');
	}


}
