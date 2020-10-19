@php

/** @var \App\Models\ContactForm $contactForm */

@endphp

<p>naam: {{ $contactForm->name }}</p>
<p>email: {{ $contactForm->email }}</p>
<p>datum: {{ $contactForm->phone_number }}</p>
<p>tijd: {{ $contactForm->message }}</p>
