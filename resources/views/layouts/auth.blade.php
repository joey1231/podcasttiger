<!DOCTYPE html>

<html lang="en" >
    <!--begin::Head-->
    <head>
        <meta charset="utf-8"/>
        <title>Podcast Hawk | Sign In</title>
        <meta name="description" content="Sign in to your Podcast Hawk account.  If you don't have one, what are you waiting for!  You can create one here as well."/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->


                    <!--begin::Page Custom Styles(used by this page)-->
                             <link href="https://user.podcasthawk.com/assets/css/pages/login/login-3.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                        <!--end::Page Custom Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
                    <link href="https://user.podcasthawk.com/assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                    <link href="https://user.podcasthawk.com/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                    <link href="https://user.podcasthawk.com/assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                <!--end::Global Theme Styles-->

                        <!--begin::Layout Themes(used by all pages)-->

                <link href="https://user.podcasthawk.com/assets/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                <link href="https://user.podcasthawk.com/assets/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                <link href="https://user.podcasthawk.com/assets/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                <link href="https://user.podcasthawk.com/assets/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css"/>        <!--end::Layout Themes-->

                <link rel="icon" href="https://podcasthawk.com/wp-content/uploads/2020/07/favicon-70x70.png" sizes="32x32" />
				<link rel="icon" href="https://podcasthawk.com/wp-content/uploads/2020/07/favicon.png" sizes="192x192" />
				<link rel="apple-touch-icon" href="https://podcasthawk.com/wp-content/uploads/2020/07/favicon.png" />
				<meta name="msapplication-TileImage" content="https://podcasthawk.com/wp-content/uploads/2020/07/favicon.png" />

                @yield('additional_css')

            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

    	<!--begin::Main-->
	<div class="d-flex flex-column flex-root" >
		<!--begin::Login-->

        @yield('content')
<!--end::Login-->
	</div>
<!--end::Main-->


        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#3699FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#E4E6EF",
                "dark": "#181C32"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1F0FF",
                "secondary": "#EBEDF3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#3F4254",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#EBEDF3",
            "gray-300": "#E4E6EF",
            "gray-400": "#D1D3E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#7E8299",
            "gray-700": "#5E6278",
            "gray-800": "#3F4254",
            "gray-900": "#181C32"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->
   <!--       <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> -->
    	<!--begin::Global Theme Bundle(used by all pages)-->
    	    	   <script src="{{asset('js/plugins.js')}}"></script>
		    	   <script src="{{asset('js/prisms.js')}}"></script>
		    	   <script src="{{asset('js/script.js')}}"></script>
				<!--end::Global Theme Bundle-->

                        <!--begin::Global Theme Bundle(used by all pages)-->
                   <!-- <script src="https://user.podcasthawk.com/assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
                   <script src="https://user.podcasthawk.com/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
                   <script src="https://user.podcasthawk.com/assets/js/scripts.bundle.js?v=7.0.6"></script> -->
                <!--end::Global Theme Bundle-->
                    <!--begin::Page Scripts(used by this page)-->
                   <script src="{{asset('js/login.js')}}"></script>

                        <!--end::Page Scripts-->

                  @yield('additional_js')
            </body>
    <!--end::Body-->
</html>
