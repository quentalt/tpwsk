import json
import random

def main(args):
    original = round(random.uniform(0, 100), 0)
    resultat = round(original * 2, 0)
    response = {"resultat": f"{resultat}", "original": f"{original}"}
    return {"body": json.dumps(response)}
