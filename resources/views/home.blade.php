<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GoldenVetHub | Veterinary Clinic and Pet Store</title>
        <meta name="description" content="GoldenVetHub provides trusted veterinary care and quality pet supplies for healthier, happier pets.">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    </head>
    <body class="gvh-page">
        <header class="gvh-header">
            <a class="gvh-brand" href="{{ route('home') }}" aria-label="GoldenVetHub home">
                <img
                    src="{{ asset('assets/images/goldenvethub-logo.png') }}"
                    alt="GoldenVetHub Veterinary Clinic and Pet Store"
                    width="2172"
                    height="724"
                >
            </a>

            <nav id="primary-navigation" class="gvh-nav" aria-label="Primary navigation">
                <a class="active" href="{{ route('home') }}">Home</a>
                <a href="#veterinary-care">Veterinary Care</a>
                <a href="#pet-store">Pet Store</a>
                <a href="#about-us">About Us</a>
                <a href="#contact">Contact</a>
                <a class="gvh-mobile-book" href="#book-appointment">Book Appointment</a>
            </nav>

            <div class="gvh-actions">
                <button class="gvh-icon-button" type="button" aria-label="Search">
                    <svg viewBox="0 0 24 24"><path d="m21 21-4.3-4.3m2.3-5.2a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"/></svg>
                </button>
                <a class="gvh-cart" href="#pet-store" aria-label="Shopping cart">
                    <svg viewBox="0 0 24 24"><path d="M6 6h15l-1.5 8.5H8L6 3H3m6 18a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg>
                    <span>0</span>
                </a>
                <button class="gvh-menu-toggle" type="button" aria-label="Open menu" aria-controls="primary-navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a class="gvh-book" href="#book-appointment">
                    <svg viewBox="0 0 24 24"><path d="M8 2v4m8-4v4M4 9h16M6 4h12a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/></svg>
                    Book Appointment
                </a>
            </div>
        </header>

        <main>
            <section class="gvh-hero" aria-label="GoldenVetHub homepage hero">
                <div class="gvh-hero-grid">
                    <div class="gvh-hero-copy">
                        <p class="gvh-eyebrow">Your Pet’s Health. Our Priority.</p>
                        <h1>
                            <span>Trusted Veterinary</span>
                            <span>Care and Quality</span>
                            <em>Pet Supplies</em>
                        </h1>
                        <p class="gvh-lede">
                            From routine check-ups to advanced treatment and everyday essentials, GoldenVetHub is your one-stop destination for a healthier, happier pet.
                        </p>
                        <div class="gvh-cta-row">
                            <a class="gvh-primary-cta" href="#book-appointment">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 2v4m8-4v4M4 9h16M6 4h12a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/></svg>
                                Book a Vet Appointment
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                            </a>
                            <a class="gvh-secondary-cta" href="#pet-store">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6h15l-1.5 8.5H8L6 3H3m6 18a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg>
                                Shop Pet Supplies
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                            </a>
                        </div>

                        <div class="gvh-benefits" aria-label="GoldenVetHub highlights">
                            <article>
                                <span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 4v7a6 6 0 0 0 12 0V4M6 4H4m14 0h2m-8 13v2a3 3 0 0 0 6 0v-1"/></svg></span>
                                <strong>Comprehensive<br>Veterinary Services</strong>
                            </article>
                            <article>
                                <span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6h15l-1.5 8.5H8L6 3H3m6 18a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg></span>
                                <strong>Wide Range of<br>Pet Supplies</strong>
                            </article>
                            <article>
                                <span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8.5 12.5c0-2.1 1.6-3.8 3.5-3.8s3.5 1.7 3.5 3.8c0 1.8-1.3 3.2-3 3.2h-1c-1.7 0-3-1.4-3-3.2ZM4.5 10c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm11 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4ZM8 6.2c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm4 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Z"/></svg></span>
                                <strong>Trusted by<br>Pet Owners</strong>
                            </article>
                            <article>
                                <span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8Z"/></svg></span>
                                <strong>Healthier Pets<br>Happier Lives</strong>
                            </article>
                        </div>
                    </div>

                    <div class="gvh-hero-visual">
                        <p class="gvh-heart-note">More Than<br>a Clinic<br>A Community<br>for Pet Lovers</p>
                    </div>
                </div>

            </section>

            <section id="veterinary-care" class="gvh-services-section" aria-labelledby="services-heading">
                <div class="gvh-services-shell">
                    <div class="gvh-services-main">
                        <div class="gvh-section-intro">
                            <p class="gvh-section-eyebrow">Complete Care for Every Pet</p>
                            <h2 id="services-heading">Our Veterinary <span>Services</span></h2>
                            <p>Expert care at every stage of your pet’s life. From preventive care to advanced treatment, we’re here to keep them healthy, happy, and by your side longer.</p>
                        </div>

                        <div class="gvh-service-grid" aria-label="Veterinary services">
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8.5 12.5c0-2.1 1.6-3.8 3.5-3.8s3.5 1.7 3.5 3.8c0 1.8-1.3 3.2-3 3.2h-1c-1.7 0-3-1.4-3-3.2ZM4.5 10c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm11 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4ZM8 6.2c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm4 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Z"/></svg></span>
                                <h3>General Consultations</h3>
                                <p>Health checks, illness care &amp; expert advice.</p>
                            </article>
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m18 2 4 4M7 13l8-8 4 4-8 8H7v-4Zm-2 8 4-4"/></svg></span>
                                <h3>Vaccinations</h3>
                                <p>Core and non-core vaccinations to keep pets protected.</p>
                            </article>
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8.5 3C6 3 4 5 4 7.7c0 3.1 2.1 4.8 2.6 7.6.4 2.2.8 5.7 2.7 5.7 1.4 0 1.6-2.7 2.7-2.7s1.3 2.7 2.7 2.7c1.9 0 2.3-3.5 2.7-5.7.5-2.8 2.6-4.5 2.6-7.6C20 5 18 3 15.5 3c-1.4 0-2.2.7-3.5.7S9.9 3 8.5 3Z"/></svg></span>
                                <h3>Pet Dental Care</h3>
                                <p>Dental check-ups, cleaning &amp; oral health for a happier pet.</p>
                            </article>
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 20 7-7M4 4l16 16M14 10l6-6M8.5 8.5 4 4m13-1.5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0ZM9.5 17.5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0Z"/></svg></span>
                                <h3>Desexing</h3>
                                <p>Safe, professional desexing for cats and dogs.</p>
                            </article>
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v12H4zM8 21h8M12 17v4m-5-9h3l1.5-3 2.5 6 1.5-3H18"/></svg></span>
                                <h3>Surgery</h3>
                                <p>Soft tissue surgery performed with care and precision.</p>
                            </article>
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon gvh-card-icon-alert"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg></span>
                                <h3>Emergency Vet Care</h3>
                                <p>Urgent care when your pet needs it most.</p>
                            </article>
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8.5 12.5c0-2.1 1.6-3.8 3.5-3.8s3.5 1.7 3.5 3.8c0 1.8-1.3 3.2-3 3.2h-1c-1.7 0-3-1.4-3-3.2ZM4.5 10c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm11 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4ZM8 6.2c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm4 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Z"/></svg></span>
                                <h3>Puppy &amp; Kitten Care</h3>
                                <p>Healthy starts for happy, lifelong companions.</p>
                            </article>
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon gvh-card-icon-warm"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8Z"/></svg></span>
                                <h3>Senior Pet Health</h3>
                                <p>Support for ageing pets to keep them comfortable.</p>
                            </article>
                            <article class="gvh-service-card">
                                <span class="gvh-card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 8h8v8H8zM4 10h4m8 0h4M4 14h4m8 0h4M10 4v4m4-4v4m-4 8v4m4-4v4"/></svg></span>
                                <h3>Microchipping</h3>
                                <p>Permanent identification for peace of mind.</p>
                            </article>
                        </div>
                    </div>

                    <aside class="gvh-trust-panel" aria-labelledby="trust-heading">
                        <h2 id="trust-heading">Why Pet Owners <span>Trust Us</span></h2>
                        <div class="gvh-trust-list">
                            <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm-7 9a7 7 0 0 1 14 0M18 13l3 3-3 3"/></svg></span><div><h3>Experienced Vets</h3><p>Skilled, caring and passionate about pets.</p></div></article>
                            <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8.5 12.5c0-2.1 1.6-3.8 3.5-3.8s3.5 1.7 3.5 3.8c0 1.8-1.3 3.2-3 3.2h-1c-1.7 0-3-1.4-3-3.2ZM4.5 10c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm11 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4ZM8 6.2c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm4 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Z"/></svg></span><div><h3>Gentle Handling</h3><p>We treat every pet with kindness and patience.</p></div></article>
                            <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 11 12 4l9 7M5 10v10h14V10M10 15h4m-2-2v4"/></svg></span><div><h3>Modern Clinic Equipment</h3><p>Advanced technology for accurate diagnosis and care.</p></div></article>
                            <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h10l2 2v16H6zM9 8h6M9 12h6M9 16h3m6-4 2 2 3-4"/></svg></span><div><h3>Clear Treatment Advice</h3><p>We explain everything in plain, simple language.</p></div></article>
                            <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm8 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3 21a5 5 0 0 1 10 0m-2-4a5 5 0 0 1 10 4"/></svg></span><div><h3>Friendly Local Team</h3><p>A welcoming team that remembers you.</p></div></article>
                            <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 13 12 21 3 12V4h8l9 9ZM7.5 7.5h.01"/></svg></span><div><h3>Transparent Pricing</h3><p>Honest pricing with no hidden surprises.</p></div></article>
                            <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8Z"/></svg></span><div><h3>Caring Follow-Up</h3><p>We check in and support your pet’s recovery.</p></div></article>
                        </div>
                        <img class="gvh-trust-pets" src="{{ asset('assets/images/goldenvethub-vet-pets.png') }}" alt="Golden retriever and tabby cat at GoldenVetHub veterinary clinic" width="920" height="841" loading="lazy">
                    </aside>
                </div>
            </section>
            <section id="book-appointment" class="gvh-appointment-section" aria-labelledby="appointment-heading">
                <div class="gvh-appointment-panel">
                    <div class="gvh-appointment-copy">
                        <h2 id="appointment-heading">Need a Vet Appointment for <span>Your Pet?</span></h2>
                        <p>Compassionate care. Healthier pets.<br>Brighter tomorrows.</p>
                        <img src="{{ asset('assets/images/appointment-pets-realistic.png') }}" alt="Real kitten and puppy waiting for a veterinary appointment" width="1536" height="1024" loading="lazy">
                    </div>

                    <form class="gvh-appointment-form" action="{{ route('appointments.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="gvh-form-heading">
                            <h2>Book an Appointment</h2>
                            <p>Fill in the details below and we’ll take care of the rest.</p>
                        </div>

                        @if (session('appointment_success'))
                            <p class="gvh-form-success">{{ session('appointment_success') }}</p>
                        @endif

                        <div class="gvh-form-grid">
                            <label>
                                <span>Pet Owner Name</span>
                                <input type="text" name="owner_name" value="{{ old('owner_name') }}" placeholder="Your full name" required>
                                @error('owner_name')<small>{{ $message }}</small>@enderror
                            </label>
                            <label>
                                <span>Phone</span>
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="04XX XXX XXX" required>
                                @error('phone')<small>{{ $message }}</small>@enderror
                            </label>
                            <label>
                                <span>Pet Type</span>
                                <select name="pet_type" required>
                                    <option value="">Select pet type</option>
                                    @foreach (['Dog', 'Cat', 'Other'] as $petType)
                                        <option value="{{ $petType }}" @selected(old('pet_type') === $petType)>{{ $petType }}</option>
                                    @endforeach
                                </select>
                                @error('pet_type')<small>{{ $message }}</small>@enderror
                            </label>
                            <label>
                                <span>Service Needed</span>
                                <select name="service_needed" required>
                                    <option value="">Select a service</option>
                                    @foreach (['General Consultation', 'Vaccination', 'Pet Dental Care', 'Desexing', 'Surgery', 'Emergency Vet Care', 'Puppy & Kitten Care', 'Senior Pet Health', 'Microchipping'] as $service)
                                        <option value="{{ $service }}" @selected(old('service_needed') === $service)>{{ $service }}</option>
                                    @endforeach
                                </select>
                                @error('service_needed')<small>{{ $message }}</small>@enderror
                            </label>
                            <label>
                                <span>Preferred Date</span>
                                <input type="date" name="preferred_date" value="{{ old('preferred_date') }}" min="{{ now()->toDateString() }}" required>
                                @error('preferred_date')<small>{{ $message }}</small>@enderror
                            </label>
                            <label>
                                <span>Preferred Time</span>
                                <select name="preferred_time" required>
                                    <option value="">Select time</option>
                                    @foreach (['1:00 PM', '1:30 PM', '2:00 PM', '2:30 PM', '3:00 PM', '3:30 PM', '4:00 PM', '4:30 PM', '5:00 PM', '5:30 PM', '6:00 PM', '6:30 PM'] as $time)
                                        <option value="{{ $time }}" @selected(old('preferred_time') === $time)>{{ $time }}</option>
                                    @endforeach
                                </select>
                                @error('preferred_time')<small>{{ $message }}</small>@enderror
                            </label>
                        </div>

                        <button type="submit" class="gvh-submit-appointment">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 2v4m8-4v4M4 9h16M6 4h12a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/></svg>
                            Book My Appointment
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                        </button>
                        <p class="gvh-form-note"><span aria-hidden="true">✓</span> We’ll confirm your appointment within minutes.</p>
                    </form>
                </div>

                <div class="gvh-how-it-works" aria-labelledby="how-heading">
                    <h2 id="how-heading">How It Works</h2>
                    <div class="gvh-process-steps">
                        <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 2v4m8-4v4M4 9h16M6 4h12a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/></svg></span><h3>Book Online</h3><p>Choose a time that suits you.</p></article>
                        <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 15c-2.2 0-4-1.8-4-4 0-3 2.4-6 8-6s8 3 8 6c0 2.2-1.8 4-4 4M9 11h.01M15 11h.01M9 17c.8 1 1.8 1.5 3 1.5s2.2-.5 3-1.5"/></svg></span><h3>Tell Us About Your Pet</h3><p>A few quick details help us prepare.</p></article>
                        <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 11 12 4l9 7M5 10v10h14V10M10 15h4m-2-2v4"/></svg></span><h3>Visit the Clinic</h3><p>We’ll welcome you and your pet.</p></article>
                        <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8ZM9 14h6"/></svg></span><h3>Receive Care Advice</h3><p>We explain the best care options.</p></article>
                        <article><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8.5 12.5c0-2.1 1.6-3.8 3.5-3.8s3.5 1.7 3.5 3.8c0 1.8-1.3 3.2-3 3.2h-1c-1.7 0-3-1.4-3-3.2ZM4.5 10c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm11 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4ZM8 6.2c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Zm4 0c0-1.3.9-2.4 2-2.4s2 1.1 2 2.4-.9 2.4-2 2.4-2-1.1-2-2.4Z"/></svg></span><h3>Ongoing Support</h3><p>We’re here for your pet, always.</p></article>
                    </div>
                </div>

                <div class="gvh-testimonials" aria-label="Customer testimonials">
                    <article><div><p class="gvh-stars" aria-label="Five stars">★★★★★</p><blockquote>“The team at GoldenVetHub are amazing! They took such gentle care of our puppy and explained everything so clearly.”</blockquote><strong>– Sarah M.</strong></div><img src="{{ asset('assets/images/testimonial-sarah-filipino.png') }}" alt="Filipino pet owner Sarah with her dog" width="1536" height="1024" loading="lazy"></article>
                    <article><div><p class="gvh-stars" aria-label="Five stars">★★★★★</p><blockquote>“Professional, kind and trustworthy. Our cat actually enjoys going to the vet!”</blockquote><strong>– Daniel K.</strong></div><img src="{{ asset('assets/images/testimonial-daniel-filipino.png') }}" alt="Filipino pet owner Daniel with his cat" width="1536" height="1024" loading="lazy"></article>
                    <article><div><p class="gvh-stars" aria-label="Five stars">★★★★★</p><blockquote>“Excellent care and follow-up. We feel so lucky to have found our local vet.”</blockquote><strong>– Lisa T.</strong></div><img src="{{ asset('assets/images/testimonial-lisa-filipino.png') }}" alt="Filipino pet owner Lisa with her dog" width="1536" height="1024" loading="lazy"></article>
                </div>
            </section>

            <section id="find-us" class="gvh-location-section" aria-labelledby="location-heading">
                <div class="gvh-location-intro">
                    <p class="gvh-section-eyebrow">Clinic Location</p>
                    <h2 id="location-heading">Find Golden VET Animal Clinic</h2>
                    <p>Visit us at our clinic in Buhay na Tubig, Imus, Cavite. Use the map below to find the clinic and get directions easily.</p>
                </div>

                <div class="gvh-location-grid">
                    <div class="gvh-map-card">
                        <div class="gvh-map-fallback" aria-hidden="true">
                            <span><svg viewBox="0 0 24 24"><path d="M12 21s7-5.4 7-12A7 7 0 0 0 5 9c0 6.6 7 12 7 12Z"/><path d="M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/></svg></span>
                            <strong>Golden VET Animal Clinic</strong>
                            <small>B2 L16 Villa de Allyssa, Buhay na Tubig, Imus, Cavite</small>
                        </div>
                        <iframe
                            title="Golden VET Animal Clinic location map"
                            src="https://www.google.com/maps?hl=en&amp;q=Golden%20VET%20Animal%20Clinic%2C%20B2%20L16%20Villa%20de%20Allyssa%2C%20Buhay%20na%20Tubig%2C%20Imus%2C%20Cavite&amp;z=16&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            onload="this.closest('.gvh-map-card')?.classList.add('gvh-map-loaded')"
                            allowfullscreen
                        ></iframe>
                    </div>

                    <aside class="gvh-location-card" aria-label="Clinic address details">
                        <span class="gvh-location-badge">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s7-5.4 7-12A7 7 0 0 0 5 9c0 6.6 7 12 7 12Z"/><path d="M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/></svg>
                        </span>
                        <h3>Golden VET Animal Clinic</h3>
                        <address id="clinic-address">
                            B2 L16 Villa de Allyssa<br>
                            Buhay na Tubig<br>
                            Imus, Cavite
                        </address>

                        <div class="gvh-location-detail">
                            <span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 11 12 4l9 7M5 10v10h14V10M10 15h4m-2-2v4"/></svg></span>
                            <p>Public veterinary clinic location only.</p>
                        </div>

                        <div class="gvh-location-actions">
                            <button class="gvh-copy-address" type="button" data-address="B2 L16 Villa de Allyssa, Buhay na Tubig, Imus, Cavite" aria-label="Copy Golden VET Animal Clinic address">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 8h11v11H8z"/><path d="M5 16H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1"/></svg>
                                <span>Copy Address</span>
                            </button>
                            <a class="gvh-directions-button" href="https://www.google.com/maps/dir/?api=1&destination=Golden%20VET%20Animal%20Clinic%2C%20B2%20L16%20Villa%20de%20Allyssa%2C%20Buhay%20na%20Tubig%2C%20Imus%2C%20Cavite" target="_blank" rel="noopener" aria-label="Get directions to Golden VET Animal Clinic in Google Maps">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 3 21l9-4 9 4-9-18Z"/><path d="M12 3v14"/></svg>
                                Get Directions
                            </a>
                            <a class="gvh-open-map-link" href="https://www.google.com/maps/search/?api=1&query=Golden%20VET%20Animal%20Clinic%2C%20B2%20L16%20Villa%20de%20Allyssa%2C%20Buhay%20na%20Tubig%2C%20Imus%2C%20Cavite" target="_blank" rel="noopener" aria-label="Open Golden VET Animal Clinic in Google Maps">
                                Open in Google Maps
                            </a>
                        </div>
                        <p class="gvh-copy-status" aria-live="polite"></p>
                    </aside>
                </div>
            </section>
            <section id="pet-store" class="gvh-anchor-section" aria-label="Pet Store"></section>
            <section id="about-us" class="gvh-anchor-section" aria-label="About Us"></section>
            <section id="contact" class="gvh-anchor-section" aria-label="Contact"></section>
        </main>
        <footer class="gvh-footer">
            <p>&copy; 2026-2027 GoldenVetHub. All Rights Reserved.</p>
        </footer>
        <script>
            const menuToggle = document.querySelector('.gvh-menu-toggle');
            const primaryNavigation = document.querySelector('#primary-navigation');

            if (menuToggle && primaryNavigation) {
                menuToggle.addEventListener('click', () => {
                    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
                    menuToggle.setAttribute('aria-expanded', String(! isOpen));
                    document.body.classList.toggle('gvh-menu-open', ! isOpen);
                });

                primaryNavigation.querySelectorAll('a').forEach((link) => {
                    link.addEventListener('click', () => {
                        menuToggle.setAttribute('aria-expanded', 'false');
                        document.body.classList.remove('gvh-menu-open');
                    });
                });

                window.addEventListener('keydown', (event) => {
                    if (event.key === 'Escape') {
                        menuToggle.setAttribute('aria-expanded', 'false');
                        document.body.classList.remove('gvh-menu-open');
                    }
                });
            }

            document.querySelectorAll('.gvh-copy-address').forEach((button) => {
                button.addEventListener('click', async () => {
                    const status = button.closest('.gvh-location-card')?.querySelector('.gvh-copy-status');
                    const label = button.querySelector('span');
                    const originalLabel = 'Copy Address';
                    const address = button.dataset.address || '';

                    try {
                        await navigator.clipboard.writeText(address);
                        if (label) {
                            label.textContent = 'Address Copied';
                        }
                        if (status) {
                            status.textContent = 'Address copied to clipboard.';
                        }
                    } catch (error) {
                        if (status) {
                            status.textContent = 'Copy failed. Please select and copy the address text above.';
                        }
                    }

                    window.setTimeout(() => {
                        if (label) {
                            label.textContent = originalLabel;
                        }
                        if (status) {
                            status.textContent = '';
                        }
                    }, 2400);
                });
            });
        </script>
    </body>
</html>
