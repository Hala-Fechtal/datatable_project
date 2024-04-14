<!DOCTYPE html>
<html lang="fr">
<head >
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="styles.css">
  
  <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script  src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script  src="script.js"></script>
  <title>ETAT _ ARRIVEE</title>
  
</head>
<body>
    <title>ETAT _ ARRIVEE</title>
</head>
<body>
<?php require_once 'include/nav.php'?>

    <h2>ETAT _ ARRIVEE ANNEE 2024</h2>
    <hr>
    
    <!--datatable-->
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2"></div>

            <div class="col-md-8">
           


              
    <table id="example" class="table table-striped" style="width:100%">
  
    <thead>
       
      <tr>
      <th>ID</th>  
      <th>N' D'ORDRE</th>
      <th>DATE BO</th>
      <th>EXPEDITEUR</th>
      <th>N° D'ORDRE EXPEDITEUR</th>
      <th>DATE _</th>
      <th>OBJET DU _</th>
     <th>ACTIONS</th>
      </tr>
      </thead>

      <tbody>
      <?php  foreach ($matable as $ma_table): ?>
            <tr>
                <td><?= $ma_table['ID'];  ?></td>
                <td><?= $ma_table['N_ORDRE'];?></td>
                <td><?= $ma_table['DATE_BO'];?></td>
                <td><?= $ma_table['EXPEDITEUR'];?></td>
                <td><?= $ma_table['N_D_ORDRE_EXPEDITEUR'];?></td>
                <td><?= $ma_table['DATE_COURRIER']; ?></td>
                <td><?= $ma_table['OBJET_DU_COURRIER'];  ?></td>
                <td>
                    <a href="edit.php&id=<?php echo $ma_table->id?>" class="btn btn-success btn-sm">Modifier</a>
                    
                </td>
            </tr>
        <?php endforeach; ?> 
     
   


<!--

      <tbody>

      <tr>
      <td>1</td>
      <td>25509</td>
      <td>23/01/2024</td>
      <td>GOUVERNEUR NOUACEUR</td>
      <td>583</td>
      <td>23/01/2024</td>
      <td>BANQUE DE PROJETS PROVINCIAUX</td>
      <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
