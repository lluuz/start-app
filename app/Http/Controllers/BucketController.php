<?php

namespace App\Http\Controllers;

use App\Models\Bucket;
use App\Http\Requests\StoreBucketRequest;
use App\Http\Requests\UpdateBucketRequest;

class BucketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buckets = Bucket::all();

        return view('buckets.index')->with('buckets', $buckets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBucketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBucketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bucket  $bucket
     * @return \Illuminate\Http\Response
     */
    public function show(Bucket $bucket)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bucket  $bucket
     * @return \Illuminate\Http\Response
     */
    public function edit(Bucket $bucket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBucketRequest  $request
     * @param  \App\Models\Bucket  $bucket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBucketRequest $request, Bucket $bucket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bucket  $bucket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bucket $bucket)
    {

    }
}
