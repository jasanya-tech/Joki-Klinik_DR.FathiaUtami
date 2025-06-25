@extends('layouts.front')

@section('content')
    {{-- Main Banner Section (Top Hero Area) --}}
    <div class="contact-main-wrapper position-relative overflow-hidden"
        style="background-image: url('{{ App\Helpers\BannerHelper::getBannerImageUrl('dashboard') }}'); background-size: cover; background-position: center; min-height: 200px;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="container position-relative z-1 py-5">
            <div class="row">
                <div class="col-12 text-center text-white">
                </div>
            </div>
        </div>
    </div>

    {{-- Dashboard Content Area --}}
    <div class="founder-main-wrapper team-dr float_left py-5">
        <div class="container">
            <div class="card shadow-lg border-0 mb-5 animated-fade-in " style="border-radius: 15px;background: #f8f8f8;">
                <div class="card-body p-4 p-md-5">

                    @auth
                        {{-- User Profile Information Section --}}
                        <h4 class="mb-4 text-danger border-bottom pb-2">
                            <i class="fas fa-user-circle me-2"></i> Informasi Profil Anda
                        </h4>
                        <div class="text-center mb-5">
                            <img src="{{ auth()->user()->image_avatar_url }}"
                                alt="Avatar Pengguna"
                                class="img-fluid rounded-circle border border-5 border-danger shadow-lg mb-3"
                                style="width: 180px; height: 180px; object-fit: cover;">
                            <h3 class="mt-3 text-dark fw-bold">{{ auth()->user()->name }}</h3>
                            <p class="text-muted">{{ auth()->user()->email }}</p>
                        </div>

                        <form action="{{ route('profile.update') }}" method="POST" class="mb-5">
                            @csrf
                            @method('PUT')
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-lg" id="name" name="name"
                                        value="{{ auth()->user()->name }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold">Alamat Email</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                        value="{{ auth()->user()->email }}" readonly disabled>
                                </div>
                                <div class="col-md-12">
                                    <label for="phone_number" class="form-label fw-semibold">Nomor Telepon</label>
                                    <input type="text" class="form-control form-control-lg" id="phone_number"
                                        name="phone_number" value="{{ auth()->user()->phone_number ?? '' }}">
                                </div>
                            </div>
                            <div class="mt-4 pt-3 border-top text-end">
                                <button type="submit" class="btn btn-danger btn-lg px-5 me-2">Simpan Perubahan</button>
                                <button type="button" onclick="logout()"
                                    class="btn btn-outline-danger btn-lg px-5">Logout</button>
                            </div>
                        </form>

                        <hr class="my-5 border-secondary opacity-25">

                        {{-- Password Update Section --}}
                        <h4 class="mb-4 text-danger border-bottom pb-2">
                            <i class="fas fa-lock me-2"></i> Perbarui Kata Sandi
                        </h4>
                        <form action="{{ route('password.update') }}" method="POST" class="mb-5">
                            @csrf
                            @method('PUT')
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="current_password" class="form-label fw-semibold">Kata Sandi Saat Ini</label>
                                    <input type="password"
                                        class="form-control form-control-lg @error('current_password') is-invalid @enderror"
                                        id="current_password" name="current_password" required autocomplete="current-password">
                                    @error('current_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6"></div> {{-- Empty column for spacing --}}
                                <div class="col-md-6">
                                    <label for="password" class="form-label fw-semibold">Kata Sandi Baru</label>
                                    <input type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        id="password" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label fw-semibold">Konfirmasi Kata Sandi
                                        Baru</label>
                                    <input type="password" class="form-control form-control-lg" id="password_confirmation"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="mt-4 pt-3 border-top text-end">
                                <button type="submit" class="btn btn-danger btn-lg px-5">Perbarui Kata Sandi</button>
                            </div>
                        </form>

                        <hr class="my-5 border-secondary opacity-25">
                    @else
                        <div class="alert alert-warning text-center p-4" role="alert">
                            <p class="mb-0 fs-5"><i class="fas fa-exclamation-triangle me-2"></i> Silakan login untuk melihat
                                profil Anda.</p>
                            <a href="{{ route('login') }}" class="btn btn-warning mt-3">Login Sekarang</a>
                        </div>
                    @endauth

                    {{-- Booking List Section --}}
                    <h4 class="mb-4 text-danger border-bottom pb-2">
                        <i class="fas fa-calendar-alt me-2"></i> Daftar Booking Anda
                    </h4>
                    @if ($bookings->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle border-danger">
                                <thead class="table-danger">
                                    <tr>
                                        <th>ID Booking</th>
                                        <th>Keluhan</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>No. Antrean</th>
                                        <th>Dokter</th>
                                        <th>Spesialis</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td><span class="badge bg-light text-dark fw-bold border">{{ $booking->id }}</span></td>
                                            <td>{{ $booking->complaint }}</td>
                                            <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('d F Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($booking->estimated_time)->format('H:i') }}</td>
                                            <td><span
                                                    class="badge bg-info text-white fs-6">{{ $booking->queue_number }}</span>
                                            </td>
                                            <td>{{ $booking->doctor->user->name ?? 'N/A' }}</td>
                                            <td>{{ $booking->doctor->spesialis ?? 'N/A' }}</td>
                                            <td>
                                                @php
                                                    $statusClass = match ($booking->status->name) {
                                                        'CONFIRMED' => 'bg-success',
                                                        'PENDING' => 'bg-warning text-dark',
                                                        'CANCELLED' => 'bg-danger',
                                                        default => 'bg-secondary',
                                                    };
                                                @endphp
                                                <span
                                                    class="badge {{ $statusClass }} py-2 px-3">{{ $booking->status->name }}</span>
                                            </td>
                                            <td>
                                                <a href="{{route('booking.pdf', $booking->id)}}" target="_blank"
                                                    class="btn btn-sm btn-outline-danger"><i class="fas fa-eye me-1"></i> Lihat</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info text-center p-4" role="alert">
                            <p class="mb-0 fs-5"><i class="fas fa-info-circle me-2"></i> Anda belum memiliki booking saat
                                ini.</p>
                        </div>
                    @endif
                    <div class="mt-4 text-end">
                        <a href="{{ url('/new-booking') }}" class="btn btn-danger btn-lg px-5"><i
                                class="fas fa-plus-circle me-2"></i> Booking Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Logout Form (Hidden) --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    {{-- JavaScript for Logout Confirmation --}}
    <script>
        function logout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>
@endsection
