<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use Session;

class AreaController extends Controller
{
	protected $model;

	public function __construct(Area $model)
	{
		$this->model = $model;
	}

    public function index()
    {
    	$areas = $this->model->all();
    	return view('area.index', compact('areas'));
    }

    public function create()
    {
    	return view('area.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->model->rules() ?? []);

    	$this->model->create($request->all());

    	Session::flash('status', 'Successfully created');
        
    	return redirect()->route('areas.index');
    }

    public function edit($id)
    {
    	$area = $this->model->find($id);
    	return view('area.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->model->rules() ?? []);
        
    	$area = $this->model->find($id);
    	$area->fill($request->all())->save();

    	Session::flash('status', 'Successfully updated');

    	return redirect()->route('areas.index');
    }

    public function destroy($id)
    {
    	$area = $this->model->find($id);

    	$area->delete();

    	Session::flash('status', 'Successfully deleted');

    	return redirect()->route('areas.index');
    }
}
