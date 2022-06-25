<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SisGoa</title>
        <link rel="ico" type="image/x-icon" href="storage/img/favicon.ico">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        {{--  bootstrap css  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-light dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        {{--  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Entrar</a>  --}}
                        
                        <a href="{{ route('login') }}" class="btn btn-info btn-sm">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-info btn-sm">Cadastrar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 justify-content-around sm:pt-0">
                    <figure class="figure">
                        <img src="storage/img/logo_small.png" class="figure-img img-fluid rounded" alt="Logo escudo do Grupamento de Operações Aéreas">
                    </figure>
                    <h2 class="text-secondary">SisGOA</h2>
                    <div id="data-hora" class="text-secondary"></div>
		<script>
			// Função para formatar 1 em 01
			const zeroFill = n => {
				return ('0' + n).slice(-2);
			}
            //RELÓGIO
			// Cria intervalo
			const interval = setInterval(() => {
				// Pega o horário atual
				const now = new Date();

				// Formata a data conforme dd/mm/aaaa hh:ii:ss
				const dataHora = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

				// Exibe na tela usando a div#data-hora
				document.getElementById('data-hora').innerHTML = dataHora;
			}, 1000);
			
		</script>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="#6c757d" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-gray-500" viewBox="0 0 640 512">
                                    <path d="M96 208c0-61.86 50.14-111.1 111.1-111.1c52.65 0 96.5 36.45 108.5 85.42C334.7 173.1 354.7 168 375.1 168c4.607 0 9.152 .3809 13.68 .8203l24.13-34.76c5.145-7.414 .8965-17.67-7.984-19.27L317.2 98.78L301.2 10.21C299.6 1.325 289.4-2.919 281.9 2.226L208 53.54L134.1 2.225C126.6-2.92 116.4 1.326 114.8 10.21L98.78 98.78L10.21 114.8C1.326 116.4-2.922 126.7 2.223 134.1l51.3 73.94L2.224 281.9c-5.145 7.414-.8975 17.67 7.983 19.27L98.78 317.2l16.01 88.58c1.604 8.881 11.86 13.13 19.27 7.982l10.71-7.432c2.725-35.15 19.85-66.51 45.83-88.1C137.1 309.8 96 263.9 96 208zM128 208c0 44.18 35.82 80 80 80c9.729 0 18.93-1.996 27.56-5.176c7.002-33.65 25.53-62.85 51.57-83.44C282.8 159.3 249.2 128 208 128C163.8 128 128 163.8 128 208zM575.2 325.6c.125-2 .7453-3.744 .7453-5.619c0-35.38-28.75-64-63.1-64c-12.62 0-24.25 3.749-34.13 9.999c-17.62-38.88-56.5-65.1-101.9-65.1c-61.75 0-112 50.12-112 111.1c0 3 .7522 5.743 .8772 8.618c-49.63 3.75-88.88 44.74-88.88 95.37C175.1 469 218.1 512 271.1 512h272c53 0 96-42.99 96-95.99C639.1 373.9 612.7 338.6 575.2 325.6z"></path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">METEOROLOGIA</div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div id="metar">
                                        <small class="text-black p-0 m-0">Aeroporto Santos Dumont</small> <br>
                                        {{ $response['data'][2][5] }} <br>
                                        <small class="text-black p-0 m-0">Aeroporto de Jacarepaguá</small> <br>
                                        {{ $response['data'][1][5] }} <br>
                                        <small class="text-danger p-0 m-0">Mensagens obtidas via api-redemet.decea.mil.br</small><br>
                                        <small class="text-danger p-0 m-0" id="data-hora-meteoro">Em {{ $meteoroDate }}</small>
                                    </div>
                                    <br>
                                    <a href="#">Ver briefing completo</a>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">

                            <div class="flex items-center">
                                
                                <svg fill="#6c757d" stroke="#6c757d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 512 512" class="w-8 h-8 text-gray-500"><path d="M152.1 38.16C161.9 47.03 162.7 62.2 153.8 72.06L81.84 152.1C77.43 156.9 71.21 159.8 64.63 159.1C58.05 160.2 51.69 157.6 47.03 152.1L7.029 112.1C-2.343 103.6-2.343 88.4 7.029 79.03C16.4 69.66 31.6 69.66 40.97 79.03L63.08 101.1L118.2 39.94C127 30.09 142.2 29.29 152.1 38.16V38.16zM152.1 198.2C161.9 207 162.7 222.2 153.8 232.1L81.84 312.1C77.43 316.9 71.21 319.8 64.63 319.1C58.05 320.2 51.69 317.6 47.03 312.1L7.029 272.1C-2.343 263.6-2.343 248.4 7.029 239C16.4 229.7 31.6 229.7 40.97 239L63.08 261.1L118.2 199.9C127 190.1 142.2 189.3 152.1 198.2V198.2zM224 96C224 78.33 238.3 64 256 64H480C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H256C238.3 128 224 113.7 224 96V96zM224 256C224 238.3 238.3 224 256 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H256C238.3 288 224 273.7 224 256zM160 416C160 398.3 174.3 384 192 384H480C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416zM0 416C0 389.5 21.49 368 48 368C74.51 368 96 389.5 96 416C96 442.5 74.51 464 48 464C21.49 464 0 442.5 0 416z"></path></svg>
                                
                                <div class="ml-4 text-lg leading-7 font-semibold">AISWEB</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 p-0 text-gray-600 dark:text-gray-400 text-sm">
                                    <small class="text-black p-0 m-0">NOTAMS FIR Curitiba SBCW</small> <br>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, nesciunt porro veritatis nihil sunt totam labore itaque dolores similique qui mollitia accusamus quaerat obcaecati enim?</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, nesciunt porro veritatis nihil sunt totam labore itaque dolores similique qui mollitia accusamus quaerat obcaecati enim?</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, nesciunt porro veritatis nihil sunt totam labore itaque dolores similique qui mollitia accusamus quaerat obcaecati enim?</p>
                                    <a href="#" class="m-0 p-0">Ver briefing completo</a>
                                </div>
                                
                            </div>
                            
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="#6c757d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">ÚTEIS</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <a href="https://www.redemet.aer.mil.br/" target="_blank">REDEMET</a> <br>
                                    <a href="https://aisweb.decea.mil.br/" target="_blank">AISWEB</a> <br>
                                    <a href="https://intranet.cbmerj.rj.gov.br/" target="_blank">CBMERJ: Login</a> <br>
                                    <a href="https://sei.fazenda.rj.gov.br/sip/login.php?sigla_orgao_sistema=ERJ&sigla_sistema=SEI&infra_url=L3NlaS8=" target="_blank">SEI: Login</a> <br>
                                    <a href="https://webmail.cbmerj.rj.gov.br/" target="_blank">WEBMAIL CBMERJ: Login</a> <br>
                                    <a href="https://www.servidor.rj.gov.br/" target="_blank">PORTAL do servidor</a> <br>
                                    <a href="https://www.compras.rj.gov.br/" target="_blank">COMPRAS RJ</a>
                                </div>
                            </div>                            
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                {{--      --}}
                                <svg fill="#6c757d" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-gray-500" viewBox="0 0 512 512">
                                    <path d="M506.3 417l-213.3-364c-16.33-28-57.54-28-73.98 0l-213.2 364C-10.59 444.9 9.849 480 42.74 480h426.6C502.1 480 522.6 445 506.3 417zM232 168c0-13.25 10.75-24 24-24S280 154.8 280 168v128c0 13.25-10.75 24-23.1 24S232 309.3 232 296V168zM256 416c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 401.9 273.4 416 256 416z"></path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">RELPREV</div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <p>
                                        Percebeu algo que pode ser uma fragilidade ou tem algo a dizer que pode contribuir para elevar o nível de segurança das operações do GOA? Preencha um Relatório. É simples e rápido. Você não precisa se identificar, mas se o fizer seus dados estarão em sigilo e poderemos informar das providências adotadas para o caso relatado.
                                    </p>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfEK6TQXBFxmgeG-IiCwuSTGWY40QSUF5jpY7jB0EVaT9YGbA/viewform" target="_blank">Preencher Relprev</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                            <svg viewBox="0 0 512 512" fill="#007bff" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></path>
                            </svg>

                            <a href="mailto:davislima81@gmail.com?subject=Sisgoa, mensagem via tela welcome." class="ml-1 p-1 underline">
                                Falar com o admin do SisGOA.
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Sisgoa v.1.0.0 (beta) utiliza as tecnologias
                        <br>
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} e (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
