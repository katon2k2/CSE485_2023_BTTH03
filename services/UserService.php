<?php
	require_once(PATCH_ROOT . '/configs/PdoConnect.php');
	require_once(PATCH_ROOT . '/models/User.php');

	class UserService
	{
		public function checkUser($otherUser){
			$DBconnect = new PdoConnect();
			$conn = $DBconnect->getConnect();
			$sql = "SELECT * FROM user WHERE user.ten_dnhap LIKE '{$otherUser->getUserName()}' AND user.mat_khau LIKE '{$otherUser->getPassword()}'";
    		$stmt = $conn->query($sql);
    		while($row = $stmt->fetch()){
    			if($row['ten_dnhap']==$otherUser->getUserName() AND $row['mat_khau']==$otherUser->getPassword()){
                	return true;
            	}
            	else{
            		return false;
           		}
    		}
		}

		public function getNumbersUser(){
			$DBconnect = new PdoConnect();
			$conn = $DBconnect->getConnect();
			$sql = "SELECT COUNT(user.ma_ngdung) AS 'so_luong' FROM user";
    		$stmt = $conn->query($sql);
    		$numbersUser = 0;
    		while($row = $stmt->fetch()){
    			$numbersUser = $row['so_luong'];
    		}
    		return $numbersUser;
		}
	}
?>