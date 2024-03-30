<?php
    
      // require_once 'dompdf/autoload.inc.php';
      require_once __DIR__.'/vendor/dompdf/dompdf/autoload.inc.php';

      //
      use Dompdf\Dompdf;
 
      $document = new Dompdf();
      $html = ' 
      <style>
      table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
      }
      
      td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
      }
      
      tr:nth-child(even) {
          background-color: #dddddd;
      }
      </style>
      <table>
        <tr>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
        </tr>
        <tr>
          <td>Ernst Handel</td>
          <td>Roland Mendel</td>
          <td>Austria</td>
        </tr>
        <tr>
          <td>Island Trading</td>
          <td>Helen Bennett</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Laughing Bacchus Winecellars</td>
          <td>Yoshi Tannamuri</td>
          <td>Canada</td>
        </tr>
        <tr>
          <td>Magazzini Alimentari Riuniti</td>
          <td>Giovanni Rovelli</td>
          <td>Italy</td>
        </tr>
      </table>
      ';

    $document->loadHtml($html);

    $connect = mysqli_connect("localhost","root","","idw_groupe");

    $query ="
         SELECT selected_option
         from user
    ";
    $result = mysqli_query($connect,$query);
    while( $row = mysqli_fetch_array($result)){
      $output .= '
      <tr>
      <td>' .$row["full_name"].'</td>
      </tr>
      ';  
    }

 
    $output .= '</table>';
    $document->loadHtml($output);

    // $page = file_get_contents("#");
    // $document->loadHtml($page);


    $document->setPaper('A4','landscape');

    $document->render();

    $document->stream("Webslesson", array("Attachment"=>0));
     ?>

<!-- require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
$html2pdf->output(); -->

