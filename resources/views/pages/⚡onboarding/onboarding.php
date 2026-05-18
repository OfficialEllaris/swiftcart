<?php

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component {

    use WithFileUploads;

    #[Validate('required|string|max:255')]
    public ?string $full_names = "";

    #[Validate('required|email|unique:users,email_address|max:255')]
    public ?string $email_address = "";

    #[Validate('required|string|unique:users,phone_number|max:20')]
    public ?string $phone_number = "";

    #[Validate('required|string|max:255')]
    public ?string $business_name = "";

    #[Validate('required|file|mimes:pdf,jpg,jpeg,png|max:2048')]
    public $registration_document;

    #[Validate('nullable|string|max:250')]
    public ?string $business_description = "";

    #[Validate('required|string|min:8|confirmed')]
    public ?string $password = "";

    public ?string $password_confirmation = "";

    public function createAccount()
    {

        $this->validate();

        $document_path = null;

        if ($this->registration_document) {
            $document_path = $this->registration_document->store('registration-documents', 'public');
        }

        User::create([
            'full_names' => $this->full_names,
            'email_address' => $this->email_address,
            'phone_number' => $this->phone_number,
            'business_name' => $this->business_name,
            'registration_document' => $document_path,
            'business_description' => $this->business_description,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('feedback', [
            'message' => 'Account Created Successfully!',
            'type' => 'success',
        ]);

        $this->reset([
            'full_names',
            'email_address',
            'phone_number',
            'business_name',
            'registration_document',
            'business_description',
            'password',
            'password_confirmation',
        ]);

        $this->dispatch('account-created');
    }
};