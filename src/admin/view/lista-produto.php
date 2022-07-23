
<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PRECO</th>
                    <th scope="col">DEPARTAMENTO</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $produto) { ?>
                <tr>
                    <th scope="row"><?php echo $produto['id'] ?></th>
         
                    <td><?php echo $produto['nome'] ?></td>
                    <td>R$ <?php echo number_format($produto['preco'],2,",","."); ?></td>
                    <td><?php echo $produto['departamento'] ?></td>
                    
                </tr>  
                <?php } ?>
            </tbody>
        </table>