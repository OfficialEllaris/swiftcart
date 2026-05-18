<div>

    <div class="flex flex-col gap-y-8 py-14 items-center">

        <div class="flex flex-col gap-y-4 items-center">

            <span class="bg-base-300 text-base-content px-3 py-1 rounded-full">
                Account Registration
            </span>

            <h1 class="text-2xl text-center text-primary">Register Your Business Today!</h1>

        </div>

        <div class="w-[800px] space-y-4">

            @if (session('feedback'))
                <div class="alert alert-{{ session('feedback')['type'] }} alert-soft">
                    {{ session('feedback')['message'] }}
                </div>
            @endif

            <form wire:submit="createAccount" class="flex flex-col gap-y-6">

                <div class="grid grid-cols-3 gap-4">

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Full Names</legend>
                        <input type="text" wire:model="full_names" class="input w-full input-lg" placeholder="e.g. John Doe" />
                        @error('full_names')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Email Address</legend>
                        <input type="email" wire:model="email_address" class="input w-full input-lg" placeholder="e.g. user@example.com" />
                        @error('email_address')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Phone Number</legend>
                        <input type="tel" wire:model="phone_number" class="input w-full input-lg" placeholder="e.g. +234 000 000 0000" />
                        @error('phone_number')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                </div>

                <div class="grid grid-cols-2 gap-4">

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Business Names</legend>
                        <input type="text" wire:model="business_name" class="input w-full input-lg" placeholder="e.g. John Doe" />
                        @error('business_name')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Registration Document</legend>
                        <input type="file" wire:model="registration_document" class="file-input w-full input-lg" />
                        <p wire:loading wire:target="registration_document" class="label text-info">Uploading...</p>
                        @error('registration_document')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <fieldset class="fieldset col-start-1 col-end-3">
                        <legend class="fieldset-legend">What services does your business offer?</legend>
                        <textarea wire:model="business_description" class="textarea w-full h-24" placeholder="Write description here..."></textarea>
                        @error('business_description')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                </div>

                <div class="grid grid-cols-2 gap-4">

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Password</legend>
                        <input type="password" wire:model="password" class="input w-full input-lg" placeholder="********" />
                        @error('password')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Confirm Password</legend>
                        <input type="password" wire:model="password_confirmation" class="input w-full input-lg" placeholder="********" />
                        @error('password')
                            <p class="label text-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                </div>

                <button class="btn btn-lg btn-primary w-full">
                    <span wire:loading wire:target="createAccount">Creating Account...</span>
                    <span wire:loading.remove>Create Account</span>
                </button>

            </form>

        </div>

    </div>

</div>