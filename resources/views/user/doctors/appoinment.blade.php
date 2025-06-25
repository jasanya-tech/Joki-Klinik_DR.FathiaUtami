@extends('layouts.front')

@section('content')
    <style>
        /* In your custom CSS file, after jQuery UI CSS */
        .ui-datepicker {
            z-index: 9999 !important;
            /* A very high value to ensure it's on top */
        }

        /* Or, if you need to be more specific or target the calendar table itself, though less common for z-index */
        .ui-datepicker-calendar {
            /* z-index might also be needed here if only the calendar table is the issue */
        }
    </style>

    <div class="contact-main-wrapper position-relative" style="z-index: 1;">
        <div class="position-absolute top-0 start-0 w-100 h-100" 
            style="
                background-image: url('{{ App\Helpers\BannerHelper::getBannerImageUrl('booking') }}');
                background-size: cover;
                background-position: center;
                min-height: 400px;
                z-index: 0;
            ">
        </div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>

    <div class="form-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-section">
                        <h6>Doctor Information</h6>
                        <div class="doctor-details p-3 mb-4"
                            style="background-color: #f8f9fa; border-radius: 8px; border: 1px solid #e9ecef;">
                            <div class="row align-items-center">
                                <div class="col-md-2 text-center">
                                    {{-- Ensure asset path is correct for Storage. It's usually 'storage/' --}}
                                    <img src="{{ asset('storage/' . $doctorData->user->avatar_url) }}" alt="Doctor Avatar"
                                        class="img-fluid rounded-circle"
                                        style="width: 100px; height: 100px; object-fit: cover; border: 5px solid rgba(253, 1, 1, 0.395);">
                                </div>
                                <div class="col-md-10">
                                    <h5>{{ $doctorData->user->name }}</h5>
                                    <p class="mb-1"><strong>Specialization:</strong> {{ $doctorData->spesialis }}</p>
                                    <p class="mb-1"><strong>Consultation Price:</strong>
                                        Rp{{ number_format($doctorData->price, 0, ',', '.') }}</p>
                                    <p class="mb-0"><strong>Contact:</strong> {{ $doctorData->user->phone_number }}</p>
                                </div>
                            </div>

                            <h6 class="mt-4 mb-2">Available Schedules:</h6>
                            <ul class="list-group list-group-flush">
                                @forelse ($doctorData->schedules as $schedule)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $schedule->day }}
                                        <span
                                            class="badge bg-success rounded-pill">{{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }}
                                            - {{ \Carbon\Carbon::parse($schedule->end_time)->format('H:i') }}</span>
                                    </li>
                                @empty
                                    <li class="list-group-item">No schedule available for this doctor.</li>
                                @endforelse
                            </ul>
                        </div>

                        <h6>Book an Appointment</h6>
                        <div class="form-input plr-15">
                            <form action="{{ route('doctors.appoinment.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="doctor_id" value="{{ $doctorData->id }}">
                                <div class="row">
                                    {{-- Adjusted column width for better spacing, col-lg-23 is invalid --}}
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="input-group flex-nowrap input-custom">
                                            <input class="form-control" id="date" name="booking_date"
                                                placeholder="MM/DD/YYYY" type="text" readonly /> {{-- Added readonly to prevent manual input --}}
                                            <span class="input-group-text"><i class="fas fa-calendar-minus"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3"> {{-- Added mt-3 for spacing --}}
                                        <textarea class="form-control ps-3" id="exampleFormControlTextarea1" name="complaint" rows="3" placeholder="Complaint"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button type="submit" class="button-btn mt-4">Submit
                                        <span><i class="fas fa-angle-double-right"></i></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            // Map day numbers (0-6) to day names
            const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

            // Get allowed schedule days from PHP and convert to JS array
            // Make sure $doctorData is passed as an object, not JSON string
            const allowedScheduleDays = @json($doctorData->schedules->pluck('day')->toArray());

            // Initialize datepicker
            $('#date').datepicker({
                dateFormat: "mm/dd/yy", // Consistent with your placeholder
                minDate: 0, // Disable past dates (0 means today)

                // Function to enable/disable specific days
                beforeShowDay: function(date) {
                    const day = dayNames[date.getDay()]; // Get day name (e.g., "Monday")

                    // Check if the day is in the allowed schedule days
                    const isDayAllowed = allowedScheduleDays.includes(day);

                    // [0] is true/false (selectable), [1] is CSS class, [2] is tooltip text
                    return [isDayAllowed, isDayAllowed ? '' : 'ui-state-disabled', ''];
                }
            });
        });
    </script>
@endsection
