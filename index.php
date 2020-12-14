<?php
include "connexion.php" ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    
    <link rel="stylesheet" href="publique/styles.css">
        <title>Test-Covid.19 | Admin</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="images/covid19.gif" width="30" height="30" width="50" height="40" class="d-inline-block align-top" alt="" loading="lazy"> 
                    Test Covid-19
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="questions/questionnaire.php">Questions <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="questions/rendu.php">Rendu <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle btn-sm mx-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inscription
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="utilisateur/inscriptionUser.php">Utilisateur</a>
                        <a class="dropdown-item" href="medecin/inscriptionMed.php">Medecin</a>
                    </div>
                </div>

                <div action="authentification.php" class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success btn-sm" href="authentification.php" role="button"> Autehentification </a>
                </div>
            </div>
        </nav>
            <br> 


            <div class="card mb-3 mx-5">
  <img src="images/img.jpg" class="card-img-top" alt="..."  style="width:100%;height:10%;">
  <div class="card-body">
    <p class="card-text">
    Les coronavirus (CoV) sont une grande famille de virus qui provoquent des maladies qui vont du simple rhume à des maladies plus graves telles 
    que le syndrome
     respiratoire du Moyen-Orient (MERS-CoV) et le syndrome respiratoire aigu sévère (SRAS-CoV).
     Un nouveau coronavirus (nCoV) correspond à une nouvelle souche qui n'a pas été identifiée chez l'homme précédemment.

    Les coronavirus sont de type zoonotique, c'est-à-dire qu'ils sont transmis de l’animal à l’homme. Des investigations détaillées ont révélé que
    le SRAS-CoV et et le MERS-CoV étaient transmis à l’homme par les chats civettes et les dromadaires respectivement. Plusieurs coronavirus connus
    circulent chez des animaux qui n'ont pas encore infecté l'homme.

    Les signes courants de l'infection sont les symptômes respiratoires, la fièvre, la toux, l'essoufflement et les difficultés respiratoires.
    Dans les cas les plus graves, l'infection peut provoquer une pneumonie, un syndrome respiratoire aigu sévère, une insuffisance rénale et même la mort.

    Les recommandations standard pour prévenir la propagation de l'infection comprennent le lavage régulier des mains, le fait de se couvrir 
    la bouche et le nez lorsqu'on tousse et éternue, la cuisson complète de la viande et des œufs. Éviter tout contact étroit avec toute personne 
    présentant des symptômes de maladie respiratoire tels que la toux et les éternuements.
    </p>
  </div>
</div>




<div class="card-deck mx-4">
  <div class="card">
    <img src="\project\images\D‎.jpg" class="card-img-top" alt="..." style="width:300px;height:85px;"   >
    <div class="card-body">
      <h5 class="card-title">Déclaration commune de l’OMS et de l’ICMRA sur la nécessité d’une meilleure ‎harmonisation
       réglementaire mondiale sur les médicaments et les vaccins ‎contre la COVID-19‎
</h5>
      <p class="card-text">Compte tenu du grand nombre de vaccins et de traitements contre la COVID-19 en cours de développement, et de leur déploiement vraisemblablement imminent, l’Organisation mondiale de la Santé (OMS) et la International Coalition of Medicines Regulatory Authorities (ICMRA) ont uni leurs forces afin de faire respecter et de promouvoir les pratiques réglementaires fondées sur des données probantes les plus rigoureuses en appuyant l’harmonisation des processus réglementaires dans tous les pays. Comme dans d’autres domaines de lutte contre la pandémie, la coopération multilatérale entre les autorités réglementaires sera essentielle pour assurer des règles du jeu équitables, l’innocuité, l’efficacité et la qualité assurée des vaccins et des médicaments contre la COVID-19, et pour que tous les pays puissent bénéficier de ces produits de manière équitable et en même temps. Dans cette déclaration, les organisations s’engagent à entreprendre une série de mesures en ce sens. 
    L’ICMRA et l’OMS continuent d’unir leurs forces afin de faire face aux enjeux de santé mondiale sans précédent liés à la pandémie de COVID-19, touchant tant de gens dans le monde. 
     La collaboration permet de mieux aborder ces enjeux et d’assurer ainsi le respect des normes scientifiques rigoureuses d’examen et de surveillance qui sont en vigueur, tout en permettant aux patients d’avoir accès à des produits médicaux efficaces aussitôt que possible.
     Les autorités réglementaires pour les produits médicaux, notamment les médicaments et les vaccins, ont la responsabilité d’autoriser des produits ayant fait l’objet d’un contrôle de la qualité, l’innocuité et l’efficacité en se fondant sur des données solides et fiables.
     L’approbation réglementaire doit être fondée sur une évaluation scientifique indépendante de l'équilibre entre les avantages et les risques.
     Il est préférable de collecter les données robustes et fiables sur l’efficacité et la sécurité visant à appuyer l’autorisation de mise en marché des médicaments et des vaccins dans le cadre d'essais cliniques contrôlés aléatoires pour contrôler le biais, satisfaire aux normes de bonnes pratiques cliniques, respecter les droits, l’autonomie et la sécurité des participants d’essais cliniques, et permettre des vérifications.
