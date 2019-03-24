<img src=""
     alt=""
     style="cursor:pointer;width:{{ $width }}px;height:{{ $height }}px;"
     title="{{ $title }}"
     class="captcha"
     onclick="renewCaptcha()"
>

@section("scripts")
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            renewCaptcha();
        });
        function renewCaptcha() {
            var captchas = document.getElementsByClassName("captcha");
            var new_image = '{{ $route }}?_=' + Math.random();
            for (let i = 0; i < captchas.length; i++) {
                const element = captchas[i];
                element.setAttribute('src', new_image);
            }
            var captcha = document.getElementById('{{ $input_id }}');
            if (captcha) {
                captcha.focus();
            }
        }
    </script>
@endsection
