
function getData() {

    $.ajax({
        url: 'data.php',
        method: 'GET',
        success: function (data) {

            printData(data);
        },
        error: function (err) {

            console.log(err);
        }
    });
}

function printData(data) {

    var template = $('#card-template').html();
    var compiled = Handlebars.compile(template);
    var target = $('.content');

    for (var i = 0; i < data.length; i++) {
        var card = data[i];
        var cardHTML = compiled(card);
        target.append(cardHTML);
    }
}


function init() {

    getData();
}

$(document).ready(init);
