<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SamplesController extends Controller
{
    protected $sample;

    public function __construct(Sample $sample)
    {
        $this->sample = $sample;
    }

    public function getIndex()
    {
        $samples = $this->sample->all();
        return view('sample.index', compact('samples'));
    }

    public function create()
    {
      return view('sample.create');
    }

    public function store(Request $request)
    {
      $s = new Sample();
      $s->title = $request->title;
      $s->body = $request->body;
      $s->username = $request->username;
      $s->save();

      return view('sample.store');
    }

    public function edit(Request $request, $id)
    {
      $s = Sample::find($id);
      return view('sample.edit', ['sample' => $s]);
    }

    public function update(Request $request)
    {
      $s = Sample::find($request->id);
      $s->title = $request->title;
      $s->body = $request->body;
      $s->username = $request->username;
      $s->save();

      return view('sample.update');
    }

    public function show(Request $request, $id)
    {
      $s = Sample::find($id);
      return view('sample.show', ['sample' => $s]);
    }

    public function delete(Request $request)
    {
      Sample::destroy($request->id);
      return view('sample.delete');
    }

}
