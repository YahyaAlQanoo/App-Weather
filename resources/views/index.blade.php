<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Weather widget</title>
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="normalize.css">
      <link rel="stylesheet" href="climacon-font/styles.css">
      <link rel="stylesheet" href="climacon.css">
   <body>
      <div class="main-wrapper">
         <div class="main-wrapper-mask"></div>
         <div class="main-wrapper-blur" style="background-image: url(img/ny-lg.jpg)"></div>
         <div class="main-wrapper-front">
            <div class="full-top-center">
               <div class="input-parent">
                  <form action="{{ route('store')}}" method="post">
                     @csrf
                  <div class="inp">
                     <input type="text" name="city" placeholder="Gaza" style="margin-right: 5px;">
                  </div>
                  <div>
                     <input type="submit" value="Weather refresh" style="margin-left: 5px;">
                  </div>
                  </form>
               </div>
            </div>
            <div class="full-center">
               <div class="widget-block">
               	<!-- MAIN AREA -->
                  <div class="img-area">
                     <div class="img-area-mask"></div>
                     <img src="img/ny-sm.jpg" alt="">
                     <div class="img-area-front">
                        <h5 class="location">{{ $timezone }}</h5>
                        <p class="today">{{ $date_and_time}}</p>
                        <div class="weather-desc">
                           <span>{{ $description }}</span>
                        </div>
                        <ul class="weather-block-info">
                           <li>
                              <p class="temperature" id="temperature">{{(int)$temp}}<span class="temperature-feels">+{{(int)$feels_like}} feels</span></p>
                           </li>
                           <li>
                           	<!-- MAIN ANIMATED SVG WEATHER ICON -->
                              <svg
                                 version="1.1"
                                 id="cloudLightning"
                                 class="climacon climacon_cloudLightningSun"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px"
                                 y="0px"
                                 viewBox="15 15 70 70"
                                 enable-background="new 15 15 70 70"
                                 xml:space="preserve">
                                 <clipPath id="cloudFillClip">
                                    <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                 </clipPath>
                                 <clipPath id="sunCloudFillClip">
                                    <path
                                    d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"/>
                                 </clipPath>
                                 <clipPath id="cloudSunFillClip">
                                    <path
                                    d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"/>
                                 </clipPath>
                                 <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                                    <g clip-path="url(#cloudSunFillClip)">
                                          <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                             <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"/>
                                                <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"/>
                                                <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"/>
                                                <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"/>
                                                <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"/>
                                                <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"/>
                                                <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"/>
                                                <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"/>
                                             </g>
                                             <g class="climacon_componentWrap climacon_componentWrap-sunBody" clip-path="url(#sunCloudFillClip)">
                                                <circle
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                cx="58.033"
                                                cy="41.612"
                                                r="11.999"/>
                                             </g>
                                          </g>
                                    </g>
                                    <g class="climacon_componentWrap climacon_componentWrap-lightning">
                                          <polygon
                                          class="climacon_component climacon_component-stroke climacon_component-stroke_lightning"
                                          points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "/>
                                    </g>
                                    <g class="climacon_componentWrap climacon_componentWrap-cloud">
                                          <path
                                          class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                          d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"/>
                                    </g>
                                 </g>
                              </svg>
                              <!-- /MAIN ANIMATED SVG WEATHER ICON -->
                           </li>
                           <li>
                              <ul class="weather-params" id="weather-params">
                                 <li><i class="climacon thermometer medium-high"></i> <span>{{$pressure}} mm Hg</span></li>
                                 <li><i class="climacon moon full"></i> <span>{{$humidity}}% humidity</span></li>
                                 <li><i class="climacon wind"></i> <span>{{$wind_speed}}m/s NW</span></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- /MAIN AREA -->
                  <!-- WEATHER FORECAST -->
                  <ul class="week-forecast" id="week-forecast">
                     @foreach ($dailys as $key => $item)

                     @if ($key == 0)
                        @php
                           continue ;
                        @endphp
                     @endif

                     <li class="@if ($item["weather"][0]["main"] == "Clear") sun @endif @if ($item["weather"][0]["main"] == "Rain") rain @endif  @if ($item["weather"][0]["main"] == "Clouds") cloud @endif  @if ($item["weather"][0]["main"] == "Lightning") lightning @endif ">
                        <div class="inner">
                           <h5 class="week-day">{{ \Carbon\Carbon::parse($item["dt"])->dayName }}</h5>
                           <i class="climacon @if ($item["weather"][0]["main"] == "Clear") sun @endif @if ($item["weather"][0]["main"] == "Rain") rain @endif  @if ($item["weather"][0]["main"] == "Clouds") cloud @endif  @if ($item["weather"][0]["main"] == "Lightning") lightning @endif  "></i>
                           <p class="week-day-temperature">{{ (int)$item['temp']['day']}}</p>
                        </div>
                     </li>    

                     @endforeach
                     {{-- <li class="sun">
                        <div class="inner">
                           <h5 class="week-day">Monday</h5>
                           <i class="climacon sun"></i>
                           <p class="week-day-temperature">30</p>
                        </div>
                     </li>
                     <li class="rain">
                        <div class="inner">
                           <h5 class="week-day">Tuesday</h5>
                           <i class="climacon rain"></i>
                           <p class="week-day-temperature">25</p>
                        </div>
                     </li>
                     <li class="cloud">
                        <div class="inner">
                           <h5 class="week-day">Wednsday</h5>
                           <i class="climacon cloud"></i>
                           <p class="week-day-temperature">32</p>
                        </div>
                     </li>
                     <li class="sun">
                        <div class="inner">
                           <h5 class="week-day">Thursday</h5>
                           <i class="climacon sun"></i>
                           <p class="week-day-temperature">30</p>
                        </div>
                     </li>
                     <li class="lightning">
                        <div class="inner">
                           <h5 class="week-day">Friday</h5>
                           <i class="climacon lightning"></i>
                           <p class="week-day-temperature">29</p>
                        </div>
                     </li>
                     <li class="sun">
                        <div class="inner">
                           <h5 class="week-day">Saturday</h5>
                           <i class="climacon sun"></i>
                           <p class="week-day-temperature">25</p>
                        </div>
                     </li>
                     <li class="rain">
                        <div class="inner">
                           <h5 class="week-day">Sunday</h5>
                           <i class="climacon rain"></i>
                           <p class="week-day-temperature">22</p>
                        </div>
                     </li> --}}
                  </ul>
                  <!-- /WEATHER FORECAST -->
               </div>
            </div>
         </div>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>