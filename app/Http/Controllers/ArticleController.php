<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; 

class ArticleController extends Controller
{
    /**
     * Menampilkan daftar artikel (halaman "Manage")
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Menampilkan form "Create New"
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Menyimpan data baru dari form
     */
    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('articles', 'public');
            $validated['thumbnail'] = $path;
        }

        // Buat slug unik dari judul
        $validated['slug'] = Str::slug($validated['title']) . '-' . uniqid();
        
        // Asumsi migrasi Anda punya 'user_id' untuk tahu siapa penulisnya
        $validated['user_id'] = auth()->id();

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dibuat!');
    }

    /**
     * Menampilkan form "Edit"
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Meng-update data dari form edit
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama jika ada
            if ($article->thumbnail) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            $path = $request->file('thumbnail')->store('articles', 'public');
            $validated['thumbnail'] = $path;
        }

        // Update slug jika judul berubah
        if ($validated['title'] !== $article->title) {
            $validated['slug'] = Str::slug($validated['title']) . '-' . uniqid();
        }

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Menghapus artikel
     */
    public function destroy(Article $article)
    {
        // Hapus thumbnail dari storage
        if ($article->thumbnail) {
            Storage::disk('public')->delete($article->thumbnail);
        }
        
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}