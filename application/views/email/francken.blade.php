<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>{{ $this->config->item('email_header') }}</title>
    </head>

    <body>
        <h3>{{ lang('petition_title') }}</h3>

        <p>{{ lang('align_1') }}</p>

        <p>{{ lang('align_2') }}</p>

        <p>
            {{ lang('align_3') }}
        </p>

        <p>{{ lang('align_4') }}</p>

        <p>{{ lang('align_5') }}</p>

        <p>{{ lang('align_6') }}</p>

        @if($this->Language['language_key'] === 'french')
            <p>{{ lang('align_7') }}</p>
        @endif

        <p>
            {{ lang('align_8') }} {{ lang('petition_name') }} {{ lang('meh') }} {{ lang('petition_email') }}
        </p>

        <hr>

        <p>
            <small>Email verzonden in opdracht van: {{ $naam }} | {{ $wonend }}</small>
        </p>
    </body>
</html>