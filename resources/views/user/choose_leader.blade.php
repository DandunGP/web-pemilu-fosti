@extends('layouts.layout')

@section('content')
    <section id="choose-leader">
        @if (auth()->user()->choose != 1)
            <div class="container mb-3">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white text-center text-title">Pilih Ketua Umum</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row row-cols-2 row-cols-md-4 g-3 wrap-leader">
                    @foreach ($leader as $ld)
                        <div class="col">
                            <div class="card" style="" data-aos="fade-up" data-aos-duration="800">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="{{ asset('/storage/' . $ld->photo) }}" alt="profile"
                                            class="choose-image">
                                    </div>
                                    {{-- <br> --}}
                                    <h5 class="card-title text-center">{{ $ld->name }}</h5>
                                    {{-- <br>
                                    <hr>
                                    <p class="card-text text-center"><b>Rasionalisasi</b></p>
                                    <p class="card-text text-center">{{ $ld->rationalization }}</p> --}}
                                    <form action="{{ route('choosed') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="choose" value="{{ $ld->id }}">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-green fw-bold">Vote
                                                <i class="bi bi-star-fill"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center wrap-logout">
                        <div class="card card-choose">
                            <div class="card-body text-center">
                                <svg class="animated" id="freepik_stories-completed" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:svgjs="http://svgjs.com/svgjs">
                                    <style>
                                        svg#freepik_stories-completed:not(.animated) .animable {
                                            opacity: 0;
                                        }

                                        svg#freepik_stories-completed.animated #freepik--background-complete--inject-3 {
                                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft, 1.5s Infinite linear floating;
                                            animation-delay: 0s, 1s;
                                        }

                                        svg#freepik_stories-completed.animated #freepik--Plants--inject-3 {
                                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                                            animation-delay: 0s;
                                        }

                                        svg#freepik_stories-completed.animated #freepik--Character--inject-3 {
                                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn, 1.5s Infinite linear floating;
                                            animation-delay: 0s, 1s;
                                        }

                                        svg#freepik_stories-completed.animated #freepik--Floor--inject-3 {
                                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                                            animation-delay: 0s;
                                        }

                                        svg#freepik_stories-completed.animated #freepik--Ribbon--inject-3 {
                                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft, 1.5s Infinite linear heartbeat;
                                            animation-delay: 0s, 1s;
                                        }

                                        svg#freepik_stories-completed.animated #freepik--Confetti--inject-3 {
                                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                                            animation-delay: 0s;
                                        }

                                        svg#freepik_stories-completed.animated #freepik--Stars--inject-3 {
                                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp, 1.5s Infinite linear heartbeat;
                                            animation-delay: 0s, 1s;
                                        }

                                        svg#freepik_stories-completed.animated #freepik--speech-bubble--inject-3 {
                                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                            animation-delay: 0s;
                                        }

                                        @keyframes lightSpeedLeft {
                                            from {
                                                transform: translate3d(-50%, 0, 0) skewX(20deg);
                                                opacity: 0;
                                            }

                                            60% {
                                                transform: skewX(-10deg);
                                                opacity: 1;
                                            }

                                            80% {
                                                transform: skewX(2deg);
                                            }

                                            to {
                                                opacity: 1;
                                                transform: translate3d(0, 0, 0);
                                            }
                                        }

                                        @keyframes floating {
                                            0% {
                                                opacity: 1;
                                                transform: translateY(0px);
                                            }

                                            50% {
                                                transform: translateY(-10px);
                                            }

                                            100% {
                                                opacity: 1;
                                                transform: translateY(0px);
                                            }
                                        }

                                        @keyframes zoomIn {
                                            0% {
                                                opacity: 0;
                                                transform: scale(0.5);
                                            }

                                            100% {
                                                opacity: 1;
                                                transform: scale(1);
                                            }
                                        }

                                        @keyframes zoomOut {
                                            0% {
                                                opacity: 0;
                                                transform: scale(1.5);
                                            }

                                            100% {
                                                opacity: 1;
                                                transform: scale(1);
                                            }
                                        }

                                        @keyframes slideLeft {
                                            0% {
                                                opacity: 0;
                                                transform: translateX(-30px);
                                            }

                                            100% {
                                                opacity: 1;
                                                transform: translateX(0);
                                            }
                                        }

                                        @keyframes heartbeat {
                                            0% {
                                                transform: scale(1);
                                            }

                                            10% {
                                                transform: scale(1.1);
                                            }

                                            30% {
                                                transform: scale(1);
                                            }

                                            40% {
                                                transform: scale(1);
                                            }

                                            50% {
                                                transform: scale(1.1);
                                            }

                                            60% {
                                                transform: scale(1);
                                            }

                                            100% {
                                                transform: scale(1);
                                            }
                                        }

                                        @keyframes slideUp {
                                            0% {
                                                opacity: 0;
                                                transform: translateY(30px);
                                            }

                                            100% {
                                                opacity: 1;
                                                transform: inherit;
                                            }
                                        }

                                        @keyframes fadeIn {
                                            0% {
                                                opacity: 0;
                                            }

                                            100% {
                                                opacity: 1;
                                            }
                                        }
                                    </style>
                                    <g id="freepik--background-complete--inject-3" class="animable"
                                        style="transform-origin: 240.128px 235.223px;">
                                        <path
                                            d="M392.25,268.44l-72.73-27.5a9.72,9.72,0,0,1-5.65-12.54l38.06-100.66a9.73,9.73,0,0,1,12.54-5.66l46.13,17.44,21.78,50.3-27.59,73A9.73,9.73,0,0,1,392.25,268.44Z"
                                            style="fill: rgb(245, 245, 245); transform-origin: 372.809px 195.263px;"
                                            id="el2ps5sgttnz" class="animable"></path>
                                        <path d="M410.6,139.52l-10.72,28.33a9.05,9.05,0,0,0,5.26,11.67l27.24,10.3Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 415.837px 164.67px;"
                                            id="eljvr1pevesva" class="animable"></path>
                                        <path
                                            d="M399.31,170.48s-2.95,6.74,4,12a8.27,8.27,0,0,0,.82.54c3.32,2,25.16,15,25.36,14.47l2.88-7.62-27.24-10.3S398.43,176.72,399.31,170.48Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 415.529px 183.993px;"
                                            id="elnzbo6pzj3up" class="animable"></path>
                                        <path
                                            d="M394.22,164.39c-.14.37-7.78-2.19-17.07-5.7s-16.71-6.66-16.57-7,7.78,2.19,17.07,5.7S394.36,164,394.22,164.39Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 377.4px 158.042px;"
                                            id="elquzgdzr1kn" class="animable"></path>
                                        <path
                                            d="M409.89,188.63c-.14.36-12.64-4-27.93-9.81s-27.58-10.77-27.44-11.14,12.64,4,27.94,9.82S410,188.26,409.89,188.63Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 382.205px 178.154px;"
                                            id="elgd0hgck7abl" class="animable"></path>
                                        <path
                                            d="M409.82,203.89c-.14.36-13.76-4.45-30.43-10.76s-30.07-11.71-29.93-12.07,13.76,4.45,30.43,10.76S410,203.52,409.82,203.89Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 379.64px 192.475px;"
                                            id="elvg3xupe71p" class="animable"></path>
                                        <path
                                            d="M405.05,216.51c-.14.36-13.76-4.45-30.43-10.76S344.55,194,344.69,193.68s13.76,4.45,30.43,10.75S405.19,216.14,405.05,216.51Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 374.87px 205.097px;"
                                            id="ely3fqne5u0v" class="animable"></path>
                                        <path
                                            d="M400.28,229.13c-.14.36-13.77-4.45-30.43-10.76s-30.07-11.71-29.94-12.07,13.76,4.45,30.44,10.75S400.41,228.76,400.28,229.13Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 370.095px 217.715px;"
                                            id="elqdw0sq7tg8r" class="animable"></path>
                                        <path
                                            d="M395.5,241.75c-.13.36-13.76-4.46-30.42-10.76S335,219.28,335.14,218.92s13.76,4.45,30.43,10.75S395.64,241.38,395.5,241.75Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 365.32px 230.335px;"
                                            id="eldbiixs7a0mc" class="animable"></path>
                                        <g id="elsk27s6fvs1k">
                                            <rect x="70.82" y="176.28" width="114.31" height="158.27"
                                                rx="6.36"
                                                style="fill: rgb(235, 235, 235); transform-origin: 127.975px 255.415px; transform: rotate(-19.3deg);"
                                                class="animable" id="elrhzdf1x127"></rect>
                                        </g>
                                        <g id="elj9p2f1pzkvs">
                                            <rect x="79.32" y="184.67" width="98.27" height="144.26"
                                                style="fill: rgb(224, 224, 224); transform-origin: 128.455px 256.8px; transform: rotate(-19.3deg);"
                                                class="animable" id="el5trksj9jj9u"></rect>
                                        </g>
                                        <g id="elp4atfgydhs">
                                            <rect x="77.21" y="184.1" width="98.27" height="141.51"
                                                style="fill: rgb(250, 250, 250); transform-origin: 126.345px 254.855px; transform: rotate(-19.3deg);"
                                                class="animable" id="elbdh83aqbw4k"></rect>
                                        </g>
                                        <path
                                            d="M196.09,305.39,149.2,171.88l.17.08L56.64,204.45h0l.09-.18c17.48,50.16,33.75,96.49,46.74,133.56l-.15-.07,92.78-32.37L103.39,338l-.11,0,0-.11c-13-37.07-29.22-83.4-46.8-133.55l0-.14.13,0h0l92.74-32.46.13,0,0,.12Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 126.29px 254.87px;"
                                            id="elvqzo424roe" class="animable"></path>
                                        <path
                                            d="M163.2,316.91s20.65-17.42,24.23-35.56A26.25,26.25,0,0,1,169.77,292S169.36,311,163.2,316.91Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 175.315px 299.13px;"
                                            id="elmsnxz7op53k" class="animable"></path>
                                        <g id="elntzfx91iiw9">
                                            <rect x="81.82" y="234.59" width="12.01" height="12.01"
                                                rx="3.42"
                                                style="fill: rgb(235, 235, 235); transform-origin: 87.825px 240.595px; transform: rotate(-19.3deg);"
                                                class="animable" id="elpgnigh9bfpl"></rect>
                                        </g>
                                        <path
                                            d="M87.69,242.48h0a.24.24,0,0,1-.22,0l-2.24-1.3a.28.28,0,0,1,.28-.48l2,1.14,2.36-5a.3.3,0,0,1,.38-.14.28.28,0,0,1,.13.38l-2.49,5.32A.26.26,0,0,1,87.69,242.48Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 87.7652px 239.592px;"
                                            id="eltkekfufmnll" class="animable"></path>
                                        <path
                                            d="M151.73,213.4c0,.08-12,4.37-26.89,9.58s-27,9.37-27,9.3,12-4.37,26.9-9.58S151.71,213.33,151.73,213.4Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 124.785px 222.84px;"
                                            id="el4cszxo9smvb" class="animable"></path>
                                        <path
                                            d="M123.45,232.62s-.31.14-.87.36l-2.42.9c-2,.74-4.88,1.75-8,2.85s-6,2.08-8,2.77l-2.45.81a6.46,6.46,0,0,1-.91.26,5.9,5.9,0,0,1,.87-.37l2.42-.89c2-.75,4.88-1.76,8-2.86s6-2.07,8-2.77l2.45-.81A5.48,5.48,0,0,1,123.45,232.62Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 112.125px 236.595px;"
                                            id="eltjduu74gssf" class="animable"></path>
                                        <path
                                            d="M153,217.08c0,.07-12,4.36-26.9,9.57s-27,9.38-27,9.3,12-4.36,26.91-9.57S153,217,153,217.08Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 126.05px 226.515px;"
                                            id="eldfsgoon9vga" class="animable"></path>
                                        <g id="ell5uh8g38ckp">
                                            <rect x="88.79" y="254.49" width="12.01" height="12.01"
                                                rx="3.42"
                                                style="fill: rgb(235, 235, 235); transform-origin: 94.795px 260.495px; transform: rotate(-19.3deg);"
                                                class="animable" id="elxd2285ev04"></rect>
                                        </g>
                                        <path
                                            d="M94.66,262.38h0a.26.26,0,0,1-.23,0l-2.23-1.3a.27.27,0,0,1-.1-.38.27.27,0,0,1,.38-.1l2,1.14,2.36-5.05a.29.29,0,0,1,.37-.14.28.28,0,0,1,.14.37l-2.49,5.33A.29.29,0,0,1,94.66,262.38Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 94.7169px 259.468px;"
                                            id="el9436olon1mg" class="animable"></path>
                                        <path
                                            d="M158.7,233.3c0,.08-12,4.36-26.9,9.58s-27,9.37-27,9.3,12-4.37,26.9-9.58S158.68,233.23,158.7,233.3Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 131.75px 242.74px;"
                                            id="el9e8nqcazyhf" class="animable"></path>
                                        <path
                                            d="M130.42,252.52s-.31.14-.88.36l-2.41.9c-2,.74-4.88,1.75-8,2.85s-6,2.08-8,2.77l-2.45.81a6.46,6.46,0,0,1-.91.26,5.32,5.32,0,0,1,.87-.37l2.42-.89c2-.75,4.88-1.76,8-2.86s6-2.07,8-2.77l2.45-.81A5.48,5.48,0,0,1,130.42,252.52Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 119.095px 256.495px;"
                                            id="el56vxlwnpyvr" class="animable"></path>
                                        <path
                                            d="M160,237c0,.07-12,4.36-26.9,9.57s-27,9.38-27,9.3,12-4.36,26.9-9.57S160,236.9,160,237Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 133.05px 246.435px;"
                                            id="elo5imk4qfxu" class="animable"></path>
                                        <g id="elem09v1boubi">
                                            <rect x="95.76" y="274.39" width="12.01" height="12.01"
                                                rx="3.42"
                                                style="fill: rgb(235, 235, 235); transform-origin: 101.765px 280.395px; transform: rotate(-19.3deg);"
                                                class="animable" id="elyya0zj402q"></rect>
                                        </g>
                                        <path
                                            d="M101.63,282.28h0a.26.26,0,0,1-.23,0L99.16,281a.28.28,0,1,1,.28-.48l2,1.14,2.36-5.05a.28.28,0,1,1,.51.23l-2.49,5.33A.33.33,0,0,1,101.63,282.28Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 101.665px 279.37px;"
                                            id="ela3r6tjpfdj" class="animable"></path>
                                        <path
                                            d="M165.67,253.2c0,.08-12,4.36-26.9,9.58s-27,9.37-27,9.29,12-4.36,26.91-9.57S165.64,253.13,165.67,253.2Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 138.72px 262.635px;"
                                            id="ele8k82vq6rdl" class="animable"></path>
                                        <path
                                            d="M137.39,272.41a6.46,6.46,0,0,1-.88.37l-2.42.9c-2,.74-4.87,1.75-8,2.85s-6,2.07-8,2.77l-2.45.81a6.93,6.93,0,0,1-.91.26,5.32,5.32,0,0,1,.87-.37l2.42-.9c2-.74,4.88-1.75,8-2.85s6-2.07,8-2.77l2.44-.81A8.53,8.53,0,0,1,137.39,272.41Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 126.06px 276.39px;"
                                            id="eluw68hmzqhz" class="animable"></path>
                                        <path
                                            d="M167,256.88c0,.07-12,4.36-26.9,9.57s-27,9.38-27,9.3,12-4.36,26.9-9.58S166.93,256.8,167,256.88Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 140.05px 266.315px;"
                                            id="el470mh290mel" class="animable"></path>
                                        <g id="el2l73ztozezv">
                                            <rect x="102.73" y="294.29" width="12.01" height="12.01"
                                                rx="3.42"
                                                style="fill: rgb(235, 235, 235); transform-origin: 108.735px 300.295px; transform: rotate(-19.3deg);"
                                                class="animable" id="el9mtumt0wdho"></rect>
                                        </g>
                                        <path
                                            d="M108.59,302.18h0a.28.28,0,0,1-.22,0l-2.24-1.3a.28.28,0,1,1,.29-.48l2,1.14,2.36-5a.28.28,0,0,1,.37-.14.29.29,0,0,1,.14.37l-2.5,5.33A.29.29,0,0,1,108.59,302.18Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 108.652px 299.289px;"
                                            id="elhg3dlcgh8e" class="animable"></path>
                                        <path
                                            d="M172.64,273.1c0,.08-12,4.36-26.9,9.57s-27,9.38-27,9.3,12-4.36,26.9-9.57S172.61,273,172.64,273.1Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 145.69px 282.535px;"
                                            id="el3o9xn4kvhql" class="animable"></path>
                                        <path
                                            d="M144.35,292.31a5.32,5.32,0,0,1-.87.37l-2.42.9c-2,.74-4.88,1.75-8,2.85s-6,2.07-8,2.77l-2.45.81c-.58.18-.91.27-.91.26a5.32,5.32,0,0,1,.87-.37l2.42-.9c2-.74,4.88-1.75,8-2.85s6-2.07,8-2.77l2.45-.81A6.93,6.93,0,0,1,144.35,292.31Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 133.025px 296.29px;"
                                            id="elv08ez53f2mg" class="animable"></path>
                                        <path
                                            d="M173.93,276.78c0,.07-12,4.36-26.9,9.57s-27,9.37-27,9.3,12-4.36,26.9-9.58S173.9,276.7,173.93,276.78Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 146.98px 286.215px;"
                                            id="elty2xodd5nsr" class="animable"></path>
                                        <path
                                            d="M67.09,191.3l2.44,7a7.79,7.79,0,0,0,9.92,4.78l51.3-18a7.77,7.77,0,0,0,4.77-9.91l-2.44-7Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 101.524px 185.843px;"
                                            id="eluordtoqbzi9" class="animable"></path>
                                        <path
                                            d="M100.77,181.82a7.3,7.3,0,1,1,4.47-9.29A7.3,7.3,0,0,1,100.77,181.82Zm-3.9-11.13a4.5,4.5,0,1,0,5.73,2.76A4.5,4.5,0,0,0,96.87,170.69Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 98.3471px 174.934px;"
                                            id="elnz1po44d3am" class="animable"></path>
                                        <path
                                            d="M141.77,200c0,.13-13.48,5-30.21,10.85s-30.33,10.5-30.38,10.37,13.48-5,30.21-10.85S141.72,199.83,141.77,200Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 111.475px 210.609px;"
                                            id="elgm87uojnagq" class="animable"></path>
                                        <path
                                            d="M124.44,202.45c0,.13-5.9,2.34-13.29,4.93S97.73,212,97.68,211.82s5.91-2.34,13.3-4.93S124.4,202.32,124.44,202.45Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 111.06px 207.138px;"
                                            id="elnkhwkhxe3g8" class="animable"></path>
                                    </g>
                                    <g id="freepik--Plants--inject-3" class="animable"
                                        style="transform-origin: 245.984px 414.749px;">
                                        <path
                                            d="M391,405.08a19,19,0,0,1,11.81-1.43c2.14.35,4.38,1,5.83,2.6s1.74,4.44.06,5.82A5.55,5.55,0,0,1,405,413c-3.13,0-6.59-.59-9.08,1.29-1.43,1.07-2.37,2.85-4.07,3.38a4,4,0,0,1-4.43-2,6.89,6.89,0,0,1-.5-5.07A7.74,7.74,0,0,1,391,405.08Z"
                                            style="fill: #228B22; transform-origin: 398.249px 410.527px;"
                                            id="eliyxv54341g9" class="animable"></path>
                                        <path
                                            d="M382.72,389.2c2.2,3.13,6.47,2.1,8.45.18s2.81-4.69,3.57-7.33c1.74-6.05,3.5-12.39,2.21-18.55a10.34,10.34,0,0,0-2.37-5,5.39,5.39,0,0,0-5.1-1.7c-2.16.57-3.49,2.68-4.46,4.68a44.23,44.23,0,0,0-4.37,19c0,3.06.35,6.26,2.07,8.79"
                                            style="fill: #228B22; transform-origin: 389.022px 373.945px;"
                                            id="el1wyz93qhdyn" class="animable"></path>
                                        <path
                                            d="M376.69,393.7a11.41,11.41,0,0,0,1.78-10.51,20.26,20.26,0,0,0-6.22-9,33.49,33.49,0,0,0-11.14-6.57,11.85,11.85,0,0,0-5-.85,5.24,5.24,0,0,0-4.2,2.54c-1.18,2.24,0,4.95,1.16,7.16a83.88,83.88,0,0,0,7.32,11.14c2.19,2.83,4.7,5.62,8.05,6.9s6.81,1.12,8.58-1.19"
                                            style="fill: #228B22; transform-origin: 365.232px 381.033px;"
                                            id="el4n0c98djafc" class="animable"></path>
                                        <path
                                            d="M382.58,436.51a7.28,7.28,0,0,0,.19-1.42c.11-1,.23-2.34.38-3.89a54.43,54.43,0,0,1,.88-5.71,43.74,43.74,0,0,1,2.07-6.73,24.87,24.87,0,0,1,3.44-6.09,12.86,12.86,0,0,1,4.35-3.62,12.1,12.1,0,0,1,3.66-1.14,6.88,6.88,0,0,0,1.42-.2,6.77,6.77,0,0,0-1.45,0,11.24,11.24,0,0,0-3.81,1,12.79,12.79,0,0,0-4.59,3.64,24.44,24.44,0,0,0-3.56,6.22,40.42,40.42,0,0,0-2.06,6.84,48.85,48.85,0,0,0-.76,5.78c-.13,1.65-.17,3-.19,3.91A6,6,0,0,0,382.58,436.51Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 390.746px 422.091px;"
                                            id="elc2pgx2j5zog" class="animable"></path>
                                        <path
                                            d="M382.84,433.52a2.44,2.44,0,0,0,0-.66V431c0-1.64,0-4,.08-7,.15-5.87.65-12.18,1.63-21.08.92-8.37,2.16-18.11,3.47-24.44.28-1.44.56-2.74.83-3.87s.47-2.12.68-2.91.32-1.36.44-1.84a5,5,0,0,0,.12-.66,2.86,2.86,0,0,0-.23.62c-.15.48-.33,1.08-.55,1.82s-.5,1.76-.78,2.89-.61,2.42-.92,3.86A217.39,217.39,0,0,0,384,401.09c-1,8.92-1.42,17-1.45,22.92,0,2.94,0,5.32.1,7,0,.77.08,1.4.11,1.89A3.55,3.55,0,0,0,382.84,433.52Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 386.32px 401.36px;"
                                            id="ely2yrsoknik" class="animable"></path>
                                        <path
                                            d="M382.88,417.86a12,12,0,0,0,0-2,53.53,53.53,0,0,0-.61-5.35,69,69,0,0,0-1.74-7.8,63.14,63.14,0,0,0-3.26-9.23,49.27,49.27,0,0,0-9.57-14.91,24.39,24.39,0,0,0-2.26-2.09c-.34-.3-.65-.59-1-.82l-.87-.6a11.16,11.16,0,0,0-1.67-1.06,56.21,56.21,0,0,1,5.45,4.86,51.4,51.4,0,0,1,9.34,14.86,72.43,72.43,0,0,1,3.28,9.14,75.06,75.06,0,0,1,1.85,7.72c.41,2.23.65,4,.79,5.3A13.61,13.61,0,0,0,382.88,417.86Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 372.411px 395.93px;"
                                            id="el7nwq0md7nmn" class="animable"></path>
                                        <polygon
                                            points="367.74 445.49 369.31 466.99 396.94 466.99 398.5 445.49 367.74 445.49"
                                            style="fill: rgb(38, 50, 56); transform-origin: 383.12px 456.24px;"
                                            id="elntckp3tf60q" class="animable"></polygon>
                                        <rect x="365.08" y="437.01" width="36.73" height="8.48"
                                            style="fill: rgb(38, 50, 56); transform-origin: 383.445px 441.25px;"
                                            id="el8yvj2y3gvqi" class="animable"></rect>
                                        <polygon
                                            points="365.08 466.17 365.08 468.51 366.8 468.51 401.19 468.51 401.19 466.17 365.08 466.17"
                                            style="fill: rgb(69, 90, 100); transform-origin: 383.135px 467.34px;"
                                            id="el6wqm4bydhzb" class="animable"></polygon>
                                        <polygon
                                            points="368.49 472.65 366.8 468.51 399.88 468.51 397.9 472.65 368.49 472.65"
                                            style="fill: rgb(69, 90, 100); transform-origin: 383.34px 470.58px;"
                                            id="elejwa9zgagkw" class="animable"></polygon>
                                        <path
                                            d="M398,452.51s0,.08-.13.2l-.41.55-1.61,2.06-.07.09-.07-.1-3.95-5.46H392l-3.9,5.51-.12.17-.14-.16-4.61-5.5h.26l-.25.32-4.13,5.17-.13.18-.13-.18c-1.4-2-2.71-3.84-3.9-5.51h.23l-4.79,5.46-.09.1-.07-.11c-.63-1.06-1.13-1.91-1.5-2.52l-.38-.67a1,1,0,0,1-.12-.24s.06.06.16.21l.43.65,1.57,2.47h-.15l4.72-5.53.12-.14.11.15,3.93,5.49h-.27L383,450l.26-.32.13-.17.13.16,4.61,5.51h-.26l3.93-5.49.11-.16.12.16c1.55,2.23,2.88,4.12,3.87,5.53h-.15l1.68-2,.45-.52Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 383.115px 452.525px;"
                                            id="elih6kvsjx58c" class="animable"></path>
                                        <path
                                            d="M398.89,445.34c0,.1-6.92.18-15.46.18s-15.46-.08-15.46-.18,6.92-.17,15.46-.17S398.89,445.25,398.89,445.34Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 383.43px 445.345px;"
                                            id="elz5zm5m6ijki" class="animable"></path>
                                        <path
                                            d="M400.29,468.75c0,.09-7.53.17-16.8.17s-16.8-.08-16.8-.17,7.52-.18,16.8-.18S400.29,468.65,400.29,468.75Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 383.49px 468.745px;"
                                            id="elfs8g7mvizsr" class="animable"></path>
                                        <path
                                            d="M127.8,400.15c-.08.09-.71-.29-1.41-.85s-1.21-1.09-1.13-1.19.7.29,1.4.85S127.87,400.05,127.8,400.15Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 126.529px 399.129px;"
                                            id="elq4ns8bbaw8d" class="animable"></path>
                                        <path
                                            d="M147,371.51a21.88,21.88,0,0,0-.65-7.95c-.84-2.55-2.8-4.88-5.42-5.43-3-.62-6.06,1.27-7.74,3.83s-2.25,5.66-2.75,8.67a306.4,306.4,0,0,0-3.75,62.95l12.24,1.72C144.26,413.33,146,394.12,147,371.51Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 136.756px 396.656px;"
                                            id="el1bndlmsnevi" class="animable"></path>
                                        <path
                                            d="M139.18,358l-.06.2-.2.55-.82,2.12c-.17.46-.4,1-.58,1.53l-.59,1.85-.69,2.13-.63,2.43A106,106,0,0,0,133.24,381c-.66,4.6-1.09,9.7-1.44,15.06-.62,10.73-.72,20.47-1,27.51-.13,3.53-.25,6.38-.38,8.34-.07,1-.12,1.71-.16,2.27,0,.23,0,.43,0,.58s0,.2,0,.2,0-.06,0-.2,0-.35,0-.59c0-.55,0-1.31.07-2.27.08-2,.15-4.81.24-8.34.2-7,.25-16.78.88-27.52.34-5.37.79-10.48,1.47-15.1a100.76,100.76,0,0,1,2.47-12.14l.66-2.43q.39-1.12.72-2.13l.64-1.85c.19-.56.43-1.06.61-1.52l.9-2.08q.14-.33.24-.54A.76.76,0,0,1,139.18,358Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 134.72px 396.48px;"
                                            id="eluef2mher9w" class="animable"></path>
                                        <path
                                            d="M140.31,358.05a8.83,8.83,0,0,1,1.5,2.53,18.73,18.73,0,0,1,1.11,7.92c-.32,6.77-.93,16.09-1.73,26.39s-1.71,19.6-2.43,26.33c-.37,3.36-.68,6.08-.91,8-.12.91-.21,1.63-.28,2.16l-.08.56a1.3,1.3,0,0,1,0,.19s0-.06,0-.19,0-.34,0-.57c0-.53.11-1.25.19-2.17.19-1.92.45-4.63.77-8,.64-6.74,1.49-16,2.3-26.34s1.46-19.61,1.86-26.36a19.12,19.12,0,0,0-1-7.85A16.42,16.42,0,0,0,140.31,358.05Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 140.232px 395.09px;"
                                            id="elvjb2ckpnvyi" class="animable"></path>
                                        <path
                                            d="M148.8,389.74a6.67,6.67,0,0,1-2.32-.6,6.78,6.78,0,0,1-2.17-1,6.41,6.41,0,0,1,2.32.6A6.67,6.67,0,0,1,148.8,389.74Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 146.555px 388.94px;"
                                            id="elee6nx3oyw99" class="animable"></path>
                                        <path
                                            d="M150.28,377.26a7.64,7.64,0,0,1-2.21,1.23,7.41,7.41,0,0,1-2.39.83,14.59,14.59,0,0,1,4.6-2.06Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 147.98px 378.29px;"
                                            id="elcejopc33t94" class="animable"></path>
                                        <path
                                            d="M149.51,367.07a7.4,7.4,0,0,1-3.62-.25,4,4,0,0,1,1.82-.09A4,4,0,0,1,149.51,367.07Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 147.7px 366.927px;"
                                            id="elvco96u6v7p8" class="animable"></path>
                                        <path
                                            d="M136.87,360.55c-.1.06-.64-.61-1.19-1.49a4.41,4.41,0,0,1-.83-1.73c.1-.06.64.6,1.2,1.49S137,360.48,136.87,360.55Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 135.873px 358.94px;"
                                            id="elhr0kv1t1gqq" class="animable"></path>
                                        <path
                                            d="M132.7,366.71a3.65,3.65,0,0,1-1.74.18,3.61,3.61,0,0,1-1.73-.26,3.65,3.65,0,0,1,1.74-.18A3.61,3.61,0,0,1,132.7,366.71Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 130.965px 366.67px;"
                                            id="elhb8vzmbpxmq" class="animable"></path>
                                        <path
                                            d="M129.7,379a4.22,4.22,0,0,1-1.83-.5,4.32,4.32,0,0,1-1.67-.91,4.22,4.22,0,0,1,1.83.5A4.32,4.32,0,0,1,129.7,379Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 127.95px 378.295px;"
                                            id="el55a2nl292x" class="animable"></path>
                                        <path
                                            d="M129.38,389.39c0,.12-.67.37-1.56.55s-1.62.25-1.65.13.68-.37,1.56-.55A3.38,3.38,0,0,1,129.38,389.39Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 127.775px 389.736px;"
                                            id="elggld1kt54to" class="animable"></path>
                                        <path
                                            d="M128,406.35c0,.12-.72.35-1.66.52a3.6,3.6,0,0,1-1.73.08,3.66,3.66,0,0,1,1.66-.51A3.53,3.53,0,0,1,128,406.35Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 126.305px 406.651px;"
                                            id="el2j7bkfag0q" class="animable"></path>
                                        <path
                                            d="M127,415.71c.06.1-.56.54-1.38,1s-1.53.7-1.58.59.56-.54,1.38-1S127,415.6,127,415.71Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 125.521px 416.505px;"
                                            id="elq2atiihtxmd" class="animable"></path>
                                        <path
                                            d="M134.67,426.33c-.1.06-.64-.68-1.2-1.66a4.82,4.82,0,0,1-.82-1.88c.1-.06.64.68,1.2,1.66A4.82,4.82,0,0,1,134.67,426.33Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 133.66px 424.56px;"
                                            id="eleltp68c23f" class="animable"></path>
                                        <path
                                            d="M136.88,408.68c.08.08-.52.81-1.34,1.62s-1.56,1.39-1.65,1.3.52-.81,1.34-1.62S136.79,408.59,136.88,408.68Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 135.384px 410.14px;"
                                            id="elfzqh3sz2x7" class="animable"></path>
                                        <path
                                            d="M136.39,399.41c-.09.09-.64-.37-1.24-1s-1-1.24-.92-1.32.64.37,1.24,1S136.48,399.33,136.39,399.41Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 135.311px 398.251px;"
                                            id="ely36ylnm23kp" class="animable"></path>
                                        <path
                                            d="M137.91,387.58c.09.08-.41.79-1.12,1.57s-1.35,1.37-1.44,1.29.41-.79,1.11-1.58S137.82,387.5,137.91,387.58Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 136.63px 389.01px;"
                                            id="el39jyy6hawjo" class="animable"></path>
                                        <path
                                            d="M138.76,379c-.09.09-.78-.46-1.56-1.22s-1.33-1.45-1.25-1.54.78.46,1.56,1.23S138.84,378.91,138.76,379Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 137.355px 377.62px;"
                                            id="elm69fjbma1yc" class="animable"></path>
                                        <path
                                            d="M140.44,367.38a4.39,4.39,0,0,1-.79,1.74c-.53.9-1.05,1.58-1.15,1.52s.24-.84.78-1.74S140.33,367.32,140.44,367.38Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 139.461px 369.01px;"
                                            id="elukkqlx51k2h" class="animable"></path>
                                        <path
                                            d="M143.59,356.62c.11.06-.2.84-.69,1.74s-1,1.59-1.08,1.54a4.17,4.17,0,0,1,.69-1.74C143,357.25,143.48,356.57,143.59,356.62Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 142.716px 358.26px;"
                                            id="eljjomyfo62s" class="animable"></path>
                                        <path
                                            d="M147.17,361.51c.05.11-.44.45-1.1.77s-1.23.48-1.28.37.44-.45,1.1-.77S147.12,361.4,147.17,361.51Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 145.98px 362.08px;"
                                            id="el08q2tenpokn5" class="animable"></path>
                                        <path
                                            d="M147.25,400.15a7.48,7.48,0,0,1-4.47-1.91,12.44,12.44,0,0,1,2.25.93A11.87,11.87,0,0,1,147.25,400.15Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 145.015px 399.195px;"
                                            id="ellwfswad5uk" class="animable"></path>
                                        <path
                                            d="M145.79,408.33c0,.12-.71.36-1.65.54a3.55,3.55,0,0,1-1.73.11,3.75,3.75,0,0,1,1.65-.54C145,408.26,145.77,408.21,145.79,408.33Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 144.1px 408.652px;"
                                            id="elalwueyucwy" class="animable"></path>
                                        <path
                                            d="M144,422.36c-.07.1-1-.55-1.86-1.63a4.87,4.87,0,0,1-1.17-2.19,13.86,13.86,0,0,1,1.51,1.92A13.23,13.23,0,0,1,144,422.36Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 142.485px 420.455px;"
                                            id="eli1c07mxt6ab" class="animable"></path>
                                        <path
                                            d="M124.31,428.78c-.08-.09.42-.65,1.11-1.24s1.32-1,1.4-.9-.42.64-1.11,1.24S124.39,428.87,124.31,428.78Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 125.565px 427.709px;"
                                            id="elkn6r0b4sl6" class="animable"></path>
                                        <path
                                            d="M118.65,398.16c-.8-2.49-2.29-5.39-4.9-5.43a4.34,4.34,0,0,0-3.68,2.46,9,9,0,0,0-1,4.5,117.56,117.56,0,0,0,5.61,32.62h9.57A113.87,113.87,0,0,0,118.65,398.16Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 116.656px 412.52px;"
                                            id="elrkcox144mh" class="animable"></path>
                                        <path
                                            d="M101.36,382.49a10.62,10.62,0,0,0-10-8.5c-4.23.74-5.87,4.9-6.37,9.16s.82,8.5,2.13,12.59q6.28,19.68,12.58,39.37l11.9-1.3C107.88,416.23,105.72,399.93,101.36,382.49Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 98.2408px 404.55px;"
                                            id="ellheva3v459g" class="animable"></path>
                                        <path
                                            d="M113.75,392.73a8.92,8.92,0,0,0-.81,1.35,8.81,8.81,0,0,0-.45,4.23c.18,1.82.39,4,.7,6.4s.74,5,1.28,7.78c1.08,5.5,2.3,10.42,3.07,14,.39,1.79.69,3.25.87,4.26.08.47.15.85.2,1.17s.06.41,0,.41a2.21,2.21,0,0,1-.12-.39l-.28-1.15c-.26-1.07-.6-2.5-1-4.23-.85-3.58-2.12-8.49-3.2-14-.54-2.76-1-5.4-1.25-7.82-.16-1.2-.26-2.36-.36-3.43s-.2-2.08-.25-3a8.68,8.68,0,0,1,.6-4.32A3.74,3.74,0,0,1,113.75,392.73Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 115.372px 412.53px;"
                                            id="elxw7vyq89la" class="animable"></path>
                                        <path
                                            d="M91.58,373.65a15.21,15.21,0,0,0-1.44,1.93,13.65,13.65,0,0,0-1.81,6.23,29,29,0,0,0,1.47,9.57c1,3.54,2.19,7.43,3.4,11.5,2.37,8.16,4.51,15.54,6.08,20.93l1.8,6.36c.2.72.35,1.29.47,1.73a2.87,2.87,0,0,1,.13.61,3.24,3.24,0,0,1-.22-.58c-.13-.44-.32-1-.54-1.72-.47-1.53-1.13-3.68-1.93-6.31L92.78,403c-1.2-4.09-2.33-8-3.37-11.52a28.56,28.56,0,0,1-1.39-9.7,13.37,13.37,0,0,1,2-6.3A7.31,7.31,0,0,1,91.58,373.65Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 94.8435px 403.08px;"
                                            id="elylfg04vjmh" class="animable"></path>
                                        <path
                                            d="M109.05,432.54a5.58,5.58,0,0,1-.27-.57c-.15-.39-.4-.94-.67-1.68-.57-1.46-1.3-3.61-2-6.31s-1.5-6-2.22-9.6-1.44-7.63-2.24-11.83-1.74-8.15-2.81-11.68a66.17,66.17,0,0,0-3.47-9.17,49.29,49.29,0,0,0-3.21-5.78c-.41-.66-.78-1.15-1-1.49a3.69,3.69,0,0,1-.33-.54,3.69,3.69,0,0,1,.4.48c.25.34.64.8,1.07,1.46a42.52,42.52,0,0,1,3.35,5.74,61.28,61.28,0,0,1,3.57,9.18A115.78,115.78,0,0,1,102,402.47c.79,4.19,1.53,8.19,2.21,11.84s1.4,6.88,2.12,9.59,1.39,4.86,1.91,6.33c.24.75.47,1.31.6,1.7A2.87,2.87,0,0,1,109.05,432.54Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 99.94px 403.215px;"
                                            id="el18pn40kvz25" class="animable"></path>
                                        <path
                                            d="M87.38,393.78c0,.11-.62.37-1.45.57s-1.52.27-1.54.15.61-.37,1.44-.57S87.35,393.66,87.38,393.78Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 85.8848px 394.14px;"
                                            id="elrgr6k6q2i9" class="animable"></path>
                                        <path
                                            d="M86.12,385.66a6.14,6.14,0,0,1-2,.22,5.91,5.91,0,0,1-2-.06,4,4,0,0,1,2-.38A4,4,0,0,1,86.12,385.66Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 84.12px 385.668px;"
                                            id="ella03cywjyv" class="animable"></path>
                                        <path
                                            d="M87.46,378.24c-.08.1-.73-.32-1.44-.93s-1.24-1.18-1.16-1.27.72.32,1.44.93S87.54,378.15,87.46,378.24Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 86.1601px 377.141px;"
                                            id="elu939gggjpl" class="animable"></path>
                                        <path
                                            d="M91.09,371.38c.12,0,.08.61.07,1.3s0,1.28-.15,1.3-.31-.56-.29-1.31S91,371.35,91.09,371.38Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 90.9464px 372.68px;"
                                            id="elvid6nsbflpn" class="animable"></path>
                                        <path
                                            d="M98.5,374.61c.1.07-.19.66-.65,1.31s-.91,1.13-1,1.06.19-.65.64-1.31S98.4,374.54,98.5,374.61Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 97.6765px 375.795px;"
                                            id="ell2d01msewga" class="animable"></path>
                                        <path
                                            d="M103.31,383c0,.12-.57.47-1.37.8s-1.5.5-1.54.39.57-.47,1.37-.79S103.27,382.86,103.31,383Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 101.854px 383.59px;"
                                            id="elej0pq6sjzin" class="animable"></path>
                                        <path
                                            d="M106.23,391.57a3.49,3.49,0,0,1-1.88.83,3.74,3.74,0,0,1-2.06.07,7.8,7.8,0,0,1,2-.5A8.16,8.16,0,0,1,106.23,391.57Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 104.26px 392.076px;"
                                            id="eleb3p23itf5" class="animable"></path>
                                        <path
                                            d="M92.83,389.13c-.11,0,0-.63.19-1.33s.49-1.23.6-1.19,0,.63-.19,1.33S93,389.17,92.83,389.13Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 93.225px 387.87px;"
                                            id="elwi7439e8eeb" class="animable"></path>
                                        <path
                                            d="M94.7,399.93a4.12,4.12,0,0,1,.54-1.79c.41-.94.83-1.66.94-1.61a4.12,4.12,0,0,1-.54,1.79C95.23,399.26,94.81,400,94.7,399.93Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 95.44px 398.231px;"
                                            id="elym040buacrf" class="animable"></path>
                                        <path
                                            d="M90.08,402.89a4.53,4.53,0,0,1-1.71-.38c-.91-.29-1.65-.55-1.62-.67a3.32,3.32,0,0,1,1.75.25C89.43,402.38,90.13,402.78,90.08,402.89Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 88.4158px 402.352px;"
                                            id="elxb2jii15rjh" class="animable"></path>
                                        <path
                                            d="M92.74,411.69c.07.1-.44.58-1.13,1.08s-1.33.82-1.4.73.44-.59,1.14-1.09S92.67,411.59,92.74,411.69Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 91.475px 412.593px;"
                                            id="ele737de0eo07" class="animable"></path>
                                        <path
                                            d="M94.88,420.47c0,.11-.6.37-1.41.56s-1.48.26-1.51.15.6-.37,1.41-.57S94.85,420.35,94.88,420.47Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 93.4195px 420.82px;"
                                            id="elhwugds7ke5n" class="animable"></path>
                                        <path
                                            d="M106.47,398.91c.06.1-.48.53-1.26.82s-1.48.33-1.5.22.6-.34,1.34-.63S106.41,398.8,106.47,398.91Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 105.092px 399.444px;"
                                            id="elnvivbvzixds" class="animable"></path>
                                        <path
                                            d="M108.12,412.56c-.05.11-.69-.08-1.43-.43s-1.3-.72-1.25-.83.7.09,1.44.43S108.18,412.45,108.12,412.56Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 106.781px 411.93px;"
                                            id="elclrw097rwtr" class="animable"></path>
                                        <path
                                            d="M111.05,422.34a4.68,4.68,0,0,1-1.9-.51c-1-.39-1.77-.8-1.73-.92a4.65,4.65,0,0,1,1.89.51C110.31,421.81,111.09,422.22,111.05,422.34Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 109.235px 421.625px;"
                                            id="elph9c8ktrpx" class="animable"></path>
                                        <path
                                            d="M95.35,430c-.06-.11.72-.63,1.62-1.34s1.6-1.35,1.69-1.26-.48.86-1.42,1.6A3.85,3.85,0,0,1,95.35,430Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 97.008px 428.696px;"
                                            id="elraixtm80da" class="animable"></path>
                                        <path
                                            d="M103.07,425c-.12,0-.29-.64-.59-1.4s-.6-1.37-.5-1.44.6.45.91,1.28S103.19,425,103.07,425Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 102.554px 423.577px;"
                                            id="elnulet0xex0p" class="animable"></path>
                                        <path
                                            d="M101,413.27c-.07.1-.57-.14-1.12-.53s-.93-.79-.86-.89.57.14,1.12.53S101.1,413.17,101,413.27Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 100.013px 412.56px;"
                                            id="el2v0ovw7cbu7" class="animable"></path>
                                        <path
                                            d="M119,394.85c.07.1-.42.58-1.09,1.07s-1.27.82-1.34.72.41-.57,1.08-1.07S119,394.75,119,394.85Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 117.785px 395.745px;"
                                            id="elvxuifsvumzc" class="animable"></path>
                                        <path
                                            d="M121.75,402.27c0,.12-.75.28-1.69.18s-1.65-.42-1.62-.53.77,0,1.67.09S121.74,402.15,121.75,402.27Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 120.095px 402.178px;"
                                            id="el85jsngegdlr" class="animable"></path>
                                        <path
                                            d="M110.08,403.94c0,.11-.67.36-1.59.42s-1.64-.09-1.63-.21.73-.16,1.61-.22S110.06,403.82,110.08,403.94Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 108.47px 404.12px;"
                                            id="eleewquoa2h9i" class="animable"></path>
                                        <path
                                            d="M111.09,396.92c0,.12-.72.14-1.5-.23s-1.23-.9-1.15-1,.62.28,1.33.6S111.1,396.8,111.09,396.92Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 109.76px 396.336px;"
                                            id="elq273khtyo5" class="animable"></path>
                                        <path
                                            d="M122.75,410.24c-.06.1-.79-.24-1.63-.77s-1.46-1-1.39-1.14.79.25,1.63.77S122.82,410.14,122.75,410.24Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 121.24px 409.279px;"
                                            id="elcjnpph9s0no" class="animable"></path>
                                        <rect x="88.97" y="431.06" width="62.25" height="11.03"
                                            style="fill: #228B22; transform-origin: 120.095px 436.575px;"
                                            id="elq5r4gi1bdsh" class="animable"></rect>
                                        <polygon
                                            points="93.62 439.91 101.19 472.88 138.29 472.88 146.57 439.91 93.62 439.91"
                                            style="fill: #228B22; transform-origin: 120.095px 456.395px;"
                                            id="elzy8e1f902p" class="animable"></polygon>
                                        <path
                                            d="M151.19,442.11c0,.12-14,.22-31.36.22s-31.36-.1-31.36-.22,14-.22,31.36-.22S151.19,442,151.19,442.11Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 119.83px 442.11px;"
                                            id="elf40wuqnbmhi" class="animable"></path>
                                        <path
                                            d="M116.57,404.18c-.1.06-.53-.43-.95-1.11s-.68-1.28-.58-1.34.53.43.95,1.11S116.67,404.11,116.57,404.18Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 115.805px 402.955px;"
                                            id="elueryxckn8j" class="animable"></path>
                                        <path
                                            d="M116.59,413.05a3.48,3.48,0,0,1,.33-1.67c.29-.89.63-1.58.74-1.54a3.5,3.5,0,0,1-.33,1.68C117,412.4,116.71,413.09,116.59,413.05Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 117.125px 411.445px;"
                                            id="elahxx8s7pla8" class="animable"></path>
                                        <path
                                            d="M119.63,422.37c-.11.06-.57-.69-1-1.66a4.55,4.55,0,0,1-.64-1.85c.11-.06.57.69,1,1.66A4.55,4.55,0,0,1,119.63,422.37Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 118.81px 420.615px;"
                                            id="el07wnvg252liu" class="animable"></path>
                                        <path
                                            d="M113.06,429.87c-.09-.08.28-.65.83-1.29s1.06-1.08,1.16-1-.28.66-.83,1.29S113.15,430,113.06,429.87Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 114.056px 428.731px;"
                                            id="elpbhsk11seh" class="animable"></path>
                                        <path
                                            d="M111.68,416.26c0,.12-.62.11-1.34,0s-1.28-.32-1.26-.44.62-.11,1.33,0S111.7,416.14,111.68,416.26Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 110.38px 416.04px;"
                                            id="elgt7ksz95yl" class="animable"></path>
                                    </g>
                                    <g id="freepik--Character--inject-3" class="animable"
                                        style="transform-origin: 260.009px 304.847px;">
                                        <rect x="180.63" y="355.24" width="147.62" height="117.72"
                                            style="fill: rgb(224, 224, 224); transform-origin: 254.44px 414.1px;"
                                            id="elz29w5cystl" class="animable"></rect>
                                        <g id="eluvlbpnqgjol">
                                            <g style="opacity: 0.3; transform-origin: 253.28px 392.49px;" class="animable"
                                                id="elvd56kul1d1">
                                                <path
                                                    d="M191.38,355.48c17.38,6.2,36.55,7.53,55.2,7.88,3.87.07,7.78.06,11.52,1s7.35,3.07,9.27,6.42c2.09,3.65,1.87,8.22.68,12.25s-3.24,7.76-4.72,11.69A43.65,43.65,0,0,0,261,416.53a20.48,20.48,0,0,0,3.08,8.8,10.09,10.09,0,0,0,7.82,4.58c5.61.08,9.45-5.43,12.23-10.31,11.41-20,23.75-42.7,31.05-64.53Z"
                                                    id="el8nx1d32feil" class="animable"
                                                    style="transform-origin: 253.28px 392.49px;"></path>
                                            </g>
                                        </g>
                                        <path
                                            d="M230.93,472.33c-.15,0-.26-26.09-.26-58.27s.11-58.28.26-58.28.26,26.09.26,58.28S231.07,472.33,230.93,472.33Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 230.93px 414.055px;"
                                            id="el0nitk7406zqs" class="animable"></path>
                                        <path
                                            d="M291.42,268.24c-.44-2.94-9.22-12.64-9.22-12.64s-4.38-17.61-5.7-22.8a17.14,17.14,0,0,0-1.91-4.26,34.25,34.25,0,0,0-12.8-12.35l-12.15-6.83-2.9-6.46-29.18-15-7.91,14S190.44,208,187.9,212.33s1.26,62.8,1.26,62.8-8,33.72-9.73,40.7.54,15.3.54,15.3l14.31-17.95c4.45-5.58,14.21-8.15,21.22-8.05l59.91.27L273,288.62,321.47,298s8.33-16.26,9-16.58S291.42,268.24,291.42,268.24Z"
                                            style="fill: #228B22; transform-origin: 254.629px 259.515px;"
                                            id="eldgzreq36dl" class="animable"></path>
                                        <path
                                            d="M216.32,207.35c-.42-.43,3.38,12.42,8.16,25.51a64.31,64.31,0,0,1,3.87,22.07v47.4l28.72-1.95-4.29-31.22s-3.5-20.14-4.48-27.8c-.9-7-4-26-4-26S228.35,219.6,216.32,207.35Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 236.679px 254.835px;"
                                            id="el34plm2vu2ym" class="animable"></path>
                                        <path
                                            d="M280.06,280a2,2,0,0,1,0-.73,10.49,10.49,0,0,1,.38-1.93,13,13,0,0,1,3.28-5.57,13.17,13.17,0,0,1,5.57-3.3,10.49,10.49,0,0,1,1.93-.38,1.92,1.92,0,0,1,.72,0c0,.09-1,.2-2.54.73a13.84,13.84,0,0,0-8.61,8.63C280.26,279,280.15,280,280.06,280Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 285.983px 274.028px;"
                                            id="elerj2z8fof1" class="animable"></path>
                                        <path
                                            d="M281.54,268.64a9.26,9.26,0,0,1,4.39-1.27,9,9,0,0,1,4.53.54c0,.16-2-.23-4.49,0S281.6,268.79,281.54,268.64Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 286px 267.974px;"
                                            id="eljegyd8yemr" class="animable"></path>
                                        <g id="els8lb0hvfjyf">
                                            <g style="opacity: 0.3; transform-origin: 204.15px 299.831px;"
                                                class="animable" id="elqvt73sqbt8c">
                                                <path
                                                    d="M186.27,294.51l-2.5,2.82a20.2,20.2,0,0,0,10.12,6.7,51.52,51.52,0,0,0,12.21,1.1,17.39,17.39,0,0,0,4.94-.47c1.63-.47,3.14-1.39,4.83-1.49a12.33,12.33,0,0,1,3.35.48,6.5,6.5,0,0,0,3.36.05,2.64,2.64,0,0,0,1.95-2.47A176.17,176.17,0,0,0,186.27,294.51Z"
                                                    id="elg5dfneotgug" class="animable"
                                                    style="transform-origin: 204.15px 299.831px;"></path>
                                            </g>
                                        </g>
                                        <path
                                            d="M268.27,298.13l-7-7.48L246.72,287s-13.28,4-13.6,4-11.56-3.08-11.56-3.08l-3.93,14.42,20.25,1.39,23.12-.93s1.21-1.12.49-1.89,3.87,1.3,4.41,1.32,1.58.44,2.3-.42C268.69,301.17,269.35,299.28,268.27,298.13Z"
                                            style="fill: rgb(255, 190, 157); transform-origin: 243.242px 295.365px;"
                                            id="elibs8gwefs3" class="animable"></path>
                                        <path
                                            d="M261.49,300.86a12.9,12.9,0,0,1-2.3-.66c-1.4-.44-3.35-1-5.52-1.6s-4.17-1-5.62-1.25a11.77,11.77,0,0,1-2.33-.55,10.11,10.11,0,0,1,2.39.18,51.74,51.74,0,0,1,5.68,1.12,48.18,48.18,0,0,1,5.52,1.76A9.43,9.43,0,0,1,261.49,300.86Z"
                                            style="fill: rgb(235, 153, 110); transform-origin: 253.605px 298.825px;"
                                            id="ely3s9affvmg" class="animable"></path>
                                        <path
                                            d="M268.27,298.13a31.55,31.55,0,0,1-3.22-1c-2-.66-4.73-1.48-7.8-2.33s-5.79-1.82-7.86-1.94a18.55,18.55,0,0,0-3.34.13,2.72,2.72,0,0,1,.87-.3,9.45,9.45,0,0,1,2.49-.2c2.14,0,5,.91,8,1.81s5.82,1.73,7.78,2.49c1,.37,1.75.71,2.29.95A3,3,0,0,1,268.27,298.13Z"
                                            style="fill: rgb(235, 153, 110); transform-origin: 257.16px 295.304px;"
                                            id="eli1jjud8q8im" class="animable"></path>
                                        <path
                                            d="M187.9,212.33s-10.45,7.27-13,17.73-13.56,53.21-11.3,59.6,46.2,12.67,46.2,12.67l5.21-22-22.32-6.11s.29-20.35.57-28.78S187.9,212.33,187.9,212.33Z"
                                            style="fill: #228B22; transform-origin: 189.153px 257.33px;"
                                            id="elnzrp5y8ch6d" class="animable"></path>
                                        <polygon
                                            points="214.73 283.64 221.92 285.41 217.59 301.99 210.53 300.86 214.73 283.64"
                                            style="fill: rgb(255, 255, 255); transform-origin: 216.225px 292.815px;"
                                            id="elnli4uqrqq2" class="animable"></polygon>
                                        <path
                                            d="M163.44,287.4s0,.37.11,1a4.87,4.87,0,0,0,1.53,2.49c1.91,1.78,5.56,3.26,10.18,4.09h0c2.11.7,4.52,1.25,7.09,1.83s5.35,1.17,8.27,1.76c5.85,1.2,12.32,2.46,19.18,3.74l-.3.19c.49-2,1-4.19,1.55-6.38,1.23-5,2.43-9.92,3.56-14.55l.18.3L195,276.26h0a19.72,19.72,0,0,0-8.65-1.52,19.17,19.17,0,0,0-6.53,1.54,21.89,21.89,0,0,0-3.75,2.08l-.91.66a1.94,1.94,0,0,1-.32.21s.09-.1.28-.26.48-.41.88-.71a20.22,20.22,0,0,1,3.73-2.19,18.94,18.94,0,0,1,6.6-1.65,19.8,19.8,0,0,1,8.82,1.46h0L215,281.44l.24.06-.06.24c-1.13,4.63-2.32,9.51-3.54,14.56-.54,2.18-1.06,4.34-1.56,6.37l-.06.24-.24,0c-6.86-1.29-13.32-2.57-19.17-3.79-2.92-.61-5.69-1.22-8.27-1.82s-5-1.17-7.12-1.9h0c-4.68-.89-8.33-2.43-10.26-4.3a4.83,4.83,0,0,1-1.5-2.61A3.05,3.05,0,0,1,163.44,287.4Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 189.32px 288.645px;"
                                            id="el4mlx67uz2qj" class="animable"></path>
                                        <path
                                            d="M193.91,275.71c-.06.07-.81-.62-2.15-1.51a20.55,20.55,0,0,0-11.88-3.47c-1.62,0-2.61.22-2.63.13a8.25,8.25,0,0,1,2.61-.49A18.17,18.17,0,0,1,192,273.9,8,8,0,0,1,193.91,275.71Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 185.58px 273.019px;"
                                            id="elox5b10dlder" class="animable"></path>
                                        <path
                                            d="M196.84,239.91a8.17,8.17,0,0,1,0,1.34c0,.87-.09,2.11-.21,3.65-.25,3.07-.7,7.3-1.51,11.94a81.5,81.5,0,0,1-2.77,11.72c-.24.73-.5,1.39-.71,2L191,272a6.25,6.25,0,0,1-.69,1.16,6.78,6.78,0,0,1,.5-1.24c.17-.43.35-.92.56-1.46s.41-1.24.63-2a104.6,104.6,0,0,0,2.61-11.7c.8-4.62,1.31-8.83,1.65-11.89.15-1.45.28-2.66.38-3.62A5.68,5.68,0,0,1,196.84,239.91Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 193.589px 256.535px;"
                                            id="elu2l6pbquthq" class="animable"></path>
                                        <path
                                            d="M222.32,228.58s-.1-.27-.34-.74a4.44,4.44,0,0,0-1.51-1.64,3.74,3.74,0,0,0-3.25-.48,4.18,4.18,0,0,0-2.74,3.11l-.14.71-.31-.66a69.45,69.45,0,0,1-3.05-7.72,40.59,40.59,0,0,1-2.26-13.64c0-.89.12-1.69.17-2.4s.21-1.3.32-1.78a9.33,9.33,0,0,1,.44-1.48,35.5,35.5,0,0,0-.57,5.66A43.63,43.63,0,0,0,211.47,221a77.25,77.25,0,0,0,3,7.68l-.45.06a4.59,4.59,0,0,1,3.09-3.39,4,4,0,0,1,3.53.61,4.34,4.34,0,0,1,1.48,1.81,2.6,2.6,0,0,1,.19.6C222.33,228.5,222.34,228.58,222.32,228.58Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 215.525px 215.7px;"
                                            id="el8hsk97vhwnp" class="animable"></path>
                                        <path
                                            d="M246.7,230.83a7.88,7.88,0,0,1-.23-1.19,12.63,12.63,0,0,1-.21-3.35,7,7,0,0,1,2.41-4.43,4.61,4.61,0,0,1,2.91-1.05,4,4,0,0,1,3.06,1.37l-.44.26-.95-2.39c-1.87-4.71-3.53-9-4.71-12.09l-1.37-3.69a6.92,6.92,0,0,1-.43-1.37,7.84,7.84,0,0,1,.62,1.3c.4,1,.91,2.17,1.53,3.63,1.27,3.07,3,7.32,4.85,12l.94,2.4.61,1.54-1-1.29a3.46,3.46,0,0,0-2.67-1.2,4.15,4.15,0,0,0-2.62.91,6.81,6.81,0,0,0-2.35,4.11,14.19,14.19,0,0,0,.06,3.29A5.06,5.06,0,0,1,246.7,230.83Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 250.759px 216.865px;"
                                            id="eltluw1hg7bub" class="animable"></path>
                                        <path
                                            d="M265.25,233.31c.14,0,2.4,15.18,5.05,33.95s4.67,34,4.53,34-2.4-15.18-5.05-34S265.11,233.33,265.25,233.31Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 270.04px 267.285px;"
                                            id="eliqmoer78tzg" class="animable"></path>
                                        <g id="elf1f31zsmdy6">
                                            <g style="opacity: 0.3; transform-origin: 217.345px 226.97px;"
                                                class="animable" id="elzgja9qe40os">
                                                <path
                                                    d="M211.28,221.32a31.35,31.35,0,0,0,2.49,11.3c1.09-1.35,2.3-2.77,4-3.17,2.06-.49,4.15.78,5.64,2.34a10.23,10.23,0,0,0-1.8-4.32,5.07,5.07,0,0,0-4-2.07,3.5,3.5,0,0,0-3.33,2.72l-2.87-6.73"
                                                    id="el9gqytfttez" class="animable"
                                                    style="transform-origin: 217.345px 226.97px;"></path>
                                            </g>
                                        </g>
                                        <path
                                            d="M194.39,232.31c-.09,0-.06-1.05-.36-2.68a16.45,16.45,0,0,0-2.43-5.95,17.94,17.94,0,0,0-2.29-2.71,15.38,15.38,0,0,0-2.29-1.79c-1.41-.89-2.4-1.23-2.36-1.32a2.09,2.09,0,0,1,.71.18,4.23,4.23,0,0,1,.81.31,7.66,7.66,0,0,1,1,.52,14,14,0,0,1,2.43,1.74,16.6,16.6,0,0,1,2.39,2.78,14.91,14.91,0,0,1,2.36,6.18,10.09,10.09,0,0,1,.1,2C194.46,232.05,194.43,232.31,194.39,232.31Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 189.566px 225.085px;"
                                            id="elm428yuq2vlr" class="animable"></path>
                                        <path
                                            d="M252.44,161a21.43,21.43,0,0,0-21.86-19.15l-1.11,0c-11.95,1-17.77,11.71-16.43,23.62l3.28,41.9,1.39,1.7a22.4,22.4,0,0,0,26.6,6.27h0l-.92-13.48s11.46-2.08,11.3-13.58C254.62,182.7,253.54,171.28,252.44,161Z"
                                            style="fill: rgb(255, 190, 157); transform-origin: 233.771px 179.586px;"
                                            id="elnwyg6c8hnnc" class="animable"></path>
                                        <path d="M243.48,201.83a27.84,27.84,0,0,1-15.17-4s3.75,8.19,15.2,6.86Z"
                                            style="fill: rgb(235, 153, 110); transform-origin: 235.91px 201.333px;"
                                            id="elkbbyjfkqas" class="animable"></path>
                                        <path
                                            d="M248.8,170.46a1.66,1.66,0,0,1-1.54,1.7,1.58,1.58,0,0,1-1.73-1.44,1.65,1.65,0,0,1,1.54-1.7A1.57,1.57,0,0,1,248.8,170.46Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 247.165px 170.59px;"
                                            id="elto1sdotofcc" class="animable"></path>
                                        <path
                                            d="M249.53,164.21c-.13.2-1.43.34-3,1.18s-2.49,1.89-2.7,1.87,0-.29.39-.76a7.55,7.55,0,0,1,2.1-1.63,6.84,6.84,0,0,1,2.44-.81C249.35,164,249.6,164.11,249.53,164.21Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 246.644px 165.652px;"
                                            id="elewuyz4fcdta" class="animable"></path>
                                        <path
                                            d="M232.2,171.33a1.63,1.63,0,0,1-1.54,1.7,1.57,1.57,0,0,1-1.73-1.44,1.65,1.65,0,0,1,1.54-1.7A1.57,1.57,0,0,1,232.2,171.33Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 230.565px 171.46px;"
                                            id="el8xzbr6h09cd" class="animable"></path>
                                        <path
                                            d="M232,166.62c-.23,0-1.3-.67-3-1.09s-3.11-.33-3.26-.47.18-.2.79-.25a8.49,8.49,0,0,1,2.65.25,7.68,7.68,0,0,1,2.36,1C231.94,166.38,232.06,166.6,232,166.62Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 228.859px 165.706px;"
                                            id="eln726tjm1a8o" class="animable"></path>
                                        <path
                                            d="M238.88,180.35a12.32,12.32,0,0,1,2.86-.59c.45,0,.87-.16.94-.47a2.26,2.26,0,0,0-.33-1.32l-1.43-3.41c-2-4.84-3.42-8.83-3.22-8.9s2,3.78,3.93,8.62c.48,1.2.94,2.34,1.37,3.43a2.63,2.63,0,0,1,.28,1.76,1.14,1.14,0,0,1-.73.68,2.88,2.88,0,0,1-.76.13A11.35,11.35,0,0,1,238.88,180.35Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 240.504px 173.036px;"
                                            id="el8lisrmew5de" class="animable"></path>
                                        <path
                                            d="M232,159.8c-.2.47-1.95.16-4,.3s-3.79.64-4,.19c-.12-.21.2-.65.89-1.08a7,7,0,0,1,6.15-.38C231.7,159.18,232.06,159.57,232,159.8Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 227.991px 159.384px;"
                                            id="elj2kc70yggj" class="animable"></path>
                                        <path
                                            d="M249.49,160.19c-.39.41-1.91,0-3.73,0s-3.37.31-3.73-.11c-.16-.2.08-.61.75-1a6.06,6.06,0,0,1,3-.69,6,6,0,0,1,3,.78C249.44,159.58,249.66,160,249.49,160.19Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 245.764px 159.38px;"
                                            id="elojt5e4lffxm" class="animable"></path>
                                        <path
                                            d="M255.79,150.78a2.19,2.19,0,0,0-2.3-1.77,4.56,4.56,0,0,0,1.58-.81,1.59,1.59,0,0,0,.55-1.6c-.3-.89-1.44-1.08-2.34-1.33a6,6,0,0,1-3-2c-1.09-1.38-1.51-3.18-2.46-4.67A7.63,7.63,0,0,0,236,137.3a7.95,7.95,0,0,0-12.79,1.95,9.27,9.27,0,0,0-12.7,10.15l7.16,4.39a3.87,3.87,0,0,1,4.72-3.36c2.16.63,3.54,3.13,5.78,3.3,1.75.13,3.24-1.22,4.93-1.67,2.05-.55,4.22.27,6.07,1.31s3.62,2.34,5.68,2.86a11.79,11.79,0,0,0,7.29-.87,7.39,7.39,0,0,0,2.7-1.67A3.34,3.34,0,0,0,255.79,150.78Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 233.102px 145.677px;"
                                            id="elmhlk0kj21g" class="animable"></path>
                                        <path
                                            d="M218.88,150.41l32.8-.18a14.9,14.9,0,0,0-5-5.44,25.6,25.6,0,0,0-15-4.93c-5.35,0-16.05,6.87-19.82,10.66-3,3-2.92,5.59-2.92,5.59-.38,4.26,2.13,9,3.2,13.17.54,2.14,1.67,8.62,1.67,8.62h0c1.8-.05,2.43-1.51,2.11-3.29l-.53-7a10.59,10.59,0,0,0,2.89-12.44C217.83,154.55,216.75,151.66,218.88,150.41Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 230.291px 158.88px;"
                                            id="elleuvilolc1" class="animable"></path>
                                        <path
                                            d="M214.92,167.15c-1.67-5.8-3.21-12-1.43-17.8l-1,0-.4.29a4.59,4.59,0,0,0-5.16,7.07,4,4,0,0,0-4,3.47A7.42,7.42,0,0,0,204,164a8.94,8.94,0,0,1,1.25,3.8,2.85,2.85,0,0,1-2.18,2.95,3.27,3.27,0,0,0,3.71,1.81,6.53,6.53,0,0,1-2.25,2.84c2.14,1.46,5.07,1,7.39-.17a6.3,6.3,0,0,0,3.3-3.06C215.86,170.56,215.38,168.79,214.92,167.15Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 209.23px 162.833px;"
                                            id="elhbtir3lm9bq" class="animable"></path>
                                        <path
                                            d="M214.38,173.92c-.2-.08-8-2.13-7.51,5.72s8.25,5.78,8.25,5.55S214.38,173.92,214.38,173.92Z"
                                            style="fill: rgb(255, 190, 157); transform-origin: 210.984px 179.613px;"
                                            id="eljdxenx4qum" class="animable"></path>
                                        <path
                                            d="M213.24,182.34s-.13.1-.36.22a1.35,1.35,0,0,1-1,.08c-.85-.26-1.62-1.53-1.74-2.95a4.56,4.56,0,0,1,.27-2,1.6,1.6,0,0,1,1-1.11.71.71,0,0,1,.83.33c.12.21.07.37.12.39s.16-.15.08-.47a1,1,0,0,0-.34-.47,1,1,0,0,0-.77-.16,1.94,1.94,0,0,0-1.36,1.3,4.86,4.86,0,0,0-.35,2.22c.15,1.58,1,3,2.2,3.28a1.48,1.48,0,0,0,1.23-.28C213.24,182.53,213.27,182.35,213.24,182.34Z"
                                            style="fill: rgb(235, 153, 110); transform-origin: 211.428px 179.607px;"
                                            id="elm67p242whql" class="animable"></path>
                                        <path
                                            d="M206.23,167.41s-.22-.3-.15-.92a2.93,2.93,0,0,1,1.47-2,9,9,0,0,1,3.6-.87,4.43,4.43,0,0,0,3.58-1.82,6.53,6.53,0,0,0,.62-4.13c-.19-1.32-.54-2.51-.71-3.54a5.81,5.81,0,0,1,.05-3.37,15.59,15.59,0,0,0,.37,3.28c.22,1,.61,2.17.85,3.56a6.87,6.87,0,0,1-.66,4.52,3.83,3.83,0,0,1-1.87,1.58,8.1,8.1,0,0,1-2.17.48,9.37,9.37,0,0,0-3.45.68,2.92,2.92,0,0,0-1.45,1.72A6.33,6.33,0,0,0,206.23,167.41Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 211.052px 159.085px;"
                                            id="elnwbwpuk8ybh" class="animable"></path>
                                        <path
                                            d="M204.33,164s-.17-.22-.24-.71a3.35,3.35,0,0,1,.39-2,3.56,3.56,0,0,1,.93-1.12,4,4,0,0,1,1.51-.7,4.43,4.43,0,0,0,1.49-.62,1.78,1.78,0,0,0,.59-1.44c0-.59-.07-1.22-.05-1.85a9.25,9.25,0,0,1,.2-1.79,8.28,8.28,0,0,1,1.13-2.8,2.16,2.16,0,0,1,1.73-1.11c.52,0,.74.24.72.26s-.26-.09-.7,0a2,2,0,0,0-1.39,1.1,9.12,9.12,0,0,0-.94,2.68,10.09,10.09,0,0,0-.15,1.68c0,.58.09,1.2.06,1.88a2.33,2.33,0,0,1-.83,1.88,4.5,4.5,0,0,1-1.71.69,3.25,3.25,0,0,0-2.22,1.5A4.4,4.4,0,0,0,204.33,164Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 208.399px 156.93px;"
                                            id="el5l1x3ms0k2e" class="animable"></path>
                                        <path
                                            d="M250.29,143.27c.05,0-.59.43-1.62-.05a4.72,4.72,0,0,1-1.49-1.27,6.26,6.26,0,0,0-1.82-1.61,5.43,5.43,0,0,0-5.92.39c-1,.7-1.83,1.69-3,2.51a5.24,5.24,0,0,1-2,.91,4.24,4.24,0,0,1-2.23-.21c-1.42-.51-2.54-1.38-3.76-1.82a10.09,10.09,0,0,0-3.69-.67,9.77,9.77,0,0,0-6,2.05,10.74,10.74,0,0,0-2.8,3.29c-.49.91-.67,1.47-.72,1.45s0-.15.08-.42a8.69,8.69,0,0,1,.42-1.14,10.22,10.22,0,0,1,2.75-3.52,10.06,10.06,0,0,1,6.21-2.27,10.2,10.2,0,0,1,3.91.67c1.32.48,2.46,1.35,3.75,1.8a3.63,3.63,0,0,0,1.92.19,4.62,4.62,0,0,0,1.73-.8c1.05-.75,1.93-1.74,3-2.48a5.66,5.66,0,0,1,3.43-1.13,6.06,6.06,0,0,1,3,.82,6.81,6.81,0,0,1,1.87,1.77,4.51,4.51,0,0,0,1.33,1.28A2.25,2.25,0,0,0,250.29,143.27Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 232.756px 143.69px;"
                                            id="elm1k2zarddg" class="animable"></path>
                                        <path
                                            d="M234.52,182.41c.25,0,.53,1.62,2.17,2.57s3.39.47,3.45.7-.35.4-1.1.54a4.23,4.23,0,0,1-2.86-.48,3.76,3.76,0,0,1-1.72-2.18C234.28,182.87,234.4,182.42,234.52,182.41Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 237.257px 184.351px;"
                                            id="elmpkj33i3zp" class="animable"></path>
                                        <path
                                            d="M338,338.66A15.3,15.3,0,0,0,327,335l-6.76,21.47c4.95.22,9.89,2.77,14.67,1.46a10.47,10.47,0,0,0,7.29-8.6A12.43,12.43,0,0,0,338,338.66Z"
                                            style="fill: #228B22; transform-origin: 331.254px 346.634px;"
                                            id="elhm2ypg6l4nj" class="animable"></path>
                                        <path
                                            d="M327.08,334.51c0-.17.73-.31,2-.3a16.7,16.7,0,0,1,5.53,1.05,15,15,0,0,1,6.74,5.23,13.93,13.93,0,0,1,2.25,4.66,12.26,12.26,0,0,1,.16,5.63,11.45,11.45,0,0,1-2.45,5.13,10.83,10.83,0,0,1-4.36,3,15.67,15.67,0,0,1-8.5.55,25.67,25.67,0,0,1-5.3-1.65c-1.19-.51-1.82-.89-1.76-1.06s.78-.12,2,.09,3.07.6,5.27.8a15.25,15.25,0,0,0,7.35-1,8.75,8.75,0,0,0,3.3-2.44,9.22,9.22,0,0,0,1.86-4,11,11,0,0,0-1.83-8.4,14.49,14.49,0,0,0-5.5-4.92,24.85,24.85,0,0,0-4.93-1.72C327.76,334.9,327.06,334.69,327.08,334.51Z"
                                            style="fill: rgb(245, 245, 245); transform-origin: 332.699px 347.008px;"
                                            id="elprx6nj27kwj" class="animable"></path>
                                        <path
                                            d="M264.45,415.06l-14.7,41.19L300.9,474.8c1.48-5-21.43-24.4-21.43-24.4l10.5-26Z"
                                            style="fill: #228B22; transform-origin: 275.359px 444.93px;" id="elguynk9iag4"
                                            class="animable"></path>
                                        <g id="eltzawnxge01">
                                            <g style="opacity: 0.6; transform-origin: 264.276px 444.51px;"
                                                class="animable" id="elssok9dcjja">
                                                <path
                                                    d="M264.46,442.45a2.22,2.22,0,0,0-2.31,1.86,2.13,2.13,0,0,0,1.82,2.3,2.34,2.34,0,0,0,2.44-2c0-1.09-1.08-2.34-2.16-2.19"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 264.276px 444.51px;"
                                                    id="elzv0767w5fw" class="animable"></path>
                                            </g>
                                        </g>
                                        <path d="M249.75,456.25l1.49-4.15,48.58,19.38s1.92,1.81,1.08,3.32Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 275.431px 463.45px;"
                                            id="elqfov0z414g7" class="animable"></path>
                                        <path
                                            d="M280.4,450.44c-.1.25-1.39-.09-2.91.27s-2.56,1.17-2.75,1,.7-1.49,2.55-1.89S280.53,450.23,280.4,450.44Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 277.562px 450.722px;"
                                            id="eldrxhqsrr8kr" class="animable"></path>
                                        <path
                                            d="M285,454.61c0,.26-1.27.29-2.5,1s-1.88,1.78-2.13,1.68.11-1.57,1.66-2.48S285,454.37,285,454.61Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 282.649px 455.785px;"
                                            id="elh7d39lmscf" class="animable"></path>
                                        <path
                                            d="M285.67,462.13c-.24,0-.14-1.4,1-2.54s2.5-1.25,2.53-1-.95.71-1.87,1.66S285.93,462.2,285.67,462.13Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 287.382px 460.306px;"
                                            id="el1upvqqdt923" class="animable"></path>
                                        <path
                                            d="M282.13,444.25c-.19.19-1.21-.57-2.65-1s-2.71-.37-2.76-.63,1.32-.77,3-.25S282.33,444.1,282.13,444.25Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 279.438px 443.213px;"
                                            id="elxqik7lnzhsl" class="animable"></path>
                                        <path
                                            d="M283.11,437.74a5.18,5.18,0,0,1-2.55-.94,11.73,11.73,0,0,1-2.38-1.8,12.63,12.63,0,0,1-1.19-1.31,3.43,3.43,0,0,1-.56-.88,1.15,1.15,0,0,1,.37-1.37,1.47,1.47,0,0,1,1.3-.18,3.67,3.67,0,0,1,.91.48,10,10,0,0,1,1.4,1.13,9.56,9.56,0,0,1,1.8,2.4,4.55,4.55,0,0,1,.75,2.63c-.14,0-.44-.95-1.31-2.3a11.18,11.18,0,0,0-1.82-2.11,10.44,10.44,0,0,0-1.31-1c-.49-.34-.95-.51-1.17-.32s-.11.11-.05.31a2.62,2.62,0,0,0,.41.65,12.21,12.21,0,0,0,1.07,1.26,14.66,14.66,0,0,0,2.13,1.85C282.23,437.19,283.17,437.61,283.11,437.74Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 279.726px 434.542px;"
                                            id="el1ozfq8wtlio" class="animable"></path>
                                        <path
                                            d="M282.66,438a4.4,4.4,0,0,1,.22-2.72,9,9,0,0,1,1.37-2.68,9.84,9.84,0,0,1,1.21-1.32,2.29,2.29,0,0,1,2.11-.7,1.29,1.29,0,0,1,.81,1.11,3.72,3.72,0,0,1-.08,1,6.2,6.2,0,0,1-2.68,4c-1.48,1-2.63.88-2.62.79s1-.32,2.24-1.32a6.32,6.32,0,0,0,1.68-2.11,5.62,5.62,0,0,0,.49-1.5c.12-.57.07-1.09-.15-1.1a1.53,1.53,0,0,0-1.2.51,8.89,8.89,0,0,0-1.14,1.16,9.51,9.51,0,0,0-1.42,2.37C282.88,437,282.81,438,282.66,438Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 285.463px 434.27px;"
                                            id="elz5mg0ni83i7" class="animable"></path>
                                        <path
                                            d="M214.9,305.06c-7.76.18-15.12,1.27-20.47,6.9-7.09,7.47-15.85,18.1-16.35,25.47-.74,11,5.91,14.3,10.76,17a13.62,13.62,0,0,0,7,1.63l89.68-.68,2.81-15.19-58-14.3,2.41-21.83Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 233.177px 330.065px;"
                                            id="el9xqw2hgshm" class="animable"></path>
                                        <path
                                            d="M232.79,304.05l28.21-1.3s48.74,2.71,59.13,12.24,9.1,20.36,5.63,30.75-34,76.88-34,76.88,2.48,4.23,1.09,8.45a11.15,11.15,0,0,1-8,7.58l-27.12-10s-3.68-1.3-1.08-4.77,4.33-4.11,4.33-4.11v-6.93s9.53-17.33,10.39-19.71,10-37.64,10-37.64l6.07-10.43s-14.67-6.9-27.39-11.9l-29.7-7.32Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 279.312px 370.7px;"
                                            id="elhdnlai97jjm" class="animable"></path>
                                        <path
                                            d="M278.55,427.43a26.64,26.64,0,0,1-2.38-1.56,32.21,32.21,0,0,0-12.66-4.81,27.93,27.93,0,0,1-2.82-.42,10.82,10.82,0,0,1,2.86.05,27,27,0,0,1,12.83,4.88A10.88,10.88,0,0,1,278.55,427.43Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 269.62px 423.999px;"
                                            id="elby1mahxr3cl" class="animable"></path>
                                        <path
                                            d="M292.1,422.67a9.05,9.05,0,0,1-1.57-1.66c-.92-1.07-2.14-2.59-3.41-4.33s-2.37-3.35-3.12-4.54a10.23,10.23,0,0,1-1.12-2,10.5,10.5,0,0,1,1.42,1.79l3.24,4.44c1.21,1.64,2.32,3.12,3.28,4.41A10.49,10.49,0,0,1,292.1,422.67Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 287.49px 416.405px;"
                                            id="elkir80cmimyr" class="animable"></path>
                                        <path
                                            d="M302,335.58c0,.08-1,.3-2.57.82a27,27,0,0,0-10.86,6.78,26.9,26.9,0,0,1-1.87,1.95,9.32,9.32,0,0,1,1.6-2.2,22.83,22.83,0,0,1,5-4.23,22.56,22.56,0,0,1,6-2.65A9.09,9.09,0,0,1,302,335.58Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 294.35px 340.355px;"
                                            id="elw6ba5z5c8yg" class="animable"></path>
                                        <path
                                            d="M274.3,382.66a2.38,2.38,0,0,1,.11-.59l.42-1.65,1.62-6.05L282,354.46c1.13-3.89,2.09-7.59,3.18-10.95a22.87,22.87,0,0,1,5.11-7.79,29.28,29.28,0,0,1,4.84-4c.63-.4,1.12-.7,1.47-.88a3.18,3.18,0,0,1,.53-.27s-.68.46-1.88,1.31a32.48,32.48,0,0,0-4.7,4.09,22.87,22.87,0,0,0-4.92,7.7c-1,3.31-2,7.06-3.13,10.93l-5.69,19.86c-.74,2.49-1.35,4.52-1.79,6-.21.66-.37,1.2-.51,1.62A2.29,2.29,0,0,1,274.3,382.66Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 285.715px 356.615px;"
                                            id="elj7gtxozveu" class="animable"></path>
                                        <path
                                            d="M249.35,331.87c-.15,0-.74-5.26-1.33-11.78s-1-11.82-.8-11.83.73,5.26,1.32,11.78S249.49,331.86,249.35,331.87Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 248.274px 320.065px;"
                                            id="el7f2eg4vglav" class="animable"></path>
                                        <path
                                            d="M202.39,346c-.08,0-.51-.81-1.4-2.06a20.7,20.7,0,0,0-4.09-4.31,21,21,0,0,0-5.17-2.93c-1.43-.56-2.36-.77-2.34-.86a8,8,0,0,1,2.46.51,17.75,17.75,0,0,1,9.45,7.38A7.7,7.7,0,0,1,202.39,346Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 195.89px 340.92px;"
                                            id="el68o8bnik7ur" class="animable"></path>
                                        <path
                                            d="M219.67,326.8c0,.08-1.24-.68-3.31-1.63A31.24,31.24,0,0,0,199,322.69c-2.25.32-3.62.72-3.64.63a3.45,3.45,0,0,1,.93-.36,21.64,21.64,0,0,1,2.65-.64,28.52,28.52,0,0,1,17.56,2.52,21.18,21.18,0,0,1,2.36,1.36A3.63,3.63,0,0,1,219.67,326.8Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 207.515px 324.348px;"
                                            id="elvrgbta8gza" class="animable"></path>
                                        <path
                                            d="M287.23,340.16a3.07,3.07,0,0,1-.71-.12l-2-.43L277.22,338c-6.17-1.38-14.71-3.24-24.18-5.11s-18.07-3.42-24.3-4.49l-7.39-1.27-2-.35a2.86,2.86,0,0,1-.69-.17,6.3,6.3,0,0,1,.71.06l2,.26c1.75.24,4.28.62,7.41,1.11,6.25,1,14.87,2.46,24.35,4.34s18,3.79,24.16,5.26c3.07.74,5.56,1.36,7.27,1.81l2,.52A3.86,3.86,0,0,1,287.23,340.16Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 252.945px 333.385px;"
                                            id="elzfjjqmuigck" class="animable"></path>
                                        <path
                                            d="M230.38,328.45c-.1,0-.31-1.18-1.24-2.86a12.33,12.33,0,0,0-2-2.65,32.53,32.53,0,0,0-3.14-2.72,47.51,47.51,0,0,0-6.43-4,21.42,21.42,0,0,1-2.74-1.56,16.89,16.89,0,0,1,2.91,1.23,37.58,37.58,0,0,1,6.58,3.91,29.45,29.45,0,0,1,3.16,2.79,11.59,11.59,0,0,1,2,2.81,9.55,9.55,0,0,1,.81,2.2A2.32,2.32,0,0,1,230.38,328.45Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 222.609px 321.555px;"
                                            id="eld0ig3cmrpat" class="animable"></path>
                                        <path
                                            d="M330.27,342c.11.12-1.39,1.63-2.56,3.94s-1.55,4.39-1.7,4.36a9.08,9.08,0,0,1,1.24-4.6A9.19,9.19,0,0,1,330.27,342Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 328.143px 346.15px;"
                                            id="el0k8epd16poln" class="animable"></path>
                                        <g id="el2tvqkyi8ish">
                                            <g style="opacity: 0.3; transform-origin: 269.673px 262.51px;"
                                                class="animable" id="el8s56xf74de">
                                                <path d="M266.08,239.54l6.42,45.22.32.72A97,97,0,0,0,266.08,239.54Z"
                                                    id="el5qpde8qbnvi" class="animable"
                                                    style="transform-origin: 269.673px 262.51px;"></path>
                                            </g>
                                        </g>
                                        <path
                                            d="M300.65,265.52,279.78,302l-51.43,1.12-.13,2.33,49.8-.37,1.58-.06,52.58.11,10.63-18.33,13.58-19.46a1.92,1.92,0,0,0-1.59-3l-52.49.2A1.92,1.92,0,0,0,300.65,265.52Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 292.471px 284.895px;"
                                            id="elrgo0d1d1p5b" class="animable"></path>
                                        <path
                                            d="M342.81,286.83s2.7,2.48,2.28,4.58-.29,3.67-2.28,3.81a3,3,0,0,1-2.7,3.13s.61,3.3-3.23,3.87c0,0-1.18,3.53-3.6,2.67a20.93,20.93,0,0,1-4-1.85l-.71-1.28s-3.57-1.34-2.69-3.35c.54-1.22,2.38-1.54,2.38-1.54a3.43,3.43,0,0,1,.23-3.12c.85-1.15,3.63-.2,3.63-.2a3.94,3.94,0,0,1,.88-2.72c1-1.13,5.38,1.92,5.38,1.92l2.41-2.88Z"
                                            style="fill: rgb(255, 190, 157); transform-origin: 335.437px 295.927px;"
                                            id="elf5n2vnobugh" class="animable"></path>
                                        <path
                                            d="M336.88,302.22a25,25,0,0,1-4.44-2.45,24.33,24.33,0,0,1-4.16-2.9,25.51,25.51,0,0,1,4.44,2.46A25.16,25.16,0,0,1,336.88,302.22Z"
                                            style="fill: rgb(235, 153, 110); transform-origin: 332.58px 299.545px;"
                                            id="elbz3ly6sdxjv" class="animable"></path>
                                        <path
                                            d="M340.11,298.35a20.83,20.83,0,0,1-4.12-2.18,21.15,21.15,0,0,1-3.85-2.62,20.2,20.2,0,0,1,4.12,2.18A21.15,21.15,0,0,1,340.11,298.35Z"
                                            style="fill: rgb(235, 153, 110); transform-origin: 336.125px 295.95px;"
                                            id="elf0oklhgv1m4" class="animable"></path>
                                        <path
                                            d="M335.71,291.11c.08-.15,1.73.72,3.65,1.94a32.68,32.68,0,0,1,3.43,2.28c-.07.17-1.79-.61-3.71-1.84A19.59,19.59,0,0,1,335.71,291.11Z"
                                            style="fill: rgb(235, 153, 110); transform-origin: 339.25px 293.223px;"
                                            id="el5btxmj6f0ks" class="animable"></path>
                                        <path
                                            d="M356.39,265.74a.79.79,0,0,1-.25,0l-.74,0-2.84,0-10.44.08-34.45.08h-2.51a2.07,2.07,0,0,0-1.91.9q-1.2,2.14-2.34,4.22l-4.44,8-7.53,13.53c-2.14,3.82-3.89,6.92-5.12,9.11-.59,1-1.07,1.86-1.41,2.46l-.38.63-.14.21s0-.09.09-.24l.34-.66,1.33-2.5,5-9.19,7.44-13.59c1.4-2.55,2.88-5.23,4.4-8l2.35-4.25a2.6,2.6,0,0,1,2.35-1.14h2.51l34.45.07,10.44.09,2.84.05.74,0A.79.79,0,0,1,356.39,265.74Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 319.14px 285.171px;"
                                            id="elf9xeo8d0qfh" class="animable"></path>
                                        <path d="M319.39,284.09a2.22,2.22,0,1,0,3.31-.39A2.37,2.37,0,0,0,319.39,284.09Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 321.217px 285.385px;"
                                            id="elsht1ycueafr" class="animable"></path>
                                        <g id="el0luc96iunxy">
                                            <g style="opacity: 0.3; transform-origin: 181.46px 270.978px;"
                                                class="animable" id="elx8caclvfem9">
                                                <path
                                                    d="M173.39,270c-.44.18-.95.48-.95,1a.86.86,0,0,0,.73.78,9.29,9.29,0,0,0,2.14-.57c5.41-1.19,9.86-.05,15,2l.17-.17C188.44,268.61,179.21,267.63,173.39,270Z"
                                                    id="elu2imkfo4mes" class="animable"
                                                    style="transform-origin: 181.46px 270.978px;"></path>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="freepik--Floor--inject-3" class="animable"
                                        style="transform-origin: 250px 473px;">
                                        <path
                                            d="M452,473c0,.14-90.45.26-202,.26S48,473.1,48,473s90.43-.26,202-.26S452,472.81,452,473Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 250px 473px;"
                                            id="ellskwaw3n3lc" class="animable"></path>
                                    </g>
                                    <g id="freepik--Ribbon--inject-3" class="animable animator-active"
                                        style="transform-origin: 233.87px 114.455px;">
                                        <path
                                            d="M145.42,154.21c.17.17,33.38-11.24,33.38-11.24L166,113.67,136.47,125l16.26,9.34Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 157.635px 133.941px;"
                                            id="eli53tmhx46sl" class="animable"></path>
                                        <path
                                            d="M161,122.49V82.6s45.81-8.38,78.82-7.88,67,5.91,67,5.91v38.3S203.36,109.69,161,122.49Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 233.91px 98.5942px;"
                                            id="el6rthmql14p2" class="animable"></path>
                                        <path d="M160.76,122.53l18,20.61V118.93S163.71,120.73,160.76,122.53Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 169.76px 131.035px;"
                                            id="ell0g1cgmo92g" class="animable"></path>
                                        <path
                                            d="M161,82.59c.15,0,.21,9,.15,20s-.24,20-.38,20-.21-8.94-.15-20S160.85,82.59,161,82.59Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 160.886px 102.59px;"
                                            id="eli2t6jd2n3b" class="animable"></path>
                                        <path
                                            d="M322.32,151.15c-.17.17-33.38-11.24-33.38-11.24l12.77-29.31,29.56,11.31L315,131.25Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 310.105px 130.876px;"
                                            id="eln58xbjqyhjm" class="animable"></path>
                                        <path d="M307,119.47l-18,20.61V117.62A132.76,132.76,0,0,1,307,119.47Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 298px 128.85px;"
                                            id="el2thoznsjckr" class="animable"></path>
                                        <path
                                            d="M306.8,80.63c.14,0,.3,8.69.35,19.42s0,19.42-.17,19.42-.3-8.69-.35-19.42S306.65,80.63,306.8,80.63Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 306.891px 100.05px;"
                                            id="elcqzr3tpylyg" class="animable"></path>
                                        <path
                                            d="M186.83,100.09a5.86,5.86,0,0,1,9.57-5L195,96.77a3.46,3.46,0,0,0-2.82-.87,3.41,3.41,0,0,0,.94,6.76,3.42,3.42,0,0,0,2.48-1.62l1.76,1.23a5.85,5.85,0,0,1-10.56-2.18Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 192.08px 99.278px;"
                                            id="elwxhbs37dx0r" class="animable"></path>
                                        <path
                                            d="M197.74,98.59a5.84,5.84,0,1,1,6.36,4.88A5.52,5.52,0,0,1,197.74,98.59Zm9.11-.94a3.33,3.33,0,1,0-3,3.73A3.25,3.25,0,0,0,206.85,97.65Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 203.506px 97.6796px;"
                                            id="elfkopy13e5vv" class="animable"></path>
                                        <path
                                            d="M221.31,101.92l-.43-6.38L218.09,101l-1.1.07-3.45-4.92.41,6.24-2.31.15L211,91.91l2-.13,4.4,6.35,3.49-6.85,2-.13.72,10.62Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 217.305px 96.845px;"
                                            id="el8n0ykxl1dmk" class="animable"></path>
                                        <path
                                            d="M235.08,94.64c.06,2.38-1.68,3.9-4.52,4l-2.15.06.09,2.94-2.47.07L225.73,91l4.61-.13C233.19,90.83,235,92.26,235.08,94.64Zm-2.5.07c0-1.17-.81-1.83-2.32-1.79l-2,.06.11,3.7,2-.06C231.87,96.58,232.61,95.87,232.58,94.71Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 230.406px 96.2896px;"
                                            id="el3rc3a4nojgx" class="animable"></path>
                                        <path d="M237,90.77h2.46v8.64h5.34v2H237Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 240.9px 96.09px;"
                                            id="elskej158c2" class="animable"></path>
                                        <path
                                            d="M254.35,99.72l0,2-8.25-.24.31-10.65,8,.24-.06,2-5.6-.17-.06,2.32,4.94.14-.06,1.92-4.94-.15-.07,2.47Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 250.255px 96.275px;"
                                            id="elmjgrtxw9ko" class="animable"></path>
                                        <path d="M258.91,93.3l-3.4-.2.12-2,9.26.56-.12,2-3.4-.21-.52,8.63-2.46-.15Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 260.2px 96.59px;"
                                            id="elv9dp548j0lc" class="animable"></path>
                                        <path
                                            d="M273.86,101.18l-.18,2-8.22-.76,1-10.6,8,.74-.18,2L268.7,94l-.21,2.31,4.92.45-.17,1.91-4.93-.45-.22,2.45Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 269.96px 97.5px;"
                                            id="elu9qs1i5dpcj" class="animable"></path>
                                        <path
                                            d="M276.94,92.79l4.79.64c3.45.46,5.54,2.85,5.12,6s-3.08,5-6.53,4.5l-4.79-.64Zm3.53,9.17a3.3,3.3,0,1,0,.87-6.54l-2.23-.3-.87,6.54Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 281.217px 98.4006px;"
                                            id="elwoif474u4i" class="animable"></path>
                                    </g>
                                    <g id="freepik--Confetti--inject-3" class="animable"
                                        style="transform-origin: 240.155px 109.7px;">
                                        <polygon points="327.29 84.26 329.91 87.33 337.29 84.26 335.13 81.03 327.29 84.26"
                                            style="fill: rgb(69, 90, 100); transform-origin: 332.29px 84.18px;"
                                            id="eld86uqj18o98" class="animable"></polygon>
                                        <path d="M323.91,69.65a3.84,3.84,0,1,1-3.84-3.84A3.85,3.85,0,0,1,323.91,69.65Z"
                                            style="fill: #228B22; transform-origin: 320.07px 69.65px;" id="elkpmo4xrs83"
                                            class="animable"></path>
                                        <path d="M237.89,126.93A1.92,1.92,0,1,1,236,125,1.92,1.92,0,0,1,237.89,126.93Z"
                                            style="fill: #228B22; transform-origin: 235.97px 126.92px;" id="el6xng80hofx3"
                                            class="animable"></path>
                                        <path d="M148.44,98.07A1.46,1.46,0,1,1,147,96.61,1.46,1.46,0,0,1,148.44,98.07Z"
                                            style="fill: #228B22; transform-origin: 146.98px 98.0699px;"
                                            id="el5fwze7fu4up" class="animable"></path>
                                        <polygon points="143.02 82 147.32 82.26 149.36 73.8 145.34 73.97 143.02 82"
                                            style="fill: rgb(69, 90, 100); transform-origin: 146.19px 78.03px;"
                                            id="ely6p5bqdqoeb" class="animable"></polygon>
                                        <polygon
                                            points="277.42 149.53 278.87 153.59 287.45 152.15 285.72 148.52 277.42 149.53"
                                            style="fill: #228B22; transform-origin: 282.435px 151.055px;"
                                            id="el8x658x6xgdl" class="animable"></polygon>
                                        <polygon points="190.64 126.1 187.99 129.5 193.8 135.97 195.94 132.56 190.64 126.1"
                                            style="fill: rgb(69, 90, 100); transform-origin: 191.965px 131.035px;"
                                            id="el0ysp0sug4uz" class="animable"></polygon>
                                    </g>
                                    <g id="freepik--Stars--inject-3" class="animable"
                                        style="transform-origin: 232.99px 55.425px;">
                                        <polygon
                                            points="180.37 46.23 190.52 56.58 204.81 51.18 205.38 54.73 199.19 67.4 204.9 76.86 204.42 79.69 190.59 77.36 182.41 86.33 180.49 84.88 178.8 73.47 165.9 66.75 165.33 64.14 178.32 60.59 180.37 46.23"
                                            style="fill: #228B22; transform-origin: 185.355px 66.28px;" id="elrldk8tn6ak"
                                            class="animable"></polygon>
                                        <g id="el8lkbhylq915">
                                            <g style="opacity: 0.3; transform-origin: 185.355px 66.28px;" class="animable"
                                                id="elk52uxwqsfg">
                                                <polygon
                                                    points="180.37 46.23 190.52 56.58 204.81 51.18 205.38 54.73 199.19 67.4 204.9 76.86 204.42 79.69 190.59 77.36 182.41 86.33 180.49 84.88 178.8 73.47 165.9 66.75 165.33 64.14 178.32 60.59 180.37 46.23"
                                                    id="eloo8h85nldu" class="animable"
                                                    style="transform-origin: 185.355px 66.28px;"></polygon>
                                            </g>
                                        </g>
                                        <polygon
                                            points="180.37 43.32 190.52 53.68 204.81 51.18 198.1 64.04 204.9 76.86 190.59 74.46 180.49 84.88 178.36 70.53 165.33 64.14 178.32 57.68 180.37 43.32"
                                            style="fill: #228B22; transform-origin: 185.115px 64.1px;" id="elqb2je45s4nq"
                                            class="animable"></polygon>
                                        <polygon
                                            points="285.62 46.23 275.46 56.58 261.17 51.18 260.6 54.73 266.79 67.4 261.08 76.86 261.56 79.69 275.39 77.36 283.57 86.33 285.49 84.88 287.18 73.47 300.08 66.75 300.65 64.14 287.66 60.59 285.62 46.23"
                                            style="fill: #228B22; transform-origin: 280.625px 66.28px;" id="elxwavxh6jm1"
                                            class="animable"></polygon>
                                        <g id="elvowv8ldid9">
                                            <g style="opacity: 0.3; transform-origin: 280.625px 66.28px;" class="animable"
                                                id="elyg0027zhovl">
                                                <polygon
                                                    points="285.62 46.23 275.46 56.58 261.17 51.18 260.6 54.73 266.79 67.4 261.08 76.86 261.56 79.69 275.39 77.36 283.57 86.33 285.49 84.88 287.18 73.47 300.08 66.75 300.65 64.14 287.66 60.59 285.62 46.23"
                                                    id="elkjk9cat2o3" class="animable"
                                                    style="transform-origin: 280.625px 66.28px;"></polygon>
                                            </g>
                                        </g>
                                        <polygon
                                            points="285.62 43.32 275.46 53.68 261.17 51.18 267.88 64.04 261.08 76.86 275.39 74.46 285.49 84.88 287.62 70.53 300.65 64.14 287.66 57.68 285.62 43.32"
                                            style="fill: #228B22; transform-origin: 280.865px 64.1px;" id="elz2ntryhssh"
                                            class="animable"></polygon>
                                        <polygon
                                            points="232.66 28.06 241.11 44.57 260.6 43.42 259.94 47.96 247.56 61.07 250.91 74.78 249.26 78.05 233.27 69.94 219.88 77.78 218.09 75.27 220.37 60.7 207.19 47.59 207.49 44.2 224.69 44.81 232.66 28.06"
                                            style="fill: #228B22; transform-origin: 233.895px 53.055px;" id="elip42amryof"
                                            class="animable"></polygon>
                                        <g id="elw449ng9w00h">
                                            <g style="opacity: 0.3; transform-origin: 233.895px 53.055px;"
                                                class="animable" id="el7f9qjdzp0zs">
                                                <polygon
                                                    points="232.66 28.06 241.11 44.57 260.6 43.42 259.94 47.96 247.56 61.07 250.91 74.78 249.26 78.05 233.27 69.94 219.88 77.78 218.09 75.27 220.37 60.7 207.19 47.59 207.49 44.2 224.69 44.81 232.66 28.06"
                                                    id="elbzaw37ec2fo" class="animable"
                                                    style="transform-origin: 233.895px 53.055px;"></polygon>
                                            </g>
                                        </g>
                                        <polygon
                                            points="233.76 24.52 242.21 41.02 260.6 43.42 247.51 56.56 250.91 74.78 234.38 66.4 218.09 75.27 220.96 56.95 207.49 44.2 225.8 41.26 233.76 24.52"
                                            style="fill: #228B22; transform-origin: 234.045px 49.895px;"
                                            id="els66orbgmy0l" class="animable"></polygon>
                                    </g>
                                    <g id="freepik--speech-bubble--inject-3" class="animable"
                                        style="transform-origin: 304.65px 193.23px;">
                                        <path d="M267.43,172.63l14.12,1.56a33.1,33.1,0,1,1-5,10.77v0Z"
                                            style="fill: rgb(250, 250, 250); transform-origin: 304.558px 193.287px;"
                                            id="elks8nc2qov6" class="animable"></path>
                                        <path
                                            d="M267.43,172.63c.55.74,3.41,4.52,9.25,12.27h-.21a.12.12,0,0,1,.18-.05.13.13,0,0,1,.06.14,32.87,32.87,0,0,0,.22,17.07,28.83,28.83,0,0,0,1.83,4.86c.4.8.78,1.62,1.21,2.43l1.49,2.37a33.09,33.09,0,0,0,20.14,13.53,32.7,32.7,0,0,0,13.76.06,33.33,33.33,0,0,0,13.17-6.1,32.08,32.08,0,0,0,9.55-11.73,32.7,32.7,0,0,0,3.28-15.08,33.34,33.34,0,0,0-3.7-14.32,32.22,32.22,0,0,0-8.94-10.78,33.19,33.19,0,0,0-23.65-6.76,35.89,35.89,0,0,0-10.35,2.86,33,33,0,0,0-13.07,10.86.1.1,0,0,1-.11.05l-14.11-1.68,14.14,1.43-.12.06a32.83,32.83,0,0,1,13.12-11A35.47,35.47,0,0,1,305,160.14a33.55,33.55,0,0,1,24,6.78,32.53,32.53,0,0,1,9.09,10.93,33.59,33.59,0,0,1,3.77,14.54,33.21,33.21,0,0,1-3.32,15.32,32.62,32.62,0,0,1-9.71,11.91,33.87,33.87,0,0,1-13.38,6.18,33,33,0,0,1-14-.09A33.36,33.36,0,0,1,281.12,212l-1.5-2.4c-.43-.82-.81-1.66-1.22-2.47a29.36,29.36,0,0,1-1.82-4.92,32.93,32.93,0,0,1-.12-17.23l.24.09v0a.14.14,0,0,1-.18.05l0,0Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 304.65px 193.23px;"
                                            id="elqbwtkc6brk" class="animable"></path>
                                        <path
                                            d="M296.4,181.44a3.09,3.09,0,0,1,0,.46c0,.33,0,.75,0,1.28,0,1.16,0,2.77.06,4.81,0,4.15.07,10,.12,17l-.23-.23,23.53,0c.06-.06-.49.49-.26.25h0v-3.2c0-1.05,0-2.1,0-3.14v-6.09c0-3.94,0-7.67,0-11.1l.22.23-17-.12-4.81-.05-1.28,0-.46,0,.41,0,1.24,0,4.75-.06,17.13-.11h.23v.22c0,3.43,0,7.16,0,11.1V205h0c.24-.23-.31.33-.26.27l-23.53,0h-.23V205c0-7.06.08-12.95.11-17.13,0-2,0-3.62.06-4.76,0-.51,0-.92,0-1.24A1.77,1.77,0,0,1,296.4,181.44Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 308.07px 193.322px;"
                                            id="elq5yzf6g1b0m" class="animable"></path>
                                        <path
                                            d="M317.39,185.33c.34.27-2.82,4.83-7.07,10.19-.84,1.07-1.67,2.09-2.44,3l-.5.61-.56-.51c-3.68-3.31-6.17-5.85-5.95-6.11s3.11,1.84,6.92,5l-1.07.1c.73-1,1.53-2,2.38-3.06C313.34,189.19,317.06,185.07,317.39,185.33Z"
                                            style="fill: #228B22; transform-origin: 309.136px 192.224px;"
                                            id="el235tofg4z29" class="animable"></path>
                                    </g>
                                    <defs>
                                        <filter id="active" height="200%">
                                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                radius="2"></feMorphology>
                                            <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                            <feComposite in="PINK" in2="DILATED" operator="in"
                                                result="OUTLINE"></feComposite>
                                            <feMerge>
                                                <feMergeNode in="OUTLINE"></feMergeNode>
                                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                            </feMerge>
                                        </filter>
                                        <filter id="hover" height="200%">
                                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                radius="2"></feMorphology>
                                            <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK">
                                            </feFlood>
                                            <feComposite in="PINK" in2="DILATED" operator="in"
                                                result="OUTLINE"></feComposite>
                                            <feMerge>
                                                <feMergeNode in="OUTLINE"></feMergeNode>
                                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                            </feMerge>
                                            <feColorMatrix type="matrix"
                                                values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                            </feColorMatrix>
                                        </filter>
                                    </defs>
                                </svg>
                                <h5 class="card-title mt-4">Terima Kasih Sudah Memilih</h5>
                                <a href="{{ route('logout') }}" class="btn btn-danger fw-bold">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection

{{-- @if (auth()->user()->choose != 1)
<form action="{{ route('choosed') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($leader)
    <select name="choose">
        @foreach ($leader as $ld)
            <option value="{{$ld->id}}">{{$ld->name}}</option>
        @endforeach
    </select>
    @else
        leader not found
    @endif
    <button type="submit">Choose</button>
</form>
@else
Anda sudah memilih  
@endif --}}
