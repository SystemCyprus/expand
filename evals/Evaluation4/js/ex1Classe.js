class Citoyen {
    constructor(
        // Définition des paramèters:
        id,
        nom,
        prenom,
        age,
        adressse,
        ville,
        pays
    ) {
        // Définition propriétés:
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.age = age;
        this.adressse = adressse;
        this.ville = ville;
        this.pays = pays;
    }
    // Methode qui retourne le "toString" des objets instanciés
    aficherString() {
        return this.id + " " +
            this.id + " " +
            this.nom + " " +
            this.prenom + " " +
            this.age + " " +
            this.adresse + " " +
            this.id;
    }
}
export default Citoyen;