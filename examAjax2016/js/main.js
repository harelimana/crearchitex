
var key = 0;
var question = 0;
var REPONSE_VIDE = -1;
var NB_QUESTION = 4;
var reponses = [];
var is_validation = false; // Formulaire validé, réponses à vérifier
var is_correction = false; // Réponses validées, correction en cours
//debut du questionnaire

function init_tab(tab, length, value) {
    for (var i = 0; i < length; i++) {
        tab[i] = value;
    }
}
function check_limits(question) {
// On réactive tous les boutons
    $('.button').removeAttr("disabled").removeClass("disabled");
    if (question <= 1) {
        question = 1;
        $('#previous').attr("disabled", true).addClass("disabled");
        $('#confirm').attr("disabled", true).addClass("disabled");
    } else if (question >= NB_QUESTION) {
        question = NB_QUESTION;
        $('#next').attr("disabled", true).addClass("disabled");
    } else {
        $('#confirm').attr("disabled", true).addClass("disabled");
        $('#previous').attr("enabled",true).addClass("enabled");
    }
}

function get_question() {
    $.post("enquete.php", {page: question}, function (data) {
        var donnees = JSON.parse(data);
        console.log(donnees);
        if (typeof donnees !== 'object') {
// On place un message d'erreur dans le H2
            $('#requests h2').text('Problème avec les données reçues');
        } else {
// On écrit les données dans la page
            write_question_to_page(donnees);
        }
    });
}


function write_question_to_page(donnees) {
// On place le titre de l'enquête dans le H2
    $('#requests h2').text(donnees.title);
    
    for (var i = 1, max = donnees.questions.length; i <= max; i++) {
        $('#proposition' + i).text(donnees.questions[i - 1]);
    } 
    var ch = reponses[question - 1];
    // On vérifie si une réponse de l'utilisateur pour cette question
    // existe dans le tableau
    if (ch === REPONSE_VIDE) {
// Si elle n'existe pas, on décoche tous les radios
        $(':checked').removeProp('checked');
    } else {
// Sinon, on coche la réponse mémorisée
        $('#choix' + ch).prop('checked', true);
    }
}

$('#previous').click(function () {
    question--;
    get_question();

    check_limits(question);
    if (is_correction) {
        get_correction();
    } else {
        get_question();
    }
});


$('#next').click(function () {
    question++;
    get_question();

    if (!is_validation) {
        question++;
        check_limits(question);
        if (is_correction) {
            get_correction();
        } else {
            get_question();
        }
    } else {
        $('#confirm').click();
    }
});


$('#start').click(function () {
    $(this).hide();
    $('#exit').hide();
    $('#enquete').show();

    init_tab(reponses, NB_QUESTION, REPONSE_VIDE);
    question = 1;
    check_limits(question);
    get_question();
});

