<?php

namespace App\Http\Controllers;

use App\agent;
use App\client;
use App\Http\Requests\storeAgent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = agent::all();
        return view('agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeAgent $request)
    {
        
        agent::create($request->all());
        return redirect('agents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(agent $agent)
    {
        return view('agents.edit', compact('agent'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agent $agent)
    {
        $agent->update($request->all());
        return redirect('agents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(agent $agent)
    {
        //
    }

    public function getClient($id){
        $agent= agent::findOrFail($id);
        $clients=$agent->client()->pluck('name','id');
        return $clients;
        // return json_encode($clients);

    }

    public function ertekesitoink(){
        $agents = agent::all();
        return view('agents.agents', compact('agents'));

    }


}
