﻿<?php
	$sql = "SELECT * FROM mathang";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$mahang = $row["MAHANG"];
			$tenhang = $row["TENHANG"];
			$giatien = $row["GIA"];
			
			echo "<div class='product-item'>
				<div class='product-img' style='background-image: url(img/product/$mahang.jpg);'>
					<div class='product-money'> $giatien VNĐ </div>
					<div class='product-addtocart'><img src='img/icon/cart.png' height='13'/></div>
				</div>
				<div class='product-name'>
					$tenhang
				</div>
			</div>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
?>

<style>
.atcart {
	
}
.product-item {
	position: relative;
    display: inline-block;
    width: 180px;
    height: 240px;
    border-radius: 2px;
    overflow: hidden;
    margin: 5px;
	cursor: pointer;
    box-shadow: 0 1px 10px 0 rgba(0, 0, 0, .1), 0 5px 10px 0 rgba(0, 0, 0, .1);
}
.product-img{
	position: absolute;
    top: 0;
    left: 0;
    width: 180px;
    height: 180px;
	background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}
.product-money{
	position: absolute;
	background: rgba(230, 74, 25, 0.75);
    font-size: 13px;
    line-height: 10px;
    padding: 8px;
    right: 0;
    top: 0;
    color: #FFF;
	border-radius: 0 0 0 3px;
}
.product-name{
	position: absolute;
    bottom: 0;
    left: 0;
    width: 170px;
    height: 50px;
    padding: 5px;
    background: #90A4AE;
    color: #fff;
    font-weight: normal;
    text-align: center;
    font-size: 14px;
    text-transform: uppercase;
    line-height: 50px;
}
.product-addtocart{
	position: absolute;
    background: #FF9800;
    font-size: 10px;
    line-height: 10px;
    padding: 3px 5px 3px 3px;
    left: 0;
    color: white;
    top: 0;
    text-align: center;
	border-radius: 0 0 3px 0;
}
</style>