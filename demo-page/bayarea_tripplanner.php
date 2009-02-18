<?php

$from = 'SFO';

$dest_addr = $_REQUEST['dest_addr'];
$dest_city = $_REQUEST['dest_city'];

//$dest_addr = '1600 Amphitheatre Parkway';
//$dest_city = 'Mountain View';

$dest_addr = preg_replace('/\s*,\s*/', '<br/>', $dest_addr);
$dest_city = preg_replace('/\s*,\s*/', '<br/>', $dest_city);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Bay Area Trip Planner</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

 <body>
    
    
    <div style="display:block; width:200px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:80%;  margin: 0 auto 0 auto;">
        <div style="display:block;">
        
            <strong style="color: rgb(36, 66, 102); text-align: center; display: block;">Bay Area Trip Planner</strong>

            <form method="post" action="http://tripplanner.transit.511.org/mtc/XSLT_TRIP_REQUEST2?#tab1Selected">
                <input type="hidden" value="en" name="language"/>
                <input type="hidden" value="0" id="sessionID" name="sessionID"/>
                <input type="hidden" value="0" id="requestID" name="requestID"/>
                <input type="hidden" value="" name="command"/>
                <input type="hidden" value="1" name="verifyAnyLocViaLocServer"/>
                <input type="hidden" value="1" name="convertStopsPTKernel2LocationServer"/>
                <input type="hidden" value="20" name="anyHitListReductionLimit"/>
                <input type="hidden" value="secondStep" name="itdLPxx_homepage"/>
                <input type="hidden" value="1" name="useProxFootSearch"/>
                <input type="hidden" value="STRING" name="coordListOutputFormat"/>
                <input type="hidden" value="1" name="anySigWhenPerfectNoOtherMatches"/>
                <input type="hidden" value="normal" name="execInst"/>
                <input type="hidden" value="1" name="nextDepsPerLeg"/>
                <input type="hidden" value="" id="itdLPxx_additonalOptions" name="itdLPxx_additonalOptions"/>
                <input type="hidden" value="" id="railSystems" name="railSystems"/>
                <input type="hidden" value="PNG" name="imageFormat"/>
                <input type="hidden" value="250" name="imageWidth"/>
                <input type="hidden" value="200" name="imageHeight"/>
                <input type="hidden" value="500" name="imageWidthO"/>
                <input type="hidden" value="400" name="imageHeightO"/>
                <input type="hidden" value="1" name="imageOnly"/>
                <input type="hidden" value="1" name="imageNoTiles"/>
                <input type="hidden" value="" id="prevCommand" name="prevCommand"/>
                <input type="hidden" value="0" name="coordOutputFormatTail"/>
                <input type="hidden" value="" name="itdLPxx_findObjectBox"/>
                <input type="hidden" value="" name="itdLPxx_findObjectType"/>
                <input type="hidden" value="any" id="type_origin" name="type_origin"/>
                <input type="hidden" value="0" id="anyObjFilter_origin" name="anyObjFilter_origin"/>
                <input type="hidden" value="empty" id="nameState_origin" name="nameState_origin"/>
                <input type="hidden" value="empty" name="placeState_origin"/>
                <input type="hidden" value="invalid" id="nameInfo_origin" name="nameInfo_origin"/>
                <input type="hidden" value="any" id="type_destination" name="type_destination"/>
                <input type="hidden" value="0" id="anyObjFilter_destination" name="anyObjFilter_destination"/>
                <input type="hidden" value="empty" id="nameState_destination" name="nameState_destination"/>
                <input type="hidden" value="empty" name="placeState_destination"/>
                <input type="hidden" value="invalid" id="nameInfo_destination" name="nameInfo_destination"/>
                
                <input type="hidden" value="<?= $dest_addr ?>" id="name_destination" name="name_destination"/>
                <input type="hidden" value="<?= $dest_city ?>" id="place_destination" name="place_destination"/>
                                                            
        
                <div style="margin: 15px 0 0px 0">
                    <b>From:</b>									
                    <br/>
                    <input type="text" value="<?= $from ?>" id="name_origin" name="name_origin" style=" width: 190px;"/>
                    
                    <br/>
                    City				
                    <br/>
                    
                    <input type="text" value="" class="cityInput yui-ac-input" id="place_origin" name="place_origin" autocomplete="off" style="width:140px !important;"/>, CA
                </div>            
                                                            
                <div style="margin: 15px 0 15px 0">
                    <b>To:</b>					
                    <br/>
                    
                    <?= $dest_addr ?><br/>
                    <?= $dest_city ?>, CA
                    
                </div>
                
                <input type="submit" title="Leave now" value="Leave now" style="width:190px !important;"/>
            </form>

        </div>
    </div>
    

    </body>
</html>
