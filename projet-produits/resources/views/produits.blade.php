<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-4">📦 Inventaire des Produits</h1>

        <form action="{{ route('products.store') }}" method="POST" class="mb-8 flex gap-4">
            @csrf
            <input type="text" name="nom" placeholder="Nom du produit" class="border p-2 rounded w-full" required>
            <input type="number" step="0.01" name="prix" placeholder="Prix" class="border p-2 rounded w-40" required>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter</button>
        </form>

        <table class="w-full text-left">
            <tbody>
                @foreach($lesProduits as $produit)
                <tr>
                    <td class="p-3 border-b">{{ $produit->nom }}</td>
                    <td class="p-3 border-b text-right">{{ $produit->prix }} €</td>
                    <td class="p-3 border-b text-right flex gap-2 justify-end">
                        <a href="{{ route('products.edit', $produit->id) }}" class="text-blue-600 hover:underline">Modifier</a>
                        <form action="{{ route('products.destroy', $produit->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
