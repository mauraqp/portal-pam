<?php

$module   = 'role';
$moduledb = 'user_role';


if (isset($_GET['id'])){
	$id = $_GET['id'];	
	$dbedit = doquery("select * from ".$moduledb." where id='".$id."'");
	$row = $dbedit[0];
}



?>


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
			<div class="x_title">
                <h4><a href="index.php?go=<?php echo $module; ?>" title="Batal" alt="Batal"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> </a> EDIT HALAMAN<br> </h4>		
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a class="collapse-link" style="cursor: pointer;"><i class="fa fa-chevron-up"></i></a>
                    </li>                                        
                </ul>
                <div class="clearfix"></div>
            </div>

<div class="x_content"> 
<form class="form-horizontal" name="form_<?php echo $module; ?>" action="" method="POST">
							
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Role</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="nama_role" id="nama_role" value="<?php echo $row['nama_role']; ?>"/>
			</div>	
		</div>	
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Ordering</label>
			<div class="col-sm-7">
				<input type="text" name="ordering" class="form-control" value="<?php echo $row['ordering']; ?>" style="width: 50px;"/>
			</div>
		</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Published</label>
		<div class="col-sm-7">
		<?php
 echo widgetbackend('inputselect',	array('field'=>'published',
												'option'=>array('1'=>'Ya','0'=>'Tidak'))
								 ); ?>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">&nbsp;</label>
		<div class="col-sm-7">
			<input type="submit" value="Simpan" class="btn btn-primary" />
		</div>	
	</div>	

</form>				

		</div>			

				

		</div>	
 
	</div>

</div>