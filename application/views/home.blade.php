@layout('layouts/frontend')

@section('content')
    <div style="margin-bottom: -22px;" class="row">
        <div class="col-sm-12">
            <div style="border-radius:0px; border: 0px;" class="panel panel-default">
                <div class="panel-body">
                    {{-- --}}
                        <div class="col-sm-12">
                            <span class="pull-right">
                                <strong>{{ $count }}</strong> {{ lang('email') }}
                            </span>
                        </div>
                    {{-- --}}

                    <div class="col-md-9">

                        <h3>{{ lang('petition_title') }}</h3>

                        <p>{{ lang('align_1') }}</p>

                        <p>{{ lang('align_2') }}</p>

                        <blockquote>
                            {{ lang('align_3') }}
                        </blockquote>

                        <p>{{ lang('align_4') }}</p>

                        <p>{{ lang('align_5') }}</p>

                        <p>{{ lang('align_6') }}</p>

                        @if($this->Language['language_key'] === 'french')
                            <p>{{ lang('align_7') }}</p>
                        @endif

                        <p>
                            {{ lang('align_8') }} <strong>[{{ lang('petition_name') }}]</strong> {{ lang('meh') }} <strong>[{{ lang('petition_email') }}]</strong>
                        </p>

                        <hr>

                        {{-- Signature field --}}
                        <form id="signature" method="post" class="form-horizontal" action="{{ base_url('signature/insert') }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    {{ lang('label-name') }}: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" v-model="signature.name" class="form-control" name="name" placeholder="{{ lang('placeholder-name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    {{ lang('label-email') }}: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <input type="email" v-model="signature.email" class="form-control" name="email" placeholder="{{ lang('placeholder-email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    {{ lang('label-place') }}: <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" v-model="signature.city" class="form-control" name="city" placeholder="{{ lang('placeholder-place') }}">
                                </div>
                            </div>

                            {{-- Button's --}}
                            <div class="form-group" v-if="! submitted">
                                <div class="col-md-offset-2 col-sm-9">
                                    <button type="submit" v-attr="disabled: errors" class="btn btn-sm btn-success">{{ lang('button-send') }}</button>
                                    <button type="reset" class="btn btn-sm btn-danger">{{ lang('button-reset') }}</button>
                                </div>
                            </div>
                        </form>
                        {{-- /Siçgnature field --}}

                    </div>

                    {{-- Social integration --}}
                        <div class="col-sm-3">
                            <div class="pull-right" style="margin-top:20px;">

                                <div id="fb-root"></div>
                                <script>
                                    (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.8&appId=1658071114490262";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>

                                <div class="fb-share-button" data-href="http://www.asiel.activisme.be" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                    <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.asiel.activisme.be%2F&amp;src=sdkpreparse">
                                        Delen
                                    </a>
                                </div>

                                <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                            </div>
                        </div>
                    {{-- Social integration --}}
                </div>
            </div>
        </div>
    </div>
@endsection