<div>

    @auth
        <div>
            Dash Navbar
        </div>
    @else
        <div class="flex justify-between items-center bg-base-200 p-5 rounded-2xl">

            <a href="{{ route('home') }}" wire:navigate>
                <img src="{{ asset('images/logo.png') }}" class="w-30" alt="logo">
            </a>

            <ul class="flex items-center gap-x-10">
                <li>
                    <a href="{{ route('home') }}" wire:navigate class="text-sm">Solutions</a>
                </li>

                <li>
                    <a href="{{ route('home') }}" wire:navigate class="text-sm">Features</a>
                </li>

                <li>
                    <a href="{{ route('home') }}" wire:navigate class="text-sm">Resources</a>
                </li>

                <li>
                    <a href="{{ route('home') }}" wire:navigate class="text-sm">Integrations</a>
                </li>

                <li>
                    <a href="{{ route('home') }}" wire:navigate class="text-sm">Pricing</a>
                </li>
            </ul>

            <div class="flex items-center gap-x-2">
                <a href="{{ route('onboarding') }}" wire:navigate class="btn btn-accent">Get Started</a>
                <a href="{{ route('login') }}" wire:navigate class="btn btn-primary">Login</a>
            </div>
        </div>
    @endauth

</div>