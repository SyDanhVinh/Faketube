<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $channels = Channel::latest('created_at')->get();
        return view('channel.index', compact('channels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('channel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ChannelName' => 'required',
            'Description' => 'required',
            'SubscribersCount' => 'required',
            'URL' => 'required',
        ]);
        Channel::create($validated);
        return redirect()->route('channel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Channel $channel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Channel $channel)
    {
        return view('channel.edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Channel $channel)
    {
        $validated = $request->validate([
            'ChannelName' => 'required',
            'Description' => 'required',
            'SubscribersCount' => 'required',
            'URL' => 'required',
        ]);
        $channel->update($validated);
        return redirect()->route('channel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Channel $channel)
    {
        $channel->delete();
        return redirect()->route('channel.index');
    }
}
