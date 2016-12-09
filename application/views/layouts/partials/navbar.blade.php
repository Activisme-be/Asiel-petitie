<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand font-heading" href="{{ base_url() }}">{{ $this->config->item('app_name') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ base_url('disclaimer') }}">Disclaimer</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="">Taal: Nederlands</a>
                </li>
            </ul>
        </div>
    </div>
</div>
