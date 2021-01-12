@extends('front.layouts.master')

@section('title', 'Typing')

@section('content')
    <script>
        const user_id = false;
    </script>
    <main>
        <div class="container" style="margin-top: 20px">
            <div class="machineTranslationOuter">
                <div class="machineTranslation">
                    <div class="machineTranslationBlock">
                        <div class="translator" data-element="translator" data-order-url="">

                            <div class="translator__side translator__from">
                                <div class="translator__reverse" data-element="reverse">
                                    <div class="loader__inner"></div>
                                </div>
                                <div class="translator__language" data-language="source">
                                    <div class="translator__language__variants" data-element="source_language_list" style="display: none">
                                        <span class="translator__language__variants__close" data-element="close_language_list" data-target="source_language"></span>
                                        <div class="translator__language__variants__header">
                                            Select language to typing</div>
                                        <div class="translator__language__variants__list" data-element="source_lang">
                                            <ul></ul>
                                        </div>
                                    </div>
                                    <div class="translator__language__selector">
                                    <span data-element="source_language">
                                    </span>
                                    </div>
                                </div>
                                <textarea class="translator__field" data-gramm="false" placeholder="Type your text here" autocomplete="off" data-element="source_text" name="text_from_lang"></textarea>
                                <ul class="translator__features">

                                </ul>
                                <div class="translator__detected" style="display: none;" data-element="detected_lang">
                                    ?
                                </div>
                            </div>

                            <div class="translator__side translator__to">
                                <textarea class="translator__field" id="translated_text" data-element="translated_text" readonly></textarea>
                                <ul class="translator__features">
                                    <li class="icon icon__copy" data-action="copy" data-after-copy-text="Copied" data-clipboard-target="#translated_text">
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop

@section('style')
    <style>
        main {
            display: flex;
            align-items: center;
        }
    </style>
@stop

@section('script')
    <script src="{{ asset('/front/js/languages_t.js') }}"></script>
    <script src="{{ asset('/front/js/script_t.js') }}"></script>
@stop