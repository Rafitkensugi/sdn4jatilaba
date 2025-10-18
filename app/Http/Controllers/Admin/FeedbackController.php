<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Tampilkan semua feedback
    public function index()
    {
        $feedbacks = Feedback::orderBy('tanggal', 'desc')->get();
        return view('admin.feedback.index', compact('feedbacks'));
    }

    // Tampilkan detail feedback tertentu
    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedback.show', compact('feedback'));
    }

    // Update status (misal: dibaca / belum dibaca)
    public function updateStatus(Request $request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Status feedback berhasil diperbarui.');
    }

    // Hapus feedback
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->back()->with('success', 'Feedback berhasil dihapus.');
    }
}
