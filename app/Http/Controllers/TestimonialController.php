<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\ProjectClient;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderByDesc('id')->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = ProjectClient::orderByDesc('id')->get();
        return view('admin.testimonials.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            Testimonial::create($validated);
        });

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        $clients = ProjectClient::orderByDesc('id')->get();
        return view('admin.testimonials.edit', compact('testimonial', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        DB::transaction(function () use ($request, $testimonial) {
            $validated = $request->validated();

            // Handle thumbnail replacement
            if ($request->hasFile('thumbnail')) {
                // Delete old thumbnail if exists
                if ($testimonial->thumbnail && Storage::disk('public')->exists($testimonial->thumbnail)) {
                    Storage::disk('public')->delete($testimonial->thumbnail);
                }

                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $testimonial->update($validated);
        });

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        DB::transaction(function () use ($testimonial) {
            // Delete thumbnail if exists
            if ($testimonial->thumbnail && Storage::disk('public')->exists($testimonial->thumbnail)) {
                Storage::disk('public')->delete($testimonial->thumbnail);
            }

            $testimonial->delete();
        });

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
