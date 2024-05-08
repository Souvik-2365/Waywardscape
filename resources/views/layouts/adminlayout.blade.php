<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png"
        href="{{ asset('https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/css/styles.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.47.0/tabler-icons.min.css') }}">

    <title>Modernize Bootstrap Admin</title>
</head>

<body>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <div>
                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{ route('admin.dashboard') }}" class="text-nowrap logo-img">
                        <svg width="200" height="70" viewBox="0 0 369.65517241379314 56.00362054232893" class="looka-1j8o68f"><defs id="SvgjsDefs1291"></defs><g id="SvgjsG1292" featurekey="odWo6G-0" transform="matrix(0.603448275862069,0,0,0.603448275862069,0,0)" fill="#3fc1c9"><g xmlns="http://www.w3.org/2000/svg"><path d="M44.988,19.795c-0.557,0-17.903,0-17.903,0c3.352,0,6.574,0.546,9.592,1.542h-5.752c-3.018-0.997-6.239-1.542-9.591-1.542   H0.257c8.831,0,28.275,5.913,30.497,28.278H51.83c-0.105-1.402-0.325-2.771-0.612-4.113h5.751c0.288,1.343,0.508,2.711,0.613,4.113   h17.903C74.301,32.26,61.105,19.795,44.988,19.795z M35.724,23.395h5.662c0.023,0,0.043-0.012,0.065-0.013   c2.583,1.378,4.935,3.125,7.01,5.154h-5.751C40.641,26.512,38.297,24.77,35.724,23.395z M50.698,41.904   c-1.216-4.212-3.292-8.059-6.057-11.312h5.751c2.765,3.253,4.841,7.1,6.058,11.312H50.698z"></path><path d="M32.388,0.057c-2.248,0.134-4.382,0.663-6.363,1.486h-2.399C25.976,0.554,28.391,0,31.103,0c0,0-10.986,0-11.415,0   C9.449,0,1.029,7.772,0,17.739h11.578c0.128-1.237,0.371-2.44,0.716-3.599h2.318c-0.345,1.159-0.592,2.361-0.72,3.599h13.877   C29.303,5.142,39.586,0.514,45.675,0.09C45.675,0.09,32.016,0.031,32.388,0.057z M15.365,12.083h-2.32   c0.624-1.473,1.43-2.848,2.374-4.113h2.325C16.799,9.234,15.991,10.609,15.365,12.083z M19.515,5.913h-2.333   c0.84-0.853,1.762-1.623,2.743-2.314h2.328C21.271,4.288,20.354,5.063,19.515,5.913z"></path><path d="M6.81,19.805c0.129-0.002,0.258-0.01,0.388-0.01H6.813L6.81,19.805z"></path><path d="M25.426,19.84c0.55-0.03,1.103-0.044,1.66-0.044h-1.671L25.426,19.84z"></path><path d="M100,92.806c-0.068-22.639-9.053-41.115-20.404-42.572L79.55,50.13H53.761c1.002,0.545,1.543,3.493,1.831,8.141h-7.201   c0.301-4.876,0.871-7.867,1.938-8.141H25.553l-0.015,0.034C13.83,50.874,4.443,69.664,4.374,92.806h43.732   c0.003-5.28-0.022-10.33-0.032-14.997h7.818c-0.015,4.669-0.044,9.72-0.041,14.997H100z M48.07,75.752   c-0.005-5.988,0.032-11.242,0.213-15.425h7.414c0.181,4.188,0.211,9.445,0.2,15.425H48.07z"></path></g></g><g id="SvgjsG1293" featurekey="VGK2BT-0" transform="matrix(2.3939088526765673,0,0,2.3939088526765673,78.97855555895772,-9.378390052871564)" fill="#3fc1c9"><path d="M18.61 6.4239999999999995 c0.15254 0 0.32203 0.13576 0.22034 0.3561 l-6.3559 13.068 c-0.050847 0.11864 -0.16949 0.22017 -0.30508 0.22017 l-0.13559 0 c-0.15254 0 -0.25424 -0.10153 -0.32203 -0.22017 l-2.0678 -4.339 l-2.0678 4.3559 c-0.067797 0.11864 -0.16966 0.22017 -0.32203 0.22017 l-0.13559 0 c-0.13559 0 -0.25424 -0.10153 -0.30508 -0.22017 l-6.3559 -13.085 c-0.10169 -0.20339 0.067797 -0.33898 0.22034 -0.33898 l1.7288 0 c0.15254 0 0.22034 0.13559 0.30508 0.30508 l4.4746 9.5763 l1.3898 -3.0508 l-3.0847 -6.5085 c-0.10169 -0.20339 0.067797 -0.33898 0.22034 -0.33898 l1.7119 0 c0.16949 0 0.23729 0.13559 0.30508 0.30525 l1.9153 4.2034 l1.9153 -4.1864 c0.067797 -0.16949 0.13559 -0.30508 0.30508 -0.30508 l1.7119 0 c0.16949 0 0.32203 0.13559 0.22034 0.35593 l-3.0847 6.4744 l1.3898 3.0508 l4.4746 -9.5932 c0.084746 -0.16966 0.15254 -0.30525 0.30508 -0.30525 l1.7288 0 z M25.762523728813562 19.62712 c-0.22034 -1.661 -0.2368 -3.2032 -0.16916 -4.8302 c0.084746 -2 -1.0169 -3.2881 -3.0847 -3.2881 c-1.3559 0 -2.7627 0.40678 -3.5932 0.86441 c-0.15254 0.084746 -0.25424 0.23712 -0.18644 0.38966 l0.42373 0.98305 c0.067797 0.16949 0.18644 0.22034 0.40678 0.11864 c1.0847 -0.49153 1.9661 -0.72881 2.8305 -0.72881 c0.91525 0 1.4576 0.35593 1.4237 1.322 c-3.1356 0.5422 -5.5254 1.1015 -5.5254 3.3049 c0 1.4746 1.0678 2.3219 2.7966 2.3219 c1.4408 0 2.1864 -0.44051 2.8983 -0.98288 c0.08458 0.50847 0.23712 0.89831 0.5761 0.89831 l1.0169 0 c0.15238 0 0.20322 -0.18644 0.18627 -0.37288 z M21.40692372881356 18.627299999999998 c-0.69492 0 -1.2373 -0.23729 -1.2373 -0.88136 c0 -1.0339 1.8981 -1.3729 3.6102 -1.7288 c-0.016949 0.55932 -0.016949 1.3051 0 1.7966 c-0.55932 0.42373 -1.5085 0.81356 -2.3729 0.81356 z M35.81351525423729 11.6102 c0.20339 0 0.30525 0.13543 0.20356 0.32203 l-3.3559 6.8983 c-1.678 3.4914 -3.1525 5.5083 -3.9492 6.288 c-0.15254 0.13559 -0.33898 0.067797 -0.50847 -0.10169 l-0.72881 -0.72881 c-0.18644 -0.16949 -0.15254 -0.33898 0.016949 -0.54237 c1.0339 -1.1695 2.3729 -3.1017 3.2373 -5.0507 l-3.5254 -6.7797 c-0.084746 -0.16949 0 -0.30508 0.18644 -0.30508 l1.4915 0 c0.15238 0 0.23712 0.067797 0.30492 0.18661 l2.4915 5.0846 l2.3729 -5.0678 c0.067797 -0.13559 0.16949 -0.20339 0.32203 -0.20339 l1.4407 0 z M49.59352542372882 11.6102 c0.20339 0 0.28831 0.11881 0.20356 0.30525 l-3.1695 7.8983 c-0.033898 0.10169 -0.15254 0.18627 -0.27119 0.18627 l-0.20339 0 c-0.13559 0 -0.23729 -0.08458 -0.30508 -0.18627 l-2.4746 -5.1186 l-2.4746 5.1186 c-0.050847 0.10169 -0.16949 0.18627 -0.28814 0.18627 l-0.22034 0 c-0.11864 0 -0.22034 -0.08458 -0.27119 -0.18627 l-3.1695 -7.8983 c-0.067797 -0.18644 0.016784 -0.30525 0.20339 -0.30525 l1.4066 0 c0.13559 0 0.25441 0.084746 0.30525 0.18661 l1.8981 5.1695 l2.1525 -5.0847 c0.050847 -0.11864 0.15271 -0.18644 0.3222 -0.18644 l0.28814 0 c0.16949 0 0.25424 0.067797 0.30508 0.18644 l2.1695 5.0847 l1.8814 -5.1695 c0.050847 -0.10186 0.15238 -0.18661 0.30492 -0.18661 l1.4068 0 z M58.33879491525424 19.62712 c-0.22034 -1.661 -0.2368 -3.2032 -0.16916 -4.8302 c0.084746 -2 -1.0169 -3.2881 -3.0847 -3.2881 c-1.3559 0 -2.7627 0.40678 -3.5932 0.86441 c-0.15254 0.084746 -0.25424 0.23712 -0.18644 0.38966 l0.42373 0.98305 c0.067797 0.16949 0.18644 0.22034 0.40678 0.11864 c1.0847 -0.49153 1.9661 -0.72881 2.8305 -0.72881 c0.91525 0 1.4576 0.35593 1.4237 1.322 c-3.1356 0.5422 -5.5254 1.1015 -5.5254 3.3049 c0 1.4746 1.0678 2.3219 2.7966 2.3219 c1.4408 0 2.1864 -0.44051 2.8983 -0.98288 c0.08458 0.50847 0.23712 0.89831 0.5761 0.89831 l1.0169 0 c0.15238 0 0.20322 -0.18644 0.18627 -0.37288 z M53.983194915254245 18.627299999999998 c-0.69492 0 -1.2373 -0.23729 -1.2373 -0.88136 c0 -1.0339 1.8981 -1.3729 3.6102 -1.7288 c-0.016949 0.55932 -0.016949 1.3051 0 1.7966 c-0.55932 0.42373 -1.5085 0.81356 -2.3729 0.81356 z M66.22018644067798 12.034099999999999 c0.18644 0.11864 0.23729 0.22017 0.11848 0.40661 l-0.69475 1.0169 c-0.084746 0.11864 -0.20339 0.15254 -0.35593 0.11864 c-0.35593 -0.16949 -0.66102 -0.32203 -1.2203 -0.32203 s-1.4407 0.23729 -1.9153 1.2881 l0 5.1866 c0 0.15238 -0.10169 0.27102 -0.25424 0.27102 l-1.339 0 c-0.15254 0 -0.25424 -0.11864 -0.25424 -0.27102 l0 -7.8476 c0 -0.15238 0.11864 -0.27119 0.25424 -0.27119 l0.9322 0 c0.40678 0 0.66102 0.42373 0.66102 0.72881 l0 0.11881 c0.59322 -0.54237 1.3051 -0.91525 2.2373 -0.91525 c0.86441 0 1.5085 0.27119 1.8305 0.49153 z M74.61012881355933 6.441000000000001 c0.38983 0 0.64424 0.25458 0.64424 0.61051 l0 12.678 c0 0.15238 -0.11864 0.27102 -0.25424 0.27102 l-0.69492 0 c-0.33898 0 -0.79661 -0.22017 -0.88119 -0.62695 c-0.59356 0.42373 -1.3902 0.74542 -2.3393 0.74542 c-2.3898 0 -3.9831 -1.932 -3.9831 -4.4066 c0 -2.5424 1.9492 -4.1695 3.9322 -4.1695 c1.0508 0 1.7964 0.3222 2.39 0.67797 l0 -4.322 c0 -0.52542 -0.10186 -0.79661 -0.15271 -1.1017 c-0.033898 -0.18661 0.033898 -0.3561 0.18644 -0.3561 l1.1525 0 z M68.91542881355932 15.712399999999999 c0 1.678 1.0847 2.6949 2.4746 2.6949 c0.83051 0 1.4915 -0.27119 2.0339 -0.57627 l0 -3.8814 c-0.62712 -0.40678 -1.322 -0.69492 -2.1017 -0.69492 c-1.0678 0 -2.4068 0.72881 -2.4068 2.4576 z M77.25406796610169 18.7798 l0.5761 -0.91508 c0.11864 -0.18661 0.22034 -0.23746 0.38983 -0.15271 c0.016949 0.033898 1.0508 0.64407 2.1864 0.64407 c0.98305 0 1.322 -0.38983 1.322 -0.77966 c0 -0.57627 -0.62712 -0.77949 -1.7627 -1.0676 c-1.6102 -0.42373 -2.678 -1.2542 -2.678 -2.5424 c0 -1.2712 1.0847 -2.4576 3.1186 -2.4576 c1.2373 0 2.0847 0.42373 2.7627 0.81356 c0.16949 0.10169 0.25424 0.25424 0.15254 0.38983 l-0.62712 0.9661 c-0.084746 0.13559 -0.22034 0.18644 -0.37288 0.13559 c-0.44068 -0.22017 -1.1525 -0.54237 -1.9153 -0.54237 c-0.94915 0 -1.2034 0.47458 -1.2034 0.76271 c0 0.49153 0.71186 0.72881 1.5763 0.96593 c1.5086 0.40678 3.0171 1.1356 3.0171 2.6102 c0 1.4237 -1.3558 2.5083 -3.3898 2.5083 c-1.3898 0 -2.6441 -0.6778 -3.0678 -1.0168 c-0.11864 -0.067797 -0.15254 -0.23729 -0.084746 -0.32203 z M92.5083220338983 18.4746 c0.10169 0.15254 0.10136 0.27119 -0.01728 0.39 c-0.74576 0.71186 -1.7288 1.2541 -2.9153 1.2541 c-2.339 0 -4.339 -1.8812 -4.339 -4.288 c0 -2.4237 2 -4.339 4.339 -4.339 c1.1864 0 2.1525 0.49153 2.8475 1.1864 c0.11864 0.11881 0.11864 0.25441 0.016949 0.38983 l-0.64407 0.81356 c-0.10169 0.13559 -0.20339 0.15254 -0.40678 0.016949 c-0.42373 -0.42373 -1 -0.67797 -1.7627 -0.67797 c-1.61 0 -2.61 1.2542 -2.61 2.5932 c0 1.322 1 2.5932 2.6271 2.5932 c0.76271 0 1.3051 -0.28814 1.7966 -0.77966 c0.18644 -0.15254 0.30525 -0.10169 0.4239 0.033898 z M101.37269322033897 19.62712 c-0.22034 -1.661 -0.2368 -3.2032 -0.16916 -4.8302 c0.084746 -2 -1.0169 -3.2881 -3.0847 -3.2881 c-1.3559 0 -2.7627 0.40678 -3.5932 0.86441 c-0.15254 0.084746 -0.25424 0.23712 -0.18644 0.38966 l0.42373 0.98305 c0.067797 0.16949 0.18644 0.22034 0.40678 0.11864 c1.0847 -0.49153 1.9661 -0.72881 2.8305 -0.72881 c0.91525 0 1.4576 0.35593 1.4237 1.322 c-3.1356 0.5422 -5.5254 1.1015 -5.5254 3.3049 c0 1.4746 1.0678 2.3219 2.7966 2.3219 c1.4408 0 2.1864 -0.44051 2.8983 -0.98288 c0.08458 0.50847 0.23712 0.89831 0.5761 0.89831 l1.0169 0 c0.15238 0 0.20322 -0.18644 0.18627 -0.37288 z M97.01709322033898 18.627299999999998 c-0.69492 0 -1.2373 -0.23729 -1.2373 -0.88136 c0 -1.0339 1.8981 -1.3729 3.6102 -1.7288 c-0.016949 0.55932 -0.016949 1.3051 0 1.7966 c-0.55932 0.42373 -1.5085 0.81356 -2.3729 0.81356 z M107.67783389830507 11.5256 c1.9831 0 3.8814 1.6271 3.8814 4.1695 c0 2.4746 -1.5424 4.4064 -3.9322 4.4064 c-0.91525 0 -1.6949 -0.30475 -2.2881 -0.71153 l0 4.8303 c0 0.49153 -0.52542 0.76271 -0.89831 0.76271 l-0.67797 0 c-0.15254 0 -0.27119 -0.11864 -0.27119 -0.27119 l0 -11.644 c0 -0.52542 -0.084746 -0.79661 -0.13559 -1.1017 c-0.033732 -0.18644 0.017115 -0.35593 0.18661 -0.35593 l1.1525 0 c0.37288 0 0.62729 0.23729 0.64407 0.57627 c0.57627 -0.35593 1.3219 -0.66102 2.3388 -0.66102 z M107.33883389830507 18.3902 c1.3729 0 2.4068 -1.0169 2.4068 -2.6949 c0 -1.7288 -1.2712 -2.4576 -2.339 -2.4576 c-0.76271 0 -1.4576 0.27119 -2.0678 0.66102 l0 3.9322 c0.54237 0.30508 1.1864 0.55932 2 0.55932 z M120.38982372881354 16.4915 c0.61 0 1.0336 -0.30508 1.0336 -1.0169 c0 -2.0847 -1.6102 -3.9831 -4.0847 -3.9831 c-2.3559 0 -4.2034 1.8644 -4.2034 4.3051 c0 2.5422 1.9322 4.288 4.3051 4.288 c1.5085 0 2.6949 -0.61017 3.4237 -1.5932 c0.10186 -0.13559 0.067963 -0.23729 -0.033568 -0.37288 l-0.32203 -0.42373 c-0.13559 -0.16933 -0.27119 -0.15254 -0.44085 -0.050847 c-0.5422 0.44068 -1.4405 0.81373 -2.4236 0.81373 c-1.3898 0 -2.3729 -0.84746 -2.5593 -1.9661 l5.3051 0 z M115.08462372881354 15.050799999999999 c0.067797 -0.81356 0.83051 -1.8644 2.2203 -1.8644 c1.4068 0 2.1356 1.0678 2.1864 1.8644 l-4.4068 0 z"></path></g></svg>
                    </a>
                    <a href="javascript:void(0)"
                        class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                        <i class="ti ti-x"></i>
                    </a>
                </div>

                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-dashboard"></i>
                                </span>
                                <span class="hide-menu"><b>DASHBOARD</b></span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-world"></i>
                                </span>
                                <span class="hide-menu"><b>DESTINATIONS</b></span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.createdestination') }}" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu"><b>Create &nbsp; Destination</b></span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.viewdestination') }}" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu"><b>View &nbsp; Destinations</b></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-package"></i>
                                </span>
                                <span class="hide-menu"><b>PACKAGES</b></span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.createpackage') }}" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu"><b>Create &nbsp; Package</b></span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.viewpackage') }}" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu"><b>View &nbsp; Packages</b></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-chart-donut-3"></i>
                                </span>
                                <span class="hide-menu"><b>Blog</b></span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../main/blog-posts.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Posts</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../main/blog-detail.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('admin.viewbookings') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-bookmark"></i>
                                </span>
                                <span class="hide-menu"><b>Bookings<b></span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
                    <div class="hstack" >
                        <div class="john-img">
                            <img src="{{ asset('uploads/profile/admin/' . auth()->guard('admin')->user()->image) }}"
                                class="rounded-circle" width="40" height="40" alt="" />
                        </div>
                        <div class="john-title" style="padding-left:1rem">
                            <h6 class="mb-0 fs-4 fw-semibold">{{ auth()->guard('admin')->user()->name }}</h6>
                            <span class="fs-2">Admin</span>
                        </div>
                        <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                            aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="logout">
                            <a href="{{ route('admin.logout') }}" aria-label="logout">
                                <i class="ti ti-power fs-6"></i>
                            </a>
                        </button>
                    </div>
                </div>

                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    <!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0)"
                                    class="nav-link d-flex d-lg-none align-items-center justify-content-center"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="{{ asset('uploads/profile/admin/' . auth()->guard('admin')->user()->image) }}"
                                                        class="rounded-circle" width="35" height="35"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="profile-dropdown position-relative" data-simplebar>
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="{{ asset('uploads/profile/admin/' . auth()->guard('admin')->user()->image) }}"
                                                        class="rounded-circle" width="80" height="80"
                                                        alt="" />
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-3">
                                                            {{ auth()->guard('admin')->user()->name }}</h5>
                                                        <span class="mb-1 d-block">Admin</span>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i
                                                                class="ti ti-mail fs-4"></i>{{ auth()->guard('admin')->user()->email }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="{{ route('admin.profile') }}"
                                                        class="py-8 px-7 mt-8 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-account.svg"
                                                                alt="" width="24" height="24" />
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                            <span class="fs-2 d-block text-body-secondary">Account
                                                                Settings</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-grid py-4 px-7 pt-8">
                                                    <a href="{{ route('admin.logout') }}"
                                                        class="btn btn-outline-primary">Log Out</a>
                                                </div>

                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
                <div class="app-header with-horizontal">
                    <nav class="navbar navbar-expand-xl container-fluid p-0">
                    
                        <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                                <a href="javascript:void(0)"
                                    class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                    

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="{{ asset('uploads/profile/admin/' . auth()->guard('admin')->user()->image) }}"
                                                        class="rounded-circle" width="35" height="35"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="profile-dropdown position-relative" data-simplebar>
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="{{ asset('uploads/profile/admin/' . auth()->guard('admin')->user()->image) }}"
                                                        class="rounded-circle" width="80" height="80"
                                                        alt="" />
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-3">
                                                            {{ auth()->guard('admin')->user()->name }}</h5>
                                                        <span class="mb-1 d-block">Admin</span>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i
                                                                class="ti ti-mail fs-4"></i>{{ auth()->guard('admin')->user()->email }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="{{ route('admin.profile') }}"
                                                        class="py-8 px-7 mt-8 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-account.svg"
                                                                alt="" width="24" height="24" />
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                            <span class="fs-2 d-block text-body-secondary">Account
                                                                Settings</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-grid py-4 px-7 pt-8">
                                                    <a href="{{ route('admin.logout') }}"
                                                        class="btn btn-outline-primary">Log Out</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </header>

            <!-- ---------------------------------- -->
            <!-- Main body start ################################################## -->
            <!-- ---------------------------------- -->
            <section>
                @yield('content')
            </section>
            <!-- ---------------------------------- -->
            <!-- Main body end ################################################## -->
            <!-- ---------------------------------- -->
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{ asset('admin_assets/assets/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('admin_assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/theme/sidebarmenu.js') }}"></script>

    <!-- solar icons -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/forms/repeater-init.js') }}"></script>
    <section>
        @yield('js')
    </section>
    <script src="{{ asset('admin_assets/assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    {{-- <script src="{{ asset('admin_assets/assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script> --}}
</body>

</html>
