<?php
require('db_connection.php');

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
          <th>Id</th>
          <th>Nom Complete</th>
          <th>niveau d\'etudiant</th>
          <th>Niveau de francais</th>
          <th>l\'experience </th>
          <th>nom de centre apelle </th>
          <th>le temps</th>
          <th>type Activite</th>
        </tr>
        ';
        $oo= mysqli_query($conn,'select *from candidat');
      while($row = mysqli_fetch_row($oo)){ 
        $html = $html.'
        <tr>
          <td>'.$row[0].'</td>
          <td>Mouad fanine</td>
          <td>'.$row[14].'</td>
          <td>Professionnel</td>
          <td>oui</td>
          <td>IDW</td>
          <td>3 mois</td>
          <td>reception</td>
        </tr>';


      }
      /*  <tr>
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
        */
     $html =$html.' </table>';


    //   $document->loadHtml($html);

    //   $query ="
    //        SELECT selected_option
    //        from user
    //   ";
    //   $result = mysqli_query($connect,$query);
    //   while( $row = mysqli_fetch_array($result)){
    //     $output .= '
    //     <tr>
    //     <td>' .$row["full_name"].'</td>
    //     </tr>
    //     ';  
    //   }
  
   
    //   $output .= '</table>';
    //   $document->loadHtml($output);
  
      // $page = file_get_contents("#");
      // $document->loadHtml($page);
  
  echo $html;
    //   $document->setPaper('A4','landscape');
  
    //   $document->render();
  
    //   $document->stream("Webslesson", array("Attachment"=>0));


?>
