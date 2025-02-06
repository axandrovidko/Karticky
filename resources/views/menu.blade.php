Hey, Cortana. Crazy, crazy joker. File. End file.<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="/css/styleguide.css" />
    <link rel="stylesheet" href="/css/styles.css" />
</head>

<body>
    <div class="hra">
        <div class="div">
            <div style="z-index: 999; position:absolute; top:48px; left:1024px; color:white;" class="overlap">
                @if (Auth::check())
                    <span>Welcome, {{ Auth::user()->name }}!</span>
                    {{-- <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form> --}}
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endif
            </div>
        </div>

            <div class="overlap">
                <div class="overlap-group">
                    <div class="rectangle"></div>
                    <div class="joker">
                        <div class="overlap-2">
                            <div class="MC">
                                <div class="overlap-group-2">
                                    <img class="hat" src="img/hat-20.svg" />
                                    <img class="clothes" src="img/clothes-10.svg" />
                                    <img class="face" src="img/face-4.svg" />
                                    <img class="chin" src="img/chin-3.svg" />
                                    <img class="teeth" src="img/teeth.svg" />
                                    <img class="nose" src="img/nose-2.svg" />
                                    <img class="eye" src="img/eye-2-12.svg" />
                                    <img class="img" src="img/eye-1-13.svg" />
                                </div>
                            </div>
                            <div class="joker-2">
                                <img class="JOKER" src="img/JOKER-140.svg" />
                                <img class="JOKER-2" src="img/JOKER-143.svg" />
                                <img class="union" src="img/union-33.svg" />
                                <img class="JOKER-3" src="img/JOKER-33.svg" />
                                <img class="JOKER-4" src="img/JOKER-63.svg" />
                            </div>
                            <div class="queen-diamond"></div>
                            <div class="joker-3">
                                <img class="JOKER-5" src="img/JOKER-81.svg" />
                                <img class="JOKER-6" src="img/JOKER-22.svg" />
                                <img class="union-2" src="img/union-32.svg" />
                                <img class="JOKER-7" src="img/JOKER-122.svg" />
                                <img class="JOKER-8" src="img/JOKER-75.svg" />
                            </div>
                            <div class="overlap-wrapper">
                                <div class="overlap-3">
                                    <img src="images/joker1.png">
                                </div>
                            </div>
                            <div class="joker-4">
                                <img class="JOKER-9" src="img/JOKER-60.svg" />
                                <img class="JOKER-10" src="img/JOKER-117.svg" />
                                <img class="union-3" src="img/union-19.svg" />
                                <img class="JOKER-11" src="img/JOKER-110.svg" />
                                <img class="JOKER-12" src="img/JOKER-77.svg" />
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <div class="overlap-group-wrapper">
                            <div class="overlap-2">
                                <div class="MC">
                                    <div class="overlap-group-3">
                                        <img class="hat-3" src="img/hat-17.svg" />
                                        <img class="clothes-3" src="img/clothes-7.svg" />
                                        <img class="face-3" src="img/face-14.svg" />
                                        <img class="chin-3" src="img/chin-7.svg" />
                                        <img class="teeth-3" src="img/teeth-2.svg" />
                                        <img class="nose-3" src="img/nose.svg" />
                                        <img class="eye-4" src="img/eye-2-5.svg" />
                                        <img class="eye-5" src="img/eye-1-5.svg" />
                                    </div>
                                </div>
                                <div class="joker-2">
                                    <div class="overlap-4">
                                        <div class="overlap-5">
                                            <img class="JOKER-13" src="img/JOKER-36.svg" />
                                            <div class="overlap-6">
                                                <img class="JOKER-14" src="img/JOKER-129.svg" />
                                                <img class="union-4" src="img/union-17.svg" />
                                            </div>
                                            <img class="JOKER-15" src="img/JOKER-17.svg" />
                                        </div>
                                        <img class="JOKER-16" src="img/JOKER-62.svg" />
                                    </div>
                                </div>
                                <div class="queen-diamond"></div>
                                <div class="joker-3">
                                    <div class="overlap-7">
                                        <div class="overlap-8">
                                            <img class="JOKER-17" src="img/JOKER-61.svg" />
                                            <div class="overlap-9">
                                                <img class="JOKER-18" src="img/JOKER-137.svg" /> <img class="union-5"
                                                    src="img/union-2.svg" />
                                            </div>
                                            <img class="JOKER-19" src="img/JOKER-108.svg" />
                                        </div>
                                        <img class="JOKER-20" src="img/JOKER-37.svg" />
                                    </div>
                                </div>
                                <div class="overlap-wrapper">
                                    <div class="overlap-10">
                                        <img src="images/joker2.png">
                                    </div>
                                </div>
                                <div class="joker-4">
                                    <div class="overlap-7">
                                        <div class="overlap-8">
                                            <img class="JOKER-21" src="img/JOKER-14.svg" />
                                            <div class="overlap-9">
                                                <img class="JOKER-22" src="img/JOKER-73.svg" /> <img class="union-6"
                                                    src="img/union-9.svg" />
                                            </div>
                                            <img class="JOKER-23" src="img/JOKER-134.svg" />
                                        </div>
                                        <img class="JOKER-24" src="img/JOKER-106.svg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offline-button" id="offlineButton">
                        <div class="overlap-11">
                            <div class="group">
                                <div class="overlap-group-4">
                                    <div class="rectangle-2"></div>
                                    <div class="element-software-cloud-no"><img class="icon"
                                            src="images/cloud_offline.png" /></div>
                                </div>
                            </div>
                            <div class="text-wrapper">Offline</div>
                        </div>
                    </div>
                    <div class="text-wrapper-2">J</div>
                    <div class="text-wrapper-3">r</div>
                    <div class="text-wrapper-4">e</div>
                    <div class="text-wrapper-5">k</div>
                    <div class="text-wrapper-6">o</div>
                </div>
                <div class="online-button" id="onlineButton">
                    <div class="overlap-11">
                        <div class="div-wrapper">
                            <div class="overlap-group-4">
                                <div class="rectangle-2"></div>
                                <div class="element-music-player-play">
                                    <div class="icon-wrapper"><img class="icon-2" src="images/play.png" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="text-wrapper-7">Online</div>
                    </div>
                </div>
                <div class="collection-button" id="collectionButton">
                    <div class="overlap-12">
                        <div class="collection-button-2">
                            <div class="overlap-13">
                                <div class="group-2">
                                    <div class="rectangle-wrapper">
                                        <div class="rectangle-3"></div>
                                    </div>
                                </div>
                                <div class="text-wrapper-8">Collection</div>
                            </div>
                        </div>
                        <img class="combined-shape" src="images/dots_collection.png" />
                    </div>
                </div>
            </div>
            <form action="{{ route('login') }}">
                <button type="submit" class="profile-button" id="profileButton">
                    <div class="overlap-14">
                        <div class="group-3">
                            <div class="overlap-group-5">
                                <div class="rectangle-4"></div>
                            </div>
                        </div>
                        <div class="element-basic-user"><img class="icon-3" src="/images/user.png" /></div>
                    </div>
                </button>
            </form>

        </div>
    </div>
</body>

</html>

<!-- JavaScript -->
<script>
    // Offline Button
    document.getElementById("offlineButton").addEventListener("click", function() {
        window.location.href = "{{ route('game') }}";
    });

    // Online Button
    document.getElementById("onlineButton").addEventListener("click", function() {
        window.location.href = "{{ route('game') }}";
    });

    // Collection Button
    document.getElementById("collectionButton").addEventListener("click", function() {
        window.location.href = "{{ route('collection') }}";
    });

    // Profile Button
    // document.getElementById("profileButton").addEventListener("click", function() {
    //    alert("Opening profile...");
    // });
</script>
