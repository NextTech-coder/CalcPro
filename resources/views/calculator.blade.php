@extends("layouts.app")
@section("title", "Калькуляторы")
@section("description", "Описание Калькулятора")

@section("content")
    <input type="hidden" id="resCalcul" name="resCalcul" value="{{ $data }}">
    <section class="calculator">
        <div class="container">
            <div class="calculator__wrap">
                <div>
                    <div class="calculator__block">
                        <div class="calculator__container"></div>
                    </div>

                    <div class="calculator__footer">
                        <ul>
                            <li>
                                <dialog id="modalError">
                                    <h3>СООБЩИТЬ ОБ ОШИБКЕ / ПРЕДЛОЖИТЬ ИДЕЮ</h3>
                                    <form id="formModal" method="POST" enctype="multipart/form-data">
                                        <input type="email" id="email" name="email" placeholder="Ваш E-mail">
                                        <textarea name="error-message"
                                                  placeholder="Опишите ошибку или предложите идею"></textarea>
                                        <label class="input-file">
                                            <input type="file" name="file">
                                            <span class="input-file-btn">Выберите файл</span>
                                            <span class="input-file-text">Максимум 10мб</span>
                                        </label>

                                        <button type="submit">Отправить</button>
                                    </form>
                                    <button class="btn-modal-close">
                                        <svg
                                            width="32.034px" height="32.033px" viewBox="0 0 32.034 32.033"
                                        >
                                            <g>
                                                <g id="Close">
                                                    <g>
                                                        <path fill="#000" d="M21.679,16.017l9.18-9.172c0.758-0.755,1.175-1.76,1.175-2.828s-0.417-2.073-1.175-2.829
				c-0.754-0.755-1.762-1.171-2.83-1.171c-1.069,0-2.075,0.416-2.832,1.171l-9.182,9.172L6.834,1.188
				C6.078,0.432,5.072,0.016,4.001,0.016c-1.068,0-2.074,0.416-2.83,1.172c-1.561,1.56-1.562,4.097,0,5.657l9.182,9.172
				l-9.181,9.172c-1.562,1.562-1.562,4.099,0,5.658c0.756,0.755,1.762,1.171,2.831,1.171s2.075-0.416,2.831-1.172l9.181-9.172
				l9.181,9.171c0.757,0.755,1.762,1.172,2.83,1.172c1.07,0,2.076-0.416,2.832-1.172c1.562-1.562,1.562-4.099,0-5.657L21.679,16.017
				z M29.442,29.431c-0.756,0.755-2.074,0.756-2.832,0l-9.887-9.878c-0.392-0.393-1.025-0.393-1.416,0l-9.889,9.879
				c-0.757,0.755-2.075,0.755-2.832,0c-0.78-0.78-0.78-2.049,0-2.829l9.889-9.879c0.188-0.188,0.293-0.44,0.293-0.707
				c0-0.265-0.105-0.52-0.293-0.707l-9.89-9.879c-0.78-0.78-0.78-2.049,0-2.829c0.379-0.378,0.882-0.586,1.416-0.586
				c0.536,0,1.038,0.208,1.417,0.586l9.889,9.879c0.391,0.391,1.024,0.391,1.416,0l9.889-9.878c0.757-0.756,2.074-0.756,2.832-0.001
				c0.377,0.378,0.586,0.881,0.586,1.415s-0.209,1.036-0.586,1.414l-9.889,9.879c-0.392,0.391-0.392,1.022,0,1.414l9.889,9.878
				C30.224,27.382,30.224,28.65,29.442,29.431z"/>
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                    </button>
                                </dialog>
                                <button class="btn-modal" id="modalError">
                                    <svg width="32px" height="32px" viewBox="0 0 56 56">
                                        <g id="Icons-56/error_outline_56" stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <g id="error_outline_56">
                                                <rect x="0" y="0" width="56" height="56"></rect>
                                                <path
                                                    d="M28,4 C41.254834,4 52,14.745166 52,28 C52,41.254834 41.254834,52 28,52 C14.745166,52 4,41.254834 4,28 C4,14.745166 14.745166,4 28,4 Z M28,7 C16.4020203,7 7,16.4020203 7,28 C7,39.5979797 16.4020203,49 28,49 C39.5979797,49 49,39.5979797 49,28 C49,16.4020203 39.5979797,7 28,7 Z M28,34 C29.1045695,34 30,34.8954305 30,36 C30,37.1045695 29.1045695,38 28,38 C26.8954305,38 26,37.1045695 26,36 C26,34.8954305 26.8954305,34 28,34 Z M28,16.5 C28.8284271,16.5 29.5,17.1715729 29.5,18 L29.5,29 L29.4931334,29.14446 C29.4204487,29.9051119 28.7796961,30.5 28,30.5 C27.1715729,30.5 26.5,29.8284271 26.5,29 L26.5,18 L26.5068666,17.85554 C26.5795513,17.0948881 27.2203039,16.5 28,16.5 Z"
                                                    id="↳-Icon-Color" fill="currentColor" fill-rule="nonzero"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Сообщить об ошибке</span>
                                </button>
                            </li>
                            <li>
                                <button id="favourites">
                                    <svg id="Capa_1" x="0px" y="0px"
                                         width="32px" height="32px" viewBox="0 0 67.837 67.837"
                                         style="enable-background:new 0 0 67.837 67.837;"
                                         xml:space="preserve">
