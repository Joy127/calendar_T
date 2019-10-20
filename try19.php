<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>萬年曆</title>

    <style>

            * {
                list-style-type: none;
                text-align: center;
                transition: 0.5s all;    
            }           
    
            .bg {                       
                background: #c6f697;       
            }
            /* 今天的背景設定 */
    
            .bg1 {                       
                background: #f8f489;       
                color: #FF0000;            
            }
            /* 節日的背景設定  有背景色  文字顏色﹕紅色 */
    
            .bg2 {                       
                color: #FF0000;            
            }
            /* 周末假日的背景設定 無背景色 文字顏色﹕紅色 */    
                
            table {
                border-collapse: separate;    
                border-spacing: 0;            
                border: none;                 
                margin: auto;                 
                font-size: 14px;            
                border-radius: 10px;          
                margin-top: 1rem;               
            }
            /* 邊框設為分離模式  separate設定後，
            可設border-spacing:表格欄位與邊框的距離，水平距離 垂直距離，水平垂直距離都為0             
            邊界:與上右下左四方元素之間的距離，由瀏覽器自動設定。此為置中對齊
            文字大小，rem相對單位，表示透過倍數承襲根元素的px。
            邊框四周為圓角
            邊界是在邊框之外，是用來設定各個元素之間的距離。上邊界，與上方元素距離1根輩倍。 */
    
            table td {
                border: none;
                padding: 10px;
                width: 75px;
                height: 25px;
                border-radius: 50%;
            }
    
            tr:first-child {
                font-size:16px;
                color: #707ac8;           
            }
            /* 星期列 */
    
            body {
                font-family: "微軟正黑體";               
                width: 100vw;
                height: 100vh;
                overflow: hidden;              
            }
             /* overflow設定當內容放不下時的處理方式 visible內容完全呈現，不管放得下放不下。 hidden放不下的內容就不顯示出來。
                scroll無論內容放得下放不下，都加入上下捲軸及左右捲軸的功能。 auto當內容放不下時，加上捲軸的功能。 */
    
            a {
                text-decoration: none;          
                font-size: 1.5rem;
            }
            /* text-decoration 文字裝飾無上下標線或中線 */
    
            .wrapper {              
                width:40vw;
                height:82vh;                       
                display: inline-block;                     
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);   
                background: white;
                border-radius: 20px;                       
                padding: 1rem; 
                margin:20px 15px 20px 5px;                                      
            }
            /* 白色主容器
            讓水平排列的區塊以block模式呈現，這樣就不會被後面的其它元素所覆蓋
            區塊陰影 (inset內陰影，不寫預設為外陰影) x軸水平 y軸垂直 模糊半徑 (擴散半徑，預設0) 陰影顏色
            邊框圓角  rem：相對單位，每個元素透過「倍數」乘以根元素的 px 值。 */

            /* 上一月表   */
            .table1 {
                width:250px;
                height:250px; 
                float:left;
                border:none;
                padding:0px;
                border-collapse: separate;    
                border-spacing: 0;            
                font-size: 2px;           
                margin: 5px 5px 70px; 
                background-color:white;
            }  

             /* 下一月表   */
            .table2 {
                width:250px;
                height:250px; 
                float:right;
                border:none;
                padding:0px;
                border-collapse: separate;    
                border-spacing: 0;            
                font-size: 2px;           
                margin: 5px 5px 70px; 
                background-color:white;
            }  
           
            /* 中間顯示 年月區 */
            .d-flex {                                                                                
                width:40%;
                height:40px;
                margin:auto; 
                display: inline-block;  
                justify-content:space-between;           
                background-color: #21cdf8;
                border-radius: 1rem;
                padding: 15spx;
                position: relative;                
            }             
            /* 主軸的對齊方式 space-between：每個小方塊擁有相同的間隔，但與父容器之間沒有間隔 */
     
            /* 使用者自行選擇區 */
            .query1 {               
                width:70px;
                height:25px;
                display: inline-block;  
                justify-content:space-between;
                border:3px soild;
                border-color:#21cdf8; 
                border-radius: 5px;
                padding: 2px;
                position: relative;  
                margin-top:10px;
            }
    
            .query2 {               
                width:50px;
                height:25px;
                display: inline-block;  
                justify-content:space-between;
                border:3px soild;
                border-color:#21cdf8; 
                border-radius: 5px;
                padding: 2px;
                position: relative;  
                margin-top:10px;
            }

            .query3 {              
                width:60px;
                height:25px;
                display: inline-block;  
                justify-content:space-between;
                border:3px soild;
                border-color:#21cdf8;
                border-radius: 5px;
                padding: 2px;
                position: relative;  
                margin-top:10px;
            }
    
            .prev {                        
                transform: rotate(180deg);    
                filter: invert(100%);         
                width: 20px;
                margin-left: 15px;
            }
            /* 左箭頭上一月圖   
            轉場變形 旋轉rotate(順時針180度旋轉)
            滤镜，反转输入图像。值定义转换的比例。100%是完全反转。0%则图像无变化 */
    
            .next {
                transform: rotate(0deg);
                filter: invert(100%);
                width: 20px;
                margin-right: 15px;
            }
            /* 右箭頭下一月圖 */   
           
            .center-word {                
                color: #ffffff;
                font-size: 1.2rem;
                padding:5px;
            }
            /* 顯示年月區塊內的文字 */

            /* 左側風景圖區  */
            .photo {
                float:left;
                width:46vw;
                height:90vh;  
                padding:20px 10px 20px 25px;
                margin:2% 0% 2% 3%;
                background-color:#eff4b5;
                background-size:content;
                background-repeat: no-repeat;
                border-radius:20px;               
                overflow:hidden; 
                box-sizing:border-box;
            }
            /* 當你設定一個元素樣式為 box-sizing: border-box;，這個元素的內距和邊框將不會增加元素本身的寬度。 */
           
            /* 右側程式顯示區  */
            .code {
                float:left;
                width:46vw;
                height:90vh;
                margin:2% 3% 2% 0%;
                background-color:#eff4b5;
                border-radius:20px;                
            }
    
            </style>    
    </head>
    
    <body>
            <?php             
                $year=isset($_GET['year'])?$_GET['year']:date('Y');
                $month=isset($_GET['month'])?$_GET['month']:date('m');
                                        
                $nextyear=$year;
                $nextmonth=$month+1;
                if($nextmonth>12){
                    $nextyear=$year+1;
                    $nextmonth=1;
                }
    
                $lastyear=$year;
                $lastmonth=$month-1;
                if($lastmonth<1){
                    $lastyear=$year-1;
                    $lastmonth=12;
                }    
            ?>
        
            <?php             
                if ((!empty($_POST[$year])) && (!empty($_POST[$month]))) {
                    $year=$_POST["year"];
                    $month=$_POST["month"];
                }
                    
                $nextyear=$year;
                $nextmonth=$month+1;
                if($nextmonth>12){
                    $nextyear=$year+1;
                    $nextmonth=1;
                }
    
                $lastyear=$year;
                $lastmonth=$month-1;
                if($lastmonth<1){
                    $lastyear=$year-1;
                    $lastmonth=12;
                }    
            ?>    
    
            <?php                                  
                switch ($month) {
                    case '1':
                        $sd=[1=>"元旦"];
                        $bgimg="img1.jpg";
                        break;
                    case '2':
                        $sd=[28=>"和平紀念日"];
                        $bgimg="img2.jpg";
                        break;
                    case '3':
                        $sd=[29=>"青年節"];
                        $bgimg="img3.jpg";
                        break;
                    case '4':
                        $sd=[4=>"婦幼節",5=>"清明節"];
                        $bgimg="img4.jpg";
                        break;
                    case '5':
                        $sd=[1=>"勞動節"];
                        $bgimg="img5.jpg";
                        break;
                    case '6':
                        $sd=[];
                        $bgimg="img6.jpg";
                        break;
                    case '7':
                        $sd=[];
                        $bgimg="img7.jpg";
                        break;
                    case '8':
                        $sd=[];
                        $bgimg="img8.jpg";
                        break;
                    case '9':
                        $sd=[];
                        $bgimg="img9.jpg";
                        break;
                    case '10':
                        $sd=[10=>"雙十節",25=>"光復節"];
                        $bgimg="img10.jpg";
                        break;
                    case '11':
                        $sd=[];
                        $bgimg="img11.jpg";
                        break;
                    case '12':
                        $sd=[25=>"行憲紀念日"];
                        $bgimg="img12.jpg";
                        break;                    
                }                
                
                $str=$sd;
                $g=$bgimg;
                $today=date("Y-m-d");
                $first=date("Y-m-d",mktime(0,0,0,$month,1,$year));    
                $totaldays=date("t", strtotime($first));
                $last=date("Y-m-d",mktime(0,0,0,$month,$totaldays,$year));  
                $weekf=date("w",strtotime($first));
                $weekl=date("w",strtotime($last));                         
                
            ?>

             <!-- 左側風景圖區  -->
            <div><?php echo "<img class='photo' src='./img/$g'>"; ?></div>            

              <!-- 右側程式顯示區  -->
            <div class="code">
                <div id="wrapper" class="wrapper">

            <!-- 上個月表單 -->
            <div>                
                <button class="table1">

                    <?php echo "$lastyear 年 $lastmonth 月" ?> 

                    <table  cellspacing="0">
                        <tr>
                        <th>日</th>
                        <th>一</th>
                        <th>二</th>
                        <th>三</th>
                        <th>四</th>
                        <th>五</th>
                        <th>六</th>
                        </tr>
            
                        <?php 
                            $lastfirst=date("Y-m-d",mktime(0,0,0,$lastmonth,1,$lastyear));    
                            $lasttotaldays=date("t", strtotime($lastfirst));
                            $lastlast=date("Y-m-d",mktime(0,0,0,$lastmonth,$lasttotaldays,$lastyear));  
                            $lastweekf=date("w",strtotime($lastfirst));
                            $lastweekl=date("w",strtotime($lastlast));  

                            for($i=(1-$lastweekf);$i<=$lasttotaldays;){
                                echo '<tr>';
                                    for($j=0;$j<7;$j++,$i++){
                                        if($i>$lasttotaldays || $i<1){
                                            echo "<td></td>"; 
                                        }else{
                                            if ($j==0 || $j==6) {
                                                echo "<td style='color:red'>{$i}</td>";
                                            }else {
                                                echo "<td>{$i}</td>"; 
                                            }                                            
                                        }
                                    }
                                echo '</tr>';
                            }
                        ?>
                    </table>
                </button>   
            </div>
            
            <!-- 下個月表單 -->
            <div>            
                <button class="table2">

                    <?php echo "$nextyear 年 $nextmonth 月" ?>  

                    <table  cellspacing="0">
                        <tr>
                        <th>日</th>
                        <th>一</th>
                        <th>二</th>
                        <th>三</th>
                        <th>四</th>
                        <th>五</th>
                        <th>六</th>
                        </tr>
            
                        <?php 
                            $nextfirst=date("Y-m-d",mktime(0,0,0,$nextmonth,1,$nextyear));    
                            $nexttotaldays=date("t", strtotime($nextfirst));
                            $nextlast=date("Y-m-d",mktime(0,0,0,$nextmonth,$nexttotaldays,$nextyear));  
                            $nextweekf=date("w",strtotime($nextfirst));
                            $nextweekl=date("w",strtotime($nextlast));  

                            for($i=(1-$nextweekf);$i<=$nexttotaldays;){
                                echo '<tr>';
                                    for($j=0;$j<7;$j++,$i++){
                                        if($i>$nexttotaldays || $i<1){
                                            echo "<td></td>"; 
                                        }else{
                                            if ($j==0 || $j==6) {
                                                echo "<td style='color:red'>{$i}</td>";
                                            }else {
                                                echo "<td>{$i}</td>"; 
                                            }         
                                        }
                                    }
                                echo '</tr>';
                            }
                        ?>
                    </table>
                </button>   
            </div>                
        
            <!-- 中間 年月顯示 上一月下一月 使用者自行選擇年月區  -->
            <div class="d-flex" >      
                <a href="try19.php?year=<?=$lastyear;?>&month=<?=$lastmonth;?>"> 
                    <img src="./img/arrow.png" class="prev">
                </a>                              

                <?php echo "<span class='center-word'>" . $year . "年" . $month . "月</span>"?>    

                <a  href="try19.php?year=<?=$nextyear;?>&month=<?=$nextmonth;?>">
                    
                    <img src="./img/arrow.png" class="next">
                </a>                                             
            </div>

            <div >        
                <form  action="try19.php" method="GET" style="font-size:14px">
                    請選擇<select name="year" class="query1">
                        <?php
                            for ($i=1901; $i<=2038 ; $i++) { 
                                echo "<option>$i</option>";
                            }
                        ?>
                    </select>年
                    <select name="month" class="query2">
                        <?php
                            for ($j=1; $j<=12 ; $j++) { 
                                echo "<option>$j</option>";
                            }
                        ?>
                    </select>月
                    <input class="query3" type="submit" value="查詢">
                </form>        
            </div>

        
            <hr> 
            <!-- 萬年曆主表區 -->
                <table>
                    <tr>
                        <th>日</th>
                        <th>一</th>
                        <th>二</th>
                        <th>三</th>
                        <th>四</th>
                        <th>五</th>
                        <th>六</th>
                    </tr>                
    
            <?php
    
                for ($i=(1-$weekf); $i<=$totaldays;) { 
                    echo "<tr>";
                    for ($j=0; $j<7; $j++) { 
    
                        if ($j==0 || $j==6) {
    
                            if ($i<1 || $i>$totaldays) {
                                echo "<td></td>";
                            }else {
                                if (!empty($sd[$i])) {
                                    $str=$sd[$i];
    
                                    $d=date("Y-m-d",mktime(0,0,0,$month,$i,$year));
                                    $t=$today;
                                    if ($d==$t) {
                                        echo "<td style='color:red' class='bg'>$i<br>$str</td>";
                                    }else {
                                        echo "<td class='bg1'>$i<br>$str</td>";
                                    }
    
                                }else {
                                    $str="";
                                    
                                    $d=date("Y-m-d",mktime(0,0,0,$month,$i,$year));
                                    $t=$today;
                                    if ($d==$t) {
                                        echo "<td style='color:red' class='bg'>$i<br>$str</td>";
                                    }else {
                                        echo "<td class='bg2'>$i<br>$str</td>";
                                    }
                                }
                            }  
                            $i++; 
                            
                        }else {
                            
                            if ($i<1 || $i>$totaldays) {
                                echo "<td></td>";
                            }else {
                                if (!empty($sd[$i])) {
                                    $str=$sd[$i];
    
                                    $d=date("Y-m-d",mktime(0,0,0,$month,$i,$year));
                                    $t=$today;
                                    if ($d==$t) {
                                        echo "<td class='bg'>$i<br>$str</td>";
                                    }else {
                                        echo "<td class='bg1'>$i<br>$str</td>";
                                    }
    
                                }else {
                                    $str="";
                                    
                                    $d=date("Y-m-d",mktime(0,0,0,$month,$i,$year));
                                    $t=$today;
                                    if ($d==$t) {
                                        echo "<td class='bg'>$i<br>$str</td>";
                                    }else {
                                        echo "<td>$i<br>$str</td>";
                                    }
                                }
                            }  
                            $i++; 
    
                        }
    
                    }
                    echo "</tr>";
                }
    
            ?>
            </table>
            </div> 
            </div>   

    </body>
    </html>