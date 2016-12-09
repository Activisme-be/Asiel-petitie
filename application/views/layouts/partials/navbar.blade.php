<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand font-heading" href="{{ base_url() }}">{{ lang('header') }} {{ $this->config->item('app_name') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ base_url('disclaimer') }}">{{ lang('disclaimer') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        @if (isset($this->Language['language_key']))
                            {{ lang('lang') }}: {{ $this->Language['language_name'] }}
                        @else
                            Taal: Nederlands
                        @endif

                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ base_url('language/set/dutch') }}"><i class="fa fa-language" aria-hidden="true"></i> Nederlands</a></li>
                        <li><a href="{{ base_url('language/set/french') }}"><i class="fa fa-language" aria-hidden="true"></i> Frans</a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
