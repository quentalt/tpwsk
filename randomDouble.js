function main() {
    const randomNumber = Math.random() * 2;
    return {
        resultat: randomNumber,
        original: Math.random() // Générer un autre nombre aléatoire comme demandé dans le titre de la question
    };
}
console.log(main());