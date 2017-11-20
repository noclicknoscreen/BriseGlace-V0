function afficher( ref, type ) {
var legende = "L"+ref.id.charAt(1);
var arche = "A"+ref.id.charAt(1);
document.getElementById(legende).classList.add("st6");
document.getElementById(arche).classList.add("Noir");

}
function masquer( ref, type ) {
var legende = "L"+ref.id.charAt(1);
var arche = "A"+ref.id.charAt(1);
document.getElementById(legende).classList.remove("st6");
document.getElementById(arche).classList.remove("Noir");
}