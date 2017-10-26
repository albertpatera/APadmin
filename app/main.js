/**
 * Created by Albert Patera on 17.10.2017.
 */


function load(data) {
    alert("this is ==" + data.nazev);
    $(".test").append("<li>" +data.nazev + "</li>");
}