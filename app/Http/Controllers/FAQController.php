<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * @return View The FAQ view or 404 error.
     */
    public function index(): View
    {
        $faqs = Faq::all();
        return view('faq.index', compact('faqs'));
    }

    /**
     * Display a specific FAQ page.
     *
     * @param Faq $faq
     * @return View The FAQ view.
     */

    public function show(Faq $faq): View
    {
        return view('faq.show', [
            'faq' => $faq
        ]);
    }

    /**
     * @param
     * @return view
     */
    public function create(): View
    {
        return view('faq.create');
    }

    /**
     * Store FAQ.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        // Create a new Post model object, mass-assign its attributes with
        // the validated data and store it to the database
        Faq::insert($validated);

        // Redirect to the blog index page
        return redirect()->route('faq.index')->with('success_create', 'FAQ created successfully.');
    }

    /**
     * Edit a FAQ.
     */
    public function edit(Faq $faq): View|Factory|Application
    {

        return view('faq.edit', [
            'faq' => $faq
        ]);
    }

    /**
     * @param Request $request
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $faq = Faq::findOrFail($id);
        // Validate the request
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        // Use `update` to mass (re)assign updated attributes

        $faq->update($validated);

        // Redirect to the blog show page
        return redirect()->route('faq.index')->with('success_update', 'FAQ updated successfully.');
    }

    /**
     * Delete a FAQ.
     */
    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();

        return redirect()->route('faq.index')->with('success', 'FAQ deleted successfully.');
    }
}
