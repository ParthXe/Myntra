<?php
$asset_path = ASSET_PATH;
header("Content-type: text/xml");
if($type == "outlander")
{
	$xml_output = "<?xml version=\"1.0\"?>\n"; 
	$xml_output .= "<config>\n";
	$xml_output .= "<ModuleType><![CDATA[".$type."]]></ModuleType>\n";
	$xml_output .= "<jsonProdFilters><![CDATA[".$configURLInfo['jsonProdFilters']."]]></jsonProdFilters>\n";
	$xml_output .= "<jsonProdLooks><![CDATA[".$configURLInfo['jsonProdLooks']."]]></jsonProdLooks>\n";
	$xml_output .= "<rowCounts>".$configURLInfo['rowCounts']."</rowCounts>\n";
	$xml_output .= "<timeOutSec>".$configURLInfo['timeOutSec']."</timeOutSec>\n";
	$xml_output .= "<productType>".$configURLInfo['productType']."</productType>\n";
	
	$xml_output .= "<screensaver>\n";
	$xml_output .= "\t\t<bgPath posX='0' posY='0' width='1080' height='1920'><![CDATA[".$asset_path."screensaver/".$type."/".$screensaverinfo['bgPath']."]]></bgPath>\n";
	$xml_output .= "\t\t<exploreBtnPath posX='300' posY='1400'><![CDATA[".$asset_path."screensaver/".$type."/".$screensaverinfo['exploreBtnPath']."]]></exploreBtnPath>\n";
	$xml_output .= "</screensaver>\n";
	
	$xml_output .= "<collectionVideo>\n";
	$xml_output .= "\t\t<bgPath posX='0' posY='0' transparency='.9'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['bgPath']."]]></bgPath>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<scrtext posX='250' posY='1100' width='550' height='600'><![CDATA[".$collectionvideoinfo['scrtext']."]]></scrtext>\n";
	$xml_output .= "\t\t<insttext posX='250' posY='1025' width='750' height='400'><![CDATA[".$collectionvideoinfo['insttext']."]]></insttext>\n";
	$xml_output .= "\t\t<screenvideo posX='40' posY='200' width='1000' height='800'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['screen_video']."]]></screenvideo>\n";
	//$xml_output .= "\t\t<outLandervideo posX='150' posY='750' width='800' height='600'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['outLandervideo']."]]></outLandervideo>\n";
	$xml_output .= "\t\t<buttonImage posX='270' posY='1600'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['buttonImage']."]]></buttonImage>\n";
	$xml_output .= "\t\t<closeImageButton posX='950' posY='100'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['closeImageButton']."]]></closeImageButton>\n";
	$xml_output .= "</collectionVideo>\n";
	
	$xml_output .= "<genderSelection>\n";
	$xml_output .= "\t\t<image1 posX='0' posY='0'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image1']."]]></image1>\n";
	$xml_output .= "\t\t<image2 posX='0' posY='960'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image2']."]]></image2>\n";
	$xml_output .= "\t\t<thunderimage posX='0' posY='950'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['thunderImage']."]]></thunderimage>\n";
	$xml_output .= "\t\t<image1Disabled posX='0' posY='0'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image1Disabled']."]]></image1Disabled>\n";
	$xml_output .= "\t\t<image2Disabled posX='0' posY='960'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image2Disabled']."]]></image2Disabled>\n";
	$xml_output .= "</genderSelection>\n";
	
	$xml_output .= "<roadSterSlection>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<collectionMenImage posX='0' posY='260'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['collectionMenImage']."]]></collectionMenImage>\n";
	$xml_output .= "\t\t<catalogueMenImage posX='444' posY='1000'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['catalogueMenImage']."]]></catalogueMenImage>\n";
	$xml_output .= "\t\t<collectionWomenImage posX='0' posY='260'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['collectionWomenImage']."]]></collectionWomenImage>\n";
	$xml_output .= "\t\t<catalogueWomenImage posX='443' posY='1000'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['catalogueWomenImage']."]]></catalogueWomenImage>\n";
	$xml_output .= "\t\t<collectionHeadingTxt posX='650' posY='330'><![CDATA[".$roadsterselectioninfo['collectionHeadingTxt']."]]></collectionHeadingTxt>\n";
	$xml_output .= "\t\t<collectionTxt posX='650' posY='400'><![CDATA[".$roadsterselectioninfo['collectionTxt']."]]></collectionTxt>\n";
	$xml_output .= "\t\t<collectionBtnImage posX='580' posY='580'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['collectionBtnImage']."]]></collectionBtnImage>\n";
	$xml_output .= "\t\t<catalogueHeadingTxt posX='50' posY='1100'><![CDATA[".$roadsterselectioninfo['catalogueHeadingTxt']."]]></catalogueHeadingTxt>\n";
	$xml_output .= "\t\t<catalogueTxt posX='20' posY='1180'><![CDATA[".$roadsterselectioninfo['catalogueTxt']."]]></catalogueTxt>\n";
	$xml_output .= "\t\t<catalogueBtnImage posX='20' posY='1390'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['catalogueBtnImage']."]]></catalogueBtnImage>\n";
	$xml_output .= "</roadSterSlection>\n";
	
	$xml_output .= "<listVidew>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<headingTxt posX='150' posY='20'><![CDATA[".$listvideoinfo['headingTxt']."]]></headingTxt>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<sortBtnImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['sortBtnImage']."]]></sortBtnImage>\n";
	$xml_output .= "\t\t<sortRollBtnImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['sortRollBtnImage']."]]></sortRollBtnImage>\n";
	$xml_output .= "\t\t<filterBtnImage posX='542' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['filterBtnImage']."]]></filterBtnImage>\n";
	$xml_output .= "\t\t<filterRollBtnImage posX='542' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['filterRollBtnImage']."]]></filterRollBtnImage>\n";
	$xml_output .= "\t\t<myntralogoImage posX='440' posY='20'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['myntralogoImage']."]]></myntralogoImage>\n";
	$xml_output .= "\t\t<blackbgImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['blackbgImage']."]]></blackbgImage>\n";
	$xml_output .= "\t\t<imageGalleryPos posX='20' posY='241'></imageGalleryPos>\n";
	$xml_output .= "</listVidew>\n";
	
	$xml_output .= "<sortby posX='270' posY='800'>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$sortbyinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='500' posY='20'><![CDATA[".$asset_path."sortBy/".$type."/".$sortbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<sortList>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option1']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option2']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option3']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option4']."]]></listText>\n"; 
	$xml_output .= "\t\t</sortList>\n"; 
	$xml_output .= "</sortby>\n";
	
	$xml_output .= "<filterby posX='170' posY='500'>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$filterbyinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='700' posY='15'><![CDATA[".$asset_path."filterBy/".$type."/".$filterbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<clearButton posX='0' posY='800' width='384' height='100'><![CDATA[".$filterbyinfo['clearButton']."]]></clearButton>\n"; 
	$xml_output .= "\t\t<applyButton posX='385' posY='800' width='384' height='100'><![CDATA[".$filterbyinfo['applyButton']."]]></applyButton>\n"; 
	$xml_output .= "\t\t<filterList>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option1']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option2']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option3']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option4']."]]></listText>\n"; 
	$xml_output .= "\t\t</filterList>\n"; 
	$xml_output .= "</filterby>\n";
	
	$xml_output .= "<productDesc>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<myntralogoImage posX='300' posY='10'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['myntralogoImage']."]]></myntralogoImage>\n";
	$xml_output .= "\t\t<getProdBtn posX='109.75' posY='1270'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['getProdBtn']."]]></getProdBtn>\n";
	$xml_output .= "\t\t<relatedProdHeadingTxt posX='385' posY='1425'><![CDATA[".$productdescinfo['relatedProdHeadingTxt']."]]></relatedProdHeadingTxt>\n";
	$xml_output .= "\t\t<descTxtHeading posX='150' posY='20'><![CDATA[".$productdescinfo['descTxtHeading']."]]></descTxtHeading>\n";
	$xml_output .= "\t\t<colorSelectionHeading><![CDATA[".$productdescinfo['colorSelectionHeading']."]]></colorSelectionHeading>\n";
	$xml_output .= "\t\t<sizeSelectionHeading><![CDATA[".$productdescinfo['sizeSelectionHeading']."]]></sizeSelectionHeading>\n";
	$xml_output .= "\t\t<notsureHeading><![CDATA[".$productdescinfo['notsureHeading']."]]></notsureHeading>\n";
	$xml_output .= "\t\t<closeImageButton posX='1000' posY='20'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['closeImageButton']."]]></closeImageButton>\n";
	$xml_output .= "\t\t<sizePopupHeadingTxt><![CDATA[".$productdescinfo['sizePopupHeadingTxt']."]]></sizePopupHeadingTxt>\n";
	$xml_output .= "\t\t<sizePopupFirstTabTxt><![CDATA[".$productdescinfo['sizePopupFirstTabTxt']."]]></sizePopupFirstTabTxt>\n";
	$xml_output .= "\t\t<prodUrl><![CDATA[".$productdescinfo['prodUrl']."]]></prodUrl>\n";
	$xml_output .= "\t\t<sizeUrl><![CDATA[".$productdescinfo['sizeUrl']."]]></sizeUrl>\n";
	$xml_output .= "\t\t<nextbuttonImage posX='940' posY='1000'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['nextbuttonImage']."]]></nextbuttonImage>\n";
	$xml_output .= "\t\t<backbuttonImage posX='0' posY='1000'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['backbtnImage']."]]></backbuttonImage>\n";
	$xml_output .= "</productDesc>\n"; 
	
	$xml_output .= "<license>\n"; 
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."license/".$type."/".$licenseinfo['topBarImage']."]]></topBarImage>\n"; 
	$xml_output .= "\t\t<headingTxt posX='380' posY='100'><![CDATA[".$licenseinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='70'><![CDATA[".$asset_path."license/".$type."/".$licenseinfo['BackbuttonImage']."]]></BackbuttonImage>\n"; 
	$xml_output .= "\t\t<tabs posX='40' posY='250'>\n"; 
	$xml_output .= "\t\t\t<tab name='A. LICENSE TERMS'><![CDATA[".$licenseinfo['tab1']."]]></tab>\n"; 
	$xml_output .= "\t\t\t<tab name='B. TERMS AND CONDITIONS'><![CDATA[".$licenseinfo['tab2']."]]></tab>\n"; 
	$xml_output .= "\t\t\t<tab name='C. PRIVACY POLICY'><![CDATA[".$licenseinfo['tab3']."]]></tab>\n"; 
	$xml_output .= "\t\t</tabs>\n"; 
	$xml_output .= "</license>\n";
	
	$xml_output .= "<smssent>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$smssentinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='60' posY='500'><![CDATA[".$asset_path."sendSMS/".$type."/".$smssentinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<bodyTxt><![CDATA[".$smssentinfo['bodyTxt']."]]></bodyTxt>\n"; 
	$xml_output .= "\t\t<button1><![CDATA[".$smssentinfo['button1']."]]></button1>\n"; 
	$xml_output .= "\t\t<button2><![CDATA[".$smssentinfo['button2']."]]></button2>\n"; 
	$xml_output .= "</smssent>\n"; 
	
	$xml_output .= "</config>\n"; 
}
else if($type == "motogp")
{
	$xml_output = "<?xml version=\"1.0\"?>\n"; 
	$xml_output .= "<config>\n";
	$xml_output .= "<ModuleType><![CDATA[".$type."]]></ModuleType>\n";
	$xml_output .= "<jsonProdFilters><![CDATA[".$configURLInfo['jsonProdFilters']."]]></jsonProdFilters>\n";
	$xml_output .= "<jsonProdLooks><![CDATA[".$configURLInfo['jsonProdLooks']."]]></jsonProdLooks>\n";
	$xml_output .= "<rowCounts>".$configURLInfo['rowCounts']."</rowCounts>\n";
	$xml_output .= "<timeOutSec>".$configURLInfo['timeOutSec']."</timeOutSec>\n";
	$xml_output .= "<productType>".$configURLInfo['productType']."</productType>\n";
	
	$xml_output .= "<screensaver>\n";
	$xml_output .= "\t\t<bgPath posX='0' posY='0' width='1080' height='1920'><![CDATA[".$asset_path."screensaver/".$type."/".$screensaverinfo['bgPath']."]]></bgPath>\n";
	$xml_output .= "\t\t<exploreBtnPath posX='300' posY='1400'><![CDATA[".$asset_path."screensaver/".$type."/".$screensaverinfo['exploreBtnPath']."]]></exploreBtnPath>\n";
	$xml_output .= "</screensaver>\n";
	
	$xml_output .= "<collectionVideo>\n";
	$xml_output .= "\t\t<bgPath posX='0' posY='0' transparency='.9'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['bgPath']."]]></bgPath>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<scrtext posX='250' posY='1100' width='550' height='670'><![CDATA[".$collectionvideoinfo['scrtext']."]]></scrtext>\n";
	$xml_output .= "\t\t<insttext posX='250' posY='950' width='750' height='400'><![CDATA[".$collectionvideoinfo['insttext']."]]></insttext>\n";
	$xml_output .= "\t\t<screenvideo posX='40' posY='200' width='1000' height='800'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['screen_video']."]]></screenvideo>\n";
	//$xml_output .= "\t\t<outLandervideo posX='150' posY='750' width='800' height='600'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['outLandervideo']."]]></outLandervideo>\n";
	$xml_output .= "\t\t<buttonImage posX='270' posY='1600'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['buttonImage']."]]></buttonImage>\n";
	$xml_output .= "\t\t<closeImageButton posX='950' posY='150'><![CDATA[".$asset_path."collectionvideo/".$type."/".$collectionvideoinfo['closeImageButton']."]]></closeImageButton>\n";
	$xml_output .= "</collectionVideo>\n";
	
	$xml_output .= "<roadSterSlection>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<collectionMenImage posX='0' posY='260'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['collectionMenImage']."]]></collectionMenImage>\n";
	$xml_output .= "\t\t<catalogueMenImage posX='443' posY='1000'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['catalogueMenImage']."]]></catalogueMenImage>\n";
	$xml_output .= "\t\t<collectionWomenImage posX='0' posY='260'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['collectionWomenImage']."]]></collectionWomenImage>\n";
	$xml_output .= "\t\t<catalogueWomenImage posX='443' posY='1000'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['catalogueWomenImage']."]]></catalogueWomenImage>\n";
	$xml_output .= "\t\t<collectionHeadingTxt posX='650' posY='330'><![CDATA[".$roadsterselectioninfo['collectionHeadingTxt']."]]></collectionHeadingTxt>\n";
	$xml_output .= "\t\t<collectionTxt posX='650' posY='400'><![CDATA[".$roadsterselectioninfo['collectionTxt']."]]></collectionTxt>\n";
	$xml_output .= "\t\t<collectionBtnImage posX='630' posY='580'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['collectionBtnImage']."]]></collectionBtnImage>\n";
	$xml_output .= "\t\t<catalogueHeadingTxt posX='50' posY='1100'><![CDATA[".$roadsterselectioninfo['catalogueHeadingTxt']."]]></catalogueHeadingTxt>\n";
	$xml_output .= "\t\t<catalogueTxt posX='50' posY='1180'><![CDATA[".$roadsterselectioninfo['catalogueTxt']."]]></catalogueTxt>\n";
	$xml_output .= "\t\t<catalogueBtnImage posX='50' posY='1390'><![CDATA[".$asset_path."roadsterselection/".$type."/".$roadsterselectioninfo['catalogueBtnImage']."]]></catalogueBtnImage>\n";
	$xml_output .= "</roadSterSlection>\n";
	
	$xml_output .= "<listVidew>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<headingTxt posX='150' posY='20'><![CDATA[".$listvideoinfo['headingTxt']."]]></headingTxt>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<sortBtnImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['sortBtnImage']."]]></sortBtnImage>\n";
	$xml_output .= "\t\t<sortRollBtnImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['sortRollBtnImage']."]]></sortRollBtnImage>\n";
	$xml_output .= "\t\t<filterBtnImage posX='542' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['filterBtnImage']."]]></filterBtnImage>\n";
	$xml_output .= "\t\t<filterRollBtnImage posX='542' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['filterRollBtnImage']."]]></filterRollBtnImage>\n";
	$xml_output .= "\t\t<myntralogoImage posX='440' posY='20'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['myntralogoImage']."]]></myntralogoImage>\n";
	$xml_output .= "\t\t<blackbgImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['blackbgImage']."]]></blackbgImage>\n";
	$xml_output .= "\t\t<imageGalleryPos posX='20' posY='241'></imageGalleryPos>\n";
	$xml_output .= "</listVidew>\n";
	
	$xml_output .= "<sortby posX='270' posY='800'>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$sortbyinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='500' posY='20'><![CDATA[".$asset_path."sortBy/".$type."/".$sortbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<sortList>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option1']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option2']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option3']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option4']."]]></listText>\n"; 
	$xml_output .= "\t\t</sortList>\n"; 
	$xml_output .= "</sortby>\n";
	
	$xml_output .= "<filterby posX='170' posY='500'>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$filterbyinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='700' posY='15'><![CDATA[".$asset_path."filterBy/".$type."/".$filterbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<clearButton posX='0' posY='800' width='384' height='100'><![CDATA[".$filterbyinfo['clearButton']."]]></clearButton>\n"; 
	$xml_output .= "\t\t<applyButton posX='385' posY='800' width='384' height='100'><![CDATA[".$filterbyinfo['applyButton']."]]></applyButton>\n"; 
	$xml_output .= "\t\t<filterList>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option1']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option2']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option3']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option4']."]]></listText>\n"; 
	$xml_output .= "\t\t</filterList>\n"; 
	$xml_output .= "</filterby>\n";
	
	$xml_output .= "<productDesc>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<myntralogoImage posX='300' posY='10'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['myntralogoImage']."]]></myntralogoImage>\n";
	$xml_output .= "\t\t<getProdBtn posX='109.75' posY='1270'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['getProdBtn']."]]></getProdBtn>\n";
	$xml_output .= "\t\t<relatedProdHeadingTxt posX='385' posY='1425'><![CDATA[".$productdescinfo['relatedProdHeadingTxt']."]]></relatedProdHeadingTxt>\n";
	$xml_output .= "\t\t<descTxtHeading posX='150' posY='20'><![CDATA[".$productdescinfo['descTxtHeading']."]]></descTxtHeading>\n";
	$xml_output .= "\t\t<colorSelectionHeading><![CDATA[".$productdescinfo['colorSelectionHeading']."]]></colorSelectionHeading>\n";
	$xml_output .= "\t\t<sizeSelectionHeading><![CDATA[".$productdescinfo['sizeSelectionHeading']."]]></sizeSelectionHeading>\n";
	$xml_output .= "\t\t<notsureHeading><![CDATA[".$productdescinfo['notsureHeading']."]]></notsureHeading>\n";
	$xml_output .= "\t\t<closeImageButton posX='1000' posY='20'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['closeImageButton']."]]></closeImageButton>\n";
	$xml_output .= "\t\t<sizePopupHeadingTxt><![CDATA[".$productdescinfo['sizePopupHeadingTxt']."]]></sizePopupHeadingTxt>\n";
	$xml_output .= "\t\t<sizePopupFirstTabTxt><![CDATA[".$productdescinfo['sizePopupFirstTabTxt']."]]></sizePopupFirstTabTxt>\n";
	$xml_output .= "\t\t<prodUrl><![CDATA[".$productdescinfo['prodUrl']."]]></prodUrl>\n";
	$xml_output .= "\t\t<sizeUrl><![CDATA[".$productdescinfo['sizeUrl']."]]></sizeUrl>\n";
	$xml_output .= "\t\t<nextbuttonImage posX='940' posY='1000'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['nextbuttonImage']."]]></nextbuttonImage>\n";
	$xml_output .= "\t\t<backbuttonImage posX='0' posY='1000'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['backbtnImage']."]]></backbuttonImage>\n";
	$xml_output .= "</productDesc>\n"; 
	
	$xml_output .= "<license>\n"; 
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."license/".$type."/".$licenseinfo['topBarImage']."]]></topBarImage>\n"; 
	$xml_output .= "\t\t<headingTxt posX='380' posY='100'><![CDATA[".$licenseinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='70'><![CDATA[".$asset_path."license/".$type."/".$licenseinfo['BackbuttonImage']."]]></BackbuttonImage>\n"; 
	$xml_output .= "\t\t<tabs posX='40' posY='250'>\n"; 
	$xml_output .= "\t\t\t<tab name='A. LICENSE TERMS'><![CDATA[".$licenseinfo['tab1']."]]></tab>\n"; 
	$xml_output .= "\t\t\t<tab name='B. TERMS AND CONDITIONS'><![CDATA[".$licenseinfo['tab2']."]]></tab>\n"; 
	$xml_output .= "\t\t\t<tab name='C. PRIVACY POLICY'><![CDATA[".$licenseinfo['tab3']."]]></tab>\n"; 
	$xml_output .= "\t\t</tabs>\n"; 
	$xml_output .= "</license>\n"; 
	
	$xml_output .= "<smssent>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$smssentinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='60' posY='500'><![CDATA[".$asset_path."sendSMS/".$type."/".$smssentinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<bodyTxt><![CDATA[".$smssentinfo['bodyTxt']."]]></bodyTxt>\n"; 
	$xml_output .= "\t\t<button1><![CDATA[".$smssentinfo['button1']."]]></button1>\n"; 
	$xml_output .= "\t\t<button2><![CDATA[".$smssentinfo['button2']."]]></button2>\n"; 
	$xml_output .= "</smssent>\n"; 
	
	$xml_output .= "</config>\n"; 
}
else if($type == "catalogue")
{
	$xml_output = "<?xml version=\"1.0\"?>\n"; 
	$xml_output .= "<config>\n";
	$xml_output .= "<ModuleType><![CDATA[".$type."]]></ModuleType>\n";
	$xml_output .= "<jsonProdFilters><![CDATA[".$configURLInfo['jsonProdFilters']."]]></jsonProdFilters>\n";
	//$xml_output .= "<jsonProdLooks><![CDATA[".$configURLInfo['jsonProdLooks']."]]></jsonProdLooks>\n";
	$xml_output .= "<rowCounts>".$configURLInfo['rowCounts']."</rowCounts>\n";
	$xml_output .= "<timeOutSec>".$configURLInfo['timeOutSec']."</timeOutSec>\n";
	$xml_output .= "<productType>".$configURLInfo['productType']."</productType>\n";
	
	$xml_output .= "<screensaver>\n";
	$xml_output .= "\t\t<bgPath posX='0' posY='0' width='1080' height='1920'><![CDATA[".$asset_path."screensaver/".$type."/".$screensaverinfo['bgPath']."]]></bgPath>\n";
	$xml_output .= "\t\t<exploreBtnPath posX='300' posY='1400'><![CDATA[".$asset_path."screensaver/".$type."/".$screensaverinfo['exploreBtnPath']."]]></exploreBtnPath>\n";
	$xml_output .= "</screensaver>\n";
	
	$xml_output .= "<genderSelection>\n";
	$xml_output .= "\t\t<image1 posX='0' posY='0'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image1']."]]></image1>\n";
	$xml_output .= "\t\t<image2 posX='0' posY='960'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image2']."]]></image2>\n";
	$xml_output .= "\t\t<thunderimage posX='0' posY='950'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['thunderImage']."]]></thunderimage>\n";
	$xml_output .= "\t\t<image1Disabled posX='0' posY='0'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image1Disabled']."]]></image1Disabled>\n";
	$xml_output .= "\t\t<image2Disabled posX='0' posY='960'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image2Disabled']."]]></image2Disabled>\n";
	$xml_output .= "</genderSelection>\n";
	
	
	$xml_output .= "<listVidew>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<headingTxt posX='150' posY='20'><![CDATA[".$listvideoinfo['headingTxt']."]]></headingTxt>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<sortBtnImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['sortBtnImage']."]]></sortBtnImage>\n";
	$xml_output .= "\t\t<sortRollBtnImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['sortRollBtnImage']."]]></sortRollBtnImage>\n";
	$xml_output .= "\t\t<filterBtnImage posX='542' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['filterBtnImage']."]]></filterBtnImage>\n";
	$xml_output .= "\t\t<filterRollBtnImage posX='542' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['filterRollBtnImage']."]]></filterRollBtnImage>\n";
	$xml_output .= "\t\t<myntralogoImage posX='440' posY='20'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['myntralogoImage']."]]></myntralogoImage>\n";
	$xml_output .= "\t\t<blackbgImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['blackbgImage']."]]></blackbgImage>\n";
	$xml_output .= "\t\t<imageGalleryPos posX='20' posY='241'></imageGalleryPos>\n";
	$xml_output .= "</listVidew>\n";
	
	$xml_output .= "<sortby posX='270' posY='800'>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$sortbyinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='500' posY='20'><![CDATA[".$asset_path."sortBy/".$type."/".$sortbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<sortList>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option1']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option2']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option3']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option4']."]]></listText>\n"; 
	$xml_output .= "\t\t</sortList>\n"; 
	$xml_output .= "</sortby>\n";
	
	$xml_output .= "<filterby posX='170' posY='500'>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$filterbyinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='700' posY='15'><![CDATA[".$asset_path."filterBy/".$type."/".$filterbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<clearButton posX='0' posY='800' width='384' height='100'><![CDATA[".$filterbyinfo['clearButton']."]]></clearButton>\n"; 
	$xml_output .= "\t\t<applyButton posX='385' posY='800' width='384' height='100'><![CDATA[".$filterbyinfo['applyButton']."]]></applyButton>\n"; 
	$xml_output .= "\t\t<filterList>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option1']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option2']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option3']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option4']."]]></listText>\n"; 
	$xml_output .= "\t\t</filterList>\n"; 
	$xml_output .= "</filterby>\n";
	
	$xml_output .= "<productDesc>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<myntralogoImage posX='300' posY='10'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['myntralogoImage']."]]></myntralogoImage>\n";
	$xml_output .= "\t\t<getProdBtn posX='109.75' posY='1270'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['getProdBtn']."]]></getProdBtn>\n";
	$xml_output .= "\t\t<relatedProdHeadingTxt posX='385' posY='1425'><![CDATA[".$productdescinfo['relatedProdHeadingTxt']."]]></relatedProdHeadingTxt>\n";
	$xml_output .= "\t\t<descTxtHeading posX='150' posY='20'><![CDATA[".$productdescinfo['descTxtHeading']."]]></descTxtHeading>\n";
	$xml_output .= "\t\t<colorSelectionHeading><![CDATA[".$productdescinfo['colorSelectionHeading']."]]></colorSelectionHeading>\n";
	$xml_output .= "\t\t<sizeSelectionHeading><![CDATA[".$productdescinfo['sizeSelectionHeading']."]]></sizeSelectionHeading>\n";
	$xml_output .= "\t\t<notsureHeading><![CDATA[".$productdescinfo['notsureHeading']."]]></notsureHeading>\n";
	$xml_output .= "\t\t<closeImageButton posX='1000' posY='20'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['closeImageButton']."]]></closeImageButton>\n";
	$xml_output .= "\t\t<sizePopupHeadingTxt><![CDATA[".$productdescinfo['sizePopupHeadingTxt']."]]></sizePopupHeadingTxt>\n";
	$xml_output .= "\t\t<sizePopupFirstTabTxt><![CDATA[".$productdescinfo['sizePopupFirstTabTxt']."]]></sizePopupFirstTabTxt>\n";
	$xml_output .= "\t\t<prodUrl><![CDATA[".$productdescinfo['prodUrl']."]]></prodUrl>\n";
	$xml_output .= "\t\t<sizeUrl><![CDATA[".$productdescinfo['sizeUrl']."]]></sizeUrl>\n";
	$xml_output .= "\t\t<nextbuttonImage posX='940' posY='1000'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['nextbuttonImage']."]]></nextbuttonImage>\n";
	$xml_output .= "\t\t<backbuttonImage posX='0' posY='1000'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['backbtnImage']."]]></backbuttonImage>\n";
	$xml_output .= "</productDesc>\n"; 
	
	$xml_output .= "<license>\n"; 
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."license/".$type."/".$licenseinfo['topBarImage']."]]></topBarImage>\n"; 
	$xml_output .= "\t\t<headingTxt posX='380' posY='100'><![CDATA[".$licenseinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='70'><![CDATA[".$asset_path."license/".$type."/".$licenseinfo['BackbuttonImage']."]]></BackbuttonImage>\n"; 
	$xml_output .= "\t\t<tabs posX='40' posY='250'>\n"; 
	$xml_output .= "\t\t\t<tab name='A. LICENSE TERMS'><![CDATA[".$licenseinfo['tab1']."]]></tab>\n"; 
	$xml_output .= "\t\t\t<tab name='B. TERMS AND CONDITIONS'><![CDATA[".$licenseinfo['tab2']."]]></tab>\n"; 
	$xml_output .= "\t\t\t<tab name='C. PRIVACY POLICY'><![CDATA[".$licenseinfo['tab3']."]]></tab>\n"; 
	$xml_output .= "\t\t</tabs>\n"; 
	$xml_output .= "</license>\n";
	
	$xml_output .= "<smssent>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$smssentinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='60' posY='500'><![CDATA[".$asset_path."sendSMS/".$type."/".$smssentinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<bodyTxt><![CDATA[".$smssentinfo['bodyTxt']."]]></bodyTxt>\n"; 
	$xml_output .= "\t\t<button1><![CDATA[".$smssentinfo['button1']."]]></button1>\n"; 
	$xml_output .= "\t\t<button2><![CDATA[".$smssentinfo['button2']."]]></button2>\n"; 
	$xml_output .= "</smssent>\n"; 
	
	$xml_output .= "</config>\n"; 	
}
else if($type == "roadster")
{
	$xml_output = "<?xml version=\"1.0\"?>\n"; 
	$xml_output .= "<config>\n";
	$xml_output .= "<ModuleType><![CDATA[".$type."]]></ModuleType>\n";
	$xml_output .= "<jsonProdFilters><![CDATA[".$configURLInfo['jsonProdFilters']."]]></jsonProdFilters>\n";
	//$xml_output .= "<jsonProdLooks><![CDATA[".$configURLInfo['jsonProdLooks']."]]></jsonProdLooks>\n";
	$xml_output .= "<rowCounts>".$configURLInfo['rowCounts']."</rowCounts>\n";
	$xml_output .= "<timeOutSec>".$configURLInfo['timeOutSec']."</timeOutSec>\n";
	$xml_output .= "<productType>".$configURLInfo['productType']."</productType>\n";
	
	$xml_output .= "<screensaver>\n";
	$xml_output .= "\t\t<bgPath posX='0' posY='0' width='1080' height='1920'><![CDATA[".$asset_path."screensaver/".$type."/".$screensaverinfo['bgPath']."]]></bgPath>\n";
	$xml_output .= "\t\t<exploreBtnPath posX='300' posY='1400'><![CDATA[".$asset_path."screensaver/".$type."/".$screensaverinfo['exploreBtnPath']."]]></exploreBtnPath>\n";
	$xml_output .= "</screensaver>\n";
	
	$xml_output .= "<genderSelection>\n";
	$xml_output .= "\t\t<image1 posX='0' posY='0'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image1']."]]></image1>\n";
	$xml_output .= "\t\t<image2 posX='0' posY='960'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image2']."]]></image2>\n";
	$xml_output .= "\t\t<thunderimage posX='0' posY='950'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['thunderImage']."]]></thunderimage>\n";
	$xml_output .= "\t\t<image1Disabled posX='0' posY='0'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image1Disabled']."]]></image1Disabled>\n";
	$xml_output .= "\t\t<image2Disabled posX='0' posY='960'><![CDATA[".$asset_path."genderSelection/".$type."/".$genderselectioninfo['image2Disabled']."]]></image2Disabled>\n";
	$xml_output .= "</genderSelection>\n";
	
	$xml_output .= "<listVidew>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<headingTxt posX='150' posY='20'><![CDATA[".$listvideoinfo['headingTxt']."]]></headingTxt>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<sortBtnImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['sortBtnImage']."]]></sortBtnImage>\n";
	$xml_output .= "\t\t<sortRollBtnImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['sortRollBtnImage']."]]></sortRollBtnImage>\n";
	$xml_output .= "\t\t<filterBtnImage posX='542' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['filterBtnImage']."]]></filterBtnImage>\n";
	$xml_output .= "\t\t<filterRollBtnImage posX='542' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['filterRollBtnImage']."]]></filterRollBtnImage>\n";
	$xml_output .= "\t\t<myntralogoImage posX='440' posY='20'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['myntralogoImage']."]]></myntralogoImage>\n";
	$xml_output .= "\t\t<blackbgImage posX='0' posY='109'><![CDATA[".$asset_path."listvideo/".$type."/".$listvideoinfo['blackbgImage']."]]></blackbgImage>\n";
	$xml_output .= "\t\t<imageGalleryPos posX='20' posY='241'></imageGalleryPos>\n";
	$xml_output .= "</listVidew>\n";
	
	$xml_output .= "<sortby posX='270' posY='800'>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$sortbyinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='500' posY='20'><![CDATA[".$asset_path."sortBy/".$type."/".$sortbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<sortList>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option1']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option2']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option3']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option4']."]]></listText>\n"; 
	$xml_output .= "\t\t</sortList>\n"; 
	$xml_output .= "</sortby>\n";
	
	$xml_output .= "<filterby posX='170' posY='500'>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$filterbyinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='700' posY='15'><![CDATA[".$asset_path."filterBy/".$type."/".$filterbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<clearButton posX='0' posY='800' width='384' height='100'><![CDATA[".$filterbyinfo['clearButton']."]]></clearButton>\n"; 
	$xml_output .= "\t\t<applyButton posX='385' posY='800' width='384' height='100'><![CDATA[".$filterbyinfo['applyButton']."]]></applyButton>\n"; 
	$xml_output .= "\t\t<filterList>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option1']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option2']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option3']."]]></listText>\n"; 
	$xml_output .= "\t\t\t<listText><![CDATA[".$filterbyinfo['option4']."]]></listText>\n"; 
	$xml_output .= "\t\t</filterList>\n"; 
	$xml_output .= "</filterby>\n";
	
	$xml_output .= "<productDesc>\n";
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['topBarImage']."]]></topBarImage>\n";
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='20'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
	$xml_output .= "\t\t<homebuttonImage posX='940' posY='10'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['homebuttonImage']."]]></homebuttonImage>\n";
	$xml_output .= "\t\t<myntralogoImage posX='300' posY='10'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['myntralogoImage']."]]></myntralogoImage>\n";
	$xml_output .= "\t\t<getProdBtn posX='109.75' posY='1270'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['getProdBtn']."]]></getProdBtn>\n";
	$xml_output .= "\t\t<relatedProdHeadingTxt posX='385' posY='1425'><![CDATA[".$productdescinfo['relatedProdHeadingTxt']."]]></relatedProdHeadingTxt>\n";
	$xml_output .= "\t\t<descTxtHeading posX='150' posY='20'><![CDATA[".$productdescinfo['descTxtHeading']."]]></descTxtHeading>\n";
	$xml_output .= "\t\t<colorSelectionHeading><![CDATA[".$productdescinfo['colorSelectionHeading']."]]></colorSelectionHeading>\n";
	$xml_output .= "\t\t<sizeSelectionHeading><![CDATA[".$productdescinfo['sizeSelectionHeading']."]]></sizeSelectionHeading>\n";
	$xml_output .= "\t\t<notsureHeading><![CDATA[".$productdescinfo['notsureHeading']."]]></notsureHeading>\n";
	$xml_output .= "\t\t<closeImageButton posX='1000' posY='20'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['closeImageButton']."]]></closeImageButton>\n";
	$xml_output .= "\t\t<sizePopupHeadingTxt><![CDATA[".$productdescinfo['sizePopupHeadingTxt']."]]></sizePopupHeadingTxt>\n";
	$xml_output .= "\t\t<sizePopupFirstTabTxt><![CDATA[".$productdescinfo['sizePopupFirstTabTxt']."]]></sizePopupFirstTabTxt>\n";
	$xml_output .= "\t\t<prodUrl><![CDATA[".$productdescinfo['prodUrl']."]]></prodUrl>\n";
	$xml_output .= "\t\t<sizeUrl><![CDATA[".$productdescinfo['sizeUrl']."]]></sizeUrl>\n";
	$xml_output .= "\t\t<nextbuttonImage posX='940' posY='1000'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['nextbuttonImage']."]]></nextbuttonImage>\n";
	$xml_output .= "\t\t<backbuttonImage posX='0' posY='1000'><![CDATA[".$asset_path."productdesc/".$type."/".$productdescinfo['backbtnImage']."]]></backbuttonImage>\n";
	$xml_output .= "</productDesc>\n"; 
	
	$xml_output .= "<license>\n"; 
	$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."license/".$type."/".$licenseinfo['topBarImage']."]]></topBarImage>\n"; 
	$xml_output .= "\t\t<headingTxt posX='380' posY='100'><![CDATA[".$licenseinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<BackbuttonImage posX='40' posY='70'><![CDATA[".$asset_path."license/".$type."/".$licenseinfo['BackbuttonImage']."]]></BackbuttonImage>\n"; 
	$xml_output .= "\t\t<tabs posX='40' posY='250'>\n"; 
	$xml_output .= "\t\t\t<tab name='A. LICENSE TERMS'><![CDATA[".$licenseinfo['tab1']."]]></tab>\n"; 
	$xml_output .= "\t\t\t<tab name='B. TERMS AND CONDITIONS'><![CDATA[".$licenseinfo['tab2']."]]></tab>\n"; 
	$xml_output .= "\t\t\t<tab name='C. PRIVACY POLICY'><![CDATA[".$licenseinfo['tab3']."]]></tab>\n"; 
	$xml_output .= "\t\t</tabs>\n"; 
	$xml_output .= "</license>\n"; 
	
	$xml_output .= "<smssent>\n"; 
	$xml_output .= "\t\t<headingTxt><![CDATA[".$smssentinfo['headingTxt']."]]></headingTxt>\n"; 
	$xml_output .= "\t\t<closeImageButton posX='60' posY='500'><![CDATA[".$asset_path."sendSMS/".$type."/".$smssentinfo['closeImageButton']."]]></closeImageButton>\n"; 
	$xml_output .= "\t\t<bodyTxt><![CDATA[".$smssentinfo['bodyTxt']."]]></bodyTxt>\n"; 
	$xml_output .= "\t\t<button1><![CDATA[".$smssentinfo['button1']."]]></button1>\n"; 
	$xml_output .= "\t\t<button2><![CDATA[".$smssentinfo['button2']."]]></button2>\n"; 
	$xml_output .= "</smssent>\n"; 
	
	$xml_output .= "</config>\n"; 	
}
else
{
	$xml_output= "<error>Invalid Category</error>\n";
}
echo $xml_output;
?>