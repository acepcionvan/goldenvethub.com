<?php

namespace App\Http\Controllers;

use App\Models\AppointmentRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Throwable;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function generate(Request $request): string
    {
        $request->validate([
            'business_type' => ['required', 'string', 'max:255'],
        ]);

        return 'Generated successfully';
    }

    public function storeAppointment(Request $request): RedirectResponse
    {
        $appointmentTimes = [
            '1:00 PM',
            '1:30 PM',
            '2:00 PM',
            '2:30 PM',
            '3:00 PM',
            '3:30 PM',
            '4:00 PM',
            '4:30 PM',
            '5:00 PM',
            '5:30 PM',
            '6:00 PM',
            '6:30 PM',
        ];

        $validated = $request->validate([
            'owner_name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:40'],
            'pet_type' => ['required', 'in:Dog,Cat,Other'],
            'service_needed' => [
                'required',
                'in:General Consultation,Vaccination,Pet Dental Care,Desexing,Surgery,Emergency Vet Care,Puppy & Kitten Care,Senior Pet Health,Microchipping',
            ],
            'preferred_date' => ['required', 'date', 'after_or_equal:today'],
            'preferred_time' => ['required', 'in:' . implode(',', $appointmentTimes)],
        ]);

        try {
            AppointmentRequest::create($validated);
        } catch (Throwable) {
            Storage::disk('local')->append('appointment-requests.jsonl', json_encode([
                ...$validated,
                'submitted_at' => now()->toISOString(),
            ], JSON_THROW_ON_ERROR));
        }

        return back()->with('appointment_success', 'Thanks. We’ll confirm your appointment within minutes.');
    }
}
