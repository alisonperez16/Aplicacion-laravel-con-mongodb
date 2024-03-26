<!doctype html>
<html lang="en">
    
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <h1 class="card text-black text-center bg-car1 pb-3">Laravel con mongodb </h1>
        <h2 class="card text-black text-center bg-car1 pb-3">"Alison Yuridia Perez Juarez"</h2>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $productos): ?>
                <tr>
                    <td><?php echo $productos->_id; ?></td>
                    <td><?php echo $productos->nombre; ?></td>
                    <td><?php echo $productos->precio; ?></td>   
                    <td><?php echo $productos->stock; ?></td>      
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        
    </body>
</html>

