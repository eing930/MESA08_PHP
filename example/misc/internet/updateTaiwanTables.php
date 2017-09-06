<?php
//該程式的功能：
//1.以name欄位相同來比對兩個表格內的資料。2.1用表格2的資料更新表格一的資料，（若直接用表格2的資料，表格1的原來的資料便會遺失）
//2.2也可將兩個表的差值（表格2﹣表格1）「name相同的情況下」，轉成json檔案2.3差值也要存在數據庫
//鏈接資料庫
//file_get_contents這個方法只認識http的請求
//從網路上抓新的資料
$xmlSourceActivity = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/activity_C_f.xml"); 
//不用存在本地路徑也可以抓到資料
//file_put_contents("activity.xml", $xmlSourceActivity); 
$xmlActivity = new SimpleXMLElement($xmlSourceActivity);
require_once('Connections/conn.php');
//$arr is making Json
$arr = array();
//$data saving table1's data
$data = array();
//從資料庫拿出原來的資料
$originalTables = getTables($pdo);
$originalActivity = getActivity($pdo);
$originalHotel = getHotel($pdo);
$originalScenicSpot = getScenicSpot($pdo);
$originalRestaurant = getRestaurant($pdo);
$aa = $xmlActivity->Infos->Info[0]->attributes()->Name;
$headUpdateTime = $xmlActivity->XML_Head[0]->attributes()->updatetime;
//$headUpdateTime = $xmlActivity->XML_Head[0]->attributes();
//echo "headUpdateTime is" . $headUpdateTime . "</br>";
echo "aa is" . $aa;
//Info是一個陣列，每個one都是一筆活動資料
foreach($xmlActivity->Infos->Info as $one){

	$everyAttributes = $one->attributes();

	$id = (string)($everyAttributes->Id);
	$Name = (string)($everyAttributes->Name);
	$Description = (string)($everyAttributes->Description);
	$Participation = (string)($everyAttributes->Particpation);
	$Location = (string)($everyAttributes->Location);
	$Address = (string)($everyAttributes->Add);
	$Org = (string)($everyAttributes->Org);
	$Start = (string)($everyAttributes->Start);
	$End = (string)($everyAttributes->End);
	$Website = (string)($everyAttributes->Website);
	$Px = (string)($everyAttributes->Px);
	$Py = (string)($everyAttributes->Py);
	$TravellingInfo = (string)($everyAttributes->Travellinginfo);
	$Picture1 = (string)($everyAttributes->Picture1);
	$Picdescribe1 = (string)($everyAttributes->Picdescribe1);
	$Picture2 = (string)($everyAttributes->Picture2);
	$Picdescribe2 = (string)($everyAttributes->Picdescribe2);
	$Picture3 = (string)($everyAttributes->Picture3);
	$Picdescribe3 = (string)($everyAttributes->Picdescribe3);
	$UpdateDate = "2015-05-11";
	$DidDelete = 0;
	//這個ID資料是否為新增資料
	$isNewId = ture;
	//再從資料庫拿出原來的活動資料
	foreach ( $originalActivity as $row ) {
		list ( $DBActivityID,$DBName,$DBDescription,$DBParticipation,$DBLocation, $DBAddress, $DBOrg, $DBStart, $DBEnd, $DBWebsite, $DBPx, $DBPy, $DBTravellingInfo, $DBUpdateDate, $DBDidDelete, $DBPicture1, $DBPicdescribe1
		, $DBPicture2, $DBPicdescribe2, $DBPicture3, $DBPicdescribe3 ) = $row;
		
		//再比對data1和data2，若是name相同，裡面的值又不同則用data2 update data1
		//strcmp ( $data ['name'], $name )兩個字串若是相等得0
		if (strcmp ( $DBActivityID, $id ) == 0) {
			//echo "the same ID " . $id . "</br>";
			//這個ID對應的資料不是新增資料
			$isNewId = false;
			//ID相同如果有屬性值不同就更新（不包括屬性：UpdateDate）
			if ($DBName != $Name || $DBDescription != $Description || $DBParticipation != $Participation || $DBLocation != $Location || $DBAddress != $Address || $DBOrg != $Org
				 || $DBStart != $Start || $DBEnd != $End || $DBWebsite != $Website
				  || $DBPx != $Px || $DBPy != $Py || $DBTravellingInfo != $TravellingInfo
				   || $DBDidDelete != $DidDelete || $DBPicture1 != $Picture1
				    || $DBPicdescribe1 != $Picdescribe1 || $DBPicture2 != $Picture2 || $DBPicdescribe2 != $Picdescribe2
				     || $DBPicture3 != $Picture3 || $DBPicdescribe3 != $Picdescribe3) 
			{
				// if ($DBName != $Name || $DBDescription != $Description || $DBParticipation != $Participation || $DBLocation != $Location || $DBAddress != $Address || $DBOrg != $Org) {
				// 	echo "in 1th line </br>";
				// }
				// if ($DBStart != $Start || $DBEnd != $End || $DBWebsite != $Website) {
				// 	echo "in 2th line </br>";
				// }
				// if ($DBPx != $Px || $DBPy != $Py || $DBTravellingInfo != $TravellingInfo) {
				// 	echo "in 3th line </br>";
				// }
				// if ($DBDidDelete != $DidDelete || $DBPicture1 != $Picture1) {
				// 	echo "in 4th line </br>";
				// }
				// if ($DBPicdescribe1 != $Picdescribe1 || $DBPicture2 != $Picture2 || $DBPicdescribe2 != $Picdescribe2) {
				// 	echo "in 5th line </br>";
				// }
				// if ($DBPicture3 != $Picture3 || $DBPicdescribe3 != $Picdescribe3) {
				// 	echo "in 6th line </br>";
				// }
				echo "update ID: " . $id . "</br>";
				//資料庫更新
				$update = ("UPDATE activity SET Name='$Name',Description='$Description'
				,Participation='$Participation',Location='$Location',Address='$Address'
				,Org='$Org',Start='$Start',End='$End'
				,Website='$Website',Px='$Px',Py='$Py'
				,TravellingInfo='$TravellingInfo',UpdateDate='$UpdateDate',DidDelete='$DidDelete'
				,Picture1='$Picture1',Picdescribe1='$Picdescribe1',Picture2='$Picture2'
				,Picdescribe2='$Picdescribe2',Picture3='$Picture3',Picdescribe3='$Picdescribe3' WHERE ActivityID='$id'");
				$pdoStmt = $pdo->prepare ( $update );
				$pdoStmt->execute ();
				//差值存入新的陣列
				// $data2 = array();
				// $data2['foodID'] = $row['foodID'];
				// $data2['name'] = $row['name'];
				// $data2['price'] = $row['price'];
				// $data2['description'] = $row['description'];
				// $data2['calories'] = $row['calories'];
				//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
				//array_push($arr, $data2);
				
			}
			break;
		}
	}
	//如果是新增的資料則
	if (isNewId == ture) {
		try {
			echo "<br/>inside<br/>";
			//table1
			//$insertSQL = "Insert Into breakfast_menu (foodID,name,price,description,calories) "."values(null, ?, ?, ?, ?)";
			//table2
			$insertSQL = "Insert Into activity (ActivityID,Name,Description,Participation,Location,Address,Org,Start,End,Website,Px,Py,TravellingInfo,UpdateDate,DidDelete) "."values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";//15
			//INSERT INTO `taiwan_travel`.`breakfast_menu` (`foodID`, `name`, `price`, `description`, `calories`) VALUES (NULL, 'hebaodan', '33.3', 'asdaldkjaskld', '100');
			// 選擇要存取的資料庫
			$pdoStmt = $pdo->prepare($insertSQL);
			$pdoStmt->bindValue(1, $id, PDO::PARAM_STR);
			//沒有給小數值的參數，只能用String
			$pdoStmt->bindValue(2, $name, PDO::PARAM_STR);
			$pdoStmt->bindValue(3, $Description, PDO::PARAM_STR);
			$pdoStmt->bindValue(4, $Particpation, PDO::PARAM_STR);
			$pdoStmt->bindValue(5, $Location, PDO::PARAM_STR);
			$pdoStmt->bindValue(6, $Add, PDO::PARAM_STR);
			$pdoStmt->bindValue(7, $Org, PDO::PARAM_STR);
			$pdoStmt->bindValue(8, $Start, PDO::PARAM_STR);
			$pdoStmt->bindValue(9, $End, PDO::PARAM_STR);
			$pdoStmt->bindValue(10, $Website, PDO::PARAM_STR);
			$pdoStmt->bindValue(11, $Px, PDO::PARAM_STR);
			$pdoStmt->bindValue(12, $Py, PDO::PARAM_STR);
			$pdoStmt->bindValue(13, $Travellinginfo, PDO::PARAM_STR);
			$pdoStmt->bindValue(14, $UpdateDate, PDO::PARAM_STR);
			$pdoStmt->bindValue(15, $DidDelete, PDO::PARAM_INT);
			$pdoStmt->execute();
		
			// 請MySQL執行此 $insertSQL 命命
			$result = $pdoStmt->rowCount();
			echo "<br/>here<br/>";
			echo "result:$result<br/>";
			if ($result==1) {
				// $pdoStmt->rowCount(); 取得執行先前之SQL命令所影響的紀錄個數
				// 1: 表示新增成功(有1筆紀錄)
				// 0: 表示新增失敗(有0筆紀錄)
				echo '書籍新增成功';
				//跳轉回tableWork.php
				//header('Location: ../tableWork.php');
			}
		} 
		catch(PDOException $ex){
			echo "wrong";
			if ( strpos($ex->getMessage(), 'title') != false ) {
				echo '標題已存在'; //此錯誤經常會出現，要單獨處理
			} else {
				// 此為存取資料庫時發生其它的錯誤，如網路未開，....
				echo '資料庫錯誤:';
			}
		}
	}
}


//從table1中一筆一筆的取出資料
// foreach ($Result1 as $row1){
// 	//先從table1取出一筆資料data1
// 	$data['foodID'] = $row1['foodID'];
// 	$data['name'] = $row1['name'];
// 	$data['price'] = $row1['price'];
// 	$data['description'] = $row1['description'];
// 	$data['calories'] = $row1['calories'];

// 	//再從table2中一筆一筆的取出資料data2
// 	$Result2 = getBreakfastMenuLast ( $pdo );
// 	foreach ( $Result2 as $row2 ) {
// 		list ( $foodID, $name, $price, $description, $calories ) = $row2;
// 		//再比對data1和data2，若是name相同，裡面的值又不同則用data2 update data1
// 		//strcmp ( $data ['name'], $name )兩個字串若是相等得0
// 		if (strcmp ( $data ['name'], $name ) == 0) {
// 			if ($data ['price'] != $price || $data ['description'] != $description || $data ['calories'] != $calories) {
// 				//資料庫更新
// // 				$update = ("UPDATE breakfast_menu SET price='$price',description='$description',calories='$calories' WHERE name='$name'");
// // 				$pdoStmt = $pdo->prepare ( $update );
// // 				$pdoStmt->execute ();
// 				$data2 = array();
// 				$data2['foodID'] = $row2['foodID'];
// 				$data2['name'] = $row2['name'];
// 				$data2['price'] = $row2['price'];
// 				$data2['description'] = $row2['description'];
// 				$data2['calories'] = $row2['calories'];
// 				//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
// 				array_push($arr, $data2);
				
// 			}
// 			break;
// 		}
// 	}
// }
// echo json_encode($arr);

?>
<?php //TODO:找出table1 和 table2 的差值，轉存成json檔案，再傳給手機端
// foreach($xmlActivity->Infos->Info[0]->attributes() as $a => $b)
//   {
//   echo $a,'="',$b,'"';
//   }
// echo '<br />' . $aa;
// foreach($xmlActivity->info as $one)
// {
// 	$everyOne = $one->attributes();
// 	$id = (string)($everyOne->Id);
// 	echo '<br />' . $id;
// }
?>

