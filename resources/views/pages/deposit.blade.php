@extends('layout')

@section('content')
    <link rel="stylesheet" href="/css/affiliate.css">

    <script type="text/javascript" src="https://www.webtoolkitonline.com/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://www.webtoolkitonline.com/js/jquery.qrcode-0.6.0.min.js"></script>


    <div class="section">
        <div class="section-page">
            <div class="quest-banner affiliate">
                <div class="caption">
                    <h1><span>Realize o seu pagamento</span></h1>

                    <form>
                        <div id="qrcode"></div>

                        <div class="caption">
                            <br>

                            <input class="input-field" value="{{$payment['extra_info']}}" id="qrcmess" name="qrcmess"
                                   type="text"/>

                            <div class="input-group-append">
                                <button type="button" class="btn" onclick="copyToClipboard('#qrcmess')">
                                    <span>Copiar</span></button>
                                <div class="copy-tooltip"><span>COPIADO COM SUCESSO!</span></div>
                            </div>
                            <br>

                            <div class="input-group-append" style="visibility: hidden;">
                                <button type="button" class="btn" id="generate">
                                    <span>generate</span></button>
                                <div class="copy-tooltip"><span>COPIADO COM SUCESSO!</span></div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#generate").click();
        });


            $("#generate").click(
                function() {
                    $("#qrcode").empty();
                    $("#qrcode").qrcode({
                        render : 'image',
                        color: 'black',
                        text: $( "#qrcmess").val()
                    });
                }
            );

    </script>

@endsection
