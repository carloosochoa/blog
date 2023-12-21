<?php include "../cabecera.inc";
include_once("../clases/suministra.php");
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $numvend = $_GET['numvend'];
    $s = new Suministra();
    $suministrar = $s->Listar($numvend);
}
    ?>
<h2 class="bg-info text-dark"> SUMINISTRAR</h2>
<h2><?=$suministrar[0]["nomvend"];?></h2>
<table class="table table-striped">
    <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>NUMPIEZA</th>
            <th>PRECIOUNIT</th>
            <th>DIASSUM</th>
            <th>DESCUENTO</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach($suministrar as $suministra){
            ?>
            <tr>
                <td><?php echo $suministra['numpieza'];?></td>
                <td><?php echo $suministra['preciounit'];?></td>
                <td><?php echo $suministra['diassum'];?></td>
                <td><?php echo $suministra['descuento'];?></td>
            </tr>
            <?php
            }
            ?>
    </tbody>
</table>
</form>
<?php
include "../pie.inc";
?>