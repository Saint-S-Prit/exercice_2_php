<marquee>
Ecrire un programme qui permet de Créer un tableau Contenant les noms et les numéros des 12 mois de l'année en Français et en Anglais. Ensuite demander à l’utilisateur de choisir une langue puis vous affichez les mois sous forme de tableau HTML.
Voir l’image si dessous si l’utilisateur choisit français

</marquee>






<link rel="stylesheet" href="style.css">
<div class="choix">
    <div class="france">
        <a href="index.php?langue=1"><img src="images/france.jpg" alt=""></a>
    </div>
    <div class="anglais">
        <a href="index.php?langue=2"><img src="images/anglais.jpg" alt=""></a>
    </div>
</div>

<div class="contenu">
        <?php 


 $langues =[
                'francais' =>['janvier','février','mars','avril','mai','juin','juillet','Aout','Septembre','octobre','novembre','decembre'],
                'anglais' =>[ 'January','February','March ','April','May','June','July','August','September','October','November','Decembr ']

            ];
            echo "<table>";
                if (isset($_GET['langue'])) 
                {
                    $langue = $_GET['langue'];
                    switch ($langue)
                    {
                        case 1:
                            for ($i=0; $i < count($langues['francais']); $i+=3)
                            { 
                                echo "<tr>";
                                    for ($j=$i; $j < $i+3; $j++)
                                    { 

                                        ?>
                                            <td>
                                                 <?= $j+1?>
                                            </td>
                                            <td>
                                                <?= $langues['francais'][$j] ?>
                                            </td>

                                        <?php
                                    }
                                echo "</tr>";
                            }
                         break;
            echo "</table>"; 
                        
            
            echo "<table>"; 

                        case 2:
                                for ($i=0; $i <count($langues['anglais']) ; $i+=3)
                                { 
                                    echo "<tr>";
                                    for ($j=$i; $j < $i +3; $j++)
                                    { 
                                        ?>
                                                <td>
                                                    <?= $j+1?>
                                                </td>
                                                <td>
                                                    <?= $langues['anglais'][$j] ?>
                                                </td>

                                        <?php
                                    }
                                    echo "</tr>";
                                }
                                break;
                        
                        default:
                            echo "page invalide";
                            break;
                    }
                }
            echo "</table>";
?>
        
</div>