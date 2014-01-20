<?php

class GrudensController extends BaseController {

	/**
	 * Gruden Repository
	 *
	 * @var Gruden
	 */
	protected $gruden;

	public function __construct(Gruden $gruden)
	{
		$this->gruden = $gruden;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$grudens = $this->gruden->all();

		return View::make('grudens.index', compact('grudens'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('grudens.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Gruden::$rules);

		if ($validation->passes())
		{
			$this->gruden->create($input);

			return Redirect::route('grudens.index');
		}

		return Redirect::route('grudens.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$gruden = $this->gruden->findOrFail($id);

		return View::make('grudens.show', compact('gruden'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gruden = $this->gruden->find($id);

		if (is_null($gruden))
		{
			return Redirect::route('grudens.index');
		}

		return View::make('grudens.edit', compact('gruden'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Gruden::$rules);

		if ($validation->passes())
		{
			$gruden = $this->gruden->find($id);
			$gruden->update($input);

			return Redirect::route('grudens.show', $id);
		}

		return Redirect::route('grudens.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->gruden->find($id)->delete();

		return Redirect::route('grudens.index');
	}

	public function getVideos() {
		$grudens = $this->gruden->all();

		return View::make('grudens.videos', compact('grudens'));
	}

}
