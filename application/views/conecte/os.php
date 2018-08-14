<?php

if(!$results){?>
	<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <h5>Ordenes de Servicio</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#O.S</th>
            <th>Técnico / Responsable</th>
            <th>Fecha Inicial</th>
            <th>Fecha Final</th>
            <th>Status</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td colspan="6">Ninguna OS Registrada</td>
        </tr>
    </tbody>
</table>
</div>
</div>
<?php } else{?>


<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <h5>Ordenes de Servicio</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#O.S</th>
            <th>Técnico / Responsable</th>
            <th>Fecha Inicial</th>
            <th>Fecha Final</th>
            <th>Status</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {
            $dataInicial = date(('d/m/Y'),strtotime($r->dataInicial));
            $dataFinal = date(('d/m/Y'),strtotime($r->dataFinal));
            echo '<tr>';
            echo '<td>'.$r->idOs.'</td>';
            echo '<td>'.$r->nome.'</td>';
            echo '<td>'.$dataInicial.'</td>';
            if($dataFinal ==  "30/11/-0001"){
                echo '<td>'.' No registrada '.'</td>';
                 }
                 else{
            echo '<td>'.$dataFinal.'</td>';
                }
            echo '<td>'.$r->status.'</td>';
            
            echo '<td><a href="'.base_url().'index.php/conecte/visualizarOs/'.$r->idOs.'" class="btn tip-top" title="Ver mas detalles"><i class="icon-eye-open"></i></a>
                  </td>';
            echo '</tr>';
        }?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>
	
<?php echo $this->pagination->create_links();}?>