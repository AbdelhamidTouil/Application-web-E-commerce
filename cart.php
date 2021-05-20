<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">


<div class="row">

    <div class="col-md-12">
        <div class="card mt-2 mb-3 mx-2">
        <table class ="table table-hover">
               
               <thead>
                   <td>Produit</td>
                   <td>Prix</td>
                   <td>Qte</td>
                   <td>Totale</td>
                   <td>Action</td>
               </thead>
</table>

        <?php
               
               foreach($_SESSION as $name => $product){
                   ?>
                   <?php
               if(substr($name,0,9)=="products_"){
                  
                   ?>
            <table class ="table table-hover">
               
            
            <tbody>
                <td>  
                     <?php  echo !empty($product['product'])? $product['product']:""?> 
            
               </td>
                <td>
                <?php  echo !empty($product['price'])? $product['price']:""?> 
                </td>
                <td>
                <?php  echo !empty($product['qte'])? $product['qte']:""?> 
                </td>
                <td>
                <?php  echo !empty($product['total'])? $product['total']:""?> 
                </td>
                <td>
                    <a href="cancel_cart.php?id=<?php  echo !empty($product['id'])? $product['id']:""?>&price=<?php  echo !empty($product['total'])? $product['total']:""?> " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tbody>
            </table>
            <?php  }?>
                








            <?php  }?>
            <div class="row">
<div class="col-md-4-auto">
    <table class="table">
        <thead>
            <th>products</th>
            <th>total HT</th>
        </thead>
        <tbody>
            <td>
                  <?php  echo !empty($_SESSION['count'])? $_SESSION['count']:""?> 
            </td>
            <td class="text-danger font-weight-bold">
                
            <?php  echo !empty($_SESSION['totaux'])? $_SESSION['totaux'].'dh':""?> 
            </td>
        </tbody>
    </table>
</div>
        </div>
        </div>
      
        
    </div>
</div>




<?php
include('includes/footer.php');
 ?>