</td>
      </tr>

      <tr>
      <td>2</td>
      <td>25508</td>
      <td>23-janv.-24</td>
      <td>GOUVERNEUR NOUACEUR</td>
      <td>577</td>
      <td>23-janv.-24</td>
      <td>RAPPEL COLLECTE DES DONNEES PRG TERRITORIAUX</td>
      <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
      </tr>

      <tr>
      <td>3</td>
      <td>28596</td>
      <td>30-févr.-24</td>
      <td>عبد الهادي مهلديس ومن معه</td>
      <td> </td>
      <td>26-janv.-24</td>
      <td>طلب تسوية وعاء العقاري لبعض البقع بتجزئة القدس</td>
      <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
      </tr>

          <tr>
          <td>4</td>
            <td>28710</td>
            <td>07-févr-24</td>
            <td>STE SUPEMIR</td>
            <td> </td>
            <td>07-févr-24</td>
            <td>DEMANDE DE RDV AVEC LA DG</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>5</td>
            <td>28782</td>
            <td>13-févr-24</td>
            <td>DIRECTION Habitat Ain chock</td>
            <td>*25</td>
            <td>13-févr-24</td>
            <td>BILAN DES INVESTISSEMENTS PUBLICS DU IPP</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>6</td>
            <td>28805</td>
            <td>15-févr.-24</td>
            <td>GOUVERNEUR MEDIA</td>
            <td>*472</td>
            <td>15-févr.-24</td>
            <td>LOTISS SAFA TRE</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>7</td>
            <td>28807</td>
            <td>15-févr-24</td>
            <td>رئيس مجلس جماعة المحمدية </td>
            <td>*197</td>
            <td>05-févr-2024</td>
            <td>في شان هية تجهيزات لفائدة جماعة المحمدية</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>8</td>
            <td>28817</td>
            <td>16-févr-24</td>
            <td> مصطفى البريري </td>
            <td> </td>
            <td> </td>
            <td>طلب تسوية وعاء</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>9</td>
            <td >28833</td>
            <td>19-févr.-24</td>
            <td>MAITRE TOUZANI SELMA</td>
            <td> </td>
            <td>16-févr-24</td>
            <td>DEMANDE DE MAINLEVEE</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>10</td>
            <td>28848</td>
            <td>20-févr.-24</td>
            <td>GOUVERNEUR MEDIA</td>
             <td>*448</td>
            <td>14-févr.-24</td>
            <td>PRG VSB OP al bad</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>11</td>
            <td>28856</td>
            <td>21-févr-24</td>
            <td>LES VOIES DU SUD</td>
            <td> </td>
            <td>12-févr-24</td>
             <td>تذكير طلب عقد اجتماع</td>
             <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
         <tr>
         <td>12</td>
            <td >28870</td>
            <td>22-févr.-24</td>
            <td>HOA</td>
            <td>*206</td>
            <td>22-févr.-24</td>
            <td>RETARD DES PAIEMENTS FOURNISSEURS</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>13</td>
            <td>28889</td>
            <td>23-févr-24</td>
            <td>AGENCE SETTAT</td>
            <td>30/24</td>
            <td>23-févr-24</td>
            <td>DEMANDE DE MR EL MOKHTAR ESSOUNAINI</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>

          <tr>
          <td>14</td>
            <td>28990</td>
            <td>23-févr-24</td>
            <td>JC CONSULTING</td>
            <td> </td>
            <td>23-févr-24</td>
            <td>EXPERTISE TECHNIQUE OP AL BADR</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>15</td>
            <td>28892</td>
            <td>26-févr-24</td>
            <td>SAB SMART</td> 
            <td> </td>
            <td>23-févr-24</td>
           <td>DEMANDE D`ACQUISITION DU TERAI PARKING PRIVE ZONE INDUSTR SUD MEDIA </td>
           <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
        <tr>
        <td>16</td>
            <td>28897</td>
            <td>26-févr-24</td>
            <td>GOUVERNEUR MEDIA </td>
            <td>*517</td>
            <td>21-févr-24</td>
            <td>نسخة من رسالةرئيس مجلس الجماعي للشلالات</td> 
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>17</td>
            <td>28945</td>
            <td>29-févr.-24 </td>
            <td>رئيسة اتحاد ملاكي عبد المؤمن</td>
            <td> </td>
            <td>28-févr.-24 </td>
        <td>استخراج الرسوم العقارية</td>
        <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>18</td>
            <td> </td>
            <td>29-févr.-24</td>
            <td> DIRECTION REGIONALE DE L'Habitat</td>
            <td>*096</td>
            <td>28-févr.-24</td>
            <td>REALISATION DE LA SAC AU NIVEAU REGION CASA-SETTAT</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>19</td>
            <td>28936</td>
            <td>29-févr.-24</td>
            <td>مديرية الجهوية للاسكان</td>
            <td> </td> 
            <td> </td>
            <td>ملتمس السيد عثمان الكيحل</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
          <td>20</td>
            <td>28968</td>
            <td>1-mars-24</td>
            <td>MR LE WALI 3672</td>
            <td>*3672</td>
            <td>1-mars-24</td>
            <td>PROJETS DE CONVENTION SUR LES EQUIPEMENTS PUBLICS PDGC 2015-2020</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>21</td>
            <td>28958</td>
            <td>01/03/2024</td>
            <td>مديرية الجهويةبالدار البيضاء</td>
            <td>143-24</td>
            <td>26/02/2024</td>
            <td>أملاك الدولة بمديونة</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
         
          <tr>
            <td>22</td>
            <td>28959</td>
            <td>01/03/2024</td>
            <td>مديرية الجهويةبالدار البيضاء</td>
            <td>147-24</td>
            <td>27/02/2024</td>
            <td>أملاك الدولة بمديونة</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>23</td>
            <td>28978</td>
            <td>04/03/2024</td>
            <td>حسن المنار</td>
            <td> </td>
            <td> </td>
            <td>شكاية</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>24</td>
            <td>28981</td>
            <td>04/03/2024</td>
            <td>CBBM INVEST</td>
            <td> </td>
            <td> </td>
            <td>DEMANDE D'ACQUISITION SUITE AU PV DE LA COMMISSION</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>25</td>
            <td>28976</td>
            <td>04/03/2024</td>
            <td>المفتش العام وزارةالاسكان </td>
            <td>*1814</td>
            <td>28/02/2024</td>
            <td>شكاية السيد محمد منير ومن معه</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>26</td>
            <td>28993</td>
            <td>05/03/2024</td>
            <td>رئيس جمعية الأعمال الاجتماعية والمحافظة على البيئة</td>
            <td> </td>
            <td> </td>
            <td>طلب موعد</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>27</td>
            <td>28994</td>
            <td>05/03/2024</td>
            <td>GOUVERNEUR MEDIOUNA</td>
            <td>*599</td>
            <td>29/02/2024</td>
            <td>طلب تعجيل بتحويل المساهمة المالية</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>28</td>
            <td>28995</td>
            <td>05/03/2024</td>
            <td>MORBIHA IMMO</td>
            <td> </td>
            <td> </td>
            <td>DEMANDE DE REGULARISATION </td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>29</td>
            <td>29010</td>
            <td>06/03/2024</td>
            <td>مؤسسة الوسيط</td>
            <td>*324</td>
            <td>29/02/2024</td>
            <td>تظلم السيد عبد الكبير التابعي</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>30</td>
            <td>29014</td>
            <td>06/03/2024</td>
            <td>عامل مقاطعات عين السبع</td>
            <td>*1212</td>
            <td>05/03/2024</td>
            <td>حوا القطع اأرضية موضوع طلب التخصيص من طرف إدارة الأمن الوطني</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>31</td>
            <td>29024</td>
            <td>07/03/2024</td>
            <td>محامية فاطمة علولي</td>
            <td> </td>
            <td> </td>
            <td>اندار من طرف الأستاذ خالد الغنيمي</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>32</td>
            <td>29123</td>
            <td>14/03/2024</td>
            <td>MR YASSINE GASSABI</td>
            <td> </td>
            <td> </td>
            <td>RECLAMATION PB DE TF LOTIS SALAM EXT TR G/A LOT N40 HC4</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>33</td>
            <td>29124</td>
            <td>14/03/2024</td>
            <td>MR TAREK CHEIKH,,,,,</td>
            <td> </td>
            <td> </td>
            <td>RECLAMATION PB DE TF LOTIS SALAM EXT TR G/A LOT N39 HC5</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>34</td>
            <td>19131</td>
            <td>15/03/2024</td>
            <td>MR MELIANI ABDELHAFID</td>
            <td> </td>
            <td> </td>
            <td>DEMANDE DE FUSION DE 3TF</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>35</td>
            <td>29145</td>
            <td>18/03/2024</td>
            <td>STE MAROC ENGIN ET CHANTIER</td>
            <td> </td>
            <td>18/03/2024</td>
            <td>RETARD DE REGLEMENT DES DECOMPTES</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>36</td>
            <td>29146</td>
            <td>18/03/2024</td>
            <td>الأستاذة محاميد زهرة</td>
            <td> </td>
            <td> </td>
            <td>شكاية والتماس</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>37</td>
            <td>29147</td>
            <td>18/03/2024</td>
            <td>رئيس المجلس الجماعي لبنسليمان</td>
            <td> </td>
            <td> </td>
            <td>تقرير عن مشاريع مجموعة التهيئة العمران</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>38</td>
            <td>29158</td>
            <td>19/03/2024</td>
            <td>TRESORERIE GENERALE DU ROYAUME</td>
            <td> </td>
            <td> </td>
            <td>DERNIER AVIS SANS FRAIS</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>39</td>
            <td>29156</td>
            <td>19/03/2024</td>
            <td>TRESORERIE GENERALE DU ROYAUME</td>
            <td> </td>
            <td> </td>
            <td>DERNIER AVIS SANS FRAIS</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>40</td>
            <td>29160</td>
            <td>19/03/2024</td>
            <td> محمد مرجان و عبد الله عسلاق</td>
            <td> </td>
            <td> </td>
            <td>تظلم في شان عدم حصول على وثائق</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>41</td>
            <td>29159</td>
            <td>19/03/2024</td>
            <td>مدير السجن المحلي</td>
            <td>*605</td>
            <td>11/03/2024</td>
            <td>شكاية السجين يوسف الضروبي إعادة  إيواء دور الصفيح دوار حربيلي</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>42</td>
            <td>29164</td>
            <td>19/03/2024</td>
            <td>عامل مقاطعات عين السبع</td>
            <td>*1465</td>
            <td>18/03/2024</td>
            <td>حول توصيتي وسيط المملكة بتظلم عبد الواحد لتاري</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>43</td>
            <td>29162</td>
            <td>19/03/2024</td>
            <td>رئيس الملحقة الإدارية الشهداء</td>
            <td> </td>
            <td>18/03/2024</td>
            <td>شكاية السيد الوالي باسم المرصد الوطني</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>44</td>
            <td>29165</td>
            <td>19/03/2024</td>
            <td>AL OMRANE BENI MELLAL</td>
            <td>*428</td>
            <td>19/03/2024</td>
            <td>DEMANDE D'AVANCE DE FONDS</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>45</td>
            <td>29166</td>
            <td>19/03/2024</td>
            <td>MHUPV DIRECTION AFFAIRES TECHNIQUES</td>
            <td>*2358</td>
            <td>18/03/2024</td>
            <td>RECLAMATION STE BET BUILDING</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>46</td>
            <td>29179</td>
            <td>20/03/2024</td>
            <td>LES VOIES DU SUD</td>
            <td> </td>
            <td> </td>
            <td>DEMANDE D'INDEMNISATION</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>47</td>
            <td>29188</td>
            <td>21/03/2024</td>
            <td>رئيس مجلس اتحاد الوكلاء إقامة الأندلسية</td>
            <td> </td>
            <td>12/03/2024</td>
            <td>طلب لقاء</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>48</td>
            <td>29198</td>
            <td>22/03/2024</td>
            <td>MAITRE LABSIR SOUMIA</td>
            <td> </td>
            <td> </td>
            <td>RECLAMATION</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>49</td>
            <td>29204</td>
            <td>25/03/2024</td>
            <td>AG D'EL JADIDA</td>
            <td> </td>
            <td> </td>
            <td>RECLAMATION IM 10 RESIDENCE OCEAN1</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>50</td>
            <td>29215</td>
            <td>25/03/2024</td>
            <td>NOVOLIGHT</td>
            <td> </td>
            <td> </td>
            <td>DEMANDE D EXPLICATION AOO 24-24</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>51</td>
            <td>29230</td>
            <td>26/03/2024</td>
            <td>ESTAR BATIMENT</td>
            <td> </td>
            <td> </td>
            <td>RECLAMATION POUR PAIEMENT</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>52</td>
            <td>29226</td>
            <td>26/03/2024</td>
            <td>وكالة العمران بالجديدة</td>
            <td>*105وع</td>
            <td>25/03/2024</td>
            <td>طلب تسوية الوعاء العقاري بتجزئة القدس بالجديدة</td>
            <td><a href="edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>
          <tr>
            <td>53</td>
            <td>29223</td>
            <td>26/03/2024</td>
            <td>عاملاقليم برشيد</td>
            <td>*1712</td>
            <td>26/03/2024</td>
            <td>حول وضعية تقدم المشاريع المبرمجة بمدينة سيدي بنور</td>
            <td><a href="views/edit.php" class="href"> <button type="button" class="btn btn-primary">Maj</button></a></td>
          </tr>

      -->
       
        </tbody>
      </table>
     
    


</div>

</div>

</div>
</div>
