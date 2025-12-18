<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier le produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Modifier : {{ $produit->nom }}</h1>

        <form action="{{ route('products.update', $produit->id) }}" method="POST">
            @csrf
            @method('PUT') <div class="mb-4">
                <label class="block">Nom</label>
                <input type="text" name="nom" value="{{ $produit->nom }}" class="w-full border p-2">
            </div>

            <div class="mb-4">
                <label class="block">Prix</label>
                <input type="number" step="0.01" name="prix" value="{{ $produit->prix }}" class="w-full border p-2">
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
            <a href="/products" class="text-gray-500 ml-4">Annuler</a>
        </form>
    </div>
</body>
</html>
