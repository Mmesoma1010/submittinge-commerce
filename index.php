 <?php

$keusmazys = [
	['productname'=> 'shoes', 'productcolor' => 'blue', 'productlocation' => 'wears', 'shippingstatus' => 'paid','productpice' => 300],


	['productname'=> 'earrings', 'productcolor' => 'red', 'productlocation' => 'wears', 'shippingstatus' => 'paid','productpice' => 250 ],


    ['productname'=> 'samsung', 'productcolor' => 'black', 'productlocation' => 'accessories', 'shippingstatus' => 'paid','productpice' => 60000 ],


    ['productname'=> 'powerbank', 'productcolor' => 'white', 'productlocation' => 'accessories', 'shippingstatus' => 'paid','productpice' => 8000 ],


    ['productname' => 'bluetooth', 'productcolor' => 'black', 'productlocation' => 'accessories', 'shippingstatus' => 'paid','productpice' => 3000 ],


	['productname'=> 'boxer', 'productcolor' => 'green', 'productlocation' => 'wears', 'shippingstatus' => 'paid','productpice' => 700 ],


	['productname'=> 'sneakers', 'productcolor' => 'white', 'productlocation' => 'wears', 'shippingstatus' => 'paid','productpice' => 250000 ],


	['productname'=> 'gascooker', 'productcolor' => 'red', 'productlocation' => 'kitchenequipment', 'shippingstatus' => 'paid','productpice' => 50000 ],


	['productname'=> 'plates', 'productcolor' => 'white', 'productlocation' => 'kitchenequipment', 'shippingstatus' => 'paid','productpice' => 6000 ],


	['productname' => 'refrigirator', 'productcolor' => 'white', 'productlocation' => 'electronicgadget', 'shippingstatus' => 'paid','productpice' => 40000 ],



	['productname' => 'electricpot', 'productcolor' => 'sliver', 'productlocation' => 'electronicgadget', 'shippingstatus' => 'paid','productpice' => 6000],


	['productname'=> 'pressingiron', 'productcolor' => 'blue', 'productlocation' => 'electronicgadget', 'shippingstatus' => 'paid','productpice' => 4000 ],


	['productname'=> 'sink', 'productcolor' => 'white', 'productlocation' => 'kitchenequipment', 'shippingstatus' => 'paid','productpice' => 20000 ],


	['productname'=> 'spoons', 'productcolor' => 'gold', 'productlocation' => 'kitchenequipment', 'shippingstatus' => 'paid','productpice' => 5000 ],


	['productname'=> 'shirt', 'productcolor' => 'yellow', 'productlocation' => 'wears', 'shippingstatus' => 'paid','productpice' => 6000 ],


	['productname'=> 'carrot', 'productcolor' => 'orange', 'productlocation' => 'groceries', 'shippingstatus' => 'paid','productpice' => 300 ],


	['productname'=> 'cookies', 'productcolor' => 'chocolate', 'productlocation' => 'groceries', 'shippingstatus' => 'paid','productpice' =>1000 ],


	['productname'=> 'alcohol', 'productcolor' => 'black', 'productlocation' => 'groceries', 'shippingstatus' => 'paid','productpice' => 3500 ],


	['productname'=> 'bottlewater', 'productcolor' => 'white', 'productlocation' => 'groceries', 'shippingstatus' => 'free','productpice' => 1500 ],


	['productname'=> 'shoppingbag', 'productcolor' => 'pink', 'productlocation' => 'groceries', 'shippingstatus' => 'paid','productpice' => 150 ],


	['productname'=> 'eyeglass', 'productcolor' => 'black', 'productlocation' => 'wears', 'shippingstatus' => 'paid','productpice' => 600 ],
];

// foreach ($keusmazys as $keusmazy){

// 	if ($keusmazy['productpice'] < 351.00 && $keusmazy['productpice'] > 249.99) {
//  	   echo $keusmazy['productname'] . '-' .'$' . $keusmazy['productpice'] .'<br/>' . '<br/>';
//  	 }


//  }
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  	 <div>		
 		 <h2>product from $250.99 - $350.99</h2>
 	</div>
 	<div>
 		<?php foreach ($keusmazys as $keusmazy) { ?>

	<?php if ($keusmazy{'productpice'} < 351.00 && $keusmazy['productpice'] > 249.99) { ?>
		<h3 class="head"><?php echo $keusmazy['productname']; ?><h3> <h4 class="eye"><span>  -  </span> <span>$<?php echo $keusmazy['productpice']; ?></span><h4>
	

<?php } ?>
 		<?php } ?>
 	</div>
 
     


  </body>
  </html>

	



 