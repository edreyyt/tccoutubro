<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
         <!-- mascara -->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"  ></script>
        <script src="{{ asset('js/jquery.mask.js') }}" defer ></script>
    </head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
       
       <script>
            $(document).ready(function(){
          $('.date').mask('00/00/0000');
          $('.time').mask('00:00:00');
          $('.date_time').mask('00/00/0000 00:00:00');
          $('#CEP').mask('00000-000');
          $('.phone').mask('0000-0000');
          $('#Numtel').mask('(00) 0000-00000');
          $('.phone_us').mask('(000) 000-0000');
          $('.mixed').mask('AAA 000-S0S');
          $('#CPF').mask('000.000.000-00', {reverse: true});
          $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
          $('.money').mask('000.000.000.000.000,00', {reverse: true});
          $('.money2').mask("#.##0,00", {reverse: true});
          $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
              'Z': {
                pattern: /[0-9]/, optional: true
              }
            }
          });
          $('.ip_address').mask('099.099.099.099');
          $('.percent').mask('##0,00%', {reverse: true});
          $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
          $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
          $('.fallback').mask("00r00r0000", {
              translation: {
                'r': {
                  pattern: /[\/]/,
                  fallback: '/'
                },
                placeholder: "__/__/____"
              }
            });
          $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
        });
        </script>
    </body>
</html>
