import random

def main():
    # Génération d'un nombre aléatoire
    random_number = random.randint(1, 100)

    # Doublement du nombre aléatoire
    doubled_number = random_number * 2

    result = {"resultat": doubled_number, "original": random_number}
    return result

print(main())