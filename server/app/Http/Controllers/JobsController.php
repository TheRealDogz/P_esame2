<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function list()
    {
        return Job::all();
    }
    public function detail($id)
    {
        return Job::find($id);
    }

    public function create(Request $req)
    {
        $jobData = json_decode($req->getContent());

        $job = new Job();

        $job->save();
    }
    public function modify(Request $req, $id)
    {
    }
    public function delete($id)
    {
        return Job::destroy($id);
    }
}
