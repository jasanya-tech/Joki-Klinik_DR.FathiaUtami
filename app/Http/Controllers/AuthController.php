<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function welcome()
    {
        $doctors = \App\Models\Doctor::with('user')->get();

        $recentBlogs = \App\Models\Blog::orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        $testimonials = Testimoni::with('booking.user', 'status')
            ->where('status_id', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('welcome', compact('doctors', 'recentBlogs', 'testimonials'));
    }
    public function dashboard ()
    {
        $bookings = Booking::with(['user', 'doctor.user', 'status'])
            ->where('user_id', auth()->id())
            ->orderBy('booking_date', 'desc')
            ->get();
        return view('dashboard', compact('bookings'));
    }

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Handle the login request.
     */

    public function login(Request $request)
    {
        // Validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Coba login
        if (auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return redirect('/')->with('success', 'Login berhasil!');
        }

        // Gagal login
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    public function register(Request $request)
    {
        // 1. Validate the incoming request data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // Ensure email is unique
            'password' => ['required', 'string', 'min:8', 'confirmed'], // 'confirmed' checks for password_confirmation
            'phone' => ['nullable', 'string', 'max:15'], // 'nullable' allows it to be empty
            // If you have an 'accept_terms' checkbox from the frontend, add this:
            'accept_terms' => ['required', 'accepted'],
        ]);

        // 2. Create the new user record
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Use Hash facade for consistent hashing
            'phone_number' => $request->phone, // Assign directly, null if not provided due to 'nullable' rule
            'created_by' => 1, // Fixed value, consider setting defaults in model if applicable
            'avatar_url' => 'images/12.png', // Fixed value
            'status_id' => 1, // Fixed value
            'role' => 'user', // Fixed value
        ]);

        // 3. Log the user in
        auth()->login($user);

        // 4. Redirect with a success message
        return redirect('/')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->name . '!');
    }
    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
        ]);

        // Update data pengguna
        $user->update($request->only('name', 'phone'));
        

    

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();

        // Validasi input
        $request->validate([
            'current_password' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:new_password',
        ]);


        // Cek apakah password lama cocok
        if (!Hash::check($request['current_password'], $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Password lama tidak cocok.']);
        }





        // Update data pengguna
        $user->update([
            'password' => bcrypt($request['password'])
        ]);
        


        return redirect()->back()->with('success', 'Password berhasil diperbarui.');
    }

    

    /**
     * Handle the logout request.
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
