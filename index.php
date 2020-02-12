<?php 

    include 'food.php';
    include 'order.php';
    
    $order = new Order();
    // ini_set('display_errors', true);
?>

<!DOCTYPE html>
<html lang="en">
    <head>    
        <title>P3 Food Truck</title>
    </head>
    <body>
        <div>
            <h1>Food Truck</h1>
            <section>
                <form action="" method="post">
                    <?php 
                        foreach($items as $item){
                            echo '<div>	
                                        <h3>'.$item->name.'</h3>
                                        <p>'.$item->description.'</p>
                                        <select name="'.$item->name.'">
                                                <option value="0">Qty:</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </select>
                                        <br><br>
                                </div>';
                            if(isset($_POST["calculate"])){
                                //the ice cream has a space in its name so we have to replace that to avoid error
                                $item->quantity = $_POST[str_replace(' ','_',$item->name)];
                            }
                        }
                    ?>
                    <div>
                        <input type="submit" name="calculate" value="Update cart and view your order summary" />
                    </div>   
                </form>
            </section>
            <aside>
                <h1>Order Summary<br></h1>
                    <p>
                        <?php 
                                foreach($items as $item){
                                    if($item->quantity > 0){
                                        echo $item->name.' : ' . $item->quantity . ' * ' . $item->price . '<br>';
                                    }
                                }
                        ?>
                </p>

                <?php
                    $subtotal = $order->getSubtotal($items);
                    echo 'Subtotal: $' . $subtotal . '<br>';
                    $tax = $order->getTax($items);
                    echo 'Tax: $' . $tax . '<br>';
                    $total = $order->getTotal($items);
                    echo 'Total: $' . $total . '<br><br>';
                ?>

                <a href="">Work Log Link here</a><br /><br />
                <a href="">GitHub Repo Link here</a>
            </aside>
        </div>
    </body>
</html>