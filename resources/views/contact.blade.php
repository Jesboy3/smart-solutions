<x-layout.app>
    <div class="contact-page">
        <h1>Contact</h1>
        <p>
            Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op
            <strong>info@smart-solutions.nl</strong>. We proberen zo snel mogelijk te reageren!
        </p>
        <div class="image-container">
            <img src="{{ asset('images/....png') }}" alt="Contact Image">
        </div>
        <form action="" method="POST" class="contact-form">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" class="form-control">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control">

            <label for="onderwerp">Onderwerp:</label>
            <input type="text" id="onderwerp" name="onderwerp" class="form-control">

            <label for="tekst">Tekst:</label>
            <textarea id="tekst" name="tekst" rows="4" class="form-control"></textarea>

            <button type="submit" class="btn-submit">Verzenden</button>
        </form>
    </div>
</x-layout.app>