<g>
    <g>
        <g>
            <path d="M50.626,66.835c-1.102,0-2.196-0.272-3.17-0.795l-13.537-7.287l-13.533,7.285c-2.194,1.17-4.944,1.012-6.964-0.373
				c-2.075-1.431-3.146-3.933-2.731-6.377l2.651-15.838L1.902,32.026c-1.758-1.75-2.353-4.288-1.551-6.623
				c0.798-2.314,2.817-3.978,5.271-4.342l15.562-2.313l6.759-14.033c1.089-2.256,3.435-3.713,5.976-3.713
				c2.543,0,4.889,1.458,5.975,3.713l6.761,14.033l15.56,2.314c2.452,0.363,4.474,2.025,5.272,4.338
				c0.801,2.34,0.207,4.877-1.549,6.627L54.493,43.45l2.654,15.84c0.411,2.444-0.66,4.946-2.729,6.373
				C53.294,66.43,51.984,66.835,50.626,66.835z M33.919,54.48c0.326,0,0.652,0.08,0.948,0.238l14.48,7.795
				c0.869,0.467,1.99,0.408,2.808-0.15c0.801-0.551,1.204-1.477,1.047-2.411l-2.824-16.858c-0.105-0.639,0.103-1.289,0.561-1.746
				l12.174-12.153c0.665-0.663,0.892-1.619,0.591-2.495c-0.308-0.891-1.104-1.538-2.076-1.682l-16.608-2.47
				c-0.655-0.097-1.222-0.513-1.509-1.11L36.289,6.451c-0.424-0.881-1.354-1.449-2.37-1.449s-1.947,0.569-2.374,1.45l-7.217,14.986
				c-0.287,0.597-0.853,1.013-1.508,1.11l-16.61,2.47c-0.958,0.143-1.772,0.804-2.077,1.687c-0.3,0.873-0.072,1.827,0.593,2.489
				l12.172,12.154c0.458,0.457,0.666,1.107,0.56,1.746l-2.822,16.857c-0.158,0.936,0.245,1.859,1.053,2.416
				c0.804,0.551,1.923,0.617,2.809,0.145l14.474-7.793C33.267,54.561,33.593,54.48,33.919,54.48z"/>
        </g>
        <g>
            <path d="M12.003,30.036c-0.481,0-0.906-0.349-0.986-0.84c-0.088-0.545,0.282-1.059,0.827-1.147l0.664-0.108
				c0.548-0.094,1.059,0.282,1.147,0.827c0.088,0.545-0.282,1.059-0.827,1.147l-0.664,0.108
				C12.111,30.032,12.056,30.036,12.003,30.036z M15.675,29.44c-0.47,0-0.889-0.332-0.98-0.811c-0.105-0.542,0.25-1.067,0.792-1.171
				L26.31,25.37l4.082-9.362c0.222-0.505,0.812-0.738,1.316-0.517c0.507,0.221,0.739,0.81,0.518,1.316l-4.293,9.845
				c-0.132,0.302-0.404,0.52-0.728,0.582l-11.34,2.188C15.801,29.435,15.738,29.44,15.675,29.44z"/>
        </g>
    </g>
