<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8" />
    <title>2002 | {{__('Veritabanı bulunamadı!')}}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{asset('assets/panel/css/pages/error/error-515aa.css?v=7.2.2')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/panel/plugins/global/plugins.bundle15aa.css?v=7.2.2')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/panel/plugins/custom/prismjs/prismjs.bundle15aa.css?v=7.2.2')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/panel/css/style.bundle15aa.css?v=7.2.2')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/panel/css/themes/layout/header/base/light15aa.css?v=7.2.2')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/panel/css/themes/layout/header/menu/light15aa.css?v=7.2.2')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/panel/css/themes/layout/brand/dark15aa.css?v=7.2.2')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/panel/css/themes/layout/aside/dark15aa.css?v=7.2.2')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/panel/favicon.ico')}}">

</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    <div class="d-flex flex-column flex-root">

        <div class="error error-5 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url({{asset('assets/panel/media/error/bg5.jpg);')}}">

            <div class="container d-flex flex-row-fluid flex-column justify-content-md-center p-12">
                <h1 class="error-title font-weight-boldest text-info mt-10 mt-md-0 mb-12">{{__('Hata!')}}</h1>
                <p class="font-weight-boldest display-4">{{__('Veritabanı yok veya bağlanamadı.')}}</p>
                <p class="font-size-h3"></p>

                <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                    <button class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
                        {{ __('Yeniden Dene') }}
                    </button>
                </a>
            </div>


        </div>

    </div>

    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";

    </script>

    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576
                , "md": 768
                , "lg": 992
                , "xl": 1200
                , "xxl": 1400
            }
            , "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff"
                        , "primary": "#3699FF"
                        , "secondary": "#E5EAEE"
                        , "success": "#1BC5BD"
                        , "info": "#8950FC"
                        , "warning": "#FFA800"
                        , "danger": "#F64E60"
                        , "light": "#E4E6EF"
                        , "dark": "#181C32"
                    }
                    , "light": {
                        "white": "#ffffff"
                        , "primary": "#E1F0FF"
                        , "secondary": "#EBEDF3"
                        , "success": "#C9F7F5"
                        , "info": "#EEE5FF"
                        , "warning": "#FFF4DE"
                        , "danger": "#FFE2E5"
                        , "light": "#F3F6F9"
                        , "dark": "#D6D6E0"
                    }
                    , "inverse": {
                        "white": "#ffffff"
                        , "primary": "#ffffff"
                        , "secondary": "#3F4254"
                        , "success": "#ffffff"
                        , "info": "#ffffff"
                        , "warning": "#ffffff"
                        , "danger": "#ffffff"
                        , "light": "#464E5F"
                        , "dark": "#ffffff"
                    }
                }
                , "gray": {
                    "gray-100": "#F3F6F9"
                    , "gray-200": "#EBEDF3"
                    , "gray-300": "#E4E6EF"
                    , "gray-400": "#D1D3E0"
                    , "gray-500": "#B5B5C3"
                    , "gray-600": "#7E8299"
                    , "gray-700": "#5E6278"
                    , "gray-800": "#3F4254"
                    , "gray-900": "#181C32"
                }
            }
            , "font-family": "Poppins"
        };

    </script>
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1070954
                , hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '../../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');

    </script>
    <script src="{{asset('assets/panel/plugins/global/plugins.bundle15aa.js?v=7.2.2')}}"></script>
    <script src="{{asset('assets/panel/plugins/custom/prismjs/prismjs.bundle15aa.js?v=7.2.2')}}"></script>
    <script src="{{asset('assets/panel/js/scripts.bundle15aa.js?v=7.2.2')}}"></script>

</body>


</html>
