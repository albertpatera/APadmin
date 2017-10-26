items = [
    {
        nazev: "Drevo",
        id: 0
    },
    {
        nazev: "Dum",
        id: 1222
    },
    {
        nazev: "Dum",
        id: 1222
    },
]

/**
 * Definice promennych
 */

var $form = $("#form");
$s = $("#submit");




$.ajax({
    url: "test.html",
    context: document.body,


    success: function () {
        alert("ok nacteno");
    }
}).done(function(data) {
    $( this ).addClass( "done" );
    alert("File is loaded..");
    $(this).addClass("test");
    $(".test").html("<table border='1' class='table table-hover table-mc-light-blue'>" +
        + "<tr>" +
        "<td>JJJJ</td>" +
        "</tr>" +
        "<tr>" +
        "<td data-title='Name'>Ahoj</td> " +
        "</tr>");
    $("body").html("<fieldset>" +
        "<form action='progress.php' method='POST' id='form'></form>" +
        "<p><label>Username</label><input type='text' name='user' id='user' placeholder='username'></p>" +
        "<p><label>passwd</label><input type='password' name='passwd' placeholder='password' </p>" +
        "<input type='submit' id='submit'>" +
        "</fieldset>");




});

$.post ({

})


for (var i = 0; i <items.length; ++i) {
//console.log(x.prijmeni);
//alert(items[i]);
    console.log(items.length);
    alert(items[i].nazev);
    $("td").append(items[i].nazev);
}
$.ajax({
    url: "content.txt",
    context: {user: "albert"},
    success: function (data) {
        /*
        $(".test").css("height", "450px");
        $(".test").css("width", "450px");
        $(".test").css("background-color", "orange");
        */
        alert(data.user);
        console.log(data.user);
        for (var i = 0; i <items.length; ++i) {
//console.log(x.prijmeni);
//alert(items[i]);
            console.log(items.length);
            alert(items[i].nazev);
            $("tr").append("<td>"+ items[i].nazev + "</td>");
        }
    },
    error: function (data) {
        console.log("File not found");


    },

    document.ready(function(){
    $s.submit(function (e) {
        e.preventDefault();
        console.log("pressed");
    })
})





})




