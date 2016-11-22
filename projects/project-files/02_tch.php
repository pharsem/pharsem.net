<head>

    <style>
        /*Insert project name as ID selector, update image path*/
        #tch {
            background: url("../images/project-images/tch.png") center center;
            background-size: cover;
        }
    </style>

</head>

<!-- Insert project name as ID -->
<div class="col-3 project" id="tch">
    <div class="project-heading">

        <h2>Townsville Children's Hospital</h2>
        <p class="subheading">#PHP #JS #AJAX #HTML #CSS</p>
    </div>
    <div class="short-description">
        <p>University project where my team built an administration system for an imaginary hospital.</p>
    </div>

    <div class="project-content">
        <!-- Update image path and alt. text -->
        <img src="../images/project-images/tch.png" alt="Townsville Children's Hospital">
        <ul>
            <!-- Delete whatever's not necessary -->
            <li><em>Type: </em>University project</li>
            <li><em>Time completed: </em>June 2014</li>
            <li><em>Technologies: </em>PHP, JavaScript, AJAX, HTML, CSS</li>
            <li><em>Code repository: </em><a href="https://github.com/pharsem/TCH" target="_blank">GitHub</a></li>
            <li><em>Full technical report: </em> <a href="/project-files/files/tch_report.pdf" target="_blank">PDF</a></li>
        </ul>

        <p>
            The Townsville Children's Hospital administation system was a project completed in semester 1, 2014 as a
            part of INB201 Scalable Systems Development. I was working in a team of five students, and my tasks were
            mostly related to the back end development. The system is an intranet solution for the doctors, nurses and
            other staff at the hospital, where they can keep track of their own work schedules, patients, planned
            surgeries, room and equipment usage and so on.
        </p>
        <p>
            The system is built on PHP, MySQL, JavaScript and AJAX. Some of the specific things that I built for the
            project includes an AJAX powered real-time search functionality, in-place editing of database values
            presented in a table on the front end, and an advanced user access system with multiple access roles and
            up to date security features.
        </p>

        <img class="description-image" src="../images/project-images/tch_2.png">

    </div>

</div>

<script>
    //Insert project name as ID selector
    $("#tch").click(function() {
        $(this).toggleClass("expand");
    });
</script>