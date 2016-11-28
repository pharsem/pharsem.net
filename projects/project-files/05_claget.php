<head>

    <style>
        /*Insert project name as ID selector, update image path*/
        #claget {
            background: url("../images/project-images/claget.png") center center;
            background-size: cover;
        }
    </style>

</head>

<!-- Insert project name as ID -->
<div class="col-3 col-m-4 project" id="claget">
    <div class="project-heading">

        <h2>C-laget.com</h2>
        <p class="subheading">#Joomla #HTML #CSS</p>
    </div>
    <div class="short-description">
        <p>Joomla website for local football team.</p>
    </div>

    <div class="project-content">
        <!-- Update image path and alt. text -->
        <img src="../images/project-images/claget.png" alt="c-laget.com">
        <ul>
            <!-- Delete whatever's not necessary -->
            <li><em>Type: </em>Client work</li>
            <li><em>Time completed: </em>2013</li>
            <li><em>Technologies: </em>#Joomla #HTML #CSS</li>
            <li><em>Demo: </em><a href="http://c-laget.com" target="_blank">c-laget.com</a></li>
        </ul>

        <p>
            Korsvoll C is a local football team in Oslo, and they contacted me when they needed a new website. The
            site is set up in Joomla, and the development process included extensive training so that the client
            would be able to maintain the site himself. 
        </p>

    </div>

</div>

<script>
    //Insert project name as ID selector
    $("#claget").click(function() {
        $(this).toggleClass("expand");
    });
</script>