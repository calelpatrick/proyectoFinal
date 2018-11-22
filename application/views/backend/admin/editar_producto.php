<?php
  $info = $this->db->get_where('productos' , array('codigo' => $codigo))->result_array();
  foreach($info as $row):?>
  <div class="content-w">
    <div class="os-tabs-w menu-shad">
	<div class="os-tabs-controls">
	  <ul class="nav nav-tabs upper">
		<li class="nav-item">
		  <a class="nav-link" href="<?php echo base_url();?>admin/productos/">Manejar productos</a>
		</li>
	  </ul>
	</div>
  </div>
  <div class="content-i">
    <div class="content-box">
      <div class="element-box shadow">
 <?php echo form_open(base_url() . 'admin/productos/update/'.$row['codigo'] , array('class' => 'panel-body form-horizontal form-padding', 'enctype' => 'multipart/form-data'));?>
          <h5 class="form-header">Actualizar producto</h5><br>
          <div class="form-group">
            <label for=""> Nombre del producto</label><input class="form-control" type="text" name="name" value="<?php echo $row['name'];?>">
          </div>
          <div class="form-group">
            <label for=""> Precio</label><input class="form-control" type="number" name="precio" value="<?php echo $row['precio'];?>">
          </div>
          <div class="form-group">
            <label for=""> Categoría</label>
              <select class="form-control" required name="categoria">
              <option value="">Seleccione</option>
              <?php $categories  = $this->db->get('category')->result_array();
                foreach($categories as $row2):
              ?>
                <option value="<?php echo $row2['category_code'];?>" <?php if($row2['category_code'] == $row['category_code']) echo "selected";?>><?php echo $row2['name'];?></option>
              <?php endforeach;?>
            </select>
          </div>
          <div class="form-group">
            <label for=""> Código de producto</label><input class="form-control" type="text" name="cod_producto" value="<?php echo $row['codigo_producto'];?>">
          </div>
          <div class="form-group">
            <label for=""> Stock </label><input class="form-control" type="text" name="stock" value="<?php echo $row['stock'];?>">
          </div>

		      <div class="form-group">
              <label> Descripción</label><textarea id="ckeditor1" class="form-control" rows="4" name="descripcion" required=""><?php echo $row['description'];?></textarea>
          </div>

          <div class="form-buttons-w">
            <button class="btn btn-success" type="submit"> Actualizar</button>
          </div>
        <?php echo form_close();?>
    </div>
	</div></div>
</div>
<?php endforeach;?>