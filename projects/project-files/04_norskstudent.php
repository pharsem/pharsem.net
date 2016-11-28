<head>

    <style>
        /*Insert project name as ID selector, update image path*/
        #norskstudent {
            background: url("../images/project-images/norskstudent.png") center center;
            background-size: cover;
        }
    </style>

</head>

<!-- Insert project name as ID -->
<div class="col-3 col-m-4 project" id="norskstudent">
    <div class="project-heading">

        <h2>NorSK - norskstudent.net</h2>
        <p class="subheading">#Joomla #HTML #CSS</p>
    </div>
    <div class="short-description">
        <p>Website for a Brisbane student organisation, made in Joomla.</p>
    </div>

    <div class="project-content">
        <!-- Update image path and alt. text -->
        <img src="../images/project-images/norskstudent.png" alt="NorSK - norskstudent.net">
        <ul>
            <!-- Delete whatever's not necessary -->
            <li><em>Type: </em>Organsiation work</li>
            <li><em>Time completed: </em>2013</li>
            <li><em>Technologies: </em>Joomla, HTML, CSS</li>
        </ul>

        <p>
            NorSK Student Organisation is one of the largest student organisations in Brisbane, Australia, with around
            500-600 members per semester. When I joined the board of the organisation in February 2013, I was charged
            with developing a new website that could be used as an information channel, as well as somewhere to sell
            online tickets to events.

            The site is built with Joomla CMS, with a theme from RocketTheme. I set everything up, customised the theme,
            and created some custom sidebars to display information. I also made a backend for the board to use to
            register members.
        </p>

    </div>

</div>

<script>
    //Insert project name as ID selector
    $("#norskstudent").click(function() {
        $(this).toggleClass("expand");
    });
</script>