<?php
    
    if (!defined('BASEPATH'))exit('No direct script access allowed');

    class Export extends CI_Controller {

        public function __construct() {
            parent::__construct();
			$this->load->model('site');
        }
		
        public function index(){
            $data['title'] = 'Create Excel | TechArise';
            $data['result'] = $this->site->getProduct();  
            $this->load->view('export/index', $data);
        }
        
         public function generateExcelFile() {
			$result = $this->site->getProduct();			 
			$filename = time().'.xls';
			header("Content-Type: application/xls");    
			header("Content-Disposition: attachment; filename=$filename");  
			header("Pragma: no-cache"); 
			header("Expires: 0");
			
			//title header
			echo "id \t name \t price \t description \n";
			
			foreach ($result as $detail) {
				echo $detail['id'] . "\t";
				echo $detail['name'] . "\t";
				echo $detail['price'] . "\t";
				echo $detail['description']. "\n";
			}		
         }
		 
		function generateCsvFile(){
			$result = $this->site->getProduct();
			$filename = time().'.csv';
			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");

			// disposition / encoding on response body
			header("Content-Disposition: attachment;filename={$filename}");
			header("Content-Transfer-Encoding: binary");
			ob_start();
		   $df = fopen("php://output", 'w');
		   fputcsv($df, array_keys(reset($result)));
		   foreach ($result as $row) {
			  fputcsv($df, $row);
		   }
		   fclose($df);
		   echo ob_get_clean();
		}
		
		public function generatePdfFile() {
			$data = array();            
            $htmlContent='';
            $data['getInfo'] = $this->site->getProduct();
			$htmlContent = $this->load->view('export/generatepdffile', $data, TRUE);       
            $createPDFFile = time().'.pdf';
            $this->createPDF($createPDFFile, $htmlContent);
            //$this->createPDF(FCPATH.$createPDFFile, $htmlContent); //for store any project folder
         }

        
        public function createPDF($fileName,$html) {
            ob_start(); 
            // Include the main TCPDF library (search for installation path).
            $this->load->library('Maketcpdf');
            // create new PDF document
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('TechArise');
            $pdf->SetTitle('TechArise');
            $pdf->SetSubject('TechArise');
            $pdf->SetKeywords('TechArise');

            // set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

            // set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            
            $pdf->SetPrintHeader(false);
            $pdf->SetPrintFooter(false);

            // set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

            // set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, 0, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(0);
            $pdf->SetFooterMargin(0);

            // set auto page breaks
            //$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            $pdf->SetAutoPageBreak(TRUE, 0);

            // set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

            // set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                require_once(dirname(__FILE__).'/lang/eng.php');
                $pdf->setLanguageArray($l);
            }       

            // set font
            $pdf->SetFont('dejavusans', '', 10);

            // add a page
            $pdf->AddPage();

            // output the HTML content
			$pdf->writeHTML($html, true, false, true, false, '');

            // reset pointer to the last page
            $pdf->lastPage();       
            ob_end_clean();
            //Close and output PDF document
            $pdf->Output($fileName, 'D');   // 'I' for View, 'D' for Download     
        }
    }
?>