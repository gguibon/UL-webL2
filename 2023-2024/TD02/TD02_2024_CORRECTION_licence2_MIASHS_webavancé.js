/**
 * Correction du TD de consolidation du Javascript pour le cours Web avancé de L2 MIASHS.
 * L'ensemble de ces bouts de code doit être effectué dans la console pour mieux apperçevoir les résultats et permettre des tests supplémentaires qui puissent vous orienter davantage.
 * 
 * Les sections sont indiquées par :
 * // --- nom de la section ---
 * 
 * Les blocs de TODO utilisant le pictogramme rose sont indiqués ici par :
 * // ---
 * 
 * Les cas d'usages sont indiqués par
 * // -- nom du cas d'usage
 * 
 * Amusez-vous bien ! 😊
 * 
 * @author Gaël Guibon <https://gguibon.github.io>
 * @date 09 avril 2023
 * @license AGPL2.0
 */

// --- Afficher mes premières variables ---
var prenom = "Gaël";
console.log(prenom);
var age = 35;
console.log(age);
var aimeProgrammer = true;
console.log(aimeProgrammer);
var fruitsPreferes = "🍎 🍐 🍓 🍇";
console.log(fruitsPreferes);

// --- Manipuler des chaînes de caractères ---
var moi = "Gaël Guibon";
var moiSep = moi.split(" ");
console.log(moiSep);
// ---
var prenom = "Gaël";
var salut = "Salut";
var concat = prenom + salut;
console.log(concat);
// ---
var mavar = "Super JS !";
var mavarSep = mavar.split(" ");
console.log(mavarSep);
var mavar2 = mavarSep.join(" ");
console.log(mavar2);

// --- Manipuler des numériques ---
var age = 35;
console.log(typeof(age));
var ageDiv2 = age / 2;
// ---
var annee = 2023;
var anneeDiv4 = annee / 4;
console.log(anneeDiv4);
anneeDiv4 = Math.floor(anneeDiv4);
console.log(anneeDiv4);

// --- Manipuler des booléens et des conditions ---
var nancy = 54;
var marseille = 13;
console.log( nancy == marseille );
console.log( nancy != marseille );
console.log( marseille > nancy );
// ---
var age = 35;
if (age < 18){
	console.log("Personne ne m’écoute ! 😢");
}else if (age > 60){
	console.log("C’était mieux avant ! 😫");
}else{
	console.log("À moi les urnes ! 😎");
}

// --- Manipuler des tableaux ---
var miam = ["🍖", "🧋", "🥖"];
console.log( miam.length );
var beurk = ["🍷", "🧀"];
console.log(beurk, beurk.length);
// ---
console.log( beurk[1] );
console.log( typeof(miam[0]) );
console.log( miam[miam.length -1] );
// ---
miam.push("🍭");
console.log(miam);
beurk.unshift("🍾");
console.log(beurk);
miam.pop();
console.log(miam);
beurk.shift();
console.log(beurk);
// ---
miam.splice(1, 0, "🥦");
console.log(miam);
miam.splice(1, 1);
console.log(miam);
// ---
var graille = miam.concat(beurk);
console.log(graille);
// -- Le meilleur dresseur
var evolutions = ["Tortank", "Carapuce", "Carabaffe"];
var tortank = evolutions.shift();
evolutions.push(tortank);
console.log(evolutions);
// -- Vroom
var chronosEnSecondes = [124, 389, 89, 84.3, 85, 84.4, 84.9];
chronosEnSecondes.sort();
var temp = chronosEnSecondes.splice(0, 2);
var res = chronosEnSecondes.concat(temp);
console.log(res);

// --- Utiliser des boucles for pour les tableaux ---
for (let i = 0; i < miam.length ; i++) {
	console.log(miam[i]);
}
for (let i = 0; i < beurk.length ; i++) {
	console.log(beurk[i]);
}
for (let i = miam.length; i >= 0 ; i--) {
	console.log(miam[i]);
}
for (let i = 0; i < beurk.length ; i+=2) {
	console.log(beurk[i]);
}

// --- Manipuler des tableaux associatifs ---
var moi = {"nom":"Guibon", "prenom":"Gaël", "age":35, "loveProg":10};
console.log(moi);
console.log(moi["prenom"]);
moi["parcours"] = "tal";
// -- Poux de lard
var cureJouvence = {"baveCrapaud":5, "bissap":10, "eauThermale":200, "sangGobelin": 200};
console.log(cureJouvence);

// --- Utiliser des boucles for pour les tableaux ---
for (const [k, v] of Object.entries(moi)){
	console.log(v);
}
for (const [k, v] of Object.entries(moi)){
	console.log("Il faut", v, "ml de", k);
}
// -- Vroom Bis
var chronosEnSecondes = [
	{"nom":"Schum", "chrono":124},
	{"nom":"Ham", "chrono":389},
	{"nom":"Prost", "chrono":89},
	{"nom":"Vettel", "chrono":84.3},
	{"nom":"Norris", "chrono":85},
	{"nom":"Leclerc", "chrono":84.4},
	{"nom":"Gaël😜", "chrono":84.9}
];

// approche peu optimisée mais avec une logique plus accessible
var chronos = [];
for (let i = 0; i < chronosEnSecondes.length; i++) {
	chronos.push(chronosEnSecondes[i]["chrono"]);
}

chronos.sort();
chronos = chronos.concat( chronos.splice(0,2) ); // même chose que précédemment mais sur une ligne

var res = [];
for (let i = 0; i < chronos.length ; i++){
	for (let j = 0; j < chronosEnSecondes.length ; j++){
		if (chronos[i] == chronosEnSecondes[j]){
			res.push(chronosEnSecondes[i]);
		}
	}
}

console.log(res);

// --- Créer et utiliser des fonctions ---

function bonjour(){
	console.log("Bonjour Nancy !");
}

function dire(locuteur, contenu) {
	console.log("["+locuteur+"] "+contenu);
}

function dire(locuteur, contenu) {
	return "["+locuteur+"] "+contenu;
}

dire("Gaël", "Salut les fana de code ! 🤓");