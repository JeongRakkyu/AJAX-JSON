<?php
    $bb = file_get_contents('http://asp1.krx.co.kr/servlet/krx.asp.XMLSise?code=067630');
    $bb = trim($bb);
    $bb = simplexml_load_string($bb);
    $bb = json_encode($bb);

    echo $bb;
    //console.log(parseInt(doc1.TBL_Hoga['@attributes'].medoJan0.split(',').join('')) + parseInt(doc1.TBL_Hoga['@attributes'].medoJan1.split(',').join('')) + parseInt(doc1.TBL_Hoga['@attributes'].medoJan2.split(',').join('')) + parseInt(doc1.TBL_Hoga['@attributes'].medoJan3.split(',').join('')) + parseInt(doc1.TBL_Hoga['@attributes'].medoJan4.split(',').join('')));
    //console.log(parseInt(doc1.TBL_Hoga['@attributes'].mesuJan0.split(',').join('')) + parseInt(doc1.TBL_Hoga['@attributes'].mesuJan1.split(',').join('')) + parseInt(doc1.TBL_Hoga['@attributes'].mesuJan2.split(',').join('')) + parseInt(doc1.TBL_Hoga['@attributes'].mesuJan3.split(',').join('')) + parseInt(doc1.TBL_Hoga['@attributes'].mesuJan4.split(',').join('')));</script>";
?>