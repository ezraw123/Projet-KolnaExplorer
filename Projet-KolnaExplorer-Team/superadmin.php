<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to super-admin dashboard</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/supadmin.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <aside class="asideBar">

        <ul class="dashMenu">
            <li onclick="dashboard()" id="menu1" class="dashMenu__dashboard">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/dashicon.png" alt="dash icone">
                </div>
                <b class="dashMenu__list">Dashboard</b>
            </li>

            <li onclick="homepage()" id="menu2" class="activate">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/homeicon.png" alt="home icone">
                </div>
                <b class="dashMenu__list">Home</b>
            </li>
            <li onclick="Events()" id="menu3">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/eventicon.png" alt="events icone">
                </div>
                <b class="dashMenu__list">Events</b>
            </li>
            <li onclick="galerie()" id="menu4">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/galerieicon.png" alt="galerie icone">
                </div>
                <b class="dashMenu__list">Galerie</b>
            </li>
            <li onclick="destination()" id="menu5">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/desticon.png" alt="destination icone">
                </div>
                <b class="dashMenu__list">Destination</b>
            </li>
            <li onclick="location.href='Teampage.php'" id="menu6">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/teamicon.png" alt="team icone">
                </div>
                <b class="dashMenu__list">Team</b>
            </li>
            <li onclick="partners()" id="menu7">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/partnericone.png" alt="partner icone">
                </div>
                <b class="dashMenu__list">Partners</b>
            </li>
            <li onclick="posts()" id="menu8">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/posticon.png" alt="post icone">
                </div>
                <b class="dashMenu__list">Posts</b>
            </li>
            <li onclick="categorys()" id="menu9">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/copieicon.png" alt="category icone">
                </div>
                <b class="dashMenu__list">Category</b>
            </li>
            <li onclick="Media()" id="menu10">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/mediaicon.png" alt="media icone">
                </div>
                <b class="dashMenu__list">Media</b>
            </li>
            <li onclick="administrateur()" id="menu11" class="dashMenu__admin">
                <div class="dashMenu__divico">
                    <img class="dashMenu__imgIco" src="Assets/adminicon.png" alt="admin icone">
                </div>
                <b class="dashMenu__list">Ajouter admin</b>
            </li>
        </ul>

    </aside>
    <div class="topBar">

        <h3 class="topBar__titleAdmin">Welcome to super-admin dashboard</h3>

    </div>
    <!-- ---------------------------------------------------** D A S H B O A R D **--------------------------------------------------------- -->
    <section id="dash" class="homePage">
        <div class="homePage__blocdiv">
            <img class="homePage__illustimg" src="Assets/illustration-admin.gif" alt="admin">
        </div>
    </section>
    <!-- ---------------------------------------------------** H O M E - P A G E **--------------------------------------------------------- -->
    <section id="homePage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Home page</h1>
        </div>




    </section>
    <!-- --------------------------------------------------** E V E N T - P A G E **-------------------------------------------------------- -->
    <section id="eventPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Event page</h1>
            
        </div>




    </section>
    <!-- --------------------------------------------------** G A L E R I E - P A G E **---------------------------------------------------- -->
    <section id="galPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Galerie page</h1>
        </div>




    </section>
    <!-- ----------------------------------------------** D E S T I N A T I O N - P A G E **------------------------------------------------ -->
    <section id="destPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Destination page</h1>
        </div>




    </section>
    <!-- --------------------------------------------------** T E A M - P A G E **--------------------------------------------------------- -->

    <section id="teamPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Team page</h1>
            <p>bonjour tout le monde</p>
        </div>

    </section>
    <!-- -----------------------------------------------** P A R T N E R S - P A G E **---------------------------------------------------- -->

    <section id="partnerPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Partner section</h1>
        </div>





    </section>
    <!-- --------------------------------------------------** P O S T - P A G E **---------------------------------------------------------- -->

    <section id="postPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Post page</h1>
        </div>




    </section>
    <!-- -----------------------------------------------** C A T E G O R Y - P A G E **---------------------------------------------------- -->

    <section id="categoryPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Categorie page</h1>
        </div>




    </section>
    <!-- ----------------------------------------------------** M E D I A - P A G E **------------------------------------------------------ -->

    <section id="mediaPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>Media page</h1>
        </div>




    </section>
    <!-- --------------------------------------------------** A D M I N - P A G E **------------------------------------------------------- -->

    <section id="adminPage" class="homePage">
        <div class="homePage__homeTitle">
            <h1>admin page</h1>
        </div>




    </section>
    <!-- ----------------------------------------------------------** F I N **-------------------------------------------------------------- -->


    <script src="/js/jscript.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>