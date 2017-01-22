<div class="panel panel-default">
    
    <div class="panel-heading">Lista de Categorias</div>
    
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th><?= $this->Paginator->sort('nombre', 'NOMBRE') ?></th>
                    <th><?= $this->Paginator->sort('orden', 'ORDEN') ?></th>
                    <th>IMAGEN</th>
                    <th width="100"></th>
                    <th width="100"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $categoria){ ?>
                <tr>
                    <td><?=$categoria->id?></td>
                    <td><?=$categoria->nombre?></td>
                    <td><?=$categoria->orden?></td>
                    <td><?=$this->Html->link('Editar', '/categorias/editar/'.$categoria->id, ['class'=>'btn btn-warning'])?></td>
                    <td><?=$this->Html->link('Eliminar', '/categorias/eliminar/'.$categoria->id, ['class'=>'btn btn-danger'])?></td>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <ul class="pagination">
         <!--                // Shows the page numbers-->
                         <?= $this->Paginator->numbers() ?>
         <!--                // Shows the next and previous links-->
                         <?= $this->Paginator->prev('« Anterior') ?>
                         <?= $this->Paginator->next('Siguiente »') ?>
                        </ul>
                    </td>
                    <td><span class="pagination text-center"><?= $this->Paginator->counter() ?></span></td>
                </tr>
            </tfoot>

        </table>
    </div>
    
    <div class="panel-footer">
        <?=$this->Html->link('Nuevo', '/categorias/registrar/', ['class'=>'btn btn-success'])?>
    </div>
    
</div>

