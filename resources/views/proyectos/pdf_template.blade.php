<!DOCTYPE html>
<html>
<head>
    <title>Informe de Proyecto - Gobierno de El Salvador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            height: auto;
            display: inline-block;
            vertical-align: middle;
        }
        .header h1 {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
        }
        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .institution {
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .date {
            text-align: right;
            font-size: 14px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
  
    <div class="title">Informe de Proyectos</div>
    <div class="institution">Gobierno de El Salvador</div>
    <div class="date">Fecha: {{ date('Y-m-d') }}</div>
    <table>
        <tr>
            <th>Id</th>
            <th>NombreProyecto</th>
            <th>Fuente de Fondos</th>
            <th>Monto Planificado</th>
            <th>Monto Patrocinado</th>
            <th>Monto de Fondos Propios</th>
        </tr>
        <tr>
            <td>{{ $proyecto->id }}</td>
            <td>{{ $proyecto->NombreProyecto }}</td>
            <td>{{ $proyecto->fuenteFondos }}</td>
            <td>{{ $proyecto->MontoPlanificado }}</td>
            <td>{{ $proyecto->MontoPatrocinado }}</td>
            <td>{{ $proyecto->MontoFondosPropios }}</td>
        </tr>
    </table>
</body>
</html>
