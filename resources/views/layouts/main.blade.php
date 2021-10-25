<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="widht=device-width, inital-scale=1!">

            <title>@yield('title')</title>

            <link rel="stylesheet" href="/css/app.css">
            <script src="/js/app.js"></script>
            <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
            <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

        </head>
        <body>
            <header>
               <script>
                 < asset(librisemfundo.png)><>
                 </script>
            </div>
            </header>   
            @yield('content')

{{-- rodape              --}}

<footer class="relative pt-8 pb-6 bg-gray-900">
  <div class="container px-4 mx-auto">
    <div class="flex flex-wrap text-left lg:text-left">
      <div class="w-full px-4 lg:w-6/12">
        <h4 class="text-3xl text-gray-600 fonat-semibold dark:text-gray-400">Libri conecta você com o conhecimento!</h4>
        <h5 class="mt-0 mb-2 text-lg text-gray-600 dark:text-gray-400">
          Nossas redes sociais:
        </h5>
        <div class="mt-6 mb-6 lg:mb-0">
          <button class="items-center justify-center w-10 h-10 mr-2 font-normal bg-white rounded-full shadow-lg outline-none text-lightBlue-400 align-center focus:outline-none" type="button">
            <i class="fab fa-twitter"></i></button><button class="items-center justify-center w-10 h-10 mr-2 font-normal bg-white rounded-full shadow-lg outline-none text-lightBlue-600 align-center focus:outline-none" type="button">
            <i class="fab fa-facebook-square"></i></button><button class="items-center justify-center w-10 h-10 mr-2 font-normal text-pink-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none" type="button">
            <i class="fab fa-dribbble"></i></button><button class="items-center justify-center w-10 h-10 mr-2 font-normal bg-white rounded-full shadow-lg outline-none text-blueGray-800 align-center focus:outline-none" type="button">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </div>
      <div class="w-full px-4 lg:w-6/12">
        <div class="flex flex-wrap mb-6 items-top">
          <div class="w-full px-4 ml-auto lg:w-4/12">
            <span class="block mb-2 text-sm font-semibold text-gray-600 uppercase dark:text-gray-400">Links Úteis</span>
            <ul class="list-unstyled">
              <li>
                <a class="block pb-2 text-sm font-semibold text-gray-600 dark:text-gray-400" href="#">Sobre nós</a>
              </li>
              <li>
                <a class="block pb-2 text-sm font-semibold text-gray-600 dark:text-gray-400" href="#">Blog</a>
              </li>
              <li>
                <a class="block pb-2 text-sm font-semibold text-gray-600 dark:text-gray-400" href="https://github.com/phph1509/tccoutubro">Github</a>
              </li>
              <li>
                <a class="block pb-2 text-sm font-semibold text-gray-600 dark:text-gray-400" href="#">Entre em cotato</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 lg:w-4/12">
            <span class="block mb-2 text-sm font-semibold text-gray-600 uppercase dark:text-gray-400"> Recursos</span>
            <ul class="list-unstyled">
              <li>
                <a class="block pb-2 text-sm font-semibold text-gray-600 dark:text-gray-400" href="#">Termos &amp; Condições</a>
              </li>
              <li>
                <a class="block pb-2 text-sm font-semibold text-gray-600 dark:text-gray-400" href="#">Politica de privacidade</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-6 border-blueGray-300 ">
    <div class="flex flex-wrap items-center justify-center md:justify-between">
      <div class="w-full px-4 mx-auto text-center md:w-4/12">
        <div class="py-1 text-sm font-semibold text-gray-600 dark:text-gray-400">
          Copyright © <span id="get-current-year">2021</span><a class="text-gray-600 dark:text-gray-400" target="_blank"> Equipe Libri
        </div>
      </div>
    </div>
  </div>
</footer>
            
        </body>
</html>