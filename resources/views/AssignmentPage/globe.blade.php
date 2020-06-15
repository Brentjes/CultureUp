@extends ('layouts.layout')
@section('title', 'Globe')
@section('content')

    <head>


        <link rel="stylesheet" href="https://js.arcgis.com/4.15/esri/themes/light/main.css"/>
        <link rel="stylesheet" href="/css/Assignment/globe.css"/>
        <script src="https://js.arcgis.com/4.15/"></script>

        <script>
            require([
                "esri/Map",
                "esri/views/SceneView",
                "esri/layers/TileLayer",
                "esri/layers/GeoJSONLayer",
                "esri/Basemap",
                "esri/geometry/Mesh"

            ], function (Map, SceneView, TileLayer, GeoJSONLayer, Basemap, Mesh) {
                const offset = 300000; // offset from the ground used for the clouds
                try {
                    document.getElementById('toggle-button').addEventListener('click', switchMapTexture)
                } catch {
                }
                let mapTexture = localStorage.getItem('CultureUpDarkMode') === 'true' ? "dark-gray-vector" : "gray-vector";

                function switchMapTexture() {
                    mapTexture = !(localStorage.getItem('CultureUpDarkMode') === 'true') ? "dark-gray-vector" : "gray-vector";
                    map.basemap = mapTexture
                }

                // Renders the map
                const map = new Map({
                    basemap: mapTexture
                });
                const view = new SceneView({
                    container: "viewDiv",
                    map: map,
                    alphaCompositingEnabled: true,
                    qualityProfile: "low",
                    camera: {
                        position: [20.03975781, 14.94826384, 28000000],
                    },
                    environment: {
                        background: {
                            type: "color",
                            color: [255, 252, 244, 0]
                        },
                        starsEnabled: true,
                        atmosphereEnabled: false,
                    },
                    constraints: {
                        altitude: {
                            min: 10000000,
                            max: 28000000
                        }
                    },
                    popup: {
                        dockEnabled: true,
                        dockOptions: {
                            position: "top-right",
                            breakpoint: false,
                            buttonEnabled: false
                        },
                        collapseEnabled: false
                    },
                    highlightOptions: {
                        color: '#a8dafc',
                        haloOpacity: 0.5
                    }
                });
                view.ui.empty("top-left");

                // The country descriptions & popup
                const extremesLayer = new GeoJSONLayer({
                    url: "/GeoJSON/cases.geojson",
                    elevationInfo: {
                        mode: "absolute-height",
                        offset: offset
                    },
                    renderer: {
                        type: "simple",
                        symbol: {
                            type: "point-3d",
                            symbolLayers: [
                                {
                                    // autocasts as new IconSymbol3DLayer()
                                    type: "icon",
                                    resource: {
                                        href: '/images/map-marker-alt-solid.svg'
                                    },
                                    size: 50,
                                }
                            ],
                        },
                    },
                    popupTemplate: {
                        title: "{country}",
                        content:
                            `<div class="popupImage">
              <img src="{imageUrl}"/>
            </div>
            <div class="popupDescription">
              <p class="info">
                <span class="esri-icon-map-pin"></span><span> {location}</span>
              </p>
              <p class="info">
                <span class="esri-icon-chat"></span><span> {language}</span>
              </p>
              <p class="info">
                <span class="esri-icon-group"></span> {population}
              </p>
              <p class="info">
                <span class="esri-icon-collection"></span> {facts}
              </p>
               <div class="text-center">
                <a class="link-unstyled btn btn-outline-light putUrlHere" href="">
                    Take me there!
                </a>
               </div>
            </div>`
                    }
                });
                map.layers.add(extremesLayer);
            });

            function updateUrlButton() {
                let counter = 0;

                function update(counter) {
                    try {
                        document.getElementsByClassName('putUrlHere')[0].href = document.getElementsByClassName('locationUrl')[0].innerText;
                    } catch {
                        if (counter >= 5) {
                            return;
                        }
                        counter++;
                        setTimeout(function () {
                            update(counter)
                        }, 1000)
                    }
                }

                update(counter)
            }
        </script>
    </head>

    <body class="assignment-background">
    <div id="viewDiv"></div>
    </body>
    <script>
        document.getElementById('viewDiv').addEventListener('click', updateUrlButton)
    </script>
    </html>
@endsection
