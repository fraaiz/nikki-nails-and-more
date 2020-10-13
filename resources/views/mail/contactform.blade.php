@php

/** @var \App\Models\ContactForm $contactForm */

@endphp

<p>naam: {{ $contactForm->name }}</p>
<p>email: {{ $contactForm->email }}</p>
<p>telefoonnummer: {{ $contactForm->phone_number }}</p>
<p>bericht: {{ $contactForm->message }}</p>
