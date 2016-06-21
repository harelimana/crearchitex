
<html>
    <head>
        <title>Enquete de satisfaction</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <input type="button" class="button" id="start" value="Commencer le questionnaire"/>

        <div id="enquete">
            <div id="requests">
                <h2></h2>
                <form>
                    <p id="p_1">
                        <input name="reponses" id="choix1" type="radio" value="1"/><label id="proposition1" for="choix1"></label>
                    </p>
                    <p id="p_2">
                        <input name="reponses" id="choix2" type="radio" value="2"/><label id="proposition2" for="choix2"></label>
                    </p>
                    <p id="p_3">
                        <input name="reponses" id="choix3" type="radio" value="3"/><label id="proposition3" for="choix3"></label>
                    </p>
                    <p id="p_4">
                        <input name="reponses" id="choix4" type="radio" value="4"/><label id="proposition4" for="choix4"></label>
                    </p>
                    <p id="p_5">
                        <input name="reponses" id="choix5" type="radio" value="5"/><label id="proposition5" for="choix5"></label>
                    </p>
                    
                </form>
            </div>
       
            <div id="nav">
                <input class="button" type="button" id="previous" value="Précédente"/>
                <input class="button" type="button" id="next" value="Suivante"/>
                <input class="button" type="button" id="confirm" value="Valider"/>
                <input class="button" type="button" id="exit" value="Fin"/>
            </div>
            <div id="message">
                <span></span>
            </div>
        </div>
        <script src="js/lib/jquery.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
