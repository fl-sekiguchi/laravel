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
}
