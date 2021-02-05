<?php
//初始化

$ch = curl_init();
//設定選項，包括URL

curl_setopt($ch, CURLOPT_URL, "https://data.coa.gov.tw/Service/OpenData/TransService.aspx?UnitId=tR9TIFWlvquB");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

//執行並獲取HTML文件內容
$output = curl_exec($ch);

//釋放curl控制代碼
curl_close($ch);

//列印獲得的資料
echo $output;
