<form action="{{ route('language.switch') }}" method="POST">
    @csrf
    <select name="language" onchange="this.form.submit()" class="form-select">
        <option value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>
            <span>{{ __('messages.fr') }}</span>
        </option>
        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>
            <span>{{ __('messages.en') }}</span>
        </option>
    </select>
</form>
