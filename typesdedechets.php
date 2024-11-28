<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Types de Déchets et leurs Prix</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9ecef;
        }
        @media (max-width: 768px) {
            th, td {
                padding: 10px;
                font-size: 14px;
            }
            h1, h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
<?php
include "Menu.php";
include "connection.php";
?>

<h1>Differents types de déchets</h1>
<table>
    <thead>
        <tr>
            <th>Type de Déchet</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Déchets organiques</td>
            <td>Les déchets organiques, également appelés déchets biodégradables, sont des matières provenant de sources naturelles qui peuvent se décomposer naturellement par l'action de micro-organismes, d'insectes ou d'autres organismes.</td>
        </tr>
        <tr>
            <td>Déchets ménagers</td>
            <td>Inclut tous les déchets générés par les activités domestiques, tels que les restes alimentaires, les emballages, et les produits d'hygiène.</td>
        </tr>
    </tbody>
</table>

<h2>Differents types de déchets et leurs prix par tonne</h2>
<table>
    <thead>
        <tr>
            <th>Type de Déchet</th>
            <th>Prix par tonne</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Déchets organiques</td>
            <td>500000 Fbu</td>
        </tr>
        <tr>
            <td>Déchets ménagers</td>
            <td>300000 Fbu</td>
        </tr>
    </tbody>
</table>

</body>
</html>

<?php
include "Footer.php";
?>