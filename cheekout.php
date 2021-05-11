
  
  <?php 
  require ('includes/function.php');
if(isset($_POST['id']) && isset($_POST['qte'])){
    $id=$_POST['id'];
    $qte=$_POST['qte'];
    $sql ="SELECT * FROM products where product_id = '$id'";
    $result =query($sql);
    $product =fetch_array($result);
    $_SESSION['products_'.$product['product_id']] = array(
        'id'=> $product['product_id'],
        'product'=> $product['product_title'],
        'price'=> $product['product_price'],
        'qte'=> $product['product_quantity'],
        'total' => $product['product_price'] * $qte,
    );
    $_SESSION['totaux'] += $_SESSION['products_'.$product['product_id']]['total'];
    $_SESSION['count'] += 1;
    redirect("cart.php");
}



?>