</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="\project\images\L.jpg" class="card-img-top" alt="..."style="width:500px;height:180px;">
    <div class="card-body">
      <h5 class="card-title">L’Assemblée mondiale de la Santé fixe le cap pour combattre la COVID-19 et répondre aux priorités sanitaires mondiales</h5>
      <p class="card-text">Alors que les dirigeants de la santé s’apprêtent à participer de façon virtuelle à la reprise des débats de la Soixante-Treizième Assemblée mondiale de la Santé, l’OMS a trois messages pour le monde. 

Premièrement, nous pouvons vaincre la COVID-19 en nous appuyant sur la science, en recherchant des solutions et en faisant preuve de solidarité. 

Plus de 47 millions de cas de COVID-19 ont été signalés à l’OMS et plus de 1,2 million de personnes ont perdu la vie. 

Même si la crise est mondiale, nombre de villes et de pays sont parvenus à prévenir ou à juguler la transmission en adoptant une approche complète reposant sur les données factuelles. 

Pour la première fois, le monde s’est uni autour d’un plan visant à accélérer la mise au point des vaccins, produits de diagnostic et traitements dont nous avons besoin et à faire en sorte que tous les pays y aient accès équitablement. Le Dispositif pour accélérer l’accès aux outils de lutte contre la COVID-19 porte ses fruits. 

Deuxièmement, nous ne devons pas revoir à la baisse nos grands objectifs sanitaires. 

La pandémie de COVID-19 nous rappelle brutalement que la santé est le fondement de la stabilité sociale, économique et politique. 

Elle nous rappelle pourquoi les cibles du triple milliard de l’OMS sont si importantes et pourquoi les pays doivent s’employer à les atteindre de façon plus déterminée que jamais, en collaborant et en innovant toujours plus. 

Depuis le mois de mai, les États Membres ont adopté plusieurs décisions portant sur le Programme pour la vaccination à l’horizon 2030, la Décennie pour le vieillissement en bonne santé 2020-2030 et différentes initiatives relatives au cancer du col de l’utérus, à la tuberculose, aux soins oculaires, à la sécurité sanitaire des aliments, à la propriété intellectuelle et à la préparation en cas de grippe. 

La reprise de la session sera l’occasion d’examiner un plan de lutte contre les maladies tropicales négligées sur 10 ans ainsi que des initiatives contre la méningite, l’épilepsie et d’autres troubles neurologiques; sur l’alimentation de la mère, du nouveau-né et du jeune enfant; et sur la santé numérique et le Code de pratique mondial de l’OMS pour le recrutement international des personnels de santé, adopté en 2010. 
 </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="\project\images\Alors.jpg" class="card-img-top" alt="..."style="width:100%;height:85px;">
    <div class="card-body">
      <h5 class="card-title">Alors que la propagation de la COVID-19 accélère, le Comité d’urgence du RSI appelle à se concentrer sur les mesures qui ont un effet</h5>
      <p class="card-text">Le Comité d’urgence concernant la COVID-19 s’est réuni le 29 octobre afin d’examiner la situation et les progrès réalisés dans la mise en œuvre des recommandations provisoires. Il estime que la pandémie reste une urgence de santé publique de portée internationale et appelle à concentrer les efforts de riposte sur les enseignements tirés et sur des éléments scientifiques solides. 

Le Directeur général de l’OMS, le Dr Tedros Adhanom Ghebreyesus, a accepté les conseils du Comité, en indiquant que « l’OMS poursuivra son action avec ses partenaires dans le monde entier pour mettre en avant la science, les solutions et la solidarité. » 

Le Comité a exprimé sa gratitude pour le leadership et l’action de l’OMS tout au long de la riposte mondiale, notamment le rôle primordial que l’Organisation assume en élaborant des orientations fondées sur des éléments tangibles, en offrant aux pays une assistance technique ainsi que des fournitures et des équipements essentiels, en communiquant des informations claires et en s’attaquant aux fausses informations, de même qu’en mettant sur pied les essais cliniques Solidarity et le dispositif pour accélérer l’accès aux outils de lutte contre la COVID-19 (Accélérateur ACT). 

Le Comité a remis des conseils concrets et ciblés sur lesquels l’OMS et les pays pourront se concentrer dans les prochains mois. Il a insisté sur l’importance de mesures étayées par des éléments probants, fondées sur le risque et cohérentes en ce qui concerne les déplacements internationaux, les efforts de surveillance et de recherche des contacts, le maintien des services de santé essentiels, y compris pour la santé mentale, et la préparation des plans pour les futurs vaccins contre la COVID-19. Le Comité a exhorté les pays à éviter toute politisation de la riposte à la pandémie, qu’il considère être un obstacle majeur aux efforts mondiaux. La déclaration complète est disponible en anglais ici. 

Au moment où le Comité se réunissait pour la cinquième fois, on dénombrait au total 44 millions de cas signalés dans le monde, dont plus de 1,1 million de personnes qui ont perdu la vue du fait de la COVID-19.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
                    



   </body>  
</html>
