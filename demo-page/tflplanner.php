<?php

$from = 'Stansted Airport';

$dest = $_REQUEST['dest'];
//$dest = '76 Buckingham Palace Road, London, SW1W 9TQ';

$dest = preg_replace('/\s*,\s*/', '<br/>', $dest); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>London Journey Planner</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

    <div style="display:block; width:200px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:80%;  margin: 0 auto 0 auto;">
        <div style="display:block;">
        
            <strong style="color: rgb(36, 66, 102); text-align: center; display: block;">London Journey Planner</strong>
            <form action="http://journeyplanner.tfl.gov.uk/user/XSLT_TRIP_REQUEST2" id="jpForm" method="post" style="margin:5px 0 0 0 !important;padding:0 !important;">
                <input type="hidden" name="language" value="en" /> <!-- in language = english -->
                <input type="hidden" name="execInst" value="" />
                <input type="hidden" name="sessionID" value="0" /> <!-- to start a new session on JP the sessionID has to be 0 -->
                <input type="hidden" name="ptOptionsActive" value="-1" /> <!-- all pt options are active -->
                <input type="hidden" name="place_origin" value="London" /> <!-- London is a hidden parameter for the origin location -->
                <input type="hidden" name="place_destination" value="London" />
                
                <div style="margin: 15px 0 0px 0">
                    <b>From:</b>
                    <input type="text" name="name_origin" style="width:190px !important;" value="<?= $from ?>"/>
                </div>
                <div>
                    <select style="width:190px !important;" name="type_origin">
                        <option value="stop">Station or stop</option>
                        <option value="locator">Postcode</option>
                        <option value="address">Address</option>
                        <option value="poi">Place of interest</option>
                    </select>
                    <input type="hidden" name="name_destination" value="<?= $dest ?>"/>
                    <input name="type_destination" value="address" type="hidden" />
                    
                </div>
                <div style="margin: 15px 0 15px 0">
                    <b>To:</b> <br />
                    <?= $dest ?>
                </div>
                <input type="submit" title="Leave now" value="Leave now" style="width:190px !important;"/>
                <div style="margin-top:5px;text-align:center;">
                    <a style="text-decoration:none; color:#113B92;font-size:90%;background:#fffbfc;white-space:nowrap;" href="http://journeyplanner.tfl.gov.uk/user/XSLT_TRIP_REQUEST2?language=en&amp;ptOptionsActive=1" onclick="javascript:document.getElementById('jpForm').ptOptionsActive.value='1';document.getElementById('jpForm').execInst.value='readOnly';document.getElementById('jpForm').submit(); return false">Advanced options</a>
                </div>
            </form>
        </div>
        <img src="assets/images/tfl-icons.png" style="width: 200px; height: 20px;" />
    </div>
    
    
</body>
</html>