</g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
</svg>
                                    <span>В избранное</span>
                                </button>
                            </li>
                            <li>
                                <dialog id="modalWidget">
                                    <h3>Код виджета</h3>
                                    <h4>Код виджета состоит из двух частей:</h4>
                                    <ol>
                                        <li>
                                            <p>Подключение библиотеки. Поместите этот код между тегами
                                                <head> и</head>
                                                вашего сайта.
                                            </p>
                                            <p class="code">
                                                <code>&lt;script src="https://calcus.ru/dist/widget.js"&gt;&lt;/script&gt;</code>
                                            </p>
                                        </li>
                                        <li>
                                            <p>Инициализация виджета. Поместите этот код в то место, где должен
                                                располагаться виджет калькулятора.</p>
                                            <p class="code">
                                                <code>
                                                    &lt;div class="calculator__container"&gt;&lt;/div&gt;
                                                    <br>
                                                    <br>
                                                    &lt;script&gt;
                                                    <br>
                                                    Widget.render("Brok");
                                                    <br>
                                                    &lt;/script&gt;
                                                </code>
                                            </p>
                                        </li>
                                    </ol>
                                    <p class="warning">Допускается размещение не более 1 виджета на одну страницу
                                        сайта.</p>
                                    <button class="btn-modal-close">
                                        <svg
                                            width="32.034px" height="32.033px" viewBox="0 0 32.034 32.033"
                                        >
                                            <g>
                                                <g id="Close">
                                                    <g>
                                                        <path fill="#000" d="M21.679,16.017l9.18-9.172c0.758-0.755,1.175-1.76,1.175-2.828s-0.417-2.073-1.175-2.829
				c-0.754-0.755-1.762-1.171-2.83-1.171c-1.069,0-2.075,0.416-2.832,1.171l-9.182,9.172L6.834,1.188
				C6.078,0.432,5.072,0.016,4.001,0.016c-1.068,0-2.074,0.416-2.83,1.172c-1.561,1.56-1.562,4.097,0,5.657l9.182,9.172
				l-9.181,9.172c-1.562,1.562-1.562,4.099,0,5.658c0.756,0.755,1.762,1.171,2.831,1.171s2.075-0.416,2.831-1.172l9.181-9.172
				l9.181,9.171c0.757,0.755,1.762,1.172,2.83,1.172c1.07,0,2.076-0.416,2.832-1.172c1.562-1.562,1.562-4.099,0-5.657L21.679,16.017
				z M29.442,29.431c-0.756,0.755-2.074,0.756-2.832,0l-9.887-9.878c-0.392-0.393-1.025-0.393-1.416,0l-9.889,9.879
				c-0.757,0.755-2.075,0.755-2.832,0c-0.78-0.78-0.78-2.049,0-2.829l9.889-9.879c0.188-0.188,0.293-0.44,0.293-0.707
				c0-0.265-0.105-0.52-0.293-0.707l-9.89-9.879c-0.78-0.78-0.78-2.049,0-2.829c0.379-0.378,0.882-0.586,1.416-0.586
				c0.536,0,1.038,0.208,1.417,0.586l9.889,9.879c0.391,0.391,1.024,0.391,1.416,0l9.889-9.878c0.757-0.756,2.074-0.756,2.832-0.001
				c0.377,0.378,0.586,0.881,0.586,1.415s-0.209,1.036-0.586,1.414l-9.889,9.879c-0.392,0.391-0.392,1.022,0,1.414l9.889,9.878
				C30.224,27.382,30.224,28.65,29.442,29.431z"/>
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                    </button>
                                </dialog>
                                <button class="btn-modal" id="modalError">
                                    <svg width="32px" height="32px" viewBox="0 0 56 56">
                                        <g id="Icons-56/error_outline_56" stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <g id="error_outline_56">
                                                <rect x="0" y="0" width="56" height="56"></rect>
                                                <path
                                                    d="M28,4 C41.254834,4 52,14.745166 52,28 C52,41.254834 41.254834,52 28,52 C14.745166,52 4,41.254834 4,28 C4,14.745166 14.745166,4 28,4 Z M28,7 C16.4020203,7 7,16.4020203 7,28 C7,39.5979797 16.4020203,49 28,49 C39.5979797,49 49,39.5979797 49,28 C49,16.4020203 39.5979797,7 28,7 Z M28,34 C29.1045695,34 30,34.8954305 30,36 C30,37.1045695 29.1045695,38 28,38 C26.8954305,38 26,37.1045695 26,36 C26,34.8954305 26.8954305,34 28,34 Z M28,16.5 C28.8284271,16.5 29.5,17.1715729 29.5,18 L29.5,29 L29.4931334,29.14446 C29.4204487,29.9051119 28.7796961,30.5 28,30.5 C27.1715729,30.5 26.5,29.8284271 26.5,29 L26.5,18 L26.5068666,17.85554 C26.5795513,17.0948881 27.2203039,16.5 28,16.5 Z"
                                                    id="↳-Icon-Color" fill="currentColor" fill-rule="nonzero"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Виджет</span>
                                </button>
                            </li>
                            <li>
                                <dialog id="modalShare">
                                    <h3>Поделиться</h3>
                                    <ul>
                                        <li>
                                            <a href="http://www.facebook.com/sharer.php?u=<your url>" target="_blank">
                                                <svg width="48px" height="48px" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512">
                                                    <path fill="#3B5998"
                                                          d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/share?url=" target="_blank">
                                                <svg width="48px" height="48px" fill="#49A9E2"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM351.3 199.3v0c0 86.7-66 186.6-186.6 186.6c-37.2 0-71.7-10.8-100.7-29.4c5.3 .6 10.4 .8 15.8 .8c30.7 0 58.9-10.4 81.4-28c-28.8-.6-53-19.5-61.3-45.5c10.1 1.5 19.2 1.5 29.6-1.2c-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3c-9-6-16.4-14.1-21.5-23.6s-7.8-20.2-7.7-31c0-12.2 3.2-23.4 8.9-33.1c32.3 39.8 80.8 65.8 135.2 68.6c-9.3-44.5 24-80.6 64-80.6c18.9 0 35.9 7.9 47.9 20.7c14.8-2.8 29-8.3 41.6-15.8c-4.9 15.2-15.2 28-28.8 36.1c13.2-1.4 26-5.1 37.8-10.2c-8.9 13.1-20.1 24.7-32.9 34c.2 2.8 .2 5.7 .2 8.5z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://vk.com/share.php?url=" target="_blank">
                                                <svg width="48px" height="48px" fill="#48729E"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://connect.ok.ru/offer?url=" target="_blank">
                                                <svg height="48px" version="1.1" viewBox="0 0 512 512" width="48px"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"><g
                                                        id="_x35_9-odnoklassniki">
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M256,255.996c65.789,0,119.301-53.648,119.301-119.627C375.301,70.397,321.789,16.75,256,16.75      c-65.793,0-119.302,53.647-119.302,119.619C136.698,202.348,190.207,255.996,256,255.996L256,255.996z M256,76.557      c32.896,0,59.648,26.827,59.648,59.812c0,32.986-26.752,59.816-59.648,59.816c-32.898,0-59.654-26.83-59.654-59.816      C196.346,103.384,223.102,76.557,256,76.557L256,76.557z M256,76.557"
                                                                        style="fill:#FFC107;"/>
                                                                    <path
                                                                        d="M414.193,252.676c-11.662-11.696-30.516-11.696-42.174,0      c-63.945,64.116-168.037,64.116-232.011,0c-11.658-11.696-30.512-11.696-42.174,0c-11.662,11.69-11.662,30.596,0,42.319      c37.102,37.199,84.134,58.407,132.632,63.932l-85.031,85.265c-11.658,11.694-11.658,30.592,0,42.286      c11.664,11.696,30.51,11.696,42.173,0L256,417.906l68.391,68.571c5.818,5.832,13.447,8.769,21.084,8.769      s15.268-2.937,21.084-8.769c11.662-11.694,11.662-30.592,0-42.286l-85.031-85.265c48.496-5.524,95.531-26.732,132.633-63.932      C425.824,283.295,425.824,264.366,414.193,252.676L414.193,252.676z M414.193,252.676"
                                                                        style="fill:#FFC107;"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="Layer_1"/></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tg://msg_url?url=" target="_blank">
                                                <svg fill="#3390EC" width="48px" height="48px"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                                    <path
                                                        d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/?text=" target="_blank">
                                                <svg fill="#3AD775" width="48px" height="48px"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="viber://forward?text=" target="_blank">
                                                <svg width="48px" height="48px" fill="#583EB5"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path
                                                        d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:?body=" target="_blank">
                                                <svg fill="#8338ec" width="48px" height="48px"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path
                                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="copy">
                                        <input type="text" name="text" id="text" value="Loadingg...">
                                        <button>
                                            <svg fill="#8B939A" width="30px" height="100%"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M208 0H332.1c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9V336c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V48c0-26.5 21.5-48 48-48zM48 128h80v64H64V448H256V416h64v48c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <button class="btn-modal-close">
                                        <svg
                                            width="32.034px" height="32.033px" viewBox="0 0 32.034 32.033"
                                        >
                                            <g>
                                                <g id="Close">
                                                    <g>
                                                        <path fill="#000" d="M21.679,16.017l9.18-9.172c0.758-0.755,1.175-1.76,1.175-2.828s-0.417-2.073-1.175-2.829
				c-0.754-0.755-1.762-1.171-2.83-1.171c-1.069,0-2.075,0.416-2.832,1.171l-9.182,9.172L6.834,1.188
				C6.078,0.432,5.072,0.016,4.001,0.016c-1.068,0-2.074,0.416-2.83,1.172c-1.561,1.56-1.562,4.097,0,5.657l9.182,9.172
				l-9.181,9.172c-1.562,1.562-1.562,4.099,0,5.658c0.756,0.755,1.762,1.171,2.831,1.171s2.075-0.416,2.831-1.172l9.181-9.172
				l9.181,9.171c0.757,0.755,1.762,1.172,2.83,1.172c1.07,0,2.076-0.416,2.832-1.172c1.562-1.562,1.562-4.099,0-5.657L21.679,16.017
				z M29.442,29.431c-0.756,0.755-2.074,0.756-2.832,0l-9.887-9.878c-0.392-0.393-1.025-0.393-1.416,0l-9.889,9.879
				c-0.757,0.755-2.075,0.755-2.832,0c-0.78-0.78-0.78-2.049,0-2.829l9.889-9.879c0.188-0.188,0.293-0.44,0.293-0.707
				c0-0.265-0.105-0.52-0.293-0.707l-9.89-9.879c-0.78-0.78-0.78-2.049,0-2.829c0.379-0.378,0.882-0.586,1.416-0.586
				c0.536,0,1.038,0.208,1.417,0.586l9.889,9.879c0.391,0.391,1.024,0.391,1.416,0l9.889-9.878c0.757-0.756,2.074-0.756,2.832-0.001
				c0.377,0.378,0.586,0.881,0.586,1.415s-0.209,1.036-0.586,1.414l-9.889,9.879c-0.392,0.391-0.392,1.022,0,1.414l9.889,9.878
				C30.224,27.382,30.224,28.65,29.442,29.431z"/>
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                    </button>
                                </dialog>
                                <button class="btn-modal" id="modalError">
                                    <svg width="32px" height="32px" x="0px" y="0px"
                                         viewBox="0 0 88.1 88.1" style="enable-background:new 0 0 88.1 88.1;"
                                         xml:space="preserve">
