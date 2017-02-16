<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Xml extends CI_Controller
{

    function __construct ()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('Xml_model');
    }
	
	/* function param($parameter1 = null) 
    {
      if ($this->uri->segment(4) === FALSE)
	  {
		$type = 0;
	  }
	  else
	  {
		  $type=$this->uri->segment(4);
	  }
    }
	 */
    function index ()
    {
        /* 	if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) 
			{ */
				$did = $type=$this->uri->segment(3);
				$menu_details['session'] = $this->session->userdata;
				$getscreensaver = $this->Xml_model->getscreensaverlist($did);
				$getcollectionvideo = $this->Xml_model->getcollectionvideolist($did);
				$getgenderselection = $this->Xml_model->getgenderselectionlist($did);
				$getroadsterselection = $this->Xml_model->getroadsterselectionlist($did);
				$getlistvideo = $this->Xml_model->getlistvideolist($did);
				$getsortby = $this->Xml_model->getsortbylist($did);
				$getfilterby = $this->Xml_model->getfilterbylist($did);
				$getproductdesc = $this->Xml_model->getproductdesclist($did);
				$getlicense = $this->Xml_model->getlicenselist($did);
				$getsmssent = $this->Xml_model->getsmssentlist($did);
				
				$data['type']=urldecode(trim($this->uri->segment(3)));
				if($getscreensaver->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getscreensaver->result() as $row) 
						{
							$data['screensaverinfo'] = array(
								'bgPath' => $row->bgPath,
								'exploreBtnPath' =>$row->exploreBtnPath,
							);		
						}
				}
				if($getcollectionvideo->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getcollectionvideo->result() as $row) 
						{
							$data['collectionvideoinfo'] = array(
								'bgPath' => $row->bgPath,
								'homebuttonImage' =>$row->homebuttonImage,
								'scrtext' => $row->scrtext,
								'insttext' => $row->insttext,
								'motoGpvideo' => $row->motoGpvideo,
								'outLandervideo' => $row->outLandervideo,
								'buttonImage' => $row->buttonImage,
								'closeImageButton' => $row->closeImageButton,
							);		
						}
				}
				if($getgenderselection->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getgenderselection->result() as $row) 
						{
							$data['genderselectioninfo'] = array(
								'image1' => $row->image1,
								'image2' =>$row->image2,
								'thunderImage' => $row->thunderImage,
								'image1Disabled' => $row->image1Disabled,
								'image2Disabled' => $row->image2Disabled,
								'type' => $row->type,
								'create_date' => $row->create_date,
							);		
						}
				}
				if($getroadsterselection->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getroadsterselection->result() as $row) 
						{
							$data['roadsterselectioninfo'] = array(
								'topBarImage' => $row->topBarImage,
								'BackbuttonImage' =>$row->BackbuttonImage,
								'collectionMenImage' => $row->collectionMenImage,
								'catalogueMenImage' => $row->catalogueMenImage,
								'collectionWomenImage' => $row->collectionWomenImage,
								'catalogueWomenImage' => $row->catalogueWomenImage,
								'collectionHeadingTxt' => $row->collectionHeadingTxt,
								'collectionTxt' => $row->collectionTxt,
								'collectionBtnImage' => $row->collectionBtnImage,
								'catalogueHeadingTxt' => $row->catalogueHeadingTxt,
								'catalogueTxt' => $row->catalogueTxt,
								'type' => $row->type,
								'catalogueBtnImage' => $row->catalogueBtnImage,
							);		
						}
				}
				if($getlistvideo->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getlistvideo->result() as $row) 
						{
							$data['listvideoinfo'] = array(
								'topBarImage' => $row->topBarImage,
								'headingTxt' =>$row->headingTxt,
								'BackbuttonImage' => $row->BackbuttonImage,
								'homebuttonImage' => $row->homebuttonImage,
								'sortBtnImage' => $row->sortBtnImage,
								'sortRollBtnImage' => $row->sortRollBtnImage,
								'filterBtnImage' => $row->filterBtnImage,
								'filterRollBtnImage' => $row->filterRollBtnImage,
								'myntralogoImage' => $row->myntralogoImage,
								'blackbgImage' => $row->blackbgImage,
								'imageGalleryPos' => $row->imageGalleryPos,
							);		
						}
				}
				if($getsortby->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getsortby->result() as $row) 
						{
							$data['sortbyinfo'] = array(
								'headingTxt' => $row->headingTxt,
								'closeImageButton' =>$row->closeImageButton,
								'option1' => $row->option1,
								'option2' => $row->option2,
								'option3' => $row->option3,
								'option4' => $row->option4,
								'type' => $row->type,
							);		
						}
				}
				if($getfilterby->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getfilterby->result() as $row) 
						{
							$data['filterbyinfo'] = array(
								'headingTxt' => $row->headingTxt,
								'closeImageButton' =>$row->closeImageButton,
								'clearButton' => $row->clearButton,
								'applyButton' => $row->applyButton,
								'option1' => $row->option1,
								'option2' => $row->option2,
								'option3' => $row->option3,
								'option4' => $row->option4,
								'type' => $row->type,
							);		
						}
				}
				if($getproductdesc->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getproductdesc->result() as $row) 
						{
							$data['productdescinfo'] = array(
								'topBarImage' => $row->topBarImage,
								'BackbuttonImage' =>$row->BackbuttonImage,
								'homebuttonImage' => $row->homebuttonImage,
								'myntralogoImage' => $row->myntralogoImage,
								'getProdBtn' => $row->getProdBtn,
								'relatedProdHeadingTxt' => $row->relatedProdHeadingTxt,
								'descTxtHeading' => $row->descTxtHeading,
								'colorSelectionHeading' => $row->colorSelectionHeading,
								'sizeSelectionHeading' => $row->sizeSelectionHeading,
								'notsureHeading' =>$row->notsureHeading,
								'closeImageButton' => $row->closeImageButton,
								'sizePopupHeadingTxt' => $row->sizePopupHeadingTxt,
								'sizePopupFirstTabTxt' => $row->sizePopupFirstTabTxt,
								'prodUrl' => $row->prodUrl,
								'sizeUrl' => $row->sizeUrl,
								'nextbuttonImage' => $row->nextbuttonImage,
								'backbtnImage' => $row->backbtnImage,
							);		
						}
				}
				if($getlicense->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getlicense->result() as $row) 
						{
							$data['licenseinfo'] = array(
								'topBarImage' => $row->topBarImage,
								'headingTxt' =>$row->headingTxt,
								'BackbuttonImage' => $row->BackbuttonImage,
								'tab1' => $row->tab1,
								'tab2' => $row->tab2,
								'tab3' => $row->tab3,
								'tab4' => $row->tab4,
								'tab5' => $row->tab5,
							);		
						}
				}
				if($getsmssent->num_rows() == 1) 
				{
						// Create the data array to pass to view
						foreach ($getsmssent->result() as $row) 
						{
							$data['smssentinfo'] = array(
								'headingTxt' => $row->headingTxt,
								'closeImageButton' =>$row->closeImageButton,
								'bodyTxt' => $row->bodyTxt,
								'button1' => $row->button1,
								'button2' => $row->button2,
								'type' => $row->type,
							);		
						}
				}
				$this->load->view('xml',$data);
			}
//	}
}
