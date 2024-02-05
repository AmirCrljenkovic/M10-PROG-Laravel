<x-guest-layout>
    <x-slot name="header">
        <header>
            <nav>
                <!-- Add your navigation links here -->
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </header>
    </x-slot>

    <main>
        <h1>Welcome to Your Website</h1>
        <p>This is a simple welcome page for your website.</p>
        <!-- Add more content as needed -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Your Website. All rights reserved.</p>
    </footer>
</x-guest-layout>
