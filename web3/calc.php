<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <?php
        
        if (is_numeric($_POST['fvalue']) && is_numeric($_POST['svalue'])){
            $fnum = ($_POST['fvalue']);
            $snum = ($_POST['svalue']);
            
        if(isset($_POST['calcu'])){
            $sign = $_POST['calcu'];
        
    switch($sign){
        case $sign== "+":
           $total = $fnum + $snum;
            break;
        case $sign == '-':
           $total = $fnum - $snum;
            break;
        case $sign == '*':
            $total = $fnum * $snum;
            break;
        case $sign == '/':
            $total = $fnum / $snum;
                }
                echo "Calculation result: $total";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>