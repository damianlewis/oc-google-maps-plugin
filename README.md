# Google Maps plugin for October CMS
Adds Google Maps to an October CMS website.

## Instructions
1. In the backend settings page, add the API key for your Google Maps account.
2. Add the Google Map component `{% component 'googleMap' %}` to your CMS page.
3. Add `{% placeholder gmscript %}` just before the closing `<body>` tag of your CMS page.

## Example
```html
[googleMap]
id = "googleMap"
latitude = -34.397
longitude = 150.644
zoom = 12
mapTypeId = "roadmap"
showMarker = 0
zoomControl = 1
mapTypeControl = 0
streetViewControl = 0
rotateControl = 0
scaleControl = 1
fullscreenControl = 1
==
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{ this.page.title }}</title>
    {% styles %}
    <link href="{{ 'assets/css/main.css'|theme }}" rel="stylesheet">
</head>
<body>
    
    {% partial 'header' %}
    <main>
        {% page %}
        {% component 'googleMap' %}
    </main>
    {% partial 'footer' %}
 
    {% placeholder gmscript %}
    <script src="{{ 'assets/js/main.js'|theme }}"></script>
    {% framework extras %}
    {% scripts %}
</body>
</html>
```

## License
MIT

## Author
Damian Lewis
