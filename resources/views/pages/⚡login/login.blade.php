<div>

    <div class="flex flex-col gap-y-8 py-14 items-center">

        <div class="flex flex-col gap-y-4 items-center">

            <span class="bg-base-300 text-base-content px-3 py-1 rounded-full">
                Account Login
            </span>

            <h1 class="text-2xl text-center text-primary">Pick up where you left!</h1>

        </div>

        <div class="w-[800px] space-y-4">

            @if (session('feedback'))
                <div class="alert alert-{{ session('feedback')['type'] }} alert-soft">
                    {{ session('feedback')['message'] }}
                </div>
            @endif

            <form wire:submit="login" class="flex flex-col gap-y-6">

                <div class="grid grid-cols-2 gap-4">

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Email Address</legend>
                        <input type="text" wire:model="email_address" class="input w-full input-lg" placeholder="e.g. user@example.com" />
                        @error('email_address')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Password</legend>
                        <input type="password" wire:model="password" class="input w-full input-lg" placeholder="********" />
                        @error('password')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                </div>

                <button class="btn btn-lg btn-primary">Login</button>

            </form>

        </div>

    </div>

</div>