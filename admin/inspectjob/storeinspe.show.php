<?php
    require_once '../../myERP/inc.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM store WHERE id = $id ;";
    $query=mysql_query($sql);
//    echo $sql;
    if($query && mysql_num_rows($query)){
        $data = mysql_fetch_assoc($query);
    }else{
        echo "没有此库房！";
        exit;
    }
    
    $sql2 = "SELECT * FROM meterial WHERE storeid= $id ORDER BY id DESC ;";
    $query2 = mysql_query($sql2);
    if($query2 && mysql_num_rows($query2)){
        while($row2 = mysql_fetch_assoc($query2)){
            $data2[]=$row2 ;
        }
    }else{
        $data2=array();
    }
?>
<html>
<head>
<link href="../../common/subframe.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>库房信息</h3>
    <div id="showcontent">
            <table class="storetitle" width="1200" border="1" cellpadding="8" cellspacing="1"
			bgcolor="#EEEEEE">
			<tr>
				<th width="100" bgcolor="#a1a3a6">库房名</th>
				<td width="100" align="center"  ><?php echo $data['storename']?></td>
				<th width="100" bgcolor="#a1a3a6">库房管理员</th>
				<td width="100" align="center" ><?php echo $data['manager'];?></td>
				<th width="180" bgcolor="#a1a3a6">库房物料总数量（件）</th>
				<td width="40" align="center" ><?php echo $data['allsum']?></td>
			</tr>
            </table>
            <?php 
            if(empty($data2)){
                echo "<h2>没有物料记录</h2>";
                }else{
                
            ?>
            <h3>库存物料清单</h3>
             <table width="1200" border="1" cellpadding="8" cellspacing="1" bgcolor="#EEEEEE">
            <tr>
				<th width="200" bgcolor="#EEEEEE">物料名</th>
				<th width="150" bgcolor="#EEEEEE">物料编号</th>
				<th width="150" bgcolor="#EEEEEE">物料数量（件）</th>
				<th width="100" bgcolor="#EEEEEE">物料入库日期</th>
			</tr>
            <?php 
                            foreach ($data2 as $value){
                    ?>
                    
             <tr>
				<td width="200" ><?php echo $value['meterialname']?></td>
				<td width="150" ><?php echo $value['meterialnumber']?></td>
				<td width="150" ><?php echo $value['sum']?></td>
				<td width="100" ><?php echo date("Y-m-d H:i:s", $value['adddate']);?></td>
			</tr>     
            
            
            <?php  
                            }
                        }
                    ?>        
            </table>
    </div>
</body>
</html>