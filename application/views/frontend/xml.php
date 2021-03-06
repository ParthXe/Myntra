<?php
$asset_path = "http://".$_SERVER['HTTP_HOST']."/myntra/upload/";
header("Content-type: text/xml");
$xml_output = "<?xml version=\"1.0\"?>\n"; 
$xml_output .= "<config>\n";
$xml_output .= "<ModuleType><![CDATA[outlander]]></ModuleType>\n";
$xml_output .= "<jsonProdFilters><![CDATA[http://developer.myntra.com/v2/search/data/roadster]]></jsonProdFilters>\n";
$xml_output .= "<jsonProdLooks><![CDATA[http://192.168.1.45/myntraCore/dump.php]]></jsonProdLooks>\n";
$xml_output .= "<rowCounts>200</rowCounts>\n";
$xml_output .= "<timeOutSec>10000</timeOutSec>\n";
$xml_output .= "<screensaver>\n";
$xml_output .= "\t\t<bgPath posX='0' posY='0' width='1080' height='1920'><![CDATA[".$asset_path."screensaver/".$screensaverinfo['bgPath']."]]></bgPath>\n";
$xml_output .= "\t\t<exploreBtnPath posX='300' posY='900'><![CDATA[".$asset_path."screensaver/".$screensaverinfo['exploreBtnPath']."]]></exploreBtnPath>\n";
$xml_output .= "</screensaver>\n";
$xml_output .= "<collectionVideo>\n";
$xml_output .= "\t\t<bgPath posX='30' posY='80' transparency='.9'><![CDATA[".$asset_path."collectionvideo/".$collectionvideoinfo['bgPath']."]]></bgPath>\n";
$xml_output .= "\t\t<homebuttonImage posX='940' posY='70'><![CDATA[".$asset_path."collectionvideo/".$collectionvideoinfo['homebuttonImage']."]]></homebuttonImage>\n";
$xml_output .= "\t\t<scrtext posX='300' posY='270' width='50' height='400'><![CDATA[".$collectionvideoinfo['scrtext']."]]></scrtext>\n";
$xml_output .= "\t\t<insttext posX='100' posY='1400' width='950' height='400'><![CDATA[".$collectionvideoinfo['insttext']."]]></insttext>\n";
$xml_output .= "\t\t<motoGpvideo posX='150' posY='750' width='800' height='600'><![CDATA[".$asset_path."collectionvideo/".$collectionvideoinfo['motoGpvideo']."]]></motoGpvideo>\n";
$xml_output .= "\t\t<outLandervideo posX='150' posY='750' width='800' height='600'><![CDATA[".$asset_path."collectionvideo/".$collectionvideoinfo['outLandervideo']."]]></outLandervideo>\n";
$xml_output .= "\t\t<buttonImage posX='270' posY='1600'><![CDATA[".$asset_path."collectionvideo/".$collectionvideoinfo['buttonImage']."]]></buttonImage>\n";
$xml_output .= "\t\t<closeImageButton posX='950' posY='100'><![CDATA[".$asset_path."collectionvideo/".$collectionvideoinfo['closeImageButton']."]]></closeImageButton>\n";
$xml_output .= "</collectionVideo>\n";
$xml_output .= "<genderSelection>\n";
$xml_output .= "\t\t<image1 posX='0' posY='0'><![CDATA[".$asset_path."genderSelection/".$genderselectioninfo['image1']."]]></image1>\n";
$xml_output .= "\t\t<image2 posX='0' posY='960'><![CDATA[".$asset_path."genderSelection/".$genderselectioninfo['image2']."]]></image2>\n";
$xml_output .= "\t\t<thunderimage posX='0' posY='950'><![CDATA[".$asset_path."genderSelection/".$genderselectioninfo['thunderImage']."]]></thunderimage>\n";
$xml_output .= "\t\t<image1Disabled posX='0' posY='0'><![CDATA[".$asset_path."genderSelection/".$genderselectioninfo['image1Disabled']."]]></image1Disabled>\n";
$xml_output .= "\t\t<image2Disabled posX='0' posY='960'><![CDATA[".$asset_path."genderSelection/".$genderselectioninfo['image2Disabled']."]]></image2Disabled>\n";
$xml_output .= "</genderSelection>\n";
$xml_output .= "<roadSterSlection>\n";
$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."roadsterselection/".$roadsterselectioninfo['topBarImage']."]]></topBarImage>\n";
$xml_output .= "\t\t<BackbuttonImage posX='40' posY='70'><![CDATA[".$asset_path."roadsterselection/".$roadsterselectioninfo['BackbuttonImage']."]]></BackbuttonImage>\n";
$xml_output .= "\t\t<collectionMenImage posX='60' posY='360'><![CDATA[".$asset_path."roadsterselection/".$roadsterselectioninfo['collectionMenImage']."]]></collectionMenImage>\n";
$xml_output .= "\t\t<catalogueMenImage posX='560' posY='1100'><![CDATA[".$asset_path."roadsterselection/".$roadsterselectioninfo['catalogueMenImage']."]]></catalogueMenImage>\n";
$xml_output .= "\t\t<collectionWomenImage posX='60' posY='360'><![CDATA[".$asset_path."roadsterselection/".$roadsterselectioninfo['collectionWomenImage']."]]></collectionWomenImage>\n";
$xml_output .= "\t\t<catalogueWomenImage posX='560' posY='1100'><![CDATA[".$asset_path."roadsterselection/".$roadsterselectioninfo['catalogueWomenImage']."]]></catalogueWomenImage>\n";
$xml_output .= "\t\t<collectionHeadingTxt posX='60' posY='310'><![CDATA[".$roadsterselectioninfo['collectionHeadingTxt']."]]></collectionHeadingTxt>\n";
$xml_output .= "\t\t<collectionTxt posX='520' posY='500'><![CDATA[".$roadsterselectioninfo['collectionTxt']."]]></collectionTxt>\n";
$xml_output .= "\t\t<collectionBtnImage posX='520' posY='700'><![CDATA[".$asset_path."roadsterselection/".$roadsterselectioninfo['collectionBtnImage']."]]></collectionBtnImage>\n";
$xml_output .= "\t\t<catalogueHeadingTxt posX='560' posY='1050'><![CDATA[".$roadsterselectioninfo['catalogueHeadingTxt']."]]></catalogueHeadingTxt>\n";
$xml_output .= "\t\t<catalogueTxt posX='20' posY='1250'><![CDATA[".$roadsterselectioninfo['catalogueTxt']."]]></catalogueTxt>\n";
$xml_output .= "\t\t<catalogueBtnImage posX='20' posY='1430'><![CDATA[".$asset_path."roadsterselection/".$roadsterselectioninfo['catalogueBtnImage']."]]></catalogueBtnImage>\n";
$xml_output .= "</roadSterSlection>\n";
$xml_output .= "<listVidew>\n";
$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['topBarImage']."]]></topBarImage>\n";
$xml_output .= "\t\t<headingTxt posX='150' posY='70'>".$listvideoinfo['headingTxt']."></headingTxt>\n";
$xml_output .= "\t\t<BackbuttonImage posX='40' posY='70'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
$xml_output .= "\t\t<homebuttonImage posX='940' posY='70'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['homebuttonImage']."]]></homebuttonImage>\n";
$xml_output .= "\t\t<sortBtnImage posX='0' posY='214'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['sortBtnImage']."]]></sortBtnImage>\n";
$xml_output .= "\t\t<sortRollBtnImage posX='0' posY='214'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['sortRollBtnImage']."]]></sortRollBtnImage>\n";
$xml_output .= "\t\t<filterBtnImage posX='542' posY='214'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['filterBtnImage']."]]></filterBtnImage>\n";
$xml_output .= "\t\t<filterRollBtnImage posX='542' posY='214'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['filterRollBtnImage']."]]></filterRollBtnImage>\n";
$xml_output .= "\t\t<myntralogoImage posX='440' posY='20'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['myntralogoImage']."]]></myntralogoImage>\n";
$xml_output .= "\t\t<blackbgImage posX='0' posY='200'><![CDATA[".$asset_path."listvideo/".$listvideoinfo['blackbgImage']."]]></blackbgImage>\n";
$xml_output .= "\t\t<imageGalleryPos posX='20' posY='330'></imageGalleryPos>\n";
$xml_output .= "</listVidew>\n";
$xml_output .= "<sortby posX='270' posY='800'>\n"; 
$xml_output .= "\t\t<headingTxt><![CDATA[".$sortbyinfo['headingTxt']."]]></headingTxt>\n"; 
$xml_output .= "\t\t<closeImageButton posX='500' posY='20'><![CDATA[".$asset_path."sortBy/".$sortbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
$xml_output .= "\t\t<sortList>\n"; 
$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option1']."]]></listText>\n"; 
$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option2']."]]></listText>\n"; 
$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option3']."]]></listText>\n"; 
$xml_output .= "\t\t\t<listText><![CDATA[".$sortbyinfo['option4']."]]></listText>\n"; 
$xml_output .= "\t\t</sortList>\n"; 
$xml_output .= "</sortby>\n";
$xml_output .= "<filterby posX='170' posY='500'>\n"; 
$xml_output .= "\t\t<headingTxt><![CDATA[".$filterbyinfo['headingTxt']."]]></headingTxt>\n"; 
$xml_output .= "\t\t<closeImageButton posX='700' posY='15'><![CDATA[".$asset_path."filterBy/".$filterbyinfo['closeImageButton']."]]></closeImageButton>\n"; 
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
$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."productdesc/".$productdescinfo['topBarImage']."]]></topBarImage>\n";
$xml_output .= "\t\t<BackbuttonImage posX='40' posY='70'><![CDATA[".$asset_path."productdesc/".$productdescinfo['BackbuttonImage']."]]></BackbuttonImage>\n";
$xml_output .= "\t\t<homebuttonImage posX='940' posY='70'><![CDATA[".$asset_path."productdesc/".$productdescinfo['homebuttonImage']."]]></homebuttonImage>\n";
$xml_output .= "\t\t<myntralogoImage posX='300' posY='10'><![CDATA[".$asset_path."productdesc/".$productdescinfo['myntralogoImage']."]]></myntralogoImage>\n";
$xml_output .= "\t\t<getProdBtn posX='109.75' posY='1270'><![CDATA[".$asset_path."productdesc/".$productdescinfo['getProdBtn']."]]></getProdBtn>\n";
$xml_output .= "\t\t<relatedProdHeadingTxt posX='385' posY='1425'><![CDATA[".$productdescinfo['relatedProdHeadingTxt']."]]></relatedProdHeadingTxt>\n";
$xml_output .= "\t\t<descTxtHeading posX='540' posY='450'><![CDATA[".$productdescinfo['descTxtHeading']."]]></descTxtHeading>\n";
$xml_output .= "\t\t<colorSelectionHeading><![CDATA[".$productdescinfo['colorSelectionHeading']."]]></colorSelectionHeading>\n";
$xml_output .= "\t\t<sizeSelectionHeading><![CDATA[".$productdescinfo['sizeSelectionHeading']."]]></sizeSelectionHeading>\n";
$xml_output .= "\t\t<notsureHeading><![CDATA[".$productdescinfo['notsureHeading']."]]></notsureHeading>\n";
$xml_output .= "\t\t<closeImageButton posX='1000' posY='20'><![CDATA[".$asset_path."productdesc/".$productdescinfo['closeImageButton']."]]></closeImageButton>\n";
$xml_output .= "\t\t<sizePopupHeadingTxt><![CDATA[".$productdescinfo['sizePopupHeadingTxt']."]]></sizePopupHeadingTxt>\n";
$xml_output .= "\t\t<sizePopupFirstTabTxt><![CDATA[".$productdescinfo['sizePopupFirstTabTxt']."]]></sizePopupFirstTabTxt>\n";
$xml_output .= "\t\t<prodUrl><![CDATA[".$productdescinfo['prodUrl']."]]></prodUrl>\n";
$xml_output .= "\t\t<sizeUrl><![CDATA[".$productdescinfo['sizeUrl']."]]></sizeUrl>\n";
$xml_output .= "\t\t<nextbuttonImage posX='1040' posY='1000'><![CDATA[".$asset_path."productdesc/".$productdescinfo['nextbuttonImage']."]]></nextbuttonImage>\n";
$xml_output .= "\t\t<backbuttonImage posX='0' posY='1000'><![CDATA[".$asset_path."productdesc/".$productdescinfo['backbtnImage']."]]></backbuttonImage>\n";
$xml_output .= "</productDesc>\n"; 
$xml_output .= "<license>\n"; 
$xml_output .= "\t\t<topBarImage posX='0' posY='0'><![CDATA[".$asset_path."license/".$licenseinfo['topBarImage']."]]></topBarImage>\n"; 
$xml_output .= "\t\t<headingTxt posX='380' posY='100'><![CDATA[".$licenseinfo['headingTxt']."]]></headingTxt>\n"; 
$xml_output .= "\t\t<BackbuttonImage posX='40' posY='70'><![CDATA[".$asset_path."license/".$licenseinfo['BackbuttonImage']."]]></BackbuttonImage>\n"; 
$xml_output .= "\t\t<tabs posX='40' posY='250'>\n"; 
$xml_output .= "\t\t\t<tab name='A. LICENSE TERMS'><![CDATA[".$licenseinfo['tab1']."]]></tab>\n"; 
$xml_output .= "\t\t\t<tab name='B. TERMS AND CONDITIONS'><![CDATA[".$licenseinfo['tab2']."]]></tab>\n"; 
$xml_output .= "\t\t\t<tab name='C. PRIVACY POLICY'><![CDATA[".$licenseinfo['tab3']."]]></tab>\n"; 
$xml_output .= "\t\t</tabs>\n"; 
$xml_output .= "</license>\n"; 
$xml_output .= "<smssent>\n"; 
$xml_output .= "\t\t<headingTxt><![CDATA[".$smssentinfo['headingTxt']."]]></headingTxt>\n"; 
$xml_output .= "\t\t<closeImageButton posX='60' posY='500'><![CDATA[".$asset_path."sendSMS/".$smssentinfo['closeImageButton']."]]></closeImageButton>\n"; 
$xml_output .= "\t\t<bodyTxt><![CDATA[".$smssentinfo['bodyTxt']."]]></bodyTxt>\n"; 
$xml_output .= "\t\t<button1><![CDATA[".$smssentinfo['button1']."]]></button1>\n"; 
$xml_output .= "\t\t<button2><![CDATA[".$smssentinfo['button2']."]]></button2>\n"; 
$xml_output .= "</smssent>\n"; 
$xml_output .= "</config>\n"; 
echo $xml_output;
?>