<g id="_x37_7_Essential_Icons_58_">
    <path id="Share" d="M69.05,58.1c-4.8,0-9.1,2.3-11.8,5.8l-24.3-14.1c1.5-3.7,1.5-7.8,0-11.5l24.3-14.1c2.7,3.5,7,5.8,11.8,5.8
		c8.3,0,15-6.7,15-15s-6.7-15-15-15s-15,6.7-15,15c0,2,0.4,4,1.1,5.7l-24.3,14.2c-2.8-3.5-7-5.8-11.8-5.8c-8.3,0-15,6.7-15,15
		s6.7,15,15,15c4.8,0,9.1-2.3,11.8-5.8l24.3,14.1c-0.7,1.7-1.1,3.7-1.1,5.7c0,8.3,6.7,15,15,15s15-6.7,15-15S77.35,58.1,69.05,58.1z
		 M69.05,4.1c6.1,0,11,4.9,11,11s-4.9,11-11,11c-6.1,0-11-4.9-11-11S62.95,4.1,69.05,4.1z M19.05,55.1c-6.1,0-11-4.9-11-11
		s4.9-11,11-11s11,4.9,11,11S25.15,55.1,19.05,55.1z M69.05,84.1c-6.1,0-11-4.9-11-11s4.9-11,11-11c6.1,0,11,4.9,11,11
		S75.15,84.1,69.05,84.1z"/>
</g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
</svg>
                                    <span>Поделиться</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <aside>
                    <div class="advertisement">w</div>

                    <noindex>
                        <div class="saved_calculations">
                            <div class="saved_calculations-header">
                                <svg width="30px" height="30px" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                </svg>
                                Сохраненные расчеты
                            </div>
                            <ul>
                                <li>
                                    <a href="">
                                        23232332
                                        <button>
                                            X
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </noindex>
                </aside>
            </div>
        </div>
    </section>
@endsection("endcontent")

@section('scripts')
    @vite(['resources/js/widget.js', 'resources/js/main.js'])
@endsection
