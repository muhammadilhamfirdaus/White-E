@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Field untuk Nama Perusahaan -->
                        <div class="row mb-3">
                            <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Company Name') }}</label>
                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required>
                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Field untuk Alamat Perusahaan -->
                        <div class="row mb-3">
                            <label for="company_address" class="col-md-4 col-form-label text-md-end">{{ __('Company Address') }}</label>
                            <div class="col-md-6">
                                <input id="company_address" type="text" class="form-control @error('company_address') is-invalid @enderror" name="company_address" value="{{ old('company_address') }}" required>
                                @error('company_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Field untuk Bahasa -->
                        <div class="row mb-3">
                            <label for="language" class="col-md-4 col-form-label text-md-end">{{ __('Language') }}</label>
                            <div class="col-md-6">
                                <select id="language" class="form-select @error('language') is-invalid @enderror" name="language" required>
                                    <option value="">Select Language</option>
                                    <option value="en" {{ old('language') == 'en' ? 'selected' : '' }}>English</option>
                                    <option value="id" {{ old('language') == 'id' ? 'selected' : '' }}>Indonesian</option>
                                    <!-- Tambahkan opsi bahasa lain jika diperlukan -->
                                </select>
                                @error('language')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Field untuk Negara -->
                        <div class="row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
                            <div class="col-md-6">
                                <select id="country" class="form-select @error('country') is-invalid @enderror" name="country" required>
                                    <option value="">Select Country</option>
                                    <option value="US" {{ old('country') == 'US' ? 'selected' : '' }}>United States</option>
                                    <option value="ID" {{ old('country') == 'ID' ? 'selected' : '' }}>Indonesia</option>
                                    <!-- Tambahkan opsi negara lain jika diperlukan -->
                                </select>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Field untuk Mata Uang -->
                        <div class="row mb-3">
                            <label for="currency" class="col-md-4 col-form-label text-md-end">{{ __('Currency') }}</label>
                            <div class="col-md-6">
                                <select id="currency" class="form-select @error('currency') is-invalid @enderror" name="currency" required>
                                    <option value="">Select Currency</option>
                                    <option value="USD" data-country="US" {{ old('currency') == 'USD' ? 'selected' : '' }}>US Dollar</option>
                                    <option value="IDR" data-country="ID" {{ old('currency') == 'IDR' ? 'selected' : '' }}>Indonesian Rupiah</option>
                                    <!-- Tambahkan opsi mata uang lain jika diperlukan -->
                                </select>
                                @error('currency')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countrySelect = document.getElementById('country');
        const currencySelect = document.getElementById('currency');

        // Fungsi untuk mengupdate currency berdasarkan country
        function updateCurrency() {
            const selectedCountry = countrySelect.value;

            // Reset currency dropdown
            currencySelect.value = '';
            for (let option of currencySelect.options) {
                if (option.dataset.country === selectedCountry) {
                    option.selected = true; // Pilih mata uang yang sesuai
                    break;
                }
            }
        }

        // Tambahkan event listener untuk perubahan pada country
        countrySelect.addEventListener('change', updateCurrency);
    });
</script>
@endsection