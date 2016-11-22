<head>


    <style>
        #eventfinder {
            background: url("../images/project-images/eventfinder.png") center center;
            background-size: cover;
        }
    </style>


</head>

<div class="col-3 project" id="eventfinder">
    <div class="project-heading">
        <h2>Eventfinder</h2>
        <p class="subheading">#HTML #CSS #JS #AJAX #API</p>
    </div>
    <div class="short-description"> <!-- Approx. 20 words max (107 char. incl. spaces) -->
        <p>Web app utilising three APIs to display events in a given area complete with weather reports.</p>
    </div>

    <div class="project-content">
        <img src="../images/project-images/eventfinder.png" alt="Eventfinder">
        <ul>
            <li><em>Type:</em> University project</li>
            <li><em>Time completed:</em> September 2014</li>
            <li><em>Technologies:</em> HTML, CSS, JavaScript, AJAX, three APIs</li>
            <li><em>Code repository:</em> <a href="https://github.com/pharsem/Eventfinder" target="_blank">GitHub</a></li>
            <li><em>Full technical report:</em> <a href="/project-files/files/eventfinder_report.pdf" target="_blank">PDF</a></li>
        </ul>

        <p>
            Eventfinder is an application that lets the user find events happening in their area, or in another
            given area they search for. Through the search, they can also filter by both category and when the event
            happens. When they click an event, they get information about the time, venue, and the weather at that
            location. There are also links to get more information about both the event itself, the venue and a more
            detailed weather report.
        </p>
        <p>
            The application is based on the Google Maps API, the Eventful API and the OpenWeatherMap API. The interface
            consists of a map that covers the whole window, a search/filter box and dynamic content on the map. Whenever
            a user searches, moves the map or zooms in or out, a function is called to request event information from
            Eventful, and the response from this is iterated through to place the markers on the map. Whenever a marker
            is clicked, an info window pops up with the details about the event and weather information.
        </p>
        <p>
            The project was completed as an assignment for INB365 Cloud Computing at Queensland University of Technology
            in semester 2, 2014.
        </p>
    </div>

</div>

<script>
    $("#eventfinder").click(function() {
        $(this).toggleClass("expand");
    });
</script>