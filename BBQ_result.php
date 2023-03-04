<meta charset="utf8">
<?php
	if(isset($_POST["id"])){
		$id=$_POST["id"];
		$name=$_POST["name"];
		$gender=$_POST["gender"];

		echo "你的學號是:".$id. "<br/>";
		echo "你的姓名是:".$name. "<br/>";

		if($gender=="male"){
			echo "性別:男<br/>";
		}else{
			echo "性別:女<br/>";
		}

		echo "參加意願:";

		if(isset($_POST["yes"])){
			$yes=$_POST["yes"];
			echo "是<br/>";
		}else{
			echo "否<br/>";
		}

		if(isset($_POST["email"])){
			$email=$_POST["email"];
			echo "你的email:".$email. "<br/>";
		}
		if(isset($_POST["tel"])){
			$tel=$_POST["tel"];
			echo "你的電話:".$tel. "<br/>";
		}

		$city=$_POST["city"];
		echo "您的居住地:";
		foreach($city as $value){
			echo $value." ";
		}

		echo "<br/>";

		if(isset($_POST["coke"])){
			$coke=$_POST["coke"];
			echo "可樂, ";
		}
		if(isset($_POST["sprite"])){
			$sprite=$_POST["sprite"];
			echo "雪碧, ";
		}
		if(isset($_POST["applesoda"])){
			$applesoda=$_POST["applesoda"];
			echo "蘋果西打";
		}
		
		echo "<br>";

		$comment=$_POST["comment"];
		echo "您的建議:<br/>";
		echo nl2br(strip_tags($comment));

	}else{
		echo "資料有誤";
	}
?>