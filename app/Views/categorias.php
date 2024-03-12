                  <?php foreach ($productos as $i => $producto) {  ?>    
                    <tr>
                      <td><?= $categoria["id"]; ?> </td>
                      <td><?= $categoria["nombre"]; ?> </td>
                      <td>
                        <img style="width:50px;" src="<?= $categoria['imagen']; ?>" />
                      </td>
                      <td>
                    </tr>
                 <?php }  ?>
