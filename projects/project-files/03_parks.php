<head>

    <style>
        /*Insert project name as ID selector, update image path*/
        #parks {
            background: url("../images/project-images/parks.png") center center;
            background-size: cover;
        }
    </style>

</head>

<!-- Insert project name as ID -->
<div class="col-3 project" id="parks">
    <div class="project-heading">

        <h2>Parks of Brisbane</h2>
        <p class="subheading">#PHP #JavaScript #HTML #CSS #API</p>
    </div>
    <div class="short-description">
        <p>Website where the users can view and review parks in Brisbane, Australia.</p>
    </div>

    <div class="project-content">
        <!-- Update image path and alt. text -->
        <img src="../images/project-images/parks.png" alt="Parks of Brisbane">
        <ul>
            <!-- Delete whatever's not necessary -->
            <li><em>Type: </em>University project</li>
            <li><em>Time completed: </em>June 2014</li>
            <li><em>Technologies: </em>PHP, JavaScript, HTML, CSS, API</li>
            <li><em>Code repository: </em><a href="https://github.com/pharsem/parks-of-brisbane" target="_blank">GitHub</a></li>
        </ul>

        <p>
            Parks of Brisbane is a website where the users can search through, view and, if they register and log in,
            review parks in Brisbane. In addition to the front end, there is also a back end where administrators can
            log in and update the dataset, in case there are any changes with the parks in the city.
        </p>
        <p>
            The site was built as an assignment in INB271 The Web, semester 1 2014, and uses PHP, MySQL, JavaScript and
            HTML/CSS, as well as the Google Maps API. The backend where administrators can update the dataset accepts a
            CVS file for upload, which the system then parse, before entering the values in the database.
        </p>

    </div>

</div>

<script>
    //Insert project name as ID selector
    $("#parks").click(function() {
        $(this).toggleClass("expand");
    });
